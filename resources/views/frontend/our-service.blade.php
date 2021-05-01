@extends('frontend.layouts.app')
@section('page-title', 'Our Service')
@section('main-content')
<!-- END MAIN CONTENT -->
<div class="main_content">
    <!-- START SECTION Clients -->
    <div class="section pb_20 small_pt">
        <div class="container px-2">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="text-center">
                        <h2 class="mb-4">{{ $top_service->title }}</h2>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="sale_banner">
                        <a class="hover_effect1" href="#">
                            <img style="width: 100%; height: 450px;" src="{{ URL::to('/') }}/media/our_service/top/{{ $top_service->top_photo }}" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section pb_20 small_pt">
        <div class="container px-2">
            <div class="row no-gutters">
            @php
                $service_photo = json_decode($top_service->service_photo);
            @endphp  

            @foreach($service_photo as $photo)
                <div class="col-md-6">
                    <div class="sale_banner">
                        <a class="hover_effect1" href="#">
                            <img style="width: 100%; height: 200px;" src="{{ URL::to('/') }}/media/our_service/{{ $photo }}" alt="" />
                        </a>
                    </div>
                </div>            
            @endforeach
            </div>
        </div>
    </div>


    <!-- Services Accessories -->
<div class="section small_pb small_pt amader-product">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="heading_s1 text-center">
                    <h2>Services Accessories</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="gall-menu">
                    <ul class="nav justify-content-center">
                        <li class="nav-item"><a data-filter="all" class="nav-link" href="#">All</a></li>
                        <a><button class="white-border filter" data-filter=".a">A</button></a>
                        <!-- <li class="nav-item"><a data-filter=".a" class="nav-link" href="#">A</a></li> -->
                        <li class="nav-item"><a data-filter=".b" class="nav-link" href="#">B</a></li>
                        <li class="nav-item"><a data-filter=".c" class="nav-link" href="#">C</a></li>
                        <li class="nav-item"><a data-filter="none" class="nav-link" href="#">None</a></li>
                    </ul>
                </div>            
            </div>
        </div>

        

        <div class="row">
            <div class="col-md-4">
                <div class="p-box mix a">
                    <div class="sale-banner mb-3 mb-md-4">
                        <a class="hover_effect1" href="#">
                            <img src="{{ URL::to('/') }}/frontend/assets/images/shop_banner_img1.jpg" alt="shop_banner_img7" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="p-box mix b">
                <div class="sale-banner mb-3 mb-md-4">
                    <a class="hover_effect1" href="#">
                        <img src="{{ URL::to('/') }}/frontend/assets/images/shop_banner_img2.jpg" alt="shop_banner_img8" />
                    </a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="p-box mix c">
                <div class="sale-banner mb-3 mb-md-4">
                    <a class="hover_effect1" href="#">
                        <img src="{{ URL::to('/') }}/frontend/assets/images/shop_banner_img3.jpg" alt="shop_banner_img9" />
                    </a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="p-box mix a">
                <div class="sale-banner mb-3 mb-md-4">
                    <a class="hover_effect1" href="#">
                        <img src="{{ URL::to('/') }}/frontend/assets/images/shop_banner_img4.jpg" alt="shop_banner_img7" />
                    </a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="p-box mix b">
                <div class="sale-banner mb-3 mb-md-4">
                    <a class="hover_effect1" href="#">
                        <img src="{{ URL::to('/') }}/frontend/assets/images/shop_banner_img5.jpg" alt="shop_banner_img8" />
                    </a>
                </div>
            </div>
            </div>
            <div class="col-md-4">
                <div class="p-box mix c">
                    <div class="sale-banner mb-3 mb-md-4">
                        <a class="hover_effect1" href="#">
                            <img src="{{ URL::to('/') }}/frontend/assets/images/shop_banner_img1.jpg" alt="shop_banner_img9" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="heading_s1 text-center">
                    <h2>Services Accessories</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab-style1">
                    <ul class="nav nav-tabs justify-content-center" id="nav" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="arrival-tab" data-toggle="tab" href="#Car_and_Traffic" role="tab" aria-controls="arrival" aria-selected="true">Car &amp; Traffic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="arrival-tab" data-toggle="tab" href="#CCTV" role="tab" aria-controls="arrival" aria-selected="false">CCTV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="arrival-tab" data-toggle="tab" href="#Entry_Exit_Check" role="tab" aria-controls="arrival" aria-selected="false">Entry Exit Check</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="tab">
                    <div class="tab-pane fade active show" id="Car_and_Traffic" role="tabpanel" aria-labelledby="arrival-tab">
                        <div class="row shop_container">
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="javascript: void (0)">
                                            <img src="http://flag.bankersclubbd.com/image/galleries/16187240590.jpg" alt="product_img1" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="javascript: void (0)">
                                            <img src="http://flag.bankersclubbd.com/image/galleries/16187240601.jpg" alt="product_img1" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="javascript: void (0)">
                                            <img src="http://flag.bankersclubbd.com/image/galleries/16187240602.jpg" alt="product_img1" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="javascript: void (0)">
                                            <img src="http://flag.bankersclubbd.com/image/galleries/16187240603.jpg" alt="product_img1" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="javascript: void (0)">
                                            <img src="http://flag.bankersclubbd.com/image/galleries/16187240604.jpg" alt="product_img1" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="javascript: void (0)">
                                            <img src="http://flag.bankersclubbd.com/image/galleries/16187240605.jpg" alt="product_img1" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="javascript: void (0)">
                                            <img src="http://flag.bankersclubbd.com/image/galleries/16187240606.jpg" alt="product_img1" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="javascript: void (0)">
                                            <img src="http://flag.bankersclubbd.com/image/galleries/16187240607.jpg" alt="product_img1" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="CCTV" role="tabpanel" aria-labelledby="arrival-tab">
                        <div class="row shop_container">
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="javascript: void (0)">
                                            <img src="http://flag.bankersclubbd.com/image/galleries/16187334420.jpg" alt="product_img1" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="javascript: void (0)">
                                            <img src="http://flag.bankersclubbd.com/image/galleries/16187342680.jpg" alt="product_img1" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="javascript: void (0)">
                                            <img src="http://flag.bankersclubbd.com/image/galleries/16187343770.jpg" alt="product_img1" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Entry_Exit_Check" role="tabpanel" aria-labelledby="arrival-tab">
                        <div class="row shop_container">
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="javascript: void (0)">
                                            <img src="http://flag.bankersclubbd.com/image/galleries/16187350530.jpg" alt="product_img1" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="javascript: void (0)">
                                            <img src="http://flag.bankersclubbd.com/image/galleries/16187350531.jpg" alt="product_img1" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="javascript: void (0)">
                                            <img src="http://flag.bankersclubbd.com/image/galleries/16187350542.jpg" alt="product_img1" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->



</div>
<!-- END MAIN CONTENT -->
@section('javascript')
<script>
    $('.amader-product').mixItUp();
</script>
@stop
@endsection