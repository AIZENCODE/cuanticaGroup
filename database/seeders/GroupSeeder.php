<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Group::create([
       
            'name'=> 'Marcos Amasifuen Vásquez',
            'cargo'=> 'Gerente General',
            'frase'=> 'Visionamos una sociedad humana cada vez más digital',
            'facebook'=> 'https://www.facebook.com/marcosamasifuenvasquez',
            'instagram'=> 'https://www.instagram.com/marcosamasifuen/',
            'linkedin'=> 'https://www.linkedin.com/in/marcosamasifuen/',

         
        ]);

        Group::create([
       
            'name'=> 'Danna Maryory Cervantes Quispe',
            'cargo'=> 'Community Manager',
            'frase'=> 'Lo único imposible es aquello que no intentas',
            'facebook'=> 'https://www.facebook.com/danna.cervantesquispe',
            'instagram'=> 'https://www.instagram.com/danna.cervantesq/',
            'linkedin'=> 'https://www.linkedin.com/in/dannacervantes/',

         
        ]);

        Group::create([
       
            'name'=> 'Diego Miguel Saravia Sánchez',
            'cargo'=> 'Arquitecto de software',
            'frase'=> 'No se documenta un problema; se arregla',
            'facebook'=> 'https://www.facebook.com/diego.saravia.7967',
            'instagram'=> 'https://www.instagram.com/diego_saravia_sanchez/',
            'linkedin'=> 'https://www.linkedin.com/in/diegosaravias/',

         
        ]);

        Group::create([
       
            'name'=> 'Gilberto Alexander De la Cruz Saravia',
            'cargo'=> 'Ingeniero de software',
            'frase'=> 'Los límites solo están en tu mente',
            'facebook'=> 'https://www.facebook.com/gilbertoalexander.saravia',
            'instagram'=> 'https://www.instagram.com/gilbertoalexanderds/',
            'linkedin'=> 'https://www.linkedin.com/in/gilbertodelacruz/',

         
        ]);

        Group::create([
       
            'name'=> 'César Torres Tasaico',
            'cargo'=> 'Ingeniero de software',
            'frase'=> 'La Superación es el ideal que día a día debes anhelar',
            'facebook'=> 'https://www.facebook.com/cesar.torrestasaico',
            'instagram'=> 'https://www.instagram.com/gilbertoalexanderds/',
            'linkedin'=> '',

         
        ]);
    }
}
