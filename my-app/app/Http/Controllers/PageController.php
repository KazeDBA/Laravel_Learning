<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('index'); // Retorna a view index.blade.php
    }

    public function information()
    {
        return view('information'); // Retorna a view information.blade.php
    }
}