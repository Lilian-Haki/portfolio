<?php

use Livewire\Component;

new class extends Component
{
    public $title = 'Terms of Service';
};
?>

<!-- bread crumb part start -->
        <section class="breadcrumb-area" data-background="{{  asset('img/bg/bread-crumb-bg.png') }}">
            <div class="container">
                <div class="breadcrumb-content">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <div class="breadcrumb-title">
                                <h2 class="title text-white">{{ $title }}</h2>
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <ul class="list-unstyled bread-crumb text-md-end">
                                <li><a href="/" wire:navigate>Home</a></li>
                                <li>
                                    {{ $title }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- bread crumb part end -->