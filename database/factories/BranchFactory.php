<?php

namespace Database\Factories;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Factories\Factory;

class BranchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Branch::class;

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
            'location'=>$this->faker->address,
            'phone'=>$this->faker->phoneNumber,
            'email'=>$this->faker->safeEmail,
            'time_open'=>$this->faker->time($format = 'H:i:s',$min='07:00:00', $max = '10:00:00'),
            'time_close'=>$this->faker->time($format = 'H:i:s',$min='19:00:00', $max = '23:00:00'),
            'document'=>$this->faker->numberBetween($min = 10100000000, $max = 20999999999),
            'opening'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'status'=>$this->faker->randomElement(['Operando','Mantenimiento','Clausurada']),
        ];
    }
}
