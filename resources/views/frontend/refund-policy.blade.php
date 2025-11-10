@extends('frontend.layouts.app')

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg"
            style="background-image: url({{ asset('public/frontend/assets/images/backgrounds/asian-male-hand-using-mobile-phone-using-credit-card-pay-credit-card-payment-concept_104677-1472.jpg') }})">
        </div>
        <div class="page-header__shape-1"></div>
        <div class="page-header__shape-2 float-bob-y">
            <img src="{{ asset('public/frontend/assets/images/shapes/page-header-shape-2.png') }}" alt="">
        </div>
        <div class="page-header__shape-3 float-bob-x">
            <img src="{{ asset('public/frontend/assets/images/shapes/page-header-shape-3.png') }}" alt="">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Refund Policy</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span>-</span></li>
                    <li>refund policy</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->




    <section class="refund-policy py-5">
        <div class="container">
            <div class="content-box">
                <h1 class="title">Refund Policy</h1>
            </div>
            <div class="title mb-5 mt-5">
                    <h5>Effective Date: [Insert Date]</h5>
                <p class="text-start">At Marketing Minds Digital, we want you to be delighted with our services. If, for any reason, you are not satisfied with your purchase, we offer a clear and transparent refund policy.
.</p>
               
            </div>

            <div class="policy-content">
                <!-- Eligibility for Refund -->
                <div class="mb-4">
                    <h4 class="fw-bold text-danger mb-3">Eligibility for Refund</h4>
                    <ol class="ps-3">
                        <p>Refund requests can be made within 30 days of purchasing our services. If you are not satisfied with our digital marketing services, you can request a full refund.</p>
                    
                    </ol>
                </div>

                <!-- Non-Refundable Cases -->
                <div class="mb-4">
                    <h4 class="fw-bold text-danger mb-3">How to Request a Refund</h4>
                    <ol class="ps-3">
                   
                             <p>To request a refund, please get in touch with our customer service team at [Insert email or phone]. Provide your order number and reason for the refund request.</p>
                        </ol>
                </div>

                <!-- Refund Processing -->
                <div class="mb-4">
                    <h4 class="fw-bold text-danger mb-3">Refund Processing</h4>
                    <p>Once your refund request is received, we will review the details and process your refund within 7-10 business days. Refunds will be issued to the original payment method</p>
                </div>

                <!-- Third-Party Services -->
                <div class="mb-4">
                    <h4 class="fw-bold text-danger mb-3"> Non-Refundable Items</h4>
                    <p>Certain services, such as subscription-based services or customized digital marketing campaigns, are non-refundable. Please review the specific terms for these services at the time of purchase.
                    .</p>
                </div>

                <!-- Policy Amendments -->
                <div class="mb-4">
                    <h4 class="fw-bold text-danger mb-3"> No Refund Policy for Ongoing Services</h4>
                    <p>Refunds will not be issued for services that have already been delivered or for services that are part of a contract, including but not limited to ongoing digital marketing campaigns.</p>
                </div>

                <!-- Contact Us -->
                <div>
                    <h4 class="fw-bold text-danger mb-3">Changes to This Refund Policy</h4>
                    <p>We reserve the right to modify or update this Refund Policy at any time. Any changes will be posted on this page with the updated "Effective Date."

              
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
