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
            'name.regex'=>'Недопустимый формат имени.',
            'name.required'=>'Имя должно быть строкой.',
            'text.min'=>'Текст должен быть не менее 10 символов.',
            'title.min'=>'Название должно быть не менее 10 символов.',
            'title.max'=>'Название должно быть не Болше 255 символов.',
            'title.required'=>'Название поле обязательно.',
            'text.required'=>'Текстовое поле обязательно.',
            'phone.required'=>'The phone field is required.',
            'name.numeric'=>'Телефон должен быть номером',
            'phone.unique'=>'Такой номер уже существует',
        ];
    }
}
