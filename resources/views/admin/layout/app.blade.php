<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <style>
            body
            {
                background-color: rgb(246, 250, 255) !important;
            }

            .layoutSidenav_nav .nav-link
            {
                color:black !important;
            }
            .loading-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #232323;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.loading-curtain {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    transition: 0.5s ease-in;
    height: 100%;
    background-color: rgb(245, 245, 245);
    animation: curtainOpen 0.5s forwards;
    -webkit-animation: curtainOpen 0.5s forwards;
}

.loading-curtain
{
    display: flex;
    flex-direction: row;
    justify-content: center;
    padding-top: 310px;
}
.loading-curtain .message
{
    font-size: 25px;
    font-weight:  bolder;
    color: #e71155;
    position: relative;
    left: -30px;
}

.loader {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    display: inline-block;
    position: relative;
    border: 3px solid;
    border-color: #000000 #000000 transparent;
    box-sizing: border-box;
    animation: rotation 1s linear infinite;
  }
  .loader::after {
    content: '';
    box-sizing: border-box;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    margin: auto;
    border: 3px solid;
    border-color: transparent #8d8d8d #8d8d8d;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    animation: rotationBack 0.5s linear infinite;
    transform-origin: center center;
  }

  @keyframes rotation {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
  }

  @keyframes rotationBack {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(-360deg);
    }
  }


        </style>
        <title>ESHOP ADMINISTRATION</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

         <!-- Spinner Start-->
        <div class="loading-container">
            <div class="loading-curtain">
                <span class="loader"></span>
            </div>
        </div>



        <nav class="sb-topnav navbar navbar-expand shadow-sm navbar-dark" style="background-color: white">
            <!-- Navbar Brand-->
            <a class="navbar-brand text-dark  ps-3" style="font-weight: 800" href="index.html">ESHOP ADMIN</a>
            <!-- Sidebar Toggle-->
            <button class="btn text-dark btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form  action="{{ route('rechercher_prod_traietement') }}" method='POST' class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                @csrf
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Rechercher for..." aria-describedby="btnNavbarSearch" name='terme' id='terme' />
                    <button  class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item text-dark dropdown">
                    <a class="nav-link fw-bolder text-dark dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i><small>{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</small>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/profile">Mon profile</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="btn mx-1">Se deconnecter</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav style="background-color: rgb(255, 255, 255);" class="sb-sidenav accordion shadow-sm" id="sidenavAccordion"  >
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div style="color: rgb(35, 144, 171)" class="sb-sidenav-menu-heading fw-bolder">Acceuil</div>
                            <a class="nav-link text-dark fw-bolder" href="/home">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Tableau de bord
                            </a>
                            <div style="color: rgb(30, 146, 175)" class="sb-sidenav-menu-heading fw-bolder">Gestion</div>
                            <a class="nav-link fw-bolder text-dark collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Gestion des clients
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link text-dark" href="/users/list">Liste des clients</a>
                                    <a class="nav-link text-dark" href="{{ route('ajouter_user') }}">Ajouter un client</a>
                                </nav>
                            </div>
                            <a class="nav-link fw-bolder text-dark collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                 Commandes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link text-dark" href="/products/list">Liste des commandes</a>
                                    {{-- <a class="nav-link text-dark" href="{{ route('ajouter_produit') }}">Ajouter un client</a> --}}
                                </nav>
                            </div>
                            <a class="nav-link fw-bolder text-dark collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Gestion produits
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link text-dark" href="/products/list">Liste des produits</a>
                                    <a class="nav-link text-dark" href="{{ route('ajouter_produit') }}">Ajouter un produit</a>
                                </nav>
                            </div>
                            <div style="color: rgb(30, 143, 171)" class="sb-sidenav-menu-heading fw-bolder">Messages</div>
                            <a class="nav-link text-dark fw-bolder" href="/messages">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Liste des messages
                            </a>
                            <div style="color: rgb(35, 144, 171)" class="sb-sidenav-menu-heading fw-bolder">Compte</div>
                            <a class="nav-link text-dark fw-bolder" href="/profile">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Mon compte
                            </a>
                            <a class="nav-link text-dark fw-bolder" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Deconnexion
                            </a>

                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                        @yield('content')
                </main>

            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="{{ asset('script.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    </body>
</html>
