<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use function PHPSTORM_META\map;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pets';

    protected $fillable = [
        'especie',
        'raza',
        'tamaño',
        'sexo',
        'peso',
        'edad',
        'nombre',
        'f_nacimiento',
        'foto',
        'id_propietario',
        'descripcion'
    ];

    /**
     * Get the user that owns the Pet
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function propietario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_propietario');
    }


}
