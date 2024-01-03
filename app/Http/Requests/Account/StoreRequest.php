<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Unique;

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
            'password' => 'required',
            'email' => 'required',
            'phone' => 'required|Unique:account',
            'address' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Vui lòng không để trống',
            'password.required' => 'Vui lòng không để trống',
            'email.required' => 'Vui lòng không để trống',
            'phone.required' => 'Vui lòng không để trống',
            'phone.unique' => 'Danh mục đã tồn tại',
        ];
    }
}
