<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'name' => 'required|min:5|unique:roles'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Tên bỏ trống',
            'name.min' => 'Độ dài tên chức vụ tối thiểu 5 ký tự',
            'name.unique' => 'Tên chức vụ bị trùng'
        ];
    }
}
