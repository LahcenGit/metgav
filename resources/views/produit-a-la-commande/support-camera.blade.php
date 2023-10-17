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
            <h2>Mat support pour camera de télésurveillance</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Mat support pour camera de télésurveillance</a>
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
                            <img src="{{ asset('front/assets/images/products/camera/camera.jpg') }}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Mat support pour camera de télésurveillance</h3>
                    <p>Le mat support pour caméra de télésurveillance est un élément essentiel de tout système de sécurité moderne. Chez Metgav industry, nous mettons à votre disposition des mats supports de haute qualité, conçus pour offrir une solution de montage robuste, fiable et polyvalente pour vos caméras de surveillance, garantissant une surveillance efficace et une sécurité accrue.</p>
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
                                    <li><b>Robustesse et Stabilité :</b>Nos mats sont fabriqués à partir de matériaux métalliques de haute qualité pour assurer une base solide et stable pour vos caméras.</li>
                                    <li><b>Hauteur Réglable : </b>La hauteur du mat peut souvent être ajustée pour obtenir l'angle de vue optimal, ce qui est essentiel pour une surveillance efficace.</li>
                                    <li><b>Résistance aux Intempéries : </b> Nos mats sont conçus pour résister aux conditions environnementales les plus difficiles, qu'il s'agisse de chaleur intense, de froid extrême, de vent fort ou de précipitations.</li>
                                    <li><b>Installation Facile : </b>La conception de nos mats facilite leur installation sur une variété de surfaces, que ce soit sur un bâtiment, un poteau ou un mât dédié.</li>
                                    <li><b>Compatibilité Universelle : </b>Nos mats supports sont conçus pour accueillir une large gamme de caméras de télésurveillance, offrant une polyvalence maximale.</li>
                                    <li><b>Esthétiquement Discret : </b>Nos designs sont souvent élégants et discrets, s'intégrant harmonieusement à l'environnement.</li>
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
