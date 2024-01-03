<?php

namespace App\Http\Requests\Player;

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
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:4096',
            'created_at' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Tên danh mục không để trống',
            'description.required' => 'Mô tả không để trống',
            'image.required' => 'Hình ảnh không để trống',
            'created_at.required' => 'Ngày gia nhập không để trống'
        ];
    }
}
