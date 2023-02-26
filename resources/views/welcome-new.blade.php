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

</style>


<!--=== Start Banner Section ===-->
<div class="slider-carousel owl-carousel">
    <div class="item">
        <section class="banner-section bg-1">
            <div class="container">
                <div class="item">
                    <div class="banner-content">
                        <h1 class="wow fadeInUp delay-0-2s">METGAV INDUSTRY ,</h1>
                        <p class="wow fadeInUp delay-0-4s"> Usine de Galvanisation à Chaud & Transformation Métallique</p>
            
                        <a href="#" class="main-btn wow fadeInUp delay-0-8s">
                            <span>
                                En savoir plus
                                <i class="icofont-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="item">
        <section class="banner-section bg-1">
            <div class="container">
                <div class="item">
                    <div class="banner-content">
                        <h1 class="wow fadeInUp delay-0-2s">METGAV INDUSTRY ,</h1>
                        <p class="wow fadeInUp delay-0-4s"> Usine de Galvanisation à Chaud & Transformation Métallique</p>
            
                        <a href="#" class="main-btn wow fadeInUp delay-0-8s">
                            <span>
                                En savoir plus
                                <i class="icofont-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>




</div>
<div class="owl-dots"></div>


<!--=== End Banner Section ===-->

<!--=== Start Features Section ===-->
<section class="features-section pt-100 pb-70">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-lg-3 col-sm-6">
                <div class="main-features-item wow fadeInUp delay-0-2s">
                    <i class="main-icon icofont-workers-group"></i> 
                    <i class="shape-icon icofont-workers-group"></i>
                    <h3>Expertise métallurgique</h3>
                    <p class="lh-sm  mt-2">Un expertise solide en matière de métallurgie pour offrir des produits de haute qualité à nos clients.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-sm-6">
                <div class="main-features-item wow fadeInUp delay-0-4s">
                    <i class="main-icon icofont-star-shape"></i>
                    <i class="shape-icon icofont-star-shape"></i>
                    <h3>Qualité supérieure</h3>
                    <p class="lh-sm  mt-2"> Metgav s&apos;engager à fournir des produits de qualité supérieure et à respecter les normes de l&apos;industrie.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="main-features-item wow fadeInUp delay-0-6s">
                    <i class="main-icon icofont-light-bulb"></i>
                    <i class="shape-icon icofont-light-bulb"></i>
                    <h3>Technologie de pointe</h3>
                    <p class="lh-sm  mt-2">Un usine équipé des technologies les plus avancées pour garantir des résultats précis et cohérents.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="main-features-item wow fadeInUp delay-0-8s">
                    <i class="main-icon icofont-eco-environmen"></i>
                    <i class="shape-icon icofont-eco-environmen"></i>
                    <h3>Environnement</h3>
                    <p class="lh-sm  mt-2">Metgav utilise des méthodes et adopte des pratiques écologiques pour minimiser les impacts environnementaux.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== End Features Section ===-->

<!--=== Start About Us Section ===-->
<section class="about-us-section pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-us-img me-15 wow fadeInLeft delay-0-2s">
                    <img src="{{asset('front/assets/images/about-img.jpg')}}" alt="Image">

                    <div class="experience">
                        <div class="experience-bg">
                            <span>Depuis 2014</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content ms-15 wow fadeInRight delay-0-2s">
                    <span class="up-title">METGAV</span>
                    <h2>Un savoir-faire métallurgique</h2>
                    <p>Située à l’Ouest de l’Algérie à 15 kilomètres de la wilaya de Tlemcen dans la commune de Ain Fezza, METGAV INDUSTRY  est une entreprise qui active dans le domaine de la construction métallique et du traitement de surfaces par galvanisation à chaud, qui se veut innovante et inscrit sa démarche dans la durée et dont l’objectif principal demeure la satisfaction pleine et totale de ses clients afin de leur fournir un gain de compétitivité.</p>
                    <ul>
                        <li>
                            <i class="icofont-hand-drawn-right"></i>
                            Adopter une approche systématique de la gestion de la qualité en adéquation avec la
                            norme ISO 9001-2015. 
                        </li>
                        <li>
                            <i class="icofont-hand-drawn-right"></i>
                            METGAV Industry propose des ateliers de dernière génération
                        </li>
                        <li>
                            <i class="icofont-hand-drawn-right"></i>
                           
                                METGAV Industry membre de l'Association Galvazinc depuis janvier 2019

                        </li>
                    </ul>

                    <a href="#" class="main-btn">
                        <span>
                            En savoir plus
                            <i class="icofont-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== End About Us Section ===-->

