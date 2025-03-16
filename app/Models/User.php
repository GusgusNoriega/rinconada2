<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'foto',
        'estado',
        'tipo_doc',
        'nro_doc',
        'codcli',
        'codpar',
        'codfam',
        'CodSoc',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'estado' => 'boolean',
    ];

    /**
     * RelaciÃ³n muchos-a-muchos consigo mismo,
     * a travÃ©s de la tabla pivote user_relatives.
     */
    public function relatives(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,            // Modelo al que se relaciona (la misma tabla 'users')
            'user_relatives',       // Nombre de la tabla pivote
            'user_id',              // Nombre de la FK en la pivote que apunta a este modelo
            'relative_id'           // Nombre de la FK en la pivote que apunta al modelo relacionado
        )
        ->withPivot('relationship_type')  // Para acceder al campo extra en la pivote
        ->withTimestamps();
    }

    /**
     * (Opcional) RelaciÃ³n "inversa" para ver quiÃ©n te marcÃ³ como su pariente,
     * en caso de que quieras consultar "quÃ© relaciones apuntan a mÃ­".
     */
    public function relatedToMe(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'user_relatives',
            'relative_id',
            'user_id'
        )
        ->withPivot('relationship_type')
        ->withTimestamps();
    }

    // RelaciÃ³n uno a uno con UserDetail
    public function detail()
    {
        return $this->hasOne(UserDetail::class);
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }
}
