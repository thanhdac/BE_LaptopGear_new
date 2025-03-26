<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class changeStatusTinhThanhRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id'                => 'required|exists:tinh_thanhs,id',
        ];
    }

    public function messages()
    {
        return [
            'required'      => ':attribute không được để trống',
            'exists'        => ':attribute không tồn tại'
        ];
    }

    public function attributes()
    {
        return [
            'id'                => 'Tỉnh thành',
        ];
    }
}
