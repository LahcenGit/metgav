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
            <h2>Ateliers, hangar en charpente métallique</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Ateliers, hangar en charpente métallique</a>
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
                        <img src="{{ asset('front/assets/images/products/am/img-1.png') }}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Ateliers, hangar en charpente métallique</h3>
                    <p> Nos ateliers et hangars en charpente métallique offrent des espaces de travail polyvalents conçus pour répondre aux besoins de diverses industries, alliant durabilité, fonctionnalité et adaptabilité.
                    </p>
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
                                    <li><b>Robustesse Structurelle :</b> Fabriquées en acier de haute qualité, nos structures métalliques offrent une résistance exceptionnelle pour supporter des charges lourdes et résister aux contraintes mécaniques.</li>
                                    <li><b>Polyvalence d'Utilisation : </b> Nos ateliers et hangars sont adaptés à une gamme variée d'applications, des activités industrielles aux espaces de stockage et de production.</li>
                                    <li><b>Personnalisation : </b>Chaque bâtiment peut être personnalisé en termes de taille, de design et d'aménagement intérieur pour répondre à vos besoins spécifiques.</li>
                                    <li><b>Entretien Facile  :</b>Les matériaux métalliques sont simples à entretenir, assurant une longue durée de vie de votre bâtiment.</li>
                                    <li><b>Installation Rapide : </b> La charpente métallique permet une installation rapide, économisant ainsi du temps et de l'argent.</li>
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
