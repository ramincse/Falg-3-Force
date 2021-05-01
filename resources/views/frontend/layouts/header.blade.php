<header class="header_wrap fixed-top header_with_topbar">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-right">
                        <ul class="header_list">
                            <li><span>Hotline:</span></li>
                            <li><i class="fas fa-headset"></i><span>01675392075</span></li>
                            <li><i class="fas fa-headset"></i><span>01983569800</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @php
        $all_settings = App\Models\Setting::find(1);
    @endphp
    <div class="bottom_header dark_skin main_menu_uppercase">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html">
                    <img class="logo_light" src="{{ URL::to('/') }}/media/settings/{{ $all_settings->logo }}" alt="logo" />
                    <img class="logo_dark" src="{{ URL::to('/') }}/media/settings/{{ $all_settings->logo }}" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false">
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li><a class="nav-link nav_item {{ (Route::currentRouteName() == 'home.page') ? 'active' : '' }}" href="{{ route('home.page') }}">Home</a></li>
                        <li><a class="nav-link nav_item {{ (Route::currentRouteName() == 'about.page') ? 'active' : '' }}" href="{{ route('about.page') }}">About Us</a></li>
                        <li><a class="nav-link nav_item {{ (Route::currentRouteName() == 'service.page') ? 'active' : '' }}" href="{{ route('service.page') }}">Our Services</a></li>
                        <li><a class="nav-link nav_item {{ (Route::currentRouteName() == 'client.page') ? 'active' : '' }}" href="{{ route('client.page') }}">Clients</a></li>
                        <li><a class="nav-link nav_item {{ (Route::currentRouteName() == 'gallery.page') ? 'active' : '' }}" href="{{ route('gallery.page') }}">Gallery</a></li>
                        <li><a class="nav-link nav_item {{ (Route::currentRouteName() == 'contact.page') ? 'active' : '' }}" href="{{ route('contact.page') }}">Contact Us</a></li>
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">

                </ul>
            </nav>
        </div>
    </div>
</header>