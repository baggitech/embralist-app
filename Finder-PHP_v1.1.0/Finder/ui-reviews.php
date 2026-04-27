<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <title>Finder Docs | Reviews</title>

    <!-- Theme switcher (color modes) -->
    <script src="assets/js/theme-switcher.js"></script>

    <!-- Webmanifest + Favicon / App icons -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="manifest" href="../manifest.json">
    <link rel="icon" type="image/png" href="assets/app-icons/icon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="assets/app-icons/icon-180x180.png">

    <!-- Preloaded local web font (Inter) -->
    <link rel="preload" href="assets/fonts/inter-variable-latin.woff2" as="font" type="font/woff2" crossorigin>

    <!-- Font icons -->
    <link rel="preload" href="assets/icons/finder-icons.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="assets/icons/finder-icons.min.css">

    <!-- Vendor styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css">
    <link rel="stylesheet" href="assets/vendor/simplebar/dist/simplebar.min.css">

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="assets/css/theme.min.css" as="style">
    <link rel="preload" href="assets/css/theme.rtl.min.css" as="style">
    <link rel="stylesheet" href="assets/css/theme.min.css" id="theme-styles">

    <!-- Customizer -->
    <script src="assets/js/customizer.min.js"></script>

    <!-- Docs specific styles -->
    <style>
      .docs-section {
        scroll-margin-top: 100px;
      }
      @media (min-width: 992px) {
        .docs-sidebar {
          position: sticky;
          top: 7rem;
          height: calc(100vh - 8.5rem);
        }
        .docs-section {
          scroll-margin-top: 118px;
        }
      }
    </style>
  </head>


  <!-- Body -->
  <body data-bs-spy="scroll" data-bs-target="#anchorNav">

    <?php include('partials/customizer.php'); ?>


  <?php include('partials/navbar2.php'); ?>


    <!-- Page container -->
    <div class="container pt-4">
      <div class="row pt-sm-2">

        <!-- Sidebar navigation -->
        <aside class="col-lg-3 pe-xl-4">
          <div class="docs-sidebar" data-filter-list='{"searchClass": "docs-search", "listClass": "docs-list", "valueNames": ["list-group-item"]}'>
            <div id="sidebarNav" class="offcanvas-lg offcanvas-start d-flex flex-column h-100" tabindex="-1" aria-labelledby="sidebarNavLabel">
              <div class="offcanvas-header py-3">
                <h5 class="offcanvas-title" id="sidebarNavLabel">Browse docs</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarNav" aria-label="Close"></button>
              </div>
              <div class="position-relative mx-4 ms-lg-0 mb-4">
                <i class="fi-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                <input type="search" class="docs-search form-control form-icon-start" placeholder="Quick search...">
              </div>
              <div class="offcanvas-body d-block flex-grow-1 overflow-hidden pt-0 pe-0 pb-lg-2">
                <div id="scrollable" class="h-100 overflow-y-auto pe-4">
                  <nav class="docs-list list-group list-group-borderless" onclick="closeSidebar()">
                    <h3 class="h6 d-flex align-items-center pb-1 mb-2">
                      <i class="fi-book fs-lg text-success me-2"></i>
                      Getting started
                    </h3>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-installation.php">
                        Installation
                        <span class="visually-hidden">setup npm prerequisites</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle text-wrap pe-3" href="ui-npm-scripts.php">
                        Npm commands (Scripts)
                        <span class="visually-hidden">dev build styles:compile styles:minify scripts:compile scripts:minify icon-font vendor validate watch dist</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-structure.php">
                        File structure
                        <span class="visually-hidden">project folders</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-configuration.php">
                        Configuration files
                        <span class="visually-hidden">package.json config.js babelrc browserslistrc editorconfig eslintrc gitignore htmlvalidate prettierignore prettierrc stylelintrc webmanifest manifest.json</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle text-wrap pe-3" href="ui-pwa.php">
                        Progressive Web App (PWA)
                        <span class="visually-hidden">service worker manifest</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-web-font.php">
                        Web font(s)
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-icon-font.php">
                        Icon font
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-performance.php">
                        Performance: CLS &amp; Preload
                        <span class="visually-hidden">cumulative layout shift loading aspect-ratio</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-browser-support.php">
                        Browser support
                        <span class="visually-hidden">autoprefixer</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-rtl.php">Right-to-Left (RTL)</a>
                    </div>
                   
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-credits.php">
                        Sources and credits
                        <span class="visually-hidden">resources plugins libraries frameworks assets</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-changelog.php">
                        Changelog
                        <span class="visually-hidden">updates</span>
                      </a>
                    </div>
                    <h3 class="h6 d-flex align-items-center border-top pt-4 pb-1 mt-3 mb-2">
                      <i class="fi-settings fs-lg text-primary me-2"></i>
                      Customize
                    </h3>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-options.php">
                        Global options
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-colors.php">
                        Colors
                        <span class="visually-hidden">grayscale primary secondary info warning success danger dark light</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3 text-wrap" href="color-modes.php">
                        Color modes (Light/Dark)
                        <span class="visually-hidden">themes</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-css-variables.php">
                        CSS variables
                      </a>
                    </div>
                    <h3 class="h6 d-flex align-items-center border-top pt-4 pb-1 mt-3 mb-2">
                      <i class="fi-file-text fs-lg text-secondary me-2"></i>
                      Content
                    </h3>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-typography.php">
                        Typography
                        <span class="visually-hidden">text font heading title paragraph list ordered unordered description blockquote quotation abbreviation</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-icons.php">Icons</a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-code.php">
                        Code
                        <span class="visually-hidden">pre kbd highlight</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-images.php">
                        Images &amp; figures
                        <span class="visually-hidden">thumbnails picture</span>
                      </a>
                    </div>
                    <div class="dropend">
                       <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-tables.php">
                        Tables
                      </a>
                    </div>
                    <h3 class="h6 d-flex align-items-center border-top pt-4 pb-1 mt-3 mb-2">
                      <i class="fi-layers fs-lg text-info me-2"></i>
                      Components
                    </h3>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-accordion.php">
                        Accordion
                        <span class="visually-hidden">collapse</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-alerts.php">
                        Alerts
                        <span class="visually-hidden">notification callout</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-badges.php">
                        Badges
                        <span class="visually-hidden">count indicator</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-blog-components.php">
                        Blog components
                        <span class="visually-hidden">post article</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-breadcrumb.php">
                        Breadcrumb
                        <span class="visually-hidden">navigation links</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-buttons.php">
                        Buttons
                        <span class="visually-hidden">navigation links</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-button-group.php">
                        Button group
                        <span class="visually-hidden">navigation link</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-card.php">
                        Card
                        <span class="visually-hidden">box container</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-carousel.php">
                        Carousel (Slider)
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-categories.php">
                        Categories
                        <span class="visually-hidden">listing directory filter links navigation cards</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-collapse.php">
                        Collapse
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-countdown.php">
                        Countdown
                        <span class="visually-hidden">timer</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-date-picker.php">
                        Date / time picker
                        <span class="visually-hidden">calendar form control input select</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-dropdowns.php">
                        Dropdowns
                        <span class="visually-hidden">navigation menu submenu overlay links dropend dropstart dropup</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-filter-widgets.php">
                        Filter widgets
                        <span class="visually-hidden">sidebar sort</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-forms.php">
                        Forms
                        <span class="visually-hidden">input select textarea checkbox radio range slider picker floating label validation control file switch quantity</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-image-comparison-slider.php">
                        Image comparison slider
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-input-group.php">
                        Input group
                        <span class="visually-hidden">form control select textarea addon</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-input-formatter.php">
                        Input text formatter
                        <span class="visually-hidden">form control mask</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-lightbox.php">
                        Lightbox (Gallery)
                        <span class="visually-hidden">popup modal overlay image picture video youtube vimeo iframe</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-list-group.php">
                        List group
                        <span class="visually-hidden">navigation links menu ordered unordered</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-listing-cards.php">
                        Listing cards
                        <span class="visually-hidden">product service item entry summary</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-map.php">
                        Map
                        <span class="visually-hidden">location directions</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-modal.php">
                        Modal
                        <span class="visually-hidden">dialog popup overlay lightbox</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-nav-links.php">
                        Nav links
                        <span class="visually-hidden">navigation menu links</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-navbar.php">
                        Navbar
                        <span class="visually-hidden">header navigation menu submenu links brand logo</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-offcanvas.php">
                        Offcanvas
                        <span class="visually-hidden">drawer overlay sidebar</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-pagination.php">
                        Pagination
                        <span class="visually-hidden">pager navigation links</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-pills.php">
                        Pills
                        <span class="visually-hidden">navigation links tabs</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-placeholders.php">
                        Placeholders
                        <span class="visually-hidden">loading loader</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-popovers.php">
                        Popovers
                        <span class="visually-hidden">tooltip overlay popup</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-pricing.php">
                        Pricing
                        <span class="visually-hidden">price cost subscription membership payment tier plan package</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-progress.php">
                        Progress
                        <span class="visually-hidden">bars status circular</span>
                      </a>
                    </div>
                    <div class="dropdown">
                      <span class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3 pe-none active">
                        Reviews
                        <span class="visually-hidden">testimonials feedback stars rating</span>
                      </span>
                      <ul id="anchorNav" class="nav nav-underline flex-column border-start ms-2 my-2" style="gap: .25rem;">
                        <li class="nav-item"><a class="nav-link fw-normal" href="#review-1">Review: Variant 1</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#review-1-reply">Review: Variant 1 with reply</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#review-2">Review: Variant 2</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#review-2-reply">Review: Variant 2 with reply</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#review-3">Review: Variant 3</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#review-rating-breakdown">Rating breakdown</a></li>
                      </ul>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-scrollbar.php">
                        Scrollbar
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-scrollspy.php">
                        Scrollspy
                        <span class="visually-hidden">anchor links navigation menu</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-select-box.php">
                        Select box
                        <span class="visually-hidden">tags choices input form multiple control</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-spinners.php">
                        Spinners
                        <span class="visually-hidden">loading loader</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-tabs.php">
                        Tabs
                        <span class="visually-hidden">navigation links underline</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-toasts.php">
                        Toasts
                        <span class="visually-hidden">notification overlay popup alert feedback</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-tooltips.php">
                        Tooltips
                        <span class="visually-hidden">overlay popup popover</span>
                      </a>
                    </div>
                    <h3 class="h6 d-flex align-items-center border-top pt-4 pb-1 mt-3 mb-2">
                      <i class="fi-tool fs-lg text-warning me-2"></i>
                      Utilities &amp; helpers
                    </h3>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-utilities.php">
                        Finder utilities
                        <span class="visually-hidden">border background cursor</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="https://getbootstrap.com/docs/5.3/utilities/background/" target="_blank" rel="noreferrer">
                        Bootstrap utilities
                        <span class="visually-hidden">border background color text font size position weight display opacity flex space spacing align visibility overflow object float shadow</span>
                      </a>
                    </div>
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="https://getbootstrap.com/docs/5.3/helpers/clearfix/" target="_blank" rel="noreferrer">
                        Bootstrap helpers
                        <span class="visually-hidden">position ratio stacks stretched link focus truncation rule</span>
                      </a>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </aside>


        <!-- Page content -->
        <main class="col-lg-9 pt-1 pb-5 mb-sm-2 mb-md-3">

          <!-- Page title -->
          <section class="py-2 pb-sm-3">
            <span class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Finder component</span>
            <h1 class="pt-1">Reviews</h1>
            <p class="text-body-secondary mb-4">Display customer feedback with ratings, enhancing credibility and informing potential buyers.</p>
          </section>


          <!-- Review: Variant 1 -->
          <section id="review-1" class="docs-section pb-sm-2 mb-5">
            <h4>Review: Variant 1</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded opacity-50"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-1" role="tab" aria-controls="preview-1" aria-selected="true">
                      <i class="fi-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-1" role="tab" aria-controls="html-1" aria-selected="false">
                      <i class="fi-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-1" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <div class="border-bottom pb-3">
                      <div class="d-flex align-items-center mb-2">
                        <span class="h6 mb-0">Bessie Cooper</span>
                        <span class="text-body-secondary fs-sm ms-auto">May 19, 2024</span>
                      </div>
                      <div class="d-flex gap-1 fs-sm pb-2 mb-1">
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star-half text-warning"></i>
                      </div>
                      <p class="fs-sm pb-2 mb-1">Mike exhibited great professionalism and politeness. I hired him to replace the door springs, which he did efficiently in a short amount of time. I would wholeheartedly recommend his services to anyone. I'm delighted that everything is now functioning like new again.</p>
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
                  </div>
                  <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#review-1-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="review-1-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Review: Variant 1 --&gt;
