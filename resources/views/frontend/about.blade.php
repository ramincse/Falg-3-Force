@extends('frontend.layouts.app')
@section('page-title', 'About Us')
@section('main-content')
<!-- END MAIN CONTENT -->
<div class="main_content">
    <!-- START Top Management -->
    <div class="section bg_light_blue2 pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="heading_s1 text-center">
                        <h2 style="text-transform: uppercase; font-weight: 500; font-size: 26px;" class="mb-5">Top Management</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($all_management as $management)
                <div class="col-lg-4 col-sm-6">
                    <div class="icon_box icon_box_style4 box_shadow1 rounded">
                        <div class="icon">
                            <img class="rounded" style="width: 165px; height: 190px;" src="{{ URL::to('/') }}/media/top_management/{{ $management->photo }}" alt="">
                        </div>
                        <div class="icon_box_content">
                            <h5 style="font-size: 24px; text-transform: none; font-weight: 600;">{{ $management->name }}</h5>
                            <p>{{ $management->job }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- START Management Message -->
    @foreach($all_message as $message)
    <div class="section pb_20 small_pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2 style="text-transform: uppercase;">Message</h2>
                        <h2 style="text-transform: uppercase; letter-spacing: 1.5px;" class="mb-5">{{ $message->name }}</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <img class="rounded" style="float: left; width: 450px; margin-right: 15px" src="{{ URL::to('/') }}/media/message/{{ $message->photo }}" alt="furniture_banner1">
                    <p class="text-justify">{{ $message->content }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- About Text Message -->
    @php
    $abouttext = App\Models\AboutText::find(1);
    @endphp
    <div class="section bg_light_blue2 pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="heading_s1 text-center">
                        <h2 style="text-transform: uppercase;" class="mb-2">{{ $abouttext->title }}</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="icon_box">
                        <div class="icon_box_content">
                        <p class="text-justify">{{ $abouttext->content }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    @php
        $corporate_office = json_decode($contactus->corporate_office);
        $training_center1 = json_decode($contactus->training_center1);
        $training_center2 = json_decode($contactus->training_center2);
    @endphp

    <div class="section pb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="contact_wrap contact_style3">
                        <div class="contact_icon">
                            <i class="linearicons-map2"></i>
                        </div>
                        <div class="contact_text">
                            <span style="font-family: beaufort !important;" class="text-uppercase">{{ $corporate_office->c_name }}</span>
                            <p>{{ $corporate_office->c_address }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact_wrap contact_style3">
                        <div class="contact_icon">
                        <i class="linearicons-map2"></i>
                        </div>
                        <div class="contact_text">
                            <span style="font-family: beaufort !important;" class="text-uppercase">{{ $training_center1->tc1_name }}</span>
                            <p>{{ $training_center1->tc1_address }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact_wrap contact_style3">
                        <div class="contact_icon">
                        <i class="linearicons-map2"></i>
                        </div>
                        <div class="contact_text">
                            <span style="font-family: beaufort !important;" class="text-uppercase">{{ $training_center2->tc2_name }}</span>
                            <p>{{ $training_center2->tc2_address }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
<!-- END MAIN CONTENT -->
@endsection