<!--=== Start Services Section ===-->
<section class="services-section bg-color-251f1a ptb-100">
    <div class="container">
        <div class="main-section-title white-title wow fadeInUp delay-0-2s">
            <span class="up-title">Nos Services</span>
            <h2>Conçus pour répondre à tous vos besoins en matière de métallurgie</h2>
        </div>

        <div class="services-slider owl-carousel owl-theme " >
            <div class="main-services-item wow fadeInUp delay-0-2s">
                <i class="icofont-fire-burn"></i>
                <h3>
                    <a href="#">Galvanisation à chaud</a>
                </h3>
                <p>La galvanisation est devenue à la fois un slogan et une exigence pour le secteur métallurgique vu son importance en ...</p>
                    
                <a href="#" class="main-detail-btn">
                    <i class="icofont-plus"></i>
                    Lire plus
                </a>
                <img src="{{asset('front/assets/images/services-card-shape.png')}}" class="services-card-shape" alt="Image">
            </div>
        
            <div class="main-services-item wow fadeInUp delay-0-4s ">
                <i class="icofont-building"></i>
                <h3>
                    <a href="#">Construction métallique</a>
                </h3>
                <p>pécialisée dans l’étude, la conception et la fabrication, METGAV dispose d’un atelier de transformation métallique...</p>
                    
                <a href="#" class="main-detail-btn">
                    <i class="icofont-plus"></i>
                    Lire plus
                </a>
                <img src="{{asset('front/assets/images/services-card-shape.png')}}" class="services-card-shape" alt="Image">
            </div>
        
        </div>
    </div>

    <img src="{{asset('front/assets/images/services-bg-shape.png')}}" class="services-bg-shape" alt="Image">
</section>
<!--=== End Services Section ===-->

<!--=== Start Projects Section ===-->
<section class="projects-section pt-100 pb-70">
    <div class="container">
        <div class="main-section-title-wrap">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title left-title">
                        <span class="up-title">Nos projets</span>
                        <h2>Découvrez nos réalisations les plus récentes</h2>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight delay-0-2s">
                    <p>Des projets innovants et variés, tous conçus sur mesure pour répondre aux besoins de nos clients en matière de galvanisation à chaud et de transformation métallique. Explorez nos réussites pour vous inspirer et voir comment nous pouvons répondre à vos propres besoins en métallurgie.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="main-projects-item wow fadeInUp delay-0-2s">
                    <a href="#" class="projects-img">
                        <img src="{{asset('front/assets/images/projects/projects-1.jpg')}}" alt="Image">
                    </a>

                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="#">Grande mosquée d'Alger </a>
                            </h3>
                            <p>Montage de la Moucharabieh réalisé en tôle galvanisé par Metgav Industry</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-projects-item wow fadeInUp delay-0-4s">
                    <a href="#" class="projects-img">
                        <img src="{{asset('front/assets/images/projects/projects-2.jpg')}}" alt="Image">
                    </a>

                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="#">Galvanisation des citernes</a>
                            </h3>
                            <p>Une meilleur galvanisation de vos citerne chez Metgav en terme de qualité et prix</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-projects-item wow fadeInUp delay-0-6s">
                    <a href="#" class="projects-img">
                        <img src="{{asset('front/assets/images/projects/projects-3.jpg')}}" alt="Image">
                    </a>

                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="#">Projet Armement</a>
                            </h3>
                            <p>Un projet récent de Metgav s'agit de la réalisations des armement </p>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>
<!--=== End Projects Section ===-->

