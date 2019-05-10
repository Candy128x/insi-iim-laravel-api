<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

class FetchFeedsFromDomainRequest extends Request
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
            'search_tags' => 'required|regex:/(^[A-Za-z0-9 ]+$)+/|max:255',
            'token' => 'required|regex:/(^[A-Za-z0-9 ]+$)+/',
        ];  
    }
    
     /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'search_tags.required' => 'search_tags required!',
            'token.required' => 'token required!',
        ];
    }
}
