<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createVoucherRequest extends FormRequest
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
            'ma_code'               => 'required|min:3|max:50|unique:vouchers,ma_code',
            'thoi_gian_bat_dau'     => 'required|date|before_or_equal:today',
            'thoi_gian_ket_thuc'    => 'required|date|after_or_equal:thoi_gian_bat_dau',
            'loai_giam'             => 'required|boolean',
            'so_giam_gia'           => 'required|numeric|min:1',
            'so_tien_toi_da'        => 'required|numeric|min:1',
            'don_hang_toi_thieu'    => 'required|numeric|min:1',
            'tinh_trang'            => 'required|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'ma_code.required'                      => 'Mã code không được để trống.',
            'ma_code.min'                           => 'Mã code phải có ít nhất 3 ký tự.',
            'ma_code.max'                           => 'Mã code không được quá 50 ký tự.',
            'ma_code.unique'                        => 'Mã code đã tồn tại.',
            'thoi_gian_bat_dau.required'            => 'Thời gian bắt đầu không được để trống.',
            'thoi_gian_bat_dau.date'                => 'Thời gian bắt đầu không đúng định dạng ngày.',
            'thoi_gian_bat_dau.before_or_equal'     => 'Thời gian bắt đầu phải trước hoặc bằng ngày hiện tại.',
            'thoi_gian_ket_thuc.required'           => 'Thời gian kết thúc không được để trống.',
            'thoi_gian_ket_thuc.date'               => 'Thời gian kết thúc không đúng định dạng ngày.',
            'thoi_gian_ket_thuc.after_or_equal'     => 'Thời gian kết thúc phải sau hoặc bằng thời gian bắt đầu.',
            'loai_giam.required'                    => 'Loại giảm không được để trống.',
            'loai_giam.boolean'                     => 'Loại giảm phải là % hoặc tiền mặt.',
            'so_giam_gia.required'                  => 'Số giảm giá không được để trống.',
            'so_giam_gia.numeric'                   => 'Số giảm giá phải là số.',
            'so_giam_gia.min'                       => 'Số giảm giá phải lớn hơn 0.',
            'so_tien_toi_da.required'               => 'Số tiền tối đa không được để trống.',
            'so_tien_toi_da.numeric'                => 'Số tiền tối đa phải là số.',
            'so_tien_toi_da.min'                    => 'Số tiền tối đa phải lớn hơn 0.',
            'don_hang_toi_thieu.required'           => 'Đơn hàng tối thiểu không được để trống.',
            'don_hang_toi_thieu.numeric'            => 'Đơn hàng tối thiểu phải là số.',
            'don_hang_toi_thieu.min'                => 'Đơn hàng tối thiểu phải lớn hơn 0.',
            'tinh_trang.required'                   => 'Tình trạng không được để trống.',
            'tinh_trang.boolean'                    => 'Tình trạng phải là hiển thị hoặc tạm tắt.',
        ];
    }
}
