@extends('frontend.layouts.app')

{{-- @section('title','Marketing Minds Digital | Top Digital Marketing Agency USA')
@section('meta_description','Marketing Minds Digital is a leading digital marketing agency in the USA, specializing in
SEO, PPC, social media, content marketing, and web development.') --}}

@section('title', $title)
@section('meta_description', $desc)
@section('meta_keywords', $key)

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg"
            style="background-image: url({{ asset('public/frontend/assets/images/backgrounds/teen-girl-high-school-workbook-blackboard-portrait-schoolgirl-student-studio-banner-header-school-child-face-copy.jpg') }})">
        </div>
        <div class="page-header__shape-1"></div>
        <div class="page-header__shape-2 float-bob-y">
            <img src="{{ asset('public/frontend/assets/images/shapes/page-header-shape-2.png') }}" alt="">
        </div>
        <div class="page-header__shape-3 float-bob-x">
            <img src="{{ asset('public/frontend/assets/images/shapes/page-header-shape-3.png') }}" alt="">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h1>Blog </h1>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span>-</span></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Blog Page Start -->

    <section class="blog-page">
        <div class="container">
            <div class="row">
                <!-- Blog Post 1 -->
                @foreach ($blog as $blogs)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-page__single">
                            <div class="blog-page__img-box">
                                <div class="blog-page__img">
                                    <img src="{{ asset('public/' . $blogs->banner) }}" class="img-fluid" alt="">
                                </div>
                                <div class="blog-page__date">
                                    <p>20 <br> June</p>
                                </div>
                            </div>
                            <div class="blog-page__content">
                                <ul class="list-unstyled blog-page__meta">
                                    <li><a href="{{ route('blog-details', ['slug' => $blogs->slug]) }}">
                                            <i class="far fa-user-circle"></i>Paul Smith</a></li>
                                    <li><a href="{{ route('blog-details', ['slug' => $blogs->slug]) }}">
                                            <i class="far fa-comments"></i>0 Comment</a></li>
                                    <li><a href="{{ route('blog-details', ['slug' => $blogs->slug]) }}">
                                            <i class="far fa-heart"></i>0 Like</a></li>
                                </ul>
                                <h3 class="blog-page__title">
                                    <a href="{{ route('blog-details', ['slug' => $blogs->slug]) }}">
                                        {{ $blogs->title }}
                                    </a>
                                </h3>
                                <p class="blog-page__text-1">{{ Str::limit($blogs->short_description, 40) }}</p>
                                <a href="{{ route('blog-details', ['slug' => $blogs->slug]) }}"
                                    class="blog-page__read-more">
                                    Read more <span class="icon-right-arrow1"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <!-- Blog Post 2 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blog-page__single">
                    <div class="blog-page__img-box">
                        <div class="blog-page__img">
                            <img src="{{asset('public/frontend/assets/images/blog/second_blog.jpg')}}" alt="">
                        </div>
                        <div class="blog-page__date">
                            <p>20 <br> June</p>
                        </div>
                    </div>
                    <div class="blog-page__content">
                        <ul class="list-unstyled blog-page__meta">
                            <li><a href="{{route('blog-details'.$blog->slug)}}"><i class="far fa-user-circle"></i>Paul Smith</a></li>
                            <li><a href="{{route('blog-details'.$blog->slug)}}"><i class="far fa-comments"></i>0 Comment</a></li>
                            <li><a href="{{route('blog-details'.$blog->slug)}}"><i class="far fa-heart"></i>0 Like</a></li>
                        </ul>
                        <h3 class="blog-page__title"><a href="{{route('blog-details'.$blog->slug)}}">Leverage Frameworks To Provide A Robust</a></h3>
                        <p class="blog-page__text-1">Excepteur sint occaecat cupidatat non proident, sunt in culpa...</p>
                        <p class="blog-page__text-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco...</p>
                        <a href="{{route('blog-details'.$blog->slug)}}" class="blog-page__read-more">Read more <span class="icon-right-arrow1"></span></a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blog-page__single">
                    <div class="blog-page__img-box">
                        <div class="blog-page__img">
                            <img src="{{asset('public/frontend/assets/images/blog/third_blog.jpg')}}" alt="">
                        </div>
                        <div class="blog-page__date">
                            <p>20 <br> June</p>
                        </div>
                    </div>
                    <div class="blog-page__content">
                        <ul class="list-unstyled blog-page__meta">
                            <li><a href="{{route('blog-details'.$blog->slug)}}"><i class="far fa-user-circle"></i>Paul Smith</a></li>
                            <li><a href="{{route('blog-details'.$blog->slug)}}"><i class="far fa-comments"></i>0 Comment</a></li>
                            <li><a href="{{route('blog-details'.$blog->slug)}}"><i class="far fa-heart"></i>0 Like</a></li>
                        </ul>
                        <h3 class="blog-page__title"><a href="{{route('blog-details'.$blog->slug)}}">Basic Rule Of Running Web Business</a></h3>
                        <p class="blog-page__text-1">Excepteur sint occaecat cupidatat non proident, sunt in culpa...</p>
                        <p class="blog-page__text-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco...</p>
                        <a href="{{route('blog-details'.$blog->slug)}}" class="blog-page__read-more">Read more <span class="icon-right-arrow1"></span></a>
                    </div>
                </div>
            </div> --}}
            </div>
        </div>
    </section>

    <!--Blog Page End -->
@endsection
