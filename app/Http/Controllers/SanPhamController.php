<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController
{
    public function getData()
    {
        $data = SanPham::all();

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }
}
