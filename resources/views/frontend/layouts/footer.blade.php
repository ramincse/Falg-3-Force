<footer class="footer_dark">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                @php
                    $contactus = App\Models\ContactUs::find(1);
                    $corporate_office = json_decode($contactus->corporate_office);
                @endphp
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="widget">
                        <h6 class="widget_title">{{ $corporate_office->c_name }}</h6>
                        <ul class="contact_info contact_info_light">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p>{{ $corporate_office->c_address }}</p>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>{{ $corporate_office->c_phone }}</p>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>{{ $corporate_office->c_cell1 }}</p>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>{{ $corporate_office->c_cell2 }}</p>
                            </li>
                            <li>
                                <i class="ti-email"></i>
                                <a href="mailto:info@sitename.com">{{ $corporate_office->c_email1 }}</a>
                            </li>  
                            <li>
                                <i class="ti-email"></i>
                                <a href="mailto:info@sitename.com">{{ $corporate_office->c_email2 }}</a>
                            </li>                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                @php
                    $contactus = App\Models\ContactUs::find(1);
                    $dhaka1_office = json_decode($contactus->dhaka1_office);
                @endphp
                @php
                    $contactus = App\Models\ContactUs::find(1);
                    $dhaka2_office = json_decode($contactus->dhaka2_office);
                @endphp
                    <div class="widget">
                        <h6 class="widget_title mb-1">{{ $dhaka1_office->d1_name }}</h6>
                        <ul class="contact_info contact_info_light">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p>{{ $dhaka1_office->d1_address }}</p>
                            </li>                          
                        </ul>

                        <h6 class="widget_title mb-1 mt-2">{{ $dhaka2_office->d2_name }}</h6>
                        <ul class="contact_info contact_info_light">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p>{{ $dhaka2_office->d2_address }}</p>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>{{ $dhaka2_office->d2_cell1 }}</p>
                            </li>                            
                            <li>
                                <i class="ti-mobile"></i>
                                <p>{{ $dhaka2_office->d2_cell2 }}</p>
                            </li>
                            <li>
                                <i class="ti-email"></i>
                                <a href="mailto:info@sitename.com">{{ $dhaka2_office->d2_email1 }}</a>
                            </li>  
                            <li>
                                <i class="ti-email"></i>
                                <a href="mailto:info@sitename.com">{{ $dhaka2_office->d2_email2 }}</a>
                            </li>                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">Menu</h6>
                        <ul class="widget_links">
                            <li><a href="{{ route('home.page') }}">Home</a></li>
                            <li><a href="{{ route('about.page') }}">About Us</a></li>
                            <li><a href="{{ route('service.page') }}">Our Services</a></li>
                            <li><a href="{{ route('client.page') }}">Clients</a></li>
                            <li><a href="{{ route('gallery.page') }}">Gallery</a></li>
                            <li><a href="{{ route('contact.page') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                @php
                    $all_settings = App\Models\Setting::find(1);
                    $sister_arr = json_decode($all_settings->sister);
                    $social_arr = json_decode($all_settings->social);
                    $copy_arr = json_decode($all_settings->copyright);
                @endphp
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="widget">
                        <h6 class="widget_title">{{ $sister_arr->sister }}</h6>
                        <ul class="app_list">
                            <li><a target="_blank" href="{{ $sister_arr->web_link }}"><i class="ti-link"></i>{{ $sister_arr->web_link }}</a></li>
                        </ul>
                        <h6 class="widget_title">Follow Us</h6>
                        <ul class="social_icons rounded_social">
                            <li><a target="_blank" href="{{ $social_arr->facebook_link }}" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                            <li><a target="_blank" href="{{ $social_arr->twitter_link }}" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                            <li><a target="_blank" href="{{ $social_arr->youtube_link }}" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer border-top-tran">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-md-0 text-center text-md-left">© {{ $copy_arr->copy_year }} All Rights Reserved by {{ $copy_arr->copy_by }}</p>
                </div>
                <div class="col-md-6">
                    <ul class="footer_payment text-center text-lg-right">
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">FAQ'S</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>