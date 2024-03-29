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
            <h2>{{$article->title}}</h2>
            <ul>
                <li>
                    <a href="#">Article</a>
                </li>
                <li>
                    {{$article->title}}
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

<!--=== Start Blog Details Section ===-->
<section class="blog-details-section ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-content">

                    <div class="article-carousel owl-carousel owl-theme">
                        @foreach ($article->images as $img)
                            <div class="item">
                                <img src="{{ asset('storage/images/articles/'.$img->link) }}" class="blog-details-main-img" alt="Image">
                            </div>
                        @endforeach
                    </div>


                    <ul>
                        <li>
                            <i class="icofont-user-alt-3"></i>
                            <a href="javascript:void(0)">Administrateur</a>
                        </li>
                        <li>
                            <i class="icofont-calendar"></i>
                            {{$article->date}}
                        </li>
                    </ul>
                    <p>{!! $article->description !!}</p>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog-sidebar">

                    <div class="about-us-img">
                        <img src="{{ asset('front/assets/images/about-img.jpg') }}" alt="Image">

                        <div class="experience">
                            <div class="experience-bg">
                                <span>Depuis 2014</span>
                            </div>
                        </div>
                    </div>

                    <div class="categories">
                        <h3>Lire plus</h3>
                        <ul>
                            @foreach ($articles as $item)
                                <li>
                                    <a href="{{url('article/'.$item->slug)}}">
                                        <i class="icofont-long-arrow-right"></i>
                                        {{$item->title}}
                                    </a>
                                </li>

                            @endforeach


                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--=== End Blog Details Section ===-->

@endsection
@section('articles-active', 'active')
