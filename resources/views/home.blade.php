@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3><strong>{{ __('Seción Iniciada') }}</strong></h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <h4>{{ __('Bienvenido de vuelta!!!') }}</h4>
                    <br>
                    <strong class="justify-content-right">{{ __('(No olvides cerrar tu sesión)') }}</strong>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
