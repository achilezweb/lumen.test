<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
    	return [
            'code' => Str::random(10),
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(),
    	];
    }
}
