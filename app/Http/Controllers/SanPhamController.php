<?php

namespace App\Http\Controllers;

use App\Models\DanhGia;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController
{
    public function getData()
    {
        // $data = SanPham::all();

        // return response()->json([
        //     'status' => 'success',
        //     'data' => $data
        // ]);

        $data = SanPham::take(4)->get(); // hoặc ->limit(4)->get();

    return response()->json([
        'status' => 'success',
        'data' => $data
    ]);
    }
    public function getSanPhamById($id_san_pham)
    {
        $data_1 = SanPham::where('san_phams.id', $id_san_pham)
                 ->first();

        $data_2 = DanhGia::all();


        if ($data_1) {
            return response()->json([
                'data_1'    => $data_1,
                'data_2'    => $data_2,
                'status'    => true
            ]);
        }else{
            return response()->json([
                'status'    => false,
                'message'   => "sai"
            ]);
        }
    }
//     public function getSanPhamKhac()
// {
//     // $data = SanPham::take(4)->get(); // hoặc ->limit(4)->get();

//     // return response()->json([
//     //     'data' => $data
//     // ]);
//     $data = SanPham::all();

//         return response()->json([
//             'status' => 'success',
//             'data' => $data
//         ]);
// }

}
