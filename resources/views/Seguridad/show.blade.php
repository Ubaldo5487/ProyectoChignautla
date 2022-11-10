<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
@extends('layouts.dashboard')
@section('title', 'Reportes')

@section('content')

    <div class="container">
        <br><br>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="card-title">
                            <h2>{{ $security->name }} {{ $security->fatherlastname }} {{ $security->motherlastname }}</h2>
                        </h2>
                    </div>
                    <div class="col-md-4">
                        <div class="gap-2  d-md-flex justify-content-md-end">
                            <form action="">
                                <a class="btn btn-success" href="{{ route('seguridad.edit', $security->id) }}">Editar</a>
                            </form>
                            <form action="{{ route('seguridad.destroy', $security->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Eliminar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Teléfono</th>
                            <th>Edad</th>
                            <th>Colonia</th>
                            <th>Calle 1</th>
                            <th>Calle 2</th>
                            <th>Área</th>
                            <th>Problema</th>
                            <th>Status</th>
                            <th>Descripción</th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>{{ $security->phonenumber }}</p>
                            </td>
                            <td>
                                <p>{{ $security->age }}</p>
                            </td>
                            <td>
                                <p>{{ $security->colony }}</p>
                            </td>
                            <td>
                                <p>{{ $security->street1 }}</p>
                            </td>
                            <td>
                                <p>{{ $security->street2 }}</p>
                            </td>
                            <td>
                                <p>{{ $security->area }}</p>
                            </td>
                            <td>
                                <p>{{ $security->problem }}</p>
                            </td>
                            <td>
                                <p>{{ $security->status }}</p>
                            </td>
                            <td>
                                <p>{{ $security->description }}</p>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="col">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-secondary" href="{{ route('seguridad.index') }}">Volver a lista</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
