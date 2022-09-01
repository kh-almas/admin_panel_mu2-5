<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;

class taskCategoryUpdateApiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'description' => 'required|max:100',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Category is required',
            'name.max' => 'Category can not be greater then 50 characters',
            'description.required' => 'Category details is required',
            'description.max' => 'Category details can not be greater then 50 characters',
        ];
    }
}
