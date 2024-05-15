<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        auth()->loginUsingId($this->id); //permet de se connecter automatiquement au user id  pris dans la requete pour simuler qu'on est le user connecté.
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->when(
                $this->resource->is(auth()->user()), // TODO check permissions on this user before updating the email address and password for this user and update the email address and password accordingly if necessary otherwise it will fail silently and will return false
                $this->email
            ),
            'isAdmin' => $this->isAdmin,
            'orders' => OrderResource::collection($this->orders), $this->whenLoaded('orders'),
            'registeredAt' => $this->created_at,
        ];
    }
}
