<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'nama' => 'required|max:200',
            'email' => 'required|unique:posts|email|min:5|max:255',
            'message' => 'required|max:3000'
        ];

    }

    public function messages()
    {
        return [
            'nama' => 'A Name is required',
            'email' => ' A Email is required.',
            'message' => 'A message is required.'
        ];
    }

}
