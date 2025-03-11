<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Verifica (o crea) el rol admin si no existe
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Crea el usuario administrador
        $adminUser = User::create([
            'name' => 'Administrador',
            'email' => 'gusgusnoriega@gmail.com',
            'password' => bcrypt('123456789'), // Cambia esta contraseÃ±a segÃºn necesites
            'foto' => null, // o la ruta de la foto si lo deseas
            'estado' => true, // TRUE porque estÃ¡ activo
            'tipo_doc' => 'DNI',
            'nro_doc' => '987654321',
            'force_password_change' => false,
        ]);

        // Asigna el rol al usuario
        $adminUser->assignRole($adminRole);
    }
}
