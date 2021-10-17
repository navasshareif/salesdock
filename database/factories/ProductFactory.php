<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->randomElement(['airtel', 'asianet', 'bsnl', 'vodafone', 'jio']),
            'upload_speed' => $this->faker->randomElement([25, 50, 100, 125, 150]),
            'download_speed' => $this->faker->randomElement([25, 50, 100, 125, 150]),
            'technology' => $this->faker->randomElement(['fiber', 'dialup']),
            'static_ip' => $this->faker->randomElement([0,1])
        ];
    }
}
