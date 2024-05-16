<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupcake extends Model
{
    use HasFactory;

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'cupcake_orders', 'cupcakes_id, orders_id')
            ->withPivot('price', 'quantity');
    }
}
