<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CupcakeOrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'cupcake_id' => $this->cupcake_id,
            'cupcake_name' => $this->cupcake->name,
            'price' => $this->price,
            'quantity' => $this->quantity,
        ];
    }
}
