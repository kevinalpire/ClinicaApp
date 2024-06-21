<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Clinica;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $clinica = Clinica::create([
            "nombre" => "Clinica Administracion"
        ]);

        User::create([
            "name" => "Kevin",
            "email" => "kevin@gmail.com",
            "password" => bcrypt('123123123'),
            "clinica_id" => $clinica->id
        ]);
    }
}
