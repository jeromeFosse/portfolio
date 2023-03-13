@extends('master')
@section('title', 'Formations et Compétences | Jérôme Fosse')
@section('content')

    <section class="masthead page-section">
        <h2 class="page-section-heading text-center text-uppercase text-secondary">Ma formation en développement</h2>
        <!-- Icon Divider-->
        <div class="divider-custom mb-5">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="container text-center mb-3">
            <div class="subheading mb-2">AEC Conception et programmation de site web</div>
            <div class="d-flex flex-row justify-content-center gap-5">
                <h3 class="lead">Collège de Maisonneuve</h3>
                <p>Montréal , Québec (avr. 2022 - juil.2023)</p>
            </div>
        </div>
    </section>

    {{-- https://startbootstrap.com/previews/resume --}}
    <section class="page-section bg-primary text-white">
        <h2 class="page-section-heading text-center text-uppercase text-white">Mes compétences</h2>
        <!-- Icon Divider--> 
        <div class="divider-custom divider-light mb-5">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="container text-center">
            <div class="subheading mb-3">Langages de programmation et Outils</div>
                <ul class="dev-icons mb-5">
                    <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                    <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                    <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                    <li class="list-inline-item"><i class="fab fa-angular"></i></li>
                    <li class="list-inline-item"><i class="fab fa-react"></i></li>
                    <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                    <li class="list-inline-item"><i class="fab fa-sass"></i></li>
                    <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                    <li class="list-inline-item"><i class="fab fa-laravel"></i></li>
                    <li class="list-inline-item"><i class="fab fa-php"></i></li>
                    <li class="list-inline-item"><i class="fab fa-bootstrap"></i></li>
                    <li class="list-inline-item"><i class="fab fa-github"></i></li>
                </ul>

            <div class="subheading mb-3">
            Méthodes</div>
            <ul class="fa-ul row m-auto">
                <li class="lead">Mobile-First, design responsive</li>
                <li class="lead">Modèle MVC</li>
                <li class="lead">Programmation Orienté Objet (POO)</li>
                <li class="lead">Agile Développement & Scrum</li>
            </ul>
        </div>
    </section>
        <section class="page-section">
        <h2 class="page-section-heading text-center text-uppercase text-secondary">Mes formations complémentaires</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="container text-center mb-3">
            <div class="subheading mb-2">DEP Boulangerie</div>
            <div class="d-flex flex-row justify-content-center gap-5">
                <h3 class="lead">Institut National de la Boulangerie et la Pâtisserie </h3>
                <p>Rouen, France (janv. 2018 - juil.2018)</p>
            </div>
        </div>
        <div class="container text-center mb-3">
            <div class="subheading mb-2">Baccalauréat en Sociologie</div>
            <div class="d-flex flex-row justify-content-center gap-5">
                <h3 class="lead">Université VIA DOMINICIA</h3>
                <p>Perpignan, France (sept. 2007 - juil.2010)</p>
            </div>
        </div>
        <div class="container text-center mb-3">
            <div class="subheading mb-2">2 année Cegep Service à la personne</div>
            <div class="d-flex flex-row justify-content-center gap-5">
                <h3 class="lead">Lycée "Beau Soleil"</h3>
                <p>Ceret, France (sept. 2005 - juil.2007)</p>
            </div>
        </div>
    </section>

@endsection