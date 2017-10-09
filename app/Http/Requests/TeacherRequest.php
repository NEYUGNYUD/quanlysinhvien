<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
            'code' => 'required|min:8|max:8|unique:teachers',
            'last_name' => 'required|min:2|max:50',
            'first_name' => 'required|min:2|max:50',
            'address' => 'required|min:5|max:100',
            'dob' => "required|date",
            'gender' => 'required',
            'email' => 'required|email',
            'passport' => 'required|min:10|max:13',
            'phone' => 'min:10|max:11',
            'faculty' => 'required',
            'role' => 'required',
        ];
    }

    public function messages() {
        return [
            'code.required' => 'Mã bỏ trống',
            'code.min' => 'Mã có độ dài 8 ký tự',
            'code.max' => 'Mã có độ dài 8 ký tự',
            'code.unique' => 'Mã bị trùng',

            'last_name.required' => 'Họ bỏ trống',
            'last_name.min' => 'Họ có chiều dài từ 2 đến 50 ký tự',
            'last_name.max' => 'Họ có chiều dài từ 2 đến 50 ký tự',

            'first_name.required' => 'Tên bỏ trống',
            'first_name.min' => 'Tên có chiều dài từ 2 đến 50 ký tự',
            'first_name.max' => 'Tên có chiều dài từ 2 đến 50 ký tự',

            'address.required' => 'Địa chỉ bỏ trống',
            'address.min' => 'Địa chỉ có chiều dài từ 5 đến 100 ký tự',
            'address.max' => 'Địa chỉ có chiều dài từ 5 đến 100 ký tự',

            'dob.required' => 'Ngày sinh bỏ trống',
            'dob.date' => 'Ngày sinh không đúng định dạng',

            'gender.required' => 'Giới tính bỏ trống',
            'email.required' => 'Email bỏ trống',
            'email.email' => 'Email không đúng định dạng',

            'passport.required' => 'Số CMT bỏ trống',
            'passport.min' => 'Số CMT có chiều dài từ 10 đến 13 ký tự',
            'passport.max' => 'Số CMT có chiều dài từ 10 đến 13 ký tự',

            'phone.min' => 'Số điện thoại có chiều dài từ 10 đến 11 ký tự',
            'phone.max' => 'Số điện thoại có chiều dài từ 10 đến 11 ký tự',

            'faculty.required' => 'Tên khoa bỏ trống',
            'role.required' => 'Chức vụ giáo viên bỏ trống',

        ];
    }
}
