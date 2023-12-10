<?php

use function Laravel\Folio\name;

name('welcome');
?>
<x-guest-layout>
    <x-slot name="title">Niva Ecotech</x-slot>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid"
                     src="{{asset('img/carousel/utility-scale-solar-parks.jpg')}}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                     style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                    Premium Services
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">
                                    Utility-Scale Solar parks
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">
                                    Utility-scale solar parks are large-scale solar energy installations that generate
                                    electricity from sunlight and contribute significantly to renewable energy
                                    production.
                                </p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                                    Read More
                                </a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">
                                    Consult
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('img/carousel/rooftop-solar.jpg')}}"
                     alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                     style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                    Premium Services
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">
                                    On-grid Rooftop Solar
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">
                                    On-grid rooftop solar systems utilize building rooftops to generate clean energy,
                                    connected to the grid, fostering sustainability, savings, and environmental
                                    contribution.
                                </p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                                    Read More
                                </a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">
                                    Consult
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid"
                     src="{{asset('img/carousel/operations-and-maintenance.jpg')}}"
                     alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                     style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                    Premium Services
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">
                                    Solar Operations and Maintenance
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">
                                    Solar Operations and Maintenance involves regular monitoring, upkeep, and repair of
                                    solar installations to ensure optimal performance, longevity, and energy output.
                                </p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                                    Read More
                                </a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">
                                    Consult
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid"
                     src="{{asset('img/carousel/fundraising.jpg')}}"
                     alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                     style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                    Premium Services
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">
                                    Fundraising
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">
                                    Fundraising for solar projects involves seeking financial support from investors,
                                    organizations, and communities to fund the development and implementation of solar
                                    energy initiatives.
                                </p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                                    Read More
                                </a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">
                                    Consult
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid"
                     src="{{asset('img/carousel/consulting.jpg')}}"
                     alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                     style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                    Premium Services
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">
                                    Project Consulting
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">
                                    Solar project consulting offers specialized expertise in planning, designing, and
                                    managing solar initiatives, ensuring effective implementation and optimal
                                    performance.
                                </p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                                    Read More
                                </a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">
                                    Consult
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100"
                             src="{{asset('img/services/utility-scale-solar-parks.jpg')}}"
                             alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0">Utility Scale Solar Parks</h5>
                        <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href="">
                            <x-icon-arrow-right/>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100"
                             src="{{asset('img/services/rooftop-solar.jpg')}}" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0">Rooftop Solar EPC</h5>
                        <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href="">
                            <x-icon-arrow-right/>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100"
                             src="{{asset('img/services/operations-and-maintenance.jpg')}}"
                             alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0">Operations and Maintenance</h5>
                        <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href="">
                            <x-icon-arrow-right/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp " data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Why Choose Niva Ecotech?</h6>
                    <h1 class="mb-4">
                        For financial gains through cost-effective solutions, time-saving convenience, and a
                        future-proof investment in renewable energy.
                    </h1>
                    <p class="mb-4">
                        At Niva Ecotech, we understand that the renewable energy landscape is vast and
                        dynamic. Here's why we stand out as your ideal partner in harnessing the power of sustainable
                        energy solutions:
                    </p>
                    <p>
                        <x-icon-check class="text-success me-3"/>
                        <span class="fw-medium text-primary me-3">Expertise that Matters:</span>
                        Our experienced team brings a wealth of knowledge to the table, ensuring that your renewable
                        energy project is in capable hands from conception to completion.
                    </p>
                    <p>
                        <x-icon-check class="text-success me-3"/>
                        <span class="fw-medium text-primary me-3">Comprehensive Solution:</span>
                        From project planning and documentation to on-grid tie-ups and ongoing maintenance, we offer a
                        full-suite service that covers every facet of solar energy development.
                    </p>
                    <p>
                        <x-icon-check class="text-success me-3"/>
                        <span class="fw-medium text-primary me-3">Proven Track Record:</span>
                        With a portfolio of successful projects, Niva Ecotech has a track record that speaks to our
                        commitment to delivering excellence and exceeding expectations.
                    </p>
                    <p>
                        <x-icon-check class="text-success me-3"/>
                        <span class="fw-medium text-primary me-3">Client-Centric Approach:</span>
                        Your needs are at the heart of everything we do. We tailor our services to meet your unique
                        requirements, ensuring that you receive a solution that truly fits.
                    </p>
                    <p>
                        <x-icon-check class="text-success me-3"/>
                        <span class="fw-medium text-primary me-3">Turnkey Convenience:</span>
                        Leave the complexities to us. Our turnkey solutions free you from the technicalities, allowing
                        you to focus on what you do best while we handle the rest.
                    </p>
                    <p>
                        <x-icon-check class="text-success me-3"/>
                        <span class="fw-medium text-primary me-3">Transparent Communication:</span>
                        We believe in open and honest communication. Throughout the project, we keep you informed,
                        enabling you to make well-informed decisions.
                    </p>

                    <div class="bg-primary d-flex align-items-center p-4 mt-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                             style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt fa-2x text-primary"></i>
                        </div>
                        <div class="ms-3">
                            <p class="fs-5 fw-medium mb-2 text-white">
                                Let's power a brighter future together.
                            </p>
                            <h3 class="m-0 text-secondary">+91 989 099 3201</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-4" style="min-height: 500px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="position-absolute img-fluid w-100 h-100"
                             src="{{asset('img/about/about-1.jpg')}}"
                             style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                        <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50"
                             src="{{asset('img/about/about-2.jpg')}}"
                             style="object-fit: cover;"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <x-icon-calendar class="text-white mb-3" width="40" height="40"/>
                    <h2 class="text-white mb-2" data-toggle="counter-up">8</h2>
                    <p class="text-white mb-0">Years Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <x-icon-bolt class="text-white mb-3" width="40" height="40"/>
                    <h2 class="text-white mb-2" data-toggle="counter-up">2000</h2>
                    <p class="text-white mb-0">Mega Watt</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <x-icon-user-heart class="text-white mb-3" width="40" height="40"/>
                    <h2 class="text-white mb-2" data-toggle="counter-up">25</h2>
                    <p class="text-white mb-0">Satisfied Clients</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <x-icon-solar-panel class="text-white mb-3" width="40" height="40"/>
                    <h2 class="text-white mb-2" data-toggle="counter-up">40</h2>
                    <p class="text-white mb-0">Complete Projects</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


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
                        <h6 class="text-secondary text-uppercase">Ongoing Projects</h6>
                        <h1 class="mb-5">Explore Our Projects</h1>
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


    <!-- Booking Start -->
    <div class="container-fluid my-5 px-0">
        <div class="video wow fadeInUp" data-wow-delay="0.1s"
             style="background: linear-gradient(rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url({{ asset('img/carousel/consulting.jpg') }}) center center no-repeat; background-attachment: fixed;">

            <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content rounded-0">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- 16:9 aspect ratio -->
                            <div class="ratio ratio-16x9">
                                <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                                        allowscriptaccess="always"
                                        allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="text-white mb-4">Consultation always works.</h1>
            <h3 class="text-white mb-0">feel free to consult with our expert team members regarding solar
                investments.</h3>
        </div>
        <div class="container position-relative wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -6rem;">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bg-light text-center p-5">
                        <h1 class="mb-4">Book For A Call</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name"
                                           style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email"
                                           style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Solar Park</option>
                                        <option value="2">Rooftop Solar</option>
                                        <option value="3">Maintenance of Existing Project</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text"
                                               class="form-control border-0 datetimepicker-input"
                                               placeholder="Contact Number"
                                               style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Request"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Request a callback</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Our Technicians</h6>
                <h1 class="mb-5">Our Expert Technicians</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid"
                                 src="{{asset('img/team/placeholder.jpg')}}" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0">Ajay Mundada</h5>
                                <small>Managing Director & CEO</small>
                            </div>
                            <div class="bg-primary">
                                <a class="btn btn-square mx-1" href="">
                                    <x-icon-brand-linkedin/>
                                </a>
                                <a class="btn btn-square mx-1" href="">
                                    <x-icon-brand-facebook/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid"
                                 src="{{asset('img/team/placeholder.jpg')}}" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0">Ayush Agarwal</h5>
                                <small>Executive Director</small>
                            </div>
                            <div class="bg-primary">
                                <a class="btn btn-square mx-1" href="">
                                    <x-icon-brand-linkedin/>
                                </a>
                                <a class="btn btn-square mx-1" href="">
                                    <x-icon-brand-facebook/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid"
                                 src="{{asset('img/team/placeholder.jpg')}}" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0">Shashank Sapre</h5>
                                <small>VP Oprations and Marketing</small>
                            </div>
                            <div class="bg-primary">
                                <a class="btn btn-square mx-1" href="">
                                    <x-icon-brand-linkedin/>
                                </a>
                                <a class="btn btn-square mx-1" href="">
                                    <x-icon-brand-facebook/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid"
                                 src="{{asset('img/team/placeholder.jpg')}}" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0">Sanosh Joshi</h5>
                                <small>VP Technical and Executive</small>
                            </div>
                            <div class="bg-primary">
                                <a class="btn btn-square mx-1" href="">
                                    <x-icon-brand-linkedin/>
                                </a>
                                <a class="btn btn-square mx-1" href="">
                                    <x-icon-brand-facebook/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid"
                                 src="{{asset('img/team/placeholder.jpg')}}" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0">Anirudhha Pandit</h5>
                                <small>VP Administration and Procurement</small>
                            </div>
                            <div class="bg-primary">
                                <a class="btn btn-square mx-1" href="">
                                    <x-icon-brand-linkedin/>
                                </a>
                                <a class="btn btn-square mx-1" href="">
                                    <x-icon-brand-facebook/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid"
                                 src="{{asset('img/team/placeholder.jpg')}}" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0">Sushil Patil</h5>
                                <small>VP Finance and Accounts</small>
                            </div>
                            <div class="bg-primary">
                                <a class="btn btn-square mx-1" href="">
                                    <x-icon-brand-linkedin/>
                                </a>
                                <a class="btn btn-square mx-1" href="">
                                    <x-icon-brand-facebook/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">Testimonial</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">
                            Niva Ecotech's innovative solar solutions elevated our business. Their professional team
                            managed the process seamlessly, delivering remarkable results.
                        </p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2"
                         src="{{ asset('img/testimonials/placeholder.jpg')}}"
                         style="width: 80px; height: 80px;">
                    <div class="mb-2">
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                    </div>
                    <h5 class="mb-1">Client Name</h5>
                    <p class="m-0">Designation, Company Name</p>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">
                            Selecting Niva Ecotech was pivotal. Their expertise shone through in every step – planning,
                            execution, and post-service. Our solar venture thrived under their guidance.
                        </p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2"
                         src="{{ asset('img/testimonials/placeholder.jpg')}}"
                         style="width: 80px; height: 80px;">
                    <div class="mb-2">
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                    </div>
                    <h5 class="mb-1">Client Name</h5>
                    <p class="m-0">Designation, Company Name</p>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">
                            Niva Ecotech orchestrated a seamless solar transition, demonstrating meticulous planning and
                            ongoing support impressed us. 100% Recommended.
                        </p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2"
                         src="{{ asset('img/testimonials/placeholder.jpg')}}"
                         style="width: 80px; height: 80px;">
                    <div class="mb-2">
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                    </div>
                    <h5 class="mb-1">Client Name</h5>
                    <p class="m-0">Designation, Company Name</p>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">
                            Niva Ecotech embodies efficiency, knowledge, and client-centricity. They surpassed our
                            expectations, orchestrating a smooth solar integration.
                        </p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2"
                         src="{{ asset('img/testimonials/placeholder.jpg')}}"
                         style="width: 80px; height: 80px;">
                    <div class="mb-2">
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                    </div>
                    <h5 class="mb-1">Client Name</h5>
                    <p class="m-0">Designation, Company Name</p>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">
                            A dept team facilitated a seamless solar implementation, navigating complexities
                            effortlessly. A trustworthy partner for businesses.
                        </p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2"
                         src="{{ asset('img/testimonials/placeholder.jpg')}}"
                         style="width: 80px; height: 80px;">
                    <div class="mb-2">
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                    </div>
                    <h5 class="mb-1">Client Name</h5>
                    <p class="m-0">Designation, Company Name</p>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">
                            Niva Ecotech's meticulous planning, flawless installation, and dedicated support transformed
                            our solar investment into a resounding success.
                        </p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2"
                         src="{{ asset('img/testimonials/placeholder.jpg')}}"
                         style="width: 80px; height: 80px;">
                    <div class="mb-2">
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                    </div>
                    <h5 class="mb-1">Client Name</h5>
                    <p class="m-0">Designation, Company Name</p>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">
                            Niva handled our solar project from permits to maintenance seamlessly. We're delighted with
                            the results and ongoing support.
                        </p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2"
                         src="{{ asset('img/testimonials/placeholder.jpg')}}"
                         style="width: 80px; height: 80px;">
                    <div class="mb-2">
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                    </div>
                    <h5 class="mb-1">Client Name</h5>
                    <p class="m-0">Designation, Company Name</p>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">
                            Niva Ecotech's transparent communication simplified our solar transition. Their industry
                            partnerships make them stand out remarkably.
                        </p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2"
                         src="{{ asset('img/testimonials/placeholder.jpg')}}"
                         style="width: 80px; height: 80px;">
                    <div class="mb-2">
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                    </div>
                    <h5 class="mb-1">Client Name</h5>
                    <p class="m-0">Designation, Company Name</p>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">
                            Niva Ecotech's expertise eased our transition to solar. They navigated complexities
                            seamlessly. A reliable partner indeed.
                        </p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2"
                         src="{{ asset('img/testimonials/placeholder.jpg')}}"
                         style="width: 80px; height: 80px;">
                    <div class="mb-2">
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                    </div>
                    <h5 class="mb-1">Client Name</h5>
                    <p class="m-0">Designation, Company Name</p>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">
                            Niva Ecotech embodies excellence. Their turnkey service, industry prowess, and commitment to
                            a greener future set them apart. A truly commendable experience.
                        </p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2"
                         src="{{ asset('img/testimonials/placeholder.jpg')}}"
                         style="width: 80px; height: 80px;">
                    <div class="mb-2">
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                        <x-icon-star class=" text-secondary"/>
                    </div>
                    <h5 class="mb-1">Client Name</h5>
                    <p class="m-0">Designation, Company Name</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
</x-guest-layout>
