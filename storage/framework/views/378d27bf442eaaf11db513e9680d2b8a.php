<?php $__env->startSection('content'); ?>
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg"
            style="background-image: url(<?php echo e(asset('public/frontend/assets/images/backgrounds/happy-woman-talk-mobile-phone-drinking-morning-coffee-grey-background-talker-woman-portrait-isolated-header-banne.jpg')); ?>)">
        </div>
        <div class="page-header__shape-1"></div>
        <div class="page-header__shape-2 float-bob-y">
            <img src="<?php echo e(asset('public/frontend/assets/images/shapes/page-header-shape-2.png')); ?>" alt="">
        </div>
        <div class="page-header__shape-3 float-bob-x">
            <img src="<?php echo e(asset('public/frontend/assets/images/shapes/page-header-shape-3.png')); ?>" alt="">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h1>Contact</h1>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li><span>-</span></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Google Map Start-->
    <section class="google-map-one">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="google-map__one" allowfullscreen></iframe>
        </div>
    </section>
    <!--Google Map End-->

    <!--Contact Page Start-->
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-page__left">
                        <h3 class="contact-page__title">Get In Touch</h3>
                        <ul class="contact-page__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-location"></span>
                                </div>
                                <div class="content">
                                    <h3>Address</h3>
                                    
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="content">
                                    <h3>Phone</h3>
                                    
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-open-mail"></span>
                                </div>
                                <div class="content">
                                    <h3>Address</h3>
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-page__right">
                        <div class="contact-page__form-box">
                            

                            <form id="contactForm" novalidate>
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <!-- Name -->
                                    <div class="col-xl-6">
                                        <div class="contact-page__input-box">
                                            <input type="text" name="name" placeholder="Full Name *">
                                            <small id="nameError" class="text-danger"></small>
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-xl-6">
                                        <div class="contact-page__input-box">
                                            <input type="email" name="email" id="email"
                                                placeholder="Email Address *">
                                            <small id="emailError" class="text-danger"></small>
                                        </div>
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-xl-6">
                                        <div class="contact-page__input-box">
                                            <input type="text" name="phone" placeholder="Phone *">
                                            <small id="phoneError" class="text-danger"></small>
                                        </div>
                                    </div>

                                    <!-- Service Dropdown -->
                                    <div class="col-xl-6">
                                        <div class="contact-page__input-box">
                                            <select name="service" id="new_design">
                                                <option value="">Select Service</option>
                                                <option value="SEO">SEO</option>
                                                <option value="Web Development">Web Development</option>
                                                <option value="Web Design">Web Design</option>
                                                <option value="PPC">PPC</option>
                                                <option value="E Commerce">E Commerce</option>
                                                <option value="Local SEO">Local SEO</option>
                                                <option value="Social Media Marketing">Social Media Marketing</option>
                                                <option value="Digital Marketing">Digital Marketing</option>
                                            </select>
                                            <small id="serviceError" class="text-danger"></small>
                                        </div>
                                    </div>

                                    <!-- OTP Field (hidden initially) -->
                                    <div class="col-xl-12" id="otpWrapper" style="display: none;">
                                        <div class="contact-page__input-box">
                                            <input type="text" name="otp" id="otp" placeholder="Enter OTP">
                                            <small id="otpMsg" class="text-success"></small>
                                            <small id="otpError" class="text-danger"></small>
                                        </div>
                                    </div>
                                    <!-- Submit Button -->
                                    <div class="col-xl-12 text-center">
                                        <button type="submit" id="submitBtn" class="contact-page__btn" disabled>
                                            <span class="btn-text">Send Message</span>
                                            <span class="spinner-border spinner-border-sm d-none" role="status"></span>
                                        </button>
                                        <small id="formSuccess" class="text-success d-block mt-2"></small>
                                    </div>
                                </div>
                            </form>


                            <div class="result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Page End-->


