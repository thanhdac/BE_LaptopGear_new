<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShipperDangKyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'ho_va_ten'          => 'required|string|max:255',
            'so_dien_thoai'      => 'required|digits:10',
            'email'              => 'required|email|unique:shippers,email',
            'password'           => 'required',
            're_password'        => 'required|same:password',
            'cccd'               => 'required|string|size:12|unique:shippers,cccd',
            'dia_chi_thuong_tru' => 'required|string|max:255',
            'toa_do_x'           => 'required|numeric',
            'toa_do_y'           => 'required|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'ho_va_ten.required'          => 'Họ và tên không được để trống',
            'ho_va_ten.max'               => 'Họ và tên không được quá 255 ký tự',

            'so_dien_thoai.required'      => 'Số điện thoại không được để trống',
            'so_dien_thoai.digits'        => 'Số điện thoại phải là 10 số',

            'email.required'              => 'Email không được để trống',
            'email.email'                 => 'Email không đúng định dạng',
            'email.unique'                => 'Email đã được sử dụng',

            'password.required'           => 'Mật khẩu không được để trống',
            'password.min'                => 'Mật khẩu phải có ít nhất 6 ký tự',
            'cccd.required'               => 'CCCD không được để trống',
            're_password.required'        => 'Mật khẩu xác nhận không được để trống',
            're_password.same'            => 'Mật khẩu xác nhận không khớp',
            'cccd.size'                   => 'CCCD phải có 12 số',

            'dia_chi_thuong_tru.required' => 'Địa chỉ thường trú không được để trống',
            'dia_chi_thuong_tru.max'      => 'Địa chỉ thường trú không được quá 255 ký tự',

            'toa_do_x.required'           => 'Tọa độ X không được để trống',
            'toa_do_x.numeric'            => 'Tọa độ X phải là số',
            'toa_do_y.required'           => 'Tọa độ Y không được để trống',
            'toa_do_y.numeric'            => 'Tọa độ Y phải là số',
        ];
    }
}
