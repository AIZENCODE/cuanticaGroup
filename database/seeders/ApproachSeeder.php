<?php

namespace Database\Seeders;

use App\Models\Approach;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApproachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Approach::create([
       
            'name'=> 'INNOVACIÓN Y TRANSFORMACIÓN DIGITAL ENFOCADO EN LAS PERSONAS',
            'color'=> '#FFE791',
            'description'=> 'Mejoramos las capacidades y competencias tecnológicas de las personas.',
        ]);
        Approach::create([
       
            'name'=> 'INNOVACIÓN Y TRANSFORMACIÓN DIGITAL ENFOCADO EN LA MEJORA DE PROCESOS',
            'color'=> '#768070',
            'description'=> 'Automatizamos y optimizamos procesos operativos con tecnología digital.',
        ]);
        Approach::create([
       
            'name'=> 'INNOVACION Y TRANSFORMACIÓN DIGITAL ENFOCADO EN LA CULTURA ORGANIZACIONAL',
            'color'=> '#78C4C3',
            'description'=> 'Empoderamos a los directivos para el desarrollo de una cultura organizacional digital.',
        ]);
    }
}
