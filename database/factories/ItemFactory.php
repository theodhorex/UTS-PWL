<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Item>
 */
class ItemFactory extends Factory
{
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_code' => fake()->unique()->numerify('IT###'),
            'item' => fake()->words(2, true),
            'unit_price' => fake()->numberBetween(10000, 500000),
            'company_id' => Company::inRandomOrder()->value('company_id') ?? Company::factory(),
        ];
    }
}
