@extends('layouts.front')
@section('content')
<style>
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
            <h2>Nos articles</h2>
            <ul>
                <li>
                    <a href="#">Accueil</a>
                </li>
                <li>
                  Articles
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

<!--=== Start Blog Section ===-->
<section class="blog-section ptb-100">
    <div class="container">
        <div class="main-section-title-wrap">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title left-title">
                        <span class="up-title">Articles</span>
                        <h2>Une variété d'articles pertinents. </h2>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight delay-0-2s">
                    <p>Nous mettons à votre disposition notre expertise et notre expérience à travers une gamme diversifiée de sujets pertinents pour vous permettre de mieux appréhender notre domaine d'activité et pour rester informé des dernières avancées de l'industrie. </p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @foreach($articles as $item)
            <div class="col-lg-4 col-md-6">
                <div class="main-blog-item wow fadeInUp delay-0-2s">
                    <a href="{{asset('article/'.$item->slug)}}" class="blog-img">
                        <img src="{{ asset('storage/images/articles/'.$item->images[0]->link) }}" alt="Image">
                    </a>

                    <div class="blog-content hover-style">
                        <div class="inner-border">
                            <ul>
                                <li>{{ $item->date }}</li>
                            </ul>
                            <h3  class="overflow-section">
                                <a href="{{asset('article/'.$item->slug)}}">{{ $item->title }}</a>
                            </h3>
                            <p class="overflow-section">{{$item->function}}...</p>
                            <a href="{{asset('article/'.$item->slug)}}" class="main-detail-btn">
                                Lire la suite
                                <i class="icofont-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!--=== End Blog Section ===-->

@endsection
@section('articles-active', 'active')
