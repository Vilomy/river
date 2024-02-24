<?php

namespace App\Http\Resources\Doctor;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DoctorResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'specialization'=> $this->specialization,
            'first_name'=> $this->first_name,
            'second_name'=> $this->second_name,
            'middle_name'=> $this->middle_name,
            'experience'=> $this->experience,
            'work_period'=> $this->work_period,
        ];
//        return parent::toArray($request);
    }
}
