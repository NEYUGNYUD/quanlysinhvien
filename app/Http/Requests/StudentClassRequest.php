<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentClassRequest extends FormRequest
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
            'name' => 'required|min:3|max:30|unique:classes',
            'faculty' => 'required'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Tên lớp bỏ trống',
            'name.min' => 'Tên lớp có độ dài từ 3 đến 30 ký tự',
            'name.max' => 'Tên lớp có độ dài từ 3 đến 30 ký tự',
            'name.required' => 'Tên lớp bị trùng',
            'faculty.required' => 'Chưa chọn khoa'
        ];
    }
}
