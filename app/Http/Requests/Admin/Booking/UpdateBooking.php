<?php

namespace App\Http\Requests\Admin\Booking;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateBooking extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.booking.edit', $this->booking);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'string'],
            'email' => ['sometimes', 'email', 'string'],
            'country' => ['sometimes', 'string'],
            'phone' => ['sometimes', 'string'],
            'date' => ['sometimes', 'date'],
            'trip' => ['sometimes', 'string'],
            'adults' => ['sometimes', 'string'],
            'children' => ['sometimes', 'string'],
            'location' => ['sometimes', 'string'],
            
        ];
    }

    /**
     * Modify input data
     *
     * @return array
     */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
