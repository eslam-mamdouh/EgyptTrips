<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class postBooking extends FormRequest
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
            'name'=>'required|string',
            'email'=>'required|string',
            'phone'=>'required|string',
            'country'=>'required|string',
            'date'=>'required|date',
            'location'=>'required|string',
            'adults'=>'required|numeric|min:1',
            'children'=>'required|numeric|min:0',
            'terms'=>'required',
        ];
    }

    public function attributes()
    {
        return [
            'terms'=>'terms and conditions'
        ];
    }

}
