<?php

namespace App\Http\Resources\Order;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'status'=> $this->status,
            'product'=> $this->product,
            'user'=> $this->user,
        ];
    }
}
