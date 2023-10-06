<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $category_id = Category::pluck('id')->toArray();

        return [
            'name'=> $this->faker->randomDigit,
            'price'=> $this->faker->randomDigit,
            'detail'=> $this->faker->randomDigit,
            'inventory'=> $this->faker->randomDigit,
            'image'=> $this->faker->randomDigit,
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'category_id'=> $this->faker->randomElement($category_id),
        ];
    }
}

