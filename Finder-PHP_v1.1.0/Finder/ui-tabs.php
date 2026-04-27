<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <title>Finder Docs | Tabs</title>

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
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-reviews.php">
                        Reviews
                        <span class="visually-hidden">testimonials feedback stars rating</span>
                      </a>
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
                    <div class="dropdown">
                      <span class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3 pe-none active">
                        Tabs
                        <span class="visually-hidden">navigation links underline</span>
                      </span>
                      <ul id="anchorNav" class="nav nav-underline flex-column border-start ms-2 my-2" style="gap: .25rem;">
                        <li class="nav-item"><a class="nav-link fw-normal" href="#tabs-button">Button-like style</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#tabs-underline">Underline style</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#tabs-vertical">Vertical alignment</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#tabs-icons">With icons and dropdowns</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#tabs-shapes">Shapes</a></li>
                      </ul>
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
            <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill" href="https://getbootstrap.com/docs/5.3/components/navs-tabs/#tabs" target="_blank" rel="noreferrer">
              Bootstrap docs
              <i class="fi-external-link fs-sm ms-1"></i>
            </a>
            <h1 class="pt-1">Tabs</h1>
            <p class="text-body-secondary mb-4">Horizontally or vertically stacked list of items. When clicked each item switch content in the tab pane.</p>
          </section>


          <!-- Button-like style -->
          <section id="tabs-button" class="docs-section pb-sm-2 mb-5">
            <h4>Button-like style</h4>
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
                    <ul class="nav nav-tabs mb-3" role="tablist" style="max-width: 450px">
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab">
                        This is some placeholder content the <strong>Home tab's</strong> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav-</code>powered navigation.
                      </div>
                      <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab">
                        This is some placeholder content the <strong>Profile tab's</strong> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav-</code>powered navigation.
                      </div>
                      <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab">
                        This is some placeholder content the <strong>Contact tab's</strong> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav-</code>powered navigation.
                      </div>
                      <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab">
                        This is some placeholder content the Disabled tab's associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav-</code>powered navigation.
                      </div>
                    </div>
                  </div>
                  <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#tabs-button-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="tabs-button-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Nav tabs --&gt;
&lt;ul class=&quot;nav nav-tabs mb-3&quot; role=&quot;tablist&quot; style=&quot;max-width: 450px&quot;&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link active&quot; id=&quot;home-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#home-tab-pane&quot; role=&quot;tab&quot; aria-controls=&quot;home-tab-pane&quot; aria-selected=&quot;true&quot;&gt;
      Home
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; id=&quot;profile-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#profile-tab-pane&quot; role=&quot;tab&quot; aria-controls=&quot;profile-tab-pane&quot; aria-selected=&quot;false&quot;&gt;
      Profile
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; id=&quot;contact-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#contact-tab-pane&quot; role=&quot;tab&quot; aria-controls=&quot;contact-tab-pane&quot; aria-selected=&quot;false&quot;&gt;
      Contact
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; id=&quot;disabled-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#disabled-tab-pane&quot; role=&quot;tab&quot; aria-controls=&quot;disabled-tab-pane&quot; aria-selected=&quot;false&quot; disabled&gt;
      Disabled
    &lt;/button&gt;
  &lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Tab panes --&gt;
