<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiaChiKhachHangUpdateRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'id'                 => 'required|exists:dia_chi_khach_hangs,id',
            'ho_ten_nguoi_nhan'  => 'required|string|max:255',
            'so_dien_thoai_nhan' => 'required|digits:10',
            'dia_chi_nhan_hang'  => 'required|string|max:255',
        ];
    }
    public function messages()
    {
        return [
            'id.required'                => 'Địa chỉ khách hàng cần cập nhật không được để trống.',
            'id.exists'                  => 'Địa chỉ khách hàng cần cập nhật không tồn tại trong hệ thống.',
            'ho_ten_nguoi_nhan.required' => 'Họ tên người nhận không được để trống.',
            'ho_ten_nguoi_nhan.string'   => 'Họ tên người nhận phải là chuỗi ký tự.',
            'ho_ten_nguoi_nhan.max'      => 'Họ tên người nhận không được vượt quá 255 ký tự.',
            'so_dien_thoai_nhan.required' => 'Số điện thoại nhận không được để trống.',
            'so_dien_thoai_nhan.digits'  => 'Số điện thoại nhận phải có 10 chữ số.',
            'dia_chi_nhan_hang.required' => 'Địa chỉ nhận hàng không được để trống.',
            'dia_chi_nhan_hang.string'   => 'Địa chỉ nhận hàng phải là chuỗi ký tự.',
            'dia_chi_nhan_hang.max'      => ' Địa chỉ nhận hàng không được vượt quá 255 ký tự.',

        ];
    }
}
