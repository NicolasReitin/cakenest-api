<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user' => UserResource::make($this->whenLoaded('user')),
            'cupcakes' => CupcakeResource::collection($this->cupcakes), // Chargement des ressources pour chaque cupcake
            'totalPrice' => $this->calculateTotalPrice(), // Calcul du prix total de la commande
            'created_at' => $this->created_at,
        ];
    }

    private function calculateTotalPrice()
    {
        return $this->cupcakes->sum(function ($cupcake) {
            return round($cupcake->pivot->price * $cupcake->pivot->quantity, 2);
        });
    }
}
