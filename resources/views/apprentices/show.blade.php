@extends('layouts.appFormulario')

@section('Titulo', 'Detalle del Aprendiz')
@section('contenido')
    <div class="container py-4">
        <div class="card border-0 shadow">
            <div class="card-header bg-success text-white"><h3 class="mb-0">{{ $apprentice->name }}</h3></div>
            <div class="card-body">
                <dl class="row mb-4">
                    <dt class="col-sm-3">ID</dt><dd class="col-sm-9">{{ $apprentice->id }}</dd>
                    <dt class="col-sm-3">Correo</dt><dd class="col-sm-9">{{ $apprentice->email }}</dd>
                    <dt class="col-sm-3">Celular</dt><dd class="col-sm-9">{{ $apprentice->cell_number }}</dd>
                    <dt class="col-sm-3">Curso</dt><dd class="col-sm-9">{{ $apprentice->course_id }}</dd>
                    <dt class="col-sm-3">Computador</dt><dd class="col-sm-9">{{ $apprentice->computer_id }}</dd>
                </dl>
                <a href="{{ route('apprentices.index') }}" class="btn btn-secondary">Volver</a>
                <a href="{{ route('apprentice.edit', $apprentice->id) }}" class="btn btn-warning">Editar</a>
            </div>
        </div>
    </div>
@endsection
