<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
@extends('layouts.plantilla')

<div class="container">
    @section('title', 'Editar Reporte')

    @section('content')
        <h1>Editar Reporte </h1>
        <div class="container">

            <form action="{{ route('seguridad.update', $security) }}" method="POST">
                @csrf

                @include('layouts.validation-errors')

                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Nombre:</label>
                        <input class="form-control" type="text" name="name"
                            value="{{ old('name', isset($security) ? $security->name : '') }}">
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Apellido Paterno:</label>
                        <input class="form-control" type="text" name="fatherlastname"
                            value="{{ old('fatherlastname', isset($security) ? $security->fatherlastname : '') }}">
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Apellido Materno:</label>
                        <input class="form-control" type="text" name="motherlastname"
                            value="{{ old('motherlastname', isset($security) ? $security->motherlastname : '') }}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Teléfono:</label>
                        <input class="form-control" type="number" name="phonenumber"
                            value="{{ old('phonenumber', isset($security) ? $security->phonenumber : '') }}">
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Edad:</label>
                        <input class="form-control" type="number" name="age"
                            value="{{ old('age', isset($security) ? $security->age : '') }}">
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Colonia:</label>
                        <input class="form-control" type="text" name="colony"
                            value="{{ old('colony', isset($security) ? $security->colony : '') }}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Calle 1:</label>
                        <input class="form-control" type="text" name="street1"
                            value="{{ old('street1', isset($security) ? $security->street1 : '') }}">
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Calle 2:</label>
                        <input class="form-control" type="text" name="street2"
                            value="{{ old('street2', isset($security) ? $security->street2 : '') }}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4>
                        <label for="">Área:</label>
                        <select class="form-control" name="area" id="" value="{{ $security->area }}">
                            <option value="">-- Seleccione un área ---</option>
                            <option value="Agua" @if (old('area', $security) == 'Agua') selected @endif>Agua
                            </option>
                            <option value="Alumbrado Público"@if (old('area', $security) == 'Alumbrado Público') selected @endif>Alumbrado
                                Público</option>
                            <option value="Limpieza"@if (old('area', $security) == 'Limpieza') selected @endif>Limpieza</option>
                            <option value="Mercados"@if (old('area', $security) == 'Mercados') selected @endif>Mercados</option>
                            <option value="Panteones"@if (old('area', $security) == 'Panteones') selected @endif>Panteones</option>
                            <option value="Calles"@if (old('area', $security) == 'Calles') selected @endif>Calles</option>
                            <option value="Seguridad Pública"@if (old('area', $security) == 'Seguridad Pública') selected @endif>Seguridad Pública</option>
                        </select>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Problema:</label>
                        <select class="form-control" name="problem" id="" value="{{ $security->problem }}">
                            <option value="">--- Seleccione un problema ---</option>
                            <option value="">--- AGUA ---</option>
                            <option value="Agua Potable" @if (old('problem', $security) == 'Agua Potable') selected @endif> Agua Potable
                            </option>
                            <option value="Drenaje" @if (old('problem', $security) == 'Drenaje') selected @endif> Drenaje</option>
                            <option value="Alcantarillado" @if (old('problem', $security) == 'Alcantarillado') selected @endif> Alcantarillado
                            </option>
                            <option value="">--- ALUMBRADO PÚBLICO ---</option>
                            <option value="Alumbrado" @if (old('problem', $security) == 'Alumbrado') selected @endif> Alumbrado</option>
                            <option value="">--- LIMPIEZA ---</option>
                            <option value="Limpia" @if (old('problem', $security) == 'Limpia') selected @endif> Limpia</option>
                            <option value="Recolección" @if (old('problem', $security) == 'Recolección') selected @endif> Recolección
                            </option>
                            <option value="Traslado" @if (old('problem', $security) == 'Traslado') selected @endif> Traslado</option>
                            <option value="Tratamiento" @if (old('problem', $security) == 'Tratamiento') selected @endif> Tratamiento
                            </option>
                            <option value="Disposición Final De Residuos"
                                @if (old('problem', $security) == 'Disposición Final De Residuos') selected @endif> Disposición Final De Residuos</option>
                            <option value="">--- MERCADOS ---</option>
                            <option value="Mercados" @if (old('problem', $security) == 'Mercados') selected @endif> Mercados</option>
                            <option value="">--- PANTEONES ---</option>
                            <option value="Panteones" @if (old('problem', $security) == 'Panteones') selected @endif> Panteones
                            </option>
                            <option value="">--- CALLES ---</option>
                            <option value="Calles" @if (old('problem', $security) == 'Calles') selected @endif> Calles</option>
                            <option value="Parques y Jardines" @if (old('problem', $security) == 'Parques y Jardines') selected @endif> Parques
                                y Jardines</option>
                            <option value="Equipamiento" @if (old('problem', $security) == 'Equipamiento') selected @endif> Equipamiento
                            </option>
                            <option value="">--- SEGURIDAD PÚBLICA ---</option>
                            <option value="Policia Preventiva" @if (old('problem', $security) == 'Policia Preventiva') selected @endif> Policia
                                Preventiva</option>
                            <option value="Tránsito" @if (old('problem', $security) == 'Tránsito') selected @endif> Tránsito</option>
                        </select>
                        </select>
                    </div>
                </div>
                <br>
                <div>
                    <label for="">Descripcion:</label>
                    <textarea class="form-control" name="description" cols="30" rows="5">{{ old('description', isset($security) ? $security->description : '') }}</textarea>
                </div>
                <br>
                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                    <label for="">Status:</label>
                    <select class="form-control" name="status" id="" value="{{ $security->status }}">
                        <option value="">-- Seleccione un problema ---</option>
                        <option value="Rechazado" @if (old('status', $security) == 'Rechazado') selected @endif> Rechazado
                        </option>
                        <option value="Pendiente" @if (old('status', $security) == 'Pendiente') selected @endif> Pendiente
                        </option>
                        <option value="Terminado" @if (old('status', $security) == 'Terminado') selected @endif> Terminado
                        </option>
                    </select>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-secondary" href="{{ route('seguridad.show', $security->id) }}">Volver a lista</a>
                    <button class="btn btn-primary" type="submit">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
