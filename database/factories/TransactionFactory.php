<?php

namespace Database\Factories;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::factory()->create();
        $cart = Cart::factory()->create();
        return [
            'user_id' => $user->id,
            'branch_id' => $user->branch_id,
            'cart_id' => $cart->id,
            'status' => $this->faker->randomElement(['ongoing', 'cancelled', 'completed']),
            'paid_amount' => $this->faker->randomNumber(2),
        ];
    }
}

