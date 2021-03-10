<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PPMPTravelLogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'ppmp_id' => $this->ppmp_id,
            'office' => $this->office,
            'date' => $this->date_arrived
        ];
    }
}
