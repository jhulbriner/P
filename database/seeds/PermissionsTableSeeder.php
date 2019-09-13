<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //users
        Permission::create([
            'name'           =>'Navegar usuarios',
            'slug'           =>'users.index',
            'description'    =>'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'           =>'Ver usuarios',
            'slug'           =>'users.show',
            'description'    =>'ver en detalle todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'           =>'Editar usuarios',
            'slug'           =>'users.edit',
            'description'    =>'editar todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'           =>'Eliminar usuarios',
            'slug'           =>'users.destroy',
            'description'    =>'eliminar los usuarios del sistema',
        ]);

        //roles
        Permission::create([
            'name'           =>'Navegar roles',
            'slug'           =>'roles.index',
            'description'    =>'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
            'name'           =>'Ver roles',
            'slug'           =>'roles.show',
            'description'    =>'ver en detalle todos los roles del sistema',
        ]);
        Permission::create([
            'name'           =>'Crear roles',
            'slug'           =>'roles.create',
            'description'    =>'crear todos los roles del sistema',
        ]);
        Permission::create([
            'name'           =>'Editar roles',
            'slug'           =>'roles.edit',
            'description'    =>'eliminar los roles del sistema',
        ]);
        Permission::create([
            'name'           =>'Eliminar roles',
            'slug'           =>'roles.destroy',
            'description'    =>'eliminar los roles del sistema',
        ]);

        //products
        Permission::create([
            'name'           =>'Navegar productos',
            'slug'           =>'products.index',
            'description'    =>'Lista y navega todos los productos del sistema',
        ]);
        Permission::create([
            'name'           =>'Ver productos',
            'slug'           =>'products.show',
            'description'    =>'ver en detalle todos los productos del sistema',
        ]);
        Permission::create([
            'name'           =>'Crear productos',
            'slug'           =>'products.create',
            'description'    =>'editar todos los productos del sistema',
        ]);
        Permission::create([
            'name'           =>'Editar productoss',
            'slug'           =>'products.edit',
            'description'    =>'eliminar los productos del sistema',
        ]);
        Permission::create([
            'name'           =>'Eliminar productos',
            'slug'           =>'products.destroy',
            'description'    =>'eliminar los productos del sistema',
        ]);
    }

}