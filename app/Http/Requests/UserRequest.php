<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            //'email' => 'required|email:rfc,dns|unique:users|email',
            //'password' => 'required|min:8',
            // 'password_confirmation' => 'required|same:password',
            'email' => 'required|email:rfc,dns|email',
            'password' => 'required|min:8|confirmed',
            // 'password_confirmation' => 'required',
            'roles' => 'required'
        ];
    }
}
// 