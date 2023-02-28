@extends('layouts.front')
@section('content')

<!--=== Start Page Banner Section ===-->
<section class="page-banner-section" style="background-color: #035479; ">
    <div class="container">
        <div class="page-banner-content">
            <h2>{{$actualite->title}}</h2>
            <ul>
                <li>
                    <a href="#">Actualité</a>
                </li>
                <li>
                    {{$actualite->title}}
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
                        @foreach ($actualite->images as $img)
                            <div class="item">
                                <img src="{{ asset('storage/images/actualites/'.$img->link) }}" class="blog-details-main-img" alt="Image">
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
                           {{$actualite->date}}
                        </li>
                    </ul>
                    <p>{{  $actualite->description  }}</p>

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
                        <h3>Voir plus</h3>
                        <ul>
                            @foreach ($actualites as $item)
                                <li>
                                    <a href="{{url('actualite/'.$item->slug)}}">
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
