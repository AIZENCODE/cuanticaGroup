<?php

namespace Database\Seeders;

use App\Models\Enterprise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnterpriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Enterprise::create([
       
            'name'=> 'Cuantica Group',
            'razon_social'=> 'Cuantica Group S.A.C.',
            'banner_titulo'=> 'Soluciones Digitales',
            'banner_text'=> 'Ayudamos a las personas y organizaciones a innovar y a mejorar sus capacidades y competencias digitales.',
            'description'=> 'Somos un equipo de personas de Chile, Bolivia, Perú y Colombia entusiastas, apasionados por los negocios y las tecnologías. digital.',
            'direccion'=> 'Jr. Irribarren Nro. 1148 Dpto. 4 Int. 4 - Suruillo, Lima, Cuadra 11 de Irribarren',
            'correo'=> ' marcos@cuanticagroup.com
            ',
            'quienes_somos'=> 'Somos un equipo de personas de Chile, Bolivia, Perú y Colombia entusiastas, apasionados por los negocios y las tecnologías que ponemos a disposición nuestros conocimientos y experiencias para contribuir en la construcción de una sociedad cada vez más digital.',
            'mision'=> 'Somos un equipo de personas que ofrecemos productos, servicios y soluciones en tecnologías de información y comunicación a organizaciones privadas y públicas para la mejora de las capacidades y competencias tecnológicas de los usuarios, de sus procesos y de su cultura organizacional.',
            'valores'=> 'La innovación, la ética y el alto cumplimiento de nuestros acuerdos. Ejercemos Responsabilidad Social en los ámbitos y sectores donde intervenimos como parte de nuestra contribución para el desarrollo de una sociedad digital.',
            'proposito'=> 'Ayudamos a organizaciones públicas y privadas a mejorar sus capacidades y competencias tecnológicas de sus usuarios, de sus procesos operativos y la de su cultura organizacional.',
            'telefono_uno'=> '51968370868',
            'telefono_dos'=> '968370868',
            'whatsapp'=> 'https://api.whatsapp.com/send?phone=968370868',
            'facebook'=> 'https://www.facebook.com/CuanticaGroup',
            'linkedin'=> 'https://www.linkedin.com/company/cuanticagroup/',
            'instagram'=> 'https://www.instagram.com/cuanticagroup/',
            'twitter'=> 'https://twitter.com/CuanticaGroup',
            'youtube'=> 'https://www.youtube.com/@cuanticagroup',

        ]);
    }
}
