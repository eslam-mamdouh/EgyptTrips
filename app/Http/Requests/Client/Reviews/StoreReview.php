<?php

namespace App\Http\Requests\Client\Reviews;

use Illuminate\Foundation\Http\FormRequest;

class StoreReview extends FormRequest
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
            'trip'   =>['required','string','exists:trips,title'],
            'name'   =>['required','string'],
            'country'=>['required' ,'string'],
            'comment'=>['required','string'],
            'rate'   =>['required','in:1,2,3,4,5'],
        ];
    }
}
