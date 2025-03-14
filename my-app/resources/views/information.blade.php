@extends('layouts.app')

@section('title', 'Resultado do IMC')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h3 class="mb-0"><i class="fas fa-chart-line"></i> Resultado do IMC</h3>
        </div>

        <div class="card-body">
            <!-- Dados Pessoais -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <h5><i class="fas fa-user"></i> {{ $name }}</h5>
                    <p class="mb-1"><strong>Idade:</strong> {{ $age }} anos</p>
                    <p class="mb-1"><strong>Altura:</strong> {{ $height }} m</p>
                    <p class="mb-0"><strong>Peso:</strong> {{ $weight }} kg</p>
                </div>
                
                <!-- Resultado do IMC -->
                <div class="col-md-6 text-center">
                    <div class="alert alert-info">
                        <h4 class="alert-heading">Seu IMC é</h4>
                        <h2 class="display-4">{{ $imc }}</h2>
                        <p class="mb-0">Classificação: <strong>{{ $classification }}</strong></p>
                    </div>
                </div>
            </div>

            <!-- Tabela de Referência -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>IMC</th>
                            <th>Classificação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr @if($classification == 'Abaixo do peso') class="table-warning" @endif>
                            <td>&lt; 18,5</td>
                            <td>Abaixo do peso</td>
                        </tr>
                        <tr @if($classification == 'Peso Normal') class="table-success" @endif>
                            <td>18,5 - 24,9</td>
                            <td>Peso Normal</td>
                        </tr>
                        <tr @if($classification == 'Sobrepeso') class="table-warning" @endif>
                            <td>25 - 29,9</td>
                            <td>Sobrepeso</td>
                        </tr>
                        <tr @if($classification == 'Obesidade grau 1') class="table-danger" @endif>
                            <td>30 - 34,9</td>
                            <td>Obesidade grau 1</td>
                        </tr>
                        <tr @if($classification == 'Obesidade grau 2') class="table-danger" @endif>
                            <td>35 - 39,9</td>
                            <td>Obesidade grau 2</td>
                        </tr>
                        <tr @if($classification == 'Obesidade grau 3 (mórbida)') class="table-danger" @endif>
                            <td>≥ 40</td>
                            <td>Obesidade grau 3 (mórbida)</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Botões de Ação -->
            <div class="mt-4 d-flex justify-content-between">
                <a href="{{ route('home') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left"></i> Voltar
                </a>
                <button onclick="window.print()" class="btn btn-outline-primary">
                    <i class="fas fa-print"></i> Imprimir
                </button>
            </div>
        </div>
    </div>

    <!-- Aviso -->
    <div class="alert alert-warning mt-4">
        <i class="fas fa-exclamation-triangle"></i> O IMC é uma medida geral e não substitui uma avaliação médica.
    </div>
</div>
@endsection

@push('styles')
<style>
    .table td, .table th {
        text-align: center;
    }
    
    .alert-info {
        border-left: 5px solid #17a2b8;
    }
    
    @media print {
        .btn, .alert-warning {
            display: none !important;
        }
    }
</style>
@endpush