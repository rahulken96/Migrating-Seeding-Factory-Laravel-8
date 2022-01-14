<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Product::class;

    public function definition()
    {
        //Factory juga untuk menambahkan data dengan bantuan fungsi faker()
        return [
            'product_category_id' => $this->faker->numberBetween(1,3),
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomNumber(),
            'image' => $this->faker->imageUrl()
        ];
    }
}
