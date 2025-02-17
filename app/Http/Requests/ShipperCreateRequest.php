<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShipperCreateRequest extends FormRequest
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
            'ho_va_ten'             => 'required|string|max:255',
            'so_dien_thoai'         => 'required|max:255',
            'email'                 => 'required|string|email|max:255|unique:shippers',
            'password'              => 'required|string|min:6',
            're_password'           => 'required|string|min:6|same:password',
            'cccd'                  => 'required|max:255',
            'dia_chi_thuong_tru'    => 'required|string|max:255',
            'toa_do_x'              => 'required|numeric',
            'toa_do_y'              => 'required|numeric',
            'id_tinh_thanh'         => 'required|integer',
            'id_quan_huyen'         => 'required|integer',
            'is_active'             => 'required|boolean',
            'is_open'             => 'required|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'ho_va_ten.required' => 'Họ và tên không được để trống',
            'ho_va_ten.max' => 'Họ và tên không được quá 255 ký tự',
            'so_dien_thoai.required' => 'Số điện thoại không được để trống',
            'so_dien_thoai.max' => 'Số điện thoại không được quá 255 ký tự',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            're_password.required' => 'Mật khẩu xác nhận không được để trống',
            're_password.same' => 'Mật khẩu xác nhận không khớp',
            'cccd.required' => 'CCCD không được để trống',
            'cccd.max' => 'CCCD không được quá 255 ký tự',
            'dia_chi_thuong_tru.required' => 'Địa chỉ thường trú không được để trống',
            'dia_chi_thuong_tru.max' => 'Địa chỉ thường trú không được quá 255 ký tự',
            'toa_do_x.required' => 'Tọa độ X không được để trống',
            'toa_do_x.numeric' => 'Tọa độ X phải là số',
            'toa_do_y.required' => 'Tọa độ Y không được để trống',
            'toa_do_y.numeric' => 'Tọa độ Y phải là số',
            'id_tinh_thanh.required' => 'Tỉnh thành không được để trống',
            'id_quan_huyen.required' => 'Quận huyện không được để trống',
            'is_active.required' => 'Trạng thái hoạt động không được để trống',
            'is_active.boolean' => 'Trạng thái hoạt động không hợp lệ',
            'is_open.required' => 'Tình trạng không được để trống',
            'is_open.boolean' => 'Tình trạng hoạt động không hợp lệ',
        ];
    }
}
