<?php
namespace Database\Factories;

use App\Models\Cupcake;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class CupcakeOrderFactory extends Factory
{
    public function model()
    {
        return 'App\Models\CupcakeOrder';
    }

    /**
     * Get the name of the table that should be assigned to the model.
     *
     * @return string
     */
    protected $table = 'cupcake_orders'; // Specify the correct table name here
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cupcake = Cupcake::inRandomOrder()->first();
        $order = Order::inRandomOrder()->first();
        $price = $cupcake->price;
        $quantity = $this->faker->numberBetween(1, 5); // Change the range as needed

        return [
            'cupcakes_id' => $cupcake->id,
            'orders_id' => $order->id,
            'price' => $price,
            'quantity' => $quantity,
        ];
    }
}

