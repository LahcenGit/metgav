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
            <h2>Kiosque multiservices</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Kiosque multiservices</a>
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
                        <iframe width="800" height="400" src="https://www.youtube.com/embed/sntD45E6H_0" title="Metgav industry - Kiosque multi-service" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Kiosque multiservices</h3>
                    <p>Le kiosque multiservices de METGAV INDUSTRY offre une solution polyvalente et efficace pour répondre à une multitude de besoins. Conçu avec un souci de fonctionnalité et de durabilité, notre kiosque combine un design moderne avec une construction métallique robuste et une galvanisation à chaud pour assurer une longue durée de vie même dans des environnements extérieurs exigeants.</p>
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
                                    <li><b>Polyvalence :</b>Le kiosque multiservices est conçu pour être polyvalent, capable de s'adapter à une gamme variée d'applications.</li>
                                    <li><b>Conception modulairee : </b>Grâce à sa conception modulaire, le kiosque peut être configuré de différentes manières pour s'adapter à différents espaces et répondre à des besoins spécifiques.</li>
                                    <li><b>Robustesse et durabilité : </b>Fabriqué avec des matériaux métalliques de haute qualité et galvanisé à chaud, le kiosque offre une construction robuste et une longue durée de vie, même dans des environnements extérieurs difficiles.</li>
                                    <li><b>Facilité d'utilisation :</b> Le kiosque est conçu pour offrir une expérience utilisateur conviviale, avec des fonctionnalités et des interfaces intuitives pour rendre l'accès aux différents services aussi simple que possible.</li>
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
