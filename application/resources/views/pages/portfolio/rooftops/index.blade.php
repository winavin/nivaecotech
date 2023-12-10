<?php

use function Laravel\Folio\name;

name('portfolio.rooftops.index');
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

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Our happy clients and their</h6>
                <h1 class="mb-5">Rooftop Installations</h1>
            </div>
            <div class="row g-4">

                @for($x = 1; $x <= 20; $x++)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img/services/rooftop-solar.jpg') }}" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0">Sanstar Limited</h5>
                                <div><x-icon-map-pin/>Sirpur, MH, IND</div>
                            </div>
                            <div class="bg-primary text-white">
                                <div><x-icon-bolt/>3.5 MWp</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor

            </div>
        </div>
    </div>
    <!-- Team End -->

</x-guest-layout>
