<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LegalCase; // Asegúrate de importar el modelo de los casos

class AbogadoController extends Controller
{
    public function dashboard()
    {
        $cases = LegalCase::all(); // O ajusta según tu modelo/carga

        return view('abogado.dashboard', compact('cases'));
    }
}
