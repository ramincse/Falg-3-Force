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
                        <a href="{{ route('portfolio.index') }}"><i class="fe fe-layout"></i> <span>Portfolio</span></a>
                    </li>

                    <li class="{{ (Route::currentRouteName() == 'service.index') ? 'active' : '' }}">
                        <a href="{{ route('service.index') }}"><i class="fe fe-user-plus"></i> <span>Services</span></a>
                    </li>

                    <li class="{{ (Route::currentRouteName() == 'fsservice.index') ? 'active' : '' }}">
                        <a href="{{ route('fsservice.index') }}"><i class="fe fe-user"></i> <span>Security Services</span></a>
                    </li>

                    <li class="{{ (Route::currentRouteName() == 'testimonial.index') ? 'active' : '' }}">
                        <a href="{{ route('testimonial.index') }}"><i class="fe fe-star-o"></i> <span>Testimonial</span></a>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fe fe-document"></i> <span>About Us</span> <span class="menu-arrow"></span></a>
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
                        <a href="{{ route('gallery.index') }}"><i class="fe fe-vector"></i> <span>Gallery</span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fe fe-document"></i> <span>Our Services</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li class="{{ (Route::currentRouteName() == 'top.service') ? 'ok' : '' }}"><a href="{{ route('top.service') }}">Top Service</a></li>
                            <li class="{{ (Route::currentRouteName() == 'accessory.index') ? 'ok' : '' }}"><a href="{{ route('accessory.index') }}">Invoice Reports</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fe fe-document"></i> <span>Contact</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li class="{{ (Route::currentRouteName() == 'contact.us') ? 'ok' : '' }}"><a href="{{ route('contact.us') }}">Office Address</a></li>
                        </ul>
                    </li>

                    <!--
                    <li class="menu-title">
                        <span>Pages</span>
                    </li>
                    <li>
                        <a href="profile.html"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
                    </li> -->
                    <li class="submenu">
                        <a href="#"><i class="fe fe-vector"></i> <span> Settings </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li class="{{ (Route::currentRouteName() == 'slider.index') ? 'ok' : '' }}"><a href="{{ route('slider.index') }}"> Slider </a></li>
                            <li><a href="register.html"> Register </a></li>
                            <li><a href="forgot-password.html"> Forgot Password </a></li>
                            <li><a href="lock-screen.html"> Lock Screen </a></li>
                        </ul>
                    </li>
                    <!-- <li class="submenu">
                        <a href="#"><i class="fe fe-warning"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="error-404.html">404 Error </a></li>
                            <li><a href="error-500.html">500 Error </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fe fe-file"></i> <span>Blank Page</span></a>
                    </li>
                    <li class="menu-title">
                        <span>UI Interface</span>
                    </li>
                    <li>
                        <a href="components.html"><i class="fe fe-vector"></i> <span>Components</span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fe fe-layout"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                            <li><a href="form-input-groups.html">Input Groups </a></li>
                            <li><a href="form-horizontal.html">Horizontal Form </a></li>
                            <li><a href="form-vertical.html"> Vertical Form </a></li>
                            <li><a href="form-mask.html"> Form Mask </a></li>
                            <li><a href="form-validation.html"> Form Validation </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fe fe-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="tables-basic.html">Basic Tables </a></li>
                            <li><a href="data-tables.html">Data Table </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><i class="fe fe-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li class="submenu">
                                <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                    <li class="submenu">
                                        <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                        <ul style="display: none;">
                                            <li><a href="javascript:void(0);">Level 3</a></li>
                                            <li><a href="javascript:void(0);">Level 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> <span>Level 1</span></a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>