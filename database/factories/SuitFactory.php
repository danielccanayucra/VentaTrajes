<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Suit>
 */
class SuitFactory extends Factory
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
            'descripcion'=>$this->faker->text(50),
            'stock'=>$this->faker->randomElement(['Disponible','Agotado']),
            'precio'=>$this->faker->numerify('####'),
            'talla'=>$this->faker->randomElement(['XS','S','M','L','XL','XXL']),
            'imagen'=>$this->faker->name(),
            'categorie_id'=>Category::all()->random()->id
        ];
    }
}
