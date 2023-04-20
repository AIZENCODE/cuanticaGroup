<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Approach>
 */
class ApproachFactory extends Factory
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

            'description' => $this->faker->text(200),
            'color' => $this->faker->hexColor()
            
            // 'image_url' => $this->faker->imageUrl(640,480),    
            

        ];
    }
}
