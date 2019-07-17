<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return backpack_auth()->check();
    }

    public function rules()
    {
        return [
            'name' => 'required|min:6|max:255',
            'password' => 'required|min:6|max:255',
            'email' => 'required|min:6|max:255|unique:users,email',
            'role_id' => 'required|numeric|exists:roles,id',
        ];
    }

    public function attributes()
    {
        return [
        ];
    }

    public function messages()
    {
        return [
        ];
    }
}
