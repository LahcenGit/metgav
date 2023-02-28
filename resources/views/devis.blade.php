@extends('layouts.front')
@section('content')

<!--=== Start Page Banner Section ===-->
<section class="page-banner-section bg-7"style="background-color: #035479; ">
    <div class="container">
        <div class="page-banner-content">
            <h2>Demande un devis</h2>
            <ul>
                <li>
                    <a href="index.html">Accueil</a>
                </li>
                <li>
                    Demande un devis
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

<!--=== Start Contact Section ===-->
<div class="contact-section ptb-100">
    <div class="container">
        <div class="contact-wrap">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form ptb-100">
                        <h2>We Are Always Ready To Solution Your All Problem.</h2>

                        <form class="form-contact">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nom" name="first_name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Prenom" name="last_name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Téléphone" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Entreprise" name="entreprise">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <select  class="form-control" name="product">
                                         <option>Bs</option>
                                         <option>Tubulaires</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea cols="30" rows="10" class="form-control" placeholder="Déscription"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="main-btn">
                                        <span>Demander un devis</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!--=== End Contact Section ===-->
@endsection
