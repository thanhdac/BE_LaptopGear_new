<?php

namespace App\Http\Controllers;

use App\Models\DonHang;
use App\Models\MonAn;
use App\Models\QuanAn;
use App\Models\Voucher;
use Illuminate\Http\Request;

class ClientHomeController extends Controller
{
    public function getDataHome()
    {
        $mon_an = MonAn::where('mon_ans.tinh_trang', 1)
                        ->where('mon_ans.gia_khuyen_mai', '>', 0)
                        ->join('quan_ans', 'quan_ans.id', 'mon_ans.id_quan_an')
                        ->select('mon_ans.*', 'quan_ans.ten_quan_an')
                        ->orderBy('mon_ans.gia_khuyen_mai')
                        ->take(12)->get();

        $quan_an_yeu_thich = QuanAn::leftjoin('don_hangs', 'don_hangs.id_quan_an','quan_ans.id')
                                    ->select('quan_ans.id', 'quan_ans.ten_quan_an', 'quan_ans.hinh_anh', 'quan_ans.dia_chi')
                                    ->groupBy('quan_ans.id', 'quan_ans.ten_quan_an', 'quan_ans.hinh_anh', 'quan_ans.dia_chi')
                                    ->take(9)
                                    ->get();

        $voucher = Voucher::where('tinh_trang', 1)
                            ->where('thoi_gian_ket_thuc', '>=', now())
                            ->take(6)
                            ->get();

        return response()->json([
            'mon_an'                => $mon_an,
            'voucher'               => $voucher,
            'quan_an_yeu_thich'     => $quan_an_yeu_thich
        ]);
    }
}
