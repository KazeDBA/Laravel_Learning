<!-- resources/views/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Information Page</title>
</head>
<body style="background-color: lightslategray">
       <!-- resources/views/information.blade.php -->
@extends('layouts.app')

@section('title', 'Sobre o Blade')

@section('content')
    <h1 class="text-lightcoral">Informações sobre o Blade</h1>
    <div class="mt-4">
        <p>Laravel Blade é um motor de template simples e poderoso...</p>
        <ul>
            <li><strong>Herança de Layout:</strong> Exatamente como você está usando agora! 🎉</li>
            <!-- Restante do conteúdo -->
        </ul>
    </div>
    <a href="{{ route('home') }}" class="btn btn-primary">Voltar para Home</a>
@endsection


</body>
</html>