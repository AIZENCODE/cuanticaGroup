<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Score>
 */
class ScoreFactory extends Factory
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
            'calificacion' => $this->faker->randomElement([1, 2, 3, 4, 5]),
            'titulo' => $this->faker->word(),
            'comment' => $this->faker->text(200),
            
            // 'image_url' => $this->faker->imageUrl(640,480),    
            

        ];
    }
}
