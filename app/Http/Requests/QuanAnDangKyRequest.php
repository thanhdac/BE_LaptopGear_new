<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuanAnDangKyRequest extends FormRequest
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
            'email' => 'required|email|unique:quan_ans,email',
            'password' => 'required|min:6',
            're_password' => 'required|same:password',
            'ma_so_thue' => 'required|unique:quan_ans,ma_so_thue',
            'ten_quan_an' => 'required|string|max:255',
            'dia_chi' => 'required|string|max:255',
            'so_dien_thoai' => 'required|numeric|digits:10',
            'id_tinh_thanh' => 'required',
            'id_quan_huyen' => 'required',
            'gio_mo_cua' => 'required',
            'gio_dong_cua' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email là bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại trong hệ thống',

            'password.required' => 'Mật khẩu là bắt buộc',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',

            're_password.required' => 'Mật khẩu là bắt buộc',
            're_password.same' => 'Mật khẩu không khớp',

            'ma_so_thue.required' => 'Mã số thuế là bắt buộc',
            'ma_so_thue.unique' => 'Mã số thuế đã tồn tại trong hệ thống',

            'ten_quan_an.required' => 'Tên quán ăn là bắt buộc',
            'ten_quan_an.max' => 'Tên quán ăn không được vượt quá 255 ký tự',

            'dia_chi.required' => 'Địa chỉ là bắt buộc',
            'dia_chi.max' => 'Địa chỉ không được vượt quá 255 ký tự',

            'so_dien_thoai.required' => 'Số điện thoại là bắt buộc',
            'so_dien_thoai.numeric' => 'Số điện thoại không đúng định dạng ',
            'so_dien_thoai.digits' => 'Số điện thoại phải có ít nhất 10 số',


            'id_tinh_thanh.required' => 'Tỉnh thành là bắt buộc',
            'id_tinh_thanh.exists' => 'Tỉnh thành không tồn tại trong hệ thống',

            'id_quan_huyen.required' => 'Quận huyện là bắt buộc',
            'id_quan_huyen.exists' => 'Quận huyện không tồn tại trong hệ thống',

            'gio_mo_cua.required' => 'Giờ mở cửa là bắt buộc',

            'gio_dong_cua.required' => 'Giờ đóng cửa là bắt buộc',

        ];
    }
}
