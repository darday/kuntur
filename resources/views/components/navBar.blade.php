<div>
        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
        <div class="container">
        
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="../img/logos/icofestival.png" alt="" height="70%" width="60%">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav "><!--ml-auto-->  
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>-->
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">INICIO</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('/nosotros') }}">NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="proyectos.php">PROYECTOS</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="galeria.php">PRENSA</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">NOTICIAS</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">CONVENIOS</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('/peliculas') }}">PELICULAS</a>
                    </li>
                
                </ul>
                
            </div>
            <div class="flex-center position-ref float-right ">
                    @if (Route::has('login'))
                        <div class="right link buttonunion" style="padding: 0 0 px">
                            @auth
                                @if(Auth::user()->rol == 'admin'){
                                       <a href="{{ url('/admin') }}"> {{Auth::user()->rol}}</a>
                                }@endif 

                                 @if(Auth::user()->rol == 'user'){
                                       <a href="{{ url('/home') }}"> {{Auth::user()->rol}}</a>
                                }@endif
                               
                             
                            @else
                                <a href="{{ route('login') }}"><button type="button" class="btn btn-outline-light">INGRESA</button></a>

                                @if (Route::has('register'))
                                    
                                    <a href="{{ route('register') }}"><button type="button" class="btn btn-warning">REGISTRATE</button></a>
                                @endif
                            @endauth
                        </div>
                    @endif
                
                </div>
        </div>
    </nav>
</div>