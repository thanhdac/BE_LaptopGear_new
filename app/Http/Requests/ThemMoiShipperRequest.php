<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemMoiShipperRequest extends FormRequest
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
            'ho_va_ten' => 'required|max:100',
            'email' => 'required|email|unique:shippers,email',
            'password' => 'required|min:6|max:30',
            'cccd' => 'required|digits:12|unique:shippers,cccd',
            'so_dien_thoai' => 'required|digits:10|unique:shippers,so_dien_thoai',
        ];
    }

    public function messages()
    {
        return [
            'ho_va_ten.required' => 'Họ và tên không được để trống',
            'ho_va_ten.max' => 'Họ và tên không được quá 100 ký tự',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            'password.max' => 'Mật khẩu không được quá 30 ký tự',
            'cccd.required' => 'CCCD không được để trống',
            'cccd.digits' => 'CCCD không đúng định dạng',
            'cccd.unique' => 'CCCD đã tồn tại',
            'so_dien_thoai.required' => 'Số điện thoại không được để trống',
            'so_dien_thoai.digits' => 'Số điện thoại không đúng định dạng',
            'so_dien_thoai.unique' => 'Số điện thoại đã tồn tại',
        ];
    }
}
