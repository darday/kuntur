@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        @include('components/sideBar')
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
                            <th>Director</th>
                            <th>Categoria</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($film as $film)
                        <tr>
                            
                            <td>{{$loop->iteration}}</td>
                            <td>                
                                <img src="{{ asset('storage').'/'. $film->film_imagen}}" alt="foto" width="70px" height="110px">  <!--se debe agregar php artisan storage:link-->                  
                            </td>
                            <td>{{$film->film_Titulo}}</td>
                            <td>{{$film->film_Director}}</td>
                            <td>{{$film->film_Categoria}}</td>
                            <td>{{$film->film_Estado}}</td>
                            
                            
                            <td>

                            <a href="{{url('/edit/'.$film->id.'/edit')}}">
                                <button type="button" class="btn btn-warning"> Editar</button>
                            </a>

                            <form method="post" action="{{url('/delete/'.$film->id)}}">
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


