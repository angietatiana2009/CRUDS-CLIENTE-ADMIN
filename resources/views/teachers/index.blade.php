@extends('layouts.appFormulario')

@section('Titulo', 'Gestión de Instructores')
@section('contenido')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-success mb-0">Instructores</h2>
        <a href="{{ route('teacher.create') }}" class="btn btn-primary">Nuevo instructor</a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead><tr><th>Nombre</th><th>Correo</th><th>Área</th><th>Centro</th><th>Acciones</th></tr></thead>
                <tbody>
                    @forelse ($teachers as $teacher)
                        <tr>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->email }}</td>
                            <td>{{ $teacher->area_id }}</td>
                            <td>{{ $teacher->training_center_id }}</td>
                            <td class="text-nowrap">
                                <a href="{{ route('teacher.show', $teacher->id) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                                <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-sm btn-outline-warning">Editar</a>
                                <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Desea eliminar este instructor?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="text-center text-muted py-4">No hay instructores registrados.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
