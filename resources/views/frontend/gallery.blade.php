@extends('frontend.layouts.app')
@section('page-title', 'Gallery')
@section('main-content')
<!-- END MAIN CONTENT -->
<div class="main_content">

    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s1 text-center">
                        <h2>Our Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-style1">
                        <ul class="nav nav-tabs justify-content-center" id="nav" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="arrival-tab" data-toggle="tab" href="#cleaning" role="tab" aria-controls="arrival" aria-selected="true">Cleaning</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="arrival-tab" data-toggle="tab" href="#digital" role="tab" aria-controls="arrival" aria-selected="false">Digital Security</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="arrival-tab" data-toggle="tab" href="#fire_fighting" role="tab" aria-controls="arrival" aria-selected="false">Fire Fighting</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="arrival-tab" data-toggle="tab" href="#pest_control" role="tab" aria-controls="arrival" aria-selected="false">Pest Control</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="arrival-tab" data-toggle="tab" href="#physical_security" role="tab" aria-controls="arrival" aria-selected="false">Physical Security</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="tab">
                        <div class="tab-pane fade active show" id="cleaning" role="tabpanel" aria-labelledby="arrival-tab">
                            <div class="row shop_container">                       

                                @foreach($gallery_data as $gall_data)
                                @php
                                    $gall_cat = json_decode($gall_data->gall_cat);
                                @endphp
                                
                                @if( in_array('cleaning', $gall_cat) )
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="javascript: void (0)">
                                                <img src="{{ URL::to('/') }}/media/gallery/{{ $gall_data->photo }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach

                            </div>
                        </div>

                        <div class="tab-pane fade" id="digital" role="tabpanel" aria-labelledby="arrival-tab">
                            <div class="row shop_container">
                            @foreach($gallery_data as $gall_data)
                                @php
                                    $gall_cat = json_decode($gall_data->gall_cat);
                                @endphp
                                @if( in_array('digital', $gall_cat) )
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="javascript: void (0)">
                                            <img src="{{ URL::to('/') }}/media/gallery/{{ $gall_data->photo }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                            </div>
                        </div>
    
                        <div class="tab-pane fade" id="fire_fighting" role="tabpanel" aria-labelledby="arrival-tab">
                            <div class="row shop_container">
                            @foreach($gallery_data as $gall_data)
                                @php
                                    $gall_cat = json_decode($gall_data->gall_cat);
                                @endphp
                                @if( in_array('fire_fighting', $gall_cat) )
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="javascript: void (0)">
                                            <img src="{{ URL::to('/') }}/media/gallery/{{ $gall_data->photo }}" />
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
                            @foreach($gallery_data as $gall_data)
                                @php
                                    $gall_cat = json_decode($gall_data->gall_cat);
                                @endphp
                                @if( in_array('pest_control', $gall_cat) )
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="javascript: void (0)">
                                                <img src="{{ URL::to('/') }}/media/gallery/{{ $gall_data->photo }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                                
                            </div>
                        </div>

                        <div class="tab-pane fade" id="physical_security" role="tabpanel" aria-labelledby="arrival-tab">
                            <div class="row shop_container">
                            @foreach($gallery_data as $gall_data)
                                @php
                                    $gall_cat = json_decode($gall_data->gall_cat);
                                @endphp
                                @if( in_array('physical_security', $gall_cat) )
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="javascript: void (0)">
                                                <img src="{{ URL::to('/') }}/media/gallery/{{ $gall_data->photo }}" />
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
@endsection