<!--=== Start Team Section ===-->
<section class="team-section bg-1 bg-color-f2f3f5 pt-100 pb-70">
    <div class="container">
        <div class="main-section-title-wrap">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title left-title">
                        <span class="up-title">Nos produits</span>
                        <h2>Découvrez notre gamme complète de produits de haute qualité</h2>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight delay-0-2s">
                    <p>De la galvanisation à chaud aux pièces métalliques sur mesure, nous offrons une vaste sélection de produits qui répondent aux normes les plus élevées de l'industrie. Parcourez notre sélection pour trouver les solutions métalliques adaptées à vos besoins spécifiques et à vos projets.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="main-team-item fadeInUp delay-0-2s">
                    <a href="#" class="team-img">
                        <img src="{{asset('front/assets/images/team/tean-1.jpg')}}" alt="Image">
                    </a>
                    
                    <div class="team-content hover-style wow">
                        <div class="inner-border">
                            <h3>
                                <a href="#">Pylônes</a>
                            </h3>
                            <span>BS, polygonaux...</span>

                            <div class="team-social-link">
                                <button class="controller">
                                    <i class="icofont-arrow-right"></i>
                                </button>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-team-item wow fadeInUp delay-0-4s">
                    <a href="#" class="team-img">
                        <img src="{{asset('front/assets/images/team/tean-2.jpg')}}" alt="Image">
                    </a>
                    
                    <div class="team-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="#">Armement</a>
                            </h3>
                            <span>Une résistance maximale</span>

                            <div class="team-social-link">
                                <button class="controller">
                                    <i class="icofont-arrow-right"></i>
                                </button>

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-team-item hover-style wow fadeInUp delay-0-6s">
                    <a href="#" class="team-img">
                        <img src="{{asset('front/assets/images/team/tean-3.jpg')}}" alt="Image">
                    </a>
                    
                    <div class="team-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="#">Supports photovoltaïque </a>
                            </h3>
                            <span>Des solutions pour les supports photovoltaïques</span>

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
</section>
<!--=== End Team Section ===-->

<!--=== Start Testimonial Section ===-->
<section class="testimonial-section ptb-100">
    <div class="container">
        <div class="main-section-title-wrap">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title left-title">
                        <span class="up-title">Nos partenaires</span>
                        <h2>Découvrez nos partenaires de confiance</h2>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight delay-0-2s">
                    <p>Nous sommes fiers de collaborer avec des entreprises renommées dans l'industrie de la galvanisation à chaud et de la transformation métallique pour offrir des produits et des services de qualité supérieure à nos clients. Explorez notre liste de partenaires pour en savoir plus sur nos relations commerciales solides et durables.</p>
                </div>
            </div>
        </div>

        <div class="testimonial-slider owl-carousel owl-theme">
            <div >
                <img src="{{asset('front/assets/images/logos/chi1-150x150.jpg')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/cma_logo-150x150.jpg')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/sonalgaz.jpg')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/gk.png')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/mobilis-150x150.png')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/famag.png')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/kahrif-2-150x150.png')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/cpa.png')}}" alt="Image">
            </div>
            <div >
                <img src="{{asset('front/assets/images/logos/arm.png')}}" alt="Image">
            </div>

          
           
        </div>
    </div>
</section>
<!--=== End Testimonial Section ===-->

<!--=== Start Video Section ===-->
<section class="video-section ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="video-content wow fadeInLeft delay-0-2s">
                    <span class="up-title">Video</span>
                    <h2>Plongez dans l'univers de notre usine </h2>
                    <p>Observez la structure de notre usine et les processus de production en action pour mieux comprendre notre savoir-faire en matière...</p>
                        
                    <button class="main-btn">
                        <span>
                            En savoir plus
                            <i class="icofont-arrow-right"></i>
                        </span>
                    </button>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="text-center wow fadeInRight delay-0-2s">
                    <div class="video-btn">
                        <a href="https://www.youtube.com/watch?v=Rhrjh6JXOHo" class="popup-youtube">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <i class="icofont-play-alt-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== End Video Section ===-->

