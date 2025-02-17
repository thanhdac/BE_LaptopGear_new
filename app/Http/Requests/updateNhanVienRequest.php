<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateNhanVienRequest extends FormRequest
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
            'id'            => 'required|exists:nhan_viens,id',
            'ho_va_ten'     => 'required|min:3|max:50',
            'email'         => 'required|email|unique:nhan_viens,email,' . $this->id,
            'so_dien_thoai' => 'required|digits:10',
            'dia_chi'       => 'required|min:10|max:100',
            'ngay_sinh'     => 'required|date',
            'tinh_trang'    => 'required|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'id.required'            => 'Nhân viên cần cập nhật không được để trống.',
            'id.exists'              => 'Nhân viên cần cập nhật không tồn tại trong hệ thống.',
            'ho_va_ten.required'     => 'Họ và tên không được để trống.',
            'ho_va_ten.min'          => 'Họ và tên phải có ít nhất 3 ký tự.',
            'ho_va_ten.max'          => 'Họ và tên không được vượt quá 50 ký tự.',
            'email.required'         => 'Email không được để trống.',
            'email.email'            => 'Email không đúng định dạng.',
            'email.unique'           => 'Email đã tồn tại trong hệ thống.',
            'so_dien_thoai.required' => 'Số điện thoại không được để trống.',
            'so_dien_thoai.digits'   => 'Số điện thoại phải có 10 chữ số.',
            'dia_chi.required'       => 'Địa chỉ không được để trống.',
            'dia_chi.min'            => 'Địa chỉ phải có ít nhất 10 ký tự.',
            'dia_chi.max'            => 'Địa chỉ không được vượt quá 100 ký tự.',
            'ngay_sinh.required'     => 'Ngày sinh không được để trống.',
            'ngay_sinh.date'         => 'Ngày sinh không đúng định dạng.',
            'tinh_trang.required'    => 'Tình trạng không được để trống.',
            'tinh_trang.boolean'     => 'Tình trạng phải là hoạt động hoặc tạm tắt.',
        ];
    }
}
