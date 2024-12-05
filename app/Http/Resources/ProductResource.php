<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        // We Can Use $request->some or use $this->some but the best ($this->some)
        return [
            'key'=>$this->id,
            // 'product'=>$request->name,
            'name'=> $this->name
        ];
    }
}
