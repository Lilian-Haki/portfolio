<?php

use Livewire\Component;

use App\Models\Project;
use App\Models\Category;
use App\Models\Service;

new class extends Component {
    public array $projects;
    public array $categories;
    public array $services;

    public function mount()
    {
        $this->projects   = Project::latest()->take(3)->get()->toArray();
        $this->categories = Category::latest()->take(6)->get()->toArray();
        $this->services   = Service::latest()->take(6)->get()->toArray();
    }
};
?>

<header class="header-area-one" id="sticky-header">
    <nav class="navbar navbar-expand-lg d-none d-lg-block">
        <div class="container-fluid">
            <a class="navbar-brand me-0" href="/" wire:navigate>
                <img src="/img/logo/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/" wire:navigate>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about" wire:navigate>About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services <i class="fas fa-chevron-down"></i></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="/services" wire:navigate>All Services</a></li>
                            @foreach ($services as $service)
                                <li><a href="/services/{{ $service['slug'] }}" wire:navigate>{{ $service['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects <i class="fas fa-chevron-down"></i></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="/portfolio" wire:navigate>All Projects</a></li>
                            @foreach ($projects as $project)
                                <li><a href="/projects/{{ $project['slug'] }}" wire:navigate>{{ $project['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="/blog" wire:navigate>Blog</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="/contact" wire:navigate>Contact</a>
                    </li>
                </ul>
                <div class="header-right-info d-flex align-items-center">
                    <div class="social">
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="help-number d-flex align-items-center">
                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="info">
                            <p>Have any enquiries?</p>
                            <h6>
                                <a href="tel:(+254) 757-151-520">
                                   (+254) 757-151-520
                                </a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- mobile navbar part start -->
    <div class="mobile-menu-area d-block d-lg-none">
        <div class="mobile-topbar">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <img src="/img/logo/logo.png" alt="logo">
                    </div>
                    <div class="bars">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay"></div>
        <div class="mobile-menu-main">
            <div class="logo">
                <a href="/" wire:navigate><img src="/img/logo/logo.png" alt="logo"></a>
            </div>
            <div class="close-mobile-menu"><i class="fas fa-times"></i></div>
            <div class="menu-body">
                <div class="menu-list">
                    <ul class="list-unstyled">
                        <li class="sub-mobile-menu">
                            <a href="#">Home <i class="fas fa-chevron-down float-end"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="/" wire:navigate>Home One</a></li>
                                <li><a href="index-3" wire:navigate>Home Two</a></li>
                            </ul>
                        </li>
                        <li class="sub-mobile-menu">
                            <a href="about" wire:navigate>About Us</a>
                        </li>
                        <li class="sub-mobile-menu">
                            <a href="#">Services <i class="fas fa-chevron-down float-end"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="services" wire:navigate>Service Single</a></li>
                                <li><a href="service-details" wire:navigate>Service Details</a></li>
                            </ul>
                        </li>
                        <li class="sub-mobile-menu">
                            <a href="#">Projects <i class="fas fa-chevron-down float-end"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="project" wire:navigate>Projects</a></li>
                                <li><a href="project-details" wire:navigate>Project Details</a></li>
                            </ul>
                        </li>
                        <li class="sub-mobile-menu">
                            <a href="#">Blog <i class="fas fa-chevron-down float-end"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="blog-classic" wire:navigate>Blog Classic</a></li>
                                <li><a href="blog-details" wire:navigate>Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="sub-mobile-menu"><a href="#">Page <i class="fas fa-chevron-down float-end"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="team" wire:navigate>team</a></li>
                                <li><a href="team-details" wire:navigate>Team Single</a></li>
                            </ul>
                        </li>
                        <li class="sub-mobile-menu">
                            <a href="contact" wire:navigate>Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="social-icon">
                <ul class="list-unstyled">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- mobile navbar part end -->
</header>
