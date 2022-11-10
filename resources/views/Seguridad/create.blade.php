<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
@extends('layouts.plantilla')

<div class="container">
    @section('title', 'Añadir Nuevo Reporte')

    @section('content')
        <h1>Favor de llenar los siguientes campos</h1>
        <div class="container">

            <form action="{{ route('seguridad.store') }}" class="formulario-guardar" method="POST">
                @csrf

                @include('layouts.validation-errors')

                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Nombre:</label>
                        <input class="form-control" value="{{ old('name') }}" type="text" name="name"
                            placeholder="Nombre">
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Apellido Paterno:</label>
                        <input class="form-control" value="{{ old('fatherlastname') }}" type="text" name="fatherlastname"
                            placeholder="Apellido Paterno">
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Apellido Materno:</label>
                        <input class="form-control" value="{{ old('motherlastname') }}" type="text" name="motherlastname"
                            placeholder="Apellido Materno">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Teléfono:</label>
                        <input class="form-control" value="{{ old('phonenumber') }}" type="number" name="phonenumber"
                            placeholder="Telefono">
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Edad:</label>
                        <input class="form-control" value="{{ old('age') }}" type="number" name="age"
                            placeholder="Edad">
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Colonia:</label>
                        <input class="form-control" value="{{ old('colony') }}" type="text" name="colony"
                            placeholder="Colonia">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Calle 1:</label>
                        <input class="form-control" value="{{ old('street1') }}" type="text" name="street1"
                            placeholder="Calle 1">
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Calle 2 (Opcional):</label>
                        <input class="form-control" value="{{ old('street2') }}" type="text" name="street2"
                            placeholder="Calle 2">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Área:</label>
                        <select class="form-control" name="area" id="">
                            <option value="">-- Seleccione un área ---</option>
                            <option value="Agua" @if (old('area') == 'Agua') selected @endif>Agua
                            </option>
                            <option value="Alumbrado Público"@if (old('area') == 'Alumbrado Público') selected @endif>Alumbrado
                                Público</option>
                            <option value="Limpieza"@if (old('area') == 'Limpieza') selected @endif>Limpieza</option>
                            <option value="Mercados"@if (old('area') == 'Mercados') selected @endif>Mercados</option>
                            <option value="Panteones"@if (old('area') == 'Panteones') selected @endif>Panteones</option>
                            <option value="Calles"@if (old('area') == 'Calles') selected @endif>Calles</option>
                            <option value="Seguridad Pública"@if (old('area') == 'Seguridad Pública') selected @endif>Seguridad Pública</option>
                        </select>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Problema:</label>
                        <select class="form-control" name="problem" id="">
                            <option value="">--- Seleccione un problema ---</option>
                            <option value="">--- AGUA ---</option>
                            <option value="Agua Potable" @if (old('problem') == 'Agua Potable') selected @endif> Agua Potable
                            </option>
                            <option value="Drenaje" @if (old('problem') == 'Drenaje') selected @endif> Drenaje</option>
                            <option value="Alcantarillado" @if (old('problem') == 'Alcantarillado') selected @endif> Alcantarillado
                            </option>
                            <option value="">--- ALUMBRADO PÚBLICO ---</option>
                            <option value="Alumbrado" @if (old('problem') == 'Alumbrado') selected @endif> Alumbrado</option>
                            <option value="">--- LIMPIEZA ---</option>
                            <option value="Limpia" @if (old('problem') == 'Limpia') selected @endif> Limpia</option>
                            <option value="Recolección" @if (old('problem') == 'Recolección') selected @endif> Recolección
                            </option>
                            <option value="Traslado" @if (old('problem') == 'Traslado') selected @endif> Traslado</option>
                            <option value="Tratamiento" @if (old('problem') == 'Tratamiento') selected @endif> Tratamiento
                            </option>
                            <option value="Disposición Final De Residuos"
                                @if (old('problem') == 'Disposición Final De Residuos') selected @endif> Disposición Final De Residuos</option>
                            <option value="">--- MERCADOS ---</option>
                            <option value="Mercados" @if (old('problem') == 'Mercados') selected @endif> Mercados</option>
                            <option value="">--- PANTEONES ---</option>
                            <option value="Panteones" @if (old('problem') == 'Panteones') selected @endif> Panteones
                            </option>
                            <option value="">--- CALLES ---</option>
                            <option value="Calles" @if (old('problem') == 'Calles') selected @endif> Calles</option>
                            <option value="Parques y Jardines" @if (old('problem') == 'Parques y Jardines') selected @endif> Parques
                                y Jardines</option>
                            <option value="Equipamiento" @if (old('problem') == 'Equipamiento') selected @endif> Equipamiento
                            </option>
                            <option value="">--- SEGURIDAD PÚBLICA ---</option>
                            <option value="Policia Preventiva" @if (old('problem') == 'Policia Preventiva') selected @endif> Policia
                                Preventiva</option>
                            <option value="Tránsito" @if (old('problem') == 'Tránsito') selected @endif> Tránsito</option>
                        </select>
                    </div>
                </div>
                <br>
                <div>
                    <label for="">Descripcion (Opcional):</label>
                    <textarea class="form-control" name="description" cols="30" rows="5">{{ old('description') }}</textarea>
                </div>
                <br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <input class="btn btn-warning" type="reset" value="Limpiar">
                    <a class="btn btn-secondary" href="{{ url('/') }}">Volver Atrás</a>
                    <button class="btn btn-primary" type="submit">Guardar datos</button>
                </div>


            </form>
        </div>
    </div>
@endsection
