<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title></title>
<link rel="icon"type="{{ asset('image/png') }}"" href="images/logo.png">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

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
    <div class="slider" style="width: 100%;">
        <div class="heading">
        </div>
    </div>
    <div>
        <div class="row" style="width: 100%; padding: 5%;">
            <div class="col-lg-4 col-md-4">
            <div class="card">
                <div class="container">
                    <br>
                    <p align="center"><i class="fa fa-pencil-square-o " style="font-size:36px"></i></p>
                    <p align="center"><span>Preventive Care</span><br>Get a Perfect Care For Your Pets
                        It includes doctor visits, such as annual physicals,
                    </P>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="card">
                    <div class="container">
                        <br>
                        <p align="center"><i class="fa fa-calendar" style="font-size:36px"></i></p>
                        <p align="center"><span>#365days @24/7</span><br>Life is most important for every one of us .
                             24/7 Care provides 24/7/365 access to Us</p>

                               </div>
                </div>
                </div>    <div class="col-lg-4 col-md-4 ">
                    <div class="card">
                        <div class="container">
                            <br>
                            <p align="center"> <i class="fa fa-star-half-o" style="font-size:36px"></i></p>
                            <p align="center"><span>Star Rated Hospital</span> <br>hospitality and treatment are the most important things for your pets</p>

                            </div>
                    </div>
                    </div>

        </div>
        </div>
<div   class="row" style="width:100%;padding:10%">
    <div class="col-md-12 col-lg-6">
        <img class="ceoimage" src="https://soyfotografodeperros.com/wp-content/uploads/2019/10/Cachorros-1.jpg" alt="Avatar" height="350px">
    </div>
    <div class="col-md-12 col-lg-6">
        <h3><P>Acerca de nosotros</P></h3>
        <p>PetVet Care is a curated network of Experienced Veterinary Doctors and Petcare Specialists coming together to deliver the best care for your pet. Our vision is to provide reliable and convenient care for all pets</p>
        <p   p>Veterinary medicine is the branch of medicine that deals with the prevention, control, diagnosis and treatment of disease, disorder and injury in animals and along with this, it also deals with animal rearing, husbandry, breeding, research on nutrition and product development . The scope of veterinary medicine is wide, covering all animal species, both domesticated and wild, with a wide range of conditions which can affect different species.
            They also help to maintain food supply through and treatment, and mental health by keeping pets healthy and long living.  often collaborate with epidemiologists, and other health or natural scientists depending on type of work. Ethically, veterinarians are usually obliged to look after animal welfare. Veterinarians diagnose, treat and help keep animals safe and healthy.</p>
    </div>
</div>
    <div id="login" class="bg-img">
        @guest
            <form method="POST"  class="container1"  action="{{ route('login') }}">
                @csrf
                    <h1>Login</h1>
                    <label for="email"><b>Correo electronico</b></label>
                    <input type="text" class="form-control" placeholder="Ingresa tu correo" name="email" required>
                    <label for="phodatene"><b>Contraseña</b></label>
                    <input type="password" class="form-control" placeholder="*************" name="password" required>
                    <div class="col mt-4">
                        <div class="row">
                            <div class="col-md-6">
                                <button  type="submit" class="btn btn-success">Login</button>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('register') }}" type="submit" class="btn btn-primary">Registro</a>
                            </div>
                        </div>
                </div>
            </form>
        @endguest
    </div>
  <br>
  <h3><p align="center">Testimonials</p></h3>
  <br>

  <div class="slideshow-container">

    <div class="mySlides">
      <q>As a Customer of Petzz.org, and being the owner of two Boxer puppies, I am Extremely satisfied with the care and treatment, your organization is giving to my puppies. The Veterinary doctor is so punctual, caring and very affectionate with the puppies. When ever an emergency visit required, with in couple of hours, doctor visits and attend the puppies sickness. So overall I recommend Petzz.org to few of my friends having pets in our gated community. Thank you for your Excellent Service, and keep it up.</q>
      <p class="author">- Vijayakumar. G. K</p>
    </div>

    <div class="mySlides">
      <q>I have an indie puppy who is two months old. She had cough and cold. I called Petzz and they immediately addressed my concern. Doctor came to our home in 2 hours and gave necessary injections to my pup. She is better now. I appreciate the promptness and the treatment they gave to my puppy. Thank you so much. I would highly recommend it to everyone. It’s convenient when you are working and have no time to take the pet to the vet during the day..</q>
      <p class="author">-Arun Kumar AJ</p>
    </div>

    <div class="mySlides">
      <q>The few things i like the most about petzz.org. They send the vets home to attend to the pets. Taking the pets to a clinic is very difficult especially pets like cats. The vets are not very commercial and do not prescribe heavy medication. Petzz.org follows up with pet parents for feedback. Not expensive, even for a home visit.</q>
      <p class="author">- Tom </p>
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

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
<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }
    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>
