@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modulos del sistema') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @auth
                        Bienvenido al sistema {{ auth()->user()->name }}
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
