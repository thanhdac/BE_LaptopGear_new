<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuanAnThemMoiRequest extends FormRequest
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
            'email' =>  "required|email|unique:quan_ans,email",
            'ma_so_thue' => 'required|max:255',
            'ten_quan_an' => 'required|max:255',
            'gio_mo_cua' => 'required',
            'gio_dong_cua' => 'required',
            'id_dia_chi' => 'required|integer|exists:dia_chis,id',
            'so_dien_thoai' => 'required|digits:10',
            'password' => 'required|min:6',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email đã tồn tại.',
            'ma_so_thue.required' => 'Mã số thuế là bắt buộc.',
            'ma_so_thue.max' => 'Mã số thuế không được vượt quá 255 ký tự.',
            'ten_quan_an.required' => 'Tên quán ăn là bắt buộc.',
            'ten_quan_an.max' => 'Tên quán ăn không được vượt quá 255 ký tự.',
            'gio_mo_cua.required' => 'Giờ mở cửa là bắt buộc.',
            'gio_dong_cua.required' => 'Giờ đóng cửa là bắt buộc.',
            'id_dia_chi.required' => 'Địa chỉ là bắt buộc.',
            'id_dia_chi.integer' => 'Địa chỉ không hợp lệ.',
            'id_dia_chi.exists' => 'Địa chỉ không tồn tại.',
            'so_dien_thoai.required' => 'Số điện thoại là bắt buộc.',
            'so_dien_thoai.digits' => 'Số điện thoại không hợp lệ.',
            'password.required' => 'Mật khẩu là bắt buộc.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
        ];
    }
}
