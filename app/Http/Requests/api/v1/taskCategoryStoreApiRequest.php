<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;

class taskCategoryStoreApiRequest extends FormRequest
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
            'name' => 'required|max:50',
            'description' => 'required|max:100',
            'user_id' => 'required|exists:users,id'
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Category is required',
            'name.max' => 'Category can not be greater then 50 characters',
            'description.required' => 'Category details is required',
            'description.max' => 'Category details can not be greater then 50 characters',
            'user_id.required' => 'User id is required',
            'user_id.exists' => 'We does not find this user',
        ];
    }
}
