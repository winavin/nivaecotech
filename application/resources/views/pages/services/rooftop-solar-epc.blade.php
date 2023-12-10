
<?php

use function Laravel\Folio\name;

name('services.show.rooftop-solar-epc');
?>
<x-guest-layout>
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Rooftop Solar Solutions</h1>
            <p class="fs-5 fw-medium text-white mb-4 pb-2">
                Leveraging Rooftop Space for Efficient Electricity Production in Industries and Residential Societies.
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
                        India's trusted rooftop solar developer
                    </h1>
                    <p class="mb-4 text">Niva Ecotech stands as a trailblazing force, having orchestrated the seamless
                        installation of more than 300 MW of transformative rooftop solar projects for some of India's
                        most esteemed enterprises and prominent educational institutions. Our commitment is rooted in a
                        simple yet profound concept: the conversion of idle rooftop space into a dynamic source of
                        electricity generation and revenue accumulation.
                    </p>
                    <p class="mb-4">
                        Across diverse industries, the potential for untapped rooftop space is striking. It is within
                        this overlooked expanse that Niva Ecotech sees the canvas for innovation and sustainability. By
                        seamlessly integrating solar power infrastructure, we offer a tangible solution for businesses
                        and residential societies to unlock the latent value of their rooftops. This metamorphosis not
                        only empowers them to become active participants in the clean energy transition but also
                        presents a substantial financial advantage.
                    </p>
                    <p class="mb-4">
                        The advantages are multifaceted. As solar power plants find their place atop these previously
                        underutilized surfaces, businesses can experience a remarkable reduction in energy expenditures,
                        often ranging from 30% to 60%. Beyond mere cost savings, this renewable energy initiative
                        contributes to environmental stewardship, enhancing corporate social responsibility profiles.
                        Niva Ecotech envisions a future where rooftops cease to be dormant spaces, but rather vibrant
                        contributors to sustainable growth, seamlessly intertwining economic prudence with ecological
                        mindfulness.
                    </p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('contact') }}">Request a
                        callback</a>

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
