<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- Bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- font awesome --}}
    <style>
         footer {
      background-color: #232323;
      padding: 30px 0;
      color: white !important;
    }
    .footer-section {
      margin-bottom: 20px;
    }
    body
    {
        background-color: rgb(255, 255, 255) !important;
    }
    .navbar .nav-link
    {
        color: white !important;
    }
    .navbar
    {
        position: fixed !important;
        width: 100% !important;
        z-index: 999;
    }
    .navbar .navbar-brand
    {
        font-weight: 900 !important;
        /* font-size: 28px; */
        text-shadow: 0px 2px 2px black;
    }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Bungee+Spice&family=Jersey+25&family=Kanit:wght@900&family=Montserrat:wght@667&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@500&family=Rubik+Scribble&family=Titan+One&family=Ubuntu&display=swap" rel="stylesheet">
    {{-- styles css --}}
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ECOMMERCE</title>
</head>
<body>
    <!-- Spinner Start-->
    <div class="loading-container">
        <div class="loading-curtain">
            <span class="loader"></span>
        </div>
    </div>
    @if(session('status'))
    <div class="alert fw-bolder text-center alert-success">
        {{ session('status') }}
    </div>
@endif
    <nav class="navbar shadow-sm  navbar-expand-lg navbar-light p-3 " style="background-color: rgb(255, 255, 255)">
        <div class="container">
          <a style="color:white !important" class="navbar-brand fw-bolder mx-3" href="/">EShop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a style="color:rgb(0, 0, 0) !important" class="nav-link text-white active" aria-current="page" href="/">Acceuil</a>
              </li>
              <li class="nav-item">
                <a style="color:rgb(0, 0, 0) !important" class="nav-link text-white" href="/products">produits</a>
              </li>
              <li class="nav-item">
                <a style="color:rgb(0, 0, 0) !important" class="nav-link text-light " href="/contact">Contact</a>
              </li>
            </ul>
            <a href="/cart" style="border-radius: 80px;background-color:rgb(255, 255, 255);border:none;color:black" type="button" class="btn mx-2  btn-primary position-relative">
                <i class="fa fa-solid fa-cart-shopping"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                  {{ Cart::count() }}
                  <span class="visually-hidden">unread messages</span>
                </span>
              </a>
            <a href="/login" style="background-color:rgb(230, 230, 230);border:none;border-radius:60px;color:black" class="btn btn-dark mx-3 fw-bolder">Se connecter</a>
          </div>
        </div>
      </nav> <br> <br>

      <div>
        @yield('content')
      </div>



      {{-- <footer>
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="footer-section">
                <h5>Description</h5>
                <p>Bienvenue sur ElectroSHop, votre destination pour les derniers produits électroniques.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="footer-section">
                <h5>Liens Utiles</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Accueil</a></li>
                  <li><a href="#">Produits</a></li>
                  <li><a href="#">Catégories</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="footer-section">
                <h5>Réseaux Sociaux</h5>
                <ul class="list-unstyled social-icons">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer> --}}
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script src="{{asset('script.js')}}"></script>
        <!-- Bibliothèques Owl Carousel -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


      <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 2,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: true
                    },
                    1000: {
                        items: 5,
                        nav: true,
                        loop: false
                    }
                }
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        new WOW().init();
        </script>
</body>
</html>
