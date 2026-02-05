@extends('frontend.app')
@section('title', 'Service Details')
@push('css')

@endpush
@section('content')
<div class="stricky-header stricked-menu main-menu main-menu-two">
    <div class="sticky-header__content"></div>
    <!-- /.sticky-header__content -->
</div>
<!-- /.stricky-header -->

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{asset('frontend/assets/images/single_serv.jpg')}});">
    </div>
    @php
        $heroPhone = siteInfo()->topbar_phone;
        $heroTel = $heroPhone ? preg_replace('/[^0-9+]/', '', $heroPhone) : '';
    @endphp
    <div class="container">
        <div class="page-header__inner text-center">
            <h1>
                @if(!empty($services[0]->category))
            {{ $services[0]->category->name }}
            @endif
            @if(!empty($services[0]->subCategory))
             /{{ $services[0]->subCategory->name }}
            @endif
            @if(!empty($services[0]->childCategory))
             /{{ $services[0]->childCategory->name }}
            @endif
            </h1>
            <p>
                @if(!empty($services[0]->category))
                {{ $services[0]->category->short_description }}
                @endif
                @if(!empty($services[0]->subCategory))
                 {{ $services[0]->subCategory->short_description }}
                @endif
                @if(!empty($services[0]->childCategory))
                 {{ $services[0]->childCategory->short_description }}
                @endif
            </p>
            <div class="page-header__btn-box text-center" style="margin-top: 18px;">
                <a href="{{route('front.contact')}}" class="thm-btn d-none d-md-inline-block">Schedule An Appointment Today</a>
                <a href="{{ $heroTel ? 'tel:' . $heroTel : '#' }}" class="thm-btn d-inline-block d-md-none">Schedule An Appointment Today</a>
            </div>
            <ul class="thm-breadcrumb list-unstyled" style="justify-content:center;">
                <li><a href="index.html">Home</a></li>
                <li><span>//</span></li>
                <li>Service Details</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Fixing One Start-->
<section class="fixing-one">
    <div class="fixing-one__bg float-bob-y" style="background-image: url({{asset('frontend/assets/images/service-bg.jpg')}});"></div>
    <div class="container">
        <div class="section-title section-title--two text-center">
            <span class="section-title__tagline">WHAT WE FIXING</span>
            <h2 class="section-title__title">Providing device solutions</h2>
            <!--<p class="section-title__text">Duis aute irure dolor in repreh enderit in volup tate velit esse cillum dolore <br> eu fugiat nulla dolor atur with Lorem ipsum is simply</p>-->
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="fixing-one__left">
                    <div class="fixing-one__img">

                        @if(!empty($services[0]->childCategory->image))
            <img src="{{asset($services[0]->childCategory->image)}}" class=" shadow p-3 mb-5  rounded" style=" display: block; margin:0 auto;">
             @elseif(!empty($services[0]->subCategory->image))
            <img src="{{asset($services[0]->subCategory->image)}}" class="shadow p-3 mb-5  rounded" style=" display: block; margin:0 auto; ">
            @elseif(!empty($services[0]->category->image))
            <img src="{{asset($services[0]->category->image)}}" class="shadow p-3 mb-5 rounded" style=" display: block; margin:0 auto;">

            @endif
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="fixing-one__right">
                    <div class="fixing-one__points-box">
                        <ul class="fixing-one__points list-unstyled">
                            @forelse ($services as $key => $item)

                                <li>

                                    <div class="icon">
                                        <img class="img-fluid" aria-hidden="true" width="50px" height="50px" src="{{asset($item->thumb_image)}}" alt="
                      iPhone Repair Services
                      " id="image_home_card_2" style="background: rgb(255, 255, 255); width:50px; height: 50px">
                                    </div>
                                    <a href="{{route('front.single.service', $item->slug)}}">
                                    <div class="content">
                                        <h3>{{ $item->name }}</h3>
                                        <p>{!! Str::limit($item->short_description, 80, ' ...') !!}</p>
                                    </div>
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
<!--Fixing One End-->
@endsection
