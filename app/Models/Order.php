<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->BelongsTo(User::class);
    }

    public function cupcakes()
    {
        return $this->belongsToMany(Cupcake::class, 'cupcakes');
    }
}
