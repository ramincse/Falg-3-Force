@extends('frontend.layouts.app')
@section('page-title', 'Contat Us')
@section('main-content')
<!-- END MAIN CONTENT -->
<div class="main_content">
    <div class="section bg_light_blue2 pb_70">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12">
                    <div class="text-center trading_img">
                        <img style="width: 100%;" src="{{ URL::to('/') }}/media/contact/{{ $contactus->top_img }}" alt="tranding_img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section pt-5 pb-5">
        <div class="container">
        <!-- Corporate Office -->
        <div class="row">
                <div class="col-md-12">
                @php
                    $corporate_office = json_decode($contactus->corporate_office);
                @endphp
                    <div class="contact_wrap contact_style3">
                        <div class="contact_icon">
                            <i class="linearicons-map2"></i>
                        </div>
                        <div class="contact_text">
                            <span style="font-family: beaufort !important;" class="text-uppercase">{{ $corporate_office->c_name }}</span>
                            <p class="mb-1"><i class="linearicons-location mr-2"></i>{{ $corporate_office->c_address }}</p>
                            <p style="margin: 0px;"><i class="linearicons-telephone mr-2"></i>{{ $corporate_office->c_phone }}</p>
                            <p style="margin: 0px;"><i class="linearicons-telephone mr-2"></i>{{ $corporate_office->c_cell1 }}</p>
                            <p style="margin: 0px;"><i class="linearicons-telephone mr-2"></i>{{ $corporate_office->c_cell2 }}</p>
                            <p style="margin: 0px;"><i class="linearicons-envelope-open mr-2"></i>{{ $corporate_office->c_email1 }}</p>
                            <p style="margin: 0px;"><i class="linearicons-envelope-open mr-2"></i>{{ $corporate_office->c_email2 }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dhaka Office -->
            <div class="row">
                <div class="col-md-6">
                @php
                    $dhaka1_office = json_decode($contactus->dhaka1_office);
                @endphp
                    <div class="contact_wrap contact_style3">
                        <div class="contact_icon">
                            <i class="linearicons-map2"></i>
                        </div>
                        <div class="contact_text">
                            <span style="font-family: beaufort !important;" class="text-uppercase">{{ $dhaka1_office->d1_name }}</span>
                            <p class="mb-0"><i class="linearicons-location mr-2"></i>{{ $dhaka1_office->d1_address }}</p>
                            <p style="margin: 0px;"><i class="linearicons-telephone mr-2"></i>{{ $dhaka1_office->d1_cell1 }}</p>
                            <p style="margin: 0px;"><i class="linearicons-envelope-open mr-2"></i>{{ $dhaka1_office->d1_email1 }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                @php
                    $dhaka2_office = json_decode($contactus->dhaka2_office);
                @endphp
                    <div class="contact_wrap contact_style3">
                        <div class="contact_icon">
                        <i class="linearicons-map2"></i>
                        </div>
                        <div class="contact_text">
                            <span style="font-family: beaufort !important;" class="text-uppercase">{{ $dhaka2_office->d2_name }}</span>
                            <p class="mb-1"><i class="linearicons-location mr-2"></i>{{ $dhaka2_office->d2_address }}</p>
                            <p style="margin: 0px;"><i class="linearicons-telephone mr-2"></i>{{ $dhaka2_office->d2_cell1 }}</p>
                            <p style="margin: 0px;"><i class="linearicons-telephone mr-2"></i>{{ $dhaka2_office->d2_cell2 }}</p>
                            <p style="margin: 0px;"><i class="linearicons-envelope-open mr-2"></i>{{ $dhaka2_office->d2_email1 }}</p>
                            <p><i class="linearicons-envelope-open mr-2"></i>{{ $dhaka2_office->d2_email2 }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Training Center -->
            <div class="row">
                <div class="col-md-6">
                @php
                    $training_center1 = json_decode($contactus->training_center1);
                @endphp
                    <div class="contact_wrap contact_style3">
                        <div class="contact_icon">
                            <i class="linearicons-map2"></i>
                        </div>
                        <div class="contact_text">
                            <span style="font-family: beaufort !important;" class="text-uppercase">{{ $training_center1->tc1_name }}</span>
                            <p class="mb-1"><i class="linearicons-location mr-2"></i>{{ $training_center1->tc1_address }}</p>
                            <p class="mb-1"><i class="linearicons-telephone mr-2"></i>{{ $training_center1->tc1_cell }}</p>
                            <p><i class="linearicons-envelope-open mr-2"></i>{{ $training_center1->tc1_email }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                @php
                    $training_center2 = json_decode($contactus->training_center2);
                @endphp
                    <div class="contact_wrap contact_style3">
                        <div class="contact_icon">
                            <i class="linearicons-map2"></i>
                        </div>
                        <div class="contact_text">
                            <span style="font-family: beaufort !important;" class="text-uppercase">{{ $training_center2->tc2_name }}</span>
                            <p class="mb-1"><i class="linearicons-location mr-2"></i>{{ $training_center2->tc2_address }}</p>
                            <p class="mb-1"><i class="linearicons-telephone mr-2"></i>{{ $training_center2->tc2_cell }}</p>
                            <p><i class="linearicons-envelope-open mr-2"></i>{{ $training_center2->tc2_email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Google Maps-->
    <div class="section bg_light_blue2">
	<div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="heading_s1">
                    <h2 style="font-size: 22px; text-transform: uppercase;" class="text-center">Get In touch</h2>
                </div>
            </div>
        </div>
    	<div class="row">
        	<div class="col-lg-6">
                <h4 style="font-size: 20px;" class="leads text-uppercase">Please get instant feedback</h4>
                <div class="field_form">
                    <form method="post" name="enq">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input required="" placeholder="Enter Name *" id="first-name" class="form-control" name="name" type="text">
                             </div>
                            <div class="form-group col-md-6">
                                <input required="" placeholder="Enter Email *" id="email" class="form-control" name="email" type="email">
                            </div>
                            <div class="form-group col-md-6">
                                <input required="" placeholder="Enter Phone No. *" id="phone" class="form-control" name="phone">
                            </div>
                            <div class="form-group col-md-6">
                                <input placeholder="Enter Subject" id="subject" class="form-control" name="subject">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea required="" placeholder="Message *" id="description" class="form-control" name="message" rows="4"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" title="Submit Your Message!" class="btn btn-fill-out" id="submitButton" name="submit" value="Submit">Send Message</button>
                            </div>
                            <div class="col-md-12">
                                <div id="alert-msg" class="alert-msg text-center"></div>
                            </div>
                        </div>
                    </form>		
                </div>
            </div>
            <div class="col-lg-6 pt-2 pt-lg-0 mt-4 mt-lg-0">
            <iframe src="{{ $contactus->google_link }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>

</div>
<!-- END MAIN CONTENT -->
@endsection