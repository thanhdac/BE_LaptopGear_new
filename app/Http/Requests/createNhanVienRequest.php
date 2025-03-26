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
            'email'         => 'required|email|unique:nhan_viens,email',
            'ho_va_ten'     => 'required|min:5|max:255',
            'password'      => 'required|password',
            'so_dien_thoai' => 'required|digits:10',
            'dia_chi'       => 'required',
            'ngay_sinh'     => 'required|date',
            'tinh_trang'    => 'required|boolean',
            'id_chuc_vu'    => 'required|exists:chuc_vus,id',
        ];
    }

    public function messages()
    {
        return [
            'required'      => ' :attribute không được để trống.',
            'email'         => ' :attribute không đúng định dạng.',
            'unique'        => ' :attribute đã tồn tại.',
            'min'           => ' :attribute không được nhỏ hơn :min ký tự.',
            'max'           => ' :attribute không được lớn hơn :max ký tự.',
            'digits'        => ' :attribute phải có :digits số.',
            'date'          => ' :attribute không đúng định dạng.',
            'boolean'       => ' :attribute phải là true hoặc false.',
            'exists'        => ' :attribute không tồn tại.'
        ];
    }

    public function attributes()
    {
        return [
            'email'         => 'Email',
            'ho_va_ten'     => 'Họ và tên',
            'password'      => 'Mật khẩu',
            'so_dien_thoai' => 'Số điện thoại',
            'dia_chi'       => 'Địa chỉ',
            'ngay_sinh'     => 'Ngày sinh',
            'tinh_trang'    => 'Tình trạng',
            'id_chuc_vu'    => 'Chức vụ',
        ];
    }
}
