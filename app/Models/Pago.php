<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pagos';
    
    protected $fillable = [
        'user_id',
        'concepto',
        'fecha',
        'vence',
        'documento',
        'currency_id',
        'importe',
        'estado',
    ];

    // RelaciÃ³n: cada pago PERTENECE a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
