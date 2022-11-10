<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
@extends('layouts.dashboard')
@section('title', 'Reportes')

@section('content')

    <div class="container">
        <h1>Reportes de Seguridad Pública</h1>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="card-title"><b> Lista De Reportes</b></h2>
                    </div>
                    <div class="col-md-4">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-outline-success ml-2 mr-2" href="{{ url('/seguridad/exportToXlsx') }}"><i
                                    class="fas fa-file-excel"> Excel</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="seguridad" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Edad</th>
                            <th>Colonia</th>
                            <th>Calle 1</th>
                            <th>Área</th>
                            <th>Problema</th>
                            <th>Status</th>
                            <th>Fecha</th>
                        </tr>

                    </thead>
                    <tbody>
                        @forelse ($securities as $security)
                            <tr>
                                <td>
                                    <a class="btn btn-outline-primary" href="{{ route('seguridad.show', $security->id) }}">
                                        <h5><b>{{ $security->name }} {{ $security->fatherlastname }}
                                                {{ $security->motherlastname }}</b></h5>
                                    </a>
                                </td>
                                <td>
                                    <p>{{ $security->phonenumber }}</p>
                                </td>
                                <td>
                                    <p>{{ $security->age }}</p>
                                </td>
                                </td>
                                <td>
                                    <p>{{ $security->colony }}</p>
                                </td>
                                <td>
                                    <p>{{ $security->street1 }}</p>
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
                                    <p>{{ $security->created_at }}</p>
                                </td>
                            @empty
                                <h1>No existe ningún reporte</h1>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>


    <!-- DataTables -->
    <script src="{{ asset('assets/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>

    <!-- Invocar DataTables -->
    <script>
        $(function() {
            $('#seguridad').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf' //, 'print','copy', 'csv', 
                ]
            });
        });
    </script>

@endsection
