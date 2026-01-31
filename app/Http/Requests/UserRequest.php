<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * Lấy các quy tắc xác thực áp dụng cho yêu cầu.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->route('user');

        if ($id) {
            return [
                'name' => 'sometimes|required|min:4',
                'email' => 'sometimes|required|email|unique:users,email,' . $id,
                'password' => 'sometimes|required|min:6',
            ];
        }

        // POST
        return [
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute bat buoc phai nhap',
            'min' => ':attribute phai nhap :min ky tu',
            'email' => ':attribute phai dinh dang email',
            'unique' => ':attribute da ton tai',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Ten',
            'email' => 'Email',
            'password' => 'Mat Khau'
        ];
    }


}
