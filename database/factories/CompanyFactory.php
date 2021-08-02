<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->name,
            'description'=>$this->faker->text($maxNbChars = 200),
            'rubro'=>$this->faker->word,
            'id_branch'=>$this->faker->rand(1,50)->unique(),
        ];
    }
}
