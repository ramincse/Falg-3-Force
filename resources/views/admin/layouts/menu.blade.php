    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li class="{{ (Route::currentRouteName() == 'admin.dashboard') ? 'active' : '' }}">
                        <a href="{{ route('admin.dashboard') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                    </li>
                    <li class="{{ (Route::currentRouteName() == 'portfolio.index') ? 'active' : '' }}">
                        <a href="{{ route('portfolio.index') }}"><i class="fa fa-file-image-o" aria-hidden="true"></i> <span>Portfolio</span></a>
                    </li>

                    <li class="{{ (Route::currentRouteName() == 'service.index') ? 'active' : '' }}">
                        <a href="{{ route('service.index') }}"><i class="fe fe-user-plus"></i> <span>Services</span></a>
                    </li>

                    <li class="{{ (Route::currentRouteName() == 'fsservice.index') ? 'active' : '' }}">
                        <a href="{{ route('fsservice.index') }}"><i class="fa fa-user-secret" aria-hidden="true"></i> <span>Security Services</span></a>
                    </li>

                    <li class="{{ (Route::currentRouteName() == 'testimonial.index') ? 'active' : '' }}">
                        <a href="{{ route('testimonial.index') }}"><i class="fa fa-commenting-o" aria-hidden="true"></i> <span>Testimonial</span></a>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fa fa-info" aria-hidden="true"></i> <span>About Us</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li class="{{ (Route::currentRouteName() == 'about-management.index') ? 'ok' : '' }}"><a href="{{ route('about-management.index') }}">Management</a></li>
                            <li class="{{ (Route::currentRouteName() == 'about-vice.index') ? 'ok' : '' }}"><a href="{{ route('about-vice.index') }}">Director Message</a></li>
                            <li class="{{ (Route::currentRouteName() == 'about.text.message') ? 'ok' : '' }}"><a href="{{ route('about.text.message') }}">Text Message</a></li>
                        </ul>
                    </li>
                    
                    <li class="{{ (Route::currentRouteName() == 'client.index') ? 'active' : '' }}">
                        <a href="{{ route('client.index') }}"><i class="fe fe-activity"></i> <span>Featured Clients</span></a>
                    </li>

                    <li class="{{ (Route::currentRouteName() == 'gallery.index') ? 'active' : '' }}">
                        <a href="{{ route('gallery.index') }}"><i class="fa fa-picture-o" aria-hidden="true"></i> <span>Gallery</span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fa fa-server" aria-hidden="true"></i> <span>Our Services</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li class="{{ (Route::currentRouteName() == 'top.service') ? 'ok' : '' }}"><a href="{{ route('top.service') }}">Top Service</a></li>
                            <li class="{{ (Route::currentRouteName() == 'accessory.index') ? 'ok' : '' }}"><a href="{{ route('accessory.index') }}">Accessories</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fa fa-compress" aria-hidden="true"></i> <span>Contact</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li class="{{ (Route::currentRouteName() == 'contact.image') ? 'ok' : '' }}"><a href="{{ route('contact.image') }}">Top Image</a></li>
                            <li class="{{ (Route::currentRouteName() == 'contact.us') ? 'ok' : '' }}"><a href="{{ route('contact.us') }}">Office Address</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fe fe-vector"></i> <span> Settings </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li class="{{ (Route::currentRouteName() == 'slider.index') ? 'ok' : '' }}"><a href="{{ route('slider.index') }}"> Slider </a></li>
                            <li class="{{ (Route::currentRouteName() == 'theme.setting') ? 'ok' : '' }}"><a href="{{ route('theme.setting') }}">Theme Option</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>