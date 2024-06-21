<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Clinica;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index()
    {
        $cargos = Cargo::paginate(15);
        return view('cargos.index', compact('cargos'));
    }

    public function create(){
        $clinicas = Clinica::all();
        return view('cargos.create', [
            "clinicas" => $clinicas
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'descripcion' => 'required|string|max:120',
            // 'clinica_id' => 'exists:clinicas'
        ]);

        Cargo::create([
            "descripcion" => $request->descripcion,
            "clinica_id" => $request->clinica_id
        ]);

        return redirect()->route('cargos.index');

    }

}
