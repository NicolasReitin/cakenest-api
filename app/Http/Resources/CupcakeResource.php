<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;

class CupcakeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);


        return [
            'id' => $this->id,
            'title' => $this->name,
            'imageSource' => $this->image,
            'quantity' => $this->quantity,
            'isAvailable' => $this->is_available,
            'isAdvertiser' => $this->is_advertised,
            'price' => $this->price, // chiffre en decimal 2 chiffres apres la virgule
            'message' => $this->getMessage($request) 
        ];
    }

    protected function getMessage(Request $request) {
        
        $routeMessageMap = collect([
            'cupcakes.store' => 'Create Successful',
            'cupcakes.update' => 'Update Successful',
            'cupcakes.show' => 'Show Successful',
            'cupcakes.destroy' => 'Delete Successful',

        ]);

        return $routeMessageMap->get($request->route()->getName(), null);
    }
}
