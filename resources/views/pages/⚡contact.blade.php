<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<!-- main area part start -->

    <main>

        <!-- bread crumb part start -->
        <section class="breadcrumb-area" data-background="assets/img/bg/bread-crumb-bg.png">
            <div class="container">
                <div class="breadcrumb-content">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <div class="breadcrumb-title">
                                <h2 class="title text-white">Contact</h2>
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <ul class="list-unstyled bread-crumb text-md-end">
                                <li><a href="/" wire:navigate>Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- bread crumb part end -->

        <!-- contact form start -->
        <section class="contact-form-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title-one">
                            <span class="sub-title uppercase">Send us a message</span>
                            <h2 class="title">We're here to help you</h2>
                        </div>
                        <div class="short-description">
                            <p>Feel free to reach out to us with any questions or concerns. We're here to assist you!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <input type="text" placeholder="Your name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <input type="text" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <input type="text" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <textarea placeholder="Messege"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="submit-btn uppercase">Send a messege</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-information">
                            <div class="contact-info-item">
                                <ul class="list-unstyled">
                                    <li class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </li>
                                    <li class="info">
                                        <h4 class="title">Phone number</h4>
                                        <p>(+254) 757-151-520</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-info-item">
                                <ul class="list-unstyled">
                                    <li class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </li>
                                    <li class="info">
                                        <h4 class="title">Email Address</h4>
                                        <p>info@gmail.com</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-info-item">
                                <ul class="list-unstyled">
                                    <li class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </li>
                                    <li class="info">
                                        <h4 class="title">Address</h4>
                                        <p>Nairobi, Kenya </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact form end -->

        <!-- contact map start -->
        <div class="contact-map-area">
            <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.332792000835!2d144.96011341744386!3d-37.805673299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sbd!4v1685027435635!5m2!1sen!2sbd"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <!-- contact map end -->

        


    </main>
    <!-- main area part end -->