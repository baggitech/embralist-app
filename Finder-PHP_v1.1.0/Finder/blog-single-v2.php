<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">
  <head>
    <?php $title = "Blog Single Post v.2"; include('partials/title-meta.php'); ?>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="assets/vendor/glightbox/dist/css/glightbox.min.css">

    <?php include('partials/head-css.php'); ?>
    
  </head>


  <!-- Body -->
  <body>

    <!-- Navigation bar (Page header) -->
    <header class="navbar navbar-expand-lg bg-body navbar-sticky sticky-top z-fixed px-0" data-sticky-element>
      <div class="container">

        <!-- Mobile offcanvas menu toggler (Hamburger) -->
        <button type="button" class="navbar-toggler me-3 me-lg-0" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar brand (Logo) -->
        <a class="navbar-brand py-1 py-md-2 py-xl-1 me-2 me-sm-n4 me-md-n5 me-lg-0" href="home-cars.php">
          <span class="d-none d-sm-flex flex-shrink-0 text-primary rtl-flip me-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34"><path d="M34.5 16.894v10.731c0 3.506-2.869 6.375-6.375 6.375H17.5h-.85C7.725 33.575.5 26.138.5 17c0-9.35 7.65-17 17-17s17 7.544 17 16.894z" fill="currentColor"/><g fill-rule="evenodd"><path d="M17.5 13.258c-3.101 0-5.655 2.554-5.655 5.655s2.554 5.655 5.655 5.655 5.655-2.554 5.655-5.655-2.554-5.655-5.655-5.655zm-9.433 5.655c0-5.187 4.246-9.433 9.433-9.433s9.433 4.246 9.433 9.433a9.36 9.36 0 0 1-1.569 5.192l2.397 2.397a1.89 1.89 0 0 1 0 2.671 1.89 1.89 0 0 1-2.671 0l-2.397-2.397a9.36 9.36 0 0 1-5.192 1.569c-5.187 0-9.433-4.246-9.433-9.433z" fill="#000" fill-opacity=".05"/><g fill="#fff"><path d="M17.394 10.153c-3.723 0-6.741 3.018-6.741 6.741s3.018 6.741 6.741 6.741 6.741-3.018 6.741-6.741-3.018-6.741-6.741-6.741zM7.347 16.894A10.05 10.05 0 0 1 17.394 6.847 10.05 10.05 0 0 1 27.44 16.894 10.05 10.05 0 0 1 17.394 26.94 10.05 10.05 0 0 1 7.347 16.894z"/><path d="M23.025 22.525c.645-.645 1.692-.645 2.337 0l3.188 3.188c.645.645.645 1.692 0 2.337s-1.692.645-2.337 0l-3.187-3.187c-.645-.646-.645-1.692 0-2.337z"/></g></g><path d="M23.662 14.663c2.112 0 3.825-1.713 3.825-3.825s-1.713-3.825-3.825-3.825-3.825 1.713-3.825 3.825 1.713 3.825 3.825 3.825z" fill="#fff"/><path fill-rule="evenodd" d="M23.663 8.429a2.41 2.41 0 0 0-2.408 2.408 2.41 2.41 0 0 0 2.408 2.408 2.41 2.41 0 0 0 2.408-2.408 2.41 2.41 0 0 0-2.408-2.408zm-5.242 2.408c0-2.895 2.347-5.242 5.242-5.242s5.242 2.347 5.242 5.242-2.347 5.242-5.242 5.242-5.242-2.347-5.242-5.242z" fill="currentColor"/></svg>
          </span>
          Finder
        </a>

        <!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
        <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
          <div class="offcanvas-header py-3">
            <h5 class="offcanvas-title" id="navbarNavLabel">Browse Finder</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body pt-2 pb-4 py-lg-0 mx-lg-auto">
            <ul class="navbar-nav position-relative">
              <li class="nav-item dropdown py-lg-2 me-lg-n1 me-xl-0">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Home</a>
                <ul class="dropdown-menu">
                  <li class="hover-effect-opacity px-2 mx-n2">
                    <a class="dropdown-item d-block mb-0" href="home-real-estate.php">
                      <span class="fw-medium">Real Estate</span>
                      <span class="d-block fs-xs text-body-secondary">Property listings directory</span>
                      <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                        <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/real-estate-light.jpg" alt="Real Estate Demo">
                        <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/real-estate-dark.jpg" alt="Real Estate Demo">
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                      </div>
                    </a>
                  </li>
                  <li class="hover-effect-opacity px-2 mx-n2">
                    <a class="dropdown-item d-block mb-0" href="home-cars.php">
                      <span class="fw-medium">Cars</span>
                      <span class="d-block fs-xs text-body-secondary">Vehicle sales listings</span>
                      <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                        <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/cars-light.jpg" alt="Cars Demo">
                        <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/cars-dark.jpg" alt="Cars Demo">
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                      </div>
                    </a>
                  </li>
                  <li class="hover-effect-opacity px-2 mx-n2">
                    <a class="dropdown-item d-block mb-0" href="home-contractors.php">
                      <span class="fw-medium">Contractors</span>
                      <span class="d-block fs-xs text-body-secondary">Professional services directory</span>
                      <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                        <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/contractors-light.jpg" alt="Contractors Demo">
                        <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/contractors-dark.jpg" alt="Contractors Demo">
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                      </div>
                    </a>
                  </li>
                  <li class="hover-effect-opacity px-2 mx-n2">
                    <a class="dropdown-item d-block mb-0" href="home-doctors.php">
                      <span class="fw-medium">Doctors</span>
                      <span class="d-block fs-xs text-body-secondary">Medical professionals listings</span>
                      <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                        <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/doctors-light.jpg" alt="Doctors Demo">
                        <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/doctors-dark.jpg" alt="Doctors Demo">
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                      </div>
                    </a>
                  </li>
                  <li class="hover-effect-opacity px-2 mx-n2">
                    <a class="dropdown-item d-block mb-0" href="home-events.php">
                      <span class="fw-medium">Events</span>
                      <span class="d-block fs-xs text-body-secondary">Upcoming events listings</span>
                      <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                        <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/events-light.jpg" alt="Events Demo">
                        <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/events-dark.jpg" alt="Events Demo">
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                      </div>
                    </a>
                  </li>
                  <li class="hover-effect-opacity px-2 mx-n2">
                    <a class="dropdown-item d-block mb-0" href="home-city-guide.php">
                      <span class="fw-medium">City Guide</span>
                      <span class="d-block fs-xs text-body-secondary">Local places directory</span>
                      <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                        <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/city-guide-light.jpg" alt="City Guide Demo">
                        <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/city-guide-dark.jpg" alt="City Guide Demo">
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown position-static py-lg-2 me-lg-n1 me-xl-0">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Listings</a>
                <div class="dropdown-menu rounded-4 p-4">
                  <div class="d-flex flex-column flex-lg-row gap-4">
                    <div style="min-width: 190px">
                      <div class="h6 mb-2">Real Estate</div>
                      <ul class="nav flex-column gap-2 mt-0">
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="listings-real-estate.php">Map/Listings Split View</a>
                        </li>
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="single-entry-real-estate.php">Property Details Page</a>
                        </li>
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="vendor-real-estate.php">Vendor Page</a>
                        </li>
                      </ul>
                      <div class="h6 pt-4 mb-2">Cars</div>
                      <ul class="nav flex-column gap-2 mt-0">
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="listings-grid-cars.php">Listings Grid View</a>
                        </li>
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="listings-list-cars.php">Listings List View</a>
                        </li>
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="single-entry-cars.php">Car Details Page</a>
                        </li>
                      </ul>
                      <div class="h6 pt-4 mb-2">Contractors</div>
                      <ul class="nav flex-column gap-2 mt-0">
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="listings-contractors.php">Listings with Side Filters</a>
                        </li>
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="single-entry-contractors.php">Contractor Details Page</a>
                        </li>
                      </ul>
                      <div class="h6 pt-4 mb-2">Doctors</div>
                      <ul class="nav flex-column gap-2 mt-0">
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="listings-list-doctors.php">Listings List View</a>
                        </li>
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="listings-grid-doctors.php">Listings Grid View</a>
                        </li>
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="single-entry-doctors.php">Doctor Details Page</a>
                        </li>
                      </ul>
                    </div>
                    <div style="min-width: 190px">
                      <div class="h6 mb-2">Events</div>
                      <ul class="nav flex-column gap-2 mt-0">
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="listings-events.php">Listings with Top Filters</a>
                        </li>
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="single-entry-events.php">Event Details Page</a>
                        </li>
                      </ul>
                      <div class="h6 pt-4 mb-2">City Guide</div>
                      <ul class="nav flex-column gap-2 mt-0">
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="listings-side-filters-city-guide.php">Listings with Side Filters</a>
                        </li>
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="listings-top-filters-city-guide.php">Listings with Top Filters</a>
                        </li>
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="single-entry-city-guide.php">Place Details Page</a>
                        </li>
                      </ul>
                      <div class="h6 pt-4 mb-2">Add Property</div>
                      <ul class="nav flex-column gap-2 mt-0">
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="add-property-type.php">Property type</a>
                        </li>
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="add-property-location.php">Location</a>
                        </li>
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="add-property-photos.php">Photos and Videos</a>
                        </li>
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="add-property-details.php">Property Details</a>
                        </li>
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="add-property-price.php">Price</a>
                        </li>
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="add-property-contact-info.php">Contact Info</a>
                        </li>
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="add-property-promotion.php">Ad Promotion</a>
                        </li>
                      </ul>
                    </div>
                    <div style="min-width: 190px">
                      <div class="h6 mb-2">Add Contractor</div>
                      <ul class="nav flex-column gap-2 mt-0">
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="add-contractor-location.php">Business Location</a>
                        </li>
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="add-contractor-services.php">Choose Services</a>
                        </li>
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="add-contractor-profile.php">Profile Details</a>
                        </li>
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="add-contractor-price-hours.php">Price and Hours</a>
                        </li>
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="add-contractor-project.php">Create First Project</a>
                        </li>
                      </ul>
                      <div class="h6 pt-4 mb-2">Add (Sell) Car</div>
                      <ul class="nav flex-column gap-2 mt-0">
                        <li class="pt-1">
                          <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="add-car.php">Add (Sell) Car Page</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown py-lg-2 me-lg-n1 me-xl-0">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Account</a>
                <ul class="dropdown-menu">
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Auth Pages</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="account-signin.php">Sign In</a></li>
                      <li><a class="dropdown-item" href="account-signup.php">Sign Up</a></li>
                      <li><a class="dropdown-item" href="account-password-recovery.php">Password Recovery</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="account-profile.php">My Profile</a></li>
                  <li><a class="dropdown-item" href="account-listings.php">My Listings</a></li>
                  <li><a class="dropdown-item" href="account-reviews.php">Reviews</a></li>
                  <li><a class="dropdown-item" href="account-favorites.php">Favorites</a></li>
                  <li><a class="dropdown-item" href="account-payment.php">Payment Details</a></li>
                  <li><a class="dropdown-item" href="account-settings.php">Account Settings</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown py-lg-2 me-lg-n1 me-xl-0">
                <a class="nav-link dropdown-toggle active" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">About</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="about-v1.php">About v.1</a></li>
                      <li><a class="dropdown-item" href="about-v2.php">About v.2</a></li>
                    </ul>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Blog</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="blog-layout-v1.php">Blog Layout v.1</a></li>
                      <li><a class="dropdown-item" href="blog-layout-v2.php">Blog Layout v.2</a></li>
                      <li><a class="dropdown-item" href="blog-layout-v3.php">Blog Layout v.3</a></li>
                      <li><a class="dropdown-item" href="blog-layout-v4.php">Blog Layout v.4</a></li>
                      <li><a class="dropdown-item" href="blog-single-v1.php">Single Post v.1</a></li>
                      <li><a class="dropdown-item" href="blog-single-v2.php">Single Post v.2</a></li>
                      <li><a class="dropdown-item" href="blog-single-v3.php">Single Post v.3</a></li>
                    </ul>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Contact</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="contact-v1.php">Contact v.1</a></li>
                      <li><a class="dropdown-item" href="contact-v2.php">Contact v.2</a></li>
                      <li><a class="dropdown-item" href="contact-v3.php">Contact v.3</a></li>
                    </ul>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Help Center</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="help-topics-v1.php">Help Topics v.1</a></li>
                      <li><a class="dropdown-item" href="help-topics-v2.php">Help Topics v.2</a></li>
                      <li><a class="dropdown-item" href="help-topics-v3.php">Help Topics v.3</a></li>
                      <li><a class="dropdown-item" href="help-single-article-v1.php">Help Single Article v.1</a></li>
                      <li><a class="dropdown-item" href="help-single-article-v2.php">Help Single Article v.2</a></li>
                      <li><a class="dropdown-item" href="help-single-article-v3.php">Help Single Article v.3</a></li>
                    </ul>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">404 Error</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="404-bg-image.php">Background Image (Real Estate)</a></li>
                      <li><a class="dropdown-item" href="404-icon.php">Icon Image (Cars)</a></li>
                      <li><a class="dropdown-item" href="404-split-screen.php">Split Screen (Contractors)</a></li>
                      <li><a class="dropdown-item" href="404-illustration.php">Illustration (City Guide)</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="terms-and-conditions.php">Terms &amp; Conditions</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>

        <!-- Button group -->
        <div class="d-flex gap-sm-1">

          <!-- Theme switcher (light/dark/auto) -->
          <div class="dropdown">
            <button type="button" class="theme-switcher btn btn-icon btn-outline-secondary fs-lg border-0 animate-scale" data-bs-toggle="dropdown" data-bs-display="dynamic" aria-expanded="false" aria-label="Toggle theme (light)">
              <span class="theme-icon-active d-flex animate-target">
                <i class="fi-sun"></i>
              </span>
            </button>
            <ul class="dropdown-menu start-50 translate-middle-x" style="--fn-dropdown-min-width: 9rem; --fn-dropdown-spacer: .5rem">
              <li>
                <button type="button" class="dropdown-item active" data-bs-theme-value="light" aria-pressed="true">
                  <span class="theme-icon d-flex fs-base me-2">
                    <i class="fi-sun"></i>
                  </span>
                  <span class="theme-label">Light</span>
                  <i class="item-active-indicator fi-check ms-auto"></i>
                </button>
              </li>
              <li>
                <button type="button" class="dropdown-item" data-bs-theme-value="dark" aria-pressed="false">
                  <span class="theme-icon d-flex fs-base me-2">
                    <i class="fi-moon"></i>
                  </span>
                  <span class="theme-label">Dark</span>
                  <i class="item-active-indicator fi-check ms-auto"></i>
                </button>
              </li>
              <li>
                <button type="button" class="dropdown-item" data-bs-theme-value="auto" aria-pressed="false">
                  <span class="theme-icon d-flex fs-base me-2">
                    <i class="fi-auto"></i>
                  </span>
                  <span class="theme-label">Auto</span>
                  <i class="item-active-indicator fi-check ms-auto"></i>
                </button>
              </li>
            </ul>
          </div>

          <!-- Account button -->
          <a class="btn btn-icon btn-outline-secondary fs-lg border-0 animate-shake me-2" href="account-signin.php" aria-label="Sign in to account">
            <i class="fi-user animate-target"></i>
          </a>

          <!-- Add property button  -->
          <a class="btn btn-primary animate-scale" href="add-car.php">
            <i class="fi-plus fs-lg animate-target ms-n2 me-1 me-sm-2"></i>
            Sell car
          </a>
        </div>
      </div>
    </header>


    <!-- Page content -->
    <main class="content-wrapper">
      <div class="container pt-4 pb-5 mb-xxl-3">

        <!-- Breadcrumb -->
        <nav class="pb-2 pb-sm-3 pb-lg-4" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="home-cars.php">Home</a></li>
            <li class="breadcrumb-item"><a href="blog-layout-v2.php">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page">Single post v.2</li>
          </ol>
        </nav>

        <!-- Main image -->
        <div class="ratio bg-body-tertiary rounded overflow-hidden" style="--fn-aspect-ratio: calc(600 / 1296 * 100%)">
          <img src="assets/img/blog/v2/single/01.jpg" alt="Image">
        </div>

        <!-- Post container -->
        <div class="row justify-content-center pt-4 pt-md-5 pb-2 pb-sm-3 pb-md-4 pb-lg-5 mt-3 mt-md-0 mt-lg-3">
          <div class="col-lg-9 col-xl-8">

            <!-- Post meta -->
            <div class="nav align-items-center gap-2 text-body-secondary mb-3 mb-lg-4">
              <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Industry news</a>
              <hr class="vr my-1 mx-1">
              <span class="fs-sm lh-0">November 15, 2024</span>
            </div>

            <!-- Post title -->
            <h1 class="pb-4 mb-0">Ford Edge to be discontinued in 2025, won't return for 2026</h1>

            <hr class="my-0 my-sm-1 my-md-2 my-xl-3">

            <!-- Post content -->
            <div class="pt-4">
              <p>Ford has officially announced that the midsize crossover SUV, Ford Edge, is set to be discontinued in the second quarter of 2024, with no plans for a 2025 model year. Ford spokesperson Jenn Banovetz confirmed the news, stating that production will continue into the second quarter, and the existing inventory will be sold throughout the year.</p>
              <p>Speculation about the discontinuation of the Edge had circulated for years, yet the redesigned 2024 Lincoln Nautilus hinted at the possibility of another generation for the Edge. Notably, production of the Nautilus transitioned from Ford's Oakville Assembly Complex in Ontario, Canada, to China, with anticipated deliveries in the current quarter. It's worth noting that an extended wheelbase variant known as the Ford Edge L is manufactured in China and available in various markets.</p>

              <!-- Gallery -->
              <div class="d-flex gap-3 gap-sm-4 py-3 py-lg-4 mb-3">
                <div style="width: 63.2%">
                  <a class="hover-effect-opacity ratio d-flex bg-body-tertiary rounded overflow-hidden" href="assets/img/blog/v2/single/gallery/01.jpg" style="--fn-aspect-ratio: calc(438 / 525 * 100%)" data-glightbox data-gallery="blogGallery">
                    <div class="hover-effect-target position-absolute d-flex align-items-center justify-content-center top-0 start-0 w-100 h-100 z-2 text-white opacity-0 p-4">
                      <i class="fi-zoom-in fs-2 position-absolute top-50 translate-middle-y"></i>
                    </div>
                    <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                    <img src="assets/img/blog/v2/single/gallery/th01.jpg" alt="Thumbnail">
                  </a>
                </div>
                <div class="vstack gap-3 gap-sm-4" style="width: 36.8%">
                  <a class="hover-effect-opacity ratio d-flex bg-body-tertiary rounded overflow-hidden" href="assets/img/blog/v2/single/gallery/02.jpg" style="--fn-aspect-ratio: calc(207 / 306 * 100%)" data-glightbox data-gallery="blogGallery">
                    <div class="hover-effect-target position-absolute d-flex align-items-center justify-content-center top-0 start-0 w-100 h-100 z-2 text-white opacity-0 p-4">
                      <i class="fi-zoom-in fs-2 position-absolute top-50 translate-middle-y"></i>
                    </div>
                    <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                    <img src="assets/img/blog/v2/single/gallery/th02.jpg" alt="Thumbnail">
                  </a>
                  <a class="hover-effect-opacity ratio d-flex bg-body-tertiary rounded overflow-hidden" href="assets/img/blog/v2/single/gallery/03.jpg" style="--fn-aspect-ratio: calc(207 / 306 * 100%)" data-glightbox data-gallery="blogGallery">
                    <div class="hover-effect-target position-absolute d-flex align-items-center justify-content-center top-0 start-0 w-100 h-100 z-2 text-white opacity-0 p-4">
                      <i class="fi-zoom-in fs-2 position-absolute top-50 translate-middle-y"></i>
                    </div>
                    <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                    <img src="assets/img/blog/v2/single/gallery/th03.jpg" alt="Thumbnail">
                  </a>
                </div>
              </div>

              <p>The Oakville plant, previously dedicated to manufacturing the Edge, has undergone a strategic transition to produce five upcoming electric vehicles. This shift, disclosed in 2020 with a production goal set for 2025, is anticipated to encompass a three-row electric SUV among the unnamed models. The move aligns with the broader industry trend toward electric mobility, reflecting Ford's commitment to embracing a more sustainable future.</p>
              <p>Introduced in 2007, the Edge midsize crossover established itself as a pioneer, filling the niche between smaller compact crossovers like the Escape and larger three-row SUVs like the Explorer. Competing with models such as the Jeep Grand Cherokee, Chevy Blazer, and Honda Passport, as well as newer entries like the Mazda CX-70, the Edge carved its place in the market. The decision to exit this seemingly lucrative segment appears unconventional, particularly considering its competitive pricing ranging from $40,000 for the base SE to well over $50,000 for the ST with additional options.</p>

              <!-- Featured post -->
              <div class="py-3 py-lg-4 mb-3">
                <div class="border-top border-bottom py-1 py-md-3">
                  <article class="d-flex flex-column flex-sm-row align-items-sm-center gap-3 gap-sm-4 py-3">
                    <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="#!" style="max-width: 220px; --fn-aspect-ratio: calc(139 / 220 * 100%)">
                      <img src="assets/img/blog/v2/03.jpg" class="hover-effect-target" alt="Image">
                    </a>
                    <div class="pt-1 pt-sm-0">
                      <div class="nav align-items-center gap-2 text-body-secondary pb-2 mb-1">
                        <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Electric vehicles</a>
                        <hr class="vr my-1 mx-1">
                        <span class="fs-sm lh-0">July 12, 2024</span>
                      </div>
                      <h3 class="h5 mb-0">
                        <a class="hover-effect-underline" href="#!">Tesla fixes common recall with over-the-air update</a>
                      </h3>
                    </div>
                  </article>
                </div>
              </div>

              <p>Ford has confirmed that the 2024 Ford Edge will remain available for purchase throughout the year, but its discontinuation will undoubtedly create a significant void in Ford's overall sales volume. In 2023, Ford successfully sold 106,098 units of the five-seat Edge, reflecting a notable 24.1% increase from the previous year. Comparatively, the Ford Bronco midsize SUV slightly trailed behind the Edge in sales, while the smaller Bronco Sport, based on the Ford Escape, outperformed both with 127,476 units sold. Despite these figures, the Edge's sales numbers still fall behind Ford's leading crossover SUVs, the Escape and Explorer, in the robust family lineup.</p>
              <figure class="figure w-100 py-3 py-lg-4 mb-3">
                <div class="ratio bg-body-tertiary mb-2" style="--fn-aspect-ratio: calc(600 / 856 * 100%)">
                  <img src="assets/img/blog/v2/single/02.jpg" class="figure-img rounded mb-0" alt="Image">
                </div>
                <figcaption class="figure-caption fs-sm">Image source Unsplash.com</figcaption>
              </figure>
              <p>The disappearance of the Edge from the market has fueled speculation, especially as Ford expands its electric vehicle (EV) portfolio and capitalizes on the triumph of the Bronco models. Ford's strategic move aligns with the industry trend of discontinuing older crossovers with traditional gas engines in favor of embracing the shift towards electric mobility. This shift is not exclusive to Ford, as other automakers, including Nissan with the Murano, Jeep with the Cherokee, and Mazda with the CX-9, have also discontinued older crossover models in 2024, signaling a broader transformation within the automotive landscape.</p>

              <!-- Share + Like buttons -->
              <div class="d-flex gap-3 pt-3 pt-lg-4">
                <div class="dropdown">
                  <button type="button" class="btn btn-outline-secondary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fi-share-2 fs-base me-2 ms-n1"></i>
                    Share
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="#!">
                        <i class="fi-facebook fs-base me-2"></i>
                        Facebook
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#!">
                        <i class="fi-instagram fs-base me-2"></i>
                        Instagram
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="fi-linkedin fs-base me-2"></i>
                        LinkedIn
                      </a>
                    </li>
                  </ul>
                </div>
                <button type="button" class="btn btn-outline-secondary">
                  <i class="fi-thumbs-up fs-base me-2 ms-n1"></i>
                  Like it
                </button>
              </div>


              <!-- Car ranking CTA -->
              <div class="pt-5 mt-2 mt-sm-3 mt-md-4 mt-lg-5">
                <div class="d-sm-flex align-items-center bg-body-tertiary rounded">
                  <div class="text-center text-sm-start p-4 ps-md-5 pe-sm-0">
                    <h2 class="h4 pt-2 pt-sm-0 pb-sm-1 mb-2">Finder car ranking</h2>
                    <p class="fs-sm mb-0">Check your guide to the bestsellers in this year</p>
                  </div>
                  <div class="position-relative w-100 align-self-end pt-sm-4 ms-auto" style="max-width: 429px">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-start align-items-sm-center justify-content-center justify-content-sm-end z-1 px-4 px-md-5">
                      <a class="btn btn-primary" href="#!">See the ranking</a>
                    </div>
                    <div class="ratio" style="--fn-aspect-ratio: calc(139 / 429 * 100%)">
                      <img src="assets/img/blog/v2/single/cta.png" alt="Image">
                    </div>
                  </div>
                </div>
              </div>


              <!-- Relevant blog posts -->
              <div class="pt-5 mt-2 mt-sm-3 mt-md-4 mt-lg-5">
                <h2 class="pb-sm-3">Also read</h2>
                <div class="vstack gap-4 mt-n1 mt-sm-0">

                  <!-- Article -->
                  <article class="d-flex flex-column flex-sm-row align-items-sm-center gap-3 gap-sm-4 pt-3 pt-sm-0">
                    <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="#!" style="max-width: 220px; --fn-aspect-ratio: calc(139 / 220 * 100%)">
                      <img src="assets/img/blog/v2/01.jpg" class="hover-effect-target" alt="Image">
                    </a>
                    <div class="pt-1 pt-sm-0">
                      <div class="nav align-items-center gap-2 text-body-secondary pb-2 mb-1">
                        <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Car reviews</a>
                        <hr class="vr my-1 mx-1">
                        <span class="fs-sm lh-0">August 13, 2024</span>
                      </div>
                      <h3 class="h5 mb-0">
                        <a class="hover-effect-underline" href="#!">Exploring the Audi Q7: Luxury, performance, and innovation</a>
                      </h3>
                    </div>
                  </article>

                  <!-- Article -->
                  <article class="d-flex flex-column flex-sm-row align-items-sm-center gap-3 gap-sm-4 pt-3 pt-sm-0">
                    <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="#!" style="max-width: 220px; --fn-aspect-ratio: calc(139 / 220 * 100%)">
                      <img src="assets/img/blog/v2/06.jpg" class="hover-effect-target" alt="Image">
                    </a>
                    <div class="pt-1 pt-sm-0">
                      <div class="nav align-items-center gap-2 text-body-secondary pb-2 mb-1">
                        <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Buying guides news</a>
                        <hr class="vr my-1 mx-1">
                        <span class="fs-sm lh-0">June 27, 2024</span>
                      </div>
                      <h3 class="h5 mb-0">
                        <a class="hover-effect-underline" href="#!">Which is the best small SUV for me?</a>
                      </h3>
                    </div>
                  </article>

                  <!-- Article -->
                  <article class="d-flex flex-column flex-sm-row align-items-sm-center gap-3 gap-sm-4 pt-3 pt-sm-0">
                    <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="#!" style="max-width: 220px; --fn-aspect-ratio: calc(139 / 220 * 100%)">
                      <img src="assets/img/blog/v2/05.jpg" class="hover-effect-target" alt="Image">
                    </a>
                    <div class="pt-1 pt-sm-0">
                      <div class="nav align-items-center gap-2 text-body-secondary pb-2 mb-1">
                        <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Industry news</a>
                        <hr class="vr my-1 mx-1">
                        <span class="fs-sm lh-0">June 06, 2024</span>
                      </div>
                      <h3 class="h5 mb-0">
                        <a class="hover-effect-underline" href="#!">2025 Subaru Outback leads the latest new car news</a>
                      </h3>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>


    <!-- Page footer -->
    <?php include('partials/footer3.php') ?>


    <!-- Back to top button -->
    <div class="floating-buttons position-fixed top-50 end-0 z-sticky me-3 me-xl-4 pb-4">
      <a class="btn-scroll-top btn btn-sm bg-body border-0 rounded-pill shadow animate-slide-end" href="#top">
        Top
        <i class="fi-arrow-right fs-base ms-1 me-n1 animate-target"></i>
        <span class="position-absolute top-0 start-0 w-100 h-100 border rounded-pill z-0"></span>
        <svg class="position-absolute top-0 start-0 w-100 h-100 z-1" viewBox="0 0 62 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x=".75" y=".75" width="60.5" height="30.5" rx="15.25" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"/>
        </svg>
      </a>
    </div>


    <!-- Vendor scripts -->
    <script src="assets/vendor/glightbox/dist/js/glightbox.min.js"></script>

    <?php include('partials/footer-scripts.php'); ?>
  </body>
</html>
