<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

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
            'name' => ['required'],
            'email' => ['required','max:30'],
            'address' => ['required'],
            'password' => ['required','max:128',Password::min(6)->mixedCase()],
            'confirm-password' => ['required','same:password'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は入力必須です。',
            'email.required' => 'Eメールは入力必須です。',
            'email.max' => '30文字以内で入力してください。',
            'address.required' => '住所は入力必須です。',
            'password.required' => 'パスワードは入力必須です。',
            'password.min' => '6文字以上で入力してください。',
            'confirm-password.required' => '確認用パスワードは入力必須です。',
            'confirm-password.same' => 'パスワードとパスワード確認用が一致しません。',
        ];
    }
}