&lt;div class=&quot;tab-content&quot;&gt;
  &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;home-tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;home-tab&quot;&gt;...&lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;profile-tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;profile-tab&quot;&gt;...&lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;contact-tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;contact-tab&quot;&gt;...&lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;disabled-tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;disabled-tab&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Underline style -->
          <section id="tabs-underline" class="docs-section pb-sm-2 mb-5">
            <h4>Underline style</h4>
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
                    <ul class="nav nav-underline mb-3" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" id="home-tab1" data-bs-toggle="tab" data-bs-target="#home-tab-pane1" role="tab" aria-controls="home-tab-pane1" aria-selected="true">Home</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" id="profile-tab1" data-bs-toggle="tab" data-bs-target="#profile-tab-pane1" role="tab" aria-controls="profile-tab-pane1" aria-selected="false">Profile</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" id="contact-tab1" data-bs-toggle="tab" data-bs-target="#contact-tab-pane1" role="tab" aria-controls="contact-tab-pane1" aria-selected="false">Contact</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" id="disabled-tab1" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane1" role="tab" aria-controls="disabled-tab-pane1" aria-selected="false" disabled>Disabled</button>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="home-tab-pane1" role="tabpanel" aria-labelledby="home-tab1">
                        This is some placeholder content the <strong>Home tab's</strong> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav-</code>powered navigation.
                      </div>
                      <div class="tab-pane fade" id="profile-tab-pane1" role="tabpanel" aria-labelledby="profile-tab1">
                        This is some placeholder content the <strong>Profile tab's</strong> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav-</code>powered navigation.
                      </div>
                      <div class="tab-pane fade" id="contact-tab-pane1" role="tabpanel" aria-labelledby="contact-tab1">
                        This is some placeholder content the <strong>Contact tab's</strong> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav-</code>powered navigation.
                      </div>
                      <div class="tab-pane fade" id="disabled-tab-pane1" role="tabpanel" aria-labelledby="disabled-tab1">
                        This is some placeholder content the Disabled tab's associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav-</code>powered navigation.
                      </div>
                    </div>
                  </div>
                  <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#tabs-underline-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="tabs-underline-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Nav tabs (underline) --&gt;
&lt;ul class=&quot;nav nav-underline mb-3&quot; role=&quot;tablist&quot;&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link active&quot; id=&quot;home-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#home-tab-pane&quot; role=&quot;tab&quot; aria-controls=&quot;home-tab-pane&quot; aria-selected=&quot;true&quot;&gt;
      Home
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; id=&quot;profile-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#profile-tab-pane&quot; role=&quot;tab&quot; aria-controls=&quot;profile-tab-pane&quot; aria-selected=&quot;false&quot;&gt;
      Profile
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; id=&quot;contact-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#contact-tab-pane&quot; role=&quot;tab&quot; aria-controls=&quot;contact-tab-pane&quot; aria-selected=&quot;false&quot;&gt;
      Contact
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; id=&quot;disabled-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#disabled-tab-pane&quot; role=&quot;tab&quot; aria-controls=&quot;disabled-tab-pane&quot; aria-selected=&quot;false&quot; disabled&gt;
      Disabled
    &lt;/button&gt;
  &lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Tab panes --&gt;
&lt;div class=&quot;tab-content&quot;&gt;
  &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;home-tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;home-tab&quot;&gt;...&lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;profile-tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;profile-tab&quot;&gt;...&lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;contact-tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;contact-tab&quot;&gt;...&lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;disabled-tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;disabled-tab&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Vertical alignment -->
          <section id="tabs-vertical" class="docs-section pb-sm-2 mb-5">
            <h4>Vertical alignment</h4>
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
                    <div class="hstack gap-5">
                      <ul class="nav nav-tabs flex-column" role="tablist" style="width: 150px">
                        <li class="nav-item" role="presentation">
                          <button type="button" class="nav-link active" data-bs-toggle="tab" role="tab" aria-selected="true">
                            Home
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false">
                            Profile
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false">
                            Contact
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false" disabled>
                            Disabled
                          </button>
                        </li>
                      </ul>
                      <ul class="nav nav-underline flex-column" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button type="button" class="nav-link active" data-bs-toggle="tab" role="tab" aria-selected="true">
                            Home
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false">
                            Profile
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false">
                            Contact
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false" disabled>
                            Disabled
                          </button>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#tabs-vertical-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="tabs-vertical-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Vertical button-like tabs --&gt;
