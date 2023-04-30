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
            <h2>Pivots d'irrigation</h2>
            <ul>
                <li>
                    Produit
                </li>
                <li>
                    <a href="#">Pivots d'irrigation</a>
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
                            <img src="{{ asset('front/assets/images/products/pivot/img-1.png') }}" alt="Image">
                        </div>

                        <div class="item">
                            <img src="{{ asset('front/assets/images/products/pivot/img-2.png') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('front/assets/images/products/pivot/img-3.png') }}" alt="Image">
                        </div>
                </div>


            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>Pivots d'irrigation</h3>
                    <p>Les pivots d'irrigation sont des systèmes d'irrigation mécanisés qui permettent d'arroser de grandes surfaces de cultures avec un minimum d'intervention humaine. Ils sont composés d'une série de tuyaux en acier ou en aluminium montés sur des roues et pivotant autour d'un point central, appelé tour.

                        Les pivots d'irrigation peuvent être alimentés par des sources d'eau variées, telles que des puits, des lacs, des rivières ou des canaux d'irrigation. L'eau est pompée depuis la source et distribuée le long des tuyaux du pivot d'irrigation à l'aide de buses ou de gicleurs, qui arrosent les cultures en rotation.

                        Les pivots d'irrigation peuvent être équipés de différentes technologies pour améliorer l'efficacité de l'irrigation, comme des capteurs de sol pour mesurer l'humidité du sol, des systèmes de régulation de la pression de l'eau et des systèmes de contrôle automatique pour ajuster la quantité d'eau distribuée en fonction des besoins des cultures.</p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="tab product-details-tab pt-100">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-details-description-content">
                                <p>Les pivots d'irrigation sont des systèmes d'irrigation mécanisés qui permettent d'arroser de grandes surfaces de cultures avec un minimum d'intervention humaine. Ils sont composés d'une série de tuyaux en acier ou en aluminium montés sur des roues et pivotant autour d'un point central, appelé tour.

                                    Les pivots d'irrigation peuvent être alimentés par des sources d'eau variées, telles que des puits, des lacs, des rivières ou des canaux d'irrigation. L'eau est pompée depuis la source et distribuée le long des tuyaux du pivot d'irrigation à l'aide de buses ou de gicleurs, qui arrosent les cultures en rotation.

                                    Les pivots d'irrigation peuvent être équipés de différentes technologies pour améliorer l'efficacité de l'irrigation, comme des capteurs de sol pour mesurer l'humidité du sol, des systèmes de régulation de la pression de l'eau et des systèmes de contrôle automatique pour ajuster la quantité d'eau distribuée en fonction des besoins des cultures.</p>
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
