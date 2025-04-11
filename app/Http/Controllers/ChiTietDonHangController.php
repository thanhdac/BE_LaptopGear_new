<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThemGioHangRequest;
use App\Http\Requests\TinhPhiShipRequest;
use App\Http\Requests\UpdateGioHangRequest;
use App\Models\ChiTietDonHang;
use App\Models\DiaChi;
use App\Models\MonAn;
use App\Models\QuanAn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class ChiTietDonHangController extends Controller
{
    public function getDonDatHang($id_quan_an)
    {
        $khachHang = Auth::guard('sanctum')->user();
        $quan_an     =   QuanAn::where('quan_ans.id', $id_quan_an) // quán đang lấy
                                ->where('quan_ans.tinh_trang', 1)  // Quán đang hoạt động
                                ->where('quan_ans.is_active', 1)   // Quán đã được kích hoạt
                                ->first();

        $mon_an     =   MonAn::where('mon_ans.id_quan_an', $id_quan_an)
                                ->where('mon_ans.tinh_trang', 1)  // Món ăn đang bán
                                ->get();

        $gio_hang     =   ChiTietDonHang::where('id_don_hang', 0)
                                        ->where('id_khach_hang', $khachHang->id)
                                        ->join('mon_ans', 'mon_ans.id', '=', 'chi_tiet_don_hangs.id_mon_an')
                                        ->select('chi_tiet_don_hangs.*', 'mon_ans.ten_mon_an')
                                        ->get();

        $dia_chi_khach = DiaChi::where('id_khach_hang', $khachHang->id)->get();

        if ($quan_an) {
            return response()->json([
                'quan_an'       =>  $quan_an,
                'mon_an'        =>  $mon_an,
                'gio_hang'      =>  $gio_hang,
                'dia_chi_khach' =>  $dia_chi_khach,
                'tong_tien'     =>  $gio_hang->sum('thanh_tien'),
                'status'        =>  true
            ]);
        } else {
            return response()->json([
                'status'    =>  false
            ]);
        }
    }

    public function tinhPhiShip(TinhPhiShipRequest $request)
    {
        $link_get = 'https://api.openrouteservice.org/geocode/search';
        $dia_chi_quan = QuanAn::where('id', $request->id_quan_an)->first();
        $dia_chi_khach = DiaChi::where('id', $request->id_dia_chi_khach)->first();

        $client        = new Client();

        // Lấy tọa độ quán
        $response_quan      = $client->request('GET', $link_get, [
            'headers' => [
                'User-Agent' => 'MyApp/1.0',
                'Accept'     => 'application/json',
            ],
            'query' => [
                'api_key' => '5b3ce3597851110001cf62484c960a399b1d44f4829554f302e513b8',
                'text'    => $dia_chi_quan->dia_chi,
                'size'    => 1
            ]
        ]);
        $body = $response_quan->getBody()->getContents();
        $response_quan = json_decode($body, true);
        $toa_do_quan   = $response_quan['features'][0]['geometry']['coordinates'];

        // Lấy tọa độ khách
        $response_khach      = $client->request('GET', $link_get, [
            'headers' => [
                'User-Agent' => 'MyApp/1.0',
                'Accept'     => 'application/json',
            ],
            'query' => [
                'api_key' => '5b3ce3597851110001cf62484c960a399b1d44f4829554f302e513b8',
                'text'    => $dia_chi_khach->dia_chi,
                'size'    => 1
            ]
        ]);
        $body = $response_khach->getBody()->getContents();
        $response_khach = json_decode($body, true);
        $toa_do_khach   = $response_khach['features'][0]['geometry']['coordinates'];


        return response()->json([
            'toa_do_quan'       => $toa_do_quan,
            'toa_do_khach'     => $toa_do_khach
        ]);
    }

    public function themGioHang(ThemGioHangRequest $request)
    {
        $khachHang = Auth::guard('sanctum')->user();
        $monAn     = MonAn::where('id', $request->id)->first();
        $check     = ChiTietDonHang::where('id_khach_hang', $khachHang->id)
            ->where('id_mon_an', $request->id)
            ->where('id_don_hang', 0) // Chưa có đơn hàng
            ->first();
        if ($check) {
            $check->so_luong += 1;
            $check->thanh_tien = $check->don_gia * $check->so_luong;
            $check->save();

            return response()->json([
                'status'    =>  true,
                'message'   =>  'Cập nhật số lượng món ăn thành công'
            ]);
        } else {
            ChiTietDonHang::create([
                'id_mon_an'     =>  $request->id,
                'id_quan_an'    =>  $monAn->id_quan_an,
                'don_gia'       =>  $monAn->gia_khuyen_mai,
                'so_luong'      =>  1,
                'thanh_tien'    =>  $monAn->gia_khuyen_mai,
                'id_khach_hang' =>  $khachHang->id,
            ]);

            return response()->json([
                'status'    =>  true,
                'message'   =>  'Thêm món ăn vào giỏ hàng thành công'
            ]);
        }
    }

    public function updateGioHang(UpdateGioHangRequest $request)
    {
        $khachHang  = Auth::guard('sanctum')->user();
        $mon_an     =   MonAn::where('id', $request->id_mon_an)
                                ->where('mon_ans.tinh_trang', 1)
                                ->first();
        if(!$mon_an) {
            return response()->json([
                'status'    => 0,
                'message'   => "Món ăn không tồn tại hoặc đã nhưng bán!!!!"
            ]);
        } else {
            ChiTietDonHang::where('id', $request->id)->update([
                'don_gia'       => $mon_an->gia_khuyen_mai > 0 ? $mon_an->gia_khuyen_mai : $mon_an->gia_ban,
                'so_luong'      => $request->so_luong,
                'thanh_tien'    => $request->so_luong * ($mon_an->gia_khuyen_mai > 0 ? $mon_an->gia_khuyen_mai : $mon_an->gia_ban),
                'ghi_chu'       => $request->ghi_chu,
            ]);

            return response()->json([
                'status'    => 1,
                'message'   => "Cập nhật giỏ hàng thành công!!"
            ]);
        }
    }
}
