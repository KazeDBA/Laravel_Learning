<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function information()
    {
        // Busca os dados da sessão para exibir na view
        return view('information', [
            'name' => session('name'),
            'age' => session('age'),
            'weight' => session('weight'),
            'height' => session('height'),
            'imc' => session('imc'),
            'classification' => session('classification')
        ]);
    }
}