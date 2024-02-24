<?php

namespace App\Http\Resources\Profile;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'first_name'=> $this->first_name,
            'second_name'=> $this->second_name,
            'middle_name'=> $this->middle_name,
            'gender'=> $this->gender,
            'balance'=> $this->balance,
            'med_card'=> $this->med_card,
            'phone'=> $this->phone,
            'birthed_at'=> $this->birthed_at,
        ];
    }
}
