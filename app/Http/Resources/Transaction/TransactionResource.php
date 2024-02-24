<?php

namespace App\Http\Resources\Transaction;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'amount'=> $this->amount,
            'user'=> $this->user,
            'status'=> $this->status,
            'currency'=> $this->currency,
            'payment_system'=> $this->payment_system,
            'product'=> $this->product,
        ];
    }
}