&lt;ul class=&quot;nav nav-tabs flex-column&quot; role=&quot;tablist&quot; style=&quot;width: 150px&quot;&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;true&quot;&gt;
      Home
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      Profile
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      Contact
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot; disabled&gt;
      Disabled
    &lt;/button&gt;
  &lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Vertical underline tabs --&gt;
&lt;ul class=&quot;nav nav-underline flex-column&quot; role=&quot;tablist&quot;&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;true&quot;&gt;
      Home
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      Profile
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      Contact
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot; disabled&gt;
      Disabled
    &lt;/button&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- With icons and dropdowns -->
          <section id="tabs-icons" class="docs-section pb-sm-2 mb-5">
            <h4>With icons and dropdowns</h4>
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
                    <div class="vstack gap-4" style="max-width: 420px">
                      <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active" href="#!" data-bs-toggle="tab" role="tab" aria-selected="true">
                            <i class="fi-home me-2 ms-n1"></i>
                            Home
                          </a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" href="#!" data-bs-toggle="tab" role="tab" aria-selected="false">
                            <i class="fi-user me-2 ms-n1"></i>
                            Profile
                          </a>
                        </li>
                        <li class="nav-item dropdown" role="presentation">
                          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                            Dropdown
                          </a>
                          <ul class="dropdown-menu">
                            <li>
                              <a class="dropdown-item" href="#!" data-bs-toggle="tab" role="tab" aria-selected="false">
                                First tab link
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#!" data-bs-toggle="tab" role="tab" aria-selected="false">
                                Second tab link
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#!" data-bs-toggle="tab" role="tab" aria-selected="false">
                                Third tab link
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                      <ul class="nav nav-underline" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active" href="#!" data-bs-toggle="tab" role="tab" aria-selected="true">
                            <i class="fi-home me-2"></i>
                            Home
                          </a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" href="#!" data-bs-toggle="tab" role="tab" aria-selected="false">
                            <i class="fi-user me-2"></i>
                            Profile
                          </a>
                        </li>
                        <li class="nav-item dropdown" role="presentation">
                          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                            Dropdown
                          </a>
                          <ul class="dropdown-menu">
                            <li>
                              <a class="dropdown-item" href="#!" data-bs-toggle="tab" role="tab" aria-selected="false">
                                First tab link
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#!" data-bs-toggle="tab" role="tab" aria-selected="false">
                                Second tab link
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#!" data-bs-toggle="tab" role="tab" aria-selected="false">
                                Third tab link
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#tabs-icons-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="tabs-icons-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Button-like tabs --&gt;
&lt;ul class=&quot;nav nav-tabs&quot; role=&quot;tablist&quot; style=&quot;max-width: 420px&quot;&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;a class=&quot;nav-link active&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;true&quot;&gt;
      &lt;i class=&quot;fi-home me-2 ms-n1&quot;&gt;&lt;/i&gt;
      Home
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      &lt;i class=&quot;fi-user me-2 ms-n1&quot;&gt;&lt;/i&gt;
      Profile
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item dropdown&quot; role=&quot;presentation&quot;&gt;
    &lt;a class=&quot;nav-link dropdown-toggle&quot; href=&quot;#&quot; data-bs-toggle=&quot;dropdown&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot;&gt;
      Dropdown
    &lt;/a&gt;
    &lt;ul class=&quot;dropdown-menu&quot;&gt;
      &lt;li&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
          First tab link
        &lt;/a&gt;
      &lt;/li&gt;
      &lt;li&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
          Second tab link
        &lt;/a&gt;
      &lt;/li&gt;
      &lt;li&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
          Third tab link
        &lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;

