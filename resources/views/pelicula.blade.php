<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Festival Kunturñawi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="../css/style.css" >
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-smd {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
    
        
         @include('components/navBar2')


        <div class="container animated fadeInUp">
             <br>
             <br>
             <br>
             <hr>
             <div class="row ">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center">
                        <img src="{{ asset('storage').'/'. $film->film_imagen}}" alt="foto"  height="520px" width="100%">  <!--se debe agregar php artisan storage:link-->                  
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8 text-left">
                        <h1><b>{{$film->film_Titulo}}</b></h1>                
                        <h3>{{$film->film_Categoria}}</h3>                
                        <p>Director: {{$film->film_Director}}</p>             
                        <p>Duración: {{$film->film_Duracion}}</p>                
                        <p>Ciudad: {{$film->film_Ciudad}} - {{$film->film_Anio}}</p>                
                        <p>Sinopsis: {{$film->film_Descripcion}} </p>  
                        <hr>
                        @if( $film->film_Estado == 0)
                            <h3><b> Esta Película está Deshabilitada</b></h3><hr>
                            <h4> Revise el Horario de Proyección</h4>
                        @endif 
                        @if( $film->film_Estado == 1)
                            <h3><b> Esta Película está Habilitada</b></h3><hr>
                        @endif              
                                        
                    </div>
               
                    <!--------------------------------------------------------->
            </div>   

                <div class="row  align-items-center">
                    
                    

                    @if( $film->film_Estado == 1)
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center  " >
                                                          
                                <h1 >No Olvides dejar tu Voto</h1>    
                                    
                                <button type="button" class="btn btn-primary btn-lg">Votar</button>       
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8 text-center embed-container">
                                <iframe src="https://player.vimeo.com/video/{{$film->film_Url}}" width="640" height="360"  frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                    @endif
                    
               
                    <!--------------------------------------------------------->
                </div>   

                 <div class="row ">
                    
                    

                  
                            <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-center">
                                
                                <h1>COMENTARIOS</h1>           
                            </div>
                            
                    
                    
               
                    <!--------------------------------------------------------->
                </div>   
             
              
                 

           
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
    </body>
</html>
