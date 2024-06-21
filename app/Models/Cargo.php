<?php

namespace App\Models;

use App\Models\Clinica;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cargo extends Model
{
    use HasFactory;

    protected $fillable = [
        "descripcion",
        "clinica_id"
    ];

    public function clinica(){
        return $this->belongsTo(Clinica::class, 'clinica_id');
    }

}