&lt;div class=&quot;border-bottom pb-3&quot;&gt;
  &lt;div class=&quot;d-flex align-items-center mb-2&quot;&gt;
    &lt;span class=&quot;h6 mb-0&quot;&gt;Bessie Cooper&lt;/span&gt;
    &lt;span class=&quot;text-body-secondary fs-sm ms-auto&quot;&gt;May 19, 2024&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class=&quot;d-flex gap-1 fs-sm pb-2 mb-1&quot;&gt;
    &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;fi-star-half text-warning&quot;&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;p class=&quot;fs-sm pb-2 mb-1&quot;&gt;Mike exhibited great professionalism and politeness. I hired him to replace the door springs, which he did efficiently in a short amount of time. I would wholeheartedly recommend his services to anyone. I'm delighted that everything is now functioning like new again.&lt;/p&gt;
  &lt;div class=&quot;nav align-items-center&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link text-body-secondary animate-scale px-0 me-n1&quot;&gt;
      &lt;i class=&quot;fi-thumbs-up fs-base animate-target me-1&quot;&gt;&lt;/i&gt;
      6
    &lt;/button&gt;
    &lt;hr class=&quot;vr my-2 mx-3&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link text-body-secondary animate-scale px-0 ms-n1&quot;&gt;
      &lt;i class=&quot;fi-thumbs-down fs-base animate-target me-1&quot;&gt;&lt;/i&gt;
      0
    &lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Review: Variant 1 with reply -->
          <section id="review-1-reply" class="docs-section pb-sm-2 mb-5">
            <h4>Review: Variant 1 with reply</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded opacity-50"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-2" role="tab" aria-controls="preview-2" aria-selected="true">
                      <i class="fi-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-2" role="tab" aria-controls="html-2" aria-selected="false">
                      <i class="fi-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-2" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <div class="border-bottom pb-3">
                      <div class="d-flex align-items-center mb-2">
                        <span class="h6 mb-0">Andrew Richards</span>
                        <span class="text-body-secondary fs-sm ms-auto">June 7, 2024</span>
                      </div>
                      <div class="d-flex gap-1 fs-sm pb-2 mb-1">
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star-filled text-warning"></i>
                        <i class="fi-star-filled text-warning"></i>
                      </div>
                      <p class="fs-sm pb-2 mb-1">From start to finish, his cooperation was incredibly smooth. The pricing was quite reasonable, and the task was completed efficiently and with a high level of cleanliness. I'm delighted that we chose Mike over the other companies we considered based on quotes.</p>
                      <div class="nav align-items-center">
                        <button type="button" class="nav-link text-body-secondary animate-scale px-0 me-n1">
                          <i class="fi-thumbs-up fs-base animate-target me-1"></i>
                          29
                        </button>
                        <hr class="vr my-2 mx-3">
                        <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                          <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                          5
                        </button>
                      </div>
                      <div class="ps-3 pb-2">
                        <div class="d-flex align-items-center pt-3 pb-2 mb-1">
                          <span class="badge bg-body-secondary text-body-emphasis me-2">Reply</span>
                          <span class="h6 mb-0 me-4">Mike Gardner</span>
                          <span class="text-body-secondary fs-sm">June 8, 2024</span>
                        </div>
                        <p class="fs-sm mb-0">Thank you for your feedback! I'm glad that you are satisfied with my services :)</p>
                      </div>
                    </div>
                  </div>
                  <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#review-1-reply-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="review-1-reply-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Review: Variant 1 with reply --&gt;
