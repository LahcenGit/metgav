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
            <h2>Châssis métallique pour panneau photovoltaiqueé</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Châssis métallique pour panneau photovoltaique</a>
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
                            <img src="{{ asset('front/assets/images/products/photovoltaique/photovoltaique-mat.jpg') }}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Châssis métallique pour panneau photovoltaique</h3>
                    <p>Le châssis métallique pour panneau photovoltaïque est un élément fondamental des installations solaires, offrant une base solide pour les panneaux photovoltaïques, garantissant leur stabilité et leur durabilité.</p>
                </div>
                <a href="{{ asset('/demande-devis') }}" class="main-btn"><span>Demander un devis</span>
                </a>
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
                                    <li><b>Résistance Structurelle  :</b>  Fabriqués à partir d'acier ou d'aluminium de qualité supérieure, nos châssis sont conçus pour résister aux charges et aux contraintes mécaniques, garantissant la stabilité des panneaux.</li>
                                    <li><b>Durabilité à Toute Épreuve : </b> Nos châssis métalliques sont conçus pour résister aux intempéries, à la corrosion et aux conditions environnementales extrêmes, assurant une longue durée de vie.</li>
                                    <li><b>Conception Personnalisée : </b> Nos châssis sont modulaires et peuvent être personnalisés pour s'adapter à différentes tailles et configurations de panneaux photovoltaïques.</li>
                                    <li><b>Facilité d'Installation : </b>Les châssis sont conçus pour une installation simple et rapide, réduisant ainsi les coûts de main-d'œuvre.</li>
                                    <li><b>Compatibilité Universelle : </b>Nos châssis s'adaptent à une variété de types de panneaux photovoltaïques, assurant une flexibilité maximale.</li>
                                    <li><b>Économie d'Énergie : </b>Les châssis métalliques peuvent être conçus pour maximiser la ventilation et la dissipation de la chaleur, améliorant ainsi l'efficacité des panneaux.</li>
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
