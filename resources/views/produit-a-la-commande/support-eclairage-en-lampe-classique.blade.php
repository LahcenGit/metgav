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
            <h2>Supports d’éclairage en lampe classique</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Supports d’éclairage en lampe classique</a>
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
                            <img src="{{ asset('front/assets/images/products/sel/img-1.png') }}" alt="Image">
                        </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Les supports d’éclairage en lampe classique</h3>
                    <p>Les supports d'éclairage en lampe classique sont bien plus que de simples dispositifs pour éclairer une pièce. Ils incarnent l'élégance intemporelle, ajoutant une touche de raffinement à tout espace. </p>
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
                                    <li><b>Design Élégant :</b>Nos supports d'éclairage sont conçus avec une attention minutieuse aux détails, capturant l'esthétique intemporelle des époques passées.</li>
                                    <li><b>Matériaux de Qualité : </b> Nous utilisons des matériaux de haute qualité tels que le laiton, le cristal et le verre pour garantir une durabilité et une beauté à long terme.</li>
                                    <li><b>Styles Variés : </b>Notre gamme de supports d'éclairage classiques comprend une variété de styles, allant des designs victoriens aux lampadaires d'inspiration rétro.</li>
                                    <li><b>Éclairage Ambiant :</b> Les supports d'éclairage en lampe classique diffusent une lumière douce et chaleureuse qui crée une atmosphère accueillante.</li>
                                    <li><b>Compatibilité avec les Ampoules LED : </b> Nos lampes classiques sont souvent compatibles avec des ampoules LED modernes, alliant ainsi style classique et efficacité énergétique.</li>
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
