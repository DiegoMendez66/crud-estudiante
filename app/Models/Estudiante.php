<?php

namespace App\Models;

#use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiante';

    protected $primaryKey = 'estudiante_id';

    protected $fillable = ['estudiante_nombre', 'estudiante_apellido',
            'estudiante_edad', 'estudiante_correo','estudiante_telefono'];
}