&lt;div class=&quot;border-bottom py-3&quot;&gt;
  &lt;div class=&quot;d-flex align-items-center mb-2&quot;&gt;
    &lt;span class=&quot;h6 mb-0&quot;&gt;Andrew Richards&lt;/span&gt;
    &lt;span class=&quot;text-body-secondary fs-sm ms-auto&quot;&gt;June 7, 2024&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class=&quot;d-flex gap-1 fs-sm pb-2 mb-1&quot;&gt;
    &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;p class=&quot;fs-sm pb-2 mb-1&quot;&gt;From start to finish, his cooperation was incredibly smooth. The pricing was quite reasonable, and the task was completed efficiently and with a high level of cleanliness. I'm delighted that we chose Mike over the other companies we considered based on quotes.&lt;/p&gt;
  &lt;div class=&quot;nav align-items-center&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link text-body-secondary animate-scale px-0 me-n1&quot;&gt;
      &lt;i class=&quot;fi-thumbs-up fs-base animate-target me-1&quot;&gt;&lt;/i&gt;
      29
    &lt;/button&gt;
    &lt;hr class=&quot;vr my-2 mx-3&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link text-body-secondary animate-scale px-0 ms-n1&quot;&gt;
      &lt;i class=&quot;fi-thumbs-down fs-base animate-target me-1&quot;&gt;&lt;/i&gt;
      5
    &lt;/button&gt;
  &lt;/div&gt;

  &lt;!-- Reply --&gt;
  &lt;div class=&quot;ps-3 pb-2&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center pt-3 pb-2 mb-1&quot;&gt;
      &lt;span class=&quot;badge bg-body-secondary text-body-emphasis me-2&quot;&gt;Reply&lt;/span&gt;
      &lt;span class=&quot;h6 mb-0 me-4&quot;&gt;Mike Gardner&lt;/span&gt;
      &lt;span class=&quot;text-body-secondary fs-sm&quot;&gt;June 8, 2024&lt;/span&gt;
    &lt;/div&gt;
    &lt;p class=&quot;fs-sm mb-0&quot;&gt;Thank you for your feedback! I'm glad that you are satisfied with my services :)&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Review: Variant 2 -->
          <section id="review-2" class="docs-section pb-sm-2 mb-5">
            <h4>Review: Variant 2</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded opacity-50"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-3" role="tab" aria-controls="preview-3" aria-selected="true">
                      <i class="fi-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-3" role="tab" aria-controls="html-3" aria-selected="false">
                      <i class="fi-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-3" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <div class="border-bottom pb-4">
                      <div class="d-sm-flex align-items-center mb-3">
                        <div class="d-flex align-items-center pe-3">
                          <div class="ratio ratio-1x1 flex-shrink-0 bg-body-secondary rounded-circle overflow-hidden" style="width: 48px">
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
                      <p class="fs-sm mb-2">Review on:<a class="hover-effect-underline fw-medium text-dark-emphasis text-decoration-none ms-2" href="#!">1234 Maple Street, Brooklyn, NY 11201</a></p>
                      <p class="fs-sm">I recently rented an apartment and had a positive experience overall. The location is convenient, and the building amenities are great. The apartment itself is spacious and well-maintained. However, there were a few minor issues with the plumbing that took a little longer to fix than expected. Despite that, I'm happy with my decision and would recommend it to others.</p>
                      <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">
                          <i class="fi-corner-up-left fs-sm ms-n1 me-2"></i>
                          Reply
                        </button>
                        <div class="nav">
                          <a class="nav-link position-relative fs-xs py-1 px-0" href="#!">
                            <i class="fi-info fs-sm me-1"></i>
                            <span class="hover-effect-underline stretched-link">Report</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#review-2-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="review-2-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Review: Variant 2 --&gt;
