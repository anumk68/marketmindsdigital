@extends('frontend.layouts.app')
{{-- @section('title','Marketing Minds Digital | About Us')
@section('meta_description','Learn about Marketing Minds Digital, a leading USA-based agency offering SEO, PPC, social
media, and custom strategies to help businesses grow online.
') --}}

@section('title', $title)
@section('meta_description', $desc)
@section('meta_keywords', $key)

@section('content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{ asset('public/frontend/assets/images/backgrounds/man-face-portrait-banner-with-copy-space-two-angry-businessmen-arguing-having-struggle-leadership-misunderstanding_545934-71.jpg')}})">
    </div>
    <div class="page-header__shape-1"></div>
    <div class="page-header__shape-2 float-bob-y">
        <img src="{{ asset('public/frontend/assets/images/shapes/page-header-shape-2.png')}}" alt="">
    </div>
    <div class="page-header__shape-3 float-bob-x">
        <img src="{{ asset('public/frontend/assets/images/shapes/page-header-shape-3.png')}}" alt="">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h1>About Us</h1>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><span>-</span></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->


<section class="benefits-one">
    <div class="benefits-one__shape-1">
        <div class="benefits-one__shape-bg"
            style="background-image: url({{ asset('public/frontend/assets/images/backgrounds/benefits-one-shape-bg.png') }});">
        </div>
    </div>
    <div class="benefits-one__bg-one"
        style="background-image: url({{ asset('public/frontend/assets/images/backgrounds/benefits-one-bg-one.jpg') }});">
    </div>
    <div class="benefits-one__overly"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="benefits-one__left">
                    <div class="benefits-one__img wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <img src="{{ asset('public/frontend/assets/images/resources/marketing-computer-sign-symbol-concept_53876-123885.jpg') }}"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="benefits-one__right">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <div class="section-title__tagline-icon">
                                <img src="{{ asset('public/frontend/assets/images/icon/section-title-icon.png') }}"
                                    alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title">Your Partner in Digital Marketing Excellence</h2>
                    </div>
                    <p class="benefits-one__text">At Marketing Minds Digital, we help businesses grow faster with robust
                        digital marketing strategies. Our expert team delivers creative, data-driven solutions that
                        strengthen your online presence and boost performance.
                    </p>
                    <div class="benefits-one__points-and-mission">
                        <ul class="benefits-one__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p> Consulting Agency</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Financial Advice</p>
                                </div>
                            </li>
                        </ul>
                        <div class="benefits-one__mission">
                            <h3 class="benefits-one__mission-title">Our Mission</h3>
                            <p class="benefits-one__mission-text">To empower brands with impactful and result-driven
                                marketing solutions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--FAQ One Start-->
<section class="faq-one about-page-faq">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="faq-one__left">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <div class="section-title__tagline-icon">
                                <img src="{{ asset('public/frontend/assets/images/icon/section-title-icon.png')}}"
                                    alt="">
                            </div>
                            <p class="section-title__tagline">About</p>
                        </div>
                        <h2 class="section-title__title">Latest Digital Marketing Solutions for Your Business</h2>
                    </div>
                    <p class="faq-one__text">We specialize in delivering innovative digital marketing solutions designed
                        to help businesses thrive in the online world. Our team of experts focuses on creating tailored
                        strategies that boost visibility, drive traffic, and deliver measurable results.
                    </p>
                    <div class="faq-one__img-and-system">
                        <div class="faq-one__img">
                            <img src="{{ asset('public/frontend/assets/images/resources/faq_one_img.jpg')}}" alt="">
                        </div>
                        <div class="faq-one__system">
                            <h3 class="faq-one__system-title">Optimize Your Digital Strategy</h3>
                            <p class="faq-one__system-text">At Marketing Minds Digital, we provide top-notch marketing
                                services, ensuring that your brand stands out in a competitive market. Our approach
                                combines creativity, data, and technology to deliver marketing strategies that work.</p>
                            <div class="faq-one__system-points">
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>The Perfect Business Solutions</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="faq-one__right">
                    <h2>Frequently Asked Question</h2>
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>1: What makes Marketing Minds Digital different from other agencies?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>At Marketing Minds Digital, we focus on delivering data-driven, customized
                                        marketing strategies that are tailored to each client's unique business needs,
                                        ensuring impactful results.
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion  active">
                            <div class="accrodion-title">
                                <h4>2: How experienced is your team?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Our team comprises seasoned professionals with years of experience in digital
                                        marketing, including SEO, PPC, social media, and content marketing. We bring
                                        expertise and creativity to every project.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>3: Do you offer long-term marketing strategies or just short-term campaigns?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>We offer both long-term strategies and short-term campaigns, ensuring your
                                        business sees sustainable growth while also achieving immediate marketing goals.
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>4: Can you help improve my existing digital marketing campaigns?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Absolutely! We can analyze your current campaigns and provide recommendations and
                                        optimizations to improve performance and increase ROI.
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>5: How do I get started with Marketing Minds Digital?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Getting started is easy! Reach out to us through our website or contact us directly. We'll discuss your business needs and tailor a strategy that fits your goals.

                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--FAQ One End-->



<!--Video One Start-->
<section class="video-one">
    <div class="video-one__bg"
        style="background-image: url({{ asset('public/frontend/assets/images/backgrounds/counter_one_bg_two.jpg')}});">
    </div>
    <div class="video-one__bg-2"
        style="background-image: url({{ asset('public/frontend/assets/images/backgrounds/video-one-bg-2.jpg')}});">
    </div>
    <div class="video-one__bg-3"
        style="background-image: url({{ asset('public/frontend/assets/images/backgrounds/video-one-bg-3.png')}});">
    </div>
    <div class="video-one__bg-4"
        style="background-image: url({{ asset('public/frontend/assets/images/backgrounds/video-one-bg-4.png')}});">
    </div>
    <div class="container">
        <div class="video-one__inner">
            <!-- <div class="video-one__video-link">
                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                            <div class="video-one__video-icon">
                                <span class="fa fa-play"></span>
                                <i class="ripple"></i>
                            </div>
                        </a>
                    </div> -->
            <h3 class="video-one__title">Watch This Video Presentation
                <br> Our Work And Etc
            </h3>
        </div>
    </div>
</section>
<!--Video One End-->

<!--Testimonial Four Start-->
<section class="testimonial-one">
    <div class="testimonial-one__wrap">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-icon">
                        <img src="{{ asset('public/frontend/assets/images/icon/section-title-icon.png') }}" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">What Our Clients Say</h2>
            </div>
            <div class="testimonial-one__inner">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-one__left">
                            <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel"
                                data-owl-options='{
                                        "loop": true,
                                        "autoplay": true,
                                        "margin": 30,
                                        "nav": true,
                                        "dots": false,
                                        "smartSpeed": 500,
                                        "autoplayTimeout": 10000,
                                        "navText": ["<span class=\"icon-back1\"></span>","<span class=\"icon-back\"></span>"],
                                        "responsive": {
                                            "0": {
                                                "items": 1
                                            },
                                            "768": {
                                                "items": 1
                                            },
                                            "992": {
                                                "items": 1
                                            },
                                            "1200": {
                                                "items": 1
                                            }
                                        }
                                    }'>
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__quote">
                                            <span class="icon-left1"></span>
                                        </div>
                                        <p class="testimonial-one__text">"Working with Marketing Minds Digital has
                                            transformed our online presence. Their strategies are creative, data-driven,
                                            and truly deliver results. We've seen a significant increase in leads and
                                            engagement."</p>
                                        <div class="testimonial-one__client-box">
                                            <div class="testimonial-one__client-img">
                                                <img src="{{ asset('public/frontend/assets/images/testimonial/testimonial_1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-one__client-info">
                                                <h3 class="testimonial-one__client-name">1. Jessica Brown
                                                </h3>
                                                <p class="testimonial-one__client-sub-title">Marketing Manager</p>
                                                <div class="testimonial-one__client-ratting">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star-half-alt"></span>
                                                    <span class="fa fa-star-half-alt"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__quote">
                                            <span class="icon-left1"></span>
                                        </div>
                                        <p class="testimonial-one__text">"The team at Marketing Minds Digital is
                                            professional, responsive, and incredibly knowledgeable. Their SEO and PPC
                                            campaigns have helped our business grow faster than we expected. Highly
                                            recommended!"
                                        </p>
                                        <div class="testimonial-one__client-box">
                                            <div class="testimonial-one__client-img">
                                                <img src="{{ asset('public/frontend/assets/images/testimonial/testimonial_2.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-one__client-info">
                                                <h3 class="testimonial-one__client-name">2. Michael Lee
                                                </h3>
                                                <p class="testimonial-one__client-sub-title">CEO, Tech Solutions Inc.
                                                </p>
                                                <div class="testimonial-one__client-ratting">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star-half-alt"></span>
                                                    <span class="fa fa-star-half-alt"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__quote">
                                            <span class="icon-left1"></span>
                                        </div>
                                        <p class="testimonial-one__text">"I'm impressed with the level of detail and creativity Marketing Minds Digital brings to every project. From content marketing to social media management, they consistently exceed expectations."

                                        </p>
                                        <div class="testimonial-one__client-box">
                                            <div class="testimonial-one__client-img">
                                                <img src="{{ asset('public/frontend/assets/images/testimonial/testimonial_2.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="testimonial-one__client-info">
                                                <h3 class="testimonial-one__client-name">3. Sarah Thompson
                                                </h3>
                                                <p class="testimonial-one__client-sub-title">Entrepreneur
                                                </p>
                                                <div class="testimonial-one__client-ratting">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star-half-alt"></span>
                                                    <span class="fa fa-star-half-alt"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-one__right">
                            <div class="testimonial-one__img">
                                <img src="{{ asset('public/frontend/assets/images/testimonial/testimonial_one_img.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial Four End-->




@endsection
