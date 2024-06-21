<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'clinica_id');
    }

    public function cantidadUsuarios(){
        return $this->users()->count();
    }

    public function cargos(){
        return $this->hasMany(Cargo::class, 'clinica_id');
    }

    public function cantidadCargos(){
        return $this->cargos()->count() ?? 0;
    }

}
