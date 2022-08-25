<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLibrariesImageRequest extends FormRequest
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
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'key' => 'image',
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'newImage' => 'required|image',
            'aboutImage' => 'nullable|max:255',
        ];
    }

    public function messages()
    {
        return [
            'newImage.required' => 'Please select a Image',
            'newImage.image' => 'Please select a Image',
            'aboutImage.max' => 'The description can not be greater than 255 characters.',
        ];
    }
}
