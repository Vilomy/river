<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'price' => 'required|numeric',
            'description' => 'required|string',
            'duration' => 'required|numeric',
            'warning_label' => 'required|string',
            'legal_label' => 'required|string',
            'title' => 'required|string',
            'vendor_code' =>'required|integer',
        ];
    }
}
