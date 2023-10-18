<?php

namespace Database\Factories;

use App\Models\Cart;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cart_id' => Cart::factory(),
            //'item_id' => Item::factory(),
            'item_price' => $this->faker->randomDigit,
            'qty' => $this->faker->randomDigit,
        ];
    }
}


