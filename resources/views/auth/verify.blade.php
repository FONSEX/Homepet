@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu direccion de email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se te envio una verificacion de email') }}
                        </div>
                    @endif

                    {{ __('Antes de proceder,revisa tu email') }}
                    {{ __('Si no recibiste tu email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here para volver a hacer el formulario') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