<style>

    #new_design {
        height: 60px;
        width: 100%;
        padding-left: 20px;
        padding-right: 20px;
        font-size: 15px;
        color: var(--zeena-gray);
        display: block;
        font-weight: 400;
        border-width: 1px;
        border-style: solid;
        border-color: rgb(223, 224, 229);
        border-image: initial;
        outline: none;
        border-radius: 15px;
    }
</style>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const emailInput = document.getElementById("email");
            const otpWrapper = document.getElementById("otpWrapper");
            const otpInput = document.getElementById("otp");
            const submitBtn = document.getElementById("submitBtn");
            const spinner = submitBtn.querySelector(".spinner-border");
            const btnText = submitBtn.querySelector(".btn-text");
            const formSuccess = document.getElementById("formSuccess");

            const inputs = document.querySelectorAll(
                "#contactForm input, #contactForm select, #contactForm textarea");

            // Send OTP when leaving email field
            emailInput.addEventListener("blur", function() {
                const email = emailInput.value.trim();
                if (email === '') return;

                fetch("<?php echo e(route('contact.sendOtp')); ?>", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "<?php echo e(csrf_token()); ?>"
                        },
                        body: JSON.stringify({
                            email
                        })
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            otpWrapper.style.display = "block";
                            document.getElementById("otpMsg").textContent =
                                "OTP sent successfully to your email.";
                            document.getElementById("emailError").textContent = "";
                        } else {
                            document.getElementById("emailError").textContent =
                                "Failed to send OTP. Try again.";
                        }
                    })
                    .catch(() => {
                        document.getElementById("emailError").textContent =
                            "Something went wrong while sending OTP.";
                    });
            });

            // Verify OTP on blur
            otpInput.addEventListener("blur", function() {
                const otp = otpInput.value.trim();
                if (otp === '') return;

                fetch("<?php echo e(route('contact.verifyOtp')); ?>", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "<?php echo e(csrf_token()); ?>"
                        },
                        body: JSON.stringify({
                            otp
                        })
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.verified) {
                            document.getElementById("otpMsg").textContent =
                                "OTP verified successfully!";
                            document.getElementById("otpError").textContent = "";
                            otpInput.disabled = true;
                            enableSubmitIfAllFilled();
                        } else {
                            document.getElementById("otpError").textContent = data.message;
                            document.getElementById("otpMsg").textContent = "";
                        }
                    });
            });

            // Enable submit if all fields filled and OTP verified
            inputs.forEach(i => i.addEventListener("input", enableSubmitIfAllFilled));

            function enableSubmitIfAllFilled() {
                const filled = Array.from(inputs).every(input => input.value.trim() !== '');
                if (filled && otpInput.disabled) {
                    submitBtn.disabled = false;
                }
            }

            // Handle form submission
            document.getElementById("contactForm").addEventListener("submit", function(e) {
                e.preventDefault();

                spinner.classList.remove("d-none");
                btnText.classList.add("d-none");
                submitBtn.disabled = true;

                // Clear all error messages
                document.querySelectorAll(".text-danger").forEach(el => el.textContent = "");

                const formData = new FormData(this);

                fetch("<?php echo e(route('contact.submit')); ?>", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": "<?php echo e(csrf_token()); ?>"
                        },
                        body: formData
                    })
                    .then(res => res.json())
                    .then(data => {
                        spinner.classList.add("d-none");
                        btnText.classList.remove("d-none");

                        if (data.success) {
                            formSuccess.textContent = data.message;
                            document.getElementById("contactForm").reset();
                            otpWrapper.style.display = "none";
                            otpInput.disabled = false;
                            setTimeout(() => formSuccess.textContent = "", 5000);
                        } else {
                            for (const key in data.errors) {
                                const err = document.getElementById(`${key}Error`);
                                if (err) err.textContent = data.errors[key][0];
                            }
                        }
                    })
                    .catch(() => {
                        spinner.classList.add("d-none");
                        btnText.classList.remove("d-none");
                    });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/servuavz/marketingmindsdigital.com/resources/views/frontend/contact.blade.php ENDPATH**/ ?>