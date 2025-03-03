<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public function oficina()
    {
        return $this->belongsTo(Oficina::class);
    }

    protected $fillable = ['nombre', 'primerApellido', 'segundoApellido', 'rol', 'fechaNacimiento', 'dni', 'email', 'oficina_id'];
}
