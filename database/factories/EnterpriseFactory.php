<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enterprise>
 */
class EnterpriseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'razon_social' => $this->faker->name(),
            'banner_titulo' => $this->faker->name(),
            'banner_text' =>$this->faker->text(250),
            'direccion' => $this->faker->text(20),
            'correo' => $this->faker->email(),
            'description' => $this->faker->text(200),
            'quienes_somos' => $this->faker->text(200),
            'mision' => $this->faker->text(200),
            'proposito' => $this->faker->text(200),
            'valores' => $this->faker->text(200),
            'telefono_uno' => $this->faker->numerify('#########'),
            'telefono_dos' => $this->faker->numerify('#########'),
            
            // 'image_url' => $this->faker->imageUrl(640,480),    
            

        ];
    }
}
