<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DanhMucUpdateRequest extends FormRequest
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
            'id'            => 'required|exists:danh_mucs,id',
            'ten_danh_muc'    => 'required|string|max:255',
            'slug_danh_muc'   => 'required|string|unique:danh_mucs,slug_danh_muc,' . $this->id,
            'hinh_anh'        => 'required|string|max:255',
            'id_danh_muc_cha' => 'required',
            'tinh_trang'      => 'required|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'id.required'            => 'Danh mục cần cập nhật không được để trống.',
            'id.exists'              => 'Danh mục cần cập nhật không tồn tại trong hệ thống.',
            'ten_danh_muc.required' => 'Tên danh mục không được để trống.',
            'ten_danh_muc.string' => 'Tên danh mục phải là chuỗi ký tự.',
            'ten_danh_muc.max' => 'Tên danh mục không được vượt quá 255 ký tự.',

            'slug_danh_muc.required' => 'Slug danh mục không được để trống.',
            'slug_danh_muc.string' => 'Slug danh mục phải là chuỗi ký tự.',
            'slug_danh_muc.unique' => 'Slug danh mục đã tồn tại, vui lòng chọn slug khác.',

            'hinh_anh.required' => 'Hình ảnh không được để trống.',
            'hinh_anh.string' => 'Hình ảnh phải là chuỗi ký tự.',
            'hinh_anh.max' => 'Đường dẫn hình ảnh không được vượt quá 255 ký tự.',

            'id_danh_muc_cha.required' => 'ID danh mục cha không được để trống.',

            'tinh_trang.required' => 'Tình trạng không được để trống.',
            'tinh_trang.boolean' => 'Tình trạng chỉ có thể là true hoặc false.',
        ];
    }
}
