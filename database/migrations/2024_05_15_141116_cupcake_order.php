<?php

use App\Models\Cupcake;
use App\Models\Order;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cupcake_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'cupcakes_id')->constrained(table: 'cupcakes');
            $table->foreignId(column: 'orders_id')->constrained(table: 'orders');
            $table->decimal('price', 8, 4);
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
