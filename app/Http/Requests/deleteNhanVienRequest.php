<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class deleteNhanVienRequest extends FormRequest
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
            'id' => 'required|exists:nhan_viens,id',
        ];
    }
    public function messages(): array
    {
        return [
            'id.required' => 'Nhân viên cần xóa không được để trống.',
            'id.exists' => 'Nhân viên cần không tồn tại trong hệ thống.',
        ];
    }
}
