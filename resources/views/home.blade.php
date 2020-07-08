@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        @include('components/sideBarUser')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-transform: uppercase;">BIENVENIDO {{Auth::user()->name}} AL FESTIVAL DE CINE KUNTURÑAWI</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Ahora tu puedes dar tu voto en cada uno de los Films y ayudar a escoger el ganador.
                </div>
            </div>
        </div>
    </div>
</div>







@endsection


