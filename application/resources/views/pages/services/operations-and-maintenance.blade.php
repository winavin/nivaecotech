<?php

use function Laravel\Folio\name;

name('services.show.operations-and-maintenance');
?>
<x-guest-layout><!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Operations and maintenance</h1>
            <p class="fs-5 fw-medium text-white mb-4 pb-2">
                Optimizing Longevity and Performance through Project Operations and Maintenance
            </p>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Projects Start -->
    <div class="container-fluid py-5 px-4 px-lg-0">
        <div class="row g-0">
            <div class="col-lg-3 d-none d-lg-flex">
                <div class="d-flex align-items-center justify-content-center bg-primary w-100 h-100">
                    <h1 class="display-3 text-white m-0" style="transform: rotate(-90deg);">8+ Years Experience</h1>
                </div>
            </div>
            <div class="col-md-12 col-lg-9">
                <div class="ms-lg-5 ps-lg-5">
                    <div class="text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="text-secondary text-uppercase">Explore Projects of our</h6>
                        <h1 class="mb-5">Happy Clients</h1>
                    </div>
                    <div class="owl-carousel service-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">

                        <div class="bg-light p-4">
                            <div
                                class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                                style="width: 75px; height: 75px;">
                                <img src="{{ asset('img/costomers/sanstar.jpg') }}"
                                     alt="Sanstar Limited"/>
                            </div>
                            <h4 class="mb-3">Sanstar Limited</h4>
                            <p class="text-primary fw-medium">
                                <x-icon-bolt class="text-success"/>
                                3.5 MWp
                            </p>
                            <p class="text-primary fw-medium">
                                <x-icon-map-pin class="text-success"/>
                                Shirpur, MH, IND
                            </p>
                            <a href="" class="btn bg-white text-primary w-100 mt-2">
                                Read More
                                <x-icon-arrow-right class="text-secondary ms-2"/>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Get In Touch</h6>
                    <h1>
                        India's trusted Solar Maintenance Service Provider
                    </h1>
                    <p class="mb-4">
                        In the realm of solar energy, the journey doesn't end with the installation of panels and
                        infrastructure. Instead, it marks the beginning of a crucial phase: solar project Operations and
                        Maintenance (O&M). As the sun's rays power your investment, a robust O&M strategy becomes
                        paramount to ensure long-term efficiency and returns.
                    </p>
                    <p class="mb-4">
                        Efficient O&M is the linchpin of solar project sustainability. It encompasses a comprehensive
                        range of tasks, from regular inspections and cleaning to performance analysis and
                        troubleshooting. Beyond preventing potential issues, diligent O&M enhances energy output,
                        safeguards equipment longevity, and maximizes your return on investment.
                    </p>
                    <p class="mb-4">
                        Partnering with seasoned professionals for O&M offers several advantages. Experienced teams
                        possess an acute understanding of solar technologies and are equipped to swiftly address any
                        technical or operational challenges. By conducting routine check-ups and promptly responding to
                        anomalies, they guarantee that your solar project operates at peak capacity.
                    </p>
                    <p class="mb-4">
                        A proactive O&M approach guarantees a solar project's longevity and profitability. Regular
                        assessments, fine-tuning, and swift intervention ensure consistent energy generation, enabling
                        your project to stand as a beacon of sustainable energy for years to come.
                    </p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('contact') }}">
                        Request a callback
                    </a>

                </div>
                <div class="col-lg-6 pt-4" style="min-height: 500px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="position-absolute img-fluid w-100 h-100"
                             src="{{asset('img/carousel/rooftop-solar.jpg')}}"
                             style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                        <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50"
                             src="{{asset('img/services/rooftop-solar.jpg')}}"
                             style="object-fit: cover;"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</x-guest-layout>
