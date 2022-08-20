<?php

namespace App\Http\Requests;

use App\Rules\PhoneNumber;
use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'name'=>'string|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'text'=>'required|string|min:10',
            'title'=>'required|string|min:10|max:255',
            'phone'=>['required','numeric',new PhoneNumber],
        ];
    }
    public function messages()
    {
        return [
            'name.string'=>'Введите строки'
        ];
    }
}
