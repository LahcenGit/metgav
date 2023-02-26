@extends('layouts.front')
@section('content')

<!--=== Start Page Banner Section ===-->
<section class="page-banner-section bg-3">
    <div class="container">
        <div class="page-banner-content">
            <h2>Blog Details Page</h2>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    Blog Details
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
                    <img src="{{ asset('storage/images/articles/'.$article->images[0]->link) }}" class="blog-details-main-img" alt="Image">
                    <ul>
                        <li>
                            <i class="icofont-user-alt-3"></i>
                            <a href="blog-details.html">Bonax</a>
                        </li>
                        <li>
                            <i class="icofont-calendar"></i>
                            Agu 10, 2021
                        </li>
                    </ul>
                    <p>{!! $article->description !!}</p>



                    <div class="services-blog">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="main-services-item active mb-0">
                                    <i class="icofont-building-alt"></i>
                                    <h3>
                                        <a href="services-details.html">Presentation Bulding</a>
                                    </h3>
                                    <p>Louasi architecto beatae vitae dicta su voluptatem quia the voluptas so sequuntur magni dolores.</p>

                                    <a href="services-details.html" class="main-detail-btn">
                                        <i class="icofont-plus"></i>
                                        Read More
                                    </a>
                                    <img src="{{ asset('front/assets/images/services-card-shape.png') }}" class="services-card-shape" alt="Image">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="blog-details-img"></div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion style-two" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="icofont-check"></i>
                                    Maecenas facilisis erat id odio
                                </button>
                            </h2>

                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>There are many variations of passages of is psum available, but the majority have suffered alteration in some we form, by injected humour, variations of passages of is psum available, but the ariations of</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="icofont-check"></i>
                                    Phasellus et vehicula nulla
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>There are many variations of passages of is psum available, but the majority have suffered alteration in some we form, by injected humour, variations of passages of is psum available, but the ariations of</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="icofont-check"></i>
                                    Maecenas malesuada
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>There are many variations of passages of is psum available, but the majority have suffered alteration in some we form, by injected humour, variations of passages of is psum available, but the ariations of</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <i class="icofont-check"></i>
                                    Why you join our team
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>There are many variations of passages of is psum available, but the majority have suffered alteration in some we form, by injected humour, variations of passages of is psum available, but the ariations of</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comment-wrap">
                        <h3>Comment (2)</h3>

                        <ul>
                            <li>
                                <img src="{{ asset('front/assets/images/blog/comment-1.jpg') }}" alt="Image">
                                <h4>Alex Dew</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum accusantium aperiam maiores nam nobis blanditiis dolorem aut totam praesentium officiis sapiente, provident</p>

                                <p>November 16, 2018 at 4:31 am <a href="blog-details.html">Reply</a></p>
                            </li>
                            <li class="replay">
                                <img src="{{ asset('front/assets/images/blog/comment-2.jpg') }}" alt="Image">
                                <h4>Juhon Dew</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum accusantium aperiam maiores nam nobis blanditiis dolorem aut totam praesentium officiis sapiente, provident sit amet consectetur adipisicing</p>

                                <p>November 16, 2018 at 4:31 am <a href="blog-details.html">Reply</a></p>
                            </li>
                        </ul>
                    </div>

                    <div class="contact-wrap">
                        <div class="contact-form ptb-100">
                            <h2>We Are Always Ready To Solution Your All Problem.</h2>

                            <form class="form-contact">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Contact Subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="main-btn">
                                            <span>Send Message</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog-sidebar">
                    <div class="blog-sidebar-item">
                        <form class="src-form">
                            <input type="text" class="form-control" placeholder="Search....">
                            <button class="src-btn">
                                <i class="icofont-search-2"></i>
                            </button>
                        </form>
                    </div>

                    <div class="about-us-img">
                        <img src="{{ asset('front/assets/images/about-img.jpg') }}" alt="Image">

                        <div class="experience">
                            <div class="experience-bg">
                                <span>37+ Experience</span>
                            </div>
                        </div>
                    </div>

                    <div class="categories">
                        <h3>Categories</h3>
                        <ul>
                            <li>
                                <a href="blog.html">
                                    <i class="icofont-long-arrow-right"></i>
                                    Business
                                    <span>(08)</span>
                                </a>
                            </li>
                            <li>
                                <a href="blog.html">
                                    <i class="icofont-long-arrow-right"></i>
                                    Maintenance
                                    <span>(14)</span>
                                </a>
                            </li>
                            <li>
                                <a href="blog.html">
                                    <i class="icofont-long-arrow-right"></i>
                                    Professional
                                    <span>(12)</span>
                                </a>
                            </li>
                            <li>
                                <a href="blog.html">
                                    <i class="icofont-long-arrow-right"></i>
                                    Technology
                                    <span>(23)</span>
                                </a>
                            </li>
                            <li>
                                <a href="blog.html">
                                    <i class="icofont-long-arrow-right"></i>
                                    Single-Business
                                    <span>(23)</span>
                                </a>
                            </li>
                            <li>
                                <a href="blog.html">
                                    <i class="icofont-long-arrow-right"></i>
                                    Innovation
                                    <span>(22)</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="newslatter">
                        <h3>Newslatter</h3>
                        <p>Lorem ipsum dolor sit consectetur adipisicing elit seddo consectetur adipisicing elit.</p>

                        <form class="newslatter-form">
                            <input type="text" class="form-control" placeholder="Your email address">

                            <button class="main-btn" type="submit">
                                <span>Send</span>
                            </button>
                        </form>
                    </div>

                    <div class="callneder">
                        <img src="assets/images/calendar.jpg" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== End Blog Details Section ===-->

@endsection
