<?php

namespace App\Http\Requests\Schedule;

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
            'team1' => 'required',
            'team2' => 'required',
            // 'image1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:4096',
            // 'image2' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:4096',
            'giai_dau_id' => 'required|not_in:--Chọn--',
            'mo_ta' => 'required',
            'created_at' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'team1.required' => 'Tên danh mục không để trống',
            'team2.required' => 'Tên danh mục không để trống',
            // 'image1.required' => 'Hình ảnh chưa được tải',
            // 'image2.required' => 'Hình ảnh chưa được tải',
            'mo_ta.required' => 'Vòng chưa được ghi nhận',
            'giai_dau_id.required' => 'Giải đấu không để trống',
            'giai_dau_id.not_in' => 'Bạn phải chọn một giải đấu',
            'created_at.required' => 'Ngày gia nhập không để trống'
        ];
    }
}
