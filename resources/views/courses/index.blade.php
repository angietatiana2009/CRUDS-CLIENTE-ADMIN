@extends('layouts.appFormulario')

@section('Titulo', 'Gestión de Cursos')
@section('contenido')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-success mb-0">Cursos</h2>
        <a href="{{ route('course.create') }}" class="btn btn-primary">Nuevo curso</a>
    </div>
    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead><tr><th>Número</th><th>Día</th><th>Área</th><th>Centro</th><th>Acciones</th></tr></thead>
                <tbody>
                    @forelse ($courses as $course)
                        <tr>
                            <td>{{ $course->course_number }}</td>
                            <td>{{ $course->day }}</td>
                            <td>{{ $course->area_id }}</td>
                            <td>{{ $course->training_center_id }}</td>
                            <td class="text-nowrap">
                                <a href="{{ route('course.show', $course->id) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                                <a href="{{ route('course.edit', $course->id) }}" class="btn btn-sm btn-outline-warning">Editar</a>
                                <form action="{{ route('course.destroy', $course->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Desea eliminar este curso?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="text-center text-muted py-4">No hay cursos registrados.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
