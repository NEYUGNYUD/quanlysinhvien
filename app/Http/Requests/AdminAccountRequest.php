<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminAccountRequest extends FormRequest
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
            'name' => 'required|min:5|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:50',
            're-password' => 'same:password',
            'avatar' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên bỏ trống',
            'name.min' => 'Tên có độ dài từ 5 đến 50 ký tự',
            'name.max' => 'Tên có độ dài từ 5 đến 50 ký tự',
            'email.required' => 'Email bỏ trống',
            'email.email' => 'Không đúng định dạng email',
            'email.unique' => 'Email bị trùng',
            'password.required' => 'Password bỏ trống',
            'password.min' => 'Password có độ dài từ 8 đến 50 ký tự',
            'password.max' => 'Password có độ dài từ 8 đến 50 ký tự',
            're-password.same' => 'Password không trùng nhau',
            'avatar.required' => 'Hình đại diện bỏ trống'
        ];
    }
}
