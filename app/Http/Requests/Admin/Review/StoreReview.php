<?php

namespace App\Http\Requests\Admin\Review;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreReview extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.review.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'trip' => ['required', 'string'],
            'rate' => ['required', 'integer'],
            'comment' => ['required', 'string'],
            'name' => ['required', 'string'],
            'country' => ['required', 'string'],
            'message' => ['nullable', 'string'],
            
        ];
    }
}
