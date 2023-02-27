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
            <h2>Nos actualités</h2>
            <ul>
                <li>
                    <a href="#">Accueil</a>
                </li>
                <li>
                  Actualités
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
                        <span class="up-title">Our Largest Blog</span>
                        <h2>This Best Largest Blog Membar Of Helped Succee</h2>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight delay-0-2s">
                    <p>Louasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @foreach($actualites as $item)
            <div class="col-lg-4 col-md-6">
                <div class="main-blog-item wow fadeInUp delay-0-2s">
                    <a href="blog-details.html" class="blog-img">
                        <img src="{{ asset('storage/images/actualites/'.$item->images[0]->link) }}" alt="Image">
                    </a>

                    <div class="blog-content hover-style">
                        <div class="inner-border">
                            <ul>
                                <li>{{ $item->date }}</li>
                            </ul>
                            <h3>
                                <a href="{{ asset('actualite/'.$item->sulg) }}">{{ $item->title }}.</a>
                            </h3>
                            <p class="overflow-section">{{$item->description }}@if($item->description)...@endif</p>
                            <a href="{{ asset('actualite/'.$item->sulg) }}" class="main-detail-btn">
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
