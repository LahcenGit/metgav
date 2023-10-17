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
            <h2>Galvanisation par centrifugation des boulons et des visses</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Galvanisation par centrifugation des boulons et des visses</a>
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
                            <img src="{{ asset('front/assets/images/products/gvb/img-1.png') }}" alt="Image">
                        </div>

                </div>

            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Galvanisation par centrifugation des boulons et des visses </h3>
                    <p>La galvanisation par centrifugation des boulons et des vis est un procédé essentiel pour garantir la durabilité et la fiabilité de ces fixations, qu'elles soient utilisées dans la construction, l'industrie, l'automobile, ou d'autres domaines. Grâce à cette couche de zinc protectrice, les boulons et les vis résistent aux éléments et restent en bon état pendant de nombreuses années, assurant ainsi le bon fonctionnement des structures et des équipements où ils sont utilisés.
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
                                        <li><b>Revêtement en Zinc :</b>Le processus de galvanisation par centrifugation implique d'immerger les boulons et les vis dans un bain de zinc fondu, puis de les retirer et de les faire tourner rapidement pour éliminer l'excès de zinc. Cela crée une couche de zinc uniforme sur la surface des pièces.</li>
                                        <li><b>Protection Contre la Corrosion : </b>La couche de zinc agit comme une barrière protectrice qui empêche la formation de rouille et de corrosion sur les boulons et les vis.</li>
                                        <li><b>Résistance aux Intempéries : </b>Les boulons et les vis galvanisés par centrifugation résistent efficacement aux conditions environnementales difficiles, y compris l'humidité, la pluie, le sel et les UV.</li>
                                        <li><b>Durabilité : </b> Cette méthode prolonge la durée de vie des boulons et des vis, réduisant ainsi les besoins de maintenance et de remplacement.</li>
                                        <li><b>Uniformité : </b>La galvanisation par centrifugation assure une couverture uniforme sur toutes les parties des boulons et des vis, y compris les filetages, ce qui est essentiel pour leur bon fonctionnement.</li>
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
