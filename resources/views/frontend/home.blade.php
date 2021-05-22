@extends('frontend.layouts.app')
@section('main-content')
<!-- START SECTION BANNER -->
<div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
    <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($all_sliders as $slider)
            <div class="carousel-item @if($loop->first)active @endif background_bg" data-img-src="{{ URL::to('/') }}/media/slider/{{ $slider->photo }}">
                <div class="banner_slide_content">
                    <div class="container">
                        <!-- STRART CONTAINER -->
                        <div class="row">
                            <div class="col-lg-7 col-9">
                                <div class="banner_content overflow-hidden">
                                </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
    </div>
</div>
<!-- END SECTION BANNER -->

<!-- END MAIN CONTENT -->
<div class="main_content">

    <!-- START SECTION CATEGORIES -->
    <div class="section pt-0 small_pb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cat_overlap radius_all_5">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-3">
                                <div class="text-center text-md-left">
                                    <h4 style="text-transform: uppercase;">Our Portfolio</h4>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-9">
                                <div class="cat_slider mt-4 mt-md-0 carousel_slider owl-carousel owl-theme nav_style5 owl-loaded owl-drag" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "380":{"items": "2"}, "991":{"items": "3"}, "1199":{"items": "4"}}'>
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(-810px, 0px, 0px); transition: all 0s ease 0s; width: 2835px;">

                                            @foreach($all_portfolio as $portfolio)
                                            <div class="owl-item cloned" style="width: 172.5px; margin-right: 30px;">
                                                <div class="item">
                                                    <div class="categories_box">
                                                        <a href="#" style="padding: 10px 20px;">
                                                            <img src="{{ URL::to('/') }}/media/portfolio/{{ $portfolio->photo }}" alt="">
                                                            <span style="height: 50px;">{{ $portfolio->title }}</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="owl-nav">
                                        <button type="button" role="presentation" class="owl-prev"><i class="ion-ios-arrow-left"></i></button>
                                        <button type="button" role="presentation" class="owl-next"><i class="ion-ios-arrow-right"></i></button>
                                    </div>
                                    <div class="owl-dots disabled"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--  START SECTION SINGLE BANNER -->
    @foreach($all_services as $services)
    <div class="section p-4 mt-4">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12">
                    <div class="text-center trading_img">
                        <img style="width: 100%;" src="{{ URL::to('/') }}/media/service/{{ $services->photo }}" alt="tranding_img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- START SECTION FLAG 3 SECURITY SERVICES LTD -->
    @foreach($all_fsservices as $fsservices)
    <div class="section bg_light_blue2 pb_20 small_pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="text-center">
                        <h2>{{ $fsservices->title }}</h2>
                    </div>
                    <p class="text-center leads">{{ $fsservices->sub_title }}</p>
                </div>
            </div>
            @php
            $cont_josn = json_decode($fsservices->content);
            @endphp
            <div class="row">
                <div class="col-md-9">
                    <div class="single_banner mb-0">
                        <p class="text-justify">{{ $cont_josn->content_1 }}</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single_banner mb-1 text-right">
                        <img style="width: 250px; height: 250px;" src="{{ URL::to('/') }}/media/fsservice/{{ $fsservices->photo }}" alt="furniture_banner1">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="single_banner">
                        <p class="text-justify">{{ $cont_josn->content_2 }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- START SECTION Testimonial -->
    <div class="section small_pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="heading_s1 text-center">
                        <h2 style="text-transform: uppercase;" class="mb-5">What and How We Work</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="client_logo carousel_slider owl-carousel owl-theme owl-loaded owl-drag" data-dots="false" data-margin="30" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "5"}}'>
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-1368px, 0px, 0px); transition: all 0.25s ease 0s; width: 3648px;">

                                @foreach($all_testimonial as $testimonial)
                                <div class="owl-item @if($loop->first)active @endif" style="width: 198px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="cl_logo">
                                            <img style="width: 198px; height:198px; border-radius: 5px;" src="{{ URL::to('/') }}/media/testimonial/{{ $testimonial->photo }}" alt="cl_logo" />
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- active cloned-->
                            </div>
                        </div>
                        <div class="owl-nav disabled">
                            <button type="button" role="presentation" class="owl-prev"><i class="ion-ios-arrow-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="ion-ios-arrow-right"></i></button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- END MAIN CONTENT -->
@endsection