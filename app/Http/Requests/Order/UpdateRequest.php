<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'status' => 'require|integer',
            'product' => 'require|string',
            'user' => 'require|string',
        ];
    }
}
