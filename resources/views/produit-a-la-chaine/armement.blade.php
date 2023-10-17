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
            <h2>ARMEMENTS ELECTRIQUES</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">ARMEMENTS ELECTRIQUES</a>
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
                            <img src="{{ asset('front/assets/images/products/armement/armement.png') }}" alt="Image">
                        </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>ARMEMENTS ELECTRIQUES</h3>
                    <p>
                        Les armements électriques sont des dispositifs ou systèmes électriques utilisés pour réaliser diverses fonctions dans un environnement électrique ou électronique. Ils sont couramment utilisés dans l'industrie, les équipements électroniques, les infrastructures électriques et bien d'autres domaines.</p>
                        <a href="{{ asset('/demande-devis') }}" class="main-btn"><span>Demander un devis</span>
                        </a>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="tab product-details-tab pt-100">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Caractéristiques Clés</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-details-description-content">
                                <ul>
                                    <li><b>Variété d'Applications :</b> Les armements électriques sont utilisés dans une variété d'applications, y compris la commutation, le contrôle, la protection, la distribution de l'énergie électrique et la gestion des signaux électroniques.</li>
                                    <li><b>Composants Électriques : </b>Ils sont constitués de divers composants électriques, tels que les interrupteurs, les relais, les disjoncteurs, les contacteurs, les fusibles, les câbles, les connecteurs et les tableaux électriques.</li>
                                    <li><b>Automatisation : </b>Les armements électriques sont souvent intégrés à des systèmes d'automatisation pour permettre un contrôle précis et programmable des dispositifs électriques.</li>
                                    <li><b>Sécurité Électrique : </b> Certains armements électriques, tels que les disjoncteurs et les fusibles, sont conçus pour protéger les circuits contre les surcharges et les courts-circuits.</li>
                                    <li><b>Gestion de l'Énergie : </b> Ils sont utilisés pour gérer la distribution de l'énergie électrique dans les bâtiments, les usines et les réseaux électriques.</li>
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
