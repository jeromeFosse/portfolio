@extends('master')
@section('title', 'Contact | Jérôme Fosse')
@section('content')

    <!-- Contact Section-->
    <section class="masthead page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contacte moi</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->

                    @isset($data)
                    <div>
                        <div class="text-center mb-5">
                            <div class="fw-bolder ">Votre message a bien était envoyé !</div>
                        </div>
                    </div>
                    
                    <p><strong>Résumé de votre message :</strong></p>
                    <p><strong>Nom :</strong> {{ $data->name }}</p>
                    <p><strong>Courriel :</strong> {{ $data->email }}</p>
                    <p><strong>Téléphone :</strong> {{ $data->phone }}</p>
                    <p><strong>Message :</strong> {{ $data->message }}</p>
                    @else

                    <form method="post">
                        @csrf
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Nom</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Le nom est obligatoire.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Courriel</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">Le courriel est obligatoire.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Les courriel n'est pas valide.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="phone" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Téléphone</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Le téléphone est obligatoire.</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="message" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Le message est obligatoire.</div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Votre message a bien était envoyé !</div>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Le message n'a pas pu être envoyé!</div></div>
                        <!-- Submit Button-->
                        <button class="btn btn-secondary btn-xl" id="submitButton" type="submit">Envoyer</button>
                    </form>
                    @endisset
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@endsection