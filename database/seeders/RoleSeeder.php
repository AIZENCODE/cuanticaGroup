<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Bloggers']);

        Permission::create(['name' => 'admin.dashboard','description' => 'Ver el Dashboard'])->syncRoles([$role1, $role2]);


        //Permisos de Usuarios
        Permission::create(['name' => 'admin.usuarios.index','description' => 'Ver listado de usuarios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.usuarios.edit','description' => 'Asignar roles'])->syncRoles([$role1]);

        // Permisos de Informacion
        Permission::create(['name' => 'admin.roles.index','description' => 'Ver listado de roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.create','description' => 'Crear Rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.edit','description' => 'Editar Rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.destroy','description' => 'Eliminar Rol'])->syncRoles([$role1]);

        // Permisos de Informacion
        Permission::create(['name' => 'admin.informacion.index','description' => 'Ver informacion de la empresa'])->syncRoles([$role1]);
        // Permission::create(['name' => 'admin.informacion.create','description' => ''])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.informacion.edit','description' => 'Editar informacion de la empresa'])->syncRoles([$role1]);
        // Permission::create(['name' => 'admin.informacion.destroy','description' => ''])->syncRoles([$role1]);
              
        // Permisos de Enfoques
        Permission::create(['name' => 'admin.enfoques.index','description' => 'Ver lista de enfoques'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.enfoques.create','description' => 'Crear enfoque'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.enfoques.edit','description' => 'Editar enfoque'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.enfoques.destroy','description' => 'Eliminar enfoque'])->syncRoles([$role1]);
              
        // Permisos de Servicios
        Permission::create(['name' => 'admin.services.index','description' => 'Ver lista de servicios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.services.create','description' => 'Crear servicio'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.services.edit','description' => 'Editar servicio'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.services.destroy','description' => 'Eliminar servicio'])->syncRoles([$role1]);

        // Permisos de Portafolio
        Permission::create(['name' => 'admin.portafolios.index','description' => 'Ver lista de portafolios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.portafolios.create','description' => 'Crear portafolio'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.portafolios.edit','description' => 'Editar portafolio'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.portafolios.destroy','description' => 'Eliminar portafolio'])->syncRoles([$role1]);

        // Permisos de Equipo
        Permission::create(['name' => 'admin.equipo.index','description' => 'Ver lista de equipo'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.equipo.create','description' => 'Crear miembro del equipo'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.equipo.edit','description' => 'Editar miembro del equipo'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.equipo.destroy','description' => 'Eliminar miembro del equipo'])->syncRoles([$role1]);

        // Permisos de Clientes
        Permission::create(['name' => 'admin.clientes.index','description' => 'Ver lista de clientes'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.clientes.create','description' => 'Crear cliente'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.clientes.edit','description' => 'Editar cliente'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.clientes.destroy','description' => 'Eliminar cliente'])->syncRoles([$role1]);

        // Permisos de Opiniones
        Permission::create(['name' => 'admin.opiniones.index','description' => 'Ver lista de opiniones'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.opiniones.create','description' => 'Crear opinion'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.opiniones.edit','description' => 'Editar opinion'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.opiniones.destroy','description' => 'Eliminar opinion'])->syncRoles([$role1]);


        //--------------------------------- Posts -------------------------------------

        // Permisos de Categorias
        Permission::create(['name' => 'admin.categories.index','description' => 'Ver lista de categorias'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.categories.create','description' => 'Crear categoria'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.edit','description' => 'Editar categoria'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.destroy','description' => 'Eliminar categoria'])->syncRoles([$role1]);

        // Permisos de Etiquetas
        Permission::create(['name' => 'admin.etiquetas.index','description' => 'Ver lista de etiquetas'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.etiquetas.create','description' => 'Crear etiqueta'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.etiquetas.edit','description' => 'Editar etiqueta'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.etiquetas.destroy','description' => 'Eliminar etiqueta'])->syncRoles([$role1]);

        // Permisos de Etiquetas
        Permission::create(['name' => 'admin.posts.index','description' => 'Ver lista de posts'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.create','description' => 'Crear post'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.edit','description' => 'Editar post'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.destroy','description' => 'Eliminar post'])->syncRoles([$role1, $role2]);
    }
}
