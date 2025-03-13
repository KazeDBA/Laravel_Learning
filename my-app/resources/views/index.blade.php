<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- resources/views/index.blade.php -->
    @extends('layouts.app')

    @section('title', 'Home - Laravel')
    
    @section('content')
        <div class="jumbotron text-center">
            <h1>Welcome to Laravel</h1>
            <p class="lead">Laravel é um framework web com sintaxe expressiva e elegante.</p>
            <img src="https://laravel.com/img/logotype.min.svg" alt="Laravel Logo" class="img-fluid mt-4">
        </div>
        <div class="text-center">
            <a href="{{ route('information') }}" class="btn btn-primary mt-4">Sobre o Blade</a>
        </div>
    @endsection
</body>
</html>