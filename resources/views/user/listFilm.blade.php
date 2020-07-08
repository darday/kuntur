@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        @include('components/sideBarUser')
            <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
                <h1>Listado de Películas</h1>
                <hr>

                <div class="alert alert-success" role="alert">
                    @if(Session::has('Mensaje')){{
                        Session::get('Mensaje')
                    }}@endif
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Imagen</th>
                            <th>Titulo</th>
                            <th>Categoria</th>
                            <th>Calificacion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($voto as $votel)
                        <tr>

                            <td>{{$loop->iteration}}</td>
                            <td>
                            </td>
                            <td>{{$votel->calificacion_id}}</td>
                            <td>{{$votel->film_id}}</td>
                            <td>{{$votel->user_id}}</td>


                            <td>

                            <a href="{{url('/edit/'.$votel->id.'/edit')}}">
                                <button type="button" class="btn btn-warning"> Editar</button>
                            </a>

                            <form method="post" action="{{url('/delete/'.$votel->id)}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="Submit" class="btn btn-danger" onclick="return confirm('¿Desea Borrar?');  " > Borrar</button>
                            </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

    </div>
</div>





@endsection


