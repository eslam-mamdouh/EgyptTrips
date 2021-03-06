<?php

namespace App\Http\Requests\Admin\Trip;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Brackets\Translatable\TranslatableFormRequest;
use Illuminate\Support\Collection;
class StoreTrip extends TranslatableFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.trip.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function untranslatableRules(): array
    {
        return [
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'child_price' => ['required', 'numeric'],
            'distination_id' => ['required', 'exists:trips_distinations,id' ,'numeric'],   
            'trips' => ['required']         
        ];
    }

    // public function translatableRules($locale)
    // {
    //     return [
    //         'title' => ['required', 'string'],
    //         'description' => ['required', 'string'],
    //     ];
    // }

    public function defineRequiredLocales() : Collection {
        return collect(['en']);
    }

    public function attributes(){
        return[
            "distination_id" => "Distination",
            'trips' => "Trip Image"
        ];
    }

    
}
