@extends('frontend.app')
@section('title', 'About Us')
@push('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/food.css') }}">
@endpush

@section('content')
<div class="stricky-header stricked-menu main-menu main-menu-two">
    <div class="sticky-header__content"></div>
    <!-- /.sticky-header__content -->
</div>
<!-- /.stricky-header -->

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{asset('frontend/assets/images/about_bg.webp')}})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>All Services </h2>
            <p> </p>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>//</span></li>
                <li>All Services</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--About Two Start-->
<section class="about-one">
    <div class="about-one__bg float-bob-y" style="background-image: url({{asset('frontend/assets/images/backgrounds/about-one-bg-img-1.jpg')}});">
    </div>
    <div class="container">
        <div class="section-title text-center">

            <h2 class="section-title__title">Welcome To DC Phone
                <br>All Services</h2>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="about-one__left">
                    <div class="about-one__img wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <img src="{{asset('frontend/assets/images/resources/about-1-1.jpg')}}" alt="">
                        <div class="about-one__our-goal">
                            <p class="about-one__our-goal-sub-title">What You Wanna Fix:</p>
                            <h3 class="about-one__our-goal-title">"Select Device"</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about-one__right">
                    {{-- <div class="section-title text-left">
                        <span class="section-title__tagline">OUR INTRODUCTION</span>
                        <h2 class="section-title__title">Welcome To Smartphone & Laptop Repair Service Center</h2>
                    </div>
                    <p class="about-one__right-text-1">Black Tech Black Tech</p> --}}
                    <ul class="about-one__points list-unstyled">
                        @foreach ($all_service as $key => $item)
                        <li>
                            <a href="{{ route('front.subcategory', [
                                        'type'=>'subcategory',
                                        'slug'=> $item->slug
                                        ] ) }}">
                            <div class="about-one__points-single">
                                <div class="about-one__points-icon">
                                    <span class="">
                                        @if(!empty($item->image))
                                        <img src="{{ asset($item->image) }}" alt="" class="img-fluid" width="40px" height="50px">
                                        @endif
                                    </span>
                                </div>
                                <div class="about-one__points-text">
                                    <h3 class="about-one__points-title">{{ $item->name }}</h3>
                                    <p class="about-one__points-subtitle">{!! Str::limit($item->short_description, 80, ' ...') !!}
                                    </p>
                                </div>
                            </div>
                            </a>
                        </li>
                        @endforeach


                    </ul>
                    <a href="{{route('front.contact')}}" class="thm-btn">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
