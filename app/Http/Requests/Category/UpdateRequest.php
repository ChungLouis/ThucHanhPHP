<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|unique:category,name,'.request()->id,
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
