<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        

        return [
            'name' => $this->faker->sentence(),
            'cargo' => $this->faker->sentence(),
            'frase' => $this->faker->word(),
            
            
            // 'image_url' => $this->faker->imageUrl(640,480),    
            

        ];
    }
}
