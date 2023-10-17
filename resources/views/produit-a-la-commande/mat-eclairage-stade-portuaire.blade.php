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
            <h2>Mat d'éclairage des stades, portuaire et aéroportuaire</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Mat d'éclairage des stades, portuaire et aéroportuaire</a>
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
                        <img src="{{ asset('front/assets/images/products/mat-stade/mat-stade.jpg') }}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Mat d'éclairage des stades, portuaire et aéroportuaire</h3>
                    <p>Nos mats d'éclairage spécialement conçus pour les stades, les ports et les aéroports sont le symbole de l'excellence en matière d'éclairage dans des environnements essentiels où la visibilité est cruciale. </p>
                </div>
                <a href="{{ asset('/demande-devis') }}" class="main-btn"><span>Demander un devis</span>
                </a>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="tab product-details-tab pt-100">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Caractéristiques Clés de nos Mats d'Éclairage : </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-details-description-content">
                                <ul>
                                    <li><b>Haute Performance Lumineuse :</b> Nos mats d'éclairage sont équipés de systèmes d'éclairage de pointe, garantissant une luminosité exceptionnelle pour des opérations nocturnes en toute sécurité.</li>
                                    <li><b>Résistance aux Conditions Environnementales : </b>Fabriqués pour résister aux intempéries, nos mats d'éclairage sont conçus pour une longue durée de vie, même dans des environnements maritimes ou aéroportuaires exigeants.</li>
                                    <li><b>Structure Robuste : </b> Les structures de nos mats sont fabriquées en acier de haute qualité, offrant une stabilité et une résistance exceptionnelles aux vents forts.</li>
                                    <li><b>Conception Modulaire: </b>Nos mats sont conçus pour être modulaires, permettant une personnalisation aisée en fonction des besoins spécifiques en matière d'éclairage et de hauteur.</li>
                                    <li><b>Systèmes d'Économie d'Énergie : </b>Des solutions d'éclairage à haute efficacité énergétique sont disponibles pour réduire les coûts d'exploitation.</li>
                                    <li><b>Conformité aux Normes de Sécurité : </b>Nos mats d'éclairage respectent toutes les normes de sécurité en vigueur, garantissant un éclairage fiable et sûr.</li>
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
