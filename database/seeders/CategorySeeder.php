<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(20)->has(
            Post::factory(20)
            ->state(new Sequence(
           [
                   'is_published' => true,
                   'published_at' => now(),

           ],
           [
                   'is_published' => false,
                   'published_at' => null,

           ],
            ))
            ->hasTags(2)
                )->create();
   
    }
}
