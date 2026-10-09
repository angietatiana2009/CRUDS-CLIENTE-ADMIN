@extends('layouts.appFormulario')

@section('Titulo', 'Detalle del Curso')
@section('contenido')
    <div class="container py-4">
        <div class="card border-0 shadow">
            <div class="card-header bg-success text-white"><h3 class="mb-0">Curso {{ $course->course_number }}</h3></div>
            <div class="card-body">
                <dl class="row mb-4">
                    <dt class="col-sm-3">ID</dt><dd class="col-sm-9">{{ $course->id }}</dd>
                    <dt class="col-sm-3">Día</dt><dd class="col-sm-9">{{ $course->day }}</dd>
                    <dt class="col-sm-3">Área</dt><dd class="col-sm-9">{{ $course->area_id }}</dd>
                    <dt class="col-sm-3">Centro de formación</dt><dd class="col-sm-9">{{ $course->training_center_id }}</dd>
                </dl>
                <a href="{{ route('courses.index') }}" class="btn btn-secondary">Volver</a>
                <a href="{{ route('course.edit', $course->id) }}" class="btn btn-warning">Editar</a>
            </div>
        </div>
    </div>
@endsection
