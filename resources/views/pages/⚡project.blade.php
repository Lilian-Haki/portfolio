<?php

use Livewire\Component;

use App\Models\Project;

new class extends Component {
    public Project $project;

    public function mount(Project $project)
    {
        $this->project = $project;
    }

    public function render()
    {
        return $this->view()
            ->title($this->project->name);
    }
};
?>

<!-- main area part start -->

<main>
    <livewire:breadcrumbs :title="$project->name" />

    <!-- project details part start -->
    <section class="project-details-area">
        <div class="container">
            <div class="project-details-thumb-image">
                <img src="{{ $project->image_url }}" wire:navigate alt="project-details-image" class="img-fluid w-100">
                <div class="project-information">
                    <h3 class="project-title">Project Information</h3>
                    <div class="main-content">
                        <div class="info-main">
                            <div class="info-item">
                                <h6 class="info-subtitle">Category:</h6>
                                <p>Corporate, business</p>
                            </div>
                            <div class="info-item">
                                <h6 class="info-subtitle">Customer:</h6>
                                <p>Starline shimlasi</p>
                            </div>
                            <div class="info-item">
                                <h6 class="info-subtitle">Start date:</h6>
                                <p>21 January 2021</p>
                            </div>
                            <div class="info-item">
                                <h6 class="info-subtitle">End date:</h6>
                                <p>28 September 2023</p>
                            </div>
                        </div>
                        <div class="rating d-flex justify-content-center align-items-center">
                            <h6 class="rating-title">Rating:</h6>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="social-icon text-center">
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-details-information">
                <h2 class="project-details-title">Redefining Digital Product Standards</h2>
                <p>We design and deliver scalable, reliable digital products that solve real user problems and drive
                    measurable business outcomes. Our cross-functional teams handle architecture, design, and
                    implementation with a strong focus on performance and maintainability.</p>
                <p>From discovery to deployment, we apply best practices in engineering, observability, and
                    automated delivery so teams can iterate quickly while keeping uptime and security top of mind.</p>
                <div class="project-inner-image">
                    <div class="row g-4">
                        @foreach ($project->media as $media)
                            <div class="col-6 col-md-4 col-lg-4">
                                <div class="img">
                                    <img src="{{ $media->getFullUrl() }}" wire:navigate alt="{{ $media->name }}"
                                        class="img-fluid w-100">
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
                <div class="project-list-info">
                    <h3 class="title">Project highlights & outcomes</h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check"></i>
                            <h6>Scalable microservices architecture with horizontal autoscaling</h6>
                        </li>
                        <li><i class="fas fa-check"></i>
                            <h6>Automated CI/CD pipelines and infrastructure-as-code</h6>
                        </li>
                        <li><i class="fas fa-check"></i>
                            <h6>Performance improvements: 40% faster page loads</h6>
                        </li>
                        <li><i class="fas fa-check"></i>
                            <h6>Accessible, responsive user interface with improved UX metrics</h6>
                        </li>
                        <li><i class="fas fa-check"></i>
                            <h6>Full observability with monitoring, logging, and alerting</h6>
                        </li>
                    </ul>
                    <p>These outcomes enabled the product team to iterate faster while maintaining high availability
                        and security standards.</p>
                </div>
                <div class="pagination">
                    <ul class="list-unstyled">
                        <li class="prev"><a href="project-details" wire:navigate><i
                                    class="fas fa-long-arrow-alt-left"></i> Previews post</a>
                        </li>
                        <li class="next"><a href="project-details" wire:navigate>Next post <i
                                    class="fas fa-long-arrow-alt-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- project details part end -->

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
                    <p class="text-white">Lorem Ipsum is simply dummy text of the printing </p>
                </div>
            </div>
        </div>
    </section>
    <!-- call to action part end -->


</main>
<!-- main area part end -->
