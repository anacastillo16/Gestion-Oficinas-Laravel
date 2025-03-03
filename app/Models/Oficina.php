<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    public function empleados()
    {
        return $this->hasMany(Empleado::class);
    }

    protected $fillable = ['nombre', 'direccion'];
}
