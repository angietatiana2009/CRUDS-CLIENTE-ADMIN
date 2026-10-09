@extends('layouts.appFormulario')

@section('Titulo', $isEditing ? 'Editar Instructor' : 'Registrar Instructor')
@section('contenido')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">{{ $isEditing ? 'Editar instructor' : 'Registrar instructor' }}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ $isEditing ? route('teacher.update', $teacher->id) : route('teacher.store') }}" method="POST">
                            @csrf
                            @if ($isEditing)
                                @method('PUT')
                            @endif

                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input id="name" name="name" value="{{ old('name', $teacher->name ?? '') }}" class="form-control @error('name') is-invalid @enderror" required>
                                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input id="email" type="email" name="email" value="{{ old('email', $teacher->email ?? '') }}" class="form-control @error('email') is-invalid @enderror" required>
                                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="area_id" class="form-label">Área</label>
                                <select id="area_id" name="area_id" class="form-select @error('area_id') is-invalid @enderror" required>
                                    <option value="">Seleccione un área</option>
                                    @foreach ($areas as $area)
                                        <option value="{{ $area->id }}" @selected(old('area_id', $teacher->area_id ?? '') == $area->id)>{{ $area->name }}</option>
                                    @endforeach
                                </select>
                                @error('area_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="training_center_id" class="form-label">Centro de formación</label>
                                <select id="training_center_id" name="training_center_id" class="form-select @error('training_center_id') is-invalid @enderror" required>
                                    <option value="">Seleccione un centro</option>
                                    @foreach ($trainingCenters as $trainingCenter)
                                        <option value="{{ $trainingCenter->id }}" @selected(old('training_center_id', $teacher->training_center_id ?? '') == $trainingCenter->id)>{{ $trainingCenter->name }}</option>
                                    @endforeach
                                </select>
                                @error('training_center_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-success">{{ $isEditing ? 'Guardar cambios' : 'Registrar instructor' }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
