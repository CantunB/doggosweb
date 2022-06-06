<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Adoption extends Model
{
    use HasFactory;

    protected $table = 'adoptions';
    protected $fillable = [
        'id_new_propietario',
        'id_mascota',
        'status',
    ];

    public function mascota(): BelongsTo
    {
        return $this->belongsTo(Pet::class, 'id_mascota');
    }
    public function propietario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_new_propietario');
    }


}
