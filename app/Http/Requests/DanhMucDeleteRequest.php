<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DanhMucDeleteRequest extends FormRequest
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
            'id' => 'required|exists:danh_mucs,id',
        ];
    }
    public function messages()
    {
        return [
            'id.required' => 'Danh mục cần xóa không được để trống.',
            'id.exists' => 'Danh mục cần xóa không tồn tại.',
        ];
    }
}
