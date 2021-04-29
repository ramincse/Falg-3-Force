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

</div>
<!-- END MAIN CONTENT -->
@endsection