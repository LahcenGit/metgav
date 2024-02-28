@extends('layouts.front')
@section('content')

<style>
    .controller{
        display: none;
    }
</style>

<section class="page-banner-section" style="background-color: #035479; ">
    <div class="container">
        <div class="page-banner-content">
            <h2>Nos produits</h2>
            <ul>
                <li>
                    <a href="#">Accueil</a>
                </li>
                <li>
                    Produits
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->


<!--=== Start Team Section ===-->
<section class="team-section bg-1 bg-color-f2f3f5 pt-100 pb-70">
    <div class="container">
        <div class="main-section-title-wrap">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title">
                        <span class="up-title">Découvrez nos produits de haute qualité</span>
                        <h2>Produits à la chaine</h2>
                    </div>
                </div>

            </div>
        </div>

        <div class="row justify-content-center">

            <div class="product-typeone-carousel owl-carousel ">
                    <div class="col-md-3" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-chaine/Bs')}}" class="team-img">
                                <img src="{{ asset('front/assets/images/products/bs-exemple.jpg') }}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-chaine/Bs')}}">Supports BS</a>
                                    </h3>

                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-chaine/tubulaire')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/tub-exemple.jpg')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-chaine/tubulaire')}}">Supports tubulaires</a>
                                    </h3>

                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-chaine/armements-electriques')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/armement-exemple.jpg')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-chaine/armements-electriques')}}">Armements électriques</a>
                                    </h3>

                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>


        <div class="main-section-title-wrap">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title">
                        <h2>Produits à la commande</h2>
                    </div>
                </div>

            </div>
        </div>

        <div class="row justify-content-center">

            <div class="product-carousel owl-carousel ">

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/ateliers-hangar-en-charpente-legere-bungalow')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/Ah-exemple.png')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/ateliers-hangar-en-charpente-legere-bungalow')}}">Ateliers hangar en charpente légère Bungalow</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/ateliers-hangar-en-charpente-metallique')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/am-exemple.png')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/ateliers-hangar-en-charpente-metallique ')}}">Ateliers, hangar en charpente métallique</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/catenaires')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/ct-exemple.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/catenaires')}}">Caténaires </a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/support-eclairage-en-lampe-classique')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/sel-exemple.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/support-eclairage-en-lampe-classique')}}">Supports d’éclairage en lampe classique</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/support-eclairage-photovoltaique')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/ses-example.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/support-eclairage-photovoltaique')}}">Supports d'éclairage photovoltaïque </a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/support-telecommunication')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/st-exemple.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/support-telecommunication')}}">Supports de télécommunication </a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/pivot-irrigation')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/pivot-exemple.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/pivot-irrigation')}}">Pivots d'irrigation </a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/fabrication-des-citernes')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/fc-exemple.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/fabrication-des-citernes')}}">Fabrication des citernes  </a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/support-haute-tension')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/sht.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/support-haute-tension')}}">Supports haute tension</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/construction-navale')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/cn-exemple.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/construction-navale')}}">La construction navale </a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/portes-et-fenetres-en-œuvre-d art')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/fp-exemple.png')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/portes-et-fenetres-en-œuvre-d art')}}">Portes et fenêtres en œuvre d'art</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/caillebotis')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/caillebotis-exemple.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/caillebotis')}}">Caillebotis </a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/chassis-vehicules')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/chassis-exemple.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/chassis-vehicules')}}">Châssis véhicules </a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/mat-eclairage-stade-portuaire')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/msp-exemple.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/mat-eclairage-stade-portuaire')}}">Mat d'éclairage des stades, portuaire et aéroportuaire </a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/chassis-metallique-panneau')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/cmp-exemple.png')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/chassis-metallique-panneau')}}">Châssis métallique pour panneau photovoltaique </a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{asset('/produit-a-la-commande/support-camera')}}" class="team-img">
                                <img src="{{asset('front/assets/images/products/sc-exemple.png')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{asset('/produit-a-la-commande/support-camera')}}">Mat support pour camera de télésurveillance</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{ asset('/produit-a-la-commande/boulons-et-ecrous') }}" class="team-img">
                                <img src="{{asset('front/assets/images/products/be-exemple.png')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{ asset('/produit-a-la-commande/boulons-et-ecrous') }}">Boulons et écrous</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{ asset('/produit-a-la-commande/fil-galvanisé') }}" class="team-img">
                                <img src="{{asset('front/assets/images/products/fg-exemple.png')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{ asset('/produit-a-la-commande/fil-galvanisé') }}">Fil galvanisé</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{ asset('/produit-a-la-commande/treillis-soudé') }}" class="team-img">
                                <img src="{{asset('front/assets/images/products/ts-exemple.png')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{ asset('/produit-a-la-commande/treillis-soudé') }}">Treillis soudé</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{ asset('/produit-a-la-commande/roulottes-de-chantiers ') }}" class="team-img">
                                <img src="{{asset('front/assets/images/products/rc-exemple.png')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{ asset('/produit-a-la-commande/roulottes-de-chantiers ') }}">Roulottes de chantiers</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" item col-lg-4 col-md-6" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{ asset('/produit-a-la-commande/kiosque-multiservices') }}" class="team-img">
                                <img src="{{asset('front/assets/images/products/kiosque.jpg')}}" alt="Image">
                            </a>
                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{ asset('/produit-a-la-commande/kiosque-multiservices') }}">Kiosque multiservices</a>
                                    </h3>
                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>


        <div class="main-section-title-wrap mt-4">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title">
                        <h2>Prestations de service</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="row justify-content-center">

            <div class="product-typeone-carousel owl-carousel ">
                    <div class="col-md-3" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{ asset('prestation/galvanisation-a-chaud') }}" class="team-img">
                                <img src="{{ asset('front/assets/images/products/presta-1.jpg') }}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{ asset('prestation/galvanisation-a-chaud') }}">Galvanisation à chaud (unité Tlemcen)</a>
                                    </h3>

                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{ asset('/prestation/galvanisation-par-centrifugation-des-boulons-et-des-visses') }}" class="team-img">
                                <img src="{{asset('front/assets/images/products/presta-2.jpg')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{ asset('/prestation/galvanisation-par-centrifugation-des-boulons-et-des-visses') }}">Galvanisation par centrifugation des boulons et des visses</a>
                                    </h3>

                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="width:100%;">
                        <div class="main-team-item fadeInUp delay-0-2s">
                            <a href="{{ asset('prestation/galvanisation-a-chaud-ain-defla') }}" class="team-img">
                                <img src="{{asset('front/assets/images/products/presta-3.jpg')}}" alt="Image">
                            </a>

                            <div class="team-content hover-style wow">
                                <div class="inner-border">
                                    <h3>
                                        <a href="{{ asset('prestation/galvanisation-a-chaud-ain-defla') }}">Galvanisation à chaud (unité Ain Defla)</a>
                                    </h3>

                                    <div class="team-social-link">
                                        <button class="controller">
                                            <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>


    </div>
</section>
<!--=== End Team Section ===-->



@endsection
