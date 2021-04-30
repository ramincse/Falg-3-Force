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
                        <h2 class="mb-5">Top Management</h2>
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
                            <h5 style="height: 48px;">{{ $management->name }}</h5>
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
                        <h2 class="mb-5">{{ $message->name }}</h2>
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
                        <h2 class="mb-2">{{ $abouttext->title }}</h2>
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

    <div class="section pb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                @php
                    $corporate_office = json_decode($contactus->corporate_office);
                @endphp
                    <div class="contact_wrap contact_style3">
                        <div class="contact_icon">
                            <i class="linearicons-map2"></i>
                        </div>
                        <div class="contact_text">
                            <span>{{ $corporate_office->c_name }}</span>
                            <p class="mb-1"><i class="linearicons-location mr-2"></i>{{ $corporate_office->c_address }}</p>
                            <p style="margin: 0px;"><i class="linearicons-telephone mr-2"></i>{{ $corporate_office->c_phone }}</p>
                            <p style="margin: 0px;"><i class="linearicons-telephone mr-2"></i>{{ $corporate_office->c_cell1 }}</p>
                            <p style="margin: 0px;"><i class="linearicons-telephone mr-2"></i>{{ $corporate_office->c_cell2 }}</p>
                            <p style="margin: 0px;"><i class="linearicons-envelope-open mr-2"></i>{{ $corporate_office->c_email1 }}</p>
                            <p style="margin: 0px;"><i class="linearicons-envelope-open mr-2"></i>{{ $corporate_office->c_email2 }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                @php
                    $training_center1 = json_decode($contactus->training_center1);
                @endphp
                    <div class="contact_wrap contact_style3">
                        <div class="contact_icon">
                            <i class="linearicons-envelope-open"></i>
                        </div>
                        <div class="contact_text">
                            <span>{{ $training_center1->tc1_name }}</span>
                            <p class="mb-1"><i class="linearicons-location mr-2"></i>{{ $training_center1->tc1_address }}</p>
                            <p class="mb-1"><i class="linearicons-telephone mr-2"></i>{{ $training_center1->tc1_cell }}</p>
                            <p><i class="linearicons-envelope-open mr-2"></i>{{ $training_center1->tc1_email }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                @php
                    $training_center2 = json_decode($contactus->training_center2);
                @endphp
                    <div class="contact_wrap contact_style3">
                        <div class="contact_icon">
                            <i class="linearicons-tablet2"></i>
                        </div>
                        <div class="contact_text">
                            <span>{{ $training_center1->tc1_name }}</span>
                            <p class="mb-1"><i class="linearicons-location mr-2"></i>{{ $training_center2->tc2_address }}</p>
                            <p class="mb-1"><i class="linearicons-telephone mr-2"></i>{{ $training_center2->tc2_cell }}</p>
                            <p><i class="linearicons-envelope-open mr-2"></i>{{ $training_center2->tc2_email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- END MAIN CONTENT -->
@endsection