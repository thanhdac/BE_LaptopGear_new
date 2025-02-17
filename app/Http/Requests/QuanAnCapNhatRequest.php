<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuanAnCapNhatRequest extends FormRequest
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
            'id'            => 'required|exists:quan_ans,id',
            'email'         => 'required|email|unique:quan_ans,email,' . $this->id,
            'ma_so_thue'    => 'required|string|unique:quan_ans,ma_so_thue,' . $this->id,
            'ten_quan_an'   => 'required|string|max:255',
            'dia_chi'       => 'required|string|max:255',
            'so_dien_thoai' => 'required|numeric|digits:10',
            'tinh_trang'    => 'required|boolean',
            'is_active'     => 'required|boolean',
            'gio_mo_cua'    => 'required',
            'gio_dong_cua'  => 'required',
            'id_quan_huyen' => 'required',
            'id_tinh_thanh' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'id.required'             => 'Quán ăn cần cập nhật không được để trống',
            'id.exists'               => 'Quán ăn cần cập nhật không tồn tại trong hệ thống',
            'email.required'          => 'Email là bắt buộc',
            'email.email'             => 'Email không đúng định dạng',
            'email.unique'            => 'Email đã tồn tại',
            'ma_so_thue.required'     => 'Mã số thuế là bắt buộc',
            'ma_so_thue.unique'       => 'Mã số thuế đã tồn tại',
            'ten_quan_an.required'    => 'Tên quán ăn là bắt buộc',
            'dia_chi.required'        => 'Địa chỉ là bắt buộc',
            'so_dien_thoai.required'  => 'Số điện thoại là bắt buộc',
            'so_dien_thoai.digits'    => 'Số điện thoại là 10 số',
            'gio_mo_cua.required'     => 'Giờ mở cửa là bắt buộc',
            'gio_dong_cua.required'   => 'Giờ đóng cửa là bắt buộc',
            'id_quan_huyen.required'  => 'Quận/Huyện là bắt buộc',
            'id_tinh_thanh.required'  => 'Tỉnh/Thành là bắt buộc',
        ];
    }
}
