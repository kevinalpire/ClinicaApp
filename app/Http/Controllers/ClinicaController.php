<?php

namespace App\Http\Controllers;

use App\Models\Clinica;
use Illuminate\Http\Request;

class ClinicaController extends Controller
{

    public function index()
    {
        $clinicas = Clinica::paginate(15);
        return view('clinicas.index', compact('clinicas'));
    }

    public function create(){
        return view('clinicas.create');
    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required|string|max:120', // Añade las reglas de validación necesarias
        ]);

        Clinica::create([
            "nombre" => $request->nombre
        ]);

        return redirect()->route('clinicas.index');

    }

}
