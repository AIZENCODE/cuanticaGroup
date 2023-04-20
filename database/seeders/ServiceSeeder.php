<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Service::create([
       
            'name'=> 'Office TI',
            'slug'=> 'office-ti',
            'description'=> '¿Preocupado por cómo manejar la demanda y necesidad de Tecnología de Información y Comunicación en tu empresa?',
            'content'=> 'Opción 1: Identificamos las necesidades tecnológicas de tu organización, diseñamos la arquitectura tecnológica idónea y acorde al modelo del negocio y la implementamos. Realizamos la transferencia de conocimientos al equipo que liderará la gestión y control del área',
            'outstanding'=> 1,
            'status'=> 1,
        ]);

        Service::create([
       
            'name'=> 'Developer Cuantica',
            'slug'=> 'developer-cuantica',
            'description'=> 'Empleamos la combinación de metodologías y técnicas de programación para garantizar la solidez, seguridad y usabilidad de tus proyectos tecnológicos',
            'content'=> 'Empleamos la combinación de metodologías y técnicas de programación para garantizar la solidez, seguridad y usabilidad de tus proyectos tecnológicos. Nuestro equipo de expertos tiene amplio dominio de las herramientas y metodologías de
            desarrollo más usadas en la construcción de software:
            
            Metodología PMBOK y framework SCRUM.
            Lenguajes de programación: Visual Studio .NET, Java, ASP.NET, C#, VB.NET, ASP, PHP, Power Builder, Visual Basic, Sharepoint, ABAP.
            Bases de datos: Microsoft SQL Server, Oracle, MySQL.
            Frameworks: MVC, SPRING, ZendFramework, Laravel. 
            Gestores de contenido: Drupal, WordPress, Prestashop, Joomla, entre otros.',
            'outstanding'=> 1,
            'status'=> 1,
        ]);

        Service::create([
       
            'name'=> 'Diseño profesional de paginas web',
            'slug'=> 'diseño-profesional-de-pagina-web',
            'description'=> 'En Cuantica Group para el desarrollo de soluciones tecnológicas utilizamos el enfoque Agile (Agile Scrum), esto debido a la flexibilidad e inmediatez en la respuesta para amoldar el servicio y su desarrollo a las circunstancias específicas del modelo del negocio ',
            'content'=> 'En Cuantica Group para el desarrollo de soluciones tecnológicas utilizamos el enfoque Agile (Agile Scrum), esto debido a la flexibilidad e inmediatez en la respuesta para amoldar el servicio y su desarrollo a las circunstancias específicas del modelo del negocio y de nuestros clientes, en esencia, el Agile Scrum facilita la gestión de servicios de forma flexible, autónoma y eficaz reduciendo los costes e incrementando la productividad. 

            Características
            
            ☑️ Diseño personalizado, de acuerdo a las necesidades del cliente y del modelo del negocio. (Menú o secciones personalizadas)
            
            ☑️ Responsive, es decir se puede visualizar desde diferentes dispositivos (tablet, celular, computadora de escritorio, laptop)
            
            ☑️ Mapa de geolocalización del negocio.
            
            ☑️ Formulario para tus clientes.
            
            ☑️ Integrada con chat para whatsapp business o messenger.
            
            ☑️ Correos corporativos.
            
            ☑️ Integración con redes sociales y optimizado para SEO para el posicionamiento en los buscadores.
            
            ☑️ 100% Autoadministrable.
            
            ☑️ Capacitación para la administración de tu web y entrega del manual del usuario.',
            'outstanding'=> 1,
            'status'=> 1,
        ]);

        Service::factory(10)->create();
    }
}
