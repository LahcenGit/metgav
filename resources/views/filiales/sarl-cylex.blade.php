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
            <h2>SARL Cylexx Industry</h2>
            <ul>
                <li>
                    <a href="#" style="font-size: 25px !important">Fabrication des motocycles 2 roues et 3 roues</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

<!--=== Start Product Details Section ===-->
<div class="product-details-area default-shape bg-color-linear-3 ptb-100">
    <div class="container">
        <div class="row align-items-center d-flex justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="product-details-main-content">
                    <h2>Présentation</h2>
                    <p> SARL Cylexx Industry excelle dans la fabrication de motocycles 2 et 3 roues. Nos véhicules allient un design élégant à des performances exceptionnelles et une fiabilité à toute épreuve. Dotés de technologies avancées, nos motocycles offrent une expérience de conduite sécurisée et innovante. Optez pour la qualité et l'aventure avec SARL Cylexx Industry, où chaque détail est conçu pour une conduite inégalée.
                    </p>
                </div>
            </div>
        </div>

        <div class="row align-items-center d-flex justify-content-center " style="background-color: aliceblue; padding:20px;">
            <div class="col-lg-8 text-center">
                <div class="product-details-main-content">
                    <h2>Nos Showrooms</h2>
                    <div class="article-carousel owl-carousel owl-theme mt-3">
                        <div class="item">
                            <img src="{{ asset('cylexx/show-moto-1.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('cylexx/show-moto-2.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('cylexx/show-moto-3.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('cylexx/show-moto-4.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('cylexx/show-moto-5.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('cylexx/show-moto-6.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('cylexx/show-moto-7.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('cylexx/show-moto-8.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center d-flex justify-content-center mt-4">
            <div class="col-lg-8 text-center">
                <div class="product-details-main-content mt-4">
                    <h2>Nos Revendeurs</h2>
                    
                    <table class="table table-striped mt-4">
                        <thead>
                          <tr style="background-color:#29A9E1; color:#ffff;">
                            <th scope="col">N°</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Adresse</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12">
            <div class="tab product-details-tab pt-100">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Coordonnées fiscaux :</button>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="col-lg-12 col-md-12">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-details-description-content">
                                <ul>
                                    <li><b>Gérants : </b> Mr. Reda Abid  / Mr. Mohammed El Hadi Bouabdallah</li>
                                    <li><b>RC :</b> 23B1124954</li>
                                    <li><b>NIF : </b> 002331112495474</li>
                                    <li><b>NIS : </b> 002331030080066</li>
                                    <li><b>Siege social : </b> Hai Khemisti N°16 Res Ammar BT G Lot 39.</li>
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
