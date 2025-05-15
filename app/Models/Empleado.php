<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'email', 'dni', 'departamento_id'];

    /**
     * Get the departamento that owns the empleado.
     */
    public function departamento(): BelongsTo
    {
        return $this->belongsTo(Departamento::class);
    }
}
