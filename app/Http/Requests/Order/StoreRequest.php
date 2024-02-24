<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
