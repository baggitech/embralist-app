<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>
  <?php $title = "Blog Layout v.2"; include('partials/title-meta.php'); ?>

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
        <a class="btn btn-primary animate-scale" href="add-car.php">
          <i class="fi-plus fs-lg animate-target ms-n2 me-1 me-sm-2"></i>
          Sell car
        </a>
      </div>
    </div>
  </header>


  <!-- Page content -->
  <main class="content-wrapper">

    <!-- Latest posts -->
    <section class="bg-body-tertiary pt-4 pb-5">
      <div class="container pt-sm-1 pt-md-2 pt-lg-3 pb-md-3 pb-lg-4 pb-xl-5">

        <!-- Breadcrumb -->
        <nav class="pb-2" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="home-cars.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog layout v.2</li>
          </ol>
        </nav>

        <div class="row">

          <!-- Featured post -->
          <article class="col-md-7">
            <a class="ratio d-flex hover-effect-scale rounded overflow-hidden mb-3 mb-sm-4" href="blog-single-v2.php"
              style="--fn-aspect-ratio: calc(504 / 746 * 100%)">
              <img src="assets/img/blog/v2/featured.jpg" class="hover-effect-target" alt="Image">
            </a>
            <div class="nav align-items-center gap-2 text-body-secondary pb-2 mb-1 mb-lg-2">
              <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Electric vehicles</a>
              <hr class="vr my-1 mx-1">
              <span class="fs-sm lh-0">December 03, 2024</span>
            </div>
            <h3 class="pb-2 mb-1">
              <a class="hover-effect-underline" href="blog-single-v2.php">Kia EV9: The best electric car to buy in
                2024?</a>
            </h3>
            <p class="mb-0">Combining cutting-edge electric vehicle technology with a bold, modern design. Its
              impressive electric range and fast-charging capabilities make it perfect for long-distance travel...</p>
          </article>

          <!-- List of posts + Subscription -->
          <div class="col-md-5 position-relative">
            <hr class="d-md-none">
            <hr class="vr position-absolute h-100 d-none d-md-block my-0 ms-lg-2">
            <div class="d-md-flex flex-column h-100 ps-md-4 ms-lg-3">

              <!-- List of posts -->
              <div class="vstack gap-4 pb-sm-3 pb-md-0 pb-xl-3 mt-md-n2 mb-5">
                <article class="mt-2">
                  <div class="nav align-items-center gap-2 text-body-secondary pb-2 mb-1">
                    <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Industry news</a>
                    <hr class="vr my-1 mx-1">
                    <span class="fs-sm lh-0">November 15, 2024</span>
                  </div>
                  <h3 class="h5 mb-0">
                    <a class="hover-effect-underline" href="blog-single-v2.php">New emission regulations: What they
                      mean for car manufacturers</a>
                  </h3>
                </article>
                <article class="mt-2">
                  <div class="nav align-items-center gap-2 text-body-secondary pb-2 mb-1">
                    <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Car reviews</a>
                    <hr class="vr my-1 mx-1">
                    <span class="fs-sm lh-0">November 08, 2024</span>
                  </div>
                  <h3 class="h5 mb-0">
                    <a class="hover-effect-underline" href="blog-single-v2.php">2024 Honda CR-V: A comprehensive
                      review</a>
                  </h3>
                </article>
                <article class="mt-2">
                  <div class="nav align-items-center gap-2 text-body-secondary pb-2 mb-1">
                    <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Industry news</a>
                    <hr class="vr my-1 mx-1">
                    <span class="fs-sm lh-0">October 30, 2024</span>
                  </div>
                  <h3 class="h5 mb-0">
                    <a class="hover-effect-underline" href="blog-single-v2.php">Automotive industry faces supply chain
                      challenges in 2024</a>
                  </h3>
                </article>
                <article class="mt-2">
                  <div class="nav align-items-center gap-2 text-body-secondary pb-2 mb-1">
                    <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Buying guides</a>
                    <hr class="vr my-1 mx-1">
                    <span class="fs-sm lh-0">October 19, 2024</span>
                  </div>
                  <h3 class="h5 mb-0">
                    <a class="hover-effect-underline" href="blog-single-v2.php">Top tips for buying a used car in
                      2024</a>
                  </h3>
                </article>
              </div>

              <!-- Subscription form -->
              <div class="rounded mt-auto" style="background-color: currentColor; color: var(--fn-info-border-subtle)">
                <div class="d-flex align-items-end justify-content-between gap-3 pt-4 ps-4">
                  <h3 class="h6">Stay updated with Finder</h3>
                  <div class="ratio mt-n5 me-n3 me-sm-n4 me-xxl-n5"
                    style="max-width: 269px; --fn-aspect-ratio: calc(82 / 269 * 100%)">
                    <img src="assets/img/blog/v2/subscription.png" class="rtl-flip" alt="Image">
                  </div>
                </div>
                <form class="needs-validation px-4 pb-4" novalidate>
                  <input type="email" class="form-control mb-3" placeholder="Your email" required>
                  <button type="submit" class="btn btn-info w-100">Subscribe</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Popular posts -->
    <section class="container pt-2 pt-sm-3 pt-md-4 pt-lg-5">
      <h2 class="pt-5 pb-3 mb-n1 mb-sm-3">Popular posts</h2>
      <div class="row row-cols-1 row-cols-lg-2 g-4">

        <!-- Article -->
        <article class="col d-flex flex-column flex-sm-row align-items-sm-center gap-3 gap-sm-4 pt-3 pt-sm-0">
          <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="blog-single-v2.php"
            style="max-width: 220px; --fn-aspect-ratio: calc(139 / 220 * 100%)">
            <img src="assets/img/blog/v2/01.jpg" class="hover-effect-target" alt="Image">
          </a>
          <div class="pt-1 pt-sm-0">
            <div class="nav align-items-center gap-2 text-body-secondary pb-2 mb-1">
              <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Car reviews</a>
              <hr class="vr my-1 mx-1">
              <span class="fs-sm lh-0">September 10, 2024</span>
            </div>
            <h3 class="h5 mb-0">
              <a class="hover-effect-underline" href="blog-single-v2.php">Exploring the Audi Q7: Luxury, performance,
                and innovation</a>
            </h3>
          </div>
        </article>

        <!-- Article -->
        <article class="col d-flex flex-column flex-sm-row align-items-sm-center gap-3 gap-sm-4 pt-3 pt-sm-0">
          <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="blog-single-v2.php"
            style="max-width: 220px; --fn-aspect-ratio: calc(139 / 220 * 100%)">
            <img src="assets/img/blog/v2/02.jpg" class="hover-effect-target" alt="Image">
          </a>
          <div class="pt-1 pt-sm-0">
            <div class="nav align-items-center gap-2 text-body-secondary pb-2 mb-1">
              <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Electric vehicles</a>
              <hr class="vr my-1 mx-1">
              <span class="fs-sm lh-0">August 30, 2024</span>
            </div>
            <h3 class="h5 mb-0">
              <a class="hover-effect-underline" href="blog-single-v2.php">Electric Lotus sports car reportedly debuting
                in 2025</a>
            </h3>
          </div>
        </article>

        <!-- Article -->
        <article class="col d-flex flex-column flex-sm-row align-items-sm-center gap-3 gap-sm-4 pt-3 pt-sm-0">
          <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="blog-single-v2.php"
            style="max-width: 220px; --fn-aspect-ratio: calc(139 / 220 * 100%)">
            <img src="assets/img/blog/v2/03.jpg" class="hover-effect-target" alt="Image">
          </a>
          <div class="pt-1 pt-sm-0">
            <div class="nav align-items-center gap-2 text-body-secondary pb-2 mb-1">
              <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Electric vehicles</a>
              <hr class="vr my-1 mx-1">
              <span class="fs-sm lh-0">July 25, 2024</span>
            </div>
            <h3 class="h5 mb-0">
              <a class="hover-effect-underline" href="blog-single-v2.php">Tesla fixes common recall with over-the-air
                update</a>
            </h3>
          </div>
        </article>

        <!-- Article -->
        <article class="col d-flex flex-column flex-sm-row align-items-sm-center gap-3 gap-sm-4 pt-3 pt-sm-0">
          <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="blog-single-v2.php"
            style="max-width: 220px; --fn-aspect-ratio: calc(139 / 220 * 100%)">
            <img src="assets/img/blog/v2/04.jpg" class="hover-effect-target" alt="Image">
          </a>
          <div class="pt-1 pt-sm-0">
            <div class="nav align-items-center gap-2 text-body-secondary pb-2 mb-1">
              <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Car reviews</a>
              <hr class="vr my-1 mx-1">
              <span class="fs-sm lh-0">July 13, 2024</span>
            </div>
            <h3 class="h5 mb-0">
              <a class="hover-effect-underline" href="blog-single-v2.php">SpeedKore built a carbon-bodied,
                Hellcat-powered 1970 Charger</a>
            </h3>
          </div>
        </article>

        <!-- Article -->
        <article class="col d-flex flex-column flex-sm-row align-items-sm-center gap-3 gap-sm-4 pt-3 pt-sm-0">
          <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="blog-single-v2.php"
            style="max-width: 220px; --fn-aspect-ratio: calc(139 / 220 * 100%)">
            <img src="assets/img/blog/v2/05.jpg" class="hover-effect-target" alt="Image">
          </a>
          <div class="pt-1 pt-sm-0">
            <div class="nav align-items-center gap-2 text-body-secondary pb-2 mb-1">
              <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Industry news</a>
              <hr class="vr my-1 mx-1">
              <span class="fs-sm lh-0">June 17, 2024</span>
            </div>
            <h3 class="h5 mb-0">
              <a class="hover-effect-underline" href="blog-single-v2.php">2025 Subaru Outback leads the latest new car
                news</a>
            </h3>
          </div>
        </article>

        <!-- Article -->
        <article class="col d-flex flex-column flex-sm-row align-items-sm-center gap-3 gap-sm-4 pt-3 pt-sm-0">
          <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="blog-single-v2.php"
            style="max-width: 220px; --fn-aspect-ratio: calc(139 / 220 * 100%)">
            <img src="assets/img/blog/v2/06.jpg" class="hover-effect-target" alt="Image">
          </a>
          <div class="pt-1 pt-sm-0">
            <div class="nav align-items-center gap-2 text-body-secondary pb-2 mb-1">
              <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Byuing guides</a>
              <hr class="vr my-1 mx-1">
              <span class="fs-sm lh-0">June 08, 2024</span>
            </div>
            <h3 class="h5 mb-0">
              <a class="hover-effect-underline" href="blog-single-v2.php">Which is the best small SUV for me?</a>
            </h3>
          </div>
        </article>
      </div>
    </section>


    <!-- Car ranking -->
    <section class="container pt-2 pt-sm-3 pt-md-4 pt-lg-5 mt-xxl-3">
      <h2 class="pt-5 pb-2 pb-md-3">Finder car ranking</h2>

      <!-- Filter nav pills -->
      <div class="overflow-x-auto pb-3 mb-2 mb-sm-3">
        <ul class="nav nav-pills flex-nowrap gap-2">
          <li class="nav-item me-1">
            <a class="nav-link text-nowrap active" aria-current="page" href="#!">Small SUVs</a>
          </li>
          <li class="nav-item me-1">
            <a class="nav-link text-nowrap" href="#!">Electric cars</a>
          </li>
          <li class="nav-item me-1">
            <a class="nav-link text-nowrap" href="#!">Small hatchbacks</a>
          </li>
          <li class="nav-item me-1">
            <a class="nav-link text-nowrap" href="#!">Luxury sports cars</a>
          </li>
        </ul>
      </div>

      <div class="row row-cols-1 row-cols-md-2 g-0 bg-body-tertiary rounded overflow-hidden">

        <!-- Image -->
        <div class="col position-relative bg-body-secondary">
          <img src="assets/img/blog/v2/ranking.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
            alt="Image">
        </div>

        <!-- List -->
        <div class="col p-4 p-sm-5">
          <div class="d-flex align-items-center justify-content-between gap-3 my-2 mt-sm-0">
            <h3 class="h4 mb-0">Best small SUVs</h3>
            <span class="badge text-bg-primary">Top 5</span>
          </div>
          <ol class="list-unstyled gap-0 pb-lg-1">
            <li class="d-flex justify-content-between gap-3 border-bottom py-3">
              <span class="fs-sm fw-semibold">01</span>
              <span class="text-dark-emphasis">Honda CR-V</span>
            </li>
            <li class="d-flex justify-content-between gap-3 border-bottom py-3">
              <span class="fs-sm fw-semibold">02</span>
              <span class="text-dark-emphasis">Toyota RAV4</span>
            </li>
            <li class="d-flex justify-content-between gap-3 border-bottom py-3">
              <span class="fs-sm fw-semibold">03</span>
              <span class="text-dark-emphasis">Mazda CX-50</span>
            </li>
            <li class="d-flex justify-content-between gap-3 border-bottom py-3">
              <span class="fs-sm fw-semibold">04</span>
              <span class="text-dark-emphasis">Subaru Forester</span>
            </li>
            <li class="d-flex justify-content-between gap-3 border-bottom py-3">
              <span class="fs-sm fw-semibold">05</span>
              <span class="text-dark-emphasis">Kia Sportage</span>
            </li>
          </ol>
          <div class="nav">
            <a class="nav-link position-relative px-0" href="#!">
              <span class="hover-effect-underline stretched-link me-1">View all</span>
              <i class="fi-chevron-right fs-base"></i>
            </a>
          </div>
        </div>
      </div>
    </section>


    <!-- Popular videos -->
    <section class="container pt-2 pt-sm-3 pt-md-4 pt-lg-5 mt-xxl-3">
      <div class="d-flex align-items-center justify-content-between gap-3 pt-5 pb-3 mb-2 mb-sm-3">
        <h2 class="mb-0">Popular videos</h2>
        <div class="nav">
          <a class="nav-link position-relative py-1 px-0" href="#!">
            <span class="hover-effect-underline stretched-link me-1">More videos</span>
            <i class="fi-chevron-right fs-base"></i>
          </a>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

        <!-- Item -->
        <div class="col">
          <article class="position-relative hover-effect-scale">
            <div class="position-relative rounded overflow-hidden">
              <div
                class="btn btn-icon btn-sm position-absolute top-0 start-0 text-white bg-body border-0 pe-none z-1 mt-2 ms-2"
                style="backdrop-filter: blur(6px); --fn-bg-opacity: .6" data-bs-theme="dark">
                <i class="fi-video fs-base"></i>
              </div>
              <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(272 / 416 * 100%)">
                <img src="assets/img/blog/v2/vlog/01.jpg" alt="Image">
              </div>
              <div
                class="position-absolute bottom-0 start-0 d-flex align-items-center justify-content-between w-100 bg-body text-white z-1 py-1 px-3"
                style="backdrop-filter: blur(6px); --fn-bg-opacity: .6" data-bs-theme="dark">
                <div class="d-flex align-items-center fs-sm">
                  <i class="fi-thumbs-up fs-base me-2"></i>
                  100%
                </div>
                <div class="fs-sm">36:12</div>
              </div>
            </div>
            <h3 class="h5 pt-3 pt-sm-4 mt-1 mt-sm-0 mb-0">
              <a class="hover-effect-underline stretched-link" href="blog-single-v2.php">Electric Mercedes sedan car
                reportedly debuting in 2025</a>
            </h3>
          </article>
        </div>

        <!-- Item -->
        <div class="col">
          <article class="position-relative hover-effect-scale">
            <div class="position-relative rounded overflow-hidden">
              <div
                class="btn btn-icon btn-sm position-absolute top-0 start-0 text-white bg-body border-0 pe-none z-1 mt-2 ms-2"
                style="backdrop-filter: blur(6px); --fn-bg-opacity: .6" data-bs-theme="dark">
                <i class="fi-video fs-base"></i>
              </div>
              <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(272 / 416 * 100%)">
                <img src="assets/img/blog/v2/vlog/02.jpg" alt="Image">
              </div>
              <div
                class="position-absolute bottom-0 start-0 d-flex align-items-center justify-content-between w-100 bg-body text-white z-1 py-1 px-3"
                style="backdrop-filter: blur(6px); --fn-bg-opacity: .6" data-bs-theme="dark">
                <div class="d-flex align-items-center fs-sm">
                  <i class="fi-thumbs-up fs-base me-2"></i>
                  99%
                </div>
                <div class="fs-sm">24:30</div>
              </div>
            </div>
            <h3 class="h5 pt-3 pt-sm-4 mt-1 mt-sm-0 mb-0">
              <a class="hover-effect-underline stretched-link" href="blog-single-v2.php">Budget vs Premium tyres: which
                are better value this year?</a>
            </h3>
          </article>
        </div>

        <!-- Item -->
        <div class="col">
          <article class="position-relative hover-effect-scale">
            <div class="position-relative rounded overflow-hidden">
              <div
                class="btn btn-icon btn-sm position-absolute top-0 start-0 text-white bg-body border-0 pe-none z-1 mt-2 ms-2"
                style="backdrop-filter: blur(6px); --fn-bg-opacity: .6" data-bs-theme="dark">
                <i class="fi-video fs-base"></i>
              </div>
              <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(272 / 416 * 100%)">
                <img src="assets/img/blog/v2/vlog/03.jpg" alt="Image">
              </div>
              <div
                class="position-absolute bottom-0 start-0 d-flex align-items-center justify-content-between w-100 bg-body text-white z-1 py-1 px-3"
                style="backdrop-filter: blur(6px); --fn-bg-opacity: .6" data-bs-theme="dark">
                <div class="d-flex align-items-center fs-sm">
                  <i class="fi-thumbs-up fs-base me-2"></i>
                  100%
                </div>
                <div class="fs-sm">17:25</div>
              </div>
            </div>
            <h3 class="h5 pt-3 pt-sm-4 mt-1 mt-sm-0 mb-0">
              <a class="hover-effect-underline stretched-link" href="blog-single-v2.php">Tesla fixes common recall with
                over-the-air update</a>
            </h3>
          </article>
        </div>
      </div>
    </section>


    <!-- CTA banner -->
    <section class="container pt-sm-2 pb-2 pb-sm-3 py-md-4 py-lg-5 mt-xxl-2 mb-xl-4 mb-xxl-5">
      <div
        class="row flex-md-nowrap position-relative align-items-center align-items-xl-start justify-content-center justify-content-md-between bg-body-tertiary rounded g-0 py-md-2 px-lg-4 pe-xl-5 my-5">
        <div
          class="col-md-5 position-relative z-2 text-center text-md-start pt-5 pb-4 py-sm-5 ps-4 ps-lg-5 pe-4 ms-md-2 ms-lg-0 ms-xl-2">
          <h2 class="pb-1 mb-2">Need a car?</h2>
          <p class="pb-1 pb-sm-2 pb-xl-3">Let's find the perfect car for your needs.</p>
          <a class="btn btn-lg btn-primary" href="listings-grid-cars.php">
            Go to shop
            <i class="fi-chevron-right fs-lg ms-1 me-n1"></i>
          </a>
        </div>
        <div class="col-10 col-sm-8 col-md-7 mb-lg-n5">
          <div class="ratio position-relative z-2" style="max-width: 672px; --fn-aspect-ratio: calc(302 / 672 * 100%)">
            <img src="assets/img/blog/v2/cta.png" class="rtl-flip" alt="Image">
          </div>
        </div>
      </div>
    </section>
  </main>


  <!-- Page footer -->
  <?php include('partials/footer3.php') ?>


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


  <?php include('partials/footer-scripts.php'); ?>
</body>

</html>