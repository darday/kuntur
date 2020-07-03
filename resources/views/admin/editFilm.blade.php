@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        @include('components/sideBar')
            <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
                <h1>Editar Información de Película</h1>
                <hr>
               
                <div class="alert alert-success" role="alert">
                    @if(Session::has('Mensaje')){{
                        Session::get('Mensaje')
                    }}@endif
                </div>
                 <div class="card-body">
                    <form method="POST" action="{{url('/edit/'.$film->id)}}"  enctype="multipart/form-data">
                        {{csrf_field()}}<!--Seguridad-->
                        {{method_field('PATCH')}}


                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Titulo: </label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="film_Titulo" value="{{$film->film_Titulo}}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Director/es: </label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="film_Director" value="{{$film->film_Director}}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Año: </label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="film_Anio" value="{{$film->film_Anio}}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Duración: </label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="film_Duracion" value="{{$film->film_Duracion}}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Ciudad: </label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="film_Ciudad" value="{{$film->film_Ciudad}}" required autocomplete="name" autofocus>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Categoría: </label>

                            <div class="col-md-12">
                                <select class="form-control" name="film_Categoria">                                   
                                    <option selected value="{{$film->film_Categoria}}">{{$film->film_Categoria}}</option>
                                    <option value="Largometraje Ficción">Largometraje Ficción</option>
                                    <option value="Largometraje Documental">Largometraje Documental</option>
                                    <option value="Cortometraje Ficción">Cortometraje Ficción</option>
                                    <option value="Cortometraje Documental">Cortometraje Documental</option>
                                    <option value="Cortometraje Animado">Cortometraje Animado</option>
                                    <option value="Cortometraje Universitario">Cortometraje Universitario</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Estado: </label>

                            <div class="col-md-12">
                                <select class="form-control" name="film_Estado">                                   
                                    <option selected value="{{$film->film_Estado}}">{{$estado}}</option>
                                    <option value="0">Deshabilitdo</option>
                                    <option value="1">Habilitado</option>
                                
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Descripcion: </label>

                            <div class="col-md-12">
                                <textarea  name="film_Descripcion" id="textarea" rows="10" value="" class="form-control">{{$film->film_Descripcion}}
                                </textarea>
                            </div>
                        </div>

      

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Url Vimeo: </label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="film_Url" value="{{$film->film_Url}}" required autocomplete="name" autofocus>
                            </div>
                        </div>


                        <div class="custom-file">
                            <label for="exampleFormControlFile1">Imagen:</label><br>
                            <img src="{{ asset('storage').'/'. $film->film_imagen}}" alt="foto" width="70px">                   

                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="film_imagen">    
                        </div>

                       

                        

                    

                   

                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                            <br >
                           
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Editar') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
    
    </div>
</div>





@endsection


