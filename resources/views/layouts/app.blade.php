<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
</head>
<body>
    <div id="app" class="bs-example">
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
            <a href="#" class="navbar-brand"><img src="https://www.uchceu.es/centros-ceu/hospital-clinico-veterinario/img/cabeceras/pequenos-animales.png" alt="logo" width="180px" height="70px"></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            @include('layouts.includes.navbar')

        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <script>
        $('.dropify').dropify();
    </script>
</body>
</html>
