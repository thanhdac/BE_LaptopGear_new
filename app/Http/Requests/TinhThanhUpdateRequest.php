<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TinhThanhUpdateRequest extends FormRequest
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
            'id' => 'required|exists:tinh_thanhs,id',
            'ten_tinh_thanh' => 'required|max:255',
            'tinh_trang'     => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'id.required' => 'Tỉnh thành cấp cần cập nhật không được để trống.',
            'id.exists' => 'Tỉnh thành cấp cần cập nhật không tồn tại.',

            'ten_tinh_thanh.required' => 'Tên tỉnh thành không được để trống.',
            'ten_tinh_thanh.max'      => 'Tên tỉnh thành không được vượt quá 255 ký tự.',

            'tinh_trang.required'     => 'Tình trạng không được để trống.',
            'tinh_trang.boolean'      => 'Tình trạng không đúng định dạng.',
        ];
    }
}
