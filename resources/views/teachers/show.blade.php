@extends('layouts.appFormulario')

@section('Titulo', 'Detalle del Instructor')
@section('contenido')
    <div class="container py-4">
        <div class="card border-0 shadow">
            <div class="card-header bg-success text-white"><h3 class="mb-0">{{ $teacher->name }}</h3></div>
            <div class="card-body">
                <dl class="row mb-4">
                    <dt class="col-sm-3">ID</dt><dd class="col-sm-9">{{ $teacher->id }}</dd>
                    <dt class="col-sm-3">Correo</dt><dd class="col-sm-9">{{ $teacher->email }}</dd>
                    <dt class="col-sm-3">Área</dt><dd class="col-sm-9">{{ $teacher->area_id }}</dd>
                    <dt class="col-sm-3">Centro de formación</dt><dd class="col-sm-9">{{ $teacher->training_center_id }}</dd>
                </dl>
                <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Volver</a>
                <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-warning">Editar</a>
            </div>
        </div>
    </div>
@endsection
