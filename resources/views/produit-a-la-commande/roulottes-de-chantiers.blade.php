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
            <h2>Roulottes de chantiers</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Roulottes de chantiers</a>
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
                        <img src="{{ asset('front/assets/images/products/roulette/roulette.jpg') }}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Roulottes de chantiers</h3>
                    <p>Nos roulottes de chantier sont conçues pour répondre à vos besoins en matière de mobilité, de confort et d'efficacité sur le chantier. Dotées d'une structure robuste et d'aménagements intelligents, elles offrent une solution pratique pour les travailleurs et les équipes sur le terrain.</p>
                    <a href="{{ asset('/demande-devis') }}" class="main-btn"><span>Demander un devis</span></a>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="tab product-details-tab pt-100">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Caractéristiques Principales : </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-details-description-content">
                               <ul>
                                    <li><b>Mobilité Maximale :</b> Nos roulottes de chantier sont facilement transportables, vous permettant de les déplacer rapidement là où vous en avez besoin.</li>
                                    <li><b>Confort et Commodité : </b>L'intérieur spacieux est équipé de tout ce dont vous avez besoin, de la cuisine aux espaces de repos, pour que votre équipe soit bien installée.</li>
                                    <li><b>Résistance et Durabilité : </b>Construites pour résister aux conditions les plus exigeantes sur le chantier, nos roulottes sont prêtes à affronter les éléments.</li>
                                    <li><b>Sécurité  : </b> Les roulottes de chantier offrent un refuge sûr, idéal pour les pauses, les réunions de sécurité et la gestion des documents essentiels.</li>
                                    <li><b>Polyvalence  : </b>Qu'il s'agisse d'un site de construction, d'un projet industriel ou de travaux publics, nos roulottes s'adaptent à tous les besoins.</li>
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
