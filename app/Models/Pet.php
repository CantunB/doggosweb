<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class Pet extends Model
{
    use HasFactory;

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

}