&lt;!--Underline tabs --&gt;
&lt;ul class=&quot;nav nav-underline&quot; role=&quot;tablist&quot;&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;a class=&quot;nav-link active&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;true&quot;&gt;
      &lt;i class=&quot;fi-home me-2&quot;&gt;&lt;/i&gt;
      Home
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      &lt;i class=&quot;fi-user me-2&quot;&gt;&lt;/i&gt;
      Profile
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item dropdown&quot; role=&quot;presentation&quot;&gt;
    &lt;a class=&quot;nav-link dropdown-toggle&quot; href=&quot;#&quot; data-bs-toggle=&quot;dropdown&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot;&gt;
      Dropdown
    &lt;/a&gt;
    &lt;ul class=&quot;dropdown-menu&quot;&gt;
      &lt;li&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
          First tab link
        &lt;/a&gt;
      &lt;/li&gt;
      &lt;li&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
          Second tab link
        &lt;/a&gt;
      &lt;/li&gt;
      &lt;li&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
          Third tab link
        &lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Shapes -->
          <section id="tabs-shapes" class="docs-section">
            <h4>Shapes</h4>
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
                    <ul class="nav nav-tabs flex-nowrap mb-4" role="tablist" style="max-width: 450px">
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab" role="tab" aria-selected="true">
                          Home
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false">
                          Profile
                        </button>
                      </li>
                      <li class="nav-item d-none d-sm-block" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false">
                          Contact
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false" disabled>
                          Disabled
                        </button>
                      </li>
                    </ul>
                    <ul class="nav nav-tabs flex-nowrap rounded-pill mb-4" role="tablist" style="max-width: 450px">
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link rounded-pill active" data-bs-toggle="tab" role="tab" aria-selected="true">
                          Home
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link rounded-pill" data-bs-toggle="tab" role="tab" aria-selected="false">
                          Profile
                        </button>
                      </li>
                      <li class="nav-item d-none d-sm-block" role="presentation">
                        <button type="button" class="nav-link rounded-pill" data-bs-toggle="tab" role="tab" aria-selected="false">
                          Contact
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link rounded-pill" data-bs-toggle="tab" role="tab" aria-selected="false" disabled>
                          Disabled
                        </button>
                      </li>
                    </ul>
                    <ul class="nav nav-tabs flex-nowrap rounded-0" role="tablist" style="max-width: 450px">
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link rounded-0 active" data-bs-toggle="tab" role="tab" aria-selected="true">
                          Home
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link rounded-0" data-bs-toggle="tab" role="tab" aria-selected="false">
                          Profile
                        </button>
                      </li>
                      <li class="nav-item d-none d-sm-block" role="presentation">
                        <button type="button" class="nav-link rounded-0" data-bs-toggle="tab" role="tab" aria-selected="false">
                          Contact
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link rounded-0" data-bs-toggle="tab" role="tab" aria-selected="false" disabled>
                          Disabled
                        </button>
                      </li>
                    </ul>
                  </div>
                  <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#tabs-shapes-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="tabs-shapes-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Rounded (default) tabs --&gt;
&lt;ul class=&quot;nav nav-tabs mb-4&quot; role=&quot;tablist&quot; style=&quot;max-width: 450px&quot;&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;true&quot;&gt;
      Home
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      Profile
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      Contact
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot; disabled&gt;
      Disabled
    &lt;/button&gt;
  &lt;/li&gt;
&lt;/ul&gt;


&lt;!-- Pill shaped tabs --&gt;
&lt;ul class=&quot;nav nav-tabs rounded-pill mb-4&quot; role=&quot;tablist&quot; style=&quot;max-width: 450px&quot;&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link rounded-pill active&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;true&quot;&gt;
      Home
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link rounded-pill&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      Profile
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link rounded-pill&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      Contact
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link rounded-pill&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot; disabled&gt;
      Disabled
    &lt;/button&gt;
  &lt;/li&gt;
&lt;/ul&gt;


&lt;!-- Square shaped tabs --&gt;
&lt;ul class=&quot;nav nav-tabs rounded-0 mb-4&quot; role=&quot;tablist&quot; style=&quot;max-width: 450px&quot;&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link rounded-0 active&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;true&quot;&gt;
      Home
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link rounded-0&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      Profile
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link rounded-0&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      Contact
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link rounded-0&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot; disabled&gt;
      Disabled
    &lt;/button&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
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
