<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLibrariesVideoRequest extends FormRequest
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
            'file' => 'required|mimes:mp4',
            'thumbnail' => 'required|image',
            'about' => 'nullable|max:255',
        ];
    }

    public function messages()
    {
        return [
            'file.required' => 'Please select a Video',
            'file.mimes' => 'Please select a Video',
            'thumbnail.required' => 'Please select a thumbnail',
            'thumbnail.image' => 'Please select a image as thumbnail',
            'about.max' => 'The description can not be greater than 255 characters.',
        ];
    }
}
