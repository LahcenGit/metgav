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
            <h2>Galvanisation à chaud</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Galvanisation à chaud</a>
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
                            <img src="{{ asset('front/assets/images/products/galvanisation/galva-ain-defla.png') }}" alt="Image">
                        </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Galvanisation à chaud </h3>
                    <p> La galvanisation est devenue à la fois un slogan et une exigence pour le secteur métallurgique vu son importance en matière de protection contre la corrosion et c’est la raison pour laquelle METGAV INDUSTRY associe une ligne de galvanisation à chaud à l’atelier de transformation métallique qui actuellement devient le procédé le plus répondu dans le monde. METGAV INDUSTRY va pouvoir apporter des solutions appropriées au secteur lié à sa gamme de produits tel que le bâtiment, le mobilier urbain, la construction navale, l’énergie nouvelle…etc…

                        Par voie de conséquence, METGAV INDUSTRY s’est dotée d’un procédé industriel concentré de technologie qui associe productivité, respect des hommes et de la nature.
                    </p>
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
                                        <li><b>Revêtement en Zinc :</b>Le processus de galvanisation à chaud consiste à immerger la pièce en acier ou en fer dans un bain de zinc en fusion, créant une couche de zinc sur la surface du matériau.</li>
                                        <li><b>Protection Contre la Corrosion : </b>La couche de zinc agit comme une barrière protectrice qui empêche la formation de rouille et de corrosion sur le métal de base.</li>
                                        <li><b>Résistance aux Intempéries : </b>Les pièces galvanisées à chaud sont particulièrement résistantes aux conditions environnementales sévères, notamment à l'humidité, à la pluie, au sel et aux UV.</li>
                                        <li><b>Durabilité : </b> La galvanisation à chaud prolonge considérablement la durée de vie des pièces en acier ou en fer, réduisant ainsi les besoins de maintenance et de remplacement.</li>
                                        <li><b>Applications Polyvalentes : </b>Ce processus est utilisé dans une variété d'industries, de la construction à l'automobile, en passant par l'agriculture et l'infrastructure.</li>
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
