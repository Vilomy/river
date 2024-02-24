<?php

namespace App\Http\Requests\Doctor;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'specialization' => 'required|string',
            'first_name' => 'required|string',
            'second_name' => 'required|string',
            'middle_name' => 'required|string',
            'work_period' => 'required|string',
            'experience' => 'required|integer',
        ];
    }
}
