@extends('master')
@section('title', 'Projets | Jérôme Fosse')
@section('content')

    <!-- Portfolio Section-->
    <section class="masthead page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Mes projets</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                <div class="col-md-8 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/site-stampee.webp') }}" alt="Site de timbre Stampee, réalisé lors du projet web 1" />
                    </div>
                </div>
                <!-- Portfolio Item 2-->
                <div class="col-md-8 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/site-biero.webp') }}" alt="Site biero réalisé avec angular, node.js, react" />
                    </div>
                </div>
                <!-- Portfolio Item 3-->
                <div class="col-md-8 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/site-zoo2.webp') }}" alt="Site réalisé en HTML et CSS" />
                    </div>
                </div>
                <!-- Portfolio Item 4-->
                <div class="col-md-8 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/site-portail-animal.webp') }}" alt="Site réalisé en HTML et CSS" />
                    </div>
                </div>
                <!-- Portfolio Item 5-->
                <div class="col-md-8 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/site-animal.webp') }}" alt="Site réalisé en HTML et CSS"/>
                    </div>
                </div>
                <!-- Portfolio Item 6-->
                <div class="col-md-8 col-lg-4 mb-5 mb-md-0">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/site-zoo1.webp') }}" alt="Site réalisé en HTML et CSS"/>
                    </div>
                </div>
                <!-- Portfolio Item 7-->
                <div class="col-md-8 col-lg-4 mb-5 mb-md-0">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal7">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/app-formulaire.webp') }}" alt="Formulaire en javaScript"/>
                    </div>
                </div>
                <!-- Portfolio Item 8-->
                <div class="col-md-8 col-lg-4 mb-5 mb-md-0">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal8">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/app-todolist.webp') }}" alt="To do list en javaScript"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

            <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Stampee</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset('assets/img/portfolio/site-stampee.webp') }}" alt="Site de timbre Stampee, réalisé lors du projet web 1" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Stampee est le premier projet complet réalisé lors de la formation.</p>
                                    <p class="row text-start">Frontend :</p>
                                    <ul class="row text-start">
                                        <li>Création de livrables : analyse de devis, personas, cas d'utilisation, exploration de la concurrence et moodBoard.</li>
                                        <li>Création de page (responsive) en HTML/CSS : produit, catalogue et accueil.</li>
                                        <li>Gestion de modal en JavaScript : cookies, image, connexion Principe de UI-UX : hiérarchie, contexte, accessibilité, rythme Optimisation, validation, performance et seo.</li>
                                    </ul>
                                    <p class="row text-start">Backend :</p>
                                    <ul class="row text-start">
                                        <li>Projet réalisé en php MVC.</li>
                                        <li>Méthodologie Agile (SCRUM).</li>
                                        <li>Création de requête en SQL.</li>
                                        <li>Base de donnée sur phpMyAdmin.</li>
                                        <li>Modele physique des données (MPD) avec Workbench.</li>
                                    </ul>
                                    <a href="https://www.jerome-fosse.ca/projet/projet_web_1/" target="blank" class="btn btn-primary">
                                        Voir le projet
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Biero</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset('assets/img/portfolio/site-biero.webp') }}" alt="Site biero réalisé avec angular, node.js, react" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Biero est une application qui permet de faire des recherches sur des bières, pouvoir les commenter et leur donner des notes</p>
                                    <ul class="row text-start">
                                        <li>Il est développé avec plusieurs Framework comme node.js, angular, react.</li>
                                        <li>Il est responsive et mobile first.</li>
                                        <li>Création de requête en SQL.</li>
                                        <li>Le css est scss.</li>
                                    </ul>
                                    <a href="https://jerome-fosse.ca/projet/biero/index.html" target="blank" class="btn btn-primary">
                                        Voir le projet
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Page d'accueil Zoo Forestier</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset('assets/img/portfolio/site-zoo2.webp') }}" alt="Site réalisé en HTML et CSS" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Ce projet est réalisé lors de la 2ème session de la formation</p>
                                    <ul class="row text-start">
                                        <li>Réalisé pour améliorer notre html et css</li>
                                        <li>Démarrage du responsive</li>
                                        <li>Reprise d'un projet d'une personne de la classe, amélioration est developpement de la page</li>
                                        <li>Création d'une page animal et portail des animaux en lien avec la page d'accueil</li>
                                    </ul>
                                   <a href="https://www.jerome-fosse.ca/projet/zoo2/index.html" target="blank" class="btn btn-primary">
                                        Voir le projet
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Portail des animaux Zoo Forestier</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset('assets/img/portfolio/site-portail-animal.webp') }}" alt="Site réalisé en HTML et CSS"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Projet réalisé lors de la 2ème session de la formation</p>
                                    <ul class="row text-start">
                                        <li>Page réalisé selon la page d'accueil</li>
                                        <li>Responsive</li>
                                        <li>Apprentissage HTML et CSS</li>
                                    </ul>
                                    <a href="https://www.jerome-fosse.ca/projet/zoo2/page-portail.html" target="blank" class="btn btn-primary">Voir le projet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Page Cougar Zoo Forestier</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset('assets/img/portfolio/site-animal.webp') }}" alt="Site réalisé en HTML et CSS"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Projet réalisé lors de la 2ème session de la formation</p>
                                    <ul class="row text-start">
                                        <li>Page réalisé selon la page d'accueil</li>
                                        <li>Responsive</li>
                                        <li>Apprentissage HTML et CSS</li>
                                    </ul>
                                    <a href="https://www.jerome-fosse.ca/projet/zoo2/page-cougar.html" target="blank" class="btn btn-primary">Voir le projet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Page d'accueil Zoo ValJabert</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset('assets/img/portfolio/site-zoo1.webp') }}" alt="Site réalisé en HTML et CSS"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Projet réalisé lors de la 2ème session de la formation</p>
                                    <ul class="row text-start">
                                        <li>Page réalisé selon un prototype imposé</li>
                                        <li>Apprentissage HTML et CSS</li>
                                    </ul>
                                    <a href="https://jerome-fosse.ca/projet/zoo1/index.html" target="blank" class="btn btn-primary">Voir le projet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 7-->
        <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" aria-labelledby="portfolioModal7" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Formulaire JavaScript</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset('assets/img/portfolio/app-formulaire.webp') }}" alt="Formulaire en javaScript"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Création d'un formulaire Javascript</p>
                                    <ul class="row text-start">
                                        <li>Formulaire sur plusieurs panneaux</li>
                                        <li>Validation du formulaire</li>
                                        <li>Apprentissage récupération des données</li>
                                        <li>Apprentissage du language JavaScript</li>
                                    </ul>
                                    <a href="https://www.jerome-fosse.ca/projet/formulaire_js/index.html" target="blank" class="btn btn-primary">Voir le projet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 8-->
        <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" aria-labelledby="portfolioModal8" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Liste de tâche en JavaScript</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset('assets/img/portfolio/app-todolist.webp') }}" alt="To do list en javaScript"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Création d'une application de liste de tâche</p>
                                    <ul class="row text-start">
                                        <li>Connexion à une base de donnée</li>
                                        <li>Utilisation de fetch</li>
                                        <li>Gestion des evenements</li>
                                        <li>Apprentissage du language JavaScript</li>
                                    </ul>
                                    <a href="https://www.jerome-fosse.ca/projet/todolist_js/index.php" target="blank" class="btn btn-primary">Voir le projet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
