<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departamento extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'ubicacion'];

    /**
     * Get the empleados for the departamento.
     */
    public function empleados(): HasMany
    {
        return $this->hasMany(Empleado::class);
    }
}
