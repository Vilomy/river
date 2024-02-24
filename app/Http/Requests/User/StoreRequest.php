<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'require|string',
            'email' => 'require|string',
            'password' => 'require|string',
        ];
    }
}
