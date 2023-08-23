<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:2|max:155',
            'address' => 'required|min:2|max:255',
            'image' => 'required|image',
            'start_date' => 'required',
            'end_date' => 'required',
            'start_time' => 'required',
            'country_id' => 'required',
            'city_id' => 'required',
            'description' => 'required',
            'num_tickets' => 'required',
        ];
    }
}
