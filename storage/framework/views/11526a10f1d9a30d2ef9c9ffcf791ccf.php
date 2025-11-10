        <!--Newsletter One Start-->


        

        <!-- <section class="newsletter-one">
            <div class="container">
                <div class="newsletter-one__inner">
                    <div class="newsletter-one__bg float-bob-y"
                        style="background-image: url(<?php echo e(asset('public/frontend/assets/images/backgrounds/newsletter-one-bg.jpg')); ?>);">
                    </div>
                    <h3 class="newsletter-one__title">Newsletter</h3>
                    <p class="newsletter-one__sub-title">Stay updated</p>

                    <form class="newsletter-one__form" id="newsletterForm" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="email" name="email" id="newsletter-email" placeholder="Email address" required>
                        <button type="submit" class="newsletter-one__btn">
                            <span class="btn-text">
                                Subscribe
                                <i class="icon-arrow"></i>
                            </span>
                            <span class="btn-loader" style="display: none;">
                                <i class="fa fa-spinner fa-spin"></i>
                            </span>
                        </button>
                    </form>

                    <div class="mc-form__response"></div>
                </div>
            </div>
        </section> -->


        <!--Newsletter One End-->

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer__bg-2"
                style="background-image: url(<?php echo e(asset('public/frontend/assets/images/backgrounds/counter_one_bg_two.jpg')); ?>);">
            </div>
            <div class="site-footer__bg-3 float-bob-y"
                style="background-image: url(<?php echo e(asset('public/frontend/assets/images/backgrounds/site-footer-bg-3.png')); ?>);">
            </div>
            <div class="site-footer__bg"
                style="background-image: url(<?php echo e(asset('public/frontend/assets/images/backgrounds/site-footer-bg.jpg')); ?>);">
            </div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Support</h3>
                                </div>
                                <ul class="footer-widget__list list-unstyled">
                                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                                    <li><a href="<?php echo e(route('about-us')); ?>">About Us</a></li>
                                    <li><a href="<?php echo e(route('contact')); ?>">Contact Us</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__explore">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Services</h3>
                                </div>
                                <ul class="footer-widget__list list-unstyled">
                                    <li><a href="<?php echo e(route('seo-services')); ?>">Seo Services</a></li>
                                    <li><a href="<?php echo e(route('e-commerce-seo')); ?>">E-commerce Seo</a></li>
                                    <li><a href="<?php echo e(route('ppc-services')); ?>">PPC Services</a></li>
                                    <li><a href="<?php echo e(route('local-seo')); ?>">Local SEO</a></li>
                                    <li><a href="<?php echo e(route('social-media-marketing')); ?>">Social Media Marketing</a></li>
                                    <li><a href="<?php echo e(route('content-marketing-agency')); ?>">Content Marekting Agency</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__links">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Web Services</h3>
                                </div>
                                <ul class="footer-widget__list list-unstyled">
                                    <li><a href="<?php echo e(route('web-design')); ?>">Web Design</a></li>
                                    <li><a href="<?php echo e(route('web-development')); ?>">Web Development</a></li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                            <div class="footer-widget__column footer-widget__contact">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Contact</h3>
                                </div>
                                <ul class="footer-widget__contact-list list-unstyled">
                                    
                                </ul>
                                <div class="footer-widget__social">
                                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#"><span class="fab fa-linkedin-in"></span></a>
                                    <a href="#"><span class="fab fa-youtube"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">Copyright © 2025 All Rights Reserved.</p>
                        <ul class="list-unstyled site-footer__bottom-links">
                            <li>
                                <a href="<?php echo e(route('terms-conditions')); ?>">Terms & Condition</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('privacy-policy')); ?>">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('refund-policy')); ?>">Refund Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


        </div><!-- /.page-wrapper -->


        <div class="mobile-nav__wrapper">
            <div class="mobile-nav__overlay mobile-nav__toggler"></div>
            <!-- /.mobile-nav__overlay -->
            <div class="mobile-nav__content">
                <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

                <div class="logo-box">
                    <a href="<?php echo e(route('home')); ?>" aria-label="logo image"><img
                            src="<?php echo e(asset('public/frontend/assets/images/resources/MarketMindsDigitalLogo.png')); ?>" width="115"
                            alt="" /></a>
                </div>
                <!-- /.logo-box -->
                <div class="mobile-nav__container"></div>
                <!-- /.mobile-nav__container -->

             
            </div>
            <!-- /.mobile-nav__content -->
        </div>
        <!-- /.mobile-nav__wrapper -->

        <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
            <!-- /.search-popup__overlay -->
            <div class="search-popup__content">
                <form action="#">
                    <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                    <input type="text" id="search" placeholder="Search Here..." />
                    <button type="submit" aria-label="search submit" class="thm-btn">
                        <i class="icon-search"></i>
                    </button>
                </form>
            </div>
            <!-- /.search-popup__content -->
        </div>
        <!-- /.search-popup -->

        <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i
                class="icon-right-arrow"></i></a>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('newsletterForm');
                const emailInput = document.getElementById('newsletter-email');
                const responseDiv = document.querySelector('.mc-form__response');
                const btnText = document.querySelector('.btn-text');
                const btnLoader = document.querySelector('.btn-loader');

                form.addEventListener('submit', function(e) {
                    e.preventDefault();

                    // Clear previous messages
                    responseDiv.innerHTML = '';
                    responseDiv.className = 'mc-form__response';

                    // Show loader
                    btnText.style.display = 'none';
                    btnLoader.style.display = 'inline-block';

                    // Get form data
                    const formData = new FormData(form);

                    // Send AJAX request
                    fetch('<?php echo e(route('newsletter.subscribe')); ?>', {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'Accept': 'application/json'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            // Hide loader
                            btnText.style.display = 'inline-block';
                            btnLoader.style.display = 'none';

                            if (data.success) {
                                responseDiv.className = 'mc-form__response success';
                                responseDiv.innerHTML = '<p>' + data.message + '</p>';
                                emailInput.value = '';
                            } else {
                                responseDiv.className = 'mc-form__response error';
                                responseDiv.innerHTML = '<p>' + data.message + '</p>';
                            }

                            // Hide message after 5 seconds
                            setTimeout(function() {
                                responseDiv.innerHTML = '';
                                responseDiv.className = 'mc-form__response';
                            }, 5000);
                        })
                        .catch(error => {
                            // Hide loader
                            btnText.style.display = 'inline-block';
                            btnLoader.style.display = 'none';

                            responseDiv.className = 'mc-form__response error';
                            responseDiv.innerHTML = '<p>Something went wrong. Please try again.</p>';

                            setTimeout(function() {
                                responseDiv.innerHTML = '';
                                responseDiv.className = 'mc-form__response';
                            }, 5000);
                        });
                });
            });
        </script>
<?php /**PATH C:\Neww Xammppp\htdocs\marketing_minds\resources\views/frontend/layouts/footer.blade.php ENDPATH**/ ?>