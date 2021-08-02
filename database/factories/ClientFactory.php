<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->firstName($gender = null|'male'|'female'),
            'last_name'=>$this->faker->lastName,
            'phone'=>$this->faker->phoneNumber,
            'gender'=>$this->faker->randomElement(['N/A','Masculino','Femenino']),
            'email'=>$this->faker->safeEmail,
            'document'=>$this->faker->numberBetween($min = 10000000, $max = 99999999),
            'document_type'=>$this->faker->randomElement(['N/A','DNI','Pasaporte']),
            'status'=>$this->faker->randomElement(['Activo','Promovido','Perdido']),
        ];
    }
}
