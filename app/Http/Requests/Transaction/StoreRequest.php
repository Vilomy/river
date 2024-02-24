<?php

namespace App\Http\Requests\Transaction;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'amount' => 'require|numeric',
            'user' => 'require|string',
            'status' => 'require|integer',
            'currency' => 'require|string',
            'payment_system' => 'require|string',
            'product' => 'require|string',
        ];
    }
}
