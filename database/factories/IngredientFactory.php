<?php

namespace Database\Factories;

use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ingredient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'presentation' => $this->faker->paragraph(),
            'brand' => $this->faker->sentence(),
            'type' => $this->faker->randomElement(['verdura','abarrote','bebidas']),
            'name' => $this->faker->sentence(),
            'measure' => $this->faker->randomElement(['kilogramos','litros']),
            'price' => $this->faker->sentence(),
        ];
    }
}
