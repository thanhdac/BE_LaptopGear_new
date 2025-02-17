<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShipperUpdateRequest extends FormRequest
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
            'id' => 'required|exists:shippers,id',
            'ho_va_ten'             => 'required|string|max:255',
            'so_dien_thoai'         => 'required|string|max:255',
            'email'                 => 'required|string|email|max:255|unique:shippers,email,' . $this->id,
            'cccd'                  => 'required|string|max:255',
            'dia_chi_thuong_tru'    => 'required|string|max:255',
            'toa_do_x'              => 'required|numeric',
            'toa_do_y'              => 'required|numeric',
            'id_tinh_thanh'         => 'required|integer',
            'id_quan_huyen'         => 'required|integer',
        ];
    }

    public function messages(): array
    {
        return [
            'id.required'           => 'Shipper cần cập nhật không được để trống',
            'id.exists'             => 'Shipper cần cập nhật không tồn tại',
            'ho_va_ten.required'    => 'Họ và tên không được để trống',
            'ho_va_ten.max'         => 'Họ và tên không được quá 255 ký tự',
            'so_dien_thoai.required'=> 'Số điện thoại không được để trống',
            'so_dien_thoai.max'     => 'Số điện thoại không được quá 255 ký tự',
            'email.required'        => 'Email không được để trống',
            'email.email'           => 'Email không đúng định dạng',
            'email.unique'          => 'Email đã tồn tại',
            'password.required'     => 'Mật khẩu không được để trống',
            'password.min'          => 'Mật khẩu phải có ít nhất 6 ký tự',
            're_password.required'  => 'Mật khẩu xác nhận không được để trống',
            're_password.same'      => 'Mật khẩu xác nhận không khớp',
            'cccd.required'         => 'CCCD không được để trống',
            'cccd.max'              => 'CCCD không được quá 255 ký tự',
            'dia_chi_thuong_tru.required' => 'Địa chỉ thường trú không được để trống',
            'dia_chi_thuong_tru.max' => 'Địa chỉ thường trú không được quá 255 ký tự',
            'toa_do_x.required'     => 'Tọa độ X không được để trống',
            'toa_do_x.numeric'      => 'Tọa độ X phải là số',
            'toa_do_y.required'     => 'Tọa độ Y không được để trống',
            'toa_do_y.numeric'      => 'Tọa độ Y phải là số',
            'id_tinh_thanh.required' => 'Tỉnh thành không được để trống',
            'id_quan_huyen.required' => 'Quận huyện không được để trống',
        ];
    }
}
