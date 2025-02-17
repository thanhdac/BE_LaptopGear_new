<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerKhachHangRequest extends FormRequest
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
            'email'         => 'required|email|unique:khach_hangs,email',
            'so_dien_thoai' => 'required|numeric|digits:10',
            'ho_va_ten'     => 'required|min:3|max:50',
            'password'      => 'required|min:6|max:20',
            're_password'   => 'required|same:password',
            'ngay_sinh'     => 'required|date',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required'            => 'Email không được để trống',
            'email.email'               => 'Email không đúng định dạng',
            'email.unique'              => 'Email đã tồn tại',
            'so_dien_thoai.required'    => 'Số điện thoại không được để trống',
            'so_dien_thoai.numeric'     => 'Số điện thoại phải là số',
            'so_dien_thoai.digits'      => 'Số điện thoại phải có 10 chữ số',
            'ho_va_ten.required'        => 'Họ và tên không được để trống',
            'ho_va_ten.min'             => 'Họ và tên phải có ít nhất 3 ký tự',
            'ho_va_ten.max'             => 'Họ và tên không được quá 50 ký tự',
            'password.required'         => 'Mật khẩu không được để trống',
            'password.min'              => 'Mật khẩu phải có ít nhất 6 ký tự',
            'password.max'              => 'Mật khẩu không được quá 20 ký tự',
            're_password.required'      => 'Nhập lại mật khẩu không được để trống',
            're_password.same'          => 'Nhập lại mật khẩu không khớp',
            'ngay_sinh.required'        => 'Ngày sinh không được để trống',
            'ngay_sinh.date'            => 'Ngày sinh không đúng định dạng',
        ];
    }

}
