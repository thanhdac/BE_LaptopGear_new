<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuanAnUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => 'required|integer|exists:quan_ans,id',
            'email' =>  "required|email|unique:quan_ans,email," . $this->id,
            'ma_so_thue' => 'required|max:255',
            'ten_quan_an' => 'required|max:255',
            'gio_mo_cua' => 'required',
            'gio_dong_cua' => 'required',
            'id_dia_chi' => 'required|integer|exists:dia_chis,id',
            'hinh_anh' => 'required|max:255',
            'so_dien_thoai' => 'required|digits:10',
            'tong_tien' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'id.required'   => 'Quán ăn cần cập nhật không được để trống!',
            'id.integer'    => 'Quán ăn cần cập nhật phải là số nguyên!',
            'id.exists'     => 'Quán ăn cần cập nhật không tồn tại!',

            'email.required' => 'Email không được để trống!',
            'email.email' => 'Email không đúng định dạng!',
            'email.unique' => 'Email đã tồn tại!',

            'ma_so_thue.required' => 'Mã số thuế không được để trống!',
            'ma_so_thue.max' => 'Mã số thuế không được quá 255 ký tự!',

            'ten_quan_an.required' => 'Tên quán ăn không được để trống!',
            'ten_quan_an.max' => 'Tên quán ăn không được quá 255 ký tự!',

            'gio_mo_cua.required' => 'Giờ mở cửa không được để trống!',
            'gio_dong_cua.required' => 'Giờ đóng cửa không được để trống!',
            'id_dia_chi.required' => 'Địa chỉ không được để trống!',
            'id_dia_chi.integer' => 'Địa chỉ phải là số nguyên!',
            'id_dia_chi.exists' => 'Địa chỉ không tồn tại!',

            'hinh_anh.required' => 'Hình ảnh không được để trống!',
            'hinh_anh.max' => 'Hình ảnh không được quá 255 ký tự!',

            'so_dien_thoai.required' => 'Số điện thoại không được để trống!',
            'so_dien_thoai.digits' => 'Số điện thoại không đúng định dạng!',

            'tong_tien.required' => 'Tổng tiền không được để trống!',
            'tong_tien.numeric' => 'Tổng tiền phải là số!',
        ];
    }
}
