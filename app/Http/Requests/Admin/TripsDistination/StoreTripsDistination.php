<?php

namespace App\Http\Requests\Admin\TripsDistination;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreTripsDistination extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.trips-distination.create');
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
            'distinations' => ['required'],
            
        ];
    }

    public function attributes(){
        return[
            "distinations" => "Distination Image"
        ];
    }
}
