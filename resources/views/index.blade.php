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
        <link rel="stylesheet" href="css/style.css" >
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




        @include('components/navBar')

        <div class="cont_img">
            <img src="../img/carousel/PORTADA_INICIO.jpg" class="responsive" alt="Responsive image">
            <div class="text_cent_img"><h1 class="tit-sob-img">Inicio</h1></div>
          </div>

        <div class="container">
            <br><br><br>
            <div class="row wow animated fadeIn ">

                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center" style="padding-right:4%">

                    <h1  class="titulo" >EL FESTIVAL</h1 >
                    <hr style="height:1px !important"  color="#636b6f">
                    <img src="../img/logos/FONOTIPO-IX-FESTIVAL.png" alt="imagen" height="90%" class="responsive rounded">
                    <br><br>
                    <p>El Festival Kunturñawi exhibe películas en espacios convencionales y alternativos de Ecuador, para acceso al cine ecuatoriano y formación de públicos. A través del Festival Kunturñawi Internacional, se exhibe las películas en varios países de América y Europa.</p>
                    <p>El Festival Kunturñawi es un mediador cultural entre las producciones cinematográficas, autores y pueblos y nacionalidades de la Región 3 de Ecuador, para descentralizar el cine, el acceso y la formación de públicos.</p>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center" style="padding-left:4%">
                    <img src="../img/carousel/festival1.jpg" alt="imagen" height="90%" class="responsive rounded">

                </div>



            </div>

        </div>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
    </body>
</html>
