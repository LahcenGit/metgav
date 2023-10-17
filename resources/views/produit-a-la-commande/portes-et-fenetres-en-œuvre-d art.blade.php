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
            <h2>Portes et fenêtres en œuvre d'art</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Portes et fenêtres en œuvre d'art</a>
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
                            <img src="{{ asset('front/assets/images/products/fp/porte-fenetre.jpg') }}" alt="Image">
                        </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Portes et fenêtres en œuvre d'art</h3>
                    <p> Nos portes et fenêtres en œuvre d'art sont bien plus que de simples éléments architecturaux, ce sont des pièces maîtresses qui fusionnent l'art, le design et la fonctionnalité pour créer un espace qui respire la beauté, l'élégance et la performance.
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
                                    <li><b>Design Exquis :</b>Nos portes et fenêtres sont conçues avec une attention méticuleuse aux détails, alliant l'esthétique aux normes de fonctionnalité les plus élevées.</li>
                                    <li><b>Matériaux de Qualité : </b>Nous utilisons des matériaux de première qualité, du bois aux métaux, en passant par le verre, pour garantir la durabilité et la beauté à long terme.</li>
                                    <li><b>Personnalisation : </b>Chaque porte et fenêtre en œuvre d'art peut être personnalisée pour correspondre parfaitement à l'esthétique de votre espace et à vos préférences.</li>
                                    <li><b>Performance Énergétique :</b>Nos fenêtres sont conçues pour offrir une excellente isolation thermique, vous aidant ainsi à économiser sur les coûts énergétiques.</li>
                                    <li><b>Sécurité : </b>La sécurité n'est pas en reste. Nos portes et fenêtres sont équipées de mécanismes de verrouillage robustes et de verre résistant.</li>
                                    <li><b>CInstallation Professionnelle : </b>Nous offrons une installation professionnelle pour garantir que chaque pièce s'intègre parfaitement dans votre espace.</li>
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
