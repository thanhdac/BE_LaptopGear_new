<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class XoaKhachHangRequest extends FormRequest
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
            'id' => 'required|integer|exists:khach_hangs,id',
        ];
    }
    public function messages()
    {
        return [
            'id.required' => 'Khách hàng cần xóa là bắt buộc!',
            'id.integer' => 'Khách hàng cần xóa phải là số nguyên!',
            'id.exists' => 'Khách hàng cần xóa không tồn tại!',
        ];
    }
}
