<?php

use Livewire\Component;

use App\Models\Service;

new class extends Component
{
    public Service $service;

    public function mount(Service $service)
    {
        $this->service = $service;
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
                                <h2 class="title text-white">{{ $service->name }}</h2>
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <ul class="list-unstyled bread-crumb text-md-end">
                                <li><a href="/" wire:navigate>Home</a></li>
                                <li>{{ $service->name }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- bread crumb part end -->


        <!-- service details part start -->
        <section class="service-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="service-details-content">
                            <div class="service-details-image">
                                <img src="/img/services/service-details-image.png" alt="service-details-image"
                                    class="img-fluid w-100">
                            </div>

                            <h2 class="service-details-title">The best service ever we provide</h2>

                           <article class="flex flex-col gap-2">
                            {!! $service->description !!}
                           </article>

                            <div class="service-inner-details">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="service-info-item text-center">
                                            <div class="icon">
                                                <img src="/img/services/service-details-icon-1.svg"
                                                    alt="service-details-icon-1">
                                            </div>
                                            <h4 class="title">Project Name</h4>
                                            <p>Aliquam eros justo, posuere loborti vive rra laoreet matti ullamc orper
                                                poviverra Aliquam eros
                                                justo, posuere </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="service-info-item text-center">
                                            <div class="icon">
                                                <img src="/img/services/service-details-icon-2.svg"
                                                    alt="service-details-icon-2">
                                            </div>
                                            <h4 class="title">Project Name</h4>
                                            <p>Aliquam eros justo, posuere loborti vive rra laoreet matti ullamc orper
                                                poviverra Aliquam eros
                                                justo, posuere </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="service-info-item text-center">
                                            <div class="icon">
                                                <img src="/img/services/service-details-icon-3.svg"
                                                    alt="service-details-icon-3">
                                            </div>
                                            <h4 class="title">Project Name</h4>
                                            <p>Aliquam eros justo, posuere loborti vive rra laoreet matti ullamc orper
                                                poviverra Aliquam eros
                                                justo, posuere </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="service-info-item text-center">
                                            <div class="icon">
                                                <img src="/img/services/service-details-icon-4" wire:navigate
                                                    alt="service-details-icon-4">
                                            </div>
                                            <h4 class="title">Project Name</h4>
                                            <p>Aliquam eros justo, posuere loborti vive rra laoreet matti ullamc orper
                                                poviverra Aliquam eros
                                                justo, posuere </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra
                                .Aliquam eros
                                justo, posuere lobortis viverra laoreet augue mattis entum ullamcorper viverra laoreet
                                Aliquam eros
                                justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros
                                just posre
                                lobortis non, viverraAliquam eros justo</p>

                            <div class="expertise-block">
                                <h3 class="expertise-title">Your Vision Our Expertise</h3>
                                <p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra
                                    .Aliquam eros
                                    justo, posuere lobortis viverra laoreet augue mattis fermentum ullamcorper viverra
                                    lat Aliquam eros
                                    justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam
                                    eros a posuere
                                    lobortis non, viverraAliquam eros justo, posuere loborti viverra laoreet matti
                                    ullamcorper posuere
                                    vierra .Aliquam eros justo, posuere lobortis</p>

                                <div class="expertise-main">
                                    <div class="row g-5">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="expertise-item d-flex align-items-center">
                                                <div class="icon">
                                                    <img src="/img/services/expertise-item-1" wire:navigate
                                                        alt="expertise-item-1">
                                                </div>
                                                <h4 class="title">Golden Hammer</h4>
                                                <h3 class="number">01</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="expertise-item d-flex align-items-center">
                                                <div class="icon">
                                                    <img src="/img/services/expertise-item-1" wire:navigate
                                                        alt="expertise-item-1">
                                                </div>
                                                <h4 class="title">Site Preparation</h4>
                                                <h3 class="number">02</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="expertise-item d-flex align-items-center">
                                                <div class="icon">
                                                    <img src="/img/services/expertise-item-1" wire:navigate
                                                        alt="expertise-item-1">
                                                </div>
                                                <h4 class="title">Master Frame</h4>
                                                <h3 class="number">03</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="expertise-item d-flex align-items-center">
                                                <div class="icon">
                                                    <img src="/img/services/expertise-item-1" wire:navigate
                                                        alt="expertise-item-1">
                                                </div>
                                                <h4 class="title">Strong Haven</h4>
                                                <h3 class="number">04</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra
                                    .Aliquam eros
                                    justo, posuere lobortis viverra laoreet augue mattis entum ullamcorper viverra
                                    laoreet Aliquam eros
                                    justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam
                                    eros just posre
                                    lobortis non, viverraAliquam eros justo</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-right-sidebar">
                            <div class="project-title-info">
                                <h3 class="service-sidebar-title">The project is start</h3>
                                <p class="sub-title">Planing, Real Estate</p>
                                <p>Aliquam eros justo, posuere loborti vive rra laoreet matti ullamc orper poviverra
                                    Aliquam eros justo,
                                    posuere </p>
                            </div>
                            <div class="project-block">
                                <h6 class="title">Big project</h6>
                                <p>Aliquam eros justo, posuere loboa et matti ullamcorper posuere viverra.</p>
                                <ul class="list-unstyled list-info">
                                    <li><i class="far fa-check-circle"></i>
                                        Mistakes To Avoid to dum Aliquam.</li>
                                    <li><i class="far fa-check-circle"></i>
                                        Your Startup industry stan Aliquam </li>
                                    <li><i class="far fa-check-circle"></i>
                                        Knew About Fonts text posuere</li>
                                </ul>
                                <a href="contact" wire:navigate class="request-service-btn uppercaser">Request service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service details part end -->

        <!-- call to action part start -->
        <section class="call-to-action-area">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image">
                        <img src="/img/images/call-to-action-image.png" alt="call-to-action-image"
                            class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="info">
                        <div class="phone-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3 class="text-white title">Need help? Call us Today <a href="tel:+201-555-0124">+201-
                                555-0124</a></h3>
                        <p class="text-white">Lorem Ipsum is simply dummy text of the printing </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- call to action part end -->


    </main>
    <!-- main area part end -->