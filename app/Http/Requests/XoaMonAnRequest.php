<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class XoaMonAnRequest extends FormRequest
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
            'id'        => 'required|exists:mon_ans,id',
        ];
    }

    public function messages()
    {
        return [
            'required'              => ':attribute không được để trống!',
            'exists'                => ':attribute không tồn tại trong hệ thống!',
        ];
    }

    public function attributes()
    {
        return [
            'id'        => 'Món ăn cần xóa',
        ];
    }
}
