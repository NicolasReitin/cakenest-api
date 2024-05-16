<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\CupcakeOrderFactory;

use App\Models\Cupcake;
use App\Models\Order;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // CupcakeOrderFactory::new()->count(10)->create();

        // User::factory(4)->create();

        // User::factory()->create([
        //     'name' => 'azaz',
        //     'email' => 'test@example.com',
        //     'isAdmin' => true
        // ]);

        // Order::factory(2)->create([
        //     "user_id" => 2
        // ]);

            //création de 10 cupcake
        // Cupcake::factory()
        //     ->count(10)
        //     ->sequence(
        //         [
        //             'id' => 1,
        //             'image' => "/images/cupcake-item.png",
        //             'name' => "BerryJoy",
        //             'price' => 3.598,
        //             'quantity' => 0,
        //             'is_available' => true,
        //             'is_advertised' => false, 
        //         ],
        //         [
        //             "id"=> 2,
        //             "image"=> "/images/cupcake-item.png",
        //             "name"=> "MintCharm",
        //             "price"=> 5.4985,
        //             "quantity"=> 0,
        //             "is_available"=> true,
        //             "is_advertised"=> false,
        //         ],
        //         [
        //             "id"=> 3,
        //             "image"=> "/images/cupcake-item.png",
        //             "name"=> "FrostGlo",
        //             "price"=> 8.367,
        //             "quantity"=> 0,
        //             "is_available"=> true,
        //             "is_advertised"=> false,
        //         ],
        //         [
        //             "id"=> 4,
        //             "image"=> "/images/cupcake-item.png",
        //             "name"=> "LushCup",
        //             "price"=> 6.568,
        //             "quantity"=> 0,
        //             "is_available"=> true,
        //             "is_advertised"=> false,
        //         ],
        //         [
        //             "id"=> 5,
        //             "image"=> "/images/cupcake-item.png",
        //             "name"=> "VelvetCup",
        //             "price"=> 5.487,
        //             "quantity"=> 0,
        //             "is_available"=> true,
        //             "is_advertised"=> false,
        //         ],
        //         [
        //             "id"=> 6,
        //             "image"=> "/images/cupcake-item.png",
        //             "name"=> "ZestyFun",
        //             "price"=> 7.156,
        //             "quantity"=> 0,
        //             "is_available"=> true,
        //             "is_advertised"=> false,
        //         ],
        //         [
        //             "id"=> 7,
        //             "image"=> "/images/cupcake-item.png",
        //             "name"=> "BlissZu",
        //             "price"=> 7.5,
        //             "quantity"=> 0,
        //             "is_available"=> true,
        //             "is_advertised"=> false,
        //         ],
        //         [
        //             "id"=> 8,
        //             "image"=> "/images/cupcake-item.png",
        //             "name"=> "ZingCup",
        //             "price"=> 6.6,
        //             "quantity"=> 0,
        //             "is_available"=> true,
        //             "is_advertised"=> false,
        //         ],
        //         [
        //             "id"=> 9,
        //             "image"=> "/images/cupcake-item.png",
        //             "name"=> "FrostJoy",
        //             "price"=> 5.7,
        //             "quantity"=> 0,
        //             "is_available"=> true,
        //             "is_advertised"=> false,
        //         ],
        //         [
        //             "id"=> 10,
        //             "image"=> "/images/cupcake-item.png",
        //             "name"=> "CocoZest",
        //             "price"=> 4.7,
        //             "quantity"=> 0,
        //             "is_available"=> true,
        //             "is_advertised"=> false,
        //         ],
        //     )
        //     ->create();

                //creation d'un seul cupcake
        // Cupcake::factory()->create([
        //     'id' => 1,
        //     'imageSource' => "/images/cupcake-item.png",
        //     'title' => "BerryJoy",
        //     'price' => 3.598,
        //     'quantity' => 0,
        //     'isAvailable' => true,
        //     'isAdvertised' => false,
        // ]);
    }
}
