<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>
  <?php $title = "Real Estate - Vendor Page"; include('partials/title-meta.php'); ?>

  <!-- Vendor styles -->
  <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
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
          <div class="mb-3">
            <label class="form-label">Property <span class="text-danger">*</span></label>
            <select class="form-select" data-select aria-label="Property select" required>
              <option value="">Select property</option>
              <option value="929 Hart St, Brooklyn, NY 11237">929 Hart St, Brooklyn, NY 11237</option>
              <option value="3811 Ditmars Blvd Astoria, NY 11105">3811 Ditmars Blvd Astoria, NY 11105</option>
              <option value="444 Park Ave, Brooklyn, NY 11205">444 Park Ave, Brooklyn, NY 11205</option>
              <option value="517 82nd St, Brooklyn, NY 11209">517 82nd St, Brooklyn, NY 11209</option>
              <option value="40 S 9th St, Brooklyn, NY 11249">40 S 9th St, Brooklyn, NY 11249</option>
            </select>
            <div class="invalid-feedback">Please select a property!</div>
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

    <!-- Cover image -->
    <section class="position-relative bg-body-tertiary">
      <img src="assets/img/listings/real-estate/vendor-cover.jpg"
        class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Cover image">
      <div class="d-md-none" style="height: 200px"></div>
      <div class="d-none d-md-block d-lg-none" style="height: 260px"></div>
      <div class="d-none d-lg-block d-xl-none" style="height: 300px"></div>
      <div class="d-none d-xl-block" style="height: 340px"></div>
    </section>


    <!-- Vendor details -->
    <section class="container position-relative z-1">
      <div style="margin-top: -128px"></div>
      <div class="bg-body border rounded p-4 px-lg-5">
        <div class="d-flex flex-column gap-4 py-sm-2 py-lg-3">
          <div class="d-md-flex justify-content-between pb-lg-1 mb-md-2">
            <div class="d-flex align-items-start align-items-md-center mb-3 mb-md-0">
              <div class="ratio ratio-1x1 bg-body-tertiary border rounded-circle overflow-hidden" style="width: 124px">
                <img src="assets/img/account/avatar-lg.jpg" alt="Avatar">
              </div>
              <div class="ps-3 ps-md-4 ms-lg-2">
                <span class="badge text-bg-info d-inline-flex align-items-center mb-2">
                  Verified
                  <i class="fi-shield ms-1"></i>
                </span>
                <h1 class="h4 py-sm-1 mb-2">Michael Williams</h1>
                <ul class="nav flex-wrap align-items-center gap-2 fs-sm">
                  <li class="text-body-secondary me-2">New York, Brooklyn</li>
                  <li class="na-item">
                    <a class="nav-link position-relative p-0" href="#!">
                      <i class="fi-link fs-base me-1"></i>
                      <span class="hover-effect-underline stretched-link">Imperial Property Agency</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="ps-md-3 ps-lg-4">
              <div class="d-flex flex-column flex-sm-row gap-2 mb-md-3">
                <a class="btn btn-dark" href="tel:2125557890">
                  <i class="fi-phone fs-base ms-n1 me-2"></i>
                  (212)&nbsp;555&#8209;7890
                </a>
                <a class="btn btn-outline-secondary" href="mailto:m.williams@example.com">
                  <i class="fi-mail fs-base ms-n1 me-2"></i>
                  Send email
                </a>
              </div>
              <div class="d-none d-md-block fs-xs text-body-secondary text-end">Last visited 2 hours ago</div>
            </div>
          </div>
          <p class="mb-0 mb-md-2 mb-lg-3">Extensive experience in rentals and a vast database means I can quickly find
            the options that are right for you. Looking for a seamless and exciting rental experience? Contact me today
            - I promise it won't be boring! Your perfect home is just a call away.</p>
          <div class="row row-cols-2 row-cols-sm-4 g-4">
            <div class="col">
              <h5 class="mb-2">3 years</h5>
              <p class="fs-sm mb-0">Works with Finder</p>
            </div>
            <div class="col">
              <h5 class="mb-2">26</h5>
              <p class="fs-sm mb-0">Properties published</p>
            </div>
            <div class="col">
              <h5 class="mb-2">12</h5>
              <p class="fs-sm mb-0">Properties sold</p>
            </div>
            <div class="col">
              <h5 class="d-flex align-items-center lh-base mb-2"><i class="fi-star-filled text-warning me-2"></i>4.9
              </h5>
              <p class="fs-sm mb-0">Finder overall rating</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Property listings -->
    <section class="container pt-5 mt-2 mt-md-3 mt-lg-4">
      <h2 class="pb-2 pb-lg-3">Properties</h2>

      <!-- Nav pills -->
      <div class="nav overflow-x-auto mb-3">
        <ul class="nav nav-pills flex-nowrap gap-2 pb-2 mb-1" role="tablist">
          <li class="nav-item me-1" role="presentation">
            <button type="button" class="nav-link text-nowrap active" role="tab">
              For rent (8)
            </button>
          </li>
          <li class="nav-item me-1" role="presentation">
            <button type="button" class="nav-link text-nowrap" role="tab">
              For sale (13)
            </button>
          </li>
        </ul>
      </div>

      <!-- Properties grid -->
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 g-md-3 g-lg-4">

        <!-- Listing -->
        <div class="col">
          <article class="card hover-effect-opacity h-100">
            <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
              <div class="swiper z-2" data-swiper='{
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
                <a class="swiper-wrapper" href="single-entry-real-estate.php">
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/06.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/06.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/06.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                </a>
                <div
                  class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                  <span class="badge text-bg-primary">New</span>
                </div>
                <div
                  class="position-absolute top-0 end-0 z-1 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                  <button type="button"
                    class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse"
                    aria-label="Add to wishlist">
                    <i class="fi-heart animate-target fs-sm"></i>
                  </button>
                </div>
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
                <div class="swiper-pagination bottom-0 mb-2" data-bs-theme="light"></div>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="pb-1 mb-2">
                <span class="badge text-body-emphasis bg-body-secondary">For rent</span>
              </div>
              <div class="h5 mb-2">$2,750</div>
              <h3 class="fs-sm fw-normal text-body mb-2">
                <a class="stretched-link text-body" href="single-entry-real-estate.php">929 Hart St, Brooklyn, NY
                  11237</a>
              </h3>
              <div class="h6 fs-sm mb-0">108 sq.m</div>
            </div>
            <div class="card-footer d-flex gap-2 border-0 bg-transparent pt-0 pb-3 px-3 mt-n1">
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                3<i class="fi-bed-single fs-base text-secondary-emphasis"></i>
              </div>
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                2<i class="fi-shower fs-base text-secondary-emphasis"></i>
              </div>
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                1<i class="fi-car-garage fs-base text-secondary-emphasis"></i>
              </div>
            </div>
          </article>
        </div>

        <!-- Listing -->
        <div class="col">
          <article class="card hover-effect-opacity h-100">
            <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
              <div class="swiper z-2" data-swiper='{
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
                <a class="swiper-wrapper" href="single-entry-real-estate.php">
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/03.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/03.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/03.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                </a>
                <div
                  class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                  <span class="badge text-bg-info">Featured</span>
                  <span class="badge text-bg-primary">New</span>
                </div>
                <div
                  class="position-absolute top-0 end-0 z-1 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                  <button type="button"
                    class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse"
                    aria-label="Add to wishlist">
                    <i class="fi-heart animate-target fs-sm"></i>
                  </button>
                </div>
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
                <div class="swiper-pagination bottom-0 mb-2" data-bs-theme="light"></div>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="pb-1 mb-2">
                <span class="badge text-body-emphasis bg-body-secondary">For rent</span>
              </div>
              <div class="h5 mb-2">$1,890</div>
              <h3 class="fs-sm fw-normal text-body mb-2">
                <a class="stretched-link text-body" href="single-entry-real-estate.php">3811 Ditmars Blvd Astoria, NY
                  11105</a>
              </h3>
              <div class="h6 fs-sm mb-0">75 sq.m</div>
            </div>
            <div class="card-footer d-flex gap-2 border-0 bg-transparent pt-0 pb-3 px-3 mt-n1">
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                2<i class="fi-bed-single fs-base text-secondary-emphasis"></i>
              </div>
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                1<i class="fi-shower fs-base text-secondary-emphasis"></i>
              </div>
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                1<i class="fi-car-garage fs-base text-secondary-emphasis"></i>
              </div>
            </div>
          </article>
        </div>

        <!-- Listing -->
        <div class="col">
          <article class="card hover-effect-opacity h-100">
            <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
              <div class="swiper z-2" data-swiper='{
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
                <a class="swiper-wrapper" href="single-entry-real-estate.php">
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/05.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/05.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/05.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                </a>
                <div
                  class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                  <span class="badge text-bg-info d-inline-flex align-items-center">
                    Verified
                    <i class="fi-shield ms-1"></i>
                  </span>
                </div>
                <div
                  class="position-absolute top-0 end-0 z-1 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                  <button type="button"
                    class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse"
                    aria-label="Add to wishlist">
                    <i class="fi-heart animate-target fs-sm"></i>
                  </button>
                </div>
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
                <div class="swiper-pagination bottom-0 mb-2" data-bs-theme="light"></div>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="pb-1 mb-2">
                <span class="badge text-body-emphasis bg-body-secondary">For rent</span>
              </div>
              <div class="h5 mb-2">$1,250</div>
              <h3 class="fs-sm fw-normal text-body mb-2">
                <a class="stretched-link text-body" href="single-entry-real-estate.php">444 Park Ave, Brooklyn, NY
                  11205</a>
              </h3>
              <div class="h6 fs-sm mb-0">54 sq.m</div>
            </div>
            <div class="card-footer d-flex gap-2 border-0 bg-transparent pt-0 pb-3 px-3 mt-n1">
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                1<i class="fi-bed-single fs-base text-secondary-emphasis"></i>
              </div>
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                1<i class="fi-shower fs-base text-secondary-emphasis"></i>
              </div>
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                0<i class="fi-car-garage fs-base text-secondary-emphasis"></i>
              </div>
            </div>
          </article>
        </div>

        <!-- Listing -->
        <div class="col">
          <article class="card hover-effect-opacity h-100">
            <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
              <div class="swiper z-2" data-swiper='{
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
                <a class="swiper-wrapper" href="single-entry-real-estate.php">
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/01.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/01.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/01.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                </a>
                <div
                  class="position-absolute top-0 end-0 z-1 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                  <button type="button"
                    class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse"
                    aria-label="Add to wishlist">
                    <i class="fi-heart animate-target fs-sm"></i>
                  </button>
                </div>
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
                <div class="swiper-pagination bottom-0 mb-2" data-bs-theme="light"></div>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="pb-1 mb-2">
                <span class="badge text-body-emphasis bg-body-secondary">For rent</span>
              </div>
              <div class="h5 mb-2">$1,620</div>
              <h3 class="fs-sm fw-normal text-body mb-2">
                <a class="stretched-link text-body" href="single-entry-real-estate.php">40 S 9th St, Brooklyn, NY
                  11249</a>
              </h3>
              <div class="h6 fs-sm mb-0">65 sq.m</div>
            </div>
            <div class="card-footer d-flex gap-2 border-0 bg-transparent pt-0 pb-3 px-3 mt-n1">
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                2<i class="fi-bed-single fs-base text-secondary-emphasis"></i>
              </div>
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                1<i class="fi-shower fs-base text-secondary-emphasis"></i>
              </div>
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                1<i class="fi-car-garage fs-base text-secondary-emphasis"></i>
              </div>
            </div>
          </article>
        </div>

        <!-- Listing -->
        <div class="col">
          <article class="card hover-effect-opacity h-100">
            <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
              <div class="swiper z-2" data-swiper='{
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
                <a class="swiper-wrapper" href="single-entry-real-estate.php">
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/04.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/04.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/04.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                </a>
                <div
                  class="position-absolute top-0 end-0 z-1 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                  <button type="button"
                    class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse"
                    aria-label="Add to wishlist">
                    <i class="fi-heart animate-target fs-sm"></i>
                  </button>
                </div>
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
                <div class="swiper-pagination bottom-0 mb-2" data-bs-theme="light"></div>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="pb-1 mb-2">
                <span class="badge text-body-emphasis bg-body-secondary">For rent</span>
              </div>
              <div class="h5 mb-2">$1,170</div>
              <h3 class="fs-sm fw-normal text-body mb-2">
                <a class="stretched-link text-body" href="single-entry-real-estate.php">67-04 Myrtle Ave Glendale, NY
                  11385</a>
              </h3>
              <div class="h6 fs-sm mb-0">42 sq.m</div>
            </div>
            <div class="card-footer d-flex gap-2 border-0 bg-transparent pt-0 pb-3 px-3 mt-n1">
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                1<i class="fi-bed-single fs-base text-secondary-emphasis"></i>
              </div>
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                1<i class="fi-shower fs-base text-secondary-emphasis"></i>
              </div>
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                0<i class="fi-car-garage fs-base text-secondary-emphasis"></i>
              </div>
            </div>
          </article>
        </div>

        <!-- Listing -->
        <div class="col">
          <article class="card hover-effect-opacity h-100">
            <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
              <div class="swiper z-2" data-swiper='{
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
                <a class="swiper-wrapper" href="single-entry-real-estate.php">
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/02.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/02.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/02.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                </a>
                <div
                  class="position-absolute top-0 end-0 z-1 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                  <button type="button"
                    class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse"
                    aria-label="Add to wishlist">
                    <i class="fi-heart animate-target fs-sm"></i>
                  </button>
                </div>
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
                <div class="swiper-pagination bottom-0 mb-2" data-bs-theme="light"></div>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="pb-1 mb-2">
                <span class="badge text-body-emphasis bg-body-secondary">For rent</span>
              </div>
              <div class="h5 mb-2">$1,320</div>
              <h3 class="fs-sm fw-normal text-body mb-2">
                <a class="stretched-link text-body" href="single-entry-real-estate.php">517 82nd St, Brooklyn, NY
                  11209</a>
              </h3>
              <div class="h6 fs-sm mb-0">45 sq.m</div>
            </div>
            <div class="card-footer d-flex gap-2 border-0 bg-transparent pt-0 pb-3 px-3 mt-n1">
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                1<i class="fi-bed-single fs-base text-secondary-emphasis"></i>
              </div>
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                1<i class="fi-shower fs-base text-secondary-emphasis"></i>
              </div>
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                0<i class="fi-car-garage fs-base text-secondary-emphasis"></i>
              </div>
            </div>
          </article>
        </div>

        <!-- Listing -->
        <div class="col">
          <article class="card hover-effect-opacity h-100">
            <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
              <div class="swiper z-2" data-swiper='{
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
                <a class="swiper-wrapper" href="single-entry-real-estate.php">
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/07.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/07.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/07.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                </a>
                <div
                  class="position-absolute top-0 end-0 z-1 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                  <button type="button"
                    class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse"
                    aria-label="Add to wishlist">
                    <i class="fi-heart animate-target fs-sm"></i>
                  </button>
                </div>
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
                <div class="swiper-pagination bottom-0 mb-2" data-bs-theme="light"></div>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="pb-1 mb-2">
                <span class="badge text-body-emphasis bg-body-secondary">For rent</span>
              </div>
              <div class="h5 mb-2">$1,490</div>
              <h3 class="fs-sm fw-normal text-body mb-2">
                <a class="stretched-link text-body" href="single-entry-real-estate.php">123 Bedford Avenue, Brooklyn,
                  NY 11211</a>
              </h3>
              <div class="h6 fs-sm mb-0">80 sq.m</div>
            </div>
            <div class="card-footer d-flex gap-2 border-0 bg-transparent pt-0 pb-3 px-3 mt-n1">
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                2<i class="fi-bed-single fs-base text-secondary-emphasis"></i>
              </div>
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                1<i class="fi-shower fs-base text-secondary-emphasis"></i>
              </div>
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                1<i class="fi-car-garage fs-base text-secondary-emphasis"></i>
              </div>
            </div>
          </article>
        </div>

        <!-- Listing -->
        <div class="col">
          <article class="card hover-effect-opacity h-100">
            <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
              <div class="swiper z-2" data-swiper='{
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
                <a class="swiper-wrapper" href="single-entry-real-estate.php">
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/09.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/09.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                      <img src="assets/img/listings/real-estate/09.jpg" alt="Image">
                      <span class="position-absolute top-0 start-0 w-100 h-100 z-1"
                        style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                    </div>
                  </div>
                </a>
                <div
                  class="position-absolute top-0 end-0 z-1 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                  <button type="button"
                    class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse"
                    aria-label="Add to wishlist">
                    <i class="fi-heart animate-target fs-sm"></i>
                  </button>
                </div>
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
                <div class="swiper-pagination bottom-0 mb-2" data-bs-theme="light"></div>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="pb-1 mb-2">
                <span class="badge text-body-emphasis bg-body-secondary">For rent</span>
              </div>
              <div class="h5 mb-2">$3,860</div>
              <h3 class="fs-sm fw-normal text-body mb-2">
                <a class="stretched-link text-body" href="single-entry-real-estate.php">456 Court Street, Brooklyn, NY
                  11231</a>
              </h3>
              <div class="h6 fs-sm mb-0">130 sq.m</div>
            </div>
            <div class="card-footer d-flex gap-2 border-0 bg-transparent pt-0 pb-3 px-3 mt-n1">
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                3<i class="fi-bed-single fs-base text-secondary-emphasis"></i>
              </div>
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                2<i class="fi-shower fs-base text-secondary-emphasis"></i>
              </div>
              <div class="d-flex align-items-center fs-sm gap-1 me-1">
                2<i class="fi-car-garage fs-base text-secondary-emphasis"></i>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>


    <!-- Reviews -->
    <section class="container py-5 mt-2 mt-md-3 mt-lg-4">
      <div class="row pb-2 pb-sm-3 pb-md-4 pb-lg-5 mb-xxl-3">
        <div class="col-lg-10 col-xl-9">

          <!-- Title + Overall rating -->
          <div class="d-flex align-items-center justify-content-between pb-2 pb-lg-3 mb-3">
            <h2 class="mb-0">Reviews</h2>
            <div class="h5 d-flex align-items-center lh-base mb-0">
              <i class="fi-star-filled text-warning me-2"></i>
              4.9
              <span class="fs-sm fw-normal text-body-secondary ms-1">(32)</span>
            </div>
          </div>

          <!-- Nav pills + Add review button -->
          <div class="d-flex align-items-center justify-content-between">
            <div class="nav overflow-x-auto w-100 mb-3 me-3">
              <ul class="nav nav-pills flex-nowrap gap-2 pb-2 mb-1" role="tablist">
                <li class="nav-item me-1" role="presentation">
                  <button type="button" class="nav-link text-nowrap active" role="tab">
                    All
                  </button>
                </li>
                <li class="nav-item me-1" role="presentation">
                  <button type="button" class="nav-link text-nowrap" role="tab">
                    Only positive (30)
                  </button>
                </li>
                <li class="nav-item me-1" role="presentation">
                  <button type="button" class="nav-link text-nowrap" role="tab">
                    Only negative (2)
                  </button>
                </li>
              </ul>
            </div>
            <div class="pb-3 mb-3">
              <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#reviewForm">
                <i class="fi-edit-3 fs-base ms-n1 me-2"></i>
                Add review
              </button>
            </div>
          </div>

          <!-- Review -->
          <div class="border-bottom pb-4">
            <div class="d-sm-flex align-items-center mb-3">
              <div class="d-flex align-items-center pe-3">
                <div class="ratio ratio-1x1 flex-shrink-0 bg-body-secondary rounded-circle overflow-hidden"
                  style="width: 48px">
                  <img src="assets/img/account/reviews/ava01.jpg" alt="Avatar">
                </div>
                <div class="ps-3">
                  <h6 class="mb-1">Randy Walker</h6>
                  <div class="fs-xs text-body-secondary">Nov 12, 2024</div>
                </div>
              </div>
              <div class="d-flex gap-1 fs-sm pt-2 pt-sm-0 ps-5 ps-sm-0 ms-3 ms-sm-auto">
                <i class="fi-star-filled text-warning"></i>
                <i class="fi-star-filled text-warning"></i>
                <i class="fi-star-filled text-warning"></i>
                <i class="fi-star-filled text-warning"></i>
                <i class="fi-star-filled text-warning"></i>
              </div>
            </div>
            <p class="fs-sm mb-2">Review on:<a
                class="hover-effect-underline fw-medium text-dark-emphasis text-decoration-none ms-2" href="#!">67-04
                Myrtle Ave Glendale, NY 11385</a></p>
            <p class="fs-sm">Excellent apartment in the very center of the city, attractions and entertainment venues
              are located 50m from the flat. The flat was perfectly clean and had basic slippers, gel-shampoo, clean
              towels.</p>
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

          <!-- Review -->
          <div class="border-bottom py-4">
            <div class="d-sm-flex align-items-center mt-2 mb-3">
              <div class="d-flex align-items-center pe-3">
                <div class="ratio ratio-1x1 flex-shrink-0 bg-body-secondary rounded-circle overflow-hidden"
                  style="width: 48px">
                  <img src="assets/img/account/reviews/ava02.jpg" alt="Avatar">
                </div>
                <div class="ps-3">
                  <h6 class="mb-1">Kathryn Murphy</h6>
                  <div class="fs-xs text-body-secondary">Sep 17, 2024</div>
                </div>
              </div>
              <div class="d-flex gap-1 fs-sm pt-2 pt-sm-0 ps-5 ps-sm-0 ms-3 ms-sm-auto">
                <i class="fi-star-filled text-warning"></i>
                <i class="fi-star-filled text-warning"></i>
                <i class="fi-star-filled text-warning"></i>
                <i class="fi-star-filled text-warning"></i>
                <i class="fi-star-half text-warning"></i>
              </div>
            </div>
            <p class="fs-sm mb-2">Review on:<a
                class="hover-effect-underline fw-medium text-dark-emphasis text-decoration-none ms-2" href="#!">517 82nd
                St, Brooklyn, NY 11209</a></p>
            <p class="fs-sm">I recently rented an apartment, and it has been a fantastic experience. The apartment
              itself is beautiful, with modern finishes and plenty of natural light. The property management team is
              very attentive and responds quickly to any maintenance requests. The common areas, including the pool and
              gym, are always clean and well-maintained.</p>
            <div class="d-flex gap-2 mb-3">
              <a class="hover-effect-scale hover-effect-opacity position-relative d-block w-100 rounded overflow-hidden"
                href="assets/img/listings/real-estate/single/01.jpg" style="max-width: 112px" data-glightbox
                data-gallery="review-images">
                <i
                  class="fi-zoom-in hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                <span
                  class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                <div class="ratio ratio-1x1 hover-effect-target bg-body-tertiary">
                  <img src="assets/img/account/reviews/01.jpg" alt="Image">
                </div>
              </a>
              <a class="hover-effect-scale hover-effect-opacity position-relative d-block w-100 rounded overflow-hidden"
                href="assets/img/listings/real-estate/single/03.jpg" style="max-width: 112px" data-glightbox
                data-gallery="review-images">
                <i
                  class="fi-zoom-in hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                <span
                  class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                <div class="ratio ratio-1x1 hover-effect-target bg-body-tertiary">
                  <img src="assets/img/account/reviews/02.jpg" alt="Image">
                </div>
              </a>
              <a class="hover-effect-scale hover-effect-opacity position-relative d-block w-100 rounded overflow-hidden"
                href="assets/img/listings/real-estate/single/02.jpg" style="max-width: 112px" data-glightbox
                data-gallery="review-images">
                <i
                  class="fi-zoom-in hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                <span
                  class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                <div class="ratio ratio-1x1 hover-effect-target bg-body-tertiary">
                  <img src="assets/img/account/reviews/03.jpg" alt="Image">
                </div>
              </a>
            </div>
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

          <!-- Review -->
          <div class="border-bottom py-4">
            <div class="d-sm-flex align-items-center mt-2 mb-3">
              <div class="d-flex align-items-center pe-3">
                <div class="ratio ratio-1x1 flex-shrink-0 bg-body-secondary rounded-circle overflow-hidden"
                  style="width: 48px">
                  <img src="assets/img/account/reviews/ava03.jpg" alt="Avatar">
                </div>
                <div class="ps-3">
                  <h6 class="mb-1">Darrell Steward</h6>
                  <div class="fs-xs text-body-secondary">Aug 9, 2024</div>
                </div>
              </div>
              <div class="d-flex gap-1 fs-sm pt-2 pt-sm-0 ps-5 ps-sm-0 ms-3 ms-sm-auto">
                <i class="fi-star-filled text-warning"></i>
                <i class="fi-star-filled text-warning"></i>
                <i class="fi-star-filled text-warning"></i>
                <i class="fi-star-filled text-warning"></i>
                <i class="fi-star-filled text-warning"></i>
              </div>
            </div>
            <p class="fs-sm mb-2">Review on:<a
                class="hover-effect-underline fw-medium text-dark-emphasis text-decoration-none ms-2" href="#!">929 Hart
                St, Brooklyn, NY 11237</a></p>
            <p class="fs-sm">I had a great experience with Michael Williams when selling my home. The team was
              professional, reliable, and extremely knowledgeable about the market. They provided excellent marketing
              for my property, which attracted a lot of interest and ultimately led to a quick sale above the asking
              price. I highly recommend their services to anyone looking to sell their home.</p>
            <div class="nav align-items-center">
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 me-n1">
                <i class="fi-thumbs-up fs-base animate-target me-1"></i>
                4
              </button>
              <hr class="vr my-2 mx-3">
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                1
              </button>
            </div>
          </div>

          <!-- Review -->
          <div class="border-bottom py-4">
            <div class="d-sm-flex align-items-center mt-2 mb-3">
              <div class="d-flex align-items-center pe-3">
                <div class="ratio ratio-1x1 flex-shrink-0 bg-body-secondary rounded-circle overflow-hidden"
                  style="width: 48px">
                  <img src="assets/img/account/reviews/ava04.jpg" alt="Avatar">
                </div>
                <div class="ps-3">
                  <h6 class="mb-1">Ralph Edwards</h6>
                  <div class="fs-xs text-body-secondary">Jul 4, 2024</div>
                </div>
              </div>
              <div class="d-flex gap-1 fs-sm pt-2 pt-sm-0 ps-5 ps-sm-0 ms-3 ms-sm-auto">
                <i class="fi-star-filled text-warning"></i>
                <i class="fi-star-filled text-warning"></i>
                <i class="fi-star-filled text-warning"></i>
                <i class="fi-star-filled text-warning"></i>
                <i class="fi-star text-warning"></i>
              </div>
            </div>
            <p class="fs-sm mb-2">Review on:<a
                class="hover-effect-underline fw-medium text-dark-emphasis text-decoration-none ms-2" href="#!">1234
                Maple Street, Brooklyn, NY 11201</a></p>
            <p class="fs-sm">I recently rented an apartment and had a positive experience overall. The location is
              convenient, and the building amenities are great. The apartment itself is spacious and well-maintained.
              However, there were a few minor issues with the plumbing that took a little longer to fix than expected.
              Despite that, I'm happy with my decision and would recommend it to others.</p>
            <div class="nav align-items-center">
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 me-n1">
                <i class="fi-thumbs-up fs-base animate-target me-1"></i>
                19
              </button>
              <hr class="vr my-2 mx-3">
              <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                5
              </button>
            </div>
          </div>

          <!-- Pagination -->
          <nav class="pt-4 mt-md-2" aria-label="Reviews pagination">
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
                <span class="page-link pe-none">...</span>
              </li>
              <li class="page-item">
                <a class="page-link" href="#!">8</a>
              </li>
            </ul>
          </nav>
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
  <script src="assets/vendor/glightbox/dist/js/glightbox.min.js"></script>
  <script src="assets/vendor/choices.js/public/assets/scripts/choices.min.js"></script>

  <?php include('partials/footer-scripts.php'); ?>
</body>

</html>