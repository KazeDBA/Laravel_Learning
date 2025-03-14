<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;

class IMCController extends Controller
{
    public function calculate(Request $request)
    {
        // Converte vírgulas para pontos antes da validação
        $request->merge([
            'weight' => str_replace(',', '.', $request->weight),
            'height' => str_replace(',', '.', $request->height)
        ]);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date|before:today',
            'weight' => 'required|numeric|min:20|max:300',
            'height' => 'required|numeric|min:0.5|max:2.5'
        ]);

        // Cálculos
        $age = (new DateTime($validated['dob']))->diff(new DateTime())->y;
        $imc = $validated['weight'] / pow($validated['height'], 2);
        
        // Formatação para exibição (vírgula como separador decimal)
        return redirect()->route('information')->with([
            'name' => $validated['name'],
            'age' => $age,
            'weight' => number_format($validated['weight'], 1, ',', ''),
            'height' => number_format($validated['height'], 2, ',', ''),
            'imc' => number_format($imc, 1, ',', ''),
            'classification' => $this->classifyIMC($imc)
        ]);
    }

    private function classifyIMC($imc)
    {
        if ($imc < 18.5) return 'Abaixo do peso';
        if ($imc < 25) return 'Peso Normal';
        if ($imc < 30) return 'Sobrepeso';
        if ($imc < 35) return 'Obesidade grau 1';
        if ($imc < 40) return 'Obesidade grau 2';
        return 'Obesidade grau 3 (mórbida)';
    }
}