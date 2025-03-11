<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Limpia la cache de roles y permisos (opcional pero recomendable)
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Definimos algunos permisos
        $permissions = [
            // Para cualquier usuario (global)
            'user_view',
            'user_create',
            'user_edit',
            'user_delete',
             // Para acciones sobre tu propio perfil
            'user_view_own',
            'user_edit_own',  
            'user_delete_own',
            'user_family_view',
            'user_family_create',
            'user_family_edit',
            'user_family_delete',
            // Para acciones sobre moneda (global)
            'currency_view',
            'currency_create',
            'currency_edit',
            'currency_delete',
             // Para acciones sobre pago (global)
            'pago_view',
            'pago_create',
            'pago_edit',
            'pago_delete',
        ];

        // Creamos los permisos
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Creamos algunos roles
        $adminRole = Role::create(['name' => 'admin']);
        $titularRole = Role::create(['name' => 'titular']);
        $familiarRole = Role::create(['name' => 'familiar']);

        // Asignamos todos los permisos al rol de Admin
        $adminRole->givePermissionTo(Permission::all());

        // Al Manager le asignamos un subconjunto de permisos
        $titularRole->givePermissionTo([
            'user_view_own',
            'user_edit_own',  
            'user_delete_own', 
            'user_family_view',
            'user_family_create',
            'user_family_edit',
            'user_family_delete',
        ]);

        // Al User le asignamos algunos permisos bÃ¡sicos
        $familiarRole->givePermissionTo([
            'user_view_own',
            'user_edit_own',  
            'user_delete_own', 
        ]);
    }
}
