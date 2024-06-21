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

}
