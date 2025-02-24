<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KhachHangDoiMatKhauRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'mat_khau_cu'       =>      ['required', 'string', 'min:6', 'max:30'],
            'mat_khau_moi'      =>      ['required', 'string', 'min:6', 'max:30'],
            'nhap_lai_mat_khau' =>      ['required', 'string', 'min:6', 'max:30', 'same:mat_khau_moi'],
        ];
    }

    public function messages()
    {
        return [
            'mat_khau_cu.required'          => 'Mật khẩu cũ không được để trống',
            'mat_khau_cu.string'            => 'Mật khẩu cũ phải là chuỗi',
            'mat_khau_cu.min'               => 'Mật khẩu cũ phải có ít nhất 6 ký tự',
            'mat_khau_cu.max'               => 'Mật khẩu cũ phải có nhiều nhất 30 ký tự',
            'mat_khau_moi.required'         => 'Mật khẩu mới không được để trống',
            'mat_khau_moi.string'           => 'Mật khẩu mới phải là chuỗi',
            'mat_khau_moi.min'              => 'Mật khẩu mới phải có ít nhất 6 ký tự',
            'mat_khau_moi.max'              => 'Mật khẩu mới phải có nhiều nhất 30 ký tự',
            'nhap_lai_mat_khau.required'    => 'Nhập lại mật khẩu không được để trống',
            'nhap_lai_mat_khau.string'      => 'Nhập lại mật khẩu phải là chuỗi',
            'nhap_lai_mat_khau.min'         => 'Nhập lại mật khẩu phải có ít nhất 6 ký tự',
            'nhap_lai_mat_khau.max'         => 'Nhập lại mật khẩu phải có nhiều nhất 30 ký tự',
            'nhap_lai_mat_khau.same'        => 'Nhập lại mật khẩu không khớp',
        ];
    }
}
