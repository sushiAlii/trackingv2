<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DocumentDetailResource extends JsonResource
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
            'product_id' => $this->product_id,
            'product_name' => $this->name,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'total' => $this->total
            
        ];
    }
}
