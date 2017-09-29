<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LevelRequest extends FormRequest
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
            'name' => 'required|min:5|max:50'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên quyền bỏ trống',
            'name.min' => 'Độ dài tên từ 5 đến 50 ký tự',
            'name.max' => 'Độ dài tên từ 5 đến 50 ký tự'
        ];
    }
}
