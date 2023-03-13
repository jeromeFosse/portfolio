@extends('master')
@section('title', 'Expériences Professionnelles | Jérôme Fosse')
@section('content')

{{-- https://startbootstrap.com/previews/agency --}}
<section class="masthead page-section" id="about">
        <div class="container">
           <h2 class="page-section-heading text-center text-uppercase text-secondary">Mes Experiences Professionnelles</h2>
        <!-- Icon Divider-->
        <div class="divider-custom mb-5">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('assets/img/logo-entreprise/logo-la-vilaine-gourmande.jpeg') }}" alt="Logo de l'entreprise la vilaine gourmande" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Co-fondateur</h4>
                            <div class="subheading mb-2">La vilaine gourmande</div>
                            <h3 class="lead">mai 2021 - juil. 2022</h3>
                        </div>
                        <div class="timeline-body">
                            <ul class="fa-ul row">
                                <li>Création du site internet avec shopify puis wordpress.</li>
                                <li>Utilisation de WooCommerce pour la gestion des produits ainsi que le paiement.</li>
                                <li>Ajout dans les réseaux sociaux.</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('assets/img/logo-entreprise/logo-farine-et-cacao.webp') }}" alt="Logo de l'entreprise Farine et cacao" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Tourier</h4>
                            <div class="subheading mb-2">Farine et cacao</div>
                            <h3 class="lead">mai 2021 - oct. 2021</h3>
                        </div>
                        <div class="timeline-body">
                            <ul class="fa-ul row ">
                                <li>Création d'une gamme de viennoiserie.</li>
                                <li>Production de la viennoiserie</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('assets/img/logo-entreprise/logo-aubainerie.jpeg') }}" alt="Logo de l'entreprise Aubainerie" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Assistant gérant</h4>
                            <div class="subheading mb-2">Aubainerie</div>
                            <h3 class="lead">avr. 2019 - mai 2021</h3>
                        </div>
                         <div class="timeline-body">
                            <ul class="fa-ul row ">
                                <li>Vente et gestion de l'espace vente </li>
                                <li>Magasinier et gestion du stock</li>
                                <li>Gestion des employés</li>
                                <li>Gestion des caisses</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('assets/img/logo-entreprise/commerces.png') }}" alt="illustrastion pour indiquer plusieurs commerces" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Propriétaire gérant</h4>
                            <div class="subheading mb-2">La baguette en folie | Epicerie SPAR | Les jardins du roussillon | Bar à vin Tapas</div>
                            <h3 class="lead">janv. 2009 - avr. 2019</h3>
                        </div>
                        <div class="timeline-body">
                            <ul class="fa-ul row ">
                                <li>Vente et gestion de l'espace vente </li>
                                <li>Magasinier et gestion du stock</li>
                                <li>Gestion des caisses</li>
                                <li>Gestion du personnel</li>
                                <li>Gestion quotidienne d'une entreprise</li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

@endsection