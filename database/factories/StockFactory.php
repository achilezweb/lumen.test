<?php

namespace Database\Factories;

use App\Models\Stock;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
    protected $model = Stock::class;

    public function definition(): array
    {
    	return [
            'product_id' => function() {
                return Product::factory()->create()->id;
            },
            'on_hand' => $this->faker->randomNumber(),
            'taken' => $this->faker->randomDigit(),
            'production_date' => $this->faker->dateTime(),
    	];
    }
}
