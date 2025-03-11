<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Hash;

class UserImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
       
        // Limpiar número de documento y verificar si ya existe
        $nro_doc = trim($row['nrodni'] ?? '');
        if (empty($nro_doc)) {
            return null; // Si el número de documento está vacío, no insertar
        }

        if (User::where('nro_doc', $nro_doc)->exists()) {
            return null; // Si ya existe, no insertarlo
        }

        // Asignar contraseña: si 'codcli' no tiene valor, se asigna "12345678" por defecto.
        $passwordValue = (!empty($row['codcli'])) ? trim($row['codcli']) : '12345678';

        return new User([
            'name'     => trim(($row['apepat'] ?? 'sin-apallido-paterno') . ' ' . ($row['apemat'] ?? 'sin-apallido-materno') . ' ' .  ($row['nombre'] ?? 'Sin Nombre')), // Construye el nombre completo
            'email'    => trim($row['email']), // Si no tiene email, quedarÃ¡ null
            'password' => Hash::make($passwordValue), // ContraseÃ±a por defecto
            'foto'     => isset($row['rutafoto']) ? trim($row['rutafoto']) : null, // Guardar la ruta de la foto
            'estado'   => isset($row['estado']) ? (bool) $row['estado'] : false, // Convierte a booleano
            'tipo_doc' => trim($row['tipdoc']) ?? null,
            'nro_doc'  => trim($row['nrodni']) ?? null,
        ]);
    }
}
