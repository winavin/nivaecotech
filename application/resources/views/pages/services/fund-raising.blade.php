<?php

use function Laravel\Folio\name;

name('services.show.fund-raising');
?>

<x-guest-layout><!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Fund Raising</h1>
            <p class="fs-5 fw-medium text-white mb-4 pb-2">
                Elevate your solar ambitions with our specialized fund-raising services tailored to propel solar
                projects towards successful implementation
            </p>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Get in touch</h6>
                    <h1>
                        Elevating Solar Initiatives through Strategic Funding
                    </h1>
                    <p class="mb-4 text">
                        In the dynamic realm of sustainable energy, securing funding for solar projects
                        has emerged as a pivotal focus for environmentally-conscious investors and advocates of ESG
                        principles. Various regions have adopted fixed tariffs for solar-generated electricity,
                        fostering an encouraging environment for financing renewable energy endeavors. These incentives,
                        coupled with the broader positive trajectory of the renewable sector, point toward promising and
                        consistent returns on investment.
                    </p>
                    <p class="mb-4">
                        <b>A Leading Partner in Solar Fundraising:</b>
                        Our team stands as a seasoned corporate finance advisor, specializing in solar fundraising and
                        debt arrangement for solar power ventures on a global scale. Recognizing the significance of
                        solar project funding in shaping the energy landscape, we are dedicated to skillfully navigating
                        the complexities of capital allocation to maximize investor returns. Our expertise becomes
                        particularly crucial in optimizing project development by effectively managing capital costs.
                    </p>
                    <p class="mb-4">
                        <b>Tailored Approaches to Solar Funding:</b>
                        We understand that solar projects often require a strategic interplay of equity and debt. Our
                        tailored funding strategies are designed to align with the distinctive characteristics of each
                        project. By focusing on ventures that are at advanced stages of readiness, we ensure a
                        streamlined process that brings projects closer to realization. Our transparent and efficient
                        approach to fundraising ensures that your solar project receives the financial support it needs
                        to thrive.
                    </p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('contact') }}">Request a
                        callback</a>

                </div>
                <div class="col-lg-6 pt-4" style="min-height: 500px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="position-absolute img-fluid w-100 h-100"
                             src="{{asset('img/carousel/fundraising.jpg')}}"
                             style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                        <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50"
                             src="{{asset('img/services/utility-scale-solar-parks.jpg')}}"
                             style="object-fit: cover;"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</x-guest-layout>
