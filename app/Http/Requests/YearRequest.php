<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class YearRequest extends FormRequest
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
            'year' => 'required|unique:years,year'
        ];
    }

    public function messages() {
        return [
            'year.required' => 'Chưa chọn năm',
            'year.unique' => 'Năm bị trùng'
        ];
    }
}
