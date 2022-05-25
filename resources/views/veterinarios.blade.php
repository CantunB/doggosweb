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
background-image: url(https://i0.wp.com/revista.weepec.com/wp-content/uploads/2020/11/vet-examining-dog-6MLYBD7.jpg?fit=1200%2C800&ssl=1);

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
.button {
  background-color: #192A56;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button1 {
  background-color:transparent;
  color: white;
  border: 2px solid #192A56;
}

.button1:hover {
  background-color:#192A56;
  color: white;
}

@media only screen and (max-width:900px) {
  /* For tablets: */
  .heading{

    color: #74B9FF;
    font-size: 20px;
    font-weight: bold;
}
.button {
  background-color: #192A56;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.slider{
    background-image: url(images/our_vets.jpg);
min-height: 300px;
background-repeat: no-repeat;
background-position: center;

background-size: cover;

}
.button {
    background-color: #192A56;
  border: none;
  color: white;
  padding: 4px 2px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 0px 4px;
  transition-duration: 0.4s;
  cursor: pointer;
  height: 30px;
}
._footer{
    color: white;
    justify-content: center;
    margin-top:50px ;
}
}
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .heading{

    color: #74B9FF;
    font-size: 10px;
    font-weight: bold;
}
._footer{
    color: white;
    justify-content: center;
    margin-top:50px ;
}

.slider{
    background-image: url(images/our_vets.jpg);
min-height: 200px;
background-repeat: no-repeat;
background-position: center;

background-size: cover;

}
  }

  .butn{
background-color:#ffff99;
width:50%
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
 }

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
  </style>
<header style="overflow: hidden;">

</header>
<body>
    <div class="bs-example">
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
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


<h2 align="center" class="mt-4">OUR DOCTORS</h2>
<br><br>

        <div class="row" style="width: 100%;">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/doc2.jpg" >
                    <div class="container">
                    <h4><b>MISS.ROSE</b></h4>
                    <p>Veterinary Surgeon</p>
                    <P>5+ Years of Experience</P>
                    <P>Expertise in treatment and management of animals</P>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/doc4.jpg">
                    <div class="container">
                    <h4><b>MISS WHITE</b></h4>
                    <p>Veterinary Surgeon</p>
                    <P>5+ Years of Experience</P>
                    <P>Expertise in treatment and management of animals</P>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/doc5.jpg">
                    <div class="container">
                    <h4><b>MR.WHITE</b></h4>
                    <p>Veterinary Surgeon</p>
                    <P>5+ Years of Experience</P>
                    <P>Expertise in treatment and management of animals</P>
                    </div>
                </div>
            </div>
          </div>
          <br><br>
          <div class="row" style="width: 100%;">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/doc1.jpg" >
                    <div class="container">
                    <h4><b>MISS.ROSE</b></h4>
                    <p>Veterinary Surgeon</p>
                    <P>5+ Years of Experience</P>
                    <P>Expertise in treatment and management of animals</P>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/doc3.jpg" >
                    <div class="container">
                    <h4><b>Mr.WHITE</b></h4>
                    <p>Veterinary Surgeon</p>
                    <P>5+ Years of Experience</P>
                    <P>Expertise in treatment and management of animals</P>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/doc6.jpg" >
                    <div class="container">
                    <h4><b>Miss.WHITE</b></h4>
                    <p>Veterinary Surgeon</p>
                    <P>5+ Years of Experience</P>
                    <P>Expertise in treatment and management of animals</P>
                    </div>
                </div>
            </div>
          </div>
</body>
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
