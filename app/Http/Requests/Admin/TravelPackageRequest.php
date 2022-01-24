<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class TravelPackageRequest extends FormRequest
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
            'package_type' => 'required',
            'duration_jeep' => 'required',
            'includes' => 'required',
            'about' => 'required',
            'lodging_house' => 'required',
            'eat' => 'required',
            'type' => 'required|max:225',
            'price' => 'required|integer'
        ];
    }
}
