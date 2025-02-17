<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateQuyenRequest extends FormRequest
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
            'id'        => 'required|exists:phan_quyens,id',
            'ten_quyen' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'id.required' => 'Quyền cần cập nhật là bắt buộc',
            'id.exists' => 'Quyền cần cập nhật không tồn tại',
            'ten_quyen.required' => 'Tên quyền là bắt buộc',
        ];
    }
}
