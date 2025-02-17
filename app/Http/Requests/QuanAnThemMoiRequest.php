<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuanAnThemMoiRequest extends FormRequest
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
            'email'         => 'required|email|unique:quan_ans,email',
            'password'      => 'required|min:6',
            'ma_so_thue'    => 'required|string|unique:quan_ans,ma_so_thue',
            'ten_quan_an'   => 'required|string|max:255',
            'dia_chi'       => 'required|string|max:255',
            'so_dien_thoai' => 'required|numeric|digits:10',
            'toa_do_x'      => 'required|numeric',
            'toa_do_y'      => 'required|numeric',
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
            'email.required'          => 'Email là bắt buộc',
            'email.email'             => 'Email không đúng định dạng',
            'email.unique'            => 'Email đã tồn tại',
            'password.required'       => 'Mật khẩu là bắt buộc',
            'password.min'            => 'Mật khẩu phải có ít nhất 6 ký tự',
            'ma_so_thue.required'     => 'Mã số thuế là bắt buộc',
            'ma_so_thue.unique'       => 'Mã số thuế đã tồn tại',
            'ten_quan_an.required'    => 'Tên quán ăn là bắt buộc',
            'dia_chi.required'        => 'Địa chỉ là bắt buộc',
            'so_dien_thoai.required'  => 'Số điện thoại là bắt buộc',
            'so_dien_thoai.digits'    => 'Số điện thoại là 10 số',
            'toa_do_x.required'       => 'Tọa độ X là bắt buộc',
            'toa_do_y.required'       => 'Tọa độ Y là bắt buộc',
            'gio_mo_cua.required'     => 'Giờ mở cửa là bắt buộc',
            'gio_dong_cua.required'   => 'Giờ đóng cửa là bắt buộc',
            'id_quan_huyen.required'  => 'Quận/Huyện là bắt buộc',
            'id_tinh_thanh.required'  => 'Tỉnh/Thành là bắt buộc',
            'is_active.required'        => 'Trạng thái là bắt buộc',
            'is_active.boolean'        => 'Trạng thái không đúng định dạng',
            'tinh_trang.required'      => 'Tình trạng là bắt buộc',
            'tinh_trang.boolean'       => 'Tình trạng không đúng định dạng',
        ];
    }
}
