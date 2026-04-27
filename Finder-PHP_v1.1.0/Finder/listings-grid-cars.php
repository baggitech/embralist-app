<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>
  <?php $title = "Cars - Listings Grid View"; include('partials/title-meta.php'); ?>

  <!-- Vendor styles -->
  <link rel="stylesheet" href="assets/vendor/nouislider/dist/nouislider.min.css">
  <link rel="stylesheet" href="assets/vendor/choices.js/public/assets/styles/choices.min.css">
  <link rel="stylesheet" href="assets/vendor/simplebar/dist/simplebar.min.css">

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
      <a class="navbar-brand py-1 py-md-2 py-xl-1 me-2 me-sm-n4 me-md-n5 me-lg-0" href="home-cars.php">
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
              <a class="nav-link dropdown-toggle active" aria-current="page" href="#" role="button"
                data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Listings</a>
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
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Pages</a>
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
      <nav class="pb-2" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home-cars.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Used cars</li>
        </ol>
      </nav>


      <!-- Active filters -->
      <div class="d-flex align-items-center gap-3 border-bottom pb-2 mb-4">
        <div class="fs-sm text-nowrap pb-3"><span class="d-none d-md-inline">Showing</span> 142 results</div>
        <div class="w-100 pb-3 overflow-x-auto">
          <div class="d-flex gap-2">
            <button type="button" class="btn btn-sm btn-secondary rounded-pill">
              <i class="fi-close fs-sm me-1 ms-n1"></i>
              Sedan
            </button>
            <button type="button" class="btn btn-sm btn-secondary rounded-pill">
              <i class="fi-close fs-sm me-1 ms-n1"></i>
              SUV
            </button>
            <button type="button" class="btn btn-sm btn-secondary rounded-pill">
              <i class="fi-close fs-sm me-1 ms-n1"></i>
              Coupe
            </button>
            <button type="button" class="btn btn-sm btn-secondary rounded-pill">
              <i class="fi-close fs-sm me-1 ms-n1"></i>
              Under 2023
            </button>
            <button type="button" class="btn btn-sm btn-secondary rounded-pill">
              <i class="fi-close fs-sm me-1 ms-n1"></i>
              $17,000 - $120,000
            </button>
          </div>
        </div>
        <div class="nav pb-3">
          <a class="nav-link fs-xs text-decoration-underline text-nowrap p-0" href="#!">Clear all</a>
        </div>
      </div>


      <!-- Filter sidebar + Listings grid view -->
      <div class="row pt-md-2 pt-lg-3 pb-2 pb-sm-3 pb-md-4 pb-lg-5">

        <!-- Filter sidebar that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
        <aside class="col-lg-3">
          <div class="offcanvas-lg offcanvas-start pe-lg-2 pe-xl-3 pe-xxl-4" id="filterSidebar">
            <div class="offcanvas-header border-bottom py-3">
              <h3 class="h5 offcanvas-title">Filters</h3>
              <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas"
                data-bs-target="#filterSidebar" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-block">

              <!-- Condition -->
              <ul class="nav nav-pills flex-sm-nowrap gap-2 text-nowrap pb-4 mb-2 mb-xl-3">
                <li class="nav-item me-1">
                  <a class="nav-link" href="#!">New cars</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#!">Used cars</a>
                </li>
              </ul>

              <!-- Location -->
              <div class="pb-4 mb-2 mb-xl-3">
                <h4 class="h6">Location and radius</h4>
                <div class="vstack gap-3">
                  <div class="position-relative">
                    <i class="fi-map-pin position-absolute top-50 start-0 translate-middle-y z-1 ms-3"></i>
                    <select class="form-select form-icon-start" data-select='{
                        "classNames": {
                          "containerInner": ["form-select", "form-icon-start"]
                        },
                        "searchEnabled": true
                      }' aria-label="Car location select">
                      <option value="">Any location</option>
                      <option value="New York">New York</option>
                      <option value="Los Angeles">Los Angeles</option>
                      <option value="Chicago">Chicago</option>
                      <option value="Houston">Houston</option>
                      <option value="Phoenix">Phoenix</option>
                      <option value="Philadelphia">Philadelphia</option>
                      <option value="San Antonio">San Antonio</option>
                      <option value="San Diego">San Diego</option>
                      <option value="Dallas">Dallas</option>
                      <option value="San Jose">San Jose</option>
                    </select>
                  </div>
                  <div class="position-relative">
                    <i class="fi-navigation position-absolute top-50 start-0 translate-middle-y z-1 ms-3"></i>
                    <select class="form-select form-icon-start" data-select='{
                        "classNames": {
                          "containerInner": ["form-select", "form-icon-start"]
                        }
                      }' aria-label="Location radius select">
                      <option value="">Any radius</option>
                      <option value="10 mi">10 mi</option>
                      <option value="20 mi">20 mi</option>
                      <option value="30 mi">30 mi</option>
                      <option value="40 mi">40 mi</option>
                      <option value="50 mi">50 mi</option>
                      <option value="60 mi">60 mi</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- Body type -->
              <div class="pb-4 mb-2 mb-xl-3">
                <h4 class="h6">Body type</h4>
                <div style="height: 202px" data-simplebar data-simplebar-auto-hide="false">
                  <div class="d-flex flex-column gap-2">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="sedan" checked>
                      <label class="form-check-label fs-sm" for="sedan">Sedan</label>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="suv" checked>
                      <label class="form-check-label fs-sm" for="suv">SUV</label>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="wagon">
                      <label class="form-check-label fs-sm" for="wagon">Wagon</label>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="crossover">
                      <label class="form-check-label fs-sm" for="crossover">Crossover</label>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="coupe" checked>
                      <label class="form-check-label fs-sm" for="coupe">Coupe</label>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="pickup">
                      <label class="form-check-label fs-sm" for="pickup">Pickup</label>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="sport">
                      <label class="form-check-label fs-sm" for="sport">Sport Coupe</label>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="compact">
                      <label class="form-check-label fs-sm" for="compact">Compact</label>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="convertible">
                      <label class="form-check-label fs-sm" for="convertible">Convertible</label>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="mpv">
                      <label class="form-check-label fs-sm" for="mpv">Family MPV</label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Year -->
              <div class="pb-4 mb-2 mb-xl-3">
                <h4 class="h6">Year</h4>
                <div class="d-flex align-items-center">
                  <div class="w-50">
                    <select class="form-select" data-select aria-label="Car year from select">
                      <option value="">From</option>
                      <option value="2025">2025</option>
                      <option value="2024">2024</option>
                      <option value="2023">2023</option>
                      <option value="2023">2023</option>
                      <option value="2021">2021</option>
                      <option value="2020">2020</option>
                      <option value="2019">2019</option>
                      <option value="2018">2018</option>
                      <option value="2017">2017</option>
                      <option value="2016">2016</option>
                      <option value="2015">2015</option>
                    </select>
                  </div>
                  <i class="fi-minus mx-3 mx-lg-1 mx-xl-2 mx-xxl-3"></i>
                  <div class="w-50">
                    <select class="form-select" data-select aria-label="Car year from select">
                      <option value="">To</option>
                      <option value="2025">2025</option>
                      <option value="2024">2024</option>
                      <option value="2023" selected>2023</option>
                      <option value="2023">2023</option>
                      <option value="2021">2021</option>
                      <option value="2020">2020</option>
                      <option value="2019">2019</option>
                      <option value="2018">2018</option>
                      <option value="2017">2017</option>
                      <option value="2016">2016</option>
                      <option value="2015">2015</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- Make and model -->
              <div class="pb-4 mb-2 mb-xl-3">
                <h4 class="h6">Make and model</h4>
                <div class="vstack gap-3">
                  <select class="form-select" data-select='{"searchEnabled": true}' aria-label="Car make select">
                    <option value="">Any make</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Mercedes-Benz">Mercedes-Benz</option>
                    <option value="BMW">BMW</option>
                    <option value="Honda">Honda</option>
                    <option value="Ford">Ford</option>
                    <option value="Chevrolet">Chevrolet</option>
                    <option value="Audi">Audi</option>
                    <option value="Tesla">Tesla</option>
                    <option value="Tesla">Mazda</option>
                    <option value="Nissan">Nissan</option>
                    <option value="Volkswagen">Volkswagen</option>
                  </select>
                  <select class="form-select" data-select='{"searchEnabled": true}' aria-label="Car model select">
                    <option value="">Any model</option>
                    <option value="A-Class">A-Class</option>
                    <option value="C-Class">C-Class</option>
                    <option value="E-Class">E-Class</option>
                    <option value="S-Class">S-Class</option>
                    <option value="A205">A205</option>
                    <option value="GLA">GLA</option>
                    <option value="GLC">GLC</option>
                    <option value="GLE">GLE</option>
                    <option value="GLS">GLS</option>
                    <option value="AMG GT">AMG GT</option>
                  </select>
                </div>
              </div>

              <!-- Price -->
              <div class="pb-4 mb-2 mb-xl-3">
                <h4 class="h6 pb-2" id="headingPrice">Price</h4>
                <div class="range-slider pb-1 mb-3"
                  data-range-slider='{"startMin": 17000, "startMax": 120000, "min": 2000, "max": 200000, "step": 500, "tooltipPrefix": "$"}'
                  aria-labelledby="headingPrice">
                  <div class="range-slider-ui"></div>
                  <div class="d-flex align-items-center">
                    <div class="position-relative w-50">
                      <i class="fi-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                      <input type="number" class="form-control form-icon-start" min="2000" max="100000" step="500"
                        data-range-slider-min>
                    </div>
                    <i class="fi-minus text-body-emphasis mx-2"></i>
                    <div class="position-relative w-50">
                      <i class="fi-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                      <input type="number" class="form-control form-icon-start" min="5000" max="200000" step="500"
                        data-range-slider-max>
                    </div>
                  </div>
                </div>
                <div class="form-check form-switch mb-0">
                  <input type="checkbox" class="form-check-input" role="switch" id="negotiate">
                  <label for="negotiate" class="form-check-label">Negotiated price</label>
                </div>
              </div>

              <!-- Drivetrain -->
              <div class="pb-4 mb-2 mb-xl-3">
                <h4 class="h6">Drivetrain</h4>
                <div class="d-flex flex-column gap-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="awd">
                    <label class="form-check-label fs-sm" for="awd">AWD/4WD</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="fwd">
                    <label class="form-check-label fs-sm" for="fwd">Front Wheel Drive</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="rwd">
                    <label class="form-check-label fs-sm" for="rwd">Rear Wheel Drive</label>
                  </div>
                </div>
              </div>

              <!-- Fuel type -->
              <div class="pb-4 mb-2 mb-xl-3">
                <h4 class="h6">Fuel type</h4>
                <div class="d-flex flex-column gap-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="gas">
                    <label class="form-check-label fs-sm" for="gas">Gasoline</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="diesel">
                    <label class="form-check-label fs-sm" for="diesel">Diesel</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="electric">
                    <label class="form-check-label fs-sm" for="electric">Electric</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="hybrid">
                    <label class="form-check-label fs-sm" for="hybrid">Hybrid</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="plugin">
                    <label class="form-check-label fs-sm" for="plugin">Plug-in Hybrid</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="hydrogen">
                    <label class="form-check-label fs-sm" for="hydrogen">Hydrogen</label>
                  </div>
                </div>
              </div>

              <!-- Transmission -->
              <div class="pb-4 mb-2 mb-xl-3">
                <h4 class="h6">Transmission</h4>
                <div class="d-flex flex-column gap-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="auto">
                    <label class="form-check-label fs-sm" for="auto">Automatic</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="manual">
                    <label class="form-check-label fs-sm" for="manual">Manual</label>
                  </div>
                </div>
              </div>

              <!-- Mileage -->
              <div class="pb-4 mb-2 mb-xl-3">
                <h4 class="h6">Mileage</h4>
                <div class="d-flex align-items-center">
                  <input type="number" class="form-control w-50" step="500" placeholder="From">
                  <i class="fi-minus mx-3 mx-lg-1 mx-xl-2 mx-xxl-3"></i>
                  <input type="number" class="form-control w-50" step="500" placeholder="To">
                </div>
              </div>

              <!-- Color -->
              <div class="pb-4 mb-2 mb-xl-3">
                <h4 class="h6">Color</h4>
                <div style="height: 202px" data-simplebar data-simplebar-auto-hide="false">
                  <div class="d-flex flex-column gap-2">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="amber">
                      <label class="form-check-label fs-sm" for="amber">Amber</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="azure">
                      <label class="form-check-label fs-sm" for="azure">Azure</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="beige">
                      <label class="form-check-label fs-sm" for="beige">Beige</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="black">
                      <label class="form-check-label fs-sm" for="black">Black</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="blue">
                      <label class="form-check-label fs-sm" for="blue">Blue</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="brown">
                      <label class="form-check-label fs-sm" for="brown">Brown</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="camouflage">
                      <label class="form-check-label fs-sm" for="camouflage">Camouflage green</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="charcoal">
                      <label class="form-check-label fs-sm" for="charcoal">Charcoal</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gray">
                      <label class="form-check-label fs-sm" for="gray">Gray</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="green">
                      <label class="form-check-label fs-sm" for="green">Green</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gold">
                      <label class="form-check-label fs-sm" for="gold">Gold</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="purple">
                      <label class="form-check-label fs-sm" for="purple">Purple</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="red">
                      <label class="form-check-label fs-sm" for="red">Red</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="white">
                      <label class="form-check-label fs-sm" for="white">White</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="yellow">
                      <label class="form-check-label fs-sm" for="yellow">Yellow</label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Sellers -->
              <div class="pb-2 pb-lg-0">
                <h4 class="h6">Sellers</h4>
                <div class="d-flex flex-column gap-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dealers">
                    <label class="form-check-label fs-sm" for="dealers">Dealers Only</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="private">
                    <label class="form-check-label fs-sm" for="private">Private Sellers Only</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </aside>


        <!-- Listings grid view -->
        <div class="col-lg-9">

          <!-- Sorting + View switcher -->
          <div class="d-flex align-items-center gap-2 gap-sm-3 pb-3 mb-2">
            <div class="position-relative" style="width: 125px">
              <i class="fi-sort position-absolute top-50 start-0 translate-middle-y z-2"></i>
              <select class="form-select border-0 rounded-0 ps-4 pe-1" data-select='{
                  "removeItemButton": false,
                  "classNames": {
                    "containerInner": ["form-select", "border-0", "rounded-0", "ps-4", "pe-1"]
                  }
                }'>
                <option value="Popular">Popular</option>
                <option value="Newest">Newest</option>
              </select>
            </div>
            <div class="nav ms-auto">
              <a class="nav-link fw-normal p-0" href="#!">
                <i class="fi-repeat fs-base me-2"></i>
                Compare (1)
              </a>
            </div>
            <div class="nav">
              <a class="nav-link fs-xl text-body-secondary py-0 px-2 active pe-none" href="listings-grid-cars.php"
                aria-label="Grid view">
                <i class="fi-grid"></i>
              </a>
              <a class="nav-link fs-xl text-body-secondary py-0 px-2" href="listings-list-cars.php"
                aria-label="List view">
                <i class="fi-list"></i>
              </a>
            </div>
          </div>

          <!-- Grid of items -->
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-2 row-cols-xl-3 g-4 g-sm-3 g-lg-4">

            <!-- Listing -->
            <div class="col">
              <article class="card h-100 hover-effect-scale bg-body-tertiary border-0">
                <div class="card-img-top position-relative overflow-hidden">
                  <div
                    class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                    <span class="badge text-bg-info d-inline-flex align-items-center">
                      Verified
                      <i class="fi-shield ms-1"></i>
                    </span>
                    <span class="badge text-bg-warning">Used</span>
                  </div>
                  <div class="ratio hover-effect-target bg-body-secondary"
                    style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                    <img src="assets/img/listings/cars/grid/01.jpg" alt="Image">
                  </div>
                </div>
                <div class="card-body pb-3">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="fs-xs text-body-secondary me-3">27/05/2024</div>
                    <div class="d-flex gap-2 position-relative z-2">
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist"
                        aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify" aria-label="Notify">
                        <i class="fi-bell animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Compare" aria-label="Compare">
                        <i class="fi-repeat animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <h3 class="h6 mb-2">
                    <a class="hover-effect-underline stretched-link me-1" href="single-entry-cars.php">Volvo XC90 Sport
                      4WD</a>
                    <span class="fs-xs fw-normal text-body-secondary">(2019)</span>
                  </h3>
                  <div class="h6 mb-0">$43,500</div>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                  <div class="border-top pt-3">
                    <div class="row row-cols-2 g-2 fs-sm">
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-map-pin"></i>
                        Houston
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-tachometer"></i>
                        78K mi
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gas-pump"></i>
                        Diesel
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gearbox"></i>
                        Automatic
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>

            <!-- Listing -->
            <div class="col">
              <article class="card h-100 hover-effect-scale bg-body-tertiary border-0">
                <div class="card-img-top position-relative overflow-hidden">
                  <div
                    class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                    <span class="badge text-bg-warning">Used</span>
                  </div>
                  <div class="ratio hover-effect-target bg-body-secondary"
                    style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                    <img src="assets/img/listings/cars/grid/02.jpg" alt="Image">
                  </div>
                </div>
                <div class="card-body pb-3">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="fs-xs text-body-secondary me-3">16/08/2024</div>
                    <div class="d-flex gap-2 position-relative z-2">
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist"
                        aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify" aria-label="Notify">
                        <i class="fi-bell animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Compare" aria-label="Compare">
                        <i class="fi-repeat animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <h3 class="h6 mb-2">
                    <a class="hover-effect-underline stretched-link me-1" href="single-entry-cars.php">Porsche 911
                      Turbo S</a>
                    <span class="fs-xs fw-normal text-body-secondary">(2017)</span>
                  </h3>
                  <div class="h6 mb-0">$85,000</div>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                  <div class="border-top pt-3">
                    <div class="row row-cols-2 g-2 fs-sm">
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-map-pin"></i>
                        Chicago
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-tachometer"></i>
                        32K mi
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gas-pump"></i>
                        Gasoline
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gearbox"></i>
                        Manual
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>

            <!-- Listing -->
            <div class="col">
              <article class="card h-100 hover-effect-scale bg-body-tertiary border-0">
                <div class="card-img-top position-relative overflow-hidden">
                  <div
                    class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                    <span class="badge text-bg-warning">Used</span>
                  </div>
                  <div class="ratio hover-effect-target bg-body-secondary"
                    style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                    <img src="assets/img/listings/cars/grid/03.jpg" alt="Image">
                  </div>
                </div>
                <div class="card-body pb-3">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="fs-xs text-body-secondary me-3">30/09/2024</div>
                    <div class="d-flex gap-2 position-relative z-2">
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist"
                        aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify" aria-label="Notify">
                        <i class="fi-bell animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Compare" aria-label="Compare">
                        <i class="fi-repeat animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <h3 class="h6 mb-2">
                    <a class="hover-effect-underline stretched-link me-1" href="single-entry-cars.php">Ford Truck
                      Lifted</a>
                    <span class="fs-xs fw-normal text-body-secondary">(2022)</span>
                  </h3>
                  <div class="h6 mb-0">$63,000</div>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                  <div class="border-top pt-3">
                    <div class="row row-cols-2 g-2 fs-sm">
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-map-pin"></i>
                        Boston
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-tachometer"></i>
                        17K mi
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gas-pump"></i>
                        Diesel
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gearbox"></i>
                        Automatic
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>

            <!-- Listing -->
            <div class="col">
              <article class="card h-100 hover-effect-scale bg-body-tertiary border-0">
                <div class="card-img-top position-relative overflow-hidden">
                  <div
                    class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                    <span class="badge text-bg-warning">Used</span>
                  </div>
                  <div class="ratio hover-effect-target bg-body-secondary"
                    style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                    <img src="assets/img/listings/cars/grid/04.jpg" alt="Image">
                  </div>
                </div>
                <div class="card-body pb-3">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="fs-xs text-body-secondary me-3">15/07/2024</div>
                    <div class="d-flex gap-2 position-relative z-2">
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist"
                        aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify" aria-label="Notify">
                        <i class="fi-bell animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Compare" aria-label="Compare">
                        <i class="fi-repeat animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <h3 class="h6 mb-2">
                    <a class="hover-effect-underline stretched-link me-1" href="single-entry-cars.php">Mercedes-Benz
                      A205</a>
                    <span class="fs-xs fw-normal text-body-secondary">(2021)</span>
                  </h3>
                  <div class="h6 mb-0">$41,900</div>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                  <div class="border-top pt-3">
                    <div class="row row-cols-2 g-2 fs-sm">
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-map-pin"></i>
                        Chicago
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-tachometer"></i>
                        60K mi
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gas-pump"></i>
                        Gasoline
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gearbox"></i>
                        Automatic
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>

            <!-- Listing -->
            <div class="col">
              <article class="card h-100 hover-effect-scale bg-body-tertiary border-0">
                <div class="card-img-top position-relative overflow-hidden">
                  <div
                    class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                    <span class="badge text-bg-info d-inline-flex align-items-center">
                      Verified
                      <i class="fi-shield ms-1"></i>
                    </span>
                    <span class="badge text-bg-warning">Used</span>
                  </div>
                  <div class="ratio hover-effect-target bg-body-secondary"
                    style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                    <img src="assets/img/listings/cars/grid/05.jpg" alt="Image">
                  </div>
                </div>
                <div class="card-body pb-3">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="fs-xs text-body-secondary me-3">23/04/2024</div>
                    <div class="d-flex gap-2 position-relative z-2">
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist"
                        aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify" aria-label="Notify">
                        <i class="fi-bell animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Compare" aria-label="Compare">
                        <i class="fi-repeat animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <h3 class="h6 mb-2">
                    <a class="hover-effect-underline stretched-link me-1" href="single-entry-cars.php">Mercedes-Benz
                      Coupe</a>
                    <span class="fs-xs fw-normal text-body-secondary">(2021)</span>
                  </h3>
                  <div class="h6 mb-0">$115,400</div>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                  <div class="border-top pt-3">
                    <div class="row row-cols-2 g-2 fs-sm">
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-map-pin"></i>
                        New York
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-tachometer"></i>
                        15K mi
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gas-pump"></i>
                        Gasoline
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gearbox"></i>
                        Manual
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>

            <!-- Listing -->
            <div class="col">
              <article class="card h-100 hover-effect-scale bg-body-tertiary border-0">
                <div class="card-img-top position-relative overflow-hidden">
                  <div
                    class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                    <span class="badge text-bg-info d-inline-flex align-items-center">
                      Verified
                      <i class="fi-shield ms-1"></i>
                    </span>
                    <span class="badge text-bg-warning">Used</span>
                  </div>
                  <div class="ratio hover-effect-target bg-body-secondary"
                    style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                    <img src="assets/img/listings/cars/grid/06.jpg" alt="Image">
                  </div>
                </div>
                <div class="card-body pb-3">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="fs-xs text-body-secondary me-3">28/06/2024</div>
                    <div class="d-flex gap-2 position-relative z-2">
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist"
                        aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify" aria-label="Notify">
                        <i class="fi-bell animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Compare" aria-label="Compare">
                        <i class="fi-repeat animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <h3 class="h6 mb-2">
                    <a class="hover-effect-underline stretched-link me-1" href="single-entry-cars.php">Maserati
                      Granturismo</a>
                    <span class="fs-xs fw-normal text-body-secondary">(2020)</span>
                  </h3>
                  <div class="h6 mb-0">$73,000</div>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                  <div class="border-top pt-3">
                    <div class="row row-cols-2 g-2 fs-sm">
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-map-pin"></i>
                        Dallas
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-tachometer"></i>
                        56K mi
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gas-pump"></i>
                        Gasoline
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gearbox"></i>
                        Automatic
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>

            <!-- Listing -->
            <div class="col">
              <article class="card h-100 hover-effect-scale bg-body-tertiary border-0">
                <div class="card-img-top position-relative overflow-hidden">
                  <div
                    class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                    <span class="badge text-bg-warning">Used</span>
                  </div>
                  <div class="ratio hover-effect-target bg-body-secondary"
                    style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                    <img src="assets/img/listings/cars/grid/07.jpg" alt="Image">
                  </div>
                </div>
                <div class="card-body pb-3">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="fs-xs text-body-secondary me-3">19/10/2024</div>
                    <div class="d-flex gap-2 position-relative z-2">
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist"
                        aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify" aria-label="Notify">
                        <i class="fi-bell animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Compare" aria-label="Compare">
                        <i class="fi-repeat animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <h3 class="h6 mb-2">
                    <a class="hover-effect-underline stretched-link me-1" href="single-entry-cars.php">Tesla Model
                      3</a>
                    <span class="fs-xs fw-normal text-body-secondary">(2023)</span>
                  </h3>
                  <div class="h6 mb-0">$36,200</div>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                  <div class="border-top pt-3">
                    <div class="row row-cols-2 g-2 fs-sm">
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-map-pin"></i>
                        Los Angeles
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-tachometer"></i>
                        13K mi
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gas-pump"></i>
                        Electric
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gearbox"></i>
                        Automatic
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>

            <!-- Listing -->
            <div class="col">
              <article class="card h-100 hover-effect-scale bg-body-tertiary border-0">
                <div class="card-img-top position-relative overflow-hidden">
                  <div
                    class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                    <span class="badge text-bg-warning">Used</span>
                  </div>
                  <div class="ratio hover-effect-target bg-body-secondary"
                    style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                    <img src="assets/img/listings/cars/grid/08.jpg" alt="Image">
                  </div>
                </div>
                <div class="card-body pb-3">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="fs-xs text-body-secondary me-3">02/08/2024</div>
                    <div class="d-flex gap-2 position-relative z-2">
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist"
                        aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify" aria-label="Notify">
                        <i class="fi-bell animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Compare" aria-label="Compare">
                        <i class="fi-repeat animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <h3 class="h6 mb-2">
                    <a class="hover-effect-underline stretched-link me-1" href="single-entry-cars.php">Toyota Yaris GR
                      Sport</a>
                    <span class="fs-xs fw-normal text-body-secondary">(2021)</span>
                  </h3>
                  <div class="h6 mb-0">$28,600</div>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                  <div class="border-top pt-3">
                    <div class="row row-cols-2 g-2 fs-sm">
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-map-pin"></i>
                        San Jose
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-tachometer"></i>
                        21K mi
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gas-pump"></i>
                        Hybrid
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gearbox"></i>
                        Automatic
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>

            <!-- Listing -->
            <div class="col">
              <article class="card h-100 hover-effect-scale bg-body-tertiary border-0">
                <div class="card-img-top position-relative overflow-hidden">
                  <div
                    class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                    <span class="badge text-bg-info d-inline-flex align-items-center">
                      Verified
                      <i class="fi-shield ms-1"></i>
                    </span>
                    <span class="badge text-bg-warning">Used</span>
                  </div>
                  <div class="ratio hover-effect-target bg-body-secondary"
                    style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                    <img src="assets/img/listings/cars/grid/09.jpg" alt="Image">
                  </div>
                </div>
                <div class="card-body pb-3">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="fs-xs text-body-secondary me-3">13/07/2024</div>
                    <div class="d-flex gap-2 position-relative z-2">
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist"
                        aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify" aria-label="Notify">
                        <i class="fi-bell animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Compare" aria-label="Compare">
                        <i class="fi-repeat animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <h3 class="h6 mb-2">
                    <a class="hover-effect-underline stretched-link me-1" href="single-entry-cars.php">Mitsubishi
                      Padjero Sport</a>
                    <span class="fs-xs fw-normal text-body-secondary">(2019)</span>
                  </h3>
                  <div class="h6 mb-0">$33,500</div>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                  <div class="border-top pt-3">
                    <div class="row row-cols-2 g-2 fs-sm">
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-map-pin"></i>
                        Phoenix
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-tachometer"></i>
                        57K mi
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gas-pump"></i>
                        Diesel
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gearbox"></i>
                        Automatic
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>

            <!-- Listing -->
            <div class="col">
              <article class="card h-100 hover-effect-scale bg-body-tertiary border-0">
                <div class="card-img-top position-relative overflow-hidden">
                  <div
                    class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                    <span class="badge text-bg-info d-inline-flex align-items-center">
                      Verified
                      <i class="fi-shield ms-1"></i>
                    </span>
                    <span class="badge text-bg-warning">Used</span>
                  </div>
                  <div class="ratio hover-effect-target bg-body-secondary"
                    style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                    <img src="assets/img/listings/cars/grid/10.jpg" alt="Image">
                  </div>
                </div>
                <div class="card-body pb-3">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="fs-xs text-body-secondary me-3">25/04/2024</div>
                    <div class="d-flex gap-2 position-relative z-2">
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist"
                        aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify" aria-label="Notify">
                        <i class="fi-bell animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Compare" aria-label="Compare">
                        <i class="fi-repeat animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <h3 class="h6 mb-2">
                    <a class="hover-effect-underline stretched-link me-1" href="single-entry-cars.php">Smart Fortwo
                      Cabrio</a>
                    <span class="fs-xs fw-normal text-body-secondary">(2018)</span>
                  </h3>
                  <div class="h6 mb-0">$17,600</div>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                  <div class="border-top pt-3">
                    <div class="row row-cols-2 g-2 fs-sm">
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-map-pin"></i>
                        New York
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-tachometer"></i>
                        46K mi
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gas-pump"></i>
                        Gasoline
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gearbox"></i>
                        Automatic
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>

            <!-- Listing -->
            <div class="col">
              <article class="card h-100 hover-effect-scale bg-body-tertiary border-0">
                <div class="card-img-top position-relative overflow-hidden">
                  <div
                    class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                    <span class="badge text-bg-warning">Used</span>
                  </div>
                  <div class="ratio hover-effect-target bg-body-secondary"
                    style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                    <img src="assets/img/listings/cars/grid/11.jpg" alt="Image">
                  </div>
                </div>
                <div class="card-body pb-3">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="fs-xs text-body-secondary me-3">05/09/2024</div>
                    <div class="d-flex gap-2 position-relative z-2">
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist"
                        aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify" aria-label="Notify">
                        <i class="fi-bell animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Compare" aria-label="Compare">
                        <i class="fi-repeat animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <h3 class="h6 mb-2">
                    <a class="hover-effect-underline stretched-link me-1" href="single-entry-cars.php">Land Rover
                      Defender</a>
                    <span class="fs-xs fw-normal text-body-secondary">(2003)</span>
                  </h3>
                  <div class="h6 mb-0">$25,900</div>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                  <div class="border-top pt-3">
                    <div class="row row-cols-2 g-2 fs-sm">
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-map-pin"></i>
                        Dallas
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-tachometer"></i>
                        138K mi
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gas-pump"></i>
                        Diesel
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gearbox"></i>
                        Manual
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>

            <!-- Listing -->
            <div class="col">
              <article class="card h-100 hover-effect-scale bg-body-tertiary border-0">
                <div class="card-img-top position-relative overflow-hidden">
                  <div
                    class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                    <span class="badge text-bg-info d-inline-flex align-items-center">
                      Verified
                      <i class="fi-shield ms-1"></i>
                    </span>
                    <span class="badge text-bg-warning">Used</span>
                  </div>
                  <div class="ratio hover-effect-target bg-body-secondary"
                    style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                    <img src="assets/img/listings/cars/grid/12.jpg" alt="Image">
                  </div>
                </div>
                <div class="card-body pb-3">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="fs-xs text-body-secondary me-3">11/06/2024</div>
                    <div class="d-flex gap-2 position-relative z-2">
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist"
                        aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify" aria-label="Notify">
                        <i class="fi-bell animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Compare" aria-label="Compare">
                        <i class="fi-repeat animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <h3 class="h6 mb-2">
                    <a class="hover-effect-underline stretched-link me-1" href="single-entry-cars.php">Audi R8
                      Spyder</a>
                    <span class="fs-xs fw-normal text-body-secondary">(2022)</span>
                  </h3>
                  <div class="h6 mb-0">$97,500</div>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                  <div class="border-top pt-3">
                    <div class="row row-cols-2 g-2 fs-sm">
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-map-pin"></i>
                        Philadelphia
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-tachometer"></i>
                        29K mi
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gas-pump"></i>
                        Gasoline
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gearbox"></i>
                        Automatic
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>

            <!-- Listing -->
            <div class="col">
              <article class="card h-100 hover-effect-scale bg-body-tertiary border-0">
                <div class="card-img-top position-relative overflow-hidden">
                  <div
                    class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                    <span class="badge text-bg-warning">Used</span>
                  </div>
                  <div class="ratio hover-effect-target bg-body-secondary"
                    style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                    <img src="assets/img/listings/cars/grid/13.jpg" alt="Image">
                  </div>
                </div>
                <div class="card-body pb-3">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="fs-xs text-body-secondary me-3">16/08/2024</div>
                    <div class="d-flex gap-2 position-relative z-2">
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist"
                        aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify" aria-label="Notify">
                        <i class="fi-bell animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Compare" aria-label="Compare">
                        <i class="fi-repeat animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <h3 class="h6 mb-2">
                    <a class="hover-effect-underline stretched-link me-1" href="single-entry-cars.php">BMW 3 Series</a>
                    <span class="fs-xs fw-normal text-body-secondary">(2021)</span>
                  </h3>
                  <div class="h6 mb-0">$42,000</div>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                  <div class="border-top pt-3">
                    <div class="row row-cols-2 g-2 fs-sm">
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-map-pin"></i>
                        Orlando
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-tachometer"></i>
                        31K mi
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gas-pump"></i>
                        Diesel
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gearbox"></i>
                        Automatic
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>

            <!-- Listing -->
            <div class="col">
              <article class="card h-100 hover-effect-scale bg-body-tertiary border-0">
                <div class="card-img-top position-relative overflow-hidden">
                  <div
                    class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                    <span class="badge text-bg-info d-inline-flex align-items-center">
                      Verified
                      <i class="fi-shield ms-1"></i>
                    </span>
                    <span class="badge text-bg-warning">Used</span>
                  </div>
                  <div class="ratio hover-effect-target bg-body-secondary"
                    style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                    <img src="assets/img/listings/cars/grid/14.jpg" alt="Image">
                  </div>
                </div>
                <div class="card-body pb-3">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="fs-xs text-body-secondary me-3">29/05/2024</div>
                    <div class="d-flex gap-2 position-relative z-2">
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist"
                        aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify" aria-label="Notify">
                        <i class="fi-bell animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Compare" aria-label="Compare">
                        <i class="fi-repeat animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <h3 class="h6 mb-2">
                    <a class="hover-effect-underline stretched-link me-1" href="single-entry-cars.php">GMC Sierra
                      1500</a>
                    <span class="fs-xs fw-normal text-body-secondary">(2020)</span>
                  </h3>
                  <div class="h6 mb-0">$69,300</div>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                  <div class="border-top pt-3">
                    <div class="row row-cols-2 g-2 fs-sm">
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-map-pin"></i>
                        Boston
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-tachometer"></i>
                        54K mi
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gas-pump"></i>
                        Diesel
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gearbox"></i>
                        Automatic
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>

            <!-- Listing -->
            <div class="col">
              <article class="card h-100 hover-effect-scale bg-body-tertiary border-0">
                <div class="card-img-top position-relative overflow-hidden">
                  <div
                    class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                    <span class="badge text-bg-warning">Used</span>
                  </div>
                  <div class="ratio hover-effect-target bg-body-secondary"
                    style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                    <img src="assets/img/listings/cars/grid/15.jpg" alt="Image">
                  </div>
                </div>
                <div class="card-body pb-3">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="fs-xs text-body-secondary me-3">03/07/2024</div>
                    <div class="d-flex gap-2 position-relative z-2">
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist"
                        aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify" aria-label="Notify">
                        <i class="fi-bell animate-target fs-sm"></i>
                      </button>
                      <button type="button"
                        class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Compare" aria-label="Compare">
                        <i class="fi-repeat animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <h3 class="h6 mb-2">
                    <a class="hover-effect-underline stretched-link me-1" href="single-entry-cars.php">Porsche 911
                      Carrera</a>
                    <span class="fs-xs fw-normal text-body-secondary">(2019)</span>
                  </h3>
                  <div class="h6 mb-0">$108,500</div>
                </div>
                <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                  <div class="border-top pt-3">
                    <div class="row row-cols-2 g-2 fs-sm">
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-map-pin"></i>
                        New York
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-tachometer"></i>
                        47K mi
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gas-pump"></i>
                        Gasoline
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-gearbox"></i>
                        Automatic
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>

          <!-- Pagination -->
          <nav class="pt-3 mt-3" aria-label="Listings pagination">
            <ul class="pagination pagination-lg">
              <li class="page-item active" aria-current="page">
                <span class="page-link">
                  1
                  <span class="visually-hidden">(current)</span>
                </span>
              </li>
              <li class="page-item">
                <a class="page-link" href="#!">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#!">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#!">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#!">5</a>
              </li>
              <li class="page-item">
                <span class="page-link px-2 pe-none">...</span>
              </li>
              <li class="page-item">
                <a class="page-link" href="#!">10</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </main>


  <!-- Page footer -->
  <?php include('partials/footer3.php') ?>


  <!-- Filter sidebar offcanvas toggle that is visible on screens < 992px wide (lg breakpoint) -->
  <button type="button"
    class="fixed-bottom z-sticky w-100 btn btn-lg btn-dark border-0 border-top border-light border-opacity-10 rounded-0 pb-4 d-lg-none"
    data-bs-toggle="offcanvas" data-bs-target="#filterSidebar" aria-controls="filterSidebar" data-bs-theme="light">
    <i class="fi-sidebar fs-base me-2"></i>
    Filters
  </button>


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
  <script src="assets/vendor/choices.js/public/assets/scripts/choices.min.js"></script>
  <script src="assets/vendor/simplebar/dist/simplebar.min.js"></script>
  <script src="assets/vendor/nouislider/dist/nouislider.min.js"></script>

  <?php include('partials/footer-scripts.php'); ?>
</body>

</html>