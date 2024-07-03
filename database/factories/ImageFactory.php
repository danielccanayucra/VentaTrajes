<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Descargar imagen de un URL aleatorio
        $imageUrl = 'https://source.unsplash.com/featured/?car';
        $imageName = 'car_' . time() . '.jpg'; // Nombre de archivo único
        $imagePath = public_path('images/cars/' . $imageName); // Ruta donde se guardará la imagen

        // Descargar y guardar la imagen
        file_put_contents($imagePath, file_get_contents($imageUrl));

        return [
            'url' => 'images/cars/' . $imageName, // Ruta de la imagen en la base de datos
        ];
    }
}