&lt;div class=&quot;border-bottom py-4&quot;&gt;
  &lt;div class=&quot;d-sm-flex align-items-center mt-2 mb-3&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center pe-3&quot;&gt;
      &lt;div class=&quot;ratio ratio-1x1 flex-shrink-0 bg-body-secondary rounded-circle overflow-hidden&quot; style=&quot;width: 48px&quot;&gt;
        &lt;img src=&quot;assets/img/account/reviews/ava04.jpg&quot; alt=&quot;Avatar&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;ps-3&quot;&gt;
        &lt;h6 class=&quot;mb-1&quot;&gt;Ralph Edwards&lt;/h6&gt;
        &lt;div class=&quot;fs-xs text-body-secondary&quot;&gt;Jul 4, 2024&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;d-flex gap-1 fs-sm pt-2 pt-sm-0 ps-5 ps-sm-0 ms-3 ms-sm-auto&quot;&gt;
      &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
      &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
      &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
      &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
      &lt;i class=&quot;fi-star text-warning&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;p class=&quot;fs-sm mb-2&quot;&gt;Review on:&lt;a class=&quot;hover-effect-underline fw-medium text-dark-emphasis text-decoration-none ms-2&quot; href=&quot;#!&quot;&gt;1234 Maple Street, Brooklyn, NY 11201&lt;/a&gt;&lt;/p&gt;
  &lt;p class=&quot;fs-sm&quot;&gt;I recently rented an apartment and had a positive experience overall. The location is convenient, and the building amenities are great. The apartment itself is spacious and well-maintained. However, there were a few minor issues with the plumbing that took a little longer to fix than expected. Despite that, I'm happy with my decision and would recommend it to others.&lt;/p&gt;
  &lt;div class=&quot;d-flex align-items-center justify-content-between mb-2&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-outline-secondary&quot;&gt;
      &lt;i class=&quot;fi-corner-up-left fs-sm ms-n1 me-2&quot;&gt;&lt;/i&gt;
      Reply
    &lt;/button&gt;
    &lt;div class=&quot;nav&quot;&gt;
      &lt;a class=&quot;nav-link position-relative fs-xs py-1 px-0&quot; href=&quot;#!&quot;&gt;
        &lt;i class=&quot;fi-info fs-sm me-1&quot;&gt;&lt;/i&gt;
        &lt;span class=&quot;hover-effect-underline stretched-link&quot;&gt;Report&lt;/span&gt;
      &lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Review: Variant 2 with reply -->
          <section id="review-2-reply" class="docs-section pb-sm-2 mb-5">
            <h4>Review: Variant 2 with reply</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded opacity-50"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-4" role="tab" aria-controls="preview-4" aria-selected="true">
                      <i class="fi-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-4" role="tab" aria-controls="html-4" aria-selected="false">
                      <i class="fi-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-4" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <div class="border-bottom pb-4">
                      <div class="d-sm-flex align-items-center mb-3">
                        <div class="d-flex align-items-center pe-3">
                          <div class="ratio ratio-1x1 flex-shrink-0 bg-body-secondary rounded-circle overflow-hidden" style="width: 48px">
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
                      <p class="fs-sm mb-2">Review on:<a class="hover-effect-underline fw-medium text-dark-emphasis text-decoration-none ms-2" href="#!">67-04 Myrtle Ave Glendale, NY 11385</a></p>
                      <p class="fs-sm mb-0">Excellent apartment in the very center of the city, attractions and entertainment venues are located 50m from the flat. The flat was perfectly clean and had basic slippers, gel-shampoo, clean towels.</p>
                      <div class="bg-body-tertiary rounded p-4 mt-4 mb-2">
                        <div class="d-flex align-items-center mb-3">
                          <div class="ratio ratio-1x1 flex-shrink-0 bg-body-secondary rounded-circle overflow-hidden" style="width: 38px">
                            <img src="assets/img/account/avatar-sm.jpg" alt="Avatar">
                          </div>
                          <div class="ps-3">
                            <h6 class="mb-1">Michael Williams</h6>
                            <div class="fs-xs text-body-secondary">Nov 13, 2024</div>
                          </div>
                        </div>
                        <p class="fs-sm mb-0">Thank you for your feedback. I'm glad you were satisfied :)</p>
                      </div>
                    </div>
                  </div>
                  <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#review-2-reply-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="review-2-reply-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Review: Variant 2 with reply --&gt;
