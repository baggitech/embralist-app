<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>
  <meta charset="utf-8">

  <?php $title = "Real Estate - Property Details Page"; include('partials/title-meta.php'); ?>

  <!-- Vendor styles -->
  <link rel="stylesheet" href="assets/vendor/glightbox/dist/css/glightbox.min.css">
  <link rel="stylesheet" href="assets/vendor/flatpickr/dist/flatpickr.min.css">

  <?php include('partials/head-css.php'); ?>

</head>


<!-- Body -->

<body>

  <!-- Tour booking form modal -->
  <div class="modal fade" id="tourBooking" tabindex="-1" aria-labelledby="tourBookingLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 400px">
      <form class="modal-content needs-validation" novalidate>
        <div class="modal-header border-0">
          <h5 class="modal-title" id="tourBookingLabel">Schedule a tour</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body pb-4 pt-0">
          <ul class="nav nav-pills nav-justified mb-4">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">In-person</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Video chat</a>
            </li>
          </ul>
          <div class="vstack gap-3">
            <div class="position-relative">
              <i class="fi-calendar position-absolute top-50 start-0 translate-middle-y ms-3"></i>
              <input type="text" class="form-control form-icon-start bg-transparent"
                data-datepicker='{"dateFormat": "M j, Y"}' placeholder="Choose date *" required>
            </div>
            <div class="position-relative">
              <i class="fi-clock position-absolute top-50 start-0 translate-middle-y ms-3"></i>
              <input type="text" class="form-control form-icon-start" id="time-12" data-datepicker='{
                  "enableTime": true,
                  "noCalendar": true,
                  "dateFormat": "h:i K"
                }' placeholder="Choose time *" required>
            </div>
            <input type="text" class="form-control" placeholder="Name *" required>
            <input type="email" class="form-control" placeholder="Email *" required>
            <input type="tel" class="form-control"
              data-input-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}'
              placeholder="Phone number">
          </div>
        </div>
        <div class="modal-footer border-0 pt-0 pb-4 px-4">
          <button type="submit" class="btn btn-lg btn-primary w-100 m-0 mb-3">Schedule a tour</button>
          <p class="fs-xs m-0">This site is protected by reCAPTCHA and the Google <a
              class="hover-effect-underline text-decoration-none" href="#!">Privacy Policy</a> and <a
              class="hover-effect-underline text-decoration-none" href="#!">Terms of Service</a> apply.</p>
        </div>
      </form>
    </div>
  </div>


  <!-- Contact form modal -->
  <div class="modal fade" id="contactForm" tabindex="-1" aria-labelledby="contactFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 400px">
      <form class="modal-content needs-validation" novalidate>
        <div class="modal-header border-0">
          <h5 class="modal-title" id="contactFormLabel">Learn more about this property</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body pb-4 pt-0">
          <p class="fs-sm">Complete this form so we can get in touch</p>
          <div class="vstack gap-3">
            <input type="text" class="form-control" placeholder="Name *" required>
            <input type="email" class="form-control" placeholder="Email *" required>
            <input type="tel" class="form-control"
              data-input-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}'
              placeholder="Phone number">
            <textarea class="form-control" rows="5" placeholder="Write your message" required></textarea>
          </div>
        </div>
        <div class="modal-footer border-0 pt-0 pb-4 px-4">
          <button type="submit" class="btn btn-lg btn-primary w-100 m-0 mb-3">Send message</button>
          <p class="fs-xs m-0">This site is protected by reCAPTCHA and the Google <a
              class="hover-effect-underline text-decoration-none" href="#!">Privacy Policy</a> and <a
              class="hover-effect-underline text-decoration-none" href="#!">Terms of Service</a> apply.</p>
        </div>
      </form>
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
        <a class="btn btn-primary animate-scale" href="add-property-type.php">
          <i class="fi-plus fs-lg animate-target ms-n2 me-1 me-sm-2"></i>
          Add<span class="d-none d-xl-inline ms-1">property</span>
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
          <li class="breadcrumb-item"><a href="home-real-estate.php">Home</a></li>
          <li class="breadcrumb-item"><a href="listings-real-estate.php">Property for rent</a></li>
          <li class="breadcrumb-item active" aria-current="page">67-04 Myrtle Ave Glendale, NY</li>
        </ol>
      </nav>

      <!-- Image gallery -->
      <div class="row g-3 g-lg-4">
        <div class="col-md-8">
          <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden"
            href="assets/img/listings/real-estate/single/01.jpg" data-glightbox data-gallery="image-gallery">
            <i
              class="fi-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
            <span
              class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
            <div class="ratio hover-effect-target bg-body-tertiary rounded"
              style="--fn-aspect-ratio: calc(450 / 856 * 100%)">
              <img src="assets/img/listings/real-estate/single/01.jpg" alt="Image">
            </div>
          </a>
        </div>
        <div class="col-md-4 vstack gap-3 gap-lg-4">
          <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden"
            href="assets/img/listings/real-estate/single/02.jpg" data-glightbox data-gallery="image-gallery">
            <i
              class="fi-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
            <span
              class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
            <div class="ratio hover-effect-target bg-body-tertiary rounded"
              style="--fn-aspect-ratio: calc(213 / 416 * 100%)">
              <img src="assets/img/listings/real-estate/single/th02.jpg" alt="Image">
            </div>
          </a>
          <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden"
            href="assets/img/listings/real-estate/single/03.jpg" data-glightbox data-gallery="image-gallery">
            <i
              class="fi-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
            <span
              class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
            <div class="ratio hover-effect-target bg-body-tertiary rounded"
              style="--fn-aspect-ratio: calc(213 / 416 * 100%)">
              <img src="assets/img/listings/real-estate/single/th03.jpg" alt="Image">
            </div>
            <div class="btn btn-sm btn-light pe-none position-absolute end-0 bottom-0 z-2 mb-3 me-3">
              <i class="fi-camera fs-sm me-1 ms-n1"></i>
              24
            </div>
          </a>
        </div>
      </div>


      <!-- Listing details -->
      <div class="row pt-4 pb-2 pb-sm-3 pb-md-4 py-lg-5 mt-sm-2 mt-lg-0">

        <!-- Content sections -->
        <div class="col-lg-8 col-xl-7 pb-3 pb-sm-0 mb-4 mb-sm-5 mb-lg-0">

          <!-- Badges + Sharing and wishlist buttons -->
          <div class="d-flex align-items-center justify-content-between gap-4 mb-3">
            <div class="d-flex gap-2">
              <span class="badge text-bg-info d-inline-flex align-items-center">
                Verified
                <i class="fi-shield ms-1"></i>
              </span>
              <span class="badge text-bg-primary">New</span>
            </div>
            <div class="d-flex gap-2">
              <div class="dropdown" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Share">
                <button type="button" class="btn btn-icon btn-secondary bg-transparent border-0 animate-scale"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Share">
                  <i class="fi-share-2 animate-target fs-base"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" style="--fn-dropdown-min-width: 9.5rem">
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
              <button type="button" class="btn btn-icon btn-secondary bg-transparent border-0 animate-pulse"
                data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist" aria-label="Wishlist">
                <i class="fi-heart animate-target fs-base"></i>
              </button>
            </div>
          </div>

          <!-- Price + Address + Facilities -->
          <div class="h3 pb-1 mb-2">$1,170</div>
          <p class="fs-sm pb-1 mb-2">67-04 Myrtle Ave Glendale, NY 11385</p>
          <div class="d-flex gap-2 mb-4">
            <div class="d-flex align-items-center fs-sm gap-1 me-2">
              1<i class="fi-bed-single fs-base text-secondary-emphasis"></i>
            </div>
            <div class="d-flex align-items-center fs-sm gap-1 me-2">
              1<i class="fi-shower fs-base text-secondary-emphasis"></i>
            </div>
            <div class="d-flex align-items-center fs-sm gap-1 me-2">
              0<i class="fi-car-garage fs-base text-secondary-emphasis"></i>
            </div>
            <div class="fs-sm">42 sq.m</div>
          </div>

          <!-- Info message (Alert) -->
          <div class="alert d-flex alert-secondary fs-sm m-0" role="alert">
            <i class="fi-info fs-lg pe-1 me-2"></i>
            <div>We estimate this home will sell faster than 94% nearby.</div>
          </div>

          <!-- About -->
          <h2 class="h5 pt-4 pt-sm-5 mt-3 mt-sm-0">About</h2>
          <p class="fs-sm">It offers a comfortable living area leading to a formal dining room, gorgeous hardwood floors
            throughout, spacious renovated Island kitchen with granite countertops and stainless steel appliances.
            Additionally, revel in the convenience of a master bedroom featuring a built-in dressing room, complemented
            by a private bath and shower for added comfort. This inviting apartment is conveniently located close to
            transportation hubs, ensuring easy access to the city's heartbeat.</p>

          <!-- General info -->
          <h2 class="h5 pt-4 pt-sm-5 mt-3 mt-sm-0">General information</h2>
          <table class="table table-borderless w-auto fs-sm">
            <tbody>
              <tr>
                <th scope="row" class="py-2 ps-0 pe-3">Property type</th>
                <td class="text-body py-2">Apartment</td>
              </tr>
              <tr>
                <th scope="row" class="py-2 ps-0 pe-3">Year built</th>
                <td class="text-body py-2">2023</td>
              </tr>
              <tr>
                <th scope="row" class="py-2 ps-0 pe-3">Living area</th>
                <td class="text-body py-2">42 sq.m</td>
              </tr>
              <tr>
                <th scope="row" class="py-2 ps-0 pe-3">Floor</th>
                <td class="text-body py-2">3</td>
              </tr>
              <tr>
                <th scope="row" class="py-2 ps-0 pe-3">Total rooms</th>
                <td class="text-body py-2">2</td>
              </tr>
              <tr>
                <th scope="row" class="py-2 ps-0 pe-3">Bedrooms</th>
                <td class="text-body py-2">1</td>
              </tr>
              <tr>
                <th scope="row" class="py-2 ps-0 pe-3">Bathrooms</th>
                <td class="text-body py-2">1</td>
              </tr>
            </tbody>
          </table>

          <!-- Amenities -->
          <h2 class="h5 pt-4 pt-sm-5 mt-3 mt-sm-0">Amenities</h2>
          <div class="row row-cols-2 row-cols-sm-3 fs-sm gy-3">
            <div class="col d-flex align-items-center">
              <i class="fi-wifi fs-lg me-2"></i>
              WiFi
            </div>
            <div class="col d-flex align-items-center">
              <i class="fi-dishwasher fs-lg me-2"></i>
              Dishwasher
            </div>
            <div class="col d-flex align-items-center">
              <i class="fi-snowflake fs-lg me-2"></i>
              Air conditioning
            </div>
            <div class="col d-flex align-items-center">
              <i class="fi-parking fs-lg me-2"></i>
              Parking place
            </div>
            <div class="col d-flex align-items-center">
              <i class="fi-washing-machine fs-lg me-2"></i>
              Laundry
            </div>
            <div class="col d-flex align-items-center">
              <i class="fi-iron fs-lg me-2"></i>
              Icon
            </div>
            <div class="col d-flex align-items-center">
              <i class="fi-video fs-lg me-2"></i>
              Security cameras
            </div>
            <div class="col d-flex align-items-center">
              <i class="fi-no-smoking fs-lg me-2"></i>
              No smocking
            </div>
            <div class="col d-flex align-items-center">
              <i class="fi-paw fs-lg me-2"></i>
              Pets allowed
            </div>
          </div>

          <!-- Transportation -->
          <h2 class="h5 pt-4 pt-sm-5 mt-3 mt-sm-0">Transportation</h2>
          <div class="row row-cols-2 row-cols-sm-3 fs-sm gy-3">
            <div class="col d-flex align-items-center">
              <i class="fi-footprints fs-lg me-2"></i>
              <span><span class="fw-semibold">73/100</span> Walkable</span>
            </div>
            <div class="col d-flex align-items-center">
              <i class="fi-car fs-lg me-2"></i>
              <span><span class="fw-semibold">97%</span> Driveable</span>
            </div>
            <div class="col d-flex align-items-center">
              <i class="fi-bicycle fs-lg me-2"></i>
              <span><span class="fw-semibold">59/100%</span> Bikeable</span>
            </div>
          </div>

          <!-- Location -->
          <h2 class="h5 pt-4 pt-sm-5 mt-3 mt-sm-0">Location</h2>
          <div class="overflow-x-auto pb-3 mb-2">
            <ul class="nav nav-pills nav-justified flex-nowrap gap-2">
              <li class="nav-item me-1">
                <a class="nav-link text-nowrap active" aria-current="page" href="#!">
                  <i class="fi-tram fs-base me-2 ms-n1"></i>
                  Transport
                </a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link text-nowrap" href="#!">
                  <i class="fi-graduation-cap fs-base me-2 ms-n1"></i>
                  Education
                </a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link text-nowrap" href="#!">
                  <i class="fi-shopping-bag fs-base me-2 ms-n1"></i>
                  Shopping
                </a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link text-nowrap" href="#!">
                  <i class="fi-bowl-food fs-base me-2 ms-n1"></i>
                  Food
                </a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link text-nowrap" href="#!">
                  <i class="fi-tree fs-base me-2 ms-n1"></i>
                  Parks
                </a>
              </li>
            </ul>
          </div>

          <!-- Google map -->
          <iframe class="border rounded"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2311.3724100313693!2d-73.82417211551919!3d42.62335692577899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89dde016efd1fe73%3A0x6861561b35064fe9!2sGlendale%20Ave!5e0!3m2!1sen!2suk!4v1726842151281!5m2!1sen!2suk"
            width="600" height="350" style="border: 0" allowfullscreen loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" title="Map"></iframe>

          <!-- Meta + Sharing and wishlist buttons -->
          <div class="d-flex align-items-center justify-content-between gap-3 pt-4">
            <div class="d-flex gap-3 fs-sm">
              <div>Published: <span class="fw-medium text-dark-emphasis">Sep 9, 2024</span></div>
              <div>Views: <span class="fw-medium text-dark-emphasis">158</span></div>
            </div>
            <div class="d-flex gap-2">
              <div class="dropdown" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Share">
                <button type="button" class="btn btn-icon btn-secondary bg-transparent border-0 animate-scale"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Share">
                  <i class="fi-share-2 animate-target fs-base"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" style="--fn-dropdown-min-width: 9.5rem">
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
              <button type="button" class="btn btn-icon btn-secondary bg-transparent border-0 animate-pulse"
                data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist" aria-label="Wishlist">
                <i class="fi-heart animate-target fs-base"></i>
              </button>
            </div>
          </div>
        </div>


        <!-- Sidebar with contact form that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
        <aside class="col-lg-4 offset-xl-1">
          <div class="d-none d-lg-block" style="margin-top: -105px"></div>
          <div class="sticky-lg-top">
            <div class="d-none d-lg-block" style="height: 105px"></div>
            <div class="bg-body-tertiary rounded p-4">
              <div class="p-sm-2 p-lg-0 p-xl-2">
                <div class="d-flex align-items-center position-relative mb-4">
                  <div class="ratio ratio-1x1 flex-shrink-0 bg-body-secondary rounded-circle overflow-hidden"
                    style="width: 80px">
                    <img src="assets/img/listings/real-estate/single/avatar.jpg" alt="Avatar">
                  </div>
                  <div class="ps-4">
                    <h5 class="mb-1">
                      <a class="hover-effect-underline stretched-link" href="vendor-real-estate.php">Liza Williams</a>
                    </h5>
                    <p class="fs-sm mb-0">Listing agent</p>
                  </div>
                </div>
                <ul class="nav flex-column gap-2 mb-4">
                  <li class="nav-item d-flex align-items-center position-relative">
                    <i class="fi-mail me-2"></i>
                    <a class="nav-link hover-effect-underline stretched-link fw-normal text-body p-0"
                      href="mailto:liza.williams@example.com">liza.williams@example.com</a>
                  </li>
                  <li class="nav-item d-flex align-items-center position-relative">
                    <i class="fi-phone me-2"></i>
                    <a class="nav-link hover-effect-underline stretched-link fw-normal text-body p-0"
                      href="tel:745-854-4264">745&#8209;854&#8209;4264</a>
                  </li>
                </ul>
                <button type="button" class="btn btn-lg btn-primary w-100" data-bs-toggle="modal"
                  data-bs-target="#tourBooking">Schedule a tour</button>
                <div class="fs-xs text-center pt-1 pb-2 my-2">It's free, cancel anytime</div>
                <div class="d-flex align-items-center mb-3">
                  <hr class="w-100 m-0">
                  <div class="mt-n1 px-3">or</div>
                  <hr class="w-100 m-0">
                </div>
                <button type="button" class="btn btn-lg btn-outline-dark w-100" data-bs-toggle="modal"
                  data-bs-target="#contactForm">Send message</button>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
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
  <script src="assets/vendor/glightbox/dist/js/glightbox.min.js"></script>
  <script src="assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
  <script src="assets/vendor/cleave.js/dist/cleave.min.js"></script>

  <?php include('partials/footer-scripts.php'); ?>
</body>

</html>