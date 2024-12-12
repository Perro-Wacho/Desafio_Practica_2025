@extends('layouts.app')

@section('title', 'Panel de Administración')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Bienvenido al Panel de Administración</h1>
    <div class="row">
        <!-- Primera tarjeta -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Gestión de Administradores</h5>
                    <p class="card-text">Agrega, edita o elimina administradores.</p>
                    <a href="{{ route('admins.index') }}" class="btn btn-primary">Administrar</a>
                </div>
            </div>
        </div>

        <!-- Segunda tarjeta -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Reportes</h5>
                    <p class="card-text">Consulta los reportes del sistema.</p>
                    <a href="#" class="btn btn-primary">Ver Reportes</a>
                </div>
            </div>
        </div>

        <!-- Tercera tarjeta -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Configuración</h5>
                    <p class="card-text">Actualiza la configuración del sistema.</p>
                    <a href="#" class="btn btn-primary">Configurar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
