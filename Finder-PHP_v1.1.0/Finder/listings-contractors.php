<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>
  <?php $title = "Contractors - Listings with Side Filters"; include('partials/title-meta.php'); ?>

  <!-- Vendor styles -->
  <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/vendor/choices.js/public/assets/styles/choices.min.css">
  <link rel="stylesheet" href="assets/vendor/simplebar/dist/simplebar.min.css">

  <?php include('partials/head-css.php'); ?>

</head>


<!-- Body -->

<body>

  <!-- Connect form modal -->
  <div class="modal fade" id="connectModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Contact a specialist</h5>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="modal-body needs-validation" novalidate>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Name *" required>
            <div class="invalid-feedback">Please enter your name!</div>
          </div>
          <div class="mb-3">
            <input type="tel" class="form-control"
              data-input-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}'
              placeholder="Pnone number *" required>
            <div class="invalid-feedback">Please enter your phone number!</div>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Zip code">
          </div>
          <div class="mb-4">
            <textarea class="form-control" rows="5" placeholder="Message *" required></textarea>
            <div class="invalid-feedback">Please write your message!</div>
          </div>
          <button type="submit" class="btn btn-lg btn-primary w-100">Send message</button>
        </form>
      </div>
    </div>
  </div>


  <!-- Navigation bar (Page header) -->
  <header class="navbar navbar-expand-lg bg-body navbar-sticky sticky-top z-fixed px-0" data-sticky-element>
    <div class="container">

      <!-- Mobile offcanvas menu toggler (Hamburger) -->
      <button type="button" class="navbar-toggler me-3 me-lg-0" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar brand (Logo) -->
      <a class="navbar-brand py-1 py-md-2 py-xl-1 me-2 me-sm-n4 me-md-n5 me-lg-0" href="home-contractors.php">
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

        <!-- Join button  -->
        <a class="btn btn-primary animate-scale" href="add-contractor-location.php">
          <i class="fi-plus fs-lg animate-target ms-n2 me-1 me-sm-2"></i>
          Join<span class="d-none d-xl-inline ms-1">Pro Network</span>
        </a>
      </div>
    </div>
  </header>


  <!-- Page content -->
  <main class="content-wrapper">
    <div class="container pt-4 pb-5 mb-xxl-3">

      <!-- Breadcrumb -->
      <nav class="pb-2 pb-md-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home-contractors.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contractors</li>
        </ol>
      </nav>


      <!-- Filter sidebar + Listings grid view -->
      <div class="row pb-2 pb-sm-3 pb-md-4 pb-lg-5">

        <!-- Filter sidebar that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
        <aside class="col-lg-3">
          <div class="offcanvas-lg offcanvas-start pe-lg-2 pe-xl-3 pe-xxl-4" id="filterSidebar">
            <div class="offcanvas-header border-bottom py-3">
              <h3 class="h5 offcanvas-title">Filters</h3>
              <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas"
                data-bs-target="#filterSidebar" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-block">

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
                      <option value="New York" selected>New York</option>
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
                      <option value="50 mi" selected>50 mi</option>
                      <option value="60 mi">60 mi</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- Project type -->
              <div class="pb-4 mb-2 mb-xl-3">
                <h4 class="h6">Project type</h4>
                <div
                  data-filter-list='{"searchClass": "project-search", "listClass": "project-list", "valueNames": ["form-check-label"]}'>
                  <div class="position-relative mb-3">
                    <i class="fi-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <input type="search" class="project-search form-control form-icon-start" placeholder="Search">
                  </div>
                  <div style="height: 215px" data-simplebar data-simplebar-auto-hide="false">
                    <div class="project-list d-flex flex-column gap-2">
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="appliance-installation" checked>
                        <label for="appliance-installation" class="form-check-label">
                          Appliance installation
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="bathtub-repair">
                        <label for="bathtub-repair" class="form-check-label">
                          Bathtub repair
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="door-repair">
                        <label for="door-repair" class="form-check-label">
                          Door repair
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="heating" checked>
                        <label for="heating" class="form-check-label">
                          Heating &amp; furnace
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="locksmith">
                        <label for="locksmith" class="form-check-label">
                          Locksmith
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="small-appliance-repair">
                        <label for="small-appliance-repair" class="form-check-label">
                          Small appliance repair
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="smoke-detector-installation">
                        <label for="smoke-detector-installation" class="form-check-label">
                          Smoke detector installation
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="electrical-work">
                        <label for="electrical-work" class="form-check-label">
                          Electrical work
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="plumbing">
                        <label for="plumbing" class="form-check-label">
                          Plumbing
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="hvac-maintenance">
                        <label for="hvac-maintenance" class="form-check-label">
                          HVAC maintenance
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="painting">
                        <label for="painting" class="form-check-label">
                          Painting
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="roofing" checked>
                        <label for="roofing" class="form-check-label">
                          Roofing
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="flooring-installation">
                        <label for="flooring-installation" class="form-check-label">
                          Flooring installation
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="carpentry" checked>
                        <label for="carpentry" class="form-check-label">
                          Carpentry
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="landscaping">
                        <label for="landscaping" class="form-check-label">
                          Landscaping
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="window-installation">
                        <label for="window-installation" class="form-check-label">
                          Window installation
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="home-security-systems">
                        <label for="home-security-systems" class="form-check-label">
                          Home security systems
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="drywall-repair">
                        <label for="drywall-repair" class="form-check-label">
                          Drywall repair
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="gutter-cleaning">
                        <label for="gutter-cleaning" class="form-check-label">
                          Gutter cleaning
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="insulation-installation">
                        <label for="insulation-installation" class="form-check-label">
                          Insulation installation
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="kitchen-remodeling">
                        <label for="kitchen-remodeling" class="form-check-label">
                          Kitchen remodeling
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="bathroom-remodeling">
                        <label for="bathroom-remodeling" class="form-check-label">
                          Bathroom remodeling
                        </label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="pest-control">
                        <label for="pest-control" class="form-check-label">
                          Pest control
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Budget -->
              <div class="pb-4 mb-2 mb-xl-3">
                <h4 class="h6">Budget</h4>
                <div class="d-flex flex-column gap-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="budget-4">
                    <label class="form-check-label fs-sm" for="budget-4">$$$$</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="budget-3">
                    <label class="form-check-label fs-sm" for="budget-3">$$$</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="budget-2" checked>
                    <label class="form-check-label fs-sm" for="budget-2">$$</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="budget-1">
                    <label class="form-check-label fs-sm" for="budget-1">$</label>
                  </div>
                </div>
              </div>

              <!-- Features -->
              <div class="pb-4 mb-2 mb-xl-3">
                <h4 class="h6">Features</h4>
                <div class="d-flex flex-column gap-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="eco-friendly" checked>
                    <label class="form-check-label fs-sm" for="eco-friendly">Eco-friendly</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="free-consultation">
                    <label class="form-check-label fs-sm" for="free-consultation">Free consultation</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="online-consultation">
                    <label class="form-check-label fs-sm" for="online-consultation">Online consultation</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="free-estimate">
                    <label class="form-check-label fs-sm" for="free-estimate">Free estimate</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="verified-hires" checked>
                    <label class="form-check-label fs-sm" for="verified-hires">Verified hires</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="weekend-consultations">
                    <label class="form-check-label fs-sm" for="weekend-consultations">Weekend consultations</label>
                  </div>
                </div>
              </div>

              <!-- Availability -->
              <div class="pb-4 mb-2 mb-xl-3">
                <h4 class="h6">Availability</h4>
                <div class="d-flex flex-column gap-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="now">
                    <label class="form-check-label fs-sm" for="now">Available now</label>
                  </div>
                </div>
              </div>

              <!-- Average rating -->
              <div class="pb-2 pb-lg-0">
                <h4 class="h6">Average rating</h4>
                <div class="d-flex flex-column gap-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="star-5" checked>
                    <label class="form-check-label d-flex align-items-center fs-sm" for="star-5">
                      5 <i class="fi-star-filled text-warning ms-1"></i>
                    </label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="star-4" checked>
                    <label class="form-check-label d-flex align-items-center fs-sm" for="star-4">
                      4 <i class="fi-star-filled text-warning ms-1"></i>
                    </label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="star-3">
                    <label class="form-check-label d-flex align-items-center fs-sm" for="star-3">
                      3 <i class="fi-star-filled text-warning ms-1"></i>
                    </label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="star-2">
                    <label class="form-check-label d-flex align-items-center fs-sm" for="star-2">
                      2-1 <i class="fi-star-filled text-warning ms-1"></i>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </aside>


        <!-- Listings grid view -->
        <div class="col-lg-9">

          <!-- Active filters -->
          <div class="d-flex align-items-center gap-3 pb-sm-2">
            <div class="w-100 pb-3 overflow-x-auto">
              <div class="d-flex gap-2">
                <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                  <i class="fi-close fs-sm me-1 ms-n1"></i>
                  New York
                </button>
                <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                  <i class="fi-close fs-sm me-1 ms-n1"></i>
                  50 mi
                </button>
                <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                  <i class="fi-close fs-sm me-1 ms-n1"></i>
                  Heating &amp; fernace
                </button>
                <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                  <i class="fi-close fs-sm me-1 ms-n1"></i>
                  Roofing
                </button>
                <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                  <i class="fi-close fs-sm me-1 ms-n1"></i>
                  $$
                </button>
                <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                  <i class="fi-close fs-sm me-1 ms-n1"></i>
                  Eco-friendly
                </button>
                <button type="button" class="btn btn-sm btn-secondary rounded-pill">
                  <i class="fi-close fs-sm me-1 ms-n1"></i>
                  5
                  <i class="fi-star-filled text-warning ms-1"></i>
                </button>
              </div>
            </div>
            <div class="nav pb-3">
              <a class="nav-link fs-xs text-decoration-underline text-nowrap p-0" href="#!">Clear all</a>
            </div>
          </div>

          <!-- Sort selector -->
          <div class="d-flex align-items-center gap-2 gap-sm-3 pb-3 mb-2">
            <div class="fs-sm text-nowrap">Showing 48 results</div>
            <div class="position-relative ms-auto" style="width: 125px">
              <i class="fi-sort position-absolute top-50 start-0 translate-middle-y z-2"></i>
              <select class="form-select border-0 rounded-0 ps-4 pe-1" data-select='{
                  "removeItemButton": false,
                  "classNames": {
                    "containerInner": ["form-select", "border-0", "rounded-0", "ps-4", "pe-1"]
                  }
                }'>
                <option value="Popular">Popular</option>
                <option value="Newest">Newest</option>
                <option value="Rating">Rating</option>
              </select>
            </div>
          </div>

          <!-- List of items -->
          <div class="vstack gap-4">

            <!-- Listing -->
            <article class="card hover-effect-opacity overflow-hidden">
              <div class="row g-0">
                <div class="col-sm-4 position-relative bg-body-tertiary" style="min-height: 220px">
                  <div
                    class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-3 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                    <span class="badge text-bg-info d-inline-flex align-items-center">
                      Verified
                      <i class="fi-shield ms-1"></i>
                    </span>
                  </div>
                  <div class="swiper h-100 z-2" data-swiper='{
                      "pagination": {
                        "el": ".swiper-pagination"
                      },
                      "navigation": {
                        "prevEl": ".btn-prev",
                        "nextEl": ".btn-next"
                      },
                      "breakpoints": {
                        "991": {
                          "allowTouchMove": false
                        }
                      }
                    }'>
                    <a class="swiper-wrapper h-100" href="single-entry-contractors.php">
                      <div class="swiper-slide">
                        <img src="assets/img/listings/contractors/01.jpg"
                          class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                        <span class="position-absolute top-0 start-0 w-100 h-100"
                          style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .16) 100%)"></span>
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/listings/contractors/01.jpg"
                          class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                        <span class="position-absolute top-0 start-0 w-100 h-100"
                          style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .16) 100%)"></span>
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/listings/contractors/01.jpg"
                          class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                        <span class="position-absolute top-0 start-0 w-100 h-100"
                          style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .16) 100%)"></span>
                      </div>
                    </a>
                    <div
                      class="position-absolute top-50 start-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 ms-3">
                      <button type="button"
                        class="btn btn-sm btn-prev btn-icon btn-light bg-light rounded-circle animate-slide-start"
                        aria-label="Prev">
                        <i class="fi-chevron-left fs-lg animate-target"></i>
                      </button>
                    </div>
                    <div
                      class="position-absolute top-50 end-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 me-3">
                      <button type="button"
                        class="btn btn-sm btn-next btn-icon btn-light bg-light rounded-circle animate-slide-end"
                        aria-label="Next">
                        <i class="fi-chevron-right fs-lg animate-target"></i>
                      </button>
                    </div>
                    <div class="swiper-pagination bottom-0 z-1 mb-2" data-bs-theme="light"></div>
                  </div>
                </div>
                <div class="col-sm-8 d-flex p-3 p-sm-4" style="min-height: 255px">
                  <div class="row flex-lg-nowrap g-0 position-relative pt-1 pt-sm-0">
                    <button type="button"
                      class="btn btn-icon btn-outline-secondary rounded-circle position-absolute top-0 end-0 z-2"
                      data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Bookmark" aria-label="Bookmark">
                      <i class="fi-bookmark fs-base"></i>
                    </button>
                    <div class="col-lg-8 pe-lg-4">
                      <div class="d-flex align-items-center pe-5 pe-lg-0 pb-2 mb-1">
                        <div class="ratio ratio-1x1 me-3" style="width: 48px">
                          <img src="assets/img/listings/contractors/ava01.jpg" class="bg-body-secondary rounded-circle"
                            alt="Avatar">
                        </div>
                        <h3 class="h6 mb-0">
                          <a class="hover-effect-underline stretched-link" href="single-entry-contractors.php">Samantha
                            Donovan</a>
                        </h3>
                      </div>
                      <div class="fs-sm mb-2 mb-lg-3">
                        <span class="fw-medium text-dark-emphasis">Water softener installation</span>
                        <i class="fi-bullet fs-base align-middle"></i>
                        <span class="fw-medium text-dark-emphasis">Water heater repair</span>
                      </div>
                      <p class="fs-sm mb-0">I'm Samantha, your licensed, insured plumber in NYC. Specializing in
                        servicing residential buildings, high rises, offices, and eateries.</p>
                    </div>
                    <hr class="vr flex-shrink-0 d-none d-lg-block m-0">
                    <div class="col-lg-4 d-flex flex-column pt-3 pt-lg-5 ps-lg-4">
                      <ul class="list-unstyled pb-2 pb-lg-4 mb-3">
                        <li class="d-flex align-items-center gap-1">
                          <i class="fi-star-filled text-warning"></i>
                          <span class="fs-sm text-secondary-emphasis">4.7</span>
                          <span class="fs-xs text-body-secondary align-self-end">(26)</span>
                        </li>
                        <li class="d-flex align-items-center gap-1 fs-sm">
                          <i class="fi-thumbs-up"></i>
                          Listing of the month
                        </li>
                        <li class="d-flex align-items-center gap-1 fs-sm">
                          <i class="fi-leaf"></i>
                          Eco-friendly
                        </li>
                      </ul>
                      <button type="button" class="btn btn-outline-dark position-relative z-2 mt-auto"
                        data-bs-toggle="modal" data-bs-target="#connectModal">
                        <i class="fi-mail me-2"></i>
                        Connect
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <!-- Listing -->
            <article class="card hover-effect-opacity overflow-hidden">
              <div class="row g-0">
                <div class="col-sm-4 position-relative bg-body-tertiary" style="min-height: 220px">
                  <div
                    class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-3 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                    <span class="badge text-bg-primary d-inline-flex align-items-center">Top</span>
                  </div>
                  <div class="swiper h-100 z-2" data-swiper='{
                      "pagination": {
                        "el": ".swiper-pagination"
                      },
                      "navigation": {
                        "prevEl": ".btn-prev",
                        "nextEl": ".btn-next"
                      },
                      "breakpoints": {
                        "991": {
                          "allowTouchMove": false
                        }
                      }
                    }'>
                    <a class="swiper-wrapper h-100" href="single-entry-contractors.php">
                      <div class="swiper-slide">
                        <img src="assets/img/listings/contractors/02.jpg"
                          class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                        <span class="position-absolute top-0 start-0 w-100 h-100"
                          style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .16) 100%)"></span>
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/listings/contractors/02.jpg"
                          class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                        <span class="position-absolute top-0 start-0 w-100 h-100"
                          style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .16) 100%)"></span>
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/listings/contractors/02.jpg"
                          class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                        <span class="position-absolute top-0 start-0 w-100 h-100"
                          style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .16) 100%)"></span>
                      </div>
                    </a>
                    <div
                      class="position-absolute top-50 start-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 ms-3">
                      <button type="button"
                        class="btn btn-sm btn-prev btn-icon btn-light bg-light rounded-circle animate-slide-start"
                        aria-label="Prev">
                        <i class="fi-chevron-left fs-lg animate-target"></i>
                      </button>
                    </div>
                    <div
                      class="position-absolute top-50 end-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 me-3">
                      <button type="button"
                        class="btn btn-sm btn-next btn-icon btn-light bg-light rounded-circle animate-slide-end"
                        aria-label="Next">
                        <i class="fi-chevron-right fs-lg animate-target"></i>
                      </button>
                    </div>
                    <div class="swiper-pagination bottom-0 z-1 mb-2" data-bs-theme="light"></div>
                  </div>
                </div>
                <div class="col-sm-8 d-flex p-3 p-sm-4" style="min-height: 255px">
                  <div class="row flex-lg-nowrap g-0 position-relative pt-1 pt-sm-0">
                    <button type="button"
                      class="btn btn-icon btn-outline-secondary rounded-circle position-absolute top-0 end-0 z-2"
                      data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Bookmark" aria-label="Bookmark">
                      <i class="fi-bookmark fs-base"></i>
                    </button>
                    <div class="col-lg-8 pe-lg-4">
                      <div class="d-flex align-items-center pe-5 pe-lg-0 pb-2 mb-1">
                        <div class="ratio ratio-1x1 me-3" style="width: 48px">
                          <img src="assets/img/listings/contractors/ava02.jpg" class="bg-body-secondary rounded-circle"
                            alt="Avatar">
                        </div>
                        <h3 class="h6 mb-0">
                          <a class="hover-effect-underline stretched-link" href="single-entry-contractors.php">Easy
                            Handy Services</a>
                        </h3>
                      </div>
                      <div class="fs-sm mb-2 mb-lg-3">
                        <span class="fw-medium text-dark-emphasis">Appliance installation</span>
                      </div>
                      <p class="fs-sm mb-0">We offers reliable and professional appliance installation services,
                        ensuring your home is equipped with expertly installed, ready-to-use appliances.</p>
                    </div>
                    <hr class="vr flex-shrink-0 d-none d-lg-block m-0">
                    <div class="col-lg-4 d-flex flex-column pt-3 pt-lg-5 ps-lg-4">
                      <ul class="list-unstyled pb-2 pb-lg-4 mb-3">
                        <li class="d-flex align-items-center gap-1">
                          <i class="fi-star-filled text-warning"></i>
                          <span class="fs-sm text-secondary-emphasis">4.9</span>
                          <span class="fs-xs text-body-secondary align-self-end">(38)</span>
                        </li>
                        <li class="d-flex align-items-center gap-1 fs-sm">
                          <i class="fi-thumbs-up"></i>
                          Listing of the month
                        </li>
                      </ul>
                      <button type="button" class="btn btn-outline-dark position-relative z-2 mt-auto"
                        data-bs-toggle="modal" data-bs-target="#connectModal">
                        <i class="fi-mail me-2"></i>
                        Connect
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <!-- Listing -->
            <article class="card hover-effect-opacity overflow-hidden">
              <div class="row g-0">
                <div class="col-sm-4 position-relative bg-body-tertiary" style="min-height: 220px">
                  <div class="swiper h-100 z-2" data-swiper='{
                      "pagination": {
                        "el": ".swiper-pagination"
                      },
                      "navigation": {
                        "prevEl": ".btn-prev",
                        "nextEl": ".btn-next"
                      },
                      "breakpoints": {
                        "991": {
                          "allowTouchMove": false
                        }
                      }
                    }'>
                    <a class="swiper-wrapper h-100" href="single-entry-contractors.php">
                      <div class="swiper-slide">
                        <img src="assets/img/listings/contractors/03.jpg"
                          class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                        <span class="position-absolute top-0 start-0 w-100 h-100"
                          style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .16) 100%)"></span>
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/listings/contractors/03.jpg"
                          class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                        <span class="position-absolute top-0 start-0 w-100 h-100"
                          style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .16) 100%)"></span>
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/listings/contractors/03.jpg"
                          class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                        <span class="position-absolute top-0 start-0 w-100 h-100"
                          style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .16) 100%)"></span>
                      </div>
                    </a>
                    <div
                      class="position-absolute top-50 start-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 ms-3">
                      <button type="button"
                        class="btn btn-sm btn-prev btn-icon btn-light bg-light rounded-circle animate-slide-start"
                        aria-label="Prev">
                        <i class="fi-chevron-left fs-lg animate-target"></i>
                      </button>
                    </div>
                    <div
                      class="position-absolute top-50 end-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 me-3">
                      <button type="button"
                        class="btn btn-sm btn-next btn-icon btn-light bg-light rounded-circle animate-slide-end"
                        aria-label="Next">
                        <i class="fi-chevron-right fs-lg animate-target"></i>
                      </button>
                    </div>
                    <div class="swiper-pagination bottom-0 z-1 mb-2" data-bs-theme="light"></div>
                  </div>
                </div>
                <div class="col-sm-8 d-flex p-3 p-sm-4" style="min-height: 255px">
                  <div class="row flex-lg-nowrap g-0 position-relative pt-1 pt-sm-0">
                    <button type="button"
                      class="btn btn-icon btn-outline-secondary rounded-circle position-absolute top-0 end-0 z-2"
                      data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Bookmark" aria-label="Bookmark">
                      <i class="fi-bookmark fs-base"></i>
                    </button>
                    <div class="col-lg-8 pe-lg-4">
                      <div class="d-flex align-items-center pe-5 pe-lg-0 pb-2 mb-1">
                        <div class="ratio ratio-1x1 me-3" style="width: 48px">
                          <img src="assets/img/listings/contractors/ava03.jpg" class="bg-body-secondary rounded-circle"
                            alt="Avatar">
                        </div>
                        <h3 class="h6 mb-0">
                          <a class="hover-effect-underline stretched-link" href="single-entry-contractors.php">Alex
                            Rodriguez</a>
                        </h3>
                      </div>
                      <div class="fs-sm mb-2 mb-lg-3">
                        <span class="fw-medium text-dark-emphasis">Carpentry</span>
                        <i class="fi-bullet fs-base align-middle"></i>
                        <span class="fw-medium text-dark-emphasis">Custom kitchen cabinets</span>
                      </div>
                      <p class="fs-sm mb-0">With an unwavering commitment to excellence, I bring dreams to life with
                        woodwork. Each stroke of skilled hands transforms timber into masterpieces. </p>
                    </div>
                    <hr class="vr flex-shrink-0 d-none d-lg-block m-0">
                    <div class="col-lg-4 d-flex flex-column pt-3 pt-lg-5 ps-lg-4">
                      <ul class="list-unstyled pb-2 pb-lg-4 mb-3">
                        <li class="d-flex align-items-center gap-1">
                          <i class="fi-star-filled text-warning"></i>
                          <span class="fs-sm text-secondary-emphasis">5.0</span>
                          <span class="fs-xs text-body-secondary align-self-end">(13)</span>
                        </li>
                        <li class="d-flex align-items-center gap-1 fs-sm">
                          <i class="fi-leaf"></i>
                          Eco-friendly
                        </li>
                      </ul>
                      <button type="button" class="btn btn-outline-dark position-relative z-2 mt-auto"
                        data-bs-toggle="modal" data-bs-target="#connectModal">
                        <i class="fi-mail me-2"></i>
                        Connect
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <!-- Listing -->
            <article class="card hover-effect-opacity overflow-hidden">
              <div class="row g-0">
                <div class="col-sm-4 position-relative bg-body-tertiary" style="min-height: 220px">
                  <div
                    class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-3 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                    <span class="badge text-bg-info d-inline-flex align-items-center">
                      Verified
                      <i class="fi-shield ms-1"></i>
                    </span>
                  </div>
                  <div class="swiper h-100 z-2" data-swiper='{
                      "pagination": {
                        "el": ".swiper-pagination"
                      },
                      "navigation": {
                        "prevEl": ".btn-prev",
                        "nextEl": ".btn-next"
                      },
                      "breakpoints": {
                        "991": {
                          "allowTouchMove": false
                        }
                      }
                    }'>
                    <a class="swiper-wrapper h-100" href="single-entry-contractors.php">
                      <div class="swiper-slide">
                        <img src="assets/img/listings/contractors/04.jpg"
                          class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                        <span class="position-absolute top-0 start-0 w-100 h-100"
                          style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .16) 100%)"></span>
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/listings/contractors/04.jpg"
                          class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                        <span class="position-absolute top-0 start-0 w-100 h-100"
                          style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .16) 100%)"></span>
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/listings/contractors/04.jpg"
                          class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                        <span class="position-absolute top-0 start-0 w-100 h-100"
                          style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .16) 100%)"></span>
                      </div>
                    </a>
                    <div
                      class="position-absolute top-50 start-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 ms-3">
                      <button type="button"
                        class="btn btn-sm btn-prev btn-icon btn-light bg-light rounded-circle animate-slide-start"
                        aria-label="Prev">
                        <i class="fi-chevron-left fs-lg animate-target"></i>
                      </button>
                    </div>
                    <div
                      class="position-absolute top-50 end-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 me-3">
                      <button type="button"
                        class="btn btn-sm btn-next btn-icon btn-light bg-light rounded-circle animate-slide-end"
                        aria-label="Next">
                        <i class="fi-chevron-right fs-lg animate-target"></i>
                      </button>
                    </div>
                    <div class="swiper-pagination bottom-0 z-1 mb-2" data-bs-theme="light"></div>
                  </div>
                </div>
                <div class="col-sm-8 d-flex p-3 p-sm-4" style="min-height: 255px">
                  <div class="row flex-lg-nowrap g-0 position-relative pt-1 pt-sm-0">
                    <button type="button"
                      class="btn btn-icon btn-outline-secondary rounded-circle position-absolute top-0 end-0 z-2"
                      data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Bookmark" aria-label="Bookmark">
                      <i class="fi-bookmark fs-base"></i>
                    </button>
                    <div class="col-lg-8 pe-lg-4">
                      <div class="d-flex align-items-center pe-5 pe-lg-0 pb-2 mb-1">
                        <div class="ratio ratio-1x1 me-3" style="width: 48px">
                          <img src="assets/img/listings/contractors/ava04.jpg" class="bg-body-secondary rounded-circle"
                            alt="Avatar">
                        </div>
                        <h3 class="h6 mb-0">
                          <a class="hover-effect-underline stretched-link" href="single-entry-contractors.php">Roofing
                            &amp; Construction</a>
                        </h3>
                      </div>
                      <div class="fs-sm mb-2 mb-lg-3">
                        <span class="fw-medium text-dark-emphasis">Roof repair</span>
                        <i class="fi-bullet fs-base align-middle"></i>
                        <span class="fw-medium text-dark-emphasis">Asphalt roofing</span>
                        <i class="fi-bullet fs-base align-middle"></i>
                        <span class="fw-medium text-dark-emphasis">Flat foam roofing</span>
                      </div>
                      <p class="fs-sm mb-0">With extensive experience in roofing and construction, we focus on both
                        residential and commercial roofing solutions.</p>
                    </div>
                    <hr class="vr flex-shrink-0 d-none d-lg-block m-0">
                    <div class="col-lg-4 d-flex flex-column pt-3 pt-lg-5 ps-lg-4">
                      <ul class="list-unstyled pb-2 pb-lg-4 mb-3">
                        <li class="d-flex align-items-center gap-1">
                          <i class="fi-star-filled text-warning"></i>
                          <span class="fs-sm text-secondary-emphasis">4.6</span>
                          <span class="fs-xs text-body-secondary align-self-end">(97)</span>
                        </li>
                        <li class="d-flex align-items-center gap-1 fs-sm">
                          <i class="fi-shield"></i>
                          Verified hires
                        </li>
                        <li class="d-flex align-items-center gap-1 fs-sm">
                          <i class="fi-leaf"></i>
                          Eco-friendly
                        </li>
                      </ul>
                      <button type="button" class="btn btn-outline-dark position-relative z-2 mt-auto"
                        data-bs-toggle="modal" data-bs-target="#connectModal">
                        <i class="fi-mail me-2"></i>
                        Connect
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <!-- Listing -->
            <article class="card hover-effect-opacity overflow-hidden">
              <div class="row g-0">
                <div class="col-sm-4 position-relative bg-body-tertiary" style="min-height: 220px">
                  <div class="swiper h-100 z-2" data-swiper='{
                      "pagination": {
                        "el": ".swiper-pagination"
                      },
                      "navigation": {
                        "prevEl": ".btn-prev",
                        "nextEl": ".btn-next"
                      },
                      "breakpoints": {
                        "991": {
                          "allowTouchMove": false
                        }
                      }
                    }'>
                    <a class="swiper-wrapper h-100" href="single-entry-contractors.php">
                      <div class="swiper-slide">
                        <img src="assets/img/listings/contractors/05.jpg"
                          class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                        <span class="position-absolute top-0 start-0 w-100 h-100"
                          style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .16) 100%)"></span>
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/listings/contractors/05.jpg"
                          class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                        <span class="position-absolute top-0 start-0 w-100 h-100"
                          style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .16) 100%)"></span>
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/listings/contractors/05.jpg"
                          class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                        <span class="position-absolute top-0 start-0 w-100 h-100"
                          style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .16) 100%)"></span>
                      </div>
                    </a>
                    <div
                      class="position-absolute top-50 start-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 ms-3">
                      <button type="button"
                        class="btn btn-sm btn-prev btn-icon btn-light bg-light rounded-circle animate-slide-start"
                        aria-label="Prev">
                        <i class="fi-chevron-left fs-lg animate-target"></i>
                      </button>
                    </div>
                    <div
                      class="position-absolute top-50 end-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 me-3">
                      <button type="button"
                        class="btn btn-sm btn-next btn-icon btn-light bg-light rounded-circle animate-slide-end"
                        aria-label="Next">
                        <i class="fi-chevron-right fs-lg animate-target"></i>
                      </button>
                    </div>
                    <div class="swiper-pagination bottom-0 z-1 mb-2" data-bs-theme="light"></div>
                  </div>
                </div>
                <div class="col-sm-8 d-flex p-3 p-sm-4" style="min-height: 255px">
                  <div class="row flex-lg-nowrap g-0 position-relative pt-1 pt-sm-0">
                    <button type="button"
                      class="btn btn-icon btn-outline-secondary rounded-circle position-absolute top-0 end-0 z-2"
                      data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Bookmark" aria-label="Bookmark">
                      <i class="fi-bookmark fs-base"></i>
                    </button>
                    <div class="col-lg-8 pe-lg-4">
                      <div class="d-flex align-items-center pe-5 pe-lg-0 pb-2 mb-1">
                        <div class="ratio ratio-1x1 me-3" style="width: 48px">
                          <img src="assets/img/listings/contractors/ava05.jpg" class="bg-body-secondary rounded-circle"
                            alt="Avatar">
                        </div>
                        <h3 class="h6 mb-0">
                          <a class="hover-effect-underline stretched-link" href="single-entry-contractors.php">Sam
                            Jackson</a>
                        </h3>
                      </div>
                      <div class="fs-sm mb-2 mb-lg-3">
                        <span class="fw-medium text-dark-emphasis">Bathroom remodeling</span>
                        <i class="fi-bullet fs-base align-middle"></i>
                        <span class="fw-medium text-dark-emphasis">Bathtub installation</span>
                      </div>
                      <p class="fs-sm mb-0">I provide all types of plumbing service work, repairs and installations. I
                        offer full service remodeling.</p>
                    </div>
                    <hr class="vr flex-shrink-0 d-none d-lg-block m-0">
                    <div class="col-lg-4 d-flex flex-column pt-3 pt-lg-5 ps-lg-4">
                      <ul class="list-unstyled pb-2 pb-lg-4 mb-3">
                        <li class="d-flex align-items-center gap-1">
                          <i class="fi-star-filled text-warning"></i>
                          <span class="fs-sm text-secondary-emphasis">5.0</span>
                          <span class="fs-xs text-body-secondary align-self-end">(21)</span>
                        </li>
                        <li class="d-flex align-items-center gap-1 fs-sm">
                          <i class="fi-leaf"></i>
                          Eco-friendly
                        </li>
                      </ul>
                      <button type="button" class="btn btn-outline-dark position-relative z-2 mt-auto"
                        data-bs-toggle="modal" data-bs-target="#connectModal">
                        <i class="fi-mail me-2"></i>
                        Connect
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </article>
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
  <?php include('partials/footer2.php') ?>


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
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/choices.js/public/assets/scripts/choices.min.js"></script>
  <script src="assets/vendor/simplebar/dist/simplebar.min.js"></script>
  <script src="assets/vendor/list.js/dist/list.min.js"></script>
  <script src="assets/vendor/cleave.js/dist/cleave.min.js"></script>

  <?php include('partials/footer-scripts.php'); ?>
</body>

</html>