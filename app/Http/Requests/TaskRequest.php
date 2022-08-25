<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            //'taskCategory_id' => '',
            'title' => 'required|max:255|unique:tasks',
            'description' => 'required|max:500',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please give a title',
            'title.unique' => 'Title should be unique',
            'title.max' => 'The title can not be greater than 255 characters.',
            'description.required' => 'Please give task description',
            'description.max' => 'The description can not be greater than 255 characters.',
        ];
    }
}
