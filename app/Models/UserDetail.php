<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'nro_doc', 'codigo', 'nombres', 'apellido_pa', 'apellido_ma', 'nacionalidad', 'lugar_nac',
        'tipo_doc', 'nro_doc', 'edo_civil', 'sexo', 'fech_nac', 'edad', 'fech_ingreso', 'nro_solicitud',
        'direccion', 'ubicacion', 'tel_fijo', 'tel_cel', 'email', 'centro_estudio', 'especialidad',
        'profesion', 'telefono_empresa', 'centro_laboral', 'fax_empresa', 'cargo_laboral', 'dir_empresa'
    ];

    // RelaciÃ³n uno a uno con User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
