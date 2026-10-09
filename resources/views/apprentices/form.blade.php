@extends('layouts.appFormulario')

@section('Titulo', $isEditing ? 'Editar Aprendiz' : 'Registrar Aprendiz')
@section('contenido')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow">
                    <div class="card-header bg-success text-white"><h4 class="mb-0">{{ $isEditing ? 'Editar aprendiz' : 'Registrar aprendiz' }}</h4></div>
                    <div class="card-body">
                        <form action="{{ $isEditing ? route('apprentice.update', $apprentice->id) : route('apprentice.store') }}" method="POST">
                            @csrf
                            @if ($isEditing)
                                @method('PUT')
                            @endif
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input id="name" name="name" value="{{ old('name', $apprentice->name ?? '') }}" class="form-control @error('name') is-invalid @enderror" required>
                                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input id="email" type="email" name="email" value="{{ old('email', $apprentice->email ?? '') }}" class="form-control @error('email') is-invalid @enderror" required>
                                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="cell_number" class="form-label">Celular</label>
                                <input id="cell_number" type="tel" name="cell_number" value="{{ old('cell_number', $apprentice->cell_number ?? '') }}" class="form-control @error('cell_number') is-invalid @enderror" required>
                                @error('cell_number')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="course_id" class="form-label">Curso</label>
                                <select id="course_id" name="course_id" class="form-select @error('course_id') is-invalid @enderror" required>
                                    <option value="">Seleccione un curso</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}" @selected(old('course_id', $apprentice->course_id ?? '') == $course->id)>Curso {{ $course->course_number }}</option>
                                    @endforeach
                                </select>
                                @error('course_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="computer_id" class="form-label">Computador</label>
                                <select id="computer_id" name="computer_id" class="form-select @error('computer_id') is-invalid @enderror" required>
                                    <option value="">Seleccione un computador</option>
                                    @foreach ($computers as $computer)
                                        <option value="{{ $computer->id }}" @selected(old('computer_id', $apprentice->computer_id ?? '') == $computer->id)>N.º {{ $computer->number }} - {{ $computer->brand }}</option>
                                    @endforeach
                                </select>
                                @error('computer_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('apprentices.index') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-success">{{ $isEditing ? 'Guardar cambios' : 'Registrar aprendiz' }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
