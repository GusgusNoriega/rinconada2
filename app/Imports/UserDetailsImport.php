<?php

namespace App\Imports;

use App\Models\UserDetail;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class UserDetailsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        
         // Buscar al usuario por el número de documento (nrodni)
         $nro_doc = trim($row['nrodni'] ?? '');
         $user = User::where('nro_doc', $nro_doc)->first();
 
         if (!$user) {
             return null; // Si el usuario no existe, no inserta detalles
         }

        // Verificar si el usuario ya tiene un detalle
        $existingDetail = UserDetail::where('user_id', $user->id)->exists();

        if ($existingDetail) {
            return null; // Evita insertar duplicados
        }

        return new UserDetail([
            'user_id'       => $user->id,
            'nro_doc'       => $nro_doc, // Asegúrate de guardar el número de documento también en los detalles
            'codigo'        => trim($row['codcli']) ?? null,
            'nombres'       => trim($row['nomcli']) ?? null,
            'apellido_pa'   => trim($row['apepat']) ?? null,
            'apellido_ma'   => trim($row['apemat']) ?? null,
            'nacionalidad'  => trim($row['codnac']) ?? null,
            'lugar_nac'     => trim($row['lugnac']) ?? null,
            'edo_civil'     => trim($row['estado_civil'] ?? null),
            'sexo'          => trim($row['sexo']) ?? null,
            'fech_nac'      => $this->formatDate(trim($row['fecnac']) ?? null),
            'tel_fijo'      => trim($row['telcli']) ?? null,
            'tel_cel'       => trim($row['celcli']) ?? null,
            'email'         => trim($row['email']) ?? null,
            'centro_estudio'=> trim($row['cenest']) ?? null,
            'especialidad'  => trim($row['especialidad']) ?? null,
            'profesion'     => trim($row['codprof']) ?? null,
            'centro_laboral'=> trim($row['cenlab']) ?? null,
        ]);
    }

    private function formatDate($date)
    {
        if ($date == '0000-00-00' || empty($date)) {
            return null; // Si la fecha es invÃ¡lida, retorna NULL
        }

        try {
            return \Carbon\Carbon::parse($date)->format('Y-m-d');
        } catch (\Exception $e) {
            return null; // Si hay error al parsear la fecha, retorna NULL
        }
    }
}
