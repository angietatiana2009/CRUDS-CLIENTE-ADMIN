@extends('layouts.appFormulario')

@section('Titulo', 'Gestión de Aprendices')
@section('contenido')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-success mb-0">Aprendices</h2>
        <a href="{{ route('apprentice.create') }}" class="btn btn-primary">Nuevo aprendiz</a>
    </div>
    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead><tr><th>Nombre</th><th>Correo</th><th>Celular</th><th>Curso</th><th>Computador</th><th>Acciones</th></tr></thead>
                <tbody>
                    @forelse ($apprentices as $apprentice)
                        <tr>
                            <td>{{ $apprentice->name }}</td>
                            <td>{{ $apprentice->email }}</td>
                            <td>{{ $apprentice->cell_number }}</td>
                            <td>{{ $apprentice->course_id }}</td>
                            <td>{{ $apprentice->computer_id }}</td>
                            <td class="text-nowrap">
                                <a href="{{ route('apprentice.show', $apprentice->id) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                                <a href="{{ route('apprentice.edit', $apprentice->id) }}" class="btn btn-sm btn-outline-warning">Editar</a>
                                <form action="{{ route('apprentice.destroy', $apprentice->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Desea eliminar este aprendiz?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="6" class="text-center text-muted py-4">No hay aprendices registrados.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
