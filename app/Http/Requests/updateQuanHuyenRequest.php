<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateQuanHuyenRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id'                  => 'required|exists:quan_huyens,id',
            'ten_quan_huyen'      => 'required|min:10|max:255',
            'toa_do_x'            => '',
            'toa_do_y'            => '',
            'tinh_trang'          => 'required|boolean',
            'id_tinh_thanh'       => 'required|exists:tinh_thanhs,id'
        ];
    }

    public function messages()
    {
        return [
            'required'          => ':attribute không được để trống',
            'min'               => ':attribute không được nhỏ hơn :min ký tự',
            'max'               => ':attribute không được lớn hơn :max ký tự',
            'boolean'           => ':attribute phải là true hoặc false',
            'exists'            => ':attribute không tồn tại'
        ];
    }

    public function attributes()
    {
        return [
            'id'                  => 'Quận Huyện',
            'ten_quan_huyen'      => 'Tên quận huyện',
            'toa_do_x'            => 'Tọa độ x',
            'toa_do_y'            => 'Tọa độ y',
            'tinh_trang'          => 'Tình trạng',
            'id_tinh_thanh'       => 'Tỉnh thành'
        ];
    }
}

