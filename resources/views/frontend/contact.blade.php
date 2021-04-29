@extends('frontend.layouts.app')
@section('page-title', 'Contat Us')
@section('main-content')
<!-- END MAIN CONTENT -->
<div class="main_content">
    <div class="section pb_70">
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
                            <span>{{ $dhaka1_office->d1_name }}</span>
                            <p><i class="linearicons-location mr-2"></i>{{ $dhaka1_office->d1_address }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                @php
                    $dhaka2_office = json_decode($contactus->dhaka2_office);
                @endphp
                    <div class="contact_wrap contact_style3">
                        <div class="contact_icon">
                            <i class="linearicons-envelope-open"></i>
                        </div>
                        <div class="contact_text">
                            <span>{{ $dhaka2_office->d2_name }}</span>
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
                            <span>{{ $training_center1->tc1_name }}</span>
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

    <!-- Google Maps-->
    <div class="section pt-0">
	<div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="heading_s1">
                    <h2 class="text-center">Get In touch</h2>
                </div>
            </div>
        </div>
    	<div class="row">
        	<div class="col-lg-6">
                <p class="leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d1579.4172462607285!2d90.41642892555367!3d23.833975797365287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x3755c78c6237edbf%3A0xeb9fe771f88c2843!2sFlag3%20Force%20Security%20Services%20Ltd.%2C%20Road%20No.%2016%2C%20Dhaka!3m2!1d23.8341186!2d90.41761199999999!5e0!3m2!1sen!2sbd!4v1619674047817!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>

</div>
<!-- END MAIN CONTENT -->
@endsection