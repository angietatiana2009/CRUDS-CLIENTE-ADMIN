@extends('layouts.appFormulario')

@section('Titulo', 'Editar Aprendiz')
@section('contenido')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Editar aprendiz</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('apprentice.update', data_get($apprentice, 'id')) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input id="name" name="name" value="{{ old('name', data_get($apprentice, 'name')) }}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input id="email" type="email" name="email" value="{{ old('email', data_get($apprentice, 'email')) }}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="cell_number" class="form-label">Celular</label>
                                <input id="cell_number" type="tel" name="cell_number" value="{{ old('cell_number', data_get($apprentice, 'cell_number')) }}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="course_id" class="form-label">ID del curso</label>
                                <input id="course_id" type="number" min="1" name="course_id" value="{{ old('course_id', data_get($apprentice, 'course_id')) }}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="computer_id" class="form-label">ID del computador</label>
                                <input id="computer_id" type="number" min="1" name="computer_id" value="{{ old('computer_id', data_get($apprentice, 'computer_id')) }}" class="form-control" required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('apprentices.index') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-success">Guardar cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
