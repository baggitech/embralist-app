<footer class="footer bg-body border-top" data-bs-theme="dark">
    <div class="container pb-md-2">

        <!-- Subscribe CTA + Contact link -->
        <div class="d-md-flex align-items-center justify-content-between border-bottom pt-5 pb-4 pb-md-5">
            <div class="d-flex flex-column flex-sm-row align-items-center justify-content-center gap-3 gap-sm-4 mb-4 mb-md-0">
                <div class="d-flex align-items-center">
                    <i class="fi-mail fs-4 lh-0 text-body d-none d-sm-block me-2"></i>
                    <i class="fi-mail text-body d-sm-none me-2"></i>
                    <h6 class="ps-sm-1 mb-0">
                        <span class="h5 d-none d-sm-block mb-0">Subscribe to our newsletter</span>
                        <span class="d-sm-none">Subscribe to our newsletter</span>
                    </h6>
                </div>
                <button type="button" class="btn btn-primary">Subscribe</button>
            </div>
            <div class="h5 d-none d-sm-block text-center mb-0">
                <span class="text-body-secondary fw-normal me-3">Need help?</span>
                <a class="text-white text-decoration-none hover-effect-underline" href="{{ route('help.index') }}">Contact us</a>
            </div>
            <div class="h6 d-sm-none text-center mb-0">
                <span class="text-body-secondary fw-normal me-2">Need help?</span>
                <a class="text-white text-decoration-none hover-effect-underline" href="{{ route('help.index') }}">Contact us</a>
            </div>
        </div>

        <!-- Logo + Links -->
        <div class="row pt-4 pt-sm-5 mt-3 mt-sm-0 pb-5">
            <div class="col-md-4 col-lg-5 mb-4 mb-sm-5 mb-md-0">
                <a class="d-inline-flex align-items-center text-dark-emphasis text-decoration-none mb-3" href="{{ route('home') }}">
                    <span class="flex-shrink-0 text-primary rtl-flip me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34">
                            <path d="M34.5 16.894v10.731c0 3.506-2.869 6.375-6.375 6.375H17.5h-.85C7.725 33.575.5 26.138.5 17c0-9.35 7.65-17 17-17s17 7.544 17 16.894z" fill="currentColor" />
                        </svg>
                    </span>
                    <span class="fs-4 fw-semibold">Embralist</span>
                </a>
                <p class="fs-sm text-body-secondary">Connect with trusted local professionals for your home projects.</p>
                <div class="d-flex gap-2 mt-4">
                    <a class="btn btn-icon btn-sm btn-secondary rounded-circle" href="#!" aria-label="Facebook"><i class="fi-facebook"></i></a>
                    <a class="btn btn-icon btn-sm btn-secondary rounded-circle" href="#!" aria-label="X"><i class="fi-x"></i></a>
                    <a class="btn btn-icon btn-sm btn-secondary rounded-circle" href="#!" aria-label="Instagram"><i class="fi-instagram"></i></a>
                    <a class="btn btn-icon btn-sm btn-secondary rounded-circle" href="#!" aria-label="LinkedIn"><i class="fi-linkedin"></i></a>
                </div>
            </div>
            <div class="col-sm-4 col-md-2 col-lg-2 offset-md-1 offset-lg-1 mb-4 mb-sm-0">
                <h6 class="text-white mb-3">Contractors</h6>
                <ul class="list-unstyled fs-sm">
                    <li class="mb-2"><a class="text-body-secondary text-decoration-none hover-effect-underline" href="{{ route('contractors.index') }}">Find a Pro</a></li>
                    <li class="mb-2"><a class="text-body-secondary text-decoration-none hover-effect-underline" href="{{ route('contractor.add.location') }}">Join Pro Network</a></li>
                    <li class="mb-2"><a class="text-body-secondary text-decoration-none hover-effect-underline" href="{{ route('about.index') }}">About Us</a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-md-2 col-lg-2 mb-4 mb-sm-0">
                <h6 class="text-white mb-3">Support</h6>
                <ul class="list-unstyled fs-sm">
                    <li class="mb-2"><a class="text-body-secondary text-decoration-none hover-effect-underline" href="{{ route('help.index') }}">Help Center</a></li>
                    <li class="mb-2"><a class="text-body-secondary text-decoration-none hover-effect-underline" href="{{ route('contact') }}">Contact</a></li>
                    <li class="mb-2"><a class="text-body-secondary text-decoration-none hover-effect-underline" href="{{ route('terms.index') }}">Terms &amp; Conditions</a></li>
                    <li class="mb-2"><a class="text-body-secondary text-decoration-none hover-effect-underline" href="{{ route('faq.index') }}">FAQ</a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-top pt-4 pb-4 text-center fs-xs text-body-secondary">
            &copy; {{ date('Y') }} Embralist. All rights reserved.
        </div>
    </div>
</footer>
