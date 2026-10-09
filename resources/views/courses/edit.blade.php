@extends('layouts.appFormulario')

@section('Titulo', 'Editar Curso')
@section('contenido')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Editar curso</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('course.update', data_get($course, 'id')) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="course_number" class="form-label">Número del curso</label>
                                <input id="course_number" name="course_number" value="{{ old('course_number', data_get($course, 'course_number')) }}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="day" class="form-label">Día</label>
                                <input id="day" name="day" value="{{ old('day', data_get($course, 'day')) }}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="area_id" class="form-label">ID del área</label>
                                <input id="area_id" type="number" min="1" name="area_id" value="{{ old('area_id', data_get($course, 'area_id')) }}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="training_center_id" class="form-label">ID del centro de formación</label>
                                <input id="training_center_id" type="number" min="1" name="training_center_id" value="{{ old('training_center_id', data_get($course, 'training_center_id')) }}" class="form-control" required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-success">Guardar cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
