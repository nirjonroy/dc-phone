@extends('frontend.app')



@section('content')
<div class="stricky-header stricked-menu main-menu main-menu-two">
    <div class="sticky-header__content"></div>
    <!-- /.sticky-header__content -->
</div>
<!-- /.stricky-header -->

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(https://unicktheme.com/demo2023/fixnix/assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>{{ $categories[0]->category->name }}</h2>
            <p>{{ $categories[0]->category->short_description }} </p>

            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="">Home</a></li>
                <li><span>//</span></li>
                <li>Services</li>
                <li><span>//</span></li>
                <li>{{ $categories[0]->category->name }}</li>


            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Services Two Start-->
<section class="services-two">
    <div class="container">
        {{-- <div class="section-title section-title--two text-center">
            <span class="section-title__tagline">OUR SERVICES</span>
            <h2 class="section-title__title">Our Efficient Solution</h2>
            <p class="section-title__text">Duis aute irure dolor in repreh enderit in volup tate velit esse cillum dolore <br> eu fugiat nulla dolor atur with Lorem ipsum is simply</p>
        </div> --}}
        <div class="row">

            <!--Services Two Single Start-->
            @forelse($categories as $key => $subCategory)
            <div class="col-xl-3 col-lg-3 col-md-3 wow fadeInUp" data-wow-delay="100ms">
                <a href="{{ route('front.shop', [
                            'slug'=> $subCategory->slug
                            ] ) }}">
                <div class="services-two__single">
                    <div class="services-two__single-inner">
                        <div class="">
                            <span class="">
                                @if($subCategory)
                                                    <img src="{{ asset($subCategory->image) }}" class="img-responsive" style="width: 140px; height: 200px; display: block; margin: 0 auto;">
                                                    @else
                                                    <!--<img class="img-responsive" src="img_chania.jpg" alt="Chania" />-->
                                                    <img src="{{ asset('frontend/nothing.png') }}" class="img-responsive" style="width: 61px; height: 71px; display: block; margin: 0 auto;">
                                                    @endif
                            </span>
                        </div>
                        <h3 class="services-two__title"><a href="{{ route('front.shop', [
                            'slug'=> $subCategory->slug
                            ] ) }}">
                            {{ $subCategory->name }}
                        </a></h3>
                        {{-- <p class="services-two__text">Duis aute irure dolor in repreh enderit in volup tate velit esse cillum dolore fugiat nulla dolor atur</p> --}}
                    </div>
                </div>
                </a>
            </div>
            @endforeach
            <!--Services Two Single End-->
        </div>
    </div>
</section>
@endsection

@push('js')
    <!--<script src="{{ asset('frontend/silck/slick.min.js') }}"></script>-->
@endpush
