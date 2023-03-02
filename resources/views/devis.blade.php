@extends('layouts.front')
@section('content')

<!--=== Start Page Banner Section ===-->
<section class="page-banner-section bg-7"style="background-color: #035479; ">
    <div class="container">
        <div class="page-banner-content">
            <h2>Demander un devis</h2>
            <ul>
                <li>
                    <a href="index.html">Accueil</a>
                </li>
                <li>
                    Demander un devis
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
                        <h2>Demander un devis facilement !</h2>
                        <p>Remplissez le formulaire ci-dessous pour recevoir un devis personnalisé pour vos besoins en galvanisation à chaud et transformation métallique.</p>

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
                                         <option value="select">Selectionner un produit...</option>
                                         <option value="Bs">Bs</option>
                                         <option value="Tubulaires">Tubulaires</option>
                                         <option value="Armement">Armement</option>
                                         <option value="Charpente métaliqu">Charpente métalique</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea cols="30" rows="10" class="form-control" placeholder="Plus de détails..."></textarea>
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
