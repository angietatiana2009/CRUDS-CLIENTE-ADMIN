@extends('layouts.appFormulario')

@section('Titulo', $isEditing ? 'Editar Curso' : 'Registrar Curso')
@section('contenido')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow">
                    <div class="card-header bg-success text-white"><h4 class="mb-0">{{ $isEditing ? 'Editar curso' : 'Registrar curso' }}</h4></div>
                    <div class="card-body">
                        <form action="{{ $isEditing ? route('course.update', $course->id) : route('course.store') }}" method="POST">
                            @csrf
                            @if ($isEditing)
                                @method('PUT')
                            @endif
                            <div class="mb-3">
                                <label for="course_number" class="form-label">Número del curso</label>
                                <input id="course_number" name="course_number" value="{{ old('course_number', $course->course_number ?? '') }}" class="form-control @error('course_number') is-invalid @enderror" required>
                                @error('course_number')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="day" class="form-label">Día</label>
                                <input id="day" name="day" value="{{ old('day', $course->day ?? '') }}" class="form-control @error('day') is-invalid @enderror" required>
                                @error('day')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="area_id" class="form-label">Área</label>
                                <select id="area_id" name="area_id" class="form-select @error('area_id') is-invalid @enderror" required>
                                    <option value="">Seleccione un área</option>
                                    @foreach ($areas as $area)
                                        <option value="{{ $area->id }}" @selected(old('area_id', $course->area_id ?? '') == $area->id)>{{ $area->name }}</option>
                                    @endforeach
                                </select>
                                @error('area_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="training_center_id" class="form-label">Centro de formación</label>
                                <select id="training_center_id" name="training_center_id" class="form-select @error('training_center_id') is-invalid @enderror" required>
                                    <option value="">Seleccione un centro</option>
                                    @foreach ($trainingCenters as $trainingCenter)
                                        <option value="{{ $trainingCenter->id }}" @selected(old('training_center_id', $course->training_center_id ?? '') == $trainingCenter->id)>{{ $trainingCenter->name }}</option>
                                    @endforeach
                                </select>
                                @error('training_center_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-success">{{ $isEditing ? 'Guardar cambios' : 'Registrar curso' }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
