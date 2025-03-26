<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class deleteNhanVienRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id'        => 'required|exists:nhan_viens,id',
        ];
    }

    public function messages()
    {
        return [
            'required'       => ' :attribute không được để trống.',
            'exists'         => ' :attribute không tồn tại trong hệ thống.',
        ];
    }

    public function attributes()
    {
        return [
            'id'        => 'Nhân viên',
        ];
    }
}
