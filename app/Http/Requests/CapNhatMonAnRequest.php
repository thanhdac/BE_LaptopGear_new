<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatMonAnRequest extends FormRequest
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
            'id'                => 'required|exists:mon_ans,id',
            'ten_mon_an'        => 'required|min:10|max:255',
            'slug_mon_an'       => 'required|min:10|max:255|unique:mon_ans,slug_mon_an',
            'gia_ban'           => 'required|numeric',
            'gia_khuyen_mai'    => 'required|numeric',
            'id_quan_an'        => 'required|exists:quan_ans,id',
            'tinh_trang'        => 'required|boolean',
            'hinh_anh'          => 'required',
            'id_danh_muc'       => 'required|exists:danh_mucs,id',
        ];
    }

    public function messages()
    {
        return [
            'required'              => ':attribute không được để trống!',
            'min'                   => ':attribute không được ít hơn 5 kí tự!',
            'max'                   => ':attribute không được nhiều hơn 5 kí tự!',
            'unique'                => ':attribute không được đã tồn tại trong hệ thống!',
            'numeric'               => ':attribute phải là số!',
            'exists'                => ':attribute không tồn tại trong hệ thống!',
            'boolean'               => ':attribute phải là true hoặc false!',
        ];
    }

    public function attributes()
    {
        return [
            'id'                => 'Món ăn cần cập nhật',
            'ten_mon_an'        => 'Tên món ăn',
            'slug_mon_an'       => 'Slug món ăn',
            'gia_ban'           => 'Giá bán',
            'gia_khuyen_mai'    => 'Giá khuyến mãi',
            'id_quan_an'        => 'Quán ăn',
            'tinh_trang'        => 'Tình trạng',
            'hinh_anh'          => 'Hình ảnh',
            'id_danh_muc'       => 'Danh mục',
        ];
    }

}
