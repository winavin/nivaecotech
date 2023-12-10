<?php

use function Laravel\Folio\name;

name('contact');
?>
<x-guest-layout>
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Get In Touch</h6>
                    <h1>
                        Headquarter
                    </h1>
                    <div>
                        <x-icon-user class="me-3"/>
                        Ajay Mundada
                    </div>
                    <div>
                        <x-icon-device-mobile class="me-3"/>
                        +91 989 099 3201
                    </div>
                    <div class="mb-2">
                        <x-icon-mail class="me-3"/>
                        info@nivaecotech.com
                    </div>
                    <div class="mb-2">
                        16/6 Pinnac Apartment, Ground Floor, Vakil Nagar, Erandwane, Pune, Maharashtra, India, 411004
                    </div>
                    <iframe class="position-relative w-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d236.4787884290569!2d73.82804487941385!3d18.499025950913175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bfeddba2db29%3A0x18df71f0e665f5fd!2sPinnac%20Apartment!5e0!3m2!1sen!2sin!4v1693224969540!5m2!1sen!2sin"
                            style="height: 300px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">

                    </iframe>

                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message"
                                                  style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</x-guest-layout>
