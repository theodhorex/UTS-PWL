<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Item;
use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Sale>
 */
class SaleFactory extends Factory
{
    protected $model = Sale::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date_of_purchase' => fake()->date(),
            'customer_id' => Customer::inRandomOrder()->value('customer_id') ?? Customer::factory(),
            'item_code' => Item::inRandomOrder()->value('item_code') ?? Item::factory(),
        ];
    }
}
