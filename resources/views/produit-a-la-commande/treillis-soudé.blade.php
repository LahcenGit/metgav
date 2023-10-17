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
            <h2>Treillis soudé</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Treillis soudé</a>
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
                        <img src="{{ asset('front/assets/images/products/Treillis/Treillis.jpg') }}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Treillis soudé</h3>
                    <p>Découvrez notre treillis soudé de qualité supérieure, conçu pour répondre aux exigences de la construction et de l'industrie. Notre treillis soudé est fabriqué en acier de première qualité et offre une résistance exceptionnelle, une polyvalence de conception, et une durabilité inégalée. Idéal pour renforcer la stabilité de vos projets, ce produit fiable trouve sa place dans une variété d'applications, des bâtiments aux infrastructures, en passant par les clôtures et les renforcements de sols.</p>
                    <a href="{{ asset('/demande-devis') }}" class="main-btn"><span>Demander un devis</span></a>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="tab product-details-tab pt-100">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Caractéristiques Clés : </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-details-description-content">
                                <ul>
                                    <li><b>Construction en Grille :</b> Le treillis soudé est fabriqué en soudant ensemble des barres d'acier perpendiculaires pour former une structure en grille.</li>
                                    <li><b>Diversité de Tailles et de Formes  : </b>Disponible dans une gamme de tailles et de formes, le treillis soudé peut être adapté à des besoins spécifiques de renforcement structurel.</li>
                                    <li><b>Résistance Structurelle : </b> Il offre une résistance élevée à la traction et à la compression, renforçant ainsi la capacité de charge des structures.</li>
                                    <li><b>Facilité d'Installation : </b>Le treillis soudé est facile à manipuler et à installer, ce qui réduit le temps de construction.</li>
                                    <li><b>Applications Polyvalentes : </b>Il est utilisé dans la construction de bâtiments, de ponts, de murs de soutènement, de dalles de béton, et bien plus encore.</li>
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
