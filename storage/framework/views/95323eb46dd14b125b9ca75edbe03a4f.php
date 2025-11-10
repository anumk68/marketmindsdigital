<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>



<div class="page-wrapper">
    <header class="main-header">
        <div class="main-header__top">
            <div class="main-header__top-inner">
                <ul class="list-unstyled main-header__contact-list">
                    <li>
                        <div class="icon">
                            
                        </div>
                        <div class="text">
                            
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            
                        </div>
                        <div class="text">
                            
                        </div>
                    </li>
                </ul>
                <div class="main-header__top-text-and-social">
                    <div class="list-unstyled main-header__top-text">
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <nav class="main-menu">
            <div class="main-menu__wrapper">
                <div class="main-menu__wrapper-inner">
                    <div class="main-menu__left">
                        <div class="main-menu__logo">
                            <a href="<?php echo e(route('home')); ?>"><img
                                    src="<?php echo e(asset('public/frontend/assets/images/resources/MarketMindsDigitalLogo.png')); ?>" class="img-fluid" alt=""></a>
                        </div>
                        <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="dropdown megamenu">
                                    <a href="<?php echo e(route('home')); ?>"
                                        class="<?php echo e(request()->routeIs('home') ? 'current' : ''); ?>">Home </a>

                                </li>
                                <li>
                                    <a href="<?php echo e(route('about-us')); ?>"
                                        class="<?php echo e(request()->routeIs('about-us') ? 'current' : ''); ?>">About</a>
                                </li>
                                <li class="dropdown <?php echo e(request()->routeIs('seo-services', 'ppc-services', 'e-commerce-seo', 'local-seo', 'social-media-marketing', 'content-marketing-agency') ? 'current' : ''); ?>">
                                    <a href="#">Digital Marketing</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo e(route('seo-services')); ?>"
                                                class="<?php echo e(request()->routeIs('seo-services') ? 'current' : ''); ?>">SEO
                                                Services</a></li>
                                        <li><a href="<?php echo e(route('ppc-services')); ?>"
                                                class="<?php echo e(request()->routeIs('ppc-services') ? 'current' : ''); ?>">PPC
                                                Services</a></li>
                                        <li><a href="<?php echo e(route('e-commerce-seo')); ?>"
                                                class="<?php echo e(request()->routeIs('e-commerce-seo') ? 'current' : ''); ?>">E-commerce
                                                Seo
                                            </a></li>
                                        <li><a href="<?php echo e(route('local-seo')); ?>"
                                                class="<?php echo e(request()->routeIs('local-seo') ? 'current' : ''); ?>">Local SEO
                                            </a>
                                        </li>
                                        <li><a href="<?php echo e(route('social-media-marketing')); ?>"
                                                class="<?php echo e(request()->routeIs('social-media-marketing') ? 'current' : ''); ?>">Social
                                                Media
                                                Marketing</a>
                                        </li>
                                        <li><a href="<?php echo e(route(name: 'content-marketing-agency')); ?>"
                                                class="<?php echo e(request()->routeIs('content-marketing-agency') ? 'current' : ''); ?>">Content
                                                Marketing
                                                Agency</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Web Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo e(route('web-design')); ?>"
                                                class="<?php echo e(request()->routeIs('web-design') ? 'current' : ''); ?>">Web
                                                Design</a></li>
                                        <li><a href="<?php echo e(route('web-development')); ?>"
                                                class="<?php echo e(request()->routeIs('web-development') ? 'current' : ''); ?>">Web
                                                Development</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="<?php echo e(route('blog')); ?>"
                                        class="<?php echo e(request()->routeIs('blog') ? 'current' : ''); ?>">Blog</a>

                                </li>
                                <li>
                                    <a href="<?php echo e(route('contact')); ?>"
                                        class="<?php echo e(request()->routeIs('contact') ? 'current' : ''); ?>">Contact</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="main-menu__right">
                        <div class="main-menu__btn-box">
                            <a href="<?php echo e(route('contact')); ?>" class="main-menu__btn">Get A Quote <i
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
    </div><!-- /.stricky-header --><?php /**PATH C:\xampp\htdocs\DigitalMarketingsProjects\marketMindsUpdated\resources\views/frontend/layouts/header.blade.php ENDPATH**/ ?>