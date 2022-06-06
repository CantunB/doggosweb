<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vet extends Model
{
    use HasFactory;

    protected $table = 'vets';

    protected $fillable = [
        'degree',
        'nombre',
        'paterno',
        'materno',
        'f_nacimiento',
        'experience',
        'email',
        'descripcion',
        'avatar'
    ];

    public function getFullNameAttribute()
    {
        return "{$this->degree}. {$this->nombre} {$this->paterno} {$this->materno}";
    }

}
