<?php

use Livewire\Component;

new class extends Component {
    public function render()
    {
        return $this->view()
            ->title('About Us');
    }
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
                            <h2 class="title text-white">About Us</h2>
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <ul class="list-unstyled bread-crumb text-md-end">
                            <li><a href="/" wire:navigate>Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- bread crumb part end -->

    <!-- about us part start -->
    <section class="about-area-one without-bg mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-image position-relative">
                        <div class="image">
                            <img src="https://images.nappy.co/photo/wz7wfLFjMDIZkMObjnTQR.jpg?width=1260" alt="about">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="about-info ms-4">
                        <div class="section-title-one">
                            <span class="sub-title uppercase">About Us</span>
                            <h2 class="title">Transforming ideas into scalable digital products.</h2>
                        </div>
                        <p>We are a forward‑thinking technology solutions company dedicated to helping businesses thrive in the digital era. Our team of developers, designers, and strategists work together to deliver scalable, user‑friendly, and future‑ready products.</p>
                        <div class="about-list">
                            <div class="about-list-items d-flex mt-2">
                                <div class="icon">
                                    <i class="fas fa-angle-double-right"></i>
                                </div>
                                <div class="text">
                                        <h4 class="title">Mission</h4>
                                        <p>Deliver innovative, reliable, and user‑friendly technology solutions..</p>
                                </div>
                            </div>
                            <div class="about-list-items d-flex mt-1">
                                <div class="icon">
                                    <i class="fas fa-angle-double-right"></i>
                                </div>
                                <div class="text">
                                        <h4 class="title">Vision</h4>
                                        <p> Empower businesses through digital transformation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end -->

    

   <!-- working process part start -->
        <section class="working-process-area-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title-one">
                            <span class="sub-title uppercase no-after dark">what we offer</span>
                            <h2 class="title">Empowering Businesses Through Technology</h2>
                        </div>
                        <div class="working-process-info m-4 ">
                            <p class="">Creating solutions that connect, inspire, and scale globally.</p>
                            <p>-Web Development: Custom websites, e‑commerce platforms, and dashboards.</p>
                            <p>-Mobile Apps: Native and cross‑platform apps tailored to business needs.</p>
                            <p>-UI/UX Design: Intuitive, modern, and accessible user experiences.</p>
                            <p>-Branding & Graphics: Logos, brand identity, and digital marketing assets.</p>
                            <p>-Cloud & Integrations: Payment gateways, API integrations, and cloud hosting.</p>
                            <a href="about" wire:navigate class="common-btn uppercase">read More <i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 ms-auto">
                        <div class="working-process-item d-flex justify-content-between align-items-center">
                            <div class="info d-flex align-items-center">
                                <div class="image">
                                    <img src="/img/working-process/icon-1.svg" alt="icon-1">
                                </div>
                                <div class="title">
                                    <h4>Web Development</h4>
                                </div>
                            </div>
                            <div class="number">
                                <h3>01</h3>
                            </div>
                        </div>
                        <div class="working-process-item d-flex justify-content-between align-items-center">
                            <div class="info d-flex align-items-center">
                                <div class="image">
                                    <img src="/img/working-process/icon-2.svg" alt="icon-2">
                                </div>
                                <div class="title">
                                    <h4>Mobile Applications</h4>
                                </div>
                            </div>
                            <div class="number">
                                <h3>02</h3>
                            </div>
                        </div>
                        <div class="working-process-item d-flex justify-content-between align-items-center">
                            <div class="info d-flex align-items-center">
                                <div class="image">
                                    <img src="/img/working-process/icon-3.svg" alt="icon-3">
                                </div>
                                <div class="title">
                                    <h4>UI/UX Design</h4>
                                </div>
                            </div>
                            <div class="number">
                                <h3>03</h3>
                            </div>
                        </div>
                        <div class="working-process-item d-flex justify-content-between align-items-center">
                            <div class="info d-flex align-items-center">
                                <div class="image">
                                    <img src="/img/working-process/icon-3.svg" alt="icon-3">
                                </div>
                                <div class="title">
                                    <h4>IT Consulting</h4>
                                </div>
                            </div>
                            <div class="number">
                                <h3>04</h3>
                            </div>
                        </div>
                        <div class="working-process-item d-flex justify-content-between align-items-center">
                            <div class="info d-flex align-items-center">
                                <div class="image">
                                    <img src="/img/working-process/icon-3.svg" alt="icon-3">
                                </div>
                                <div class="title">
                                    <h4>Cloud & Integrations</h4>
                                </div>
                            </div>
                            <div class="number">
                                <h3>05</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- working process part end -->

   <!-- counter part start -->
        <section class="counter-area-one m-4">
            <div class="container">
                <div class="row g-4 g-lg-0">
                    <div class="col-sm-6 col-lg-4">
                        <div class="counter-one-item d-flex align-items-center">
                            <div class="icon">
                                <img src="/img/counter/counter-1.svg" alt="feature-1">
                            </div>
                            <div class="info">
                                <h2 class="counter-number"><span class="odometer" data-count="50"></span>+</h2>
                                <p>Projects Delivered</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="counter-one-item d-flex align-items-center">
                            <div class="icon">
                                <img src="/img/counter/counter-2.svg" alt="feature-2">
                            </div>
                            <div class="info">
                                <h2 class="counter-number"><span class="odometer" data-count="20"></span>+</h2>
                                <p>Satisfied Clients</p>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-sm-6 col-lg-4">
                        <div class="counter-one-item d-flex align-items-center">
                            <div class="icon">
                                <img src="/img/counter/counter-4.svg" alt="feature-4">
                            </div>
                            <div class="info">
                                <h2 class="counter-number"><span class="odometer" data-count="10"></span>+</h2>
                                <p>Active Team Members</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter part end -->


</main>
<!-- main area part end -->
