<?php

namespace App\Http\Requests\Category;

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
            // Yêu cầu trường 'name' phải được điền và giá trị của nó không được trùng lặp trong bảng 'category'.
            'name' => 'required|unique:category',
            // Yêu cầu trường 'priority' phải được điền.
            'priority' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Tên danh mục không để trống',
            'priority.required' => 'Thứ tự uy tiên không để trống',
            'name.unique' => 'Danh mục đã tồn tại',
        ];
    }
}
