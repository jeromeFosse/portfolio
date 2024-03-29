<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Portfolio de Jerome Fosse, Découvrez mon expérience, mes formations, mes compétences en developpement web. Diplômé d'un AEC conception et programmation de site web. " />
        <meta name="keywords" content="Developpement Web - Front-end - conception - programmation - site web, ">
        <meta name="author" content="Jerome Fosse" />
        <title>@yield('title')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="home">Jérôme Fosse</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="projets">Mes projets</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="formation">Formations et compétences</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="experience">Expériences professionelles</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        @yield('content');


        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-xl-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Information</h4>
                        <p class="lead mb-3">Jérôme Fosse</p>
                        <p class="lead mb-3">H2K 2Z3, Montréal, Québec</p>
                        <p class="lead mb-3">+1 438 883 8595</p>
                        <p class="lead mb-3">contact@jerome-fosse.ca</p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-xl-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Visite</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/jerome-fosse-web/" target="blank"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/jeromeFosse/" target="blank"><i class="fab fa-fw fa-github"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-xl-4 ">
                        <h4 class="text-uppercase mb-0">Menu</h4>
                        <nav class="navbar bg-secondary" id="mainNav">
                            <div class="navbar-collapse" id="navbarResponsive">
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item lead mb-0 mx-lg-1"><a class="nav-link px-0 px-lg-3 rounded" href="projets">Mes projets</a></li>
                                    <li class="nav-item lead mb-0 mx-lg-1"><a class="nav-link px-0 px-lg-3 rounded" href="formation">Formations et compétences</a></li>
                                    <li class="nav-item lead mb-0 mx-lg-1"><a class="nav-link px-0 px-lg-3 rounded" href="experience">Expériences professionelles</a></li>
                                    <li class="nav-item lead mb-0 mx-lg-1"><a class="nav-link px-0 px-lg-3 rounded" href="contact">Contact</a></li>
                                </ul>
                            </div>  
                        </nav>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Jérôme Fosse 2023</small></div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
        @yield('js')
    </body>
</html>