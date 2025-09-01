<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PracticeLocationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=> $this->id,
            'name'=> $this->name,
            'practiceLocationStatus'=> $this->practice_location_status,
            'userId'=> $this->user_id,
            'npiCode'=> $this->npi_code,
            'address1'=> $this->address1,
            'address2'=> $this->address2,
            'city'=> $this->city,
            'state'=> $this->state,
            'zip'=> $this->zip,

        ];
}
}