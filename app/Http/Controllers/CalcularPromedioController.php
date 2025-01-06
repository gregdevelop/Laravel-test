<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcularPromedioController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if($request->ajax()){
            $total = 0;
            
            if (is_array($request->numeros)) {
                foreach ($request->numeros as $key => $value) {
                    if (!is_numeric($value))
                        return response()->json([
                            'errror' => true,
                        ]);
                    
                    $total += $value;
                }
                
                return response()->json([
                    'promedio' => $total / count($request->numeros),
                ]);
            }

            return false;
        }
    }
}
