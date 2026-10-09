@extends('layouts.appFormulario')

@section('Titulo', 'Registrar Instructor')
@section('contenido')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Registrar instructor</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('teacher.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input id="name" name="name" value="{{ old('name') }}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="area_id" class="form-label">ID del área</label>
                                <input id="area_id" type="number" min="1" name="area_id" value="{{ old('area_id') }}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="training_center_id" class="form-label">ID del centro de formación</label>
                                <input id="training_center_id" type="number" min="1" name="training_center_id" value="{{ old('training_center_id') }}" class="form-control" required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-success">Registrar instructor</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
