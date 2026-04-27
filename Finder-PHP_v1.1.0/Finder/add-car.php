<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>

  <?php $title = "Add (Sell) Car"; include('partials/title-meta.php'); ?>

  <!-- Vendor styles -->
  <link rel="stylesheet" href="assets/vendor/choices.js/public/assets/styles/choices.min.css">

  <?php include('partials/head-css.php'); ?>
</head>


<!-- Body -->

<body class="bg-body-tertiary">

  <!-- Navigation bar (Page header) -->
  <header class="navbar navbar-expand-lg navbar-sticky sticky-top z-fixed px-0" data-sticky-element>
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
            data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle theme (light)">
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

        <!-- Account dropdown (Logged in state) -->
        <div class="dropdown">
          <a class="btn btn-icon hover-effect-scale position-relative bg-body-secondary border rounded-circle overflow-hidden"
            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="My account">
            <img src="assets/img/account/avatar-sm.jpg"
              class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Avatar">
          </a>
          <ul class="dropdown-menu dropdown-menu-end" style="--fn-dropdown-spacer: .5rem">
            <li><span class="h6 dropdown-header">Michael Williams</span></li>
            <li>
              <a class="dropdown-item" href="account-profile.php">
                <i class="fi-user opacity-75 me-2"></i>
                My profile
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="account-listings.php">
                <i class="fi-layers opacity-75 me-2"></i>
                My listings
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="account-reviews.php">
                <i class="fi-star opacity-75 me-2"></i>
                Reviews
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="account-favorites.php">
                <i class="fi-heart opacity-75 me-2"></i>
                Favorites
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="account-payment.php">
                <i class="fi-credit-card opacity-75 me-2"></i>
                Payment details
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="account-settings.php">
                <i class="fi-settings opacity-75 me-2"></i>
                Account settings
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item" href="account-signin.php">
                <i class="fi-log-out opacity-75 me-2"></i>
                Sign out
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>


  <!-- Page content -->
  <main class="content-wrapper">
    <div class="container pt-3 pt-sm-4 pt-md-5 pb-5">
      <div class="row pt-lg-2 pt-xl-3 pb-1 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">

        <!-- Sell car form -->
        <div class="col-lg-8 col-xl-9">
          <h1 class="h2">Sell car</h1>

          <!-- Photos / videos -->
          <section class="position-relative bg-body rounded p-4 mt-4">
            <div class="position-relative z-1 pb-md-2 px-md-2">
              <div class="d-sm-flex align-items-center justify-content-between mb-3 mb-sm-4">
                <h2 class="h4 mb-2 mb-sm-0 me-3">Photos / videos</h2>
                <div class="position-relative d-flex">
                  <i class="fi-info text-info mt-1 me-2"></i>
                  <a class="fs-sm fw-medium stretched-link" href="#!">How to photograph a car</a>
                </div>
              </div>
              <p class="fs-sm">The maximum photo size is 8 MB. Formats: jpeg, jpg, png. Put the main picture first.</p>
              <div style="max-width: 852px">
                <div class="row row-cols-2 row-cols-sm-3 g-2 g-md-4 g-lg-3 g-xl-4">

                  <!-- Item -->
                  <div class="col">
                    <div class="hover-effect-opacity position-relative overflow-hidden rounded">
                      <span class="badge text-bg-light position-absolute top-0 start-0 z-3 mt-2 ms-2">Cover</span>
                      <div class="ratio" style="--fn-aspect-ratio: calc(180 / 268 * 100%)">
                        <img src="assets/img/add-item/car/01.jpg" alt="Image">
                      </div>
                      <div
                        class="hover-effect-target position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 opacity-0">
                        <button type="button" class="btn btn-icon btn-sm btn-light position-relative z-2"
                          aria-label="Remove">
                          <i class="fi-trash fs-base"></i>
                        </button>
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 z-1"></span>
                      </div>
                    </div>
                  </div>

                  <!-- Item -->
                  <div class="col">
                    <div class="hover-effect-opacity position-relative overflow-hidden rounded">
                      <div class="ratio" style="--fn-aspect-ratio: calc(180 / 268 * 100%)">
                        <img src="assets/img/add-item/car/02.jpg" alt="Image">
                      </div>
                      <div
                        class="hover-effect-target position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 opacity-0">
                        <button type="button" class="btn btn-icon btn-sm btn-light position-relative z-2"
                          aria-label="Remove">
                          <i class="fi-trash fs-base"></i>
                        </button>
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 z-1"></span>
                      </div>
                    </div>
                  </div>

                  <!-- Item -->
                  <div class="col">
                    <div class="hover-effect-opacity position-relative overflow-hidden rounded">
                      <div class="ratio" style="--fn-aspect-ratio: calc(180 / 268 * 100%)">
                        <img src="assets/img/add-item/car/03.jpg" alt="Image">
                      </div>
                      <div
                        class="hover-effect-target position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 opacity-0">
                        <button type="button" class="btn btn-icon btn-sm btn-light position-relative z-2"
                          aria-label="Remove">
                          <i class="fi-trash fs-base"></i>
                        </button>
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 z-1"></span>
                      </div>
                    </div>
                  </div>

                  <!-- Item -->
                  <div class="col">
                    <div class="hover-effect-opacity position-relative overflow-hidden rounded">
                      <div class="ratio" style="--fn-aspect-ratio: calc(180 / 268 * 100%)">
                        <img src="assets/img/add-item/car/04.jpg" alt="Image">
                      </div>
                      <div
                        class="hover-effect-target position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 opacity-0">
                        <button type="button" class="btn btn-icon btn-sm btn-light position-relative z-2"
                          aria-label="Remove">
                          <i class="fi-trash fs-base"></i>
                        </button>
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 z-1"></span>
                      </div>
                    </div>
                  </div>

                  <!-- Upload button -->
                  <div class="col">
                    <div
                      class="d-flex align-items-center justify-content-center position-relative h-100 cursor-pointer bg-body-tertiary border border-2 border-dotted rounded p-3">
                      <div class="text-center">
                        <i class="fi-plus-circle fs-4 text-secondary-emphasis mb-2"></i>
                        <div class="hover-effect-underline stretched-link fs-sm fw-medium">Upload photos / videos</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pt-3 mt-2 mt-md-3">
                <label for="link" class="form-label">Link to the video tour</label>
                <div class="position-relative">
                  <i class="fi-link position-absolute top-50 start-0 translate-middle-y fs-lg ms-3"></i>
                  <input type="url" class="form-control form-control-lg form-icon-start" id="link"
                    placeholder="www.youtube.com/...">
                </div>
              </div>
            </div>
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark rounded d-none d-block-dark"></div>
          </section>


          <!-- Basic information -->
          <section class="position-relative bg-body rounded p-4 mt-4">
            <div class="position-relative z-2 pb-md-2 px-md-2">
              <h2 class="h4 mb-3 mb-sm-4">Basic information</h2>
              <div class="mb-3 mb-md-4">
                <label class="form-label pb-1 mb-2">Condition of the car *</label>
                <div class="nav nav-pills flex-wrap gap-3">
                  <div>
                    <input type="radio" class="btn-check" id="new" name="condition">
                    <label class="nav-link" for="new">New car</label>
                  </div>
                  <div>
                    <input type="radio" class="btn-check" id="used" name="condition" checked>
                    <label class="nav-link" for="used">Used car</label>
                  </div>
                </div>
              </div>
              <div class="row row-cols-1 row-cols-sm-2 g-3 g-md-4 mb-3 mb-md-4">
                <div class="col">
                  <label class="form-label">Car brand *</label>
                  <select class="form-select form-select-lg" data-select='{
                      "classNames": {
                        "containerInner": ["form-select", "form-select-lg"]
                      },
                      "searchEnabled": true
                    }' aria-label="Car brand select" required>
                    <option value="">Select brand</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Mercedes-Benz" selected>Mercedes-Benz</option>
                    <option value="BMW">BMW</option>
                    <option value="Honda">Honda</option>
                    <option value="Ford">Ford</option>
                    <option value="Chevrolet">Chevrolet</option>
                    <option value="Audi">Audi</option>
                    <option value="Tesla">Tesla</option>
                    <option value="Nissan">Nissan</option>
                    <option value="Volkswagen">Volkswagen</option>
                  </select>
                </div>
                <div class="col">
                  <label class="form-label">Car model *</label>
                  <select class="form-select form-select-lg" data-select='{
                      "classNames": {
                        "containerInner": ["form-select", "form-select-lg"]
                      },
                      "searchEnabled": true
                    }' aria-label="Car model select" required>
                    <option value="">Select model</option>
                    <option value="A-Class">A-Class</option>
                    <option value="C-Class">C-Class</option>
                    <option value="E-Class">E-Class</option>
                    <option value="S-Class">S-Class</option>
                    <option value="A205" selected>A205</option>
                    <option value="GLA">GLA</option>
                    <option value="GLC">GLC</option>
                    <option value="GLE">GLE</option>
                    <option value="GLS">GLS</option>
                    <option value="AMG GT">AMG GT</option>
                  </select>
                </div>
              </div>
              <div class="row row-cols-1 row-cols-sm-2 g-3 g-md-4 mb-3 mb-md-4">
                <div class="col">
                  <label class="form-label">Manufacturing year *</label>
                  <select class="form-select form-select-lg" data-select='{
                      "classNames": {
                        "containerInner": ["form-select", "form-select-lg"]
                      }
                    }' aria-label="Manufacturing year select" required>
                    <option value="">Select year</option>
                    <option value="2025">2025</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021" selected>2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                  </select>
                </div>
                <div class="col">
                  <label for="mileage" class="form-label">Mileage *</label>
                  <input type="text" class="form-control form-control-lg" id="mileage" placeholder="K miles" required>
                </div>
              </div>
              <div class="mb-3 mb-md-4">
                <label class="form-label">Body type *</label>
                <div class="nav nav-pills row row-cols-2 row-cols-sm-3 row-cols-md-5 gap-0 g-3">
                  <div class="col">
                    <input type="radio" class="btn-check" id="sedan" name="body">
                    <label class="nav-link flex-column w-100 align-items-center gap-2 rounded p-3" for="sedan">
                      <span class="ratio d-block" style="--fn-aspect-ratio: calc(62 / 124 * 100%); max-width: 124px">
                        <img src="assets/img/home/cars/body-type/sedan.svg" alt="Sedan">
                      </span>
                      Sedan
                    </label>
                  </div>
                  <div class="col">
                    <input type="radio" class="btn-check" id="convertible" name="body" checked>
                    <label class="nav-link flex-column w-100 align-items-center gap-2 rounded p-3" for="convertible">
                      <span class="ratio d-block" style="--fn-aspect-ratio: calc(62 / 124 * 100%); max-width: 124px">
                        <img src="assets/img/home/cars/body-type/convertible.svg" alt="Convertible">
                      </span>
                      Convertible
                    </label>
                  </div>
                  <div class="col">
                    <input type="radio" class="btn-check" id="suv" name="body">
                    <label class="nav-link flex-column w-100 align-items-center gap-2 rounded p-3" for="suv">
                      <span class="ratio d-block" style="--fn-aspect-ratio: calc(62 / 124 * 100%); max-width: 124px">
                        <img src="assets/img/home/cars/body-type/suv.svg" alt="SUV">
                      </span>
                      SUV
                    </label>
                  </div>
                  <div class="col">
                    <input type="radio" class="btn-check" id="coupe" name="body">
                    <label class="nav-link flex-column w-100 align-items-center gap-2 rounded p-3" for="coupe">
                      <span class="ratio d-block" style="--fn-aspect-ratio: calc(62 / 124 * 100%); max-width: 124px">
                        <img src="assets/img/home/cars/body-type/coupe.svg" alt="Coupe">
                      </span>
                      Coupe
                    </label>
                  </div>
                </div>
              </div>
              <div class="row row-cols-1 row-cols-sm-2 g-3 g-md-4 mb-3 mb-md-4">
                <div class="col">
                  <label class="form-label">Location *</label>
                  <select class="form-select form-select-lg" data-select='{
                      "classNames": {
                        "containerInner": ["form-select", "form-select-lg"]
                      },
                      "searchEnabled": true
                    }' aria-label="Location select" required>
                    <option value="">Select location</option>
                    <option value="New York">New York</option>
                    <option value="Los Angeles">Los Angeles</option>
                    <option value="Chicago" selected>Chicago</option>
                    <option value="Houston">Houston</option>
                    <option value="Phoenix">Phoenix</option>
                    <option value="Philadelphia">Philadelphia</option>
                    <option value="San Antonio">San Antonio</option>
                    <option value="San Diego">San Diego</option>
                    <option value="Dallas">Dallas</option>
                    <option value="San Jose">San Jose</option>
                  </select>
                </div>
                <div class="col">
                  <label class="form-label">Radius</label>
                  <select class="form-select form-select-lg" data-select='{
                      "classNames": {
                        "containerInner": ["form-select", "form-select-lg"]
                      }
                    }' aria-label="Radius select">
                    <option value="">Select radius</option>
                    <option value="200 mi">200 mi</option>
                    <option value="150 mi">150 mi</option>
                    <option value="100 mi">100 mi</option>
                    <option value="50 mi" selected>50 mi</option>
                    <option value="25 mi">25 mi</option>
                  </select>
                </div>
              </div>
              <div class="bg-body-tertiary rounded p-4">
                <h6 class="mb-2">Cars with a verified VIN code sell faster</h6>
                <p class="fs-sm">We will check the car for free in the registers of the Ministry of Internal Affairs,
                  the open data portal and dealer databases.</p>
                <div class="d-flex gap-2" style="max-width: 354px">
                  <input type="text" class="form-control" placeholder="VIN code">
                  <button type="button" class="btn btn-icon btn-dark" aria-label="Camera">
                    <i class="fi-camera fs-base"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark rounded d-none d-block-dark"></div>
          </section>


          <!-- Specifications -->
          <section class="position-relative bg-body rounded p-4 mt-4">
            <div class="position-relative z-1 pb-md-2 px-md-2">
              <h2 class="h4 mb-3 mb-sm-4">Specifications</h2>
              <div class="row row-cols-1 row-cols-sm-2 g-3 g-md-4 mb-3 mb-md-4">
                <div class="col">
                  <label class="form-label">Drive type *</label>
                  <select class="form-select form-select-lg" data-select='{
                      "classNames": {
                        "containerInner": ["form-select", "form-select-lg"]
                      }
                    }' aria-label="Drive type select" required>
                    <option value="">Select drive type</option>
                    <option value="Front-Wheel Drive">Front-Wheel Drive</option>
                    <option value="Rear-Wheel Drive">Rear-Wheel Drive</option>
                    <option value="All-Wheel Drive">All-Wheel Drive</option>
                    <option value="Four-Wheel Drive">Four-Wheel Drive</option>
                  </select>
                </div>
                <div class="col">
                  <label class="form-label">Engine *</label>
                  <select class="form-select form-select-lg" data-select='{
                      "classNames": {
                        "containerInner": ["form-select", "form-select-lg"]
                      }
                    }' aria-label="Engine select" required>
                    <option value="">Select engine</option>
                    <option value="Inline-4">Inline-4</option>
                    <option value="Inline-6">Inline-6</option>
                    <option value="6-Cylinder Turbo">6-Cylinder Turbo</option>
                    <option value="V6">V6</option>
                    <option value="V8">V8</option>
                    <option value="V10">V10</option>
                    <option value="V12">V12</option>
                    <option value="Electric">Electric</option>
                    <option value="Hybrid">Hybrid</option>
                  </select>
                </div>
                <div class="col">
                  <label class="form-label">Transmission *</label>
                  <select class="form-select form-select-lg" data-select='{
                      "classNames": {
                        "containerInner": ["form-select", "form-select-lg"]
                      }
                    }' aria-label="Transmission select" required>
                    <option value="">Select transmission</option>
                    <option value="Manual">Manual</option>
                    <option value="Automatic">Automatic</option>
                    <option value="CVT">CVT</option>
                    <option value="Dual-Clutch">Dual-Clutch</option>
                    <option value="Semi-Automatic">Semi-Automatic</option>
                    <option value="7-Speed Shiftable Automatic" selected>7-Speed Shiftable Automatic</option>
                    <option value="8-Speed Automatic">8-Speed Automatic</option>
                    <option value="9-Speed Automatic">9-Speed Automatic</option>
                    <option value="10-Speed Automatic">10-Speed Automatic</option>
                  </select>
                </div>
                <div class="col">
                  <label class="form-label">Fuel type *</label>
                  <select class="form-select form-select-lg" data-select='{
                      "classNames": {
                        "containerInner": ["form-select", "form-select-lg"]
                      }
                    }' aria-label="Fuel select" required>
                    <option value="">Select fuel type</option>
                    <option value="Gasoline" selected>Gasoline</option>
                    <option value="Diesel">Diesel</option>
                    <option value="Electric">Electric</option>
                    <option value="Hybrid">Hybrid</option>
                    <option value="Plug-in Hybrid">Plug-in Hybrid</option>
                    <option value="Hydrogen">Hydrogen</option>
                    <option value="Flex Fuel">Flex Fuel</option>
                    <option value="Natural Gas">Natural Gas</option>
                  </select>
                </div>
                <div class="col">
                  <label for="city-mpg" class="form-label">City MPG</label>
                  <input type="number" class="form-control form-control-lg" id="city-mpg" min="10"
                    placeholder="Miles per gallon">
                </div>
                <div class="col">
                  <label for="highway-mpg" class="form-label d-flex align-items-center">Highway MPG <i
                      class="fi-info fs-base ms-2" data-bs-toggle="tooltip"
                      title="Measured at a steady pace of 65 mph"></i></label>
                  <input type="number" class="form-control form-control-lg" id="highway-mpg" min="10"
                    placeholder="Miles per gallon">
                </div>
                <div class="col">
                  <label for="exterior-color" class="form-label">Exterior color</label>
                  <input type="text" class="form-control form-control-lg" id="exterior-color">
                </div>
                <div class="col">
                  <label for="interior-color" class="form-label">Interior color</label>
                  <input type="text" class="form-control form-control-lg" id="interior-color">
                </div>
              </div>
              <label for="description" class="form-label fs-6 fw-semibold">Description *</label>
              <p class="fs-sm mb-2">Here you can let your imagination run wild and describe the car in the best possible
                way!</p>
              <textarea class="form-control form-control-lg" rows="5" id="description"
                placeholder="Maximum 2000 characters" required></textarea>
            </div>
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark rounded d-none d-block-dark"></div>
          </section>


          <!-- Features -->
          <section class="position-relative bg-body rounded p-4 mt-4">
            <div class="position-relative z-1 pb-md-2 px-md-2">
              <h2 class="h4 mb-1 mb-sm-2">Features</h2>
              <div class="accordion accordion-alt-icon" id="features">

                <!-- Exterior -->
                <div class="accordion-item">
                  <h3 class="accordion-header" id="headingExteriror">
                    <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#exterior"
                      aria-expanded="true" aria-controls="exterior">
                      <span class="hover-effect-underline stretched-link me-2">Exteriror</span>
                    </button>
                  </h3>
                  <div class="accordion-collapse collapse show" id="exterior" aria-labelledby="headingExteriror"
                    data-bs-parent="#features">
                    <div class="accordion-body mt-n1">
                      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 gy-3 gx-4">
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="led-headlights" checked>
                            <label for="led-headlights" class="form-check-label">LED Headlights</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="fog-lights" checked>
                            <label for="fog-lights" class="form-check-label">Fog Lights</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="heated-mirrors">
                            <label for="heated-mirrors" class="form-check-label">Heated Mirrors</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="power-mirrors" checked>
                            <label for="power-mirrors" class="form-check-label">Power Mirrors</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="rain-sensing-wipers">
                            <label for="rain-sensing-wipers" class="form-check-label">Rain Sensing Wipers</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="rear-spoiler" checked>
                            <label for="rear-spoiler" class="form-check-label">Rear Spoiler</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="convertible-roof" checked>
                            <label for="convertible-roof" class="form-check-label">Convertible Roof</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="alloy-wheels">
                            <label for="alloy-wheels" class="form-check-label">Alloy Wheels</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="keyless-entry" checked>
                            <label for="keyless-entry" class="form-check-label">Keyless Entry</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="power-windows" checked>
                            <label for="power-windows" class="form-check-label">Power Windows</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="daytime-running-lights" checked>
                            <label for="daytime-running-lights" class="form-check-label">Daytime Running Lights</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="tinted-glass">
                            <label for="tinted-glass" class="form-check-label">Tinted Glass</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="parking-sensors">
                            <label for="parking-sensors" class="form-check-label">Parking Sensors</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="dual-exhaust">
                            <label for="dual-exhaust" class="form-check-label">Dual Exhaust</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="power-trunk" checked>
                            <label for="power-trunk" class="form-check-label">Power Trunk</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Interior -->
                <div class="accordion-item">
                  <h3 class="accordion-header" id="headingInterior">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                      data-bs-target="#interior" aria-expanded="false" aria-controls="interior">
                      <span class="hover-effect-underline stretched-link me-2">Interior</span>
                    </button>
                  </h3>
                  <div class="accordion-collapse collapse" id="interior" aria-labelledby="headingInterior"
                    data-bs-parent="#features">
                    <div class="accordion-body mt-n1">
                      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 gy-3 gx-4">
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="ac" checked>
                            <label for="ac" class="form-check-label">Multi-Zone A/C</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="heated-front" checked>
                            <label for="heated-front" class="form-check-label">Heated Front Seats</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="steering-audio">
                            <label for="steering-audio" class="form-check-label">Steering Wheel Audio Controls</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="steering-adjustable" checked>
                            <label for="steering-adjustable" class="form-check-label">Adjustable Steering Wheel</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="wipers">
                            <label for="wipers" class="form-check-label">Intermittent Wipers</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="door-locks" checked>
                            <label for="door-locks" class="form-check-label">Power Door Locks</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="auto-dimming">
                            <label for="auto-dimming" class="form-check-label">Auto-Dimming Rearview Mirror</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="leather-seats">
                            <label for="leather-seats" class="form-check-label">Leather Seats</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="bank">
                            <label for="bank" class="form-check-label">Bank</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="cc">
                            <label for="cc" class="form-check-label">Climate Control</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="visor-mirror" checked>
                            <label for="visor-mirror" class="form-check-label">Passenger Illuminated Visor
                              Mirror</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="pass-through">
                            <label for="pass-through" class="form-check-label">Pass-Through Rear Seat</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="driver-lumbar">
                            <label for="driver-lumbar" class="form-check-label">Driver Adjustable Lumbar</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="passenger-lumbar">
                            <label for="passenger-lumbar" class="form-check-label">Passenger Adjustable Lumbar</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="garage-opener" checked>
                            <label for="garage-opener" class="form-check-label">Universal Garage Door Opener</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Safety -->
                <div class="accordion-item">
                  <h3 class="accordion-header" id="headingSafety">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                      data-bs-target="#safety" aria-expanded="false" aria-controls="safety">
                      <span class="hover-effect-underline stretched-link me-2">Safety</span>
                    </button>
                  </h3>
                  <div class="accordion-collapse collapse" id="safety" aria-labelledby="headingSafety"
                    data-bs-parent="#features">
                    <div class="accordion-body mt-n1">
                      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 gy-3 gx-4">
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="airbags" checked>
                            <label for="airbags" class="form-check-label">Airbags</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="anti-lock-brakes" checked>
                            <label for="anti-lock-brakes" class="form-check-label">Anti-lock Brakes (ABS)</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="traction-control">
                            <label for="traction-control" class="form-check-label">Traction Control</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="stability-control" checked>
                            <label for="stability-control" class="form-check-label">Stability Control</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="rearview-camera" checked>
                            <label for="rearview-camera" class="form-check-label">Rearview Camera</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="blind-spot-monitor" checked>
                            <label for="blind-spot-monitor" class="form-check-label">Blind Spot Monitor</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="lane-departure-warning">
                            <label for="lane-departure-warning" class="form-check-label">Lane Departure Warning</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="forward-collision-warning">
                            <label for="forward-collision-warning" class="form-check-label">Forward Collision
                              Warning</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="emergency-braking">
                            <label for="emergency-braking" class="form-check-label">Automatic Emergency Braking</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="adaptive-cruise" checked>
                            <label for="adaptive-cruise" class="form-check-label">Adaptive Cruise Control</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="child-safety-locks" checked>
                            <label for="child-safety-locks" class="form-check-label">Child Safety Locks</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="tire-pressure-monitor">
                            <label for="tire-pressure-monitor" class="form-check-label">Tire Pressure Monitoring
                              System</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="drowsiness-monitor">
                            <label for="drowsiness-monitor" class="form-check-label">Driver Drowsiness
                              Monitoring</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="night-vision">
                            <label for="night-vision" class="form-check-label">Night Vision Assist</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="pedestrian-detection" checked>
                            <label for="pedestrian-detection" class="form-check-label">Pedestrian Detection</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark rounded d-none d-block-dark"></div>
          </section>


          <!-- Price -->
          <section class="position-relative bg-body rounded p-4 mt-4">
            <div class="position-relative z-1 pb-md-2 px-md-2">
              <h2 class="h4 mb-3 mb-sm-4">Price</h2>
              <label for="price" class="form-label">Price *</label>
              <div class="position-relative mb-3 mb-md-4" style="max-width: 390px">
                <i class="fi-dollar-sign fs-lg position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                <input type="number" class="form-control form-control-lg form-icon-start" id="price" min="1000"
                  value="41900" placeholder="Set a fair price" required>
              </div>
              <div class="form-check form-switch mb-3 mb-md-4">
                <input type="checkbox" class="form-check-input" role="switch" id="negotiated" checked>
                <label for="negotiated" class="form-check-label fw-medium">Negotiated price</label>
              </div>
              <div class="d-flex flex-column gap-3">
                <div class="form-check mb-0">
                  <input type="checkbox" class="form-check-input" id="installments" checked>
                  <label for="installments" class="form-check-label">Payment in installments is possible</label>
                </div>
                <div class="form-check mb-0">
                  <input type="checkbox" class="form-check-input" id="exchange">
                  <label for="exchange" class="form-check-label">Exchange for a car is possible</label>
                </div>
                <div class="form-check mb-0">
                  <input type="checkbox" class="form-check-input" id="uncleared">
                  <label for="uncleared" class="form-check-label">Uncleared car</label>
                </div>
              </div>
            </div>
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark rounded d-none d-block-dark"></div>
          </section>


          <!-- Contacts -->
          <section class="position-relative bg-body rounded p-4 mt-4">
            <div class="position-relative z-1 pb-md-2 px-md-2">
              <h2 class="h4 mb-3 mb-sm-4">Contacts</h2>
              <div class="nav nav-pills flex-wrap gap-3 mb-3 mb-sm-4">
                <div>
                  <input type="radio" class="btn-check" id="private" name="seller" checked>
                  <label class="nav-link" for="private">
                    <i class="fi-user fs-base ms-n1 me-2"></i>
                    Private seller
                  </label>
                </div>
                <div>
                  <input type="radio" class="btn-check" id="dealer" name="seller">
                  <label class="nav-link" for="dealer">
                    <i class="fi-briefcase fs-base ms-n1 me-2"></i>
                    Dealer
                  </label>
                </div>
              </div>
              <div class="row row-cols-1 row-cols-sm-2 g-3 g-md-4">
                <div class="col">
                  <label for="fn" class="form-label">First name *</label>
                  <input type="text" class="form-control form-control-lg" id="fn" required>
                </div>
                <div class="col">
                  <label for="ln" class="form-label">Last name *</label>
                  <input type="text" class="form-control form-control-lg" id="ln" required>
                </div>
                <div class="col">
                  <label for="email" class="form-label">Email *</label>
                  <input type="email" class="form-control form-control-lg" id="email" required>
                </div>
                <div class="col">
                  <label for="phone" class="form-label">Phone number *</label>
                  <input type="tel" class="form-control form-control-lg" id="phone"
                    data-input-format='{"numericOnly": true, "delimiters": ["(", ")", " ", "-", " "], "blocks": [0, 3, 0, 3, 4]}'
                    placeholder="(___) ___-____" required>
                </div>
                <div class="col">
                  <div class="form-check mb-0">
                    <input type="checkbox" class="form-check-input" id="dealer-ready">
                    <label for="dealer-ready" class="form-check-label">Ready to cooperate with dealers</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark rounded d-none d-block-dark"></div>
          </section>


          <!-- Action buttons -->
          <section class="d-flex flex-column flex-sm-row justify-content-between gap-3 mt-4">
            <button type="button" class="btn btn-lg btn-outline-secondary bg-body">
              <i class="fi-eye fs-lg ms-n1 me-2"></i>
              Detailed preview
            </button>
            <button type="button" class="btn btn-lg btn-primary">
              <i class="fi-upload fs-lg ms-n1 me-2"></i>
              Save and publish
            </button>
          </section>
        </div>


        <!-- Quick preview (Sidebar) -->
        <aside class="col-lg-4 col-xl-3 mt-lg-n4">
          <div class="offcanvas-lg offcanvas-end sticky-lg-top pt-lg-5" id="quickPreview">
            <div class="offcanvas-header d-lg-block py-3 p-lg-0">
              <h3 class="h6 pt-lg-5 mb-0">Quick preview</h3>
              <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas"
                data-bs-target="#quickPreview" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-block pt-2 pb-lg-0">

              <!-- Preview card -->
              <article class="card hover-effect-scale border-0 mb-3">
                <div class="card-img-top position-relative z-1 overflow-hidden">
                  <div
                    class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                    <span class="badge text-bg-warning">Used</span>
                  </div>
                  <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                    <img src="assets/img/listings/cars/grid/04.jpg" alt="Image">
                  </div>
                </div>
                <div class="card-body position-relative z-1 px-0 px-lg-4 pb-3">
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
                    <a class="hover-effect-underline stretched-link me-1" href="#!">Mercedes-Benz A205</a>
                    <span class="fs-xs fw-normal text-body-secondary">(2021)</span>
                  </h3>
                  <div class="h6 mb-0">$41,900</div>
                </div>
                <div class="card-footer position-relative z-1 bg-transparent border-0 pt-0 px-0 px-lg-4 pb-0 pb-lg-4">
                  <div class="border-top pt-3">
                    <div class="row row-cols-2 g-2 fs-sm">
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-map-pin"></i>
                        Chicago
                      </div>
                      <div class="col d-flex align-items-center gap-2">
                        <i class="fi-tachometer"></i>
                        ---
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
                <div class="d-none d-lg-block">
                  <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark rounded d-none d-block-dark"></div>
                </div>
              </article>

              <hr class="d-lg-none">

              <!-- Progress -->
              <div class="position-relative bg-body rounded">
                <div class="position-relative z-1 p-lg-3">
                  <h3 class="h6 mb-1">The quality of content</h3>
                  <div class="fs-sm text-end mb-2">75%</div>
                  <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75"
                    aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                    <div class="progress-bar bg-warning rounded-pill" style="width: 75%"></div>
                  </div>
                </div>
                <div class="d-none d-lg-block">
                  <div class="position-absolute top-0 start-0 w-100 h-100 bg-body-tertiary rounded d-none d-block-dark">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </main>


  <!-- Page footer -->
  <?php include('partials/footer3.php') ?>


  <!-- Quick preview offcanvas toggle that is visible on screens < 992px wide (lg breakpoint) -->
  <button type="button"
    class="fixed-bottom z-sticky w-100 btn btn-lg btn-dark border-0 border-top border-light border-opacity-10 rounded-0 pb-4 d-lg-none"
    data-bs-toggle="offcanvas" data-bs-target="#quickPreview" aria-controls="quickPreview" data-bs-theme="light">
    <i class="fi-eye fs-base me-2"></i>
    Quick preview
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
  <script src="assets/vendor/cleave.js/dist/cleave.min.js"></script>
  <script src="assets/vendor/choices.js/public/assets/scripts/choices.min.js"></script>

  <?php include('partials/footer-scripts.php'); ?>
</body>

</html>