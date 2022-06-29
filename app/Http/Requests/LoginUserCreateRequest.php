<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:10',
            'email' => 'required|max:20',
            'address' => 'required|max:10',
            'password' => 'required|min:6',
            'confirm-password' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は入力必須です。',
            'name.max:10' => '20文字以内で入力してください。',
            'email.required' => 'Eメールは入力必須です。',
            'email.max:20' => '20文字以内で入力してください。',
            'address.required' => '住所は入力必須です。',
            'address.max:10' => '10文字以内で入力してください',
            'password.required' => 'パスワードは入力必須です。',
            'password.min6' => '6文字以上で入力してください。',
            'confirm-password.required' => '確認用パスワードは入力必須です。',
            'confirm-password.same:password' => 'パスワードとパスワード確認用が一致しません。',
        ];
    }
}
