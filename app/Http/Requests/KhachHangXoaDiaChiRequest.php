<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KhachHangXoaDiaChiRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'id' => 'required|exists:dia_chi_khach_hangs,id',
        ];
    }
    public function messages()
    {
        return [
            'id.required' => 'Địa chỉ cần xóa không được để trống',
            'id.exists' => 'Địa chỉ cần xóa không tồn tại',
        ];
    }
}