<!--=== Start Blog Section ===-->
<section class="blog-section pt-100 pb-70">
    <div class="container">
        <div class="main-section-title-wrap">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title left-title">
                        <span class="up-title">Derniers Articles</span>
                        <h2>Découvrir les innovations et les meilleures pratiques de notre métier. </h2>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight delay-0-2s">
                    <p>Nous partageons notre expertise et notre expérience à travers une variété de sujets pertinents pour vous aider à mieux comprendre notre métier et à rester informé sur les dernières avancées de l'industrie. Consultez notre sélection d'articles pour rester à la pointe de l'actualité dans notre domaine.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="main-blog-item wow fadeInUp delay-0-2s">
                    <a href="#" class="blog-img">
                        <img src="{{asset('front/assets/images/blog/blog-1.jpg')}}" alt="Image">
                    </a>

                    <div class="blog-content hover-style">
                        <div class="inner-border">
                            <ul>
                                <li>février 12, 2023</li>
                                <li>
                                    <a href="#">Commentaire (03)</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="#">L’économie de l’acier : une activité cyclique</a>
                            </h3>
                            <p>L’acier est un alliage métallique composé de fer et de carbone, auquel peut être ajouté du  nickel, du chrome, du manganèse et du molybdène...  </p>
                            <a href="#" class="main-detail-btn">
                                Lire plus
                                <i class="icofont-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-blog-item wow fadeInUp delay-0-4s">
                    <a href="#" class="blog-img">
                        <img src="{{asset('front/assets/images/blog/blog-2.jpg')}}" alt="Image">
                    </a>

                    <div class="blog-content hover-style">
                        <div class="inner-border">
                            <ul>
                                <li>mai 10, 2020</li>
                                <li>
                                    <a href="#">Commentaires (01)</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="#">Processus de galvanisation</a>
                            </h3>
                            <p>La galvanisation à chaud est une liaison métallurgique de zinc et d'acier produite en usine sous des conditions contrôlées. Ce procédé,...</p>
                            <a href="#" class="main-detail-btn">
                                Lire plus
                                <i class="icofont-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-blog-item wow fadeInUp delay-0-2s">
                    <a href="#" class="blog-img">
                        <img src="{{asset('front/assets/images/blog/blog-3.jpg')}}" alt="Image">
                    </a>

                    <div class="blog-content hover-style">
                        <div class="inner-border">
                            <ul>
                                <li>février 12, 2023</li>
                                <li>
                                    <a href="#">Commentaire (03)</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="#">L’économie de l’acier : une activité cyclique</a>
                            </h3>
                            <p>L’acier est un alliage métallique composé de fer et de carbone, auquel peut être ajouté du  nickel, du chrome, du manganèse et du molybdène...  </p>
                            <a href="#" class="main-detail-btn">
                                Lire plus
                                <i class="icofont-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--=== End Blog Section ===-->

<!--=== Start iso ===-->
<section class="ptb-100" style="background-color:#f3f3f3">
    <div class="container">
        <div class="main-section-title-wrap">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title left-title">
                        <span class="up-title">Engagement qualité</span>
                        <h2>Des produits et services de haute qualité</h2>
                    </div>
                    <div >
                        <img style="border-radius:40px;" src="{{asset('front/assets/images/iso-300x85.jpg')}}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight delay-0-2s">
                    <p>Notre usine de la galvanisation à Chaud & Transformation Métallique s'engage à fournir des produits et services de haute qualité, respectueux de l'environnement et sûrs pour tous les travailleurs impliqués dans le processus de production. Nous avons mis en place un système de gestion de la qualité conforme aux normes internationales ISO 9001 pour garantir la satisfaction de nos clients, un système de gestion environnementale conforme à la norme ISO 14001 pour minimiser l'impact environnemental de nos activités et un système de gestion de la santé et de la sécurité conforme à la norme ISO 45001 pour assurer la sécurité et la santé de nos employés. Avec ces systèmes, nous sommes en mesure de garantir la qualité et la durabilité de nos produits tout en préservant l'environnement et en offrant un environnement de travail sûr et sain pour nos employés.</p>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!--=== End iso ===-->


@endsection