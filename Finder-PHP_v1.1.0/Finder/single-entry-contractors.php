<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>
  <?php $title = "Single Entry Contractors"; include('partials/title-meta.php'); ?>

  <!-- Vendor styles -->
  <link rel="stylesheet" href="assets/vendor/glightbox/dist/css/glightbox.min.css">
  <link rel="stylesheet" href="assets/vendor/choices.js/public/assets/styles/choices.min.css">

  <?php include('partials/head-css.php'); ?>

</head>


<!-- Body -->

<body>

  <!-- Review form modal -->
  <div class="modal fade" id="reviewForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="reviewFormLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <form class="modal-content needs-validation" novalidate>
        <div class="modal-header border-0">
          <h5 class="modal-title" id="reviewFormLabel">Leave a review</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body pb-3 pt-0">
          <div class="mb-3">
            <label for="review-name" class="form-label">Your name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="review-name" required>
            <div class="invalid-feedback">Please enter your name!</div>
            <small class="form-text">Will be displayed on the comment.</small>
          </div>
          <div class="mb-3">
            <label for="review-email" class="form-label">Your email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="review-email" required>
            <div class="invalid-feedback">Please provide valid email address!</div>
            <small class="form-text">Authentication only - we won't spam you.</small>
          </div>
          <div class="mb-3">
            <label class="form-label">Rating <span class="text-danger">*</span></label>
            <select class="form-select" data-select='{
                "placeholderValue": "Select rating",
                "choices": [
                  {
                    "value": "",
                    "label": "Select rating",
                    "placeholder": true
                  },
                  {
                    "value": "1",
                    "label": "<span class=\"visually-hidden\">1 star</span>",
                    "customProperties": {
                      "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"fi-star-filled text-warning\"></i></span>",
                      "selected": "1 star"
                    }
                  },
                  {
                    "value": "2",
                    "label": "<span class=\"visually-hidden\">2 stars</span>",
                    "customProperties": {
                      "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"fi-star-filled text-warning\"></i><i class=\"fi-star-filled text-warning\"></i></span>",
                      "selected": "2 stars"
                    }
                  },
                  {
                    "value": "3",
                    "label": "<span class=\"visually-hidden\">3 stars</span>",
                    "customProperties": {
                      "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"fi-star-filled text-warning\"></i><i class=\"fi-star-filled text-warning\"></i><i class=\"fi-star-filled text-warning\"></i></span>",
                      "selected": "3 stars"
                    }
                  },
                  {
                    "value": "4",
                    "label": "<span class=\"visually-hidden\">4 stars</span>",
                    "customProperties": {
                      "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"fi-star-filled text-warning\"></i><i class=\"fi-star-filled text-warning\"></i><i class=\"fi-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                      "selected": "4 stars"
                    }
                  },
                  {
                    "value": "5",
                    "label": "<span class=\"visually-hidden\">5 stars</span>",
                    "customProperties": {
                      "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"fi-star-filled text-warning\"></i><i class=\"fi-star-filled text-warning\"></i><i class=\"fi-star-filled text-warning\"></i><i class=\"fi-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                      "selected": "5 stars"
                    }
                  }
                ]
              }' data-select-template="true" aria-label="Rating select" required></select>
            <div class="invalid-feedback">Please select your rating!</div>
          </div>
          <div>
            <label class="form-label" for="review-text">Review <span class="text-danger">*</span></label>
            <textarea class="form-control" rows="4" id="review-text" required></textarea>
            <div class="invalid-feedback">Please write a review!</div>
            <small class="form-text">Your review must be at least 50 characters.</small>
          </div>
        </div>
        <div class="modal-footer flex-nowrap gap-3 border-0 px-4">
          <button type="reset" class="btn btn-secondary w-100 m-0" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary w-100 m-0">Submit review</button>
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
          <li class="breadcrumb-item"><a href="listings-contractors.php">Contractors</a></li>
          <li class="breadcrumb-item active" aria-current="page">Mike Gardner</li>
        </ol>
      </nav>


      <!-- Cantractor info + Bookmark button -->
      <div class="d-flex align-items-start align-items-sm-center justify-content-between pb-3 mb-3">
        <div class="d-sm-flex align-items-center me-4">
          <div class="ratio ratio-1x1 flex-shrink-0 bg-body-secondary rounded-circle overflow-hidden mb-2 mb-sm-0"
            style="width: 72px">
            <img src="assets/img/listings/contractors/single/avatar.jpg" alt="Avatar">
          </div>
          <div class="ps-sm-3 ps-md-4">
            <div class="d-flex align-items-center pb-1 mb-2">
              <h1 class="h5 pe-1 mb-0 me-2">Mike Gardner</h1>
              <span class="badge text-bg-info d-inline-flex">
                Verified
                <i class="fi-shield ms-1"></i>
              </span>
            </div>
            <ul class="list-inline gap-2 fs-sm ms-n2 mb-0">
              <li class="d-flex align-items-center gap-1 ms-2">
                <i class="fi-star-filled text-warning"></i>
                <span class="fs-sm text-secondary-emphasis">4.7</span>
                <span class="fs-xs text-body-secondary align-self-end">(26)</span>
              </li>
              <li class="d-flex align-items-center gap-1 ms-2">
                <i class="fi-credit-card"></i>
                $500 - $2,000
              </li>
              <li class="d-flex align-items-center gap-1 ms-2">
                <i class="fi-leaf"></i>
                Eco-friendly
              </li>
              <li class="d-flex align-items-center gap-1 ms-2">
                <i class="fi-thumbs-up"></i>
                Listing of the month
              </li>
            </ul>
          </div>
        </div>
        <button type="button" class="btn btn-icon btn-outline-secondary rounded-circle" data-bs-toggle="tooltip"
          data-bs-custom-class="tooltip-sm" title="Bookmark" aria-label="Bookmark">
          <i class="fi-bookmark fs-base"></i>
        </button>
      </div>


      <!-- Gallery -->
      <div class="row g-3 g-sm-4 g-md-3 g-xl-4 pb-sm-2 mb-5">

        <!-- Item -->
        <div class="col-md-8">
          <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden"
            href="assets/img/listings/contractors/single/01.jpg" data-glightbox data-gallery="image-gallery">
            <i
              class="fi-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
            <span
              class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
            <div class="ratio hover-effect-target bg-body-tertiary rounded"
              style="--fn-aspect-ratio: calc(432 / 856 * 100%)">
              <img src="assets/img/listings/contractors/single/01.jpg" alt="Image">
            </div>
          </a>
        </div>

        <div class="col-md-4">
          <div class="row row-cols-2 g-3 g-sm-4 g-md-3 g-xl-4">

            <!-- Item -->
            <div class="col">
              <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden"
                href="assets/img/listings/contractors/single/02.jpg" data-glightbox data-gallery="image-gallery">
                <i
                  class="fi-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                <span
                  class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                <div class="ratio hover-effect-target bg-body-tertiary rounded"
                  style="--fn-aspect-ratio: calc(204 / 196 * 100%)">
                  <img src="assets/img/listings/contractors/single/th02.jpg" alt="Image">
                </div>
              </a>
            </div>

            <!-- Item -->
            <div class="col">
              <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden"
                href="assets/img/listings/contractors/single/03.jpg" data-glightbox data-gallery="image-gallery">
                <i
                  class="fi-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                <span
                  class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                <div class="ratio hover-effect-target bg-body-tertiary rounded"
                  style="--fn-aspect-ratio: calc(204 / 196 * 100%)">
                  <img src="assets/img/listings/contractors/single/th03.jpg" alt="Image">
                </div>
              </a>
            </div>

            <!-- Item -->
            <div class="col">
              <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden"
                href="assets/img/listings/contractors/single/04.jpg" data-glightbox data-gallery="image-gallery">
                <i
                  class="fi-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                <span
                  class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                <div class="ratio hover-effect-target bg-body-tertiary rounded"
                  style="--fn-aspect-ratio: calc(204 / 196 * 100%)">
                  <img src="assets/img/listings/contractors/single/th04.jpg" alt="Image">
                </div>
              </a>
            </div>

            <!-- Item -->
            <div class="col">
              <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden"
                href="assets/img/listings/contractors/single/05.jpg" data-glightbox data-gallery="image-gallery">
                <i
                  class="fi-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                <span
                  class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                <div class="ratio hover-effect-target bg-body-tertiary rounded"
                  style="--fn-aspect-ratio: calc(204 / 196 * 100%)">
                  <img src="assets/img/listings/contractors/single/th05.jpg" alt="Image">
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>


      <!-- Page content sections + Sidebar with contact form -->
      <div class="row pb-2 pb-sm-3 pb-md-4 pb-lg-5">

        <!-- Page content sections -->
        <div class="col-lg-8 col-xl-7">

          <!-- About -->
          <section class="pb-sm-2 pb-lg-3 mb-5">
            <h2 class="h4 mb-lg-4">About</h2>
            <p class="fs-sm mb-0">I'm a skilled handyperson adept at various maintenance, repair, and installation
              tasks. With a keen eye for detail and a wide range of skills, I tackle diverse projects, from fixing leaky
              faucets and repairing electrical issues to assembling furniture and conducting minor renovations. I bring
              expertise and efficiency to every job, ensuring homes and spaces remain functional, safe, and
              aesthetically pleasing.</p>
          </section>


          <!-- Services -->
          <section class="pb-sm-2 pb-lg-3 mb-5">
            <h2 class="h4 mb-4">Services offered</h2>
            <div class="row row-cols-2 row-cols-sm-3 gy-3 fs-sm">
              <div class="col d-flex">
                <i class="fi-box fs-xl me-2"></i>
                3D rendering
              </div>
              <div class="col d-flex">
                <i class="fi-bed-double fs-xl me-2"></i>
                Bedroom design
              </div>
              <div class="col d-flex">
                <i class="fi-oven fs-xl me-2"></i>
                Kitchen design
              </div>
              <div class="col d-flex">
                <i class="fi-shower fs-xl me-2"></i>
                Bathroom design
              </div>
              <div class="col d-flex">
                <i class="fi-dresser fs-xl me-2"></i>
                Closet design
              </div>
              <div class="col d-flex">
                <i class="fi-washing-machine fs-xl me-2"></i>
                Laundry room design
              </div>
              <div class="col d-flex">
                <i class="fi-baby fs-xl me-2"></i>
                Kids bedroom design
              </div>
              <div class="col d-flex">
                <i class="fi-lamp-pendant fs-xl me-2"></i>
                Interior design
              </div>
              <div class="col d-flex">
                <i class="fi-swatches fs-xl me-2"></i>
                Color consulting
              </div>
            </div>
          </section>


          <!-- Projects -->
          <section class="pb-sm-2 pb-lg-3 mb-5">
            <h2 class="h4 mb-sm-4">8 Projects</h2>
            <ul class="nav nav-pills flex-nowrap gap-2 overflow-x-auto text-nowrap pb-3 mb-2 mb-sm-3">
              <li class="nav-item me-1">
                <a class="nav-link active" aria-current="page" href="#">All</a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link" href="#">Kitchen</a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link" href="#">Living room</a>
              </li>
              <li class="nav-item me-1">
                <a class="nav-link" href="#">Pool</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Dining room</a>
              </li>
            </ul>
            <div class="row row-cols-2 gy-4 gx-3 gx-sm-4">

              <!-- Project -->
              <div class="col mb-2">
                <article class="card hover-effect-scale bg-transparent border-0">
                  <div class="bg-body-tertiary rounded overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(240 / 360 * 100%)">
                      <img src="assets/img/listings/contractors/single/projects/01.jpg" alt="Image">
                    </div>
                  </div>
                  <div class="card-body pt-3 pt-sm-4 pb-2 px-0">
                    <h3 class="h5 mb-0">
                      <a class="hover-effect-underline stretched-link" href="#!">Bel Air - French Inspired Kitchen</a>
                    </h3>
                  </div>
                  <div class="card-footer d-flex gap-1 fs-sm bg-transparent border-0 p-0">
                    <i class="fi-map-pin mt-1"></i>
                    845 West 53rd Street, Ap. 7B, NY 10019
                  </div>
                </article>
              </div>

              <!-- Project -->
              <div class="col mb-2">
                <article class="card hover-effect-scale bg-transparent border-0">
                  <div class="bg-body-tertiary rounded overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(240 / 360 * 100%)">
                      <img src="assets/img/listings/contractors/single/projects/02.jpg" alt="Image">
                    </div>
                  </div>
                  <div class="card-body pt-3 pt-sm-4 pb-2 px-0">
                    <h3 class="h5 mb-0">
                      <a class="hover-effect-underline stretched-link" href="#!">Mid Century Open Floor Kitchen</a>
                    </h3>
                  </div>
                  <div class="card-footer d-flex gap-1 fs-sm bg-transparent border-0 p-0">
                    <i class="fi-map-pin mt-1"></i>
                    929 Hart St, Brooklyn, NY 11237
                  </div>
                </article>
              </div>

              <!-- Project -->
              <div class="col mb-2">
                <article class="card hover-effect-scale bg-transparent border-0">
                  <div class="bg-body-tertiary rounded overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(240 / 360 * 100%)">
                      <img src="assets/img/listings/contractors/single/projects/03.jpg" alt="Image">
                    </div>
                  </div>
                  <div class="card-body pt-3 pt-sm-4 pb-2 px-0">
                    <h3 class="h5 mb-0">
                      <a class="hover-effect-underline stretched-link" href="#!">Studio City - Cape Cod New
                        Construction</a>
                    </h3>
                  </div>
                  <div class="card-footer d-flex gap-1 fs-sm bg-transparent border-0 p-0">
                    <i class="fi-map-pin mt-1"></i>
                    219 East 78th Street, Suite 3A, NY 10075
                  </div>
                </article>
              </div>

              <!-- Project -->
              <div class="col mb-2">
                <article class="card hover-effect-scale bg-transparent border-0">
                  <div class="bg-body-tertiary rounded overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(240 / 360 * 100%)">
                      <img src="assets/img/listings/contractors/single/projects/04.jpg" alt="Image">
                    </div>
                  </div>
                  <div class="card-body pt-3 pt-sm-4 pb-2 px-0">
                    <h3 class="h5 mb-0">
                      <a class="hover-effect-underline stretched-link" href="#!">Encino Scandinavian Living Room</a>
                    </h3>
                  </div>
                  <div class="card-footer d-flex gap-1 fs-sm bg-transparent border-0 p-0">
                    <i class="fi-map-pin mt-1"></i>
                    3811 Ditmars Blvd Astoria, NY 11105
                  </div>
                </article>
              </div>
            </div>
            <button type="button" class="btn btn-lg btn-outline-secondary w-100 mt-4">Load more projects</button>
          </section>


          <!-- Business details -->
          <section class="pb-sm-2 pb-lg-3 mb-5">
            <h2 class="h4 mb-4">Business details</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
              <div class="col">
                <h5 class="h6 fs-sm pb-1 mb-2">General info</h5>
                <ul class="list-unstyled fs-sm mb-0">
                  <li>Business name: <span class="fw-medium text-dark-emphasis">Mike Gardner</span></li>
                  <li>License: <span class="fw-medium text-dark-emphasis">65IA02277532</span></li>
                  <li>Typical job cost: <span class="fw-medium text-dark-emphasis">$500 - $2,000</span></li>
                </ul>
              </div>
              <div class="col">
                <h5 class="h6 fs-sm pb-1 mb-2">Contacts</h5>
                <ul class="list-unstyled fs-sm mb-0">
                  <li>New York</li>
                  <li>(973) 742-9571</li>
                  <li>www.mikegardner.com</li>
                </ul>
              </div>
              <div class="col">
                <h5 class="h6 fs-sm pb-1 mb-2">Working hours</h5>
                <ul class="list-unstyled fs-sm mb-0">
                  <li>Monday-Friday: 9 AM - 6 PM</li>
                  <li>Saturday: 10 AM - 3 PM</li>
                  <li>Sunday: Closed</li>
                </ul>
              </div>
            </div>
          </section>


          <!-- Reviews -->
          <section class="pt-sm-1 pt-md-3 pt-lg-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
              <h2 class="h4 mb-0">Reviews</h2>
              <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#reviewForm">
                <i class="fi-edit-3 fs-base ms-n1 me-2"></i>
                Add review
              </button>
            </div>

            <!-- Rating breakdown -->
            <div class="row g-4 pb-3 mb-3">
              <div class="col-sm-5 col-md-3 col-lg-4">
                <div
                  class="d-flex flex-column align-items-center justify-content-center h-100 bg-body-tertiary rounded p-4">
                  <div class="h1 pb-2 mb-1">4.5</div>
                  <div class="hstack justify-content-center gap-1 fs-sm mb-2">
                    <i class="fi-star-filled text-warning"></i>
                    <i class="fi-star-filled text-warning"></i>
                    <i class="fi-star-filled text-warning"></i>
                    <i class="fi-star-filled text-warning"></i>
                    <i class="fi-star-half text-warning"></i>
                  </div>
                  <div class="fs-sm">76 reviews</div>
                </div>
              </div>
              <div class="col-sm-7 col-md-9 col-lg-8">
                <div class="vstack gap-3">
                  <div class="hstack gap-2">
                    <div class="hstack fs-sm gap-1">
                      5<i class="fi-star-filled text-warning"></i>
                    </div>
                    <div class="progress w-100" role="progressbar" aria-label="Five stars" aria-valuenow="58"
                      aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar bg-warning rounded-pill" style="width: 58%"></div>
                    </div>
                    <div class="fs-sm text-nowrap text-end" style="width: 40px;">44</div>
                  </div>
                  <div class="hstack gap-2">
                    <div class="hstack fs-sm gap-1">
                      4<i class="fi-star-filled text-warning"></i>
                    </div>
                    <div class="progress w-100" role="progressbar" aria-label="Four stars" aria-valuenow="22.4"
                      aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar bg-warning rounded-pill" style="width: 22.4%"></div>
                    </div>
                    <div class="fs-sm text-nowrap text-end" style="width: 40px;">17</div>
                  </div>
                  <div class="hstack gap-2">
                    <div class="hstack fs-sm gap-1">
                      3<i class="fi-star-filled text-warning"></i>
                    </div>
                    <div class="progress w-100" role="progressbar" aria-label="Three stars" aria-valuenow="12"
                      aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar bg-warning rounded-pill" style="width: 12%"></div>
                    </div>
                    <div class="fs-sm text-nowrap text-end" style="width: 40px;">9</div>
                  </div>
                  <div class="hstack gap-2">
                    <div class="hstack fs-sm gap-1">
                      2<i class="fi-star-filled text-warning"></i>
                    </div>
                    <div class="progress w-100" role="progressbar" aria-label="Two stars" aria-valuenow="5"
                      aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar bg-warning rounded-pill" style="width: 5%"></div>
                    </div>
                    <div class="fs-sm text-nowrap text-end" style="width: 40px;">4</div>
                  </div>
                  <div class="hstack gap-2">
                    <div class="hstack fs-sm gap-1">
                      1<i class="fi-star-filled text-warning"></i>
                    </div>
                    <div class="progress w-100" role="progressbar" aria-label="One star" aria-valuenow="2.6"
                      aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar bg-warning rounded-pill" style="width: 2.6%"></div>
                    </div>
                    <div class="fs-sm text-nowrap text-end" style="width: 40px;">2</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Reviews -->
            <div class="vstack gap-4">

              <!-- Rreview -->
              <div class="vstack gap-2 mb-sm-2">
                <div class="d-flex align-items-center gap-3 mb-1">
                  <h6 class="mb-0">Randy W.</h6>
                  <span class="fs-xs text-body-secondary">November 19, 2024</span>
                </div>
                <div class="d-flex gap-1 fs-sm mb-1">
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                </div>
                <p class="fs-sm mb-1">From start to finish, his cooperation was incredibly smooth. The pricing was quite
                  reasonable, and the task was completed efficiently and with a high level of cleanliness. I'm delighted
                  that we chose Mike over the other companies we considered based on quotes.</p>
                <div class="nav align-items-center">
                  <button type="button" class="nav-link text-body-secondary animate-scale px-0 me-n1">
                    <i class="fi-thumbs-up fs-base animate-target me-1"></i>
                    6
                  </button>
                  <hr class="vr my-2 mx-3">
                  <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                    <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                    0
                  </button>
                </div>
              </div>

              <!-- Rreview -->
              <div class="vstack gap-2 mb-sm-2">
                <div class="d-flex align-items-center gap-3 mb-1">
                  <h6 class="mb-0">Lora Palmer</h6>
                  <span class="fs-xs text-body-secondary">November 10, 2024</span>
                </div>
                <div class="d-flex gap-1 fs-sm mb-1">
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                </div>
                <p class="fs-sm mb-1">He was absolutely amazing very professional. I highly recommend hirings Mike.</p>
                <div class="nav align-items-center">
                  <button type="button" class="nav-link text-body-secondary animate-scale px-0 me-n1">
                    <i class="fi-thumbs-up fs-base animate-target me-1"></i>
                    13
                  </button>
                  <hr class="vr my-2 mx-3">
                  <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                    <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                    2
                  </button>
                </div>
              </div>

              <!-- Rreview -->
              <div class="vstack gap-2 mb-sm-2">
                <div class="d-flex align-items-center gap-3 mb-1">
                  <h6 class="mb-0">Melissa Smith</h6>
                  <span class="fs-xs text-body-secondary">November 5, 2024</span>
                </div>
                <div class="d-flex gap-1 fs-sm mb-1">
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                </div>
                <p class="fs-sm mb-1">Mike delivered exceptional work at an excellent price. I highly recommend him.
                  They completed the job in just four days, and after a full year, there have been no issues.</p>
                <div class="nav align-items-center">
                  <button type="button" class="nav-link text-body-secondary animate-scale px-0 me-n1">
                    <i class="fi-thumbs-up fs-base animate-target me-1"></i>
                    8
                  </button>
                  <hr class="vr my-2 mx-3">
                  <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                    <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                    0
                  </button>
                </div>
              </div>

              <!-- Rreview -->
              <div class="vstack gap-2 mb-sm-2">
                <div class="d-flex align-items-center gap-3 mb-1">
                  <h6 class="mb-0">Alice Cooper</h6>
                  <span class="fs-xs text-body-secondary">October 23, 2024</span>
                </div>
                <div class="d-flex gap-1 fs-sm mb-1">
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                </div>
                <p class="fs-sm mb-1">Mike's service was exceptional, he is true professional. Discovered him on the
                  website, took a chance, and without a doubt, he not only met but exceeded our expectations. I'm more
                  than pleased to write a glowing review for Mike. As a highly satisfied customer, I can confidently say
                  that he has definitely earned it.</p>
                <div class="nav align-items-center">
                  <button type="button" class="nav-link text-body-secondary animate-scale px-0 me-n1">
                    <i class="fi-thumbs-up fs-base animate-target me-1"></i>
                    27
                  </button>
                  <hr class="vr my-2 mx-3">
                  <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                    <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                    3
                  </button>
                </div>
              </div>

              <!-- Rreview -->
              <div class="vstack gap-2 mb-sm-2">
                <div class="d-flex align-items-center gap-3 mb-1">
                  <h6 class="mb-0">Natalia D.</h6>
                  <span class="fs-xs text-body-secondary">October 7, 2024</span>
                </div>
                <div class="d-flex gap-1 fs-sm mb-1">
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star-filled text-warning"></i>
                  <i class="fi-star text-warning"></i>
                </div>
                <p class="fs-sm mb-1">Mike exhibited great professionalism and politeness. I hired him to replace the
                  door springs, which he did efficiently in a short amount of time. I would wholeheartedly recommend his
                  services to anyone. I'm delighted that everything is now functioning like new again.</p>
                <div class="nav align-items-center">
                  <button type="button" class="nav-link text-body-secondary animate-scale px-0 me-n1">
                    <i class="fi-thumbs-up fs-base animate-target me-1"></i>
                    15
                  </button>
                  <hr class="vr my-2 mx-3">
                  <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                    <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                    0
                  </button>
                </div>
              </div>
            </div>

            <!-- Pagination -->
            <nav class="pt-4 mt-1 mt-sm-0" aria-label="Reviews pagination">
              <ul class="pagination">
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
                  <span class="page-link pe-none">...</span>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">16</a>
                </li>
              </ul>
            </nav>
          </section>
        </div>


        <!-- Sidebar with contact form that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
        <aside class="col-lg-4 offset-xl-1" style="margin-top: -105px">
          <div class="offcanvas-lg offcanvas-end sticky-lg-top" id="contactForm">
            <div class="d-none d-lg-block" style="height: 105px"></div>
            <div class="offcanvas-header border-bottom py-3">
              <h3 class="h5 offcanvas-title">Contact Mike Gardner</h3>
              <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas"
                data-bs-target="#contactForm" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-block position-relative p-lg-4">
              <div class="position-relative z-1 py-lg-2 px-xl-2">
                <h4 class="h5 text-center d-none d-lg-block pb-1 mb-2">Contact Mike Gardner</h4>
                <p class="fs-sm text-lg-center mb-4">Please fill out the form to contact a specialist</p>
                <form class="needs-validation" novalidate>
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
              <span
                class="position-absolute top-0 start-0 w-100 h-100 bg-body-tertiary rounded d-none d-lg-block"></span>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </main>


  <!-- Page footer -->
  <?php include('partials/footer2.php') ?>


  <!-- Sidebar with contact form offcanvas toggle that is visible on screens < 992px wide (lg breakpoint) -->
  <button type="button"
    class="fixed-bottom z-sticky w-100 btn btn-lg btn-dark border-0 border-top border-light border-opacity-10 rounded-0 pb-4 d-lg-none"
    data-bs-toggle="offcanvas" data-bs-target="#contactForm" aria-controls="contactForm" data-bs-theme="light">
    <i class="fi-mail fs-base me-2"></i>
    Connect
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
  <script src="assets/vendor/glightbox/dist/js/glightbox.min.js"></script>
  <script src="assets/vendor/cleave.js/dist/cleave.min.js"></script>
  <script src="assets/vendor/choices.js/public/assets/scripts/choices.min.js"></script>

  <?php include('partials/footer-scripts.php'); ?>
</body>

</html>