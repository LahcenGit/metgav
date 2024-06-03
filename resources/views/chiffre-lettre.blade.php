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

    .td-size{
       font-size: 14px !important;
    }
</style>

<!-- Start Page Banner Section !-->
<section class="page-banner-section" style="background-color: #035479; ">
    <div class="container">
        <div class="page-banner-content">
            <h2>Chiffres et Lettres</h2>
            <ul>
                <li>
                    <a href="#" style="font-size: 25px !important"> Notre Engagement en Chiffres et Reconnaissances </a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Banner Section !-->

<!--=== Start Product Details Section ===-->
<div class="product-details-area default-shape bg-color-linear-3 ptb-100">
    <div class="container">
       

        
      <!--=== Start Counter Section ===-->
      <section class="counter-section ">
        <div class="container">
            <div class="counter-wrap pt-100 pb-70">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="main-counter-item wow fadeInUp delay-0-2s">
                            <h2 class="counter">434000000 </h2>
                            <h2 class="point"><sup>DA</sup></h2>
                            <h3>Capital</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="main-counter-item wow fadeInUp delay-0-4s">
                            <h2 class="counter">900</h2>
                            <h3>emplois directs</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="main-counter-item wow fadeInUp delay-0-6s">
                            <h2 class="counter">2000</h2>
                            <h3>emplois indirects</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="main-counter-item wow fadeInUp delay-0-8s">
                            <h2 class="counter">1400</h2>
                            <h2 class="point">+</h2>
                            <h3>clients</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <!--=== End Counter Section ===-->

      <div class="row align-items-center d-flex justify-content-center mt-4">
        <div class="col-lg-8 text-center">
            <div class="product-details-main-content">
                <h2>Chiffres de Production </h2>
                <p> Ces chiffres témoignent de notre efficacité opérationnelle et de notre <br> capacité à répondre aux besoins du marché.
                </p>
            </div>
        </div>
      </div>



    <!--=== Start Counter Section ===-->
    <section class="counter-section ">
      <div class="container">
          <div class="counter-wrap pt-100 pb-70">
              <div class="row d-flex justify-content-center">
                  <div class="col-lg-3 col-sm-6">
                      <div class="main-counter-item wow fadeInUp delay-0-2s">
                          <h2 class="counter">20000</h2>
                          <h2 class="point"><sup>U/AN</sup></h2>
                          <h3>Supports BS</h3>
                      </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <div class="main-counter-item wow fadeInUp delay-0-2s">
                          <h2 class="counter">30000</h2>
                          <h2 class="point"><sup>U/AN</sup></h2>
                          <h3>Supports tubulaires</h3>
                      </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <div class="main-counter-item wow fadeInUp delay-0-2s">
                          <h2 class="counter">40000 </h2>
                          <h2 class="point"><sup>U/AN</sup></h2>
                          <h3>Armements électriques</h3>
                      </div>
                  </div>
                 
              </div>
          </div>
      </div>
    </section>
    <!--=== End Counter Section ===-->

    <div class="row align-items-center d-flex justify-content-center mt-4">
      <div class="col-lg-8 text-center">
          <div class="product-details-main-content">
              <h2>Homologation</h2>
              <p> METGAV Industry a été homologué par CREDEG, une filiale renommée de SONALGAZ. Cette homologation atteste de notre conformité aux normes et standards rigoureux établis par CREDEG,
              </p>
          </div>

          <div>
            <img src="{{asset('/homologation.jpg')}}" class="img-fluid" alt="">
          </div>
      </div>
    </div>


        <div class="row align-items-center d-flex justify-content-center mt-4"  >
            <div class="col-lg-8 text-center">
                <div class="product-details-main-content">
                    <h2>Attestations et Reconnaissances</h2>
                    <p>Nos certifications et reconnaissances qui attestent de notre engagement envers <br> la qualité, la sécurité et l'environnement. </p>
                    <div class="article-carousel owl-carousel owl-theme mt-3">
                        <div class="item">
                            <img src="{{ asset('attestations/att1.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('attestations/att2.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('attestations/att3.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('attestations/att4.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('attestations/att5.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('attestations/att6.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('attestations/att7.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('attestations/att8.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('attestations/att9.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('attestations/att10.jpg') }}" alt="Image">
                        </div>
                        <div class="item">
                            <img src="{{ asset('attestations/att11.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=== End Product Details Section ===-->


@endsection
@section('filiales-active', 'active')
