<?php

namespace App\Http\Requests;

class ProjectRequest extends FormRequest
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
            'name' => 'required|min:6|max:50',
            'submission_date' => 'required',
            'received_date' => 'required',
            'description' => 'required|min:6|max:150',
            'account_id' => 'required'
        ];
    }
}
