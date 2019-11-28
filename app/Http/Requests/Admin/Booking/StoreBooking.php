<?php

namespace App\Http\Requests\Admin\Booking;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreBooking extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.booking.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'string'],
            'country' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'date' => ['required', 'date'],
            'trip' => ['required', 'string'],
            'adults' => ['required', 'string'],
            'children' => ['required', 'string'],
            'location' => ['required', 'string'],
            
        ];
    }
}
