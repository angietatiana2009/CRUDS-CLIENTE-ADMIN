@extends('layouts.app')

@section('Titulo', 'Editar Computador')
@section('contenido')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow border-0 rounded-4">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Actualizar Computador</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('computer.update', $computer->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Número
                            </label>
                            <input
                                type="number"
                                name="number"
                                class="form-control @error('number') is-invalid @enderror"
                                value="{{ old('number', $computer->number) }}"
                                placeholder="Ingrese el número del computador"
                                required>
                            @error('number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Marca
                            </label>
                            <input
                                type="text"
                                name="brand"
                                class="form-control @error('brand') is-invalid @enderror"
                                value="{{ old('brand', $computer->brand) }}"
                                placeholder="Ingrese la marca"
                                required>
                            @error('brand')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center gap-2 flex-wrap">
                            <a href="{{ url()->previous() }}" class="btn btn-secondary">
                                Cancelar
                            </a>

                            <button type="submit" class="btn btn-success">
                                Actualizar Computador
                            </button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection