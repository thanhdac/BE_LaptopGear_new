<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateKhachHangRequest extends FormRequest
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
            'id'            => 'required|exists:khach_hangs,id',
            'email'         => 'required|email|unique:khach_hangs,email,' . $this->id,
            'so_dien_thoai' => 'required|numeric|digits:10',
            'ho_va_ten'     => 'required|min:3|max:50',
            'ngay_sinh'     => 'required|date',
            'is_active'     => 'required|boolean',
            'is_block'      => 'required|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'id.required'           => 'Khách hàng cần cập nhật không được để trống.',
            'id.exists'             => 'Khách hàng cần cập nhật không tồn tại.',
            'email.required'        => 'Email không được để trống.',
            'email.email'           => 'Email không đúng định dạng.',
            'email.unique'          => 'Email đã tồn tại.',
            'so_dien_thoai.required'=> 'Số điện thoại không được để trống.',
            'so_dien_thoai.numeric' => 'Số điện thoại phải là số.',
            'so_dien_thoai.digits'  => 'Số điện thoại phải có 10 chữ số.',
            'ho_va_ten.required'    => 'Họ và tên không được để trống.',
            'ho_va_ten.min'         => 'Họ và tên phải có ít nhất 3 ký tự.',
            'ho_va_ten.max'         => 'Họ và tên không được vượt quá 50 ký tự.',
            'ngay_sinh.required'    => 'Ngày sinh không được để trống.',
            'ngay_sinh.date'        => 'Ngày sinh không đúng định dạng.',
            'is_active.required'    => 'Trạng thái không được để trống.',
            'is_active.boolean'     => 'Trạng thái không đúng định dạng.',
            'is_block.required'     => 'Trạng thái không được để trống.',
            'is_block.boolean'      => 'Trạng thái không đúng định dạng.',
        ];
    }
}
