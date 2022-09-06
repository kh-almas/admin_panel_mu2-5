<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;

class taskStoreApiRequest extends FormRequest
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
            'taskCategory_id' => 'required|exists:taskcategories,id',
            'title' => 'required|max:255',
            'description' => 'required|max:500',
            'important' => 'boolean',
            'user_id' => 'required|exists:users,id',
        ];
    }

    public function messages()
    {
        return[
            'taskCategory_id.required' => 'Category id is required',
            'taskCategory_id.exists' => 'Give a valid category Id',
            'title.required' => 'Task title is required',
            'title.max' => 'Task title can not be greater then 255 characters',
            'description.required' => 'Task description is required',
            'description.max' => 'Task description can not be greater then 500 characters',
            'important.boolean' => 'Task important should be boolean true or false',
            'user_id.required' => 'User id is required',
            'user_id.exists' => 'Give a valid user id',
        ];
    }
}
