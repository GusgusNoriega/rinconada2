<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UserImport;
use App\Imports\UserDetailsImport;

class ImportController extends Controller
{
    public function index()
    {
        return view('importar');
    }
    
    public function importar(Request $request)
    {
        $request->validate([
            'archivo_csv' => 'required|mimes:csv,txt'
        ]);
    
        // Almacenar el archivo temporalmente y obtener la ruta
        $path = $request->file('archivo_csv')->store('temp');

        // Importar usuarios usando la ruta almacenada
        Excel::import(new UserImport, $path);

        // Importar detalles de usuario despuÃ©s
        Excel::import(new UserDetailsImport, $path);

        return back()->with('success', 'Archivo importado correctamente.');
    }
}