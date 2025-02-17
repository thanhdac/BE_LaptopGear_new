<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TinhThanhCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'ten_tinh_thanh' => 'required|max:255',
            'tinh_trang'     => 'required|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'ten_tinh_thanh.required' => 'Tên tỉnh/huyện không được để trống.',
            'ten_tinh_thanh.max'      => 'Tên tỉnh/huyện không được vượt quá 255 ký tự.',

            'tinh_trang.required'     => 'Tình trạng không được để trống.',
            'tinh_trang.boolean'      => 'Tình trạng chỉ có thể là true hoặc false.',
        ];
    }
}
