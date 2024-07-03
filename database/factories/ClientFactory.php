<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->name(),
            'apellido_paterno'=>$this->faker->firstName(),
            'apellido_materno'=>$this->faker->lastName(),
            'dni'=>$this->faker->numerify('########'),
            'email'=>$this->faker->unique()->freeEmail(),
            'telefono'=>$this->faker->e164PhoneNumber(),
            'direccion'=>$this->faker->address(),
            'edad'=>$this->faker->numberBetween($min = 20, $max = 60),
        ];
    }
}
