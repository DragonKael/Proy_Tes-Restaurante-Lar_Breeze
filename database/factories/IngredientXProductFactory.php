<?php

namespace Database\Factories;

use App\Models\Ingredient_x_Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientXProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ingredient_x_Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'quantity'=>$this->faker->paragraph(),
        ];
    }
}
