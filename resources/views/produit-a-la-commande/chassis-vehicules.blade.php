@extends('layouts.front')
@section('content')

<style>

    .owl-carousel  {
        position: relative;
    }
    .owl-carousel .owl-nav {
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      text-align: center;
    }

    .owl-carousel .owl-nav button.owl-prev,
    .owl-carousel .owl-nav button.owl-next {
      font-size: 20px;
      background-color: #035479;
        width: 2rem;
        height: 2rem;
        color: #ffff;
      border: none;
      outline: none;
      cursor: pointer;
      opacity: 0.5;
    }
    .owl-carousel .owl-nav button.owl-prev:hover,
    .owl-carousel .owl-nav button.owl-next:hover {
      opacity: 1;
      transition: 0.5s;
    }


    .owl-carousel .owl-nav button.owl-prev {
      position: relative;
      left: -5px;
    }

    .owl-carousel .owl-nav button.owl-next {
      position: relative;
      right: -5px;
    }

    .owl-carousel .owl-item.fadeOut {
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }

    .owl-carousel .owl-item.fadeIn {
      opacity: 1;
      transition: opacity 1s ease-in-out;
    }

    .overflow-section{
        line-height: 1.5 !important;
        height: 4.5em !important;
        overflow: hidden !important;
    }

    </style>

<!--=== Start Page Banner Section ===-->
<section class="page-banner-section" style="background-color: #035479; ">
    <div class="container">
        <div class="page-banner-content">
            <h2>Châssis véhicules</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Châssis véhicules</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

<!--=== Start Product Details Section ===-->
<div class="product-details-area default-shape bg-color-linear-3 ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">

                <div class="article-carousel owl-carousel owl-theme">

                        <div class="item">
                            <img src="{{ asset('front/assets/images/products/chassis/img-1.png') }}" alt="Image">
                        </div>


                </div>


            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Châssis véhicules</h3>
                    <p>Les châssis de véhicules sont le squelette sur lequel est construit chaque véhicule, qu'il s'agisse d'une voiture, d'un camion, d'un bus ou d'un autre moyen de transport.Chez Metgav industry, nous sommes fiers de concevoir et de fabriquer des châssis de véhicules de haute qualité qui servent de base solide à la mobilité moderne, offrant robustesse, sécurité et performance.</p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="tab product-details-tab pt-100">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Caractéristiques Clés :</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-details-description-content">
                                <ul>
                                    <li><b>Robustesse Structurelle :</b>Nos châssis sont fabriqués en acier de haute qualité pour assurer une résistance structurelle exceptionnelle, garantissant la sécurité des passagers et la durabilité du véhicule.</li>
                                    <li><b>Sécurité Avant Tout : </b> La conception de nos châssis est axée sur la sécurité, avec des points de fixation pour les systèmes de retenue et une absorption d'énergie pour minimiser les dommages en cas d'accident.</li>
                                    <li><b>Polyvalence de Conception :  </b>Nous concevons des châssis pour une variété de véhicules, de petites voitures compactes aux gros camions, en passant par les véhicules utilitaires.</li>
                                    <li><b>Confort et Maniabilité :</b>Nos châssis sont conçus pour offrir un équilibre entre la stabilité et le confort de conduite, garantissant une expérience de conduite agréable.</li>
                                    <li><b>Économie de Carburant : </b>Les châssis sont conçus pour être légers, contribuant ainsi à une meilleure efficacité énergétique.</li>
                                    <li><b>Conformité aux Normes de Sécurité : </b>Nos châssis respectent toutes les normes de sécurité en vigueur, garantissant la conformité réglementaire.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=== End Product Details Section ===-->


@endsection
