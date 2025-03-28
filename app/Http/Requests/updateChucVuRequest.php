<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateChucVuRequest extends FormRequest
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
            'id' => 'required|exists:chuc_vus,id',
            'ten_chuc_vu' => 'required|string|max:255',
            'slug_chuc_vu' => 'required|string|max:255',
            'tinh_trang' => 'required|integer',
        ];
    }
    public function messages()
    {
        return [
            'id.required' => 'Chức Vụ không được để trống',
            'id.exists' => 'Chức Vụ không tồn tại',
            'ten_chuc_vu.required' => 'Tên chức vụ không được để trống',
            'ten_chuc_vu.string' => 'Tên chức vụ phải là chuỗi',
            'ten_chuc_vu.max' => 'Tên chức vụ không được vượt quá 255 ký tự',
            'slug_chuc_vu.required' => 'Slug chức vụ không được để trống',
            'slug_chuc_vu.string' => 'Slug chức vụ phải là chuỗi',
            'slug_chuc_vu.max' => 'Slug chức vụ không được vượt quá 255 ký tự',
            'tinh_trang.required' => 'Tình trạng không được để trống',
            'tinh_trang.integer' => 'Tình trạng phải là số nguyên',
        ];
    }
}
