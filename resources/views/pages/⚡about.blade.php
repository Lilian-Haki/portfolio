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
    <section class="about-area-one without-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-image position-relative">
                        <div class="image">
                            <img src="https://images.nappy.co/photo/wz7wfLFjMDIZkMObjnTQR.jpg?width=1260" alt="about">
                        </div>
                        <div class="active-customer d-flex align-items-center">
                            <div class="icon">
                                <img src="{{ asset('img/about/active-customer-icon.svg') }}" alt="active-customer-icon">
                            </div>
                            <div class="title">
                                <h2 class="number"><span>4</span>k+</h2>
                                <p>Daily Active Users</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="about-info ms-4">
                        <div class="section-title-one">
                            <span class="sub-title uppercase">About Us</span>
                            <h2 class="title">Crafting digital experiences that drive results</h2>
                        </div>
                        <p>We are a creative digital agency specializing in designing and developing cutting-edge apps and websites. Our team transforms ideas into powerful digital solutions that engage users and grow businesses.</p>
                        <div class="about-list">
                            <div class="about-list-items d-flex">
                                <div class="icon">
                                    <i class="fas fa-angle-double-right"></i>
                                </div>
                                <div class="text">
                                    <h4 class="title">Web Development</h4>
                                    <p>We build responsive, high-performance websites using modern technologies and frameworks. From simple landing pages to complex web applications, we deliver solutions that work seamlessly across all devices.</p>
                                </div>
                            </div>
                            <div class="about-list-items d-flex">
                                <div class="icon">
                                    <i class="fas fa-angle-double-right"></i>
                                </div>
                                <div class="text">
                                    <h4 class="title">App Development</h4>
                                    <p>Our expert developers create intuitive mobile and web applications that provide exceptional user experiences. We handle everything from concept to deployment and ongoing support.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end -->

    <!-- get updates part start -->
    <section class="get-updates-area-one">
        <div class="update-area-bg-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="get-updates-info">
                            <h2 class="text-white">Sign Up For News & Get All Updates</h2>
                            <p class="text-white">Stay informed about the latest trends in digital design and development</p>
                        </div>
                    </div>
                    <div class="col-lg-4 ms-auto align-self-center">
                        <div class="contact-info d-flex align-items-center">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="text">
                                <h4 class="title">Contact with us</h4>
                                <h3 class="number"><a href="tel:(405)555-0128">(405) 555-0128</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- get updates part end -->

    <!-- working process part start -->
    <section class="working-process-area-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="section-title-one">
                        <span class="sub-title uppercase no-after dark">working process</span>
                        <h2 class="title">Innovation in digital solutions at your service</h2>
                    </div>
                    <div class="working-process-info">
                        <p>Our streamlined process ensures that every project is delivered on time and exceeds expectations. From initial discovery to final launch, we work closely with you at every step.</p>
                        <a href="blog-classic" wire:navigate class="common-btn uppercase">read More <i
                                class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 ms-auto">
                    <div class="working-process-item-two d-flex justify-content-between align-items-center">
                        <div class="info d-flex align-items-center">
                            <div class="image">
                                <img src="/img/working-process/icon-1.svg" alt="icon-1">
                            </div>
                            <div class="title">
                                <h4>Discovery & Planning</h4>
                            </div>
                        </div>
                        <div class="number">
                            <h3>01</h3>
                        </div>
                    </div>
                    <div class="working-process-item-two d-flex justify-content-between align-items-center">
                        <div class="info d-flex align-items-center">
                            <div class="image">
                                <img src="/img/working-process/icon-2.svg" alt="icon-2">
                            </div>
                            <div class="title">
                                <h4>Design & Prototyping</h4>
                            </div>
                        </div>
                        <div class="number">
                            <h3>02</h3>
                        </div>
                    </div>
                    <div class="working-process-item-two d-flex justify-content-between align-items-center">
                        <div class="info d-flex align-items-center">
                            <div class="image">
                                <img src="/img/working-process/icon-3.svg" alt="icon-3">
                            </div>
                            <div class="title">
                                <h4>Development & Launch</h4>
                            </div>
                        </div>
                        <div class="number">
                            <h3>03</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- working process part end -->

    <!-- counter part start -->
    <section class="counter-area-one">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 counter-coloumn">
                    <div class="counter-one-item without-shadow-counter d-flex align-items-center">
                        <div class="icon">
                            <img src="/img/counter/counter-primary-1.svg" alt="feature-1">
                        </div>
                        <div class="info">
                            <h2 class="counter-number"><span class="odometer" data-count="200"></span>+</h2>
                            <p>Winning Awards</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 counter-coloumn">
                    <div class="counter-one-item without-shadow-counter d-flex align-items-center">
                        <div class="icon">
                            <img src="/img/counter/counter-primary-2.svg" alt="feature-2">
                        </div>
                        <div class="info">
                            <h2 class="counter-number"><span class="odometer" data-count="550"></span>+</h2>
                            <p>Projects Completed</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 counter-coloumn">
                    <div class="counter-one-item without-shadow-counter d-flex align-items-center">
                        <div class="icon">
                            <img src="/img/counter/counter-primary-3.svg" alt="feature-3">
                        </div>
                        <div class="info">
                            <h2 class="counter-number"><span class="odometer" data-count="100"></span>+</h2>
                            <p>Client Reviews</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 counter-coloumn">
                    <div class="counter-one-item without-shadow-counter d-flex align-items-center">
                        <div class="icon">
                            <img src="/img/counter/counter-primary-4.svg" alt="feature-4">
                        </div>
                        <div class="info">
                            <h2 class="counter-number"><span class="odometer" data-count="350"></span>+</h2>
                            <p>Team Members</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter part end -->

    <!-- about us testimonial start -->
    <section class="about-testimonial-area">
        <div class="testimonial-area-bg">
            <div class="container">
                <div class="shape shape-1">
                    <svg width="100" height="75" viewBox="0 0 98 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="shape-colour" opacity="0.5"
                            d="M28 40.9062H29V39.597L27.7369 39.9415L28 40.9062ZM84 40.9062H85V39.597L83.7369 39.9415L84 40.9062ZM21 0.999994C32.0415 0.999994 41 9.95853 41 21H43C43 8.85396 33.146 -1.00001 21 -1.00001V0.999994ZM41 21V42H43V21H41ZM41 42C41 56.9739 28.7653 69 14 69V71C29.8597 71 43 58.0886 43 42H41ZM14 69C10.6148 69 8 66.3852 8 63H6C6 67.4898 9.51022 71 14 71V69ZM8 63C8 59.8131 10.635 57 14 57V55C9.49005 55 6 58.7493 6 63H8ZM14 57C22.1983 57 29 50.4374 29 42H27C27 49.3125 21.1142 55 14 55V57ZM29 42V40.9062H27V42H29ZM27.7369 39.9415C25.3699 40.587 23.2794 41 21 41V43C23.5331 43 25.8176 42.538 28.2631 41.871L27.7369 39.9415ZM21 41C9.73979 41 1 32.2602 1 21H-1C-1 33.3648 8.63522 43 21 43V41ZM1 21C1 9.95171 9.74658 0.999994 21 0.999994V-1.00001C8.62842 -1.00001 -1 8.86078 -1 21H1ZM97 21V42H99V21H97ZM97 42C97 56.9739 84.7653 69 70 69V71C85.8597 71 99 58.0886 99 42H97ZM70 69C66.6148 69 64 66.3852 64 63H62C62 67.4898 65.5102 71 70 71V69ZM64 63C64 59.8131 66.635 57 70 57V55C65.4901 55 62 58.7493 62 63H64ZM70 57C78.1983 57 85 50.4374 85 42H83C83 49.3125 77.1142 55 70 55V57ZM85 42V40.9062H83V42H85ZM83.7369 39.9415C81.3699 40.587 79.2794 41 77 41V43C79.5331 43 81.8176 42.538 84.2631 41.871L83.7369 39.9415ZM77 41C65.7398 41 57 32.2602 57 21H55C55 33.3648 64.6352 43 77 43V41ZM57 21C57 9.95171 65.7466 0.999994 77 0.999994V-1.00001C64.6284 -1.00001 55 8.86078 55 21H57ZM77 0.999994C88.0415 0.999994 97 9.95853 97 21H99C99 8.85396 89.146 -1.00001 77 -1.00001V0.999994Z" />
                    </svg>
                </div>
                <div class="shape shape-2">
                    <svg width="100" height="75" viewBox="0 0 98 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="shape-colour" opacity="0.5"
                            d="M28 40.9062H29V39.597L27.7369 39.9415L28 40.9062ZM84 40.9062H85V39.597L83.7369 39.9415L84 40.9062ZM21 0.999994C32.0415 0.999994 41 9.95853 41 21H43C43 8.85396 33.146 -1.00001 21 -1.00001V0.999994ZM41 21V42H43V21H41ZM41 42C41 56.9739 28.7653 69 14 69V71C29.8597 71 43 58.0886 43 42H41ZM14 69C10.6148 69 8 66.3852 8 63H6C6 67.4898 9.51022 71 14 71V69ZM8 63C8 59.8131 10.635 57 14 57V55C9.49005 55 6 58.7493 6 63H8ZM14 57C22.1983 57 29 50.4374 29 42H27C27 49.3125 21.1142 55 14 55V57ZM29 42V40.9062H27V42H29ZM27.7369 39.9415C25.3699 40.587 23.2794 41 21 41V43C23.5331 43 25.8176 42.538 28.2631 41.871L27.7369 39.9415ZM21 41C9.73979 41 1 32.2602 1 21H-1C-1 33.3648 8.63522 43 21 43V41ZM1 21C1 9.95171 9.74658 0.999994 21 0.999994V-1.00001C8.62842 -1.00001 -1 8.86078 -1 21H1ZM97 21V42H99V21H97ZM97 42C97 56.9739 84.7653 69 70 69V71C85.8597 71 99 58.0886 99 42H97ZM70 69C66.6148 69 64 66.3852 64 63H62C62 67.4898 65.5102 71 70 71V69ZM64 63C64 59.8131 66.635 57 70 57V55C65.4901 55 62 58.7493 62 63H64ZM70 57C78.1983 57 85 50.4374 85 42H83C83 49.3125 77.1142 55 70 55V57ZM85 42V40.9062H83V42H85ZM83.7369 39.9415C81.3699 40.587 79.2794 41 77 41V43C79.5331 43 81.8176 42.538 84.2631 41.871L83.7369 39.9415ZM77 41C65.7398 41 57 32.2602 57 21H55C55 33.3648 64.6352 43 77 43V41ZM57 21C57 9.95171 65.7466 0.999994 77 0.999994V-1.00001C64.6284 -1.00001 55 8.86078 55 21H57ZM77 0.999994C88.0415 0.999994 97 9.95853 97 21H99C99 8.85396 89.146 -1.00001 77 -1.00001V0.999994Z" />
                    </svg>
                </div>
                <div class="about-testimonial-slider">
                    <div class="slider-item">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="testimonial-image text-center">
                                    <img src="/img/testimonial/testimonial-avatar-2.png" alt="testimonial-avatar-2">
                                </div>
                                <div class="testimonial-info text-center">
                                    <h4 class="title">Cameron Williamson</h4>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>Working with this digital agency was an absolute pleasure. They transformed our vision into a stunning website that exceeded all expectations. The team's attention to detail and technical expertise is unmatched. Highly recommended for anyone looking to elevate their digital presence!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="testimonial-image text-center">
                                    <img src="/img/testimonial/testimonial-avatar-2.png" alt="testimonial-avatar-2">
                                </div>
                                <div class="testimonial-info text-center">
                                    <h4 class="title">Sarah Johnson</h4>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>The mobile app they developed for our business has been a game-changer. From the initial consultation to the final product, their professionalism and creativity shone through. They truly understand what it takes to build engaging digital experiences.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us testimonial end -->

    <!-- call to action part start -->
    <section class="call-to-action-area">
        <div class="row">
            <div class="col-lg-6">
                <div class="image">
                    <img src="/img/images/call-to-action-image.png" alt="call-to-action-image" class="img-fluid w-100">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="info">
                    <div class="phone-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h3 class="text-white title">Need help? Call us Today <a href="tel:+201-555-0124">+201-
                            555-0124</a></h3>
                    <p class="text-white">Let's discuss your next digital project and bring your ideas to life</p>
                </div>
            </div>
        </div>
    </section>
    <!-- call to action part end -->


</main>
<!-- main area part end -->
