<?php

namespace Database\Factories;

use App\Models\Cupcake;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),//crééer un user et récupère automatiquement l'id de celui qui vient d'etre créé
            'total' => random_int(1, 999)
        ];
    }

    public function configure()
{
    return $this->afterCreating(function (Order $order) {
        $cupcakes = Cupcake::inRandomOrder()->limit(rand(1, 5))->get();
        foreach ($cupcakes as $cupcake) {
            $quantity = rand(1, 5);
            $totalPrice = $cupcake->price * $quantity; // Calcul du prix total
            $order->cupcakes()->attach($cupcake, ['quantity' => $quantity, 'total_price' => $totalPrice]);
        }
    });
}
}
