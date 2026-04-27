<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">
  <head>
    <?php $title = "Blog Single Post v.1"; include('partials/title-meta.php'); ?>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

    <?php include('partials/head-css.php'); ?>
  </head>


  <!-- Body -->
  <body>

    <!-- Comment form modal -->
    <div class="modal fade" id="commentForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="commentFormLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <form class="modal-content needs-validation" novalidate>
          <div class="modal-header border-0">
            <h5 class="modal-title" id="commentFormLabel">Write a comment</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body pb-3 pt-0">
            <div class="mb-3">
              <label for="comment-name" class="form-label">Your name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="comment-name" required>
              <div class="invalid-feedback">Please enter your name!</div>
              <small class="form-text">Will be displayed on the comment.</small>
            </div>
            <div class="mb-3">
              <label for="comment-email" class="form-label">Your email <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="comment-email" required>
              <div class="invalid-feedback">Please provide valid email address!</div>
              <small class="form-text">Authentication only - we won't spam you.</small>
            </div>
            <div>
              <label class="form-label" for="comment-text">Comment <span class="text-danger">*</span></label>
              <textarea class="form-control" rows="4" id="comment-text" required></textarea>
              <div class="invalid-feedback">Please write your comment!</div>
              <small class="form-text">Your comment must be at least 50 characters.</small>
            </div>
          </div>
          <div class="modal-footer flex-nowrap gap-3 border-0 px-4">
            <button type="reset" class="btn btn-secondary w-100 m-0" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary w-100 m-0">Submit comment</button>
          </div>
        </form>
      </div>
    </div>


    <!-- Navigation bar (Page header) -->
    <header class="navbar navbar-expand-lg bg-body navbar-sticky sticky-top z-fixed px-0" data-sticky-element>
      <div class="container">

        <!-- Mobile offcanvas menu toggler (Hamburger) -->
        <button type="button" class="navbar-toggler me-3 me-lg-0" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar brand (Logo) -->
        <a class="navbar-brand py-1 py-md-2 py-xl-1 me-2 me-sm-n4 me-md-n5 me-lg-0" href="home-real-estate.php">
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
        <nav class="pb-2 pb-sm-3 pb-lg-4" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="home-real-estate.php">Home</a></li>
            <li class="breadcrumb-item"><a href="blog-layout-v1.php">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page">Single post v.1</li>
          </ol>
        </nav>

        <div class="row pb-2 pb-sm-3 pb-md-4 pb-lg-5">

          <!-- Single post content -->
          <div class="col-lg-8">
            <div class="nav mb-3">
              <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Selling strategies</a>
            </div>
            <h1 class="h3 mb-4">How real estate drone photography can elevate your listing?</h1>

            <!-- Post meta + Sharing -->
            <div class="d-flex align-items-md-center justify-content-between border-bottom pb-4">
              <div class="nav flex-column flex-md-row fs-sm gap-2 gap-md-3 mb-lg-2">
                <a class="nav-link fw-semibold p-0" href="#!">by Darrell Steward</a>
                <span class="text-body-secondary">May 05, 2024</span>
                <hr class="vr d-none d-md-block m-0">
                <a class="nav-link fw-normal text-body p-0" href="#comments">8 comments</a>
              </div>
              <div class="d-flex mb-lg-2">
                <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-body p-0"></div></div>' aria-label="Share on Instagram" title="Share on Instagram">
                  <i class="fi-instagram"></i>
                </a>
                <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-body p-0"></div></div>' aria-label="Share on Facebook" title="Share on Facebook">
                  <i class="fi-facebook"></i>
                </a>
                <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-body p-0"></div></div>' aria-label="Copy a link" title="Copy link">
                  <i class="fi-link"></i>
                </a>
              </div>
            </div>

            <!-- Post content -->
            <div class="pt-4 mt-md-2">
              <p>In the competitive world of real estate, first impressions matter, and drone photography has become a game-changer for property listings. The use of aerial imagery captured by drones can significantly elevate the presentation of a property. Here's how real estate drone photography can make your listing stand out.</p>
              <figure class="figure w-100 pt-3 pt-lg-4 mb-3">
                <div class="ratio bg-body-tertiary mb-2" style="--fn-aspect-ratio: calc(600 / 856 * 100%)">
                  <img src="assets/img/blog/v1/single/01.jpg" class="figure-img rounded mb-0" alt="Image">
                </div>
                <figcaption class="figure-caption fs-sm">Image source Freepik.com</figcaption>
              </figure>
              <h2 class="h5 pt-3 pt-lg-4">1. Captivating perspectives</h2>
              <p>Drones provide a unique vantage point, capturing stunning aerial views of the property and its surroundings. This allows potential buyers to visualize the layout, landscaping, and neighborhood in a way that traditional ground-level photos cannot convey.</p>
              <h2 class="h5 pt-3 pt-lg-4">2. Highlighting property features</h2>
              <p>Drones excel at showcasing expansive properties, emphasizing key features like pools, gardens, and outdoor amenities. Aerial shots provide a comprehensive view, helping buyers understand the property's layout and potential.</p>
              <h2 class="h5 pt-3 pt-lg-4">3. Showcasing surrounding area</h2>
              <p>Drone photography extends beyond the property boundaries, offering a glimpse of the surrounding neighborhood, parks, or proximity to landmarks. This broader perspective can influence a buyer's decision by presenting the property in its larger context.</p>
              <h2 class="h5 pt-3 pt-lg-4">4. Creating a cinematic experience</h2>
              <p>Drones can capture dynamic, sweeping shots that add a cinematic quality to property videos. This immersive experience can evoke emotion and create a lasting impression, setting your listing apart from others.</p>
              <h2 class="h5 pt-3 pt-lg-4">5. Emphasizing property size and scale</h2>
              <p>Drones excel at illustrating the size and scale of a property, particularly for larger estates or expansive landscapes. This helps potential buyers gauge the property's proportions and get a comprehensive understanding of its size.</p>
              <h2 class="h5 pt-3 pt-lg-4">6. Engaging online presence</h2>
              <p>In an era where online browsing plays a crucial role in the home-buying process, drone photography enhances your listing's online presence. Eye-catching visuals grab attention, encouraging potential buyers to explore the property further.</p>
              <h2 class="h5 pt-3 pt-lg-4">7. Demonstrating property connectivity</h2>
              <p>Drones can showcase a property's proximity to amenities, schools, and transportation hubs. This connectivity is valuable information for buyers looking for a convenient and well-connected living environment.</p>
              <h2 class="h5 pt-3 pt-lg-4">8. Competitive edge in marketing</h2>
              <p>As drone technology becomes more accessible, incorporating it into your real estate marketing strategy can give you a competitive edge. Properties with high-quality aerial imagery are more likely to attract attention and stand out in a crowded market.</p>
              <figure class="figure w-100 pt-3 pt-lg-4 mb-3">
                <div class="ratio bg-body-tertiary mb-2" style="--fn-aspect-ratio: calc(456 / 856 * 100%)">
                  <img src="assets/img/blog/v1/single/02.jpg" class="figure-img rounded mb-0" alt="Image">
                </div>
                <figcaption class="figure-caption fs-sm">Image source Freepik.com</figcaption>
              </figure>
              <h2 class="h5 pt-3 pt-lg-4">Conclusion</h2>
              <p>Incorporating drone photography into your real estate listings not only adds a touch of innovation but also provides potential buyers with a comprehensive and visually appealing overview of the property. It's an investment that can pay off by making your listings more attractive and memorable in the eyes of prospective buyers. So why settle for a worm's-eye view when you can soar above the competition with drone photography?</p>

              <!-- Tags -->
              <div class="border-bottom py-3 py-lg-4">
                <div class="d-flex flex-wrap gap-2 pb-3">
                  <a class="btn btn-outline-secondary rounded-pill me-1" href="#!">Real estate</a>
                  <a class="btn btn-outline-secondary rounded-pill me-1" href="#!">Drones</a>
                  <a class="btn btn-outline-secondary rounded-pill me-1" href="#!">Selling property</a>
                </div>
              </div>

              <!-- Author -->
              <div class="border-bottom py-3">
                <div class="py-3">
                  <div class="ratio ratio-1x1 bg-body-secondary rounded-circle overflow-hidden mb-3" style="width: 56px">
                    <img src="assets/img/blog/v1/single/avatar.jpg" alt="Avatar">
                  </div>
                  <div class="d-flex align-items-center gap-4 mb-2">
                    <h6 class="mb-0">Darrell Steward</h6>
                    <div class="d-flex gap-2">
                      <a class="btn btn-icon btn-sm btn-secondary" href="#!" aria-label="Facebook">
                        <i class="fi-facebook fs-sm"></i>
                      </a>
                      <a class="btn btn-icon btn-sm btn-secondary" href="#!" aria-label="Facebook">
                        <i class="fi-linkedin fs-sm"></i>
                      </a>
                    </div>
                  </div>
                  <p class="fs-sm mb-0">Real estate expert with over 10 years of experience, specializing in residential and commercial properties. The author of numerous articles on the real estate market, trends and investment strategies.</p>
                </div>
              </div>

              <!-- Comments -->
              <div class="pt-5 mt-2 mt-md-3 mt-lg-4 mt-xl-5" id="comments" style="scroll-margin-top: 70px">
                <div class="d-flex align-items-center justify-content-between mb-4">
                  <h2 class="h3 mb-0 me-2">8 comments</h2>
                  <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#commentForm">
                    <i class="fi-edit-3 fs-base ms-n1 me-2"></i>
                    Write comment
                  </button>
                </div>
                <div class="vstack gap-4">

                  <!-- Comment -->
                  <div>
                    <div class="d-flex align-items-center gap-3 mb-2">
                      <span class="h6 mb-0">Bessie Cooper</span>
                      <span class="text-body-secondary fs-xs">July 07, 2024</span>
                    </div>
                    <p class="fs-sm pb-2 mb-1">Absolutely love the idea of using drone photography in real estate listings! The captivating perspectives and aerial views truly offer a fresh and unique way to showcase a property. It's a game-changer for sure.</p>
                    <div class="nav align-items-center">
                      <button type="button" class="nav-link text-body-secondary animate-scale px-0 me-n1">
                        <i class="fi-thumbs-up fs-base animate-target me-1"></i>
                        6
                      </button>
                      <hr class="vr my-2 mx-3">
                      <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                        <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                        1
                      </button>
                    </div>
                  </div>

                  <!-- Comment -->
                  <div>
                    <div class="d-flex align-items-center gap-3 mb-2">
                      <span class="h6 mb-0">Andrew Richards</span>
                      <span class="text-body-secondary fs-xs">June 19, 2024</span>
                    </div>
                    <p class="fs-sm pb-2 mb-1">In today's digital age, an engaging online presence is crucial for any successful real estate listing. Drones not only grab attention but also keep potential buyers immersed in the property, increasing the chances of a memorable viewing experience. </p>
                    <div class="nav align-items-center">
                      <button type="button" class="nav-link text-body-secondary animate-scale px-0 me-n1">
                        <i class="fi-thumbs-up fs-base animate-target me-1"></i>
                        8
                      </button>
                      <hr class="vr my-2 mx-3">
                      <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                        <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                        2
                      </button>
                    </div>
                  </div>

                  <!-- Comment -->
                  <div>
                    <div class="d-flex align-items-center gap-3 mb-2">
                      <span class="h6 mb-0">Ralph Edwards</span>
                      <span class="text-body-secondary fs-xs">May 26, 2024</span>
                    </div>
                    <p class="fs-sm pb-2 mb-1">This is a fantastic read! Drone photography truly revolutionizes the way we present real estate listings. The aerial perspectives and high-quality images not only highlight the property's features but also give potential buyers a better sense of the surrounding area. It's amazing how a simple change in the way we capture photos can significantly enhance a listing's appeal and attract more interested buyers. Definitely considering this for my next property listing. Thanks for sharing!</p>
                    <div class="nav align-items-center">
                      <button type="button" class="nav-link text-body-secondary animate-scale px-0 me-n1">
                        <i class="fi-thumbs-up fs-base animate-target me-1"></i>
                        13
                      </button>
                      <hr class="vr my-2 mx-3">
                      <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                        <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                        0
                      </button>
                    </div>
                  </div>

                  <!-- Comment -->
                  <div>
                    <div class="d-flex align-items-center gap-3 mb-2">
                      <span class="h6 mb-0">Kathryn Murphy</span>
                      <span class="text-body-secondary fs-xs">April 13, 2024</span>
                    </div>
                    <p class="fs-sm pb-2 mb-1">As someone always looking for the next big thing in real estate marketing, drone photography has my full attention. It's not just about standing out; it's about telling a story, and drones allow you to narrate the unique story of each property in a visually stunning way.</p>
                    <div class="nav align-items-center">
                      <button type="button" class="nav-link text-body-secondary animate-scale px-0 me-n1">
                        <i class="fi-thumbs-up fs-base animate-target me-1"></i>
                        24
                      </button>
                      <hr class="vr my-2 mx-3">
                      <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                        <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                        5
                      </button>
                    </div>
                  </div>
                </div>

                <!-- Pagination -->
                <nav class="pt-4 mt-md-2 mt-lg-3" aria-label="Comments pagination">
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
                  </ul>
                </nav>
              </div>
            </div>
          </div>


          <!-- Sidebar that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
          <aside class="col-lg-4 col-xl-3 offset-xl-1">
            <div class="offcanvas-lg offcanvas-end ps-lg-4 ps-xl-0" id="blogSidebar">
              <div class="offcanvas-header border-bottom py-3">
                <h3 class="h5 offcanvas-title">Sidebar</h3>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#blogSidebar" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body d-block">

                <!-- Related posts list -->
                <h3 class="h5 mb-2">Related posts</h3>
                <ul class="nav flex-column gap-0">
                  <li class="nav-item">
                    <a class="nav-link hover-effect-underline fw-semibold border-bottom px-0 py-3" href="#!">Top tips for first-time home buyers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link hover-effect-underline fw-semibold border-bottom px-0 py-3" href="#!">Maximizing your home's value with effective selling strategies</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link hover-effect-underline fw-semibold border-bottom px-0 py-3" href="#!">2024 real estate market trends every buyer and seller should know</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link hover-effect-underline fw-semibold px-0 py-3" href="#!">Home improvement projects that increase property value</a>
                  </li>
                </ul>

                <!-- Subscription -->
                <div class="card bg-body-tertiary border-0 mt-4">
                  <div class="card-body">
                    <div class="ratio bg-body-secondary rounded overflow-hidden mb-3" style="--fn-aspect-ratio: calc(130 / 258 * 100%)">
                      <img src="assets/img/blog/v1/single/subscription.jpg" alt="Image">
                    </div>
                    <h4 class="h6">Subscribe to a free newsletter</h4>
                    <div class="vstack gap-2 pb-1 mb-3">
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="daily">
                        <label for="daily" class="form-check-label">Daily summary (weekdays)</label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="weekly">
                        <label for="weekly" class="form-check-label">Weekly summary (Mondays)</label>
                      </div>
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="alerts">
                        <label for="alerts" class="form-check-label">Breaking news alerts (as needed)</label>
                      </div>
                    </div>
                    <button type="button" class="btn btn-primary w-100">Subscribe</button>
                  </div>
                </div>

                <!-- Top offers -->
                <h3 class="h5 pt-4 mt-3">Top offers</h3>
                <div class="vstack gap-3">

                  <!-- Item -->
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
                        <a class="swiper-wrapper" href="#!">
                          <div class="swiper-slide">
                            <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                              <img src="assets/img/listings/real-estate/06.jpg" alt="Image">
                              <span class="position-absolute top-0 start-0 w-100 h-100 z-1" style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                              <img src="assets/img/listings/real-estate/06.jpg" alt="Image">
                              <span class="position-absolute top-0 start-0 w-100 h-100 z-1" style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                              <img src="assets/img/listings/real-estate/06.jpg" alt="Image">
                              <span class="position-absolute top-0 start-0 w-100 h-100 z-1" style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                            </div>
                          </div>
                        </a>
                        <div class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                          <span class="badge text-bg-primary">New</span>
                        </div>
                        <div class="position-absolute top-0 end-0 z-1 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                          <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                            <i class="fi-heart animate-target fs-sm"></i>
                          </button>
                        </div>
                        <div class="position-absolute top-50 start-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 ms-3">
                          <button type="button" class="btn btn-sm btn-prev btn-icon btn-light bg-light rounded-circle animate-slide-start" aria-label="Prev">
                            <i class="fi-chevron-left fs-lg animate-target"></i>
                          </button>
                        </div>
                        <div class="position-absolute top-50 end-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 me-3">
                          <button type="button" class="btn btn-sm btn-next btn-icon btn-light bg-light rounded-circle animate-slide-end" aria-label="Next">
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
                        <a class="stretched-link text-body" href="#!">929 Hart St, Brooklyn, NY 11237</a>
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

                  <!-- Item -->
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
                        <a class="swiper-wrapper" href="#!">
                          <div class="swiper-slide">
                            <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                              <img src="assets/img/listings/real-estate/01.jpg" alt="Image">
                              <span class="position-absolute top-0 start-0 w-100 h-100 z-1" style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                              <img src="assets/img/listings/real-estate/01.jpg" alt="Image">
                              <span class="position-absolute top-0 start-0 w-100 h-100 z-1" style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                              <img src="assets/img/listings/real-estate/01.jpg" alt="Image">
                              <span class="position-absolute top-0 start-0 w-100 h-100 z-1" style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                            </div>
                          </div>
                        </a>
                        <div class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                          <span class="badge text-bg-info d-inline-flex align-items-center">
                            Verified
                            <i class="fi-shield ms-1"></i>
                          </span>
                          <span class="badge text-bg-primary">New</span>
                        </div>
                        <div class="position-absolute top-0 end-0 z-1 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                          <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                            <i class="fi-heart animate-target fs-sm"></i>
                          </button>
                        </div>
                        <div class="position-absolute top-50 start-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 ms-3">
                          <button type="button" class="btn btn-sm btn-prev btn-icon btn-light bg-light rounded-circle animate-slide-start" aria-label="Prev">
                            <i class="fi-chevron-left fs-lg animate-target"></i>
                          </button>
                        </div>
                        <div class="position-absolute top-50 end-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 me-3">
                          <button type="button" class="btn btn-sm btn-next btn-icon btn-light bg-light rounded-circle animate-slide-end" aria-label="Next">
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
                        <a class="stretched-link text-body" href="#!">40 S 9th St, Brooklyn, NY 11249</a>
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

                  <!-- Item -->
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
                        <a class="swiper-wrapper" href="#!">
                          <div class="swiper-slide">
                            <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                              <img src="assets/img/listings/real-estate/04.jpg" alt="Image">
                              <span class="position-absolute top-0 start-0 w-100 h-100 z-1" style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                              <img src="assets/img/listings/real-estate/04.jpg" alt="Image">
                              <span class="position-absolute top-0 start-0 w-100 h-100 z-1" style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="ratio d-block" style="--fn-aspect-ratio: calc(248 / 362 * 100%)">
                              <img src="assets/img/listings/real-estate/04.jpg" alt="Image">
                              <span class="position-absolute top-0 start-0 w-100 h-100 z-1" style="background: linear-gradient(180deg, rgba(0,0,0, 0) 0%, rgba(0,0,0, .11) 100%)"></span>
                            </div>
                          </div>
                        </a>
                        <div class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                          <span class="badge text-bg-info d-inline-flex align-items-center">
                            Verified
                            <i class="fi-shield ms-1"></i>
                          </span>
                        </div>
                        <div class="position-absolute top-0 end-0 z-1 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                          <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                            <i class="fi-heart animate-target fs-sm"></i>
                          </button>
                        </div>
                        <div class="position-absolute top-50 start-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 ms-3">
                          <button type="button" class="btn btn-sm btn-prev btn-icon btn-light bg-light rounded-circle animate-slide-start" aria-label="Prev">
                            <i class="fi-chevron-left fs-lg animate-target"></i>
                          </button>
                        </div>
                        <div class="position-absolute top-50 end-0 z-1 translate-middle-y d-none d-lg-block hover-effect-target opacity-0 me-3">
                          <button type="button" class="btn btn-sm btn-next btn-icon btn-light bg-light rounded-circle animate-slide-end" aria-label="Next">
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
                        <a class="stretched-link text-body" href="#!">67-04 Myrtle Ave Glendale, NY 11385</a>
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
              </div>
            </div>
          </aside>
        </div>


        <!-- Relevant blog posts (carousel) -->
        <div class="pt-5">

          <!-- Heading + Prev/next buttons -->
          <div class="d-flex align-items-center justify-content-between pb-3 mb-2 mb-sm-3">
            <h2 class="h3 mb-0 me-2">Also read</h2>
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-start rounded-circle me-1" id="prev" aria-label="Prev">
                <i class="fi-chevron-left fs-lg animate-target"></i>
              </button>
              <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-end rounded-circle" id="next" aria-label="Next">
                <i class="fi-chevron-right fs-lg animate-target"></i>
              </button>
            </div>
          </div>

          <!-- Carousel -->
          <div class="swiper pb-2 pb-md-3 pb-lg-4 pb-xl-5" data-swiper='{
            "slidesPerView": 1,
            "spaceBetween": 24,
            "loop": true,
            "navigation": {
              "prevEl": "#prev",
              "nextEl": "#next"
            },
            "breakpoints": {
              "500": {
                "slidesPerView": 2
              },
              "900": {
                "slidesPerView": 3
              }
            }
          }'>
            <div class="swiper-wrapper">

              <!-- Article -->
              <article class="swiper-slide">
                <a class="ratio d-flex hover-effect-scale rounded overflow-hidden mb-3 mb-sm-4" href="#!" style="--fn-aspect-ratio: calc(300 / 416 * 100%)">
                  <img src="assets/img/blog/v1/01.jpg" class="hover-effect-target" alt="Image">
                </a>
                <div class="nav pb-1 mb-2">
                  <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Renting advice</a>
                </div>
                <h3 class="h5 mb-2">
                  <a class="hover-effect-underline" href="#!">What to know when renting an apartment</a>
                </h3>
                <p class="fs-sm">It is quite difficult to find a good apartment for long-term rent in large cities. In addition, potential tenants can face prob...</p>
                <div class="nav fs-sm gap-3">
                  <a class="nav-link fw-semibold p-0" href="#!">by Cody Fisher</a>
                  <span class="text-body-secondary">July 09, 2024</span>
                </div>
              </article>

              <!-- Article -->
              <article class="swiper-slide">
                <a class="ratio d-flex hover-effect-scale rounded overflow-hidden mb-3 mb-sm-4" href="#!" style="--fn-aspect-ratio: calc(300 / 416 * 100%)">
                  <img src="assets/img/blog/v1/02.jpg" class="hover-effect-target" alt="Image">
                </a>
                <div class="nav pb-1 mb-2">
                  <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Investment advice</a>
                </div>
                <h3 class="h5 mb-2">
                  <a class="hover-effect-underline" href="#!">Types of luxury housing</a>
                </h3>
                <p class="fs-sm">What luxury housing is clear to every person. Housing characterized by increased comfort, interior, quality and ma...</p>
                <div class="nav fs-sm gap-3">
                  <a class="nav-link fw-semibold p-0" href="#!">by Kristin Watson</a>
                  <span class="text-body-secondary">June 26, 2024</span>
                </div>
              </article>

              <!-- Article -->
              <article class="swiper-slide">
                <a class="ratio d-flex hover-effect-scale rounded overflow-hidden mb-3 mb-sm-4" href="#!" style="--fn-aspect-ratio: calc(300 / 416 * 100%)">
                  <img src="assets/img/blog/v1/03.jpg" class="hover-effect-target" alt="Image">
                </a>
                <div class="nav pb-1 mb-2">
                  <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Home improvement</a>
                </div>
                <h3 class="h5 mb-2">
                  <a class="hover-effect-underline" href="#!">How to modernize your home on a budget</a>
                </h3>
                <p class="fs-sm">Modernizing your home doesn't have to break the bank. Here are some budget-friendly tips to give your living space a mo...</p>
                <div class="nav fs-sm gap-3">
                  <a class="nav-link fw-semibold p-0" href="#!">by Darrell Steward</a>
                  <span class="text-body-secondary">May 13, 2024</span>
                </div>
              </article>

              <!-- Article -->
              <article class="swiper-slide">
                <a class="ratio d-flex hover-effect-scale rounded overflow-hidden mb-3 mb-sm-4" href="#!" style="--fn-aspect-ratio: calc(300 / 416 * 100%)">
                  <img src="assets/img/blog/v1/07.jpg" class="hover-effect-target" alt="Image">
                </a>
                <div class="nav pb-1 mb-2">
                  <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Home improvement</a>
                </div>
                <h3 class="h5 mb-2">
                  <a class="hover-effect-underline" href="#!">When is the right time to downsize home?</a>
                </h3>
                <p class="fs-sm">Deciding when to downsize your home is a personal choice that depends on various factors. Here are some common...</p>
                <div class="nav fs-sm gap-3">
                  <a class="nav-link fw-semibold p-0" href="#!">by Darrell Steward</a>
                  <span class="text-body-secondary">March 29, 2024</span>
                </div>
              </article>

              <!-- Article -->
              <article class="swiper-slide">
                <a class="ratio d-flex hover-effect-scale rounded overflow-hidden mb-3 mb-sm-4" href="#!" style="--fn-aspect-ratio: calc(300 / 416 * 100%)">
                  <img src="assets/img/blog/v1/08.jpg" class="hover-effect-target" alt="Image">
                </a>
                <div class="nav pb-1 mb-2">
                  <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Interior design</a>
                </div>
                <h3 class="h5 mb-2">
                  <a class="hover-effect-underline" href="#!">7 tips for achieving maximum coziness</a>
                </h3>
                <p class="fs-sm">Creating a cozy atmosphere in your home is a delightful way to enhance comfort and relaxation. Here are seven tips to...</p>
                <div class="nav fs-sm gap-3">
                  <a class="nav-link fw-semibold p-0" href="#!">by Bessie Cooper</a>
                  <span class="text-body-secondary">March 10, 2024</span>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </main>


    <!-- Page footer -->
    <?php include('partials/footer.php') ?>


    <!-- Blog sidebar offcanvas toggle that is visible on screens < 992px wide (lg breakpoint) -->
    <button type="button" class="fixed-bottom z-sticky w-100 btn btn-lg btn-dark border-0 border-top border-light border-opacity-10 rounded-0 pb-4 d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#blogSidebar" aria-controls="blogSidebar" data-bs-theme="light">
      <i class="fi-sidebar fs-base me-2"></i>
      Sidebar
    </button>


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
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <?php include('partials/footer-scripts.php'); ?>
  </body>
</html>
