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
            'stock'=>$this->faker->numberBetween(1, 100),
            'precio'=>$this->faker->randomFloat(2, 10, 1000),
            'talla'=>$this->faker->randomElement(['XS','S','M','L','XL','XXL']),
            'imagen'=> $this->faker->image(storage_path('app/public/posts'), 400, 300, null, false), // Genera una imagen aleatoria y la guarda en storage/app/public/images
            'categorie_id'=>Category::all()->random()->id
        ];
    }
}
