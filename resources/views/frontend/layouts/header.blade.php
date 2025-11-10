<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>



<div class="page-wrapper">
    <header class="main-header">
        <div class="main-header__top">
            <div class="main-header__top-inner">
                <ul class="list-unstyled main-header__contact-list">
                    <li>
                        <div class="icon">
                            {{-- <i class="fas fa-map-marker"></i> --}}
                        </div>
                        <div class="text">
                            {{-- <p>66 Road Broklyn Golden Street. New York</p> --}}
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            {{-- <i class="fas fa-envelope"></i> --}}
                        </div>
                        <div class="text">
                            {{-- <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p> --}}
                        </div>
                    </li>
                </ul>
                <div class="main-header__top-text-and-social">
                    <div class="list-unstyled main-header__top-text">
                        {{-- <p><span>Now Hiring:</span> Are you a driven and motivated 1st Line IT Support Engineer?
                        </p> --}}
                    </div>
                    {{-- <div class="main-header__top-social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div> --}}
                </div>
            </div>
        </div>
        <nav class="main-menu">
            <div class="main-menu__wrapper">
                <div class="main-menu__wrapper-inner">
                    <div class="main-menu__left">
                        <div class="main-menu__logo">
                            <a href="{{ route('home') }}"><img
                                    src="{{ asset('public/frontend/assets/images/resources/MarketMindsDigitalLogo.png') }}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="dropdown megamenu">
                                    <a href="{{ route('home') }}"
                                        class="{{ request()->routeIs('home') ? 'current' : '' }}">Home </a>

                                </li>
                                <li>
                                    <a href="{{ route('about-us') }}"
                                        class="{{ request()->routeIs('about-us') ? 'current' : '' }}">About</a>
                                </li>
                                <li class="dropdown {{ request()->routeIs('seo-services', 'ppc-services', 'e-commerce-seo', 'local-seo', 'social-media-marketing', 'content-marketing-agency') ? 'current' : '' }}">
                                    <a href="#">Digital Marketing</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('seo-services') }}"
                                                class="{{ request()->routeIs('seo-services') ? 'current' : '' }}">SEO
                                                Services</a></li>
                                        <li><a href="{{ route('ppc-services') }}"
                                                class="{{ request()->routeIs('ppc-services') ? 'current' : '' }}">PPC
                                                Services</a></li>
                                        <li><a href="{{ route('e-commerce-seo') }}"
                                                class="{{ request()->routeIs('e-commerce-seo') ? 'current' : '' }}">E-commerce
                                                Seo
                                            </a></li>
                                        <li><a href="{{ route('local-seo') }}"
                                                class="{{ request()->routeIs('local-seo') ? 'current' : '' }}">Local SEO
                                            </a>
                                        </li>
                                        <li><a href="{{ route('social-media-marketing') }}"
                                                class="{{ request()->routeIs('social-media-marketing') ? 'current' : '' }}">Social
                                                Media
                                                Marketing</a>
                                        </li>
                                        <li><a href="{{ route(name: 'content-marketing-agency') }}"
                                                class="{{ request()->routeIs('content-marketing-agency') ? 'current' : '' }}">Content
                                                Marketing
                                                Agency</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Web Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('web-design') }}"
                                                class="{{ request()->routeIs('web-design') ? 'current' : '' }}">Web
                                                Design</a></li>
                                        <li><a href="{{ route('web-development') }}"
                                                class="{{ request()->routeIs('web-development') ? 'current' : '' }}">Web
                                                Development</a></li>

                                    </ul>
                                </li>
                                {{-- <li class="dropdown">
                                    <a href="{{ route('blog') }}"
                                        class="{{ request()->routeIs('blog') ? 'current' : '' }}">Blog</a>

                                </li> --}}
                                <li>
                                    <a href="{{ route('contact') }}"
                                        class="{{ request()->routeIs('contact') ? 'current' : '' }}">Contact</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="main-menu__right">
                        <div class="main-menu__btn-box">
                            <a href="{{ route('contact') }}" class="main-menu__btn">Get A Quote <i
                                    class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->