&lt;div class=&quot;border-bottom py-4&quot;&gt;
  &lt;div class=&quot;d-sm-flex align-items-center mt-2 mb-3&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center pe-3&quot;&gt;
      &lt;div class=&quot;ratio ratio-1x1 flex-shrink-0 bg-body-secondary rounded-circle overflow-hidden&quot; style=&quot;width: 48px&quot;&gt;
        &lt;img src=&quot;assets/img/account/reviews/ava01.jpg&quot; alt=&quot;Avatar&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;ps-3&quot;&gt;
        &lt;h6 class=&quot;mb-1&quot;&gt;Randy Walker&lt;/h6&gt;
        &lt;div class=&quot;fs-xs text-body-secondary&quot;&gt;Nov 12, 2024&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;d-flex gap-1 fs-sm pt-2 pt-sm-0 ps-5 ps-sm-0 ms-3 ms-sm-auto&quot;&gt;
      &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
      &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
      &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
      &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
      &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;p class=&quot;fs-sm mb-2&quot;&gt;Review on:&lt;a class=&quot;hover-effect-underline fw-medium text-dark-emphasis text-decoration-none ms-2&quot; href=&quot;#!&quot;&gt;67-04 Myrtle Ave Glendale, NY 11385&lt;/a&gt;&lt;/p&gt;
  &lt;p class=&quot;fs-sm mb-0&quot;&gt;Excellent apartment in the very center of the city, attractions and entertainment venues are located 50m from the flat. The flat was perfectly clean and had basic slippers, gel-shampoo, clean towels.&lt;/p&gt;
  &lt;div class=&quot;bg-body-tertiary rounded p-4 mt-4 mb-2&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center mb-3&quot;&gt;
      &lt;div class=&quot;ratio ratio-1x1 flex-shrink-0 bg-body-secondary rounded-circle overflow-hidden&quot; style=&quot;width: 38px&quot;&gt;
        &lt;img src=&quot;assets/img/account/avatar-sm.jpg&quot; alt=&quot;Avatar&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;ps-3&quot;&gt;
        &lt;h6 class=&quot;mb-1&quot;&gt;Michael Williams&lt;/h6&gt;
        &lt;div class=&quot;fs-xs text-body-secondary&quot;&gt;Nov 13, 2024&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;p class=&quot;fs-sm mb-0&quot;&gt;Thank you for your feedback. I'm glad you were satisfied :)&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Review: Variant 3 -->
          <section id="review-3" class="docs-section pb-sm-2 mb-5">
            <h4>Review: Variant 3</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded opacity-50"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-5" role="tab" aria-controls="preview-5" aria-selected="true">
                      <i class="fi-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-5" role="tab" aria-controls="html-5" aria-selected="false">
                      <i class="fi-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-5" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <div class="border-bottom pb-4">
                      <div class="d-flex align-items-start align-items-sm-center mb-3">
                        <div class="ratio ratio-1x1" style="max-width: 112px">
                          <img src="assets/img/account/reviews/01.jpg" class="bg-body-tertiary rounded" alt="Image">
                        </div>
                        <div class="d-flex align-items-start justify-content-between w-100">
                          <div class="ps-3 pe-2 pe-sm-3">
                            <span class="badge text-info bg-info-subtle mb-2">Published</span>
                            <div class="d-flex gap-1 fs-sm py-sm-1 mb-2">
                              <i class="fi-star-filled text-warning"></i>
                              <i class="fi-star-filled text-warning"></i>
                              <i class="fi-star-filled text-warning"></i>
                              <i class="fi-star-filled text-warning"></i>
                              <i class="fi-star-half text-warning"></i>
                            </div>
                            <p class="fs-sm mb-2 mb-sm-0">Review on:<a class="hover-effect-underline fw-medium text-dark-emphasis text-decoration-none ms-2" href="#!">67-04 Myrtle Ave Glendale, NY 11385</a></p>
                            <div class="fs-xs text-body-secondary d-sm-none">Jan 17, 2024</div>
                          </div>
                          <div class="text-end ms-n5 ms-sm-0">
                            <div class="dropdown mb-sm-4">
                              <button type="button" class="btn btn-icon btn-outline-secondary" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Actions">
                                <i class="fi-more-vertical fs-lg"></i>
                              </button>
                              <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                  <a class="dropdown-item" href="#!">
                                    <i class="fi-edit opacity-75 me-2"></i>
                                    Edit
                                  </a>
                                </li>
                                <li>
                                  <a class="dropdown-item" href="#!">
                                    <i class="fi-archive opacity-75 me-2"></i>
                                    Move to archive
                                  </a>
                                </li>
                                <li>
                                  <a class="dropdown-item text-danger" href="#!">
                                    <i class="fi-trash opacity-75 me-2"></i>
                                    Delete
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <div class="fs-xs text-body-secondary d-none d-sm-block">Jan 17, 2024</div>
                          </div>
                        </div>
                      </div>
                      <p class="fs-sm">Excellent apartment in the very center of the city, attractions and entertainment venues are located 50m from the flat. The flat was perfectly clean and had basic slippers, gel-shampoo, clean towels.</p>
                      <div class="d-flex align-items-center fs-sm fw-medium text-body-secondary">
                        <div class="d-flex align-items-center me-n1">
                          <i class="fi-thumbs-up fs-base me-1"></i>
                          6
                        </div>
                        <hr class="vr my-2 mx-3">
                        <div class="d-flex align-items-center ms-n1">
                          <i class="fi-thumbs-down fs-base animate-target me-1"></i>
                          0
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#review-3-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="review-3-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Review: Variant 3 --&gt;
&lt;div class=&quot;border-bottom py-4&quot;&gt;
  &lt;div class=&quot;d-flex align-items-start align-items-sm-center mt-2 mb-3&quot;&gt;
    &lt;div class=&quot;ratio ratio-1x1&quot; style=&quot;max-width: 112px&quot;&gt;
      &lt;img src=&quot;assets/img/account/reviews/01.jpg&quot; class=&quot;bg-body-tertiary rounded&quot; alt=&quot;Image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;d-flex align-items-start justify-content-between w-100&quot;&gt;
      &lt;div class=&quot;ps-3 pe-2 pe-sm-3&quot;&gt;
        &lt;span class=&quot;badge text-info bg-info-subtle mb-2&quot;&gt;Published&lt;/span&gt;
        &lt;div class=&quot;d-flex gap-1 fs-sm py-sm-1 mb-2&quot;&gt;
          &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
          &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
          &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
          &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
          &lt;i class=&quot;fi-star-half text-warning&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;p class=&quot;fs-sm mb-2 mb-sm-0&quot;&gt;Review on:&lt;a class=&quot;hover-effect-underline fw-medium text-dark-emphasis text-decoration-none ms-2&quot; href=&quot;#!&quot;&gt;67-04 Myrtle Ave Glendale, NY 11385&lt;/a&gt;&lt;/p&gt;
        &lt;div class=&quot;fs-xs text-body-secondary d-sm-none&quot;&gt;Jan 17, 2024&lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;text-end ms-n5 ms-sm-0&quot;&gt;

        &lt;!-- Review administration dropdown --&gt;
        &lt;div class=&quot;dropdown mb-sm-4&quot;&gt;
          &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-outline-secondary&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Actions&quot;&gt;
            &lt;i class=&quot;fi-more-vertical fs-lg&quot;&gt;&lt;/i&gt;
          &lt;/button&gt;
          &lt;ul class=&quot;dropdown-menu dropdown-menu-end&quot;&gt;
            &lt;li&gt;
              &lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;
                &lt;i class=&quot;fi-edit opacity-75 me-2&quot;&gt;&lt;/i&gt;
                Edit
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
              &lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;
                &lt;i class=&quot;fi-archive opacity-75 me-2&quot;&gt;&lt;/i&gt;
                Move to archive
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;
              &lt;a class=&quot;dropdown-item text-danger&quot; href=&quot;#!&quot;&gt;
                &lt;i class=&quot;fi-trash opacity-75 me-2&quot;&gt;&lt;/i&gt;
                Delete
              &lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
        &lt;/div&gt;

        &lt;div class=&quot;fs-xs text-body-secondary d-none d-sm-block&quot;&gt;Jan 17, 2024&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;p class=&quot;fs-sm&quot;&gt;Excellent apartment in the very center of the city, attractions and entertainment venues are located 50m from the flat. The flat was perfectly clean and had basic slippers, gel-shampoo, clean towels.&lt;/p&gt;
  &lt;div class=&quot;d-flex align-items-center fs-sm fw-medium text-body-secondary&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center me-n1&quot;&gt;
      &lt;i class=&quot;fi-thumbs-up fs-base me-1&quot;&gt;&lt;/i&gt;
      6
    &lt;/div&gt;
    &lt;hr class=&quot;vr my-2 mx-3&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center ms-n1&quot;&gt;
      &lt;i class=&quot;fi-thumbs-down fs-base animate-target me-1&quot;&gt;&lt;/i&gt;
      0
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Rating breakdown -->
          <section id="review-rating-breakdown" class="docs-section">
            <h4>Rating breakdown</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded opacity-50"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-6" role="tab" aria-controls="preview-6" aria-selected="true">
                      <i class="fi-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-6" role="tab" aria-controls="html-6" aria-selected="false">
                      <i class="fi-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-6" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <div class="row g-4">
                      <div class="col-sm-5 col-md-3">
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 bg-body-tertiary rounded p-4">
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
                      <div class="col-sm-7 col-md-9">
                        <div class="vstack gap-3">
                          <div class="hstack gap-2">
                            <div class="hstack fs-sm gap-1">
                              5<i class="fi-star-filled text-warning"></i>
                            </div>
                            <div class="progress w-100" role="progressbar" aria-label="Five stars" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                              <div class="progress-bar bg-warning rounded-pill" style="width: 58%"></div>
                            </div>
                            <div class="fs-sm text-nowrap text-end" style="width: 40px;">44</div>
                          </div>
                          <div class="hstack gap-2">
                            <div class="hstack fs-sm gap-1">
                              4<i class="fi-star-filled text-warning"></i>
                            </div>
                            <div class="progress w-100" role="progressbar" aria-label="Four stars" aria-valuenow="22.4" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                              <div class="progress-bar bg-warning rounded-pill" style="width: 22.4%"></div>
                            </div>
                            <div class="fs-sm text-nowrap text-end" style="width: 40px;">17</div>
                          </div>
                          <div class="hstack gap-2">
                            <div class="hstack fs-sm gap-1">
                              3<i class="fi-star-filled text-warning"></i>
                            </div>
                            <div class="progress w-100" role="progressbar" aria-label="Three stars" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                              <div class="progress-bar bg-warning rounded-pill" style="width: 12%"></div>
                            </div>
                            <div class="fs-sm text-nowrap text-end" style="width: 40px;">9</div>
                          </div>
                          <div class="hstack gap-2">
                            <div class="hstack fs-sm gap-1">
                              2<i class="fi-star-filled text-warning"></i>
                            </div>
                            <div class="progress w-100" role="progressbar" aria-label="Two stars" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                              <div class="progress-bar bg-warning rounded-pill" style="width: 5%"></div>
                            </div>
                            <div class="fs-sm text-nowrap text-end" style="width: 40px;">4</div>
                          </div>
                          <div class="hstack gap-2">
                            <div class="hstack fs-sm gap-1">
                              1<i class="fi-star-filled text-warning"></i>
                            </div>
                            <div class="progress w-100" role="progressbar" aria-label="One star" aria-valuenow="2.6" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                              <div class="progress-bar bg-warning rounded-pill" style="width: 2.6%"></div>
                            </div>
                            <div class="fs-sm text-nowrap text-end" style="width: 40px;">2</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="html-6" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#review-rating-breakdown-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="review-rating-breakdown-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;div class=&quot;row g-4&quot;&gt;
  &lt;div class=&quot;col-sm-5 col-md-3&quot;&gt;

    &lt;!-- Overall rating card --&gt;
    &lt;div class=&quot;d-flex flex-column align-items-center justify-content-center h-100 bg-body-tertiary rounded p-4&quot;&gt;
      &lt;div class=&quot;h1 pb-2 mb-1&quot;&gt;4.5&lt;/div&gt;
      &lt;div class=&quot;hstack justify-content-center gap-1 fs-sm mb-2&quot;&gt;
        &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;i class=&quot;fi-star-half text-warning&quot;&gt;&lt;/i&gt;
      &lt;/div&gt;
      &lt;div class=&quot;fs-sm&quot;&gt;76 reviews&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-7 col-md-9&quot;&gt;

    &lt;!-- Rating breakdown by quantity --&gt;
    &lt;div class=&quot;vstack gap-3&quot;&gt;

      &lt;!-- 5 stars --&gt;
      &lt;div class=&quot;hstack gap-2&quot;&gt;
        &lt;div class=&quot;hstack fs-sm gap-1&quot;&gt;
          5&lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;div class=&quot;progress w-100&quot; role=&quot;progressbar&quot; aria-label=&quot;Five stars&quot; aria-valuenow=&quot;58&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;height: 4px&quot;&gt;
          &lt;div class=&quot;progress-bar bg-warning rounded-pill&quot; style=&quot;width: 58%&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;fs-sm text-nowrap text-end&quot; style=&quot;width: 40px;&quot;&gt;44&lt;/div&gt;
      &lt;/div&gt;

      &lt;!-- 4 stars --&gt;
      &lt;div class=&quot;hstack gap-2&quot;&gt;
        &lt;div class=&quot;hstack fs-sm gap-1&quot;&gt;
          4&lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;div class=&quot;progress w-100&quot; role=&quot;progressbar&quot; aria-label=&quot;Four stars&quot; aria-valuenow=&quot;22.4&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;height: 4px&quot;&gt;
          &lt;div class=&quot;progress-bar bg-warning rounded-pill&quot; style=&quot;width: 22.4%&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;fs-sm text-nowrap text-end&quot; style=&quot;width: 40px;&quot;&gt;17&lt;/div&gt;
      &lt;/div&gt;

      &lt;!-- 3 stars --&gt;
      &lt;div class=&quot;hstack gap-2&quot;&gt;
        &lt;div class=&quot;hstack fs-sm gap-1&quot;&gt;
          3&lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;div class=&quot;progress w-100&quot; role=&quot;progressbar&quot; aria-label=&quot;Three stars&quot; aria-valuenow=&quot;12&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;height: 4px&quot;&gt;
          &lt;div class=&quot;progress-bar bg-warning rounded-pill&quot; style=&quot;width: 12%&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;fs-sm text-nowrap text-end&quot; style=&quot;width: 40px;&quot;&gt;9&lt;/div&gt;
      &lt;/div&gt;

      &lt;!-- 2 stars --&gt;
      &lt;div class=&quot;hstack gap-2&quot;&gt;
        &lt;div class=&quot;hstack fs-sm gap-1&quot;&gt;
          2&lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;div class=&quot;progress w-100&quot; role=&quot;progressbar&quot; aria-label=&quot;Two stars&quot; aria-valuenow=&quot;5&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;height: 4px&quot;&gt;
          &lt;div class=&quot;progress-bar bg-warning rounded-pill&quot; style=&quot;width: 5%&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;fs-sm text-nowrap text-end&quot; style=&quot;width: 40px;&quot;&gt;4&lt;/div&gt;
      &lt;/div&gt;

      &lt;!-- 1 star --&gt;
      &lt;div class=&quot;hstack gap-2&quot;&gt;
        &lt;div class=&quot;hstack fs-sm gap-1&quot;&gt;
          1&lt;i class=&quot;fi-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;div class=&quot;progress w-100&quot; role=&quot;progressbar&quot; aria-label=&quot;One star&quot; aria-valuenow=&quot;2.6&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;height: 4px&quot;&gt;
          &lt;div class=&quot;progress-bar bg-warning rounded-pill&quot; style=&quot;width: 2.6%&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;fs-sm text-nowrap text-end&quot; style=&quot;width: 40px;&quot;&gt;2&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </main>
      </div>
    </div>


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
      <a class="btn btn-sm btn-outline-secondary text-uppercase bg-body rounded-pill shadow animate-rotate ms-2 me-n5" href="#customizer" style="font-size: .625rem; letter-spacing: .05rem;" data-bs-toggle="offcanvas" role="button" aria-controls="customizer">
        Customize<i class="fi-settings fs-base ms-1 me-n2 animate-target"></i>
      </a>
    </div>


    <!-- Vendor scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script src="assets/vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="assets/vendor/list.js/dist/list.min.js"></script>

    <!-- Bootstrap + Theme scripts -->
    <script src="assets/js/theme.min.js"></script>

    <!-- Docs specific scripts -->
    <script>
      const sidebar = new bootstrap.Offcanvas('#sidebarNav')
      const closeSidebar = () => {
        setTimeout(() => {
          sidebar.hide()
        }, 500)
      }
      (() => {
        const scrollable = document.getElementById('scrollable')
        const simplebar = new SimpleBar(scrollable)
        const anchor = scrollable.querySelector('.list-group-item.active')
        if (anchor === null) return
        simplebar.getScrollElement().scrollTo({
          top: anchor.parentNode.offsetTop,
          behavior: 'instant'
        })
      })()
    </script>
  </body>
</html>
