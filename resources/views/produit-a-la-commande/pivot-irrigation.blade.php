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
            <h2>Pivots d'irrigation</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Pivots d'irrigation</a>
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
                        <img src="{{ asset('front/assets/images/products/pivot/img-1.png') }}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Pivots d'irrigation</h3>
                    <p>Les pivots d'irrigation sont des systèmes d'irrigation automatisés utilisés dans l'agriculture pour apporter de l'eau aux cultures de manière efficace et économique. Chez Metgav industry, nous proposons des pivots d'irrigation de haute qualité conçus pour améliorer la productivité agricole, économiser l'eau et simplifier le processus d'irrigation.</p>
                    <a href="{{ asset('/demande-devis') }}" class="main-btn"><span>Demander un devis</span>
                    </a>
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
                                    <li><b>Conception Robuste :</b>Nos pivots sont fabriqués avec des matériaux de haute qualité pour résister aux conditions environnementales difficiles, y compris le soleil, la pluie, la boue et la poussière.</li>
                                    <li><b>Automatisation Avancée : </b>Les pivots d'irrigation sont équipés de systèmes de contrôle automatisés qui permettent une gestion précise de la distribution d'eau.</li>
                                    <li><b>Flexibilité de Conception : </b>Ils sont modulaires et peuvent être adaptés à différentes tailles et formes de champs pour une couverture optimale.</li>
                                    <li><b>Économie d'Eau :</b>Nos pivots sont conçus pour minimiser le gaspillage d'eau en distribuant l'eau là où c'est nécessaire, évitant ainsi l'arrosage excessif.</li>
                                    <li><b>Entretien Simplifié : </b>Les systèmes sont conçus pour être faciles à entretenir, ce qui réduit les temps d'arrêt.</li>
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
