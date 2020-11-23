<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            "company" => "required|string",
            "model" => "required|string",
            "owner_name" => "required|string",
            "address" => "required|string",
            "vehicle_number" => "required|string",
            "price" => "required",
        ];
    }
}
