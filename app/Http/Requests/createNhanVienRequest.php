<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createNhanVienRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'ho_va_ten'     => 'required|min:3|max:50',
            'email'         => 'required|email|unique:nhan_viens,email',
            'password'      => 'required|min:6|max:20',
            're_password'   => 'required|same:password',
            'so_dien_thoai' => 'required|digits:10',
            'dia_chi'       => 'required|min:10|max:100',
            'ngay_sinh'     => 'required|date',
            'tinh_trang'    => 'required|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'ho_va_ten.required'     => 'Vui lòng nhập họ và tên.',
            'ho_va_ten.min'          => 'Họ và tên phải có ít nhất 3 ký tự.',
            'ho_va_ten.max'          => 'Họ và tên không được vượt quá 50 ký tự.',
            'email.required'         => 'Vui lòng nhập email.',
            'email.email'            => 'Email không đúng định dạng.',
            'email.unique'           => 'Email đã tồn tại.',
            'password.required'      => 'Vui lòng nhập mật khẩu.',
            'password.min'           => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'password.max'           => 'Mật khẩu không được vượt quá 20 ký tự.',
            're_password.required'   => 'Vui lòng nhập lại mật khẩu.',
            're_password.same'       => 'Mật khẩu không khớp.',
            'so_dien_thoai.required' => 'Vui lòng nhập số điện thoại.',
            'so_dien_thoai.digits'   => 'Số điện thoại phải có 10 số.',
            'dia_chi.required'       => 'Vui lòng nhập địa chỉ.',
            'dia_chi.min'            => 'Địa chỉ phải có ít nhất 10 ký tự.',
            'dia_chi.max'            => 'Địa chỉ không được vượt quá 100 ký tự.',
            'ngay_sinh.required'     => 'Vui lòng nhập ngày sinh.',
            'ngay_sinh.date'         => 'Ngày sinh không đúng định dạng.',
            'tinh_trang.required'    => 'Vui lòng chọn tình trạng.',
            'tinh_trang.boolean'     => 'Tình trạng phải là hoạt động hoặc tạm tắt.',
        ];
    }
}
