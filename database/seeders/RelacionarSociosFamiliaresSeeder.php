<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class RelacionarSociosFamiliaresSeeder extends Seeder
{
    public function run()
    {
        // 1. Obtenemos todos los usuarios que NO tengan CodSoc (o sea, son familiares).
        $familiares = User::whereNull('CodSoc')
                    ->orWhere('CodSoc', '')
                    ->get();

        foreach ($familiares as $familiar) {
            // 2. Buscamos el socio que tenga el MISMO codcli, pero con CodSoc asignado
            $socio = User::where('codcli', $familiar->codcli)
                         ->whereNotNull('CodSoc')
                         ->first();

            // 3. Si encontramos un socio, lo relacionamos desde el SOCIO
            if ($socio) {
                // "syncWithoutDetaching" evita sobreescribir otras relaciones que pudiera tener
                $socio->relatives()->syncWithoutDetaching([
                    $familiar->id => ['relationship_type' => 'familiar']
                ]);
            }
        }
    }
}
