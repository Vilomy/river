<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'price'=> $this->price,
            'description'=> $this->description,
            'duration'=> $this->duration,
            'warning_label'=> $this->warning_label,
            'legal_label'=> $this->legal_label,
            'title'=> $this->title,
            'vendor_code'=> $this->vendor_code,
        ];
    }
}
