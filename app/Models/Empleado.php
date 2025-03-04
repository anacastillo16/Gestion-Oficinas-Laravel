<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'primerApellido', 'segundoApellido', 'rol', 'fechaNacimiento', 'dni', 'email', 'oficina_id'];
    public function oficina()
    {
        return $this->belongsTo(Oficina::class);
    }
}
