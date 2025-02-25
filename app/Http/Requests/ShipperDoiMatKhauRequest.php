<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShipperDoiMatKhauRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
                'mat_khau_cu' => 'required|min:6|max:30',
                'mat_khau_moi' => 'required|min:6|max:30',
                'xac_nhan_mat_khau_moi' => 'required|min:6|max:30|same:mat_khau_moi',
        ];
    }
    public function messages()
    {
        return [
            'mat_khau_cu.required' => 'Mật khẩu cũ không được để trống',
            'mat_khau_cu.min' => 'Mật khẩu cũ phải có ít nhất 6 ký tự',
            'mat_khau_cu.max' => 'Mật khẩu cũ không được quá 30 ký tự',

            'mat_khau_moi.required' => 'Mật khẩu mới không được để trống',
            'mat_khau_moi.min' => 'Mật khẩu mới phải có ít nhất 6 ký tự',
            'mat_khau_moi.max' => 'Mật khẩu mới không được quá 30 ký tự',

            'xac_nhan_mat_khau_moi.required' => 'Xác nhận mật khẩu mới không được để trống',
            'xac_nhan_mat_khau_moi.min' => 'Xác nhận mật khẩu mới phải có ít nhất 6 ký tự',
            'xac_nhan_mat_khau_moi.max' => 'Xác nhận mật khẩu mới không được quá 30 ký tự',
            'xac_nhan_mat_khau_moi.same' => 'Xác nhận mật khẩu mới không trùng khớp',
        ];
    }
}
