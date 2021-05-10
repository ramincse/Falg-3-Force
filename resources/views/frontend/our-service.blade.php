@extends('frontend.layouts.app')
@section('page-title', 'Our Services')
@section('main-content')
<!-- END MAIN CONTENT -->
<div class="main_content">
    <!-- START SECTION Clients -->
    <div class="section pb_20 small_pt">
        <div class="container px-2">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="text-center">
                        <h2 style="font-size: 24px;" class="mb-4">{{ $top_service->title }}</h2>
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
                            <img style="width: 100%; height: 250px;" src="{{ URL::to('/') }}/media/our_service/{{ $photo }}" alt="" />
                        </a>
                    </div>
                </div>            
            @endforeach
            </div>
        </div>
    </div>

<div class="section">
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
                            <a class="nav-link active" id="arrival-tab" data-toggle="tab" href="#security_access" role="tab" aria-controls="arrival" aria-selected="true">Security Accessories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="arrival-tab" data-toggle="tab" href="#pest_control" role="tab" aria-controls="arrival" aria-selected="false">Pest Control</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="arrival-tab" data-toggle="tab" href="#cleaning_access" role="tab" aria-controls="arrival" aria-selected="false">Cleaning Accessories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="arrival-tab" data-toggle="tab" href="#fire_fight_equip" role="tab" aria-controls="arrival" aria-selected="false">Fire Fighting Equipment</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="tab">
                    <div class="tab-pane fade active show" id="security_access" role="tabpanel" aria-labelledby="arrival-tab">
                        <div class="row shop_container">                       

                            @foreach($accessory_data as $accessories_data)
                            @php
                                $cat_id = json_decode($accessories_data->cat_id);
                            @endphp
                            
                            @if( in_array('security_access', $cat_id) )
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="javascript: void (0)">
                                            <img src="{{ URL::to('/') }}/media/accessories/{{ $accessories_data->photo }}" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                        </div>
                    </div>

                    <div class="tab-pane fade" id="pest_control" role="tabpanel" aria-labelledby="arrival-tab">
                        <div class="row shop_container">
                        @foreach($accessory_data as $accessories_data)
                            @php
                                $cat_id = json_decode($accessories_data->cat_id);
                            @endphp
                            @if( in_array('pest_control', $cat_id) )
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="javascript: void (0)">
                                        <img src="{{ URL::to('/') }}/media/accessories/{{ $accessories_data->photo }}" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                        </div>
                    </div>
 
                    <div class="tab-pane fade" id="cleaning_access" role="tabpanel" aria-labelledby="arrival-tab">
                        <div class="row shop_container">
                        @foreach($accessory_data as $accessories_data)
                            @php
                                $cat_id = json_decode($accessories_data->cat_id);
                            @endphp
                            @if( in_array('cleaning_access', $cat_id) )
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="javascript: void (0)">
                                        <img src="{{ URL::to('/') }}/media/accessories/{{ $accessories_data->photo }}" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                            
                        </div>
                    </div>

                    <div class="tab-pane fade" id="fire_fight_equip" role="tabpanel" aria-labelledby="arrival-tab">
                        <div class="row shop_container">
                        @foreach($accessory_data as $accessories_data)
                            @php
                                $cat_id = json_decode($accessories_data->cat_id);
                            @endphp
                            @if( in_array('fire_fight_equip', $cat_id) )
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="javascript: void (0)">
                                            <img src="{{ URL::to('/') }}/media/accessories/{{ $accessories_data->photo }}" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                            
                        </div>
                    </div>

                </div>
                <!-- tab-content -->
            </div>
        </div>
    </div>
</div>



</div>
<!-- END MAIN CONTENT -->
@section('javascript')
<script>
    $('.amader-product').mixItUp();
</script>
@stop
@endsection