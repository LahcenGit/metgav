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
            <h2>Supports Tubulaires</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">supports tubulaires</a>
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
                            <img src="{{ asset('front/assets/images/products/tub/tub.png') }}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Les supports tubulaires</h3>
                    <p>Les supports tubulaires sont des composants essentiels utilisés dans la construction et l'ingénierie pour soutenir une variété de structures, des passerelles aux installations industrielles. Chez Metgav industry, nous fournissons des supports tubulaires de haute qualité qui offrent une base solide pour la construction de projets divers.</p>
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
                        <div class="col-lg-12 col-md-12">
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <div class="product-details-description-content">
                                    <ul>
                                        <li><b>Matériaux Robustes :</b>Les supports tubulaires sont fabriqués à partir de matériaux durables tels que l'acier, l'aluminium ou l'acier inoxydable pour garantir une résistance structurelle.</li>
                                        <li><b>Design Varié : </b>Ils sont disponibles dans une gamme de formes et de tailles pour répondre aux besoins spécifiques du projet.</li>
                                        <li><b>Facilité de Fabrication : </b>Les supports tubulaires sont faciles à fabriquer et à installer, ce qui permet de gagner du temps lors de la construction.</li>
                                        <li><b>Adaptabilité  : </b>Ils sont adaptés à une variété d'applications, y compris les garde-corps, les échelles, les structures de support, les passerelles, les balustrades, et plus encore.</li>
                                        <li><b>Entretien Simplifié : </b>Les matériaux utilisés sont souvent résistants à la corrosion, ce qui réduit les besoins d'entretien.</li>
                                    </ul>
                                </div>
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
