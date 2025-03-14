<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    @extends('layouts.app')

    @section('title', 'Calculadora IMC')
    
    @section('content')
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-5">Bem aventurados os que calculam seu IMC!</h1>
            <p class="lead">Monitore sua saúde de forma simples e eficiente.</p>
            <hr class="my-4">

            <!-- Exibe erros de validação -->
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <!-- Formulário -->
            <form method="POST" action="{{ route('calculate') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" 
                        value="{{ old('name') }}" 
                        placeholder="Ex: João Silva" 
                        required>
                </div>

                <div class="form-group">
                    <label for="dob">Data de Nascimento</label>
                    <input type="date" class="form-control" id="dob" name="dob" 
                        value="{{ old('dob') }}" 
                        max="{{ now()->format('Y-m-d') }}" 
                        required>
                </div>

                <div class="form-group">
                    <label for="weight">Peso (kg)</label>
                    <input type="text" class="form-control" id="weight" name="weight" 
                        value="{{ old('weight') }}" 
                        placeholder="Ex: 75,5 (use vírgula para decimais)" 
                        required>
                </div>

                <div class="form-group">
                    <label for="height">Altura (m)</label>
                    <input type="text" class="form-control" id="height" name="height" 
                        value="{{ old('height') }}" 
                        placeholder="Ex: 1,75 (use vírgula para decimais)" 
                        required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Calcular IMC</button>
            </form>
        </div>
    </div>
    @endsection
</body>
</html>