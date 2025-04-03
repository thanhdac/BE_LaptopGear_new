<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateTinhThanhRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id'                => 'required|exists:tinh_thanhs,id',
            'ten_tinh_thanh'    => 'required|min:3|max:255',
            'tinh_trang'        => 'required|boolean'
        ];
    }

    public function messages()
    {
        return [
            'required'      => ':attribute không được để trống',
            'min'           => ':attribute không được nhỏ hơn :min',
            'max'           => ':attribute không được lớn hơn :max',
            'boolean'       => ':attribute phải là true hoặc false'
        ];
    }

    public function attributes()
    {
        return [
            'id'                => 'Tỉnh thành',
            'ten_tinh_thanh'    => 'Tên tỉnh thành',
            'tinh_trang'        => 'Tình trạng'
        ];
    }
}
