<footer class="footer space-pt bg-overlay-black-80" style="background-image: url({{ asset('images/map-bg.png') }}); background-color: #000; background-position: left top; background-repeat: no-repeat; width: 100%;">
    <div class="footer-top pb-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-6 mb-lg-0 mb-4">
                    <div class="footer-logo mb-3">
                        <a href="{{ route('index') }}">
                            <img alt="logo" class="img-fluid footer-logo" src="{{ asset('images/logo.png') }}">
                        </a>
                    </div>
                    <p class="d-inline-block mb-0">Success isn't really that difficult. There is a significant portion of the population here in North America, that actually want and need success</p>
                    <ul class="list-unstyled social-icon mb-0 mt-4">
                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 mb-lg-0 mb-4">
                    <h5 class="mb-sm-4 mb-2 text-white">Categories</h5>
                    <div class="footer-link">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#">Test Category</a>
                            </li>
                            <li>
                                <a href="#">Test Category</a>
                            </li>
                            <li>
                                <a href="#">Test Category</a>
                            </li>
                            <li>
                                <a href="#">Test Category</a>
                            </li>
                            <li>
                                <a href="#">Test Category</a>
                            </li>
                            <li>
                                <a href="#">Test Category</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 mb-lg-0 mb-4">
                    <h5 class="mb-sm-4 mb-2 text-white">Quick Links</h5>
                    <div class="footer-link">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about.index') }}">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('categories.index') }}">Categories</a>
                            </li>
                            <li>
                                <a href="{{ route('contact.index') }}">Contact Us</a>
                            </li>
                            <li>
                                <a href="#">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-6">
                    <div class="footer-contact-info">
                        <h5 class="mb-sm-4 mb-2 text-white">Newsletter</h5>
                        <p class="text-white">Sign up to our newsletter to get the latest news and offers.</p>
                        <form action="{{ route('newsletter.mail') }}" method="post">
                            @csrf
                            @method('post')
                            <input class="form-control mb-3" id="email" maxlength="255" placeholder="Enter Your Email Address" required type="email">
                            <button class="btn btn-primary">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom py-lg-4 py-4">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center">
                    <p class="mb-0">&copy; {{ date('Y') }} <a href="{{ route('index') }}">{{ env('APP_NAME') }}</a>. All Rights Reserved. Designed By <a href="https://xynosync.com" target="_blank">XynoSync</a>.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
