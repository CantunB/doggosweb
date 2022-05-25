<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>PET CARE</title>
<link rel="icon"
      type="image/png"
      href="images/logo.png">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/li
bs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
background-image: url(https://nupec.com/wp-content/uploads/2021/05/shutterstock_572500255.jpg);
min-height: 600px;
background-repeat: no-repeat;
background-position: center;

background-size: cover;

}
.heading{

    color: #74B9FF;
    font-size: 50px;
    font-weight: bold;
}
._footer{
    color: white;
    height: 500px;
    justify-content: center;
    margin-top:50px ;
}
.google_map{
  width:558px;
 height:500px;
}
@media only screen and (max-width:900px) {
  /* For tablets: */
  .heading{

    color: #74B9FF;
    font-size: 20px;
    font-weight: bold;
}
.slider{
background-image: url(images/contact.jpg);
background-repeat: no-repeat;
background-position: center;

background-size: cover;

min-height: 400px;
}
._footer{
    color: white;
    justify-content: center;
    margin-top:50px ;
}
}
@media only screen and (max-width:600px) {
  /* For mobile phones: */
  .heading{

    color: #74B9FF;
    font-size: 10px;
    font-weight: bold;
}
.google_map{
  width:300px;
 height:300px;
}
._footer{
    color: white;
    justify-content: center;
    margin-top:50px ;
}
.slider{
background-image: url(images/contact.jpg);

background-repeat: no-repeat;
background-position: center;

background-size: cover;


min-width: 100%;

background-size: contain;
min-height: 300px;
}

  }
  .block{
    height:200px;
    background-color:#ffdd59;
    padding:10px;
    border: 15px solid white;
  }

  .block1{
    height:200px;
    background-color:#ef5777;

    padding:20px;
    border: 15px solid white;
     padding: 15px;
  }
  .butn{
background-color:#ffff99;
width:50%
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

    </div>
</div>
<div class="container"  style="margin-top: 50px;">
<div class='row' >
<div class="col">
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe class="google_map" id="gmap_canvas" src="https://maps.google.com/maps?ll=16.5306498,80.6057561&q=Cheruvu Centre&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>
</div>
<div class="col">
      <form action="#" method="post">
        <div class="form-group">
          <input type="text" class="form-control" name="name_people" placeholder="Your Name" required>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="Your Email" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" placeholder="Subject">
        </div>
        <div class="form-group">
          <textarea name="text" id="" cols="30" rows="7" class="form-control"  placeholder="Message"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" class="btn butn py-3 px-5">
        </div>
      </form>

    </div>
</div>
</div>
</body>
<footer class="footer footer-light bg-dark" style="color: white;" >
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
