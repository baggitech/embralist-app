<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">
  <head>
    <?php $title = "Help Topics v.2"; include('partials/title-meta.php'); ?>

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
      <div class="container pt-4 pt-sm-5 pb-5 mt-lg-3 mb-xxl-3">
        <div class="row pt-3 pt-sm-0 pb-2 pb-sm-3 pb-md-4 pb-lg-5">

          <!-- Help center page content -->
          <div class="col-lg-8 position-relative z-2">
            <h1 class="display-6 mb-4">How can we help you?</h1>

            <!-- Search form -->
            <div class="bg-body border rounded shadow p-2 mb-4">
              <form class="d-flex flex-column flex-sm-row gap-2 gap-sm-0 p-1">
                <div class="d-flex align-items-center w-100 ms-2">
                  <i class="fi-search fs-lg text-body-emphasis"></i>
                  <input type="search" class="form-control form-control-lg border-0" placeholder="What do you need help with?" required>
                </div>
                <button type="submit" class="btn btn-lg btn-dark">Search</button>
              </form>
            </div>

            <!-- Popular searches -->
            <div class="nav gap-2 fs-sm">
              <span class="text-body-secondary me-2">Popular searches:</span>
              <a class="nav-link hover-effect-underline p-0 me-2" href="#!">Sell car</a>
              <a class="nav-link hover-effect-underline p-0 me-2" href="#!">Buy car</a>
              <a class="nav-link hover-effect-underline p-0 me-2" href="#!">Insurance</a>
              <a class="nav-link hover-effect-underline p-0 me-2" href="#!">Legal issues</a>
            </div>

            <!-- Account settings section -->
            <h2 class="h3 pt-5 pb-2 pb-md-3 mt-lg-3">Account settings</h2>
            <div class="row row-cols-1 row-cols-sm-2 g-4 g-sm-3 g-md-4">
              <div class="col">
                <div class="card h-100 bg-warning-subtle border-0 p-4">
                  <div class="card-body p-0 p-md-2 p-lg-0 p-xl-2">
                    <h3 class="h5">
                      <a class="hover-effect-underline stretched-link" href="help-single-article-v2.php">Get started</a>
                    </h3>
                    <p class="mb-0">Initiate your journey by creating a listing, following the account setup guide.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 bg-warning-subtle border-0 p-4">
                  <div class="card-body p-0 p-md-2 p-lg-0 p-xl-2">
                    <h3 class="h5">
                      <a class="hover-effect-underline stretched-link" href="help-single-article-v2.php">Your account</a>
                    </h3>
                    <p class="mb-0">Customize your account and notification settings to suit your preferences.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 bg-warning-subtle border-0 p-4">
                  <div class="card-body p-0 p-md-2 p-lg-0 p-xl-2">
                    <h3 class="h5">
                      <a class="hover-effect-underline stretched-link" href="help-single-article-v2.php">Actions with ads</a>
                    </h3>
                    <p class="mb-0">Modify your ads and explore effective bargaining techniques.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 bg-warning-subtle border-0 p-4">
                  <div class="card-body p-0 p-md-2 p-lg-0 p-xl-2">
                    <h3 class="h5">
                      <a class="hover-effect-underline stretched-link" href="help-single-article-v2.php">Support</a>
                    </h3>
                    <p class="mb-0">Tackle technical issues, resolve disputes, and connect with customer support seamlessly.</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Buying a car section -->
            <h2 class="h3 pt-5 pb-2 pb-md-3 mt-lg-3">Buying a car</h2>
            <div class="row row-cols-1 row-cols-sm-2 g-4 g-sm-3 g-md-4">
              <div class="col">
                <div class="card h-100 bg-info-subtle border-0 p-4">
                  <div class="card-body p-0 p-md-2 p-lg-0 p-xl-2">
                    <h3 class="h5">
                      <a class="hover-effect-underline stretched-link" href="help-single-article-v2.php">Search tips</a>
                    </h3>
                    <p class="mb-0">Master the art of finding your ideal car by using advanced search filters and browsing categories.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 bg-info-subtle border-0 p-4">
                  <div class="card-body p-0 p-md-2 p-lg-0 p-xl-2">
                    <h3 class="h5">
                      <a class="hover-effect-underline stretched-link" href="help-single-article-v2.php">Contacting sellers</a>
                    </h3>
                    <p class="mb-0">Learn the best practices for initiating contact with sellers and arranging viewings or test drives.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 bg-info-subtle border-0 p-4">
                  <div class="card-body p-0 p-md-2 p-lg-0 p-xl-2">
                    <h3 class="h5">
                      <a class="hover-effect-underline stretched-link" href="help-single-article-v2.php">Vehicle history</a>
                    </h3>
                    <p class="mb-0">Discover how to request and interpret vehicle history reports to make informed decisions.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 bg-info-subtle border-0 p-4">
                  <div class="card-body p-0 p-md-2 p-lg-0 p-xl-2">
                    <h3 class="h5">
                      <a class="hover-effect-underline stretched-link" href="help-single-article-v2.php">Payment options</a>
                    </h3>
                    <p class="mb-0">Understand the different payment methods available and how to complete transactions securely.</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Selling a car section -->
            <h2 class="h3 pt-5 pb-2 pb-md-3 mt-lg-3">Selling a car</h2>
            <div class="row row-cols-1 row-cols-sm-2 g-4 g-sm-3 g-md-4">
              <div class="col">
                <div class="card h-100 bg-primary-subtle border-0 p-4">
                  <div class="card-body p-0 p-md-2 p-lg-0 p-xl-2">
                    <h3 class="h5">
                      <a class="hover-effect-underline stretched-link" href="help-single-article-v2.php">Creating a listing</a>
                    </h3>
                    <p class="mb-0">Get expert tips on writing compelling descriptions and taking high-quality photos that stand out.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 bg-primary-subtle border-0 p-4">
                  <div class="card-body p-0 p-md-2 p-lg-0 p-xl-2">
                    <h3 class="h5">
                      <a class="hover-effect-underline stretched-link" href="help-single-article-v2.php">Pricing your car</a>
                    </h3>
                    <p class="mb-0">Learn strategies for setting a competitive price, including researching market trends and valuing your vehicle.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 bg-primary-subtle border-0 p-4">
                  <div class="card-body p-0 p-md-2 p-lg-0 p-xl-2">
                    <h3 class="h5">
                      <a class="hover-effect-underline stretched-link" href="help-single-article-v2.php">Managing inquiries</a>
                    </h3>
                    <p class="mb-0">Handle buyer inquiries efficiently and professionally to maximize your chances of a quick sale.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 bg-primary-subtle border-0 p-4">
                  <div class="card-body p-0 p-md-2 p-lg-0 p-xl-2">
                    <h3 class="h5">
                      <a class="hover-effect-underline stretched-link" href="help-single-article-v2.php">Finalizing the sale</a>
                    </h3>
                    <p class="mb-0">Navigate the final steps of selling your car, including transferring ownership and handling paperwork.</p>
                  </div>
                </div>
              </div>
            </div>


            <!-- FAQ section -->
            <h2 class="pt-5 pb-sm-1 pb-md-2 mt-2 mt-sm-3 mt-md-4 mt-lg-5">Popular FAQs</h2>

            <!-- Accordion of questions -->
            <div class="accordion" id="faq">

              <!-- Question -->
              <div class="accordion-item">
                <h3 class="accordion-header" id="faqHeading-1">
                  <button type="button" class="accordion-button hover-effect-underline collapsed" data-bs-toggle="collapse" data-bs-target="#faqCollapse-1" aria-expanded="false" aria-controls="faqCollapse-1">
                    <span class="me-2">How do I create my first car listing?</span>
                  </button>
                </h3>
                <div class="accordion-collapse collapse" id="faqCollapse-1" aria-labelledby="faqHeading-1" data-bs-parent="#faq">
                  <div class="accordion-body">To create your first car listing, log in to your account and navigate to the "Create Listing" section. Follow the step-by-step guide to enter your vehicle's details, upload high-quality photos, set a price, and publish your ad. Once submitted, your listing will be reviewed and posted on the platform.</div>
                </div>
              </div>

              <!-- Question -->
              <div class="accordion-item">
                <h3 class="accordion-header" id="faqHeading-2">
                  <button type="button" class="accordion-button hover-effect-underline collapsed" data-bs-toggle="collapse" data-bs-target="#faqCollapse-2" aria-expanded="false" aria-controls="faqCollapse-2">
                    <span class="me-2">How can I edit or update my existing car listing?</span>
                  </button>
                </h3>
                <div class="accordion-collapse collapse" id="faqCollapse-2" aria-labelledby="faqHeading-2" data-bs-parent="#faq">
                  <div class="accordion-body">To edit or update your car listing, go to your account dashboard and click on "My Listings." Select the listing you want to modify, and choose the "Edit" option. From here, you can update the vehicle details, price, photos, and description. Don't forget to save your changes once you're done.</div>
                </div>
              </div>

              <!-- Question -->
              <div class="accordion-item">
                <h3 class="accordion-header" id="faqHeading-3">
                  <button type="button" class="accordion-button hover-effect-underline collapsed" data-bs-toggle="collapse" data-bs-target="#faqCollapse-3" aria-expanded="false" aria-controls="faqCollapse-3">
                    <span class="me-2">What should I do if I forget my account password?</span>
                  </button>
                </h3>
                <div class="accordion-collapse collapse" id="faqCollapse-3" aria-labelledby="faqHeading-3" data-bs-parent="#faq">
                  <div class="accordion-body">If you've forgotten your password, click on the "Forgot Password" link on the login page. Enter the email address associated with your account, and we'll send you instructions on how to reset your password. If you don't receive the email, check your spam folder or contact customer support for assistance.</div>
                </div>
              </div>

              <!-- Question -->
              <div class="accordion-item">
                <h3 class="accordion-header" id="faqHeading-4">
                  <button type="button" class="accordion-button hover-effect-underline collapsed" data-bs-toggle="collapse" data-bs-target="#faqCollapse-4" aria-expanded="false" aria-controls="faqCollapse-4">
                    <span class="me-2">How do I respond to inquiries from potential buyers?</span>
                  </button>
                </h3>
                <div class="accordion-collapse collapse" id="faqCollapse-4" aria-labelledby="faqHeading-4" data-bs-parent="#faq">
                  <div class="accordion-body">When a potential buyer contacts you, you'll receive a notification via email and within your account dashboard. To respond, simply log in, go to "Messages," and select the inquiry. You can reply directly through the platform to keep all communication secure and organized.</div>
                </div>
              </div>

              <!-- Question -->
              <div class="accordion-item">
                <h3 class="accordion-header" id="faqHeading-5">
                  <button type="button" class="accordion-button hover-effect-underline collapsed" data-bs-toggle="collapse" data-bs-target="#faqCollapse-5" aria-expanded="false" aria-controls="faqCollapse-5">
                    <span class="me-2">What fees are associated with selling a car on your platform?</span>
                  </button>
                </h3>
                <div class="accordion-collapse collapse" id="faqCollapse-5" aria-labelledby="faqHeading-5" data-bs-parent="#faq">
                  <div class="accordion-body">Listing a car on our platform is free, but we offer premium features to enhance your ad's visibility for a small fee. Additionally, a final sale fee may apply if your car is successfully sold through our platform. You can view the complete fee structure in the "Pricing" section of our website.</div>
                </div>
              </div>

              <!-- Question -->
              <div class="accordion-item">
                <h3 class="accordion-header" id="faqHeading-6">
                  <button type="button" class="accordion-button hover-effect-underline collapsed" data-bs-toggle="collapse" data-bs-target="#faqCollapse-6" aria-expanded="false" aria-controls="faqCollapse-6">
                    <span class="me-2">How do I deactivate or remove my car listing?</span>
                  </button>
                </h3>
                <div class="accordion-collapse collapse" id="faqCollapse-6" aria-labelledby="faqHeading-6" data-bs-parent="#faq">
                  <div class="accordion-body">If you've sold your car or no longer wish to keep your listing active, you can deactivate or remove it by going to "My Listings" in your account dashboard. Select the listing you want to remove and choose "Deactivate" or "Delete." Deactivated listings can be reactivated later if needed, while deleted listings will be permanently removed.</div>
                </div>
              </div>
            </div>

            <h2 class="fs-base fw-normal text-body lh-base pt-4 mt-3 mb-4">Still have unanswered questions and need to get in touch?</h2>
            <a class="btn btn-lg btn-primary" href="#!">Contact us</a>
          </div>


          <!-- Chat sidebar that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
          <aside class="col-lg-4" style="margin-top: -105px">
            <div class="sticky-lg-top ms-lg-4">
              <div class="d-none d-lg-block" style="height: 105px"></div>
              <div class="position-absolute bottom-0 start-0 w-100 bg-body-tertiary rounded d-none d-lg-block" style="height: calc(100% - 105px)"></div>
              <div class="offcanvas-lg offcanvas-end d-flex flex-column pt-lg-4" id="chatSidebar" style="height: 580px">
                <div class="offcanvas-header border-bottom py-3">
                  <h3 class="h5 offcanvas-title">Chat</h3>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#chatSidebar" aria-label="Close"></button>
                </div>

                <!-- Body -->
                <div class="offcanvas-body position-relative d-flex flex-column gap-4 h-100 overflow-y-auto pt-lg-0 pb-0 px-4">

                  <!-- Message -->
                  <div class="d-flex align-items-start position-relative gap-2 z-1">
                    <div class="d-flex flex-shrink-0 bg-primary rounded-circle p-2 me-1">
                      <i class="fi-zap fs-base text-white"></i>
                    </div>
                    <div class="position-relative w-100 border rounded overflow-hidden py-2 px-3">
                      <div class="position-relative z-1 fs-sm py-1">
                        Hello!<br>
                        I'm your virtual assistant from the Help Center, ready to assist you in finding the information and resources you're looking for.<br>
                        How can I help?
                      </div>
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-body d-none d-lg-block"></span>
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-body-tertiary d-lg-none"></span>
                    </div>
                  </div>
                </div>

                <!-- Footer with message input -->
                <form class="p-4">
                  <div class="position-relative">
                    <textarea class="form-control form-control-lg bg-body" rows="1" placeholder="Ask assistant anything..." required></textarea>
                    <button type="submit" class="btn btn-icon btn-ghost fs-xl btn-secondary border-0 position-absolute top-0 end-0 mt-1 me-1" aria-label="Submit your message">
                      <i class="fi-arrow-right-circle"></i>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </main>


    <!-- Page footer -->
    <?php include('partials/footer3.php') ?>


    <!-- Chat sidebar offcanvas toggle that is visible on screens < 992px wide (lg breakpoint) -->
    <button type="button" class="fixed-bottom z-sticky w-100 btn btn-lg btn-dark border-0 border-top border-light border-opacity-10 rounded-0 pb-4 d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#chatSidebar" aria-controls="chatSidebar" data-bs-theme="light">
      <i class="fi-chat fs-base me-2"></i>
      Chat
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


    <?php include('partials/footer-scripts.php'); ?>
  </body>
</html>
