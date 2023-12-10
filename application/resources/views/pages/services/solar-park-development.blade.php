<?php

use function Laravel\Folio\name;

name('services.show.solar-park-development');
?>
<x-guest-layout><!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Utility Scale Solar Parks Development</h1>
            <p class="fs-5 fw-medium text-white mb-4 pb-2">
                We are dedicated to crafting vast solar parks that elevate energy generation to new height.
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
                        India's trusted solar park developer
                    </h1>
                    <p class="mb-4 text">
                        Today's business landscape is marked by a resounding commitment to renewable energy sourcing,
                        with a particular emphasis on ambitious global initiatives like RE100. While the integration of
                        rooftop and distributed solar solutions offers an excellent starting point, many enterprises
                        find themselves constrained by limited on-site space, hindering their ability to establish
                        comprehensive power plants capable of meeting substantial energy demands.
                    </p>
                    <p class="mb-4">
                        Enter grid-connected, or 'Open Access,' solar power facilitated by offsite Solar Farms — a
                        dynamic solution to this challenge. By seamlessly delivering large-scale energy through the
                        grid, this approach enables businesses to satisfy up to 100% of their energy requirements. This
                        transformative strategy has already materialized for notable corporations such as Adobe India,
                        who effectively power their Bangalore facility with 100% renewable energy sourced from solar
                        farms in Karnataka.
                    </p>
                    <p class="mb-4">
                        For businesses, the adoption of renewable energy strategies achieves a dual-fold objective. It
                        not only translates to significant cost savings on electricity but also propels strides toward
                        the coveted goal of 100% renewable energy sourcing. Open access solar power presents an
                        increasingly popular avenue, granting enterprises the opportunity to fulfill their entire
                        electricity needs at tariffs that undercut prevailing grid electricity rates. Furthermore, these
                        agreements ensure price stability for the next two to three decades, cementing a secure and
                        sustainable energy future.
                    </p>
                    <p class="mb-4">
                        In essence, Solar Park Development, also known as "Open Source Utility Scale Solar Farms," is a
                        beacon of progress in the realm of sustainable energy solutions. It offers businesses an
                        instrumental means to revolutionize their energy sourcing paradigm, transcending space
                        constraints and fostering a cost-effective transition toward a greener, more sustainable future.
                    </p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('contact') }}">
                        Request a callback
                    </a>

                </div>
                <div class="col-lg-6 pt-4" style="min-height: 500px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="position-absolute img-fluid w-100 h-100"
                             src="{{asset('img/carousel/utility-scale-solar-parks.jpg')}}"
                             style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                        <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50"
                             src="{{asset('img/services/utility-scale-solar-parks.jpg')}}"
                             style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</x-guest-layout>
