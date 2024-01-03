<?php

namespace App\Http\Requests\Ranking;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'ten_clb' => 'required'
            // 'so_tran' => 'requỉed',
            // 'thang' => 'requỉed',
            // 'hoa' => 'requỉed',
            // 'thua' => 'requỉed',
            // 'ban_thang' => 'requỉed',
            // 'ban_thua' => 'requỉed',
            // 'hieu_so' => 'requỉed',
            // 'diem' => 'requỉed',
        ];
    }
    public function messages(): array
    {
        return [
            'ten_clb.required' => 'Tên câu lạc bộ không để trống',
            // 'so_tran.required' => 'Tên danh mục không để trống',
            // // 'image1.required' => 'Hình ảnh chưa được tải',
            // // 'image2.required' => 'Hình ảnh chưa được tải',
            // 'mo_ta.required' => 'Vòng chưa được ghi nhận',
            // 'giai_dau_id.required' => 'Giải đấu không để trống',
            // 'giai_dau_id.not_in' => 'Bạn phải chọn một giải đấu',
            // 'created_at.required' => 'Ngày gia nhập không để trống'
        ];
    }
}
