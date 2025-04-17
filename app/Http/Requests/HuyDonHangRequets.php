<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HuyDonHangRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id'    => 'required|exists:don_hangs,id'
        ];
    }

    public function messages()
    {
        return [
            'id.*'    => 'Đơn hàng này không tồn tại!!!'
        ];
    }
}
