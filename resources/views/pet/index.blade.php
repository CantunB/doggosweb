<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>PET CARE</title>
    <link rel="icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

.bs-example{
        margin: 20px;
    }
    body{
        padding-top: 70px;

    }

.navbar{
    position: fixed;
    width: 100%;
}
.slider{
background-image: url(images/ser.jpg);

min-height: 700px;
background-repeat: no-repeat;
background-position: center;

background-size: cover;

}
.heading{

    color: #74B9FF;
    font-size: 50px;
    font-weight: bold;
}


@media only screen and (max-width:900px) {
  /* For tablets: */
  .heading{

    color: #74B9FF;
    font-size: 20px;
    font-weight: bold;
}
.slider{
    background-image: url(images/ser.jpg);
min-height: 500px;
background-repeat: no-repeat;
background-position: center;

background-size: cover;

  /* Center and scale the image nicely */
  background-position: center;

  background-size: cover;
  position: relative;

width: 100%;

}
}
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .heading{

    color: #74B9FF;
    font-size: 10px;
    font-weight: bold;
}

.slider{
    background-image: url(images/ser.jpg);


background-repeat: no-repeat;
background-position: center;

background-size: cover;

min-height:300px;
}

  }

  .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

.button1 {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}



button:hover, a:hover {
  opacity: 0.7;
}
</style>














<header style="overflow: hidden;">

</header>
<body>
    <div class="bs-example">
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top" >
            <a href="#" class="navbar-brand"><img src="https://www.uchceu.es/centros-ceu/hospital-clinico-veterinario/img/cabeceras/pequenos-animales.png" alt="logo" width="180px" height="70px"></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            @include('layouts.includes.navbar')

        </nav>
    </div>

    <div class="slider">
        <div class="heading">
    </div>
    </div>

    <div class="container">
        <h2 align="center" class="mt-4">Nuestro amigos</h2>
        <br>
        <div class="row justify-content-center">
                @foreach($mascotas as $mascota)
                <div class="card-body">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('/images/mascotas/'.$mascota->foto) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Mis Datos</h5>
                        <p class="card-text">
                                <li>
                                    <a>Especie: </a>
                                    <span>{{ $mascota->especie }}</span>
                                </li>
                                <li>
                                    <a>F. Nacimiento:</a>
                                    <span> {{ $mascota->f_nacimiento }} </span>
                                </li>
                                <li>
                                    <a>Sexo:</a>
                                    <span> {{ $mascota->sexo }} </span>
                                </li>
                                <li>
                                    <a>Tamaño:</a>
                                    <span>{{ $mascota->tamaño }}</span>
                                </li>
                                <li>
                                    <a>Peso:</a>
                                    <span>{{ $mascota->peso }}</span>
                                </li>
                                <li>
                                    <a>Nombre: </a>
                                    <span>{{ $mascota->nombre }}</span>
                                </li>
                            </ul>
                        </p>
                            <div class="col-sm-12 col-xs-12">
                                @guest
                                    <a href="{{ route('adoptar.show',$mascota->id) }}" class="btn btn-dark mb-2" type="button"><span class="glyphicon glyphicon-step-backward"></span>&nbsp;Adoptar</a>
                                @endguest
                                @auth
                                    @if(Auth::user()->id != $mascota->id_propietario)
                                        <a href="{{ route('mascotas.show',$mascota->id) }}" class="btn btn-dark mb-2" type="button"><span class="glyphicon glyphicon-step-backward"></span>&nbsp;Adoptar</a>
                                    @else
                                        <a href="{{ route('mascotas.edit', $mascota->id) }}" class="btn btn-warning mb-2" type="button"><span class="glyphicon glyphicon-step-backward"></span>&nbsp;Actualizar</a>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            {{--  @empty
            <div class="card-body">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('/images/mascotas/'.$mascota->foto) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Mis Datos</h5>
                    <p class="card-text">
                            <li>
                                <a>Especie: </a>
                                <span>{{ $mascota->especie }}</span>
                            </li>
                            <li>
                                <a>F. Nacimiento:</a>
                                <span> {{ $mascota->f_nacimiento }} </span>
                            </li>
                            <li>
                                <a>Sexo:</a>
                                <span> {{ $mascota->sexo }} </span>
                            </li>
                            <li>
                                <a>Tamaño:</a>
                                <span>{{ $mascota->tamaño }}</span>
                            </li>
                            <li>
                                <a>Peso:</a>
                                <span>{{ $mascota->peso }}</span>
                            </li>
                            <li>
                                <a>Nombre</a>
                                <span>{{ $mascota->nombre }}</span>
                            </li>
                        </ul>
                    </p>
                        <div class="col-sm-12 col-xs-12">
                            @if(Auth::user()->id != $mascota->id_propietario)
                                <button class="btn btn-dark mb-2" type="button"><span class="glyphicon glyphicon-step-backward"></span>&nbsp;Adoptar</button>
                            @endif
                                <button class="btn btn-warning mb-2" type="button"><span class="glyphicon glyphicon-step-backward"></span>&nbsp;Actualizar</button>
                        </div>
                    </div>
                </div>
            </div>  --}}
            @endforeach

        </div>
    </div>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<footer class="footer footer-light bg-dark" style="color: white;margin-top: 50px;" >
    <div class="container">
      <div class="row " >
        <div class="col-md-6" style="margin-top: 50px;">
          <div class="ftco-footer-widget mb-4" >
            <h2 class="ftco-heading-2">Pet Care</h2>
            <p>Your Home should be with happy pets and we will help you in taking care of your pets</p>
            <p>Every pet we treat has a sensual effect on us</p>
            <p>Understanding the person or people living with a pet is a far greater need good Healthcare for there pets </p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-2" style="margin-top: 50px;">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Links</h2>
            <ul class="list-unstyled">
              <li><a href="index.html">Home</a></li>
              <li><a href="healthcare.html">Health Care</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="our_vets.html">Our Vets</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
        </div>


        <div class="col-md-4" style="margin-top: 50px;">
          <div class="ftco-footer-widget mb-4  ml-md-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-4">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">ADDRESS: Vijayawada pscmr college kr market</span></li>
                  <li><span class="icon icon-phone"></span><span class="text"></span>PHONE: 9059444459</li>
                  <li><span class="icon icon-envelope"></span><span class="text">EMAIL: petcare@gmail.com</span></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center"  style="margin-top: 50px;">
                    Copyright  All rights reserved | This template is made By Tirumalesh.k</a>
        </div>
        </div>
    </div>
</footer>
</html>
