<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<!-- footer part start -->
<footer class="footer-area-one">
    <div class="footer-area-one-bg">
        <div class="container">
            <div class="footer-top-one">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="/" wire:navigate>
                                    <img src="/img/logo/white-logo.png" alt="white-logo">
                                </a>
                            </div>
                            <div class="footer-content">
                                <p>Lorem Ipsum is simply is dumi omy is text Loremo Ipsum is simply is out no
                                    our o
                                    dummy text.</p>
                                <div class="social">
                                    <ul class="list-unstyled">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget ms-5">
                            <h4 class="footer-title uppercase">Get Free Link</h4>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="#"><i class="fas fa-angle-right"></i> Software Development</a>
                                    </li>
                                    <li><a href="#"><i class="fas fa-angle-right"></i> Data Analytics</a></li>
                                    <li><a href="#"><i class="fas fa-angle-right"></i> IT Consulting</a></li>
                                    <li><a href="#"><i class="fas fa-angle-right"></i> UI/UX Design</a></li>
                                    <li><a href="#"><i class="fas fa-angle-right"></i> Network Solutions</a>
                                    </li>
                                    <li><a href="#"><i class="fas fa-angle-right"></i> Others</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget">
                            <h4 class="footer-title uppercase">Address</h4>
                            <div class="footer-address">
                                <ul>
                                    <li class="d-flex">
                                        <div class="icon">
                                            <i class="fas fa-paper-plane"></i>
                                        </div>
                                        <div class="content">
                                            <p>2972 Westheimer Rd. Santa Ana, Illinois 85486</p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <a href="mailto:debbie.baker@example.com">debbie.baker@example.com</a>
                                            <a href="mailto:nevaeh.simm@example.com">nevaeh.simm@example.com</a>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="content">
                                            <a href="tel:(405)555-0128">(405) 555-0128</a>
                                            <a href="tel:(629)555-0129">(629) 555-0129</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget">
                            <h4 class="footer-title uppercase">Newsletter</h4>
                            <p>Lorem Ipsum is simply is dumi omy is text Loremo Ipsum</p>
                            <div class="footer-newsletter">
                                <form action="#">
                                    <div class="position-relative">
                                        <input type="email" placeholder="Your E-mail Address...">
                                        <button type="submit" class="position-absolute"><i
                                                class="fas fa-paper-plane"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="copyright">
                            <p>© {{ date('Y') }} | All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="links text-lg-end">
                            <ul>
                                <li><a href="/terms" wire:navigate>Terms & Conditions</a></li>
                                <li><a href="/privacy" wire:navigate>Privacy Policy</a></li>
                                <li><a href="/contact" wire:navigate>Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer part end -->
