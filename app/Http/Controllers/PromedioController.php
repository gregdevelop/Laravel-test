<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromedioController extends Controller
{
    // Función para calcular el promedio
    public function calcularPromedio(Request $request)
    {
        $numeros = $request->input('numeros'); // Obtener los números del formulario

        if (empty($numeros)) {
            return view('promedio')->with('error', 'El array está vacío.');
        }

        $numeros = explode(',', $numeros); // Convertir la cadena de números en un array
        $numeros = array_map('floatval', $numeros); // Convertir los valores a números flotantes

        $promedio = array_sum($numeros) / count($numeros);

        return view('promedio')->with('promedio', $promedio);
    }
}
