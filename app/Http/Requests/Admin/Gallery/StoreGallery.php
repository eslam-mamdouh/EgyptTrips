<?php

namespace App\Http\Requests\Admin\Gallery;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreGallery extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.gallery.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'distination_id' => ['required','exists:trips_distinations,id' ,'numeric'],
            'galleries' => ['required']
            
        ];
    }

    public function attributes(){
        return[
            "distination_id" => "Distination",
            'galleries' => "Image"
        ];
    }
}
