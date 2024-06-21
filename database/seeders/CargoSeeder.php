<?php

namespace Database\Seeders;

use App\Models\Cargo;
use App\Models\Clinica;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clinica = Clinica::find(1);

        Cargo::create([
            "descripcion" => "Enfermero",
            "clinica_id" => $clinica->id
        ]);

        Cargo::create([
            "descripcion" => "Medico General",
            "clinica_id" => $clinica->id
        ]);

        Cargo::create([
            "descripcion" => "Cirujano",
            "clinica_id" => $clinica->id
        ]);


    }
}
