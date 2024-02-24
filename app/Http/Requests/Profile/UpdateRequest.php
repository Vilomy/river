<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_name' => 'require|string',
            'second_name' => 'require|string',
            'middle_name' => 'require|string',
            'gender' => 'require|integer',
            'balance' => 'require|numeric',
            'med_card' => 'require|string',
            'phone' => 'require|string',
            'birthed_at' => 'require|date',
        ];
    }
}
