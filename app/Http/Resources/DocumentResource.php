<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DocumentResource extends JsonResource
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
            'title' => $this->title,
            'account_code' => $this->account_code,
            'total' => $this->total,
            'type' => $this->type,
            'status' => $this->status,
            'date_created' => $this->created_at
        ];
    }
}
