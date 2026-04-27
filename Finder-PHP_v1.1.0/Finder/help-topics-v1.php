<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>
  <?php $title = "Help Topics v.1"; include('partials/title-meta.php'); ?>

  <!-- Vendor styles -->
  <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

  <?php include('partials/head-css.php'); ?>
</head>


<!-- Body -->

<body>

  <!-- Navigation bar (Page header) -->
  <header class="navbar navbar-expand-lg bg-body navbar-sticky sticky-top z-fixed px-0" data-sticky-element>
    <div class="container">

      <!-- Mobile offcanvas menu toggler (Hamburger) -->
      <button type="button" class="navbar-toggler me-3 me-lg-0" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar brand (Logo) -->
      <a class="navbar-brand py-1 py-md-2 py-xl-1 me-2 me-sm-n4 me-md-n5 me-lg-0" href="home-real-estate.php">
        <span class="d-none d-sm-flex flex-shrink-0 text-primary rtl-flip me-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34">
            <path
              d="M34.5 16.894v10.731c0 3.506-2.869 6.375-6.375 6.375H17.5h-.85C7.725 33.575.5 26.138.5 17c0-9.35 7.65-17 17-17s17 7.544 17 16.894z"
              fill="currentColor" />
            <g fill-rule="evenodd">
              <path
                d="M17.5 13.258c-3.101 0-5.655 2.554-5.655 5.655s2.554 5.655 5.655 5.655 5.655-2.554 5.655-5.655-2.554-5.655-5.655-5.655zm-9.433 5.655c0-5.187 4.246-9.433 9.433-9.433s9.433 4.246 9.433 9.433a9.36 9.36 0 0 1-1.569 5.192l2.397 2.397a1.89 1.89 0 0 1 0 2.671 1.89 1.89 0 0 1-2.671 0l-2.397-2.397a9.36 9.36 0 0 1-5.192 1.569c-5.187 0-9.433-4.246-9.433-9.433z"
                fill="#000" fill-opacity=".05" />
              <g fill="#fff">
                <path
                  d="M17.394 10.153c-3.723 0-6.741 3.018-6.741 6.741s3.018 6.741 6.741 6.741 6.741-3.018 6.741-6.741-3.018-6.741-6.741-6.741zM7.347 16.894A10.05 10.05 0 0 1 17.394 6.847 10.05 10.05 0 0 1 27.44 16.894 10.05 10.05 0 0 1 17.394 26.94 10.05 10.05 0 0 1 7.347 16.894z" />
                <path
                  d="M23.025 22.525c.645-.645 1.692-.645 2.337 0l3.188 3.188c.645.645.645 1.692 0 2.337s-1.692.645-2.337 0l-3.187-3.187c-.645-.646-.645-1.692 0-2.337z" />
              </g>
            </g>
            <path
              d="M23.662 14.663c2.112 0 3.825-1.713 3.825-3.825s-1.713-3.825-3.825-3.825-3.825 1.713-3.825 3.825 1.713 3.825 3.825 3.825z"
              fill="#fff" />
            <path fill-rule="evenodd"
              d="M23.663 8.429a2.41 2.41 0 0 0-2.408 2.408 2.41 2.41 0 0 0 2.408 2.408 2.41 2.41 0 0 0 2.408-2.408 2.41 2.41 0 0 0-2.408-2.408zm-5.242 2.408c0-2.895 2.347-5.242 5.242-5.242s5.242 2.347 5.242 5.242-2.347 5.242-5.242 5.242-5.242-2.347-5.242-5.242z"
              fill="currentColor" />
          </svg>
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
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                data-bs-trigger="hover" aria-expanded="false">Home</a>
              <ul class="dropdown-menu">
                <li class="hover-effect-opacity px-2 mx-n2">
                  <a class="dropdown-item d-block mb-0" href="home-real-estate.php">
                    <span class="fw-medium">Real Estate</span>
                    <span class="d-block fs-xs text-body-secondary">Property listings directory</span>
                    <div
                      class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2"
                      style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                      <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/real-estate-light.jpg"
                        alt="Real Estate Demo">
                      <img class="position-relative z-2 d-none d-block-dark"
                        src="assets/img/mega-menu/real-estate-dark.jpg" alt="Real Estate Demo">
                      <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark"
                        style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                      <span
                        class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark"
                        style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                    </div>
                  </a>
                </li>
                <li class="hover-effect-opacity px-2 mx-n2">
                  <a class="dropdown-item d-block mb-0" href="home-cars.php">
                    <span class="fw-medium">Cars</span>
                    <span class="d-block fs-xs text-body-secondary">Vehicle sales listings</span>
                    <div
                      class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2"
                      style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                      <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/cars-light.jpg"
                        alt="Cars Demo">
                      <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/cars-dark.jpg"
                        alt="Cars Demo">
                      <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark"
                        style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                      <span
                        class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark"
                        style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                    </div>
                  </a>
                </li>
                <li class="hover-effect-opacity px-2 mx-n2">
                  <a class="dropdown-item d-block mb-0" href="home-contractors.php">
                    <span class="fw-medium">Contractors</span>
                    <span class="d-block fs-xs text-body-secondary">Professional services directory</span>
                    <div
                      class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2"
                      style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                      <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/contractors-light.jpg"
                        alt="Contractors Demo">
                      <img class="position-relative z-2 d-none d-block-dark"
                        src="assets/img/mega-menu/contractors-dark.jpg" alt="Contractors Demo">
                      <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark"
                        style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                      <span
                        class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark"
                        style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                    </div>
                  </a>
                </li>
                <li class="hover-effect-opacity px-2 mx-n2">
                  <a class="dropdown-item d-block mb-0" href="home-doctors.php">
                    <span class="fw-medium">Doctors</span>
                    <span class="d-block fs-xs text-body-secondary">Medical professionals listings</span>
                    <div
                      class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2"
                      style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                      <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/doctors-light.jpg"
                        alt="Doctors Demo">
                      <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/doctors-dark.jpg"
                        alt="Doctors Demo">
                      <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark"
                        style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                      <span
                        class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark"
                        style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                    </div>
                  </a>
                </li>
                <li class="hover-effect-opacity px-2 mx-n2">
                  <a class="dropdown-item d-block mb-0" href="home-events.php">
                    <span class="fw-medium">Events</span>
                    <span class="d-block fs-xs text-body-secondary">Upcoming events listings</span>
                    <div
                      class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2"
                      style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                      <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/events-light.jpg"
                        alt="Events Demo">
                      <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/events-dark.jpg"
                        alt="Events Demo">
                      <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark"
                        style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                      <span
                        class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark"
                        style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                    </div>
                  </a>
                </li>
                <li class="hover-effect-opacity px-2 mx-n2">
                  <a class="dropdown-item d-block mb-0" href="home-city-guide.php">
                    <span class="fw-medium">City Guide</span>
                    <span class="d-block fs-xs text-body-secondary">Local places directory</span>
                    <div
                      class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2"
                      style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                      <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/city-guide-light.jpg"
                        alt="City Guide Demo">
                      <img class="position-relative z-2 d-none d-block-dark"
                        src="assets/img/mega-menu/city-guide-dark.jpg" alt="City Guide Demo">
                      <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark"
                        style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                      <span
                        class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark"
                        style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown position-static py-lg-2 me-lg-n1 me-xl-0">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                data-bs-trigger="hover" aria-expanded="false">Listings</a>
              <div class="dropdown-menu rounded-4 p-4">
                <div class="d-flex flex-column flex-lg-row gap-4">
                  <div style="min-width: 190px">
                    <div class="h6 mb-2">Real Estate</div>
                    <ul class="nav flex-column gap-2 mt-0">
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="listings-real-estate.php">Map/Listings Split View</a>
                      </li>
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="single-entry-real-estate.php">Property Details Page</a>
                      </li>
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="vendor-real-estate.php">Vendor Page</a>
                      </li>
                    </ul>
                    <div class="h6 pt-4 mb-2">Cars</div>
                    <ul class="nav flex-column gap-2 mt-0">
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="listings-grid-cars.php">Listings Grid View</a>
                      </li>
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="listings-list-cars.php">Listings List View</a>
                      </li>
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="single-entry-cars.php">Car Details Page</a>
                      </li>
                    </ul>
                    <div class="h6 pt-4 mb-2">Contractors</div>
                    <ul class="nav flex-column gap-2 mt-0">
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="listings-contractors.php">Listings with Side Filters</a>
                      </li>
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="single-entry-contractors.php">Contractor Details Page</a>
                      </li>
                    </ul>
                    <div class="h6 pt-4 mb-2">Doctors</div>
                    <ul class="nav flex-column gap-2 mt-0">
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="listings-list-doctors.php">Listings List View</a>
                      </li>
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="listings-grid-doctors.php">Listings Grid View</a>
                      </li>
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="single-entry-doctors.php">Doctor Details Page</a>
                      </li>
                    </ul>
                  </div>
                  <div style="min-width: 190px">
                    <div class="h6 mb-2">Events</div>
                    <ul class="nav flex-column gap-2 mt-0">
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="listings-events.php">Listings with Top Filters</a>
                      </li>
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="single-entry-events.php">Event Details Page</a>
                      </li>
                    </ul>
                    <div class="h6 pt-4 mb-2">City Guide</div>
                    <ul class="nav flex-column gap-2 mt-0">
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="listings-side-filters-city-guide.php">Listings with Side Filters</a>
                      </li>
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="listings-top-filters-city-guide.php">Listings with Top Filters</a>
                      </li>
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="single-entry-city-guide.php">Place Details Page</a>
                      </li>
                    </ul>
                    <div class="h6 pt-4 mb-2">Add Property</div>
                    <ul class="nav flex-column gap-2 mt-0">
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="add-property-type.php">Property type</a>
                      </li>
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="add-property-location.php">Location</a>
                      </li>
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="add-property-photos.php">Photos and Videos</a>
                      </li>
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="add-property-details.php">Property Details</a>
                      </li>
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="add-property-price.php">Price</a>
                      </li>
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="add-property-contact-info.php">Contact Info</a>
                      </li>
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="add-property-promotion.php">Ad Promotion</a>
                      </li>
                    </ul>
                  </div>
                  <div style="min-width: 190px">
                    <div class="h6 mb-2">Add Contractor</div>
                    <ul class="nav flex-column gap-2 mt-0">
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="add-contractor-location.php">Business Location</a>
                      </li>
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="add-contractor-services.php">Choose Services</a>
                      </li>
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="add-contractor-profile.php">Profile Details</a>
                      </li>
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="add-contractor-price-hours.php">Price and Hours</a>
                      </li>
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                          href="add-contractor-project.php">Create First Project</a>
                      </li>
                    </ul>
                    <div class="h6 pt-4 mb-2">Add (Sell) Car</div>
                    <ul class="nav flex-column gap-2 mt-0">
                      <li class="pt-1">
                        <a class="nav-link hover-effect-underline d-inline fw-normal p-0" href="add-car.php">Add (Sell)
                          Car Page</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown py-lg-2 me-lg-n1 me-xl-0">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Account</a>
              <ul class="dropdown-menu">
                <li class="dropend">
                  <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    data-bs-trigger="hover" aria-expanded="false">Auth Pages</a>
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
              <a class="nav-link dropdown-toggle active" aria-current="page" href="#" role="button"
                data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside"
                aria-expanded="false">Pages</a>
              <ul class="dropdown-menu">
                <li class="dropend">
                  <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown"
                    data-bs-trigger="hover" aria-expanded="false">About</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="about-v1.php">About v.1</a></li>
                    <li><a class="dropdown-item" href="about-v2.php">About v.2</a></li>
                  </ul>
                </li>
                <li class="dropend">
                  <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    data-bs-trigger="hover" aria-expanded="false">Blog</a>
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
                  <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    data-bs-trigger="hover" aria-expanded="false">Contact</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="contact-v1.php">Contact v.1</a></li>
                    <li><a class="dropdown-item" href="contact-v2.php">Contact v.2</a></li>
                    <li><a class="dropdown-item" href="contact-v3.php">Contact v.3</a></li>
                  </ul>
                </li>
                <li class="dropend">
                  <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    data-bs-trigger="hover" aria-expanded="false">Help Center</a>
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
                  <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    data-bs-trigger="hover" aria-expanded="false">404 Error</a>
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
            <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
              <a class="nav-link" href="ui-typography.php">Components</a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Button group -->
      <div class="d-flex gap-sm-1">

        <!-- Theme switcher (light/dark/auto) -->
        <div class="dropdown">
          <button type="button" class="theme-switcher btn btn-icon btn-outline-secondary fs-lg border-0 animate-scale"
            data-bs-toggle="dropdown" data-bs-display="dynamic" aria-expanded="false" aria-label="Toggle theme (light)">
            <span class="theme-icon-active d-flex animate-target">
              <i class="fi-sun"></i>
            </span>
          </button>
          <ul class="dropdown-menu start-50 translate-middle-x"
            style="--fn-dropdown-min-width: 9rem; --fn-dropdown-spacer: .5rem">
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
        <a class="btn btn-icon btn-outline-secondary fs-lg border-0 animate-shake me-2" href="account-signin.php"
          aria-label="Sign in to account">
          <i class="fi-user animate-target"></i>
        </a>

        <!-- Add property button  -->
        <a class="btn btn-primary animate-scale" href="add-property-type.php">
          <i class="fi-plus fs-lg animate-target ms-n2 me-1 me-sm-2"></i>
          Add<span class="d-none d-xl-inline ms-1">property</span>
        </a>
      </div>
    </div>
  </header>


  <!-- Page content -->
  <main class="content-wrapper">

    <!-- Hero with search form -->
    <section class="container pb-5 mb-lg-3">
      <div class="bg-info rounded" data-bs-theme="light">
        <div class="row align-items-center justify-content-center">

          <!-- Search form -->
          <div class="col-md-7 col-lg-6 offset-lg-1">
            <div class="pt-5 pb-3 pb-md-5 px-4 px-sm-5 ps-lg-0 pe-md-0">
              <h1 class="display-6 text-white text-center text-md-start mb-4">How can we help you?</h1>
              <div class="bg-body border rounded p-2">
                <form class="d-flex flex-column flex-sm-row gap-2 p-1">
                  <div class="position-relative w-100">
                    <i
                      class="fi-search position-absolute top-50 start-0 translate-middle-y fs-xl text-secondary-emphasis ms-2"></i>
                    <input type="search" class="form-control form-control-lg form-icon-start border-0 rounded-0"
                      placeholder="What do you need help with?">
                  </div>
                  <button type="submit" class="btn btn-lg btn-primary">Search</button>
                </form>
              </div>
            </div>
          </div>

          <!-- Image -->
          <div class="col-8 col-sm-6 col-md-5 col-xl-4 offset-xl-1 align-self-end">
            <div class="ps-md-5 ms-lg-2 ms-xl-0 ps-xl-0">
              <div class="ratio" style="--fn-aspect-ratio: calc(356 / 416 * 100%)">
                <img src="assets/img/help/v1/hero.png" alt="Image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Help topics -->
    <section class="container pb-5 mb-2 mb-sm-3 mb-md-4 mb-xl-5">

      <!-- Nav pills -->
      <ul class="nav nav-pills gap-2 pb-1 pb-sm-2 pb-md-3 pb-lg-0 mb-4 mb-lg-5">
        <li class="nav-item me-1">
          <a class="nav-link active" aria-current="page" href="#!">For tenants</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#!">For hosts</a>
        </li>
      </ul>

      <div class="row g-0">
        <div class="col-md-4 col-lg-3 pb-2 pb-sm-3 pb-md-0 mb-4 mb-md-0">
          <h2 class="h5 border-bottom pb-3 pb-sm-4 mb-0">Help topics</h2>

          <!-- Nav tabs in format of list group -->
          <div class="list-group list-group-borderless pt-4 pe-md-4" role="tablist">
            <a class="list-group-item list-group-item-action d-flex align-items-center fs-base active"
              href="#accommodation" data-bs-toggle="list" role="tab" aria-controls="accommodation"
              id="accommodation-tab" aria-selected="true">Accommodation</a>
            <a class="list-group-item list-group-item-action d-flex align-items-center fs-base" href="#booking"
              data-bs-toggle="list" role="tab" aria-controls="booking" id="booking-tab" aria-selected="false"
              tabindex="-1">Booking</a>
            <a class="list-group-item list-group-item-action d-flex align-items-center fs-base" href="#payment"
              data-bs-toggle="list" role="tab" aria-controls="payment" id="payment-tab" aria-selected="false"
              tabindex="-1">Payment</a>
            <a class="list-group-item list-group-item-action d-flex align-items-center fs-base" href="#after-booking"
              data-bs-toggle="list" role="tab" aria-controls="after-booking" id="after-booking-tab"
              aria-selected="false" tabindex="-1">After a booking</a>
            <a class="list-group-item list-group-item-action d-flex align-items-center fs-base" href="#cancellation"
              data-bs-toggle="list" role="tab" aria-controls="cancellation" id="cancellation-tab" aria-selected="false"
              tabindex="-1">Cancellation, notice, extension</a>
            <a class="list-group-item list-group-item-action d-flex align-items-center fs-base" href="#regulations"
              data-bs-toggle="list" role="tab" aria-controls="regulations" id="regulations-tab" aria-selected="false"
              tabindex="-1">Regulations</a>
            <a class="list-group-item list-group-item-action d-flex align-items-center fs-base" href="#insurances"
              data-bs-toggle="list" role="tab" aria-controls="insurances" id="insurances-tab" aria-selected="false"
              tabindex="-1">Insurances</a>
          </div>

        </div>
        <div class="col-md-8 col-lg-9">

          <!-- Tabs with links -->
          <div class="tab-content">

            <!-- Accommodation tab -->
            <div class="tab-pane show active" id="accommodation" role="tabpanel" aria-labelledby="accommodation-tab">
              <div class="d-flex border-bottom ps-md-4 pb-3 pb-sm-4">
                <h2 class="h5 mb-0">Accommodation</h2>
              </div>
              <div class="position-relative">
                <div class="position-absolute top-0 start-0 h-100 border-start d-none d-md-block"></div>
                <ul class="nav flex-column gap-3 pt-4 ps-md-4">
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What is included in my rental
                        accommodation?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Are utilities like water, electricity, and
                        internet included in the rent?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Can I view the property before I move
                        in?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What furniture is provided with the
                        accommodation?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Are pets allowed in the accommodation?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Is smoking permitted inside the
                        property?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">How do I report maintenance issues or repairs
                        needed in the accommodation?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What should I do if something in the property
                        is damaged when I move in?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Are there any restrictions on guests staying
                        over?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Can I make modifications or decorate the
                        property?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">How is the security of the property
                        managed?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What is the procedure for renewing my
                        lease?</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Booking tab -->
            <div class="tab-pane" id="booking" role="tabpanel" aria-labelledby="booking-tab">
              <div class="d-flex border-bottom ps-md-4 pb-3 pb-sm-4">
                <h2 class="h5 mb-0">Booking</h2>
              </div>
              <div class="position-relative">
                <div class="position-absolute top-0 start-0 h-100 border-start d-none d-md-block"></div>
                <ul class="nav flex-column gap-3 pt-4 ps-md-4">
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">How do I book a property on the
                        website?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What documents do I need to provide to make a
                        booking?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Can I book a property for a short-term
                        stay?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">How do I know if my booking is
                        confirmed?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What are the payment options available for
                        booking?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Can I book a property on behalf of someone
                        else?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What happens if the property I booked becomes
                        unavailable?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Can I change the dates of my booking after
                        it's confirmed?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Do I need to pay a deposit when making a
                        booking?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">How long does it take to process my
                        booking?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What is the policy for last-minute
                        bookings?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Is there a minimum stay requirement for
                        bookings?</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Payment tab -->
            <div class="tab-pane" id="payment" role="tabpanel" aria-labelledby="payment-tab">
              <div class="d-flex border-bottom ps-md-4 pb-3 pb-sm-4">
                <h2 class="h5 mb-0">Payment</h2>
              </div>
              <div class="position-relative">
                <div class="position-absolute top-0 start-0 h-100 border-start d-none d-md-block"></div>
                <ul class="nav flex-column gap-3 pt-4 ps-md-4">
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What payment methods are accepted?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">When is my rent due?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Can I set up automatic payments for my
                        rent?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Are there any fees associated with late
                        payments?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">How do I pay my rent online?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What should I do if I'm unable to make a
                        payment on time?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Is there a grace period for rent
                        payments?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">How do I receive a receipt for my
                        payment?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Can I split my payment into multiple
                        transactions?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What happens if my payment fails or is
                        declined?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Can I pay my rent in advance?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Are there any discounts for early or lump-sum
                        payments?</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- After a booking tab -->
            <div class="tab-pane" id="after-booking" role="tabpanel" aria-labelledby="after-booking-tab">
              <div class="d-flex border-bottom ps-md-4 pb-3 pb-sm-4">
                <h2 class="h5 mb-0">After a booking</h2>
              </div>
              <div class="position-relative">
                <div class="position-absolute top-0 start-0 h-100 border-start d-none d-md-block"></div>
                <ul class="nav flex-column gap-3 pt-4 ps-md-4">
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">How do I collect the keys for my
                        accommodation?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What should I do upon arrival at the
                        property?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Who do I contact if I have any issues after
                        moving in?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">How do I set up utilities like electricity and
                        internet?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What is the process for checking in to the
                        property?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Can I request additional services or amenities
                        after moving in?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">How do I update my contact information or
                        other details after booking?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What is the procedure if I need repairs or
                        maintenance?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">How do I report issues with my
                        neighbors?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Who is responsible for property maintenance
                        during my stay?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Can I upgrade or change my accommodation after
                        booking?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">How do I renew my lease if I want to stay
                        longer?</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Cancellation, notice, extension tab -->
            <div class="tab-pane" id="cancellation" role="tabpanel" aria-labelledby="cancellation-tab">
              <div class="d-flex border-bottom ps-md-4 pb-3 pb-sm-4">
                <h2 class="h5 mb-0">Cancellation, notice, extension</h2>
              </div>
              <div class="position-relative">
                <div class="position-absolute top-0 start-0 h-100 border-start d-none d-md-block"></div>
                <ul class="nav flex-column gap-3 pt-4 ps-md-4">
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What is the process for canceling my
                        booking?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Is there a penalty for canceling my
                        booking?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">How much notice do I need to give before
                        moving out?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Can I extend my stay after the initial booking
                        period?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What happens if I need to leave before my
                        lease ends?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">How do I request a lease extension?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Will I get a refund if I cancel my
                        booking?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What is the policy on early termination of the
                        lease?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">How do I provide notice if I plan to vacate
                        the property?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Can I transfer my lease to someone else if I
                        need to move?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What happens if the property owner cancels my
                        booking?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Is there a fee for extending my stay?</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Regulations tab -->
            <div class="tab-pane" id="regulations" role="tabpanel" aria-labelledby="regulations-tab">
              <div class="d-flex border-bottom ps-md-4 pb-3 pb-sm-4">
                <h2 class="h5 mb-0">Regulations</h2>
              </div>
              <div class="position-relative">
                <div class="position-absolute top-0 start-0 h-100 border-start d-none d-md-block"></div>
                <ul class="nav flex-column gap-3 pt-4 ps-md-4">
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What are the local laws regarding renting
                        accommodation?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Are there any noise regulations I need to
                        follow?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What are the rules regarding waste disposal
                        and recycling?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Are there any specific regulations for pet
                        owners?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Do I need to register with local authorities
                        after moving in?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What are the parking regulations for
                        tenants?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Are there restrictions on the type of
                        activities I can conduct in the property?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What should I do if I receive a notice of
                        violation?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Are there any occupancy limits for the
                        property?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What are the fire safety regulations I need to
                        follow?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">How are disputes with landlords or neighbors
                        handled legally?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What are the rules for subletting the
                        property?</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Insurances tab -->
            <div class="tab-pane" id="insurances" role="tabpanel" aria-labelledby="insurances-tab">
              <div class="d-flex border-bottom ps-md-4 pb-3 pb-sm-4">
                <h2 class="h5 mb-0">Insurances</h2>
              </div>
              <div class="position-relative">
                <div class="position-absolute top-0 start-0 h-100 border-start d-none d-md-block"></div>
                <ul class="nav flex-column gap-3 pt-4 ps-md-4">
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Do I need renter's insurance?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What does renter's insurance cover?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Is renter's insurance included in my
                        rent?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">How do I choose the right insurance policy for
                        my needs?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What happens if my belongings are damaged or
                        stolen?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Does the property owner's insurance cover
                        tenant belongings?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">How do I file a claim with my renter's
                        insurance?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What is the cost of renter's insurance?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Do I need additional insurance for valuable
                        items?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">What is the process for transferring my
                        insurance if I move?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">Is insurance required by law for
                        tenants?</span>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link position-relative fs-base fw-normal py-1 px-0"
                      href="help-single-article-v1.php">
                      <i class="fi-chevron-right fs-lg ms-n1 me-2"></i>
                      <span class="hover-effect-underline stretched-link">How does renter's insurance differ from
                        homeowner's insurance?</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact CTA -->
      <div class="pt-4 mt-2 mt-sm-3">
        <h3 class="fs-base pb-sm-1">Can't find an answer to your question?</h3>
        <a class="btn btn-lg btn-primary" href="contact-v1.php">Contact us</a>
      </div>
    </section>


    <!-- Popular articles -->
    <section class="bg-body-tertiary py-5">
      <div class="container py-1 py-sm-3 py-md-4 py-xl-5">
        <h2 class="pb-2 pb-md-3">Popular articles</h2>

        <!-- Filter nav pills -->
        <div class="d-flex align-items-center justify-content-between gap-3">
          <div class="overflow-x-auto pb-3 mb-3 mb-lg-4">
            <ul class="nav nav-pills flex-nowrap gap-2">
              <li class="nav-item me-1">
                <a class="nav-link text-nowrap active" aria-current="page" href="#!">All</a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link text-nowrap" href="#!">Accommodation</a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link text-nowrap" href="#!">Booking</a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link text-nowrap" href="#!">Payment</a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link text-nowrap" href="#!">Cancellation</a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link text-nowrap" href="#!">Insurances</a>
              </li>
            </ul>
          </div>
          <div class="nav pb-3 mb-3 mb-lg-4">
            <a class="nav-link position-relative text-nowrap p-0" href="#!">
              <span class="hover-effect-underline stretched-link">Browse all<span class="d-none d-sm-inline">
                  topics</span></span>
              <i class="fi-chevron-right fs-base mt-1 ms-1 me-n1"></i>
            </a>
          </div>
        </div>

        <!-- Grid of articles that turns into carousel on screens <992px wide (lg breakpoint) -->
        <div class="swiper" data-swiper='{
            "slidesPerView": 1,
            "spaceBetween": 24,
            "autoHeight": true,
            "pagination": {
              "el": ".swiper-pagination",
              "clickable": true
            },
            "breakpoints": {
              "500": {
                "slidesPerView": 2
              },
              "992": {
                "slidesPerView": 3
              }
            }
          }'>
          <div class="swiper-wrapper">

            <!-- Article -->
            <article class="swiper-slide">
              <a class="ratio d-flex hover-effect-scale bg-body-secondary rounded overflow-hidden"
                href="help-single-article-v1.php" style="--fn-aspect-ratio: calc(300 / 416 * 100%)">
                <img src="assets/img/help/v1/01.jpg" class="hover-effect-target" alt="Image">
              </a>
              <div class="pt-4">
                <div class="text-body-secondary fs-xs text-uppercase pb-2 mt-n1 mb-1">Accommodation</div>
                <h3 class="h5 mb-2">
                  <a class="hover-effect-underline" href="help-single-article-v1.php">Renting out a condo</a>
                </h3>
                <p class="fs-sm mb-0">Maximize your investment by renting out your condo - unlock a steady income stream
                  and build wealth over time...</p>
              </div>
            </article>

            <!-- Article -->
            <article class="swiper-slide">
              <a class="ratio d-flex hover-effect-scale bg-body-secondary rounded overflow-hidden"
                href="help-single-article-v1.php" style="--fn-aspect-ratio: calc(300 / 416 * 100%)">
                <img src="assets/img/help/v1/02.jpg" class="hover-effect-target" alt="Image">
              </a>
              <div class="pt-4">
                <div class="text-body-secondary fs-xs text-uppercase pb-2 mt-n1 mb-1">Insurances</div>
                <h3 class="h5 mb-2">
                  <a class="hover-effect-underline" href="help-single-article-v1.php">What is renters' insurance?</a>
                </h3>
                <p class="fs-sm mb-0">Renters' insurance is a type of insurance policy that provides coverage for
                  tenants renting a home or apartment...</p>
              </div>
            </article>

            <!-- Article -->
            <article class="swiper-slide">
              <a class="ratio d-flex hover-effect-scale bg-body-secondary rounded overflow-hidden"
                href="help-single-article-v1.php" style="--fn-aspect-ratio: calc(300 / 416 * 100%)">
                <img src="assets/img/help/v1/03.jpg" class="hover-effect-target" alt="Image">
              </a>
              <div class="pt-4">
                <div class="text-body-secondary fs-xs text-uppercase pb-2 mt-n1 mb-1">Booking</div>
                <h3 class="h5 mb-2">
                  <a class="hover-effect-underline" href="help-single-article-v1.php">Tips and tricks for renters</a>
                </h3>
                <p class="fs-sm mb-0">Unlock your best renting experience with our essential tips and tricks, designed
                  to help you save money and find the...</p>
              </div>
            </article>
          </div>

          <!-- Pagination (Bullets) -->
          <div class="swiper-pagination position-static mt-3 mt-md-4"></div>
        </div>
      </div>
    </section>


    <!-- FAQ (Accordion) -->
    <section class="container py-5 mb-xxl-3">
      <div class="row py-1 py-sm-2 py-md-3 py-lg-4 py-xl-5">
        <div class="col-md-4 col-xl-3 mb-4 mb-md-0" style="margin-top: -120px">
          <div class="sticky-md-top text-center text-md-start pe-md-4 pe-lg-5 pe-xl-0" style="padding-top: 120px;">
            <h2>Popular FAQs</h2>
            <p class="pb-2 pb-md-3">Still have unanswered questions and need to get in touch?</p>
            <a class="btn btn-lg btn-primary" href="contact-v1.php">Contact us</a>
          </div>
        </div>
        <div class="col-md-8 offset-xl-1">

          <!-- Accordion of questions -->
          <div class="accordion" id="faq">

            <!-- Question -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHeading-1">
                <button type="button" class="accordion-button hover-effect-underline collapsed"
                  data-bs-toggle="collapse" data-bs-target="#faqCollapse-1" aria-expanded="false"
                  aria-controls="faqCollapse-1">
                  <span class="me-2">How do I start the process of buying a home?</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="faqCollapse-1" aria-labelledby="faqHeading-1"
                data-bs-parent="#faq">
                <div class="accordion-body">The first step is to assess your financial situation and get pre-approved
                  for a mortgage. This will give you a clear understanding of your budget. After that, you can start
                  searching for properties that match your criteria and work with a real estate agent to guide you
                  through the process.</div>
              </div>
            </div>

            <!-- Question -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHeading-2">
                <button type="button" class="accordion-button hover-effect-underline collapsed"
                  data-bs-toggle="collapse" data-bs-target="#faqCollapse-2" aria-expanded="false"
                  aria-controls="faqCollapse-2">
                  <span class="me-2">What should I consider when choosing a neighborhood?</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="faqCollapse-2" aria-labelledby="faqHeading-2"
                data-bs-parent="#faq">
                <div class="accordion-body">Consider factors such as the proximity to schools, work, public
                  transportation, safety, and local amenities like shops and parks. It’s also important to research the
                  neighborhood's future development plans and property value trends.</div>
              </div>
            </div>

            <!-- Question -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHeading-3">
                <button type="button" class="accordion-button hover-effect-underline collapsed"
                  data-bs-toggle="collapse" data-bs-target="#faqCollapse-3" aria-expanded="false"
                  aria-controls="faqCollapse-3">
                  <span class="me-2">How much should I budget for closing costs?</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="faqCollapse-3" aria-labelledby="faqHeading-3"
                data-bs-parent="#faq">
                <div class="accordion-body">Closing costs typically range from 2% to 5% of the home's purchase price.
                  These costs can include loan origination fees, title insurance, attorney fees, and other related
                  expenses. It's advisable to set aside additional funds for these costs.</div>
              </div>
            </div>

            <!-- Question -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHeading-4">
                <button type="button" class="accordion-button hover-effect-underline collapsed"
                  data-bs-toggle="collapse" data-bs-target="#faqCollapse-4" aria-expanded="false"
                  aria-controls="faqCollapse-4">
                  <span class="me-2">Is it better to rent or buy a home?</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="faqCollapse-4" aria-labelledby="faqHeading-4"
                data-bs-parent="#faq">
                <div class="accordion-body">This depends on your personal financial situation, lifestyle, and long-term
                  goals. Buying is often considered a good investment, but it requires a significant upfront cost and
                  ongoing maintenance. Renting offers more flexibility and fewer responsibilities, but you won't build
                  equity.</div>
              </div>
            </div>

            <!-- Question -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHeading-5">
                <button type="button" class="accordion-button hover-effect-underline collapsed"
                  data-bs-toggle="collapse" data-bs-target="#faqCollapse-5" aria-expanded="false"
                  aria-controls="faqCollapse-5">
                  <span class="me-2">How do I determine the right price to offer on a home?</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="faqCollapse-5" aria-labelledby="faqHeading-5"
                data-bs-parent="#faq">
                <div class="accordion-body">Research comparable properties in the area that have recently sold to get a
                  sense of the market value. Your real estate agent can also provide a comparative market analysis (CMA)
                  to help determine a fair offer based on the property's condition, location, and market demand.</div>
              </div>
            </div>

            <!-- Question -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHeading-6">
                <button type="button" class="accordion-button hover-effect-underline collapsed"
                  data-bs-toggle="collapse" data-bs-target="#faqCollapse-6" aria-expanded="false"
                  aria-controls="faqCollapse-6">
                  <span class="me-2">What should I look for during a home inspection?</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="faqCollapse-6" aria-labelledby="faqHeading-6"
                data-bs-parent="#faq">
                <div class="accordion-body">During a home inspection, focus on the structural integrity of the property,
                  including the roof, foundation, plumbing, electrical systems, and HVAC. Look for signs of water
                  damage, mold, and pests. The inspector will provide a detailed report, which can be used to negotiate
                  repairs or price adjustments.</div>
              </div>
            </div>

            <!-- Question -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHeading-7">
                <button type="button" class="accordion-button hover-effect-underline collapsed"
                  data-bs-toggle="collapse" data-bs-target="#faqCollapse-7" aria-expanded="false"
                  aria-controls="faqCollapse-7">
                  <span class="me-2">What are the benefits of getting a pre-approved mortgage?</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="faqCollapse-7" aria-labelledby="faqHeading-7"
                data-bs-parent="#faq">
                <div class="accordion-body">Getting pre-approved for a mortgage shows sellers that you are a serious
                  buyer and can afford the property. It also helps you set a realistic budget and speeds up the
                  home-buying process since your financial documents are already in order.</div>
              </div>
            </div>

            <!-- Question -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHeading-8">
                <button type="button" class="accordion-button hover-effect-underline collapsed"
                  data-bs-toggle="collapse" data-bs-target="#faqCollapse-8" aria-expanded="false"
                  aria-controls="faqCollapse-8">
                  <span class="me-2">How can I make my home more appealing to buyers?</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="faqCollapse-8" aria-labelledby="faqHeading-8"
                data-bs-parent="#faq">
                <div class="accordion-body">To make your home more appealing, focus on curb appeal by maintaining the
                  exterior, landscaping, and entryway. Inside, declutter, clean thoroughly, and consider staging the
                  home with neutral décor to allow buyers to envision themselves living there. Address any necessary
                  repairs and updates.</div>
              </div>
            </div>

            <!-- Question -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHeading-9">
                <button type="button" class="accordion-button hover-effect-underline collapsed"
                  data-bs-toggle="collapse" data-bs-target="#faqCollapse-9" aria-expanded="false"
                  aria-controls="faqCollapse-9">
                  <span class="me-2">What is a seller's market vs. a buyer's market?</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="faqCollapse-9" aria-labelledby="faqHeading-9"
                data-bs-parent="#faq">
                <div class="accordion-body">A seller's market occurs when there are more buyers than available
                  properties, leading to higher prices and quicker sales. A buyer's market happens when there are more
                  properties than buyers, giving buyers more negotiating power and typically leading to lower prices.
                </div>
              </div>
            </div>

            <!-- Question -->
            <div class="accordion-item">
              <h3 class="accordion-header" id="faqHeading-10">
                <button type="button" class="accordion-button hover-effect-underline collapsed"
                  data-bs-toggle="collapse" data-bs-target="#faqCollapse-10" aria-expanded="false"
                  aria-controls="faqCollapse-10">
                  <span class="me-2">How long does it take to close on a home?</span>
                </button>
              </h3>
              <div class="accordion-collapse collapse" id="faqCollapse-10" aria-labelledby="faqHeading-10"
                data-bs-parent="#faq">
                <div class="accordion-body">The closing process typically takes 30 to 45 days, depending on various
                  factors such as the type of loan, the efficiency of the involved parties, and any unforeseen issues
                  that may arise. Staying organized and responsive can help ensure a smoother, faster closing process.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


  <!-- Page footer -->
  <?php include('partials/footer.php') ?>

  <!-- Back to top button -->
  <div class="floating-buttons position-fixed top-50 end-0 z-sticky me-3 me-xl-4 pb-4">
    <a class="btn-scroll-top btn btn-sm bg-body border-0 rounded-pill shadow animate-slide-end" href="#top">
      Top
      <i class="fi-arrow-right fs-base ms-1 me-n1 animate-target"></i>
      <span class="position-absolute top-0 start-0 w-100 h-100 border rounded-pill z-0"></span>
      <svg class="position-absolute top-0 start-0 w-100 h-100 z-1" viewBox="0 0 62 32" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <rect x=".75" y=".75" width="60.5" height="30.5" rx="15.25" stroke="currentColor" stroke-width="1.5"
          stroke-miterlimit="10" />
      </svg>
    </a>
  </div>


  <!-- Vendor scripts -->
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <?php include('partials/footer-scripts.php'); ?>
</body>

</html>