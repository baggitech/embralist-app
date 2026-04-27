<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <title>Finder Docs | Blog components</title>

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
                    <div class="dropdown">
                      <span class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3 pe-none active">
                        Blog components
                        <span class="visually-hidden">post article</span>
                      </span>
                      <ul id="anchorNav" class="nav nav-underline flex-column border-start ms-2 my-2" style="gap: .25rem;">
                        <li class="nav-item"><a class="nav-link fw-normal" href="#post-preview-1">Post preview: Variant 1</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#post-preview-2">Post preview: Variant 2</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#post-preview-3">Post preview: Variant 3</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#post-preview-4">Post preview: Variant 4</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#post-preview-5">Post preview: Variant 5</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#post-preview-6">Post preview: Variant 6</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#post-preview-7">Post preview: Variant 7</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#vlog">Video blog (Vlog)</a></li>
                      </ul>
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
            <h1 class="pt-1">Blog components</h1>
            <p class="text-body-secondary mb-4">Components associated with the blog/news section of the website.</p>
          </section>


          <!-- Post preview: Variant 1 -->
          <section id="post-preview-1" class="docs-section pb-sm-2 mb-5">
            <h4>Post preview: Variant 1</h4>
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
                    <article class="pb-2" style="max-width: 416px">
                      <a class="ratio d-flex hover-effect-scale rounded overflow-hidden mb-3 mb-sm-4" href="#!" style="--fn-aspect-ratio: calc(300 / 416 * 100%)">
                        <img src="assets/img/blog/v1/03.jpg" class="hover-effect-target" alt="Image">
                      </a>
                      <div class="nav pt-1 pt-sm-0 pb-1 mb-2">
                        <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Home improvement</a>
                      </div>
                      <h3 class="h5 mb-2">
                        <a class="hover-effect-underline" href="#!">How to modernize your home on a budget</a>
                      </h3>
                      <p class="fs-sm">Modernizing your home doesn't have to break the bank. Here are some budget-friendly tips to give your living space a mo...</p>
                      <div class="nav fs-sm gap-3">
                        <a class="nav-link fw-semibold p-0" href="#!">by Darrell Steward</a>
                        <span class="text-body-secondary">April 13, 2024</span>
                      </div>
                    </article>
                  </div>
                  <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#post-preview-1-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="post-preview-1-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Blog post preview: Variant 1 --&gt;
&lt;article&gt;
  &lt;a class=&quot;ratio d-flex hover-effect-scale rounded overflow-hidden mb-3 mb-sm-4&quot; href=&quot;#&quot; style=&quot;--fn-aspect-ratio: calc(300 / 416 * 100%)&quot;&gt;
    &lt;img src=&quot;assets/img/blog/v1/03.jpg&quot; class=&quot;hover-effect-target&quot; alt=&quot;Image&quot;&gt;
  &lt;/a&gt;
  &lt;div class=&quot;nav pb-1 mb-2&quot;&gt;
    &lt;a class=&quot;nav-link text-body-secondary fs-xs text-uppercase p-0&quot; href=&quot;#&quot;&gt;Home improvement&lt;/a&gt;
  &lt;/div&gt;
  &lt;h3 class=&quot;h5 mb-2&quot;&gt;
    &lt;a class=&quot;hover-effect-underline&quot; href=&quot;#&quot;&gt;How to modernize your home on a budget&lt;/a&gt;
  &lt;/h3&gt;
  &lt;p class=&quot;fs-sm&quot;&gt;Modernizing your home doesn't have to break the bank. Here are some budget-friendly tips to give your living space a mo...&lt;/p&gt;
  &lt;div class=&quot;nav fs-sm gap-3&quot;&gt;
    &lt;a class=&quot;nav-link fw-semibold p-0&quot; href=&quot;#&quot;&gt;by Darrell Steward&lt;/a&gt;
    &lt;span class=&quot;text-body-secondary&quot;&gt;April 13, 2024&lt;/span&gt;
  &lt;/div&gt;
&lt;/article&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Post preview: Variant 2 -->
          <section id="post-preview-2" class="docs-section pb-sm-2 mb-5">
            <h4>Post preview: Variant 2</h4>
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
                    <article class="d-flex flex-column flex-sm-row align-items-sm-center gap-3 gap-sm-4 pb-1" style="max-width: 636px">
                      <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="#!" style="max-width: 220px; --fn-aspect-ratio: calc(139 / 220 * 100%)">
                        <img src="assets/img/blog/v2/05.jpg" class="hover-effect-target" alt="Image">
                      </a>
                      <div class="pt-1 pt-sm-0">
                        <div class="nav align-items-center gap-2 text-body-secondary pb-2 mb-1">
                          <a class="nav-link text-body-secondary fs-xs text-uppercase p-0" href="#!">Industry news</a>
                          <hr class="vr my-1 mx-1">
                          <span class="fs-sm lh-0">June 17, 2024</span>
                        </div>
                        <h3 class="h5 mb-0">
                          <a class="hover-effect-underline" href="#!">2025 Subaru Outback leads the latest new car news</a>
                        </h3>
                      </div>
                    </article>
                  </div>
                  <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#post-preview-2-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="post-preview-2-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Blog post preview: Variant 2 --&gt;
&lt;article class=&quot;d-flex flex-column flex-sm-row align-items-sm-center gap-3 gap-sm-4&quot;&gt;
  &lt;a class=&quot;ratio d-flex hover-effect-scale rounded overflow-hidden&quot; href=&quot;#&quot; style=&quot;max-width: 220px; --fn-aspect-ratio: calc(139 / 220 * 100%)&quot;&gt;
    &lt;img src=&quot;assets/img/blog/v2/05.jpg&quot; class=&quot;hover-effect-target&quot; alt=&quot;Image&quot;&gt;
  &lt;/a&gt;
  &lt;div class=&quot;pt-1 pt-sm-0&quot;&gt;
    &lt;div class=&quot;nav align-items-center gap-2 text-body-secondary pb-2 mb-1&quot;&gt;
      &lt;a class=&quot;nav-link text-body-secondary fs-xs text-uppercase p-0&quot; href=&quot;#&quot;&gt;Industry news&lt;/a&gt;
      &lt;hr class=&quot;vr my-1 mx-1&quot;&gt;
      &lt;span class=&quot;fs-sm lh-0&quot;&gt;June 17, 2024&lt;/span&gt;
    &lt;/div&gt;
    &lt;h3 class=&quot;h5 mb-0&quot;&gt;
      &lt;a class=&quot;hover-effect-underline&quot; href=&quot;#&quot;&gt;2025 Subaru Outback leads the latest new car news&lt;/a&gt;
    &lt;/h3&gt;
  &lt;/div&gt;
&lt;/article&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Post preview: Variant 3 -->
          <section id="post-preview-3" class="docs-section pb-sm-2 mb-5">
            <h4>Post preview: Variant 3</h4>
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
                    <article class="position-relative hover-effect-scale rounded overflow-hidden" style="max-width: 416px">
                      <div class="ratio hover-effect-target" style=" --fn-aspect-ratio: calc(280 / 416 * 100%)">
                        <img src="assets/img/blog/v3/03.jpg" alt="Image">
                      </div>
                      <span class="position-absolute bottom-0 start-0 w-100 h-100" style="background: linear-gradient(1deg, rgba(33, 42, 54, .75) 0.33%, rgba(33, 42, 54, .00) 45.72%)"></span>
                      <div class="d-flex align-items-end position-absolute bottom-0 start-0 w-100 h-100 z-2 p-3">
                        <h3 class="h5 mb-0">
                          <a class="hover-effect-underline stretched-link text-white" href="#!">Best features to ask your luxury home builder about</a>
                        </h3>
                      </div>
                    </article>
                  </div>
                  <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#post-preview-3-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="post-preview-3-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Blog post preview: Variant 3 --&gt;
&lt;article class=&quot;position-relative hover-effect-scale rounded overflow-hidden&quot;&gt;
  &lt;div class=&quot;ratio hover-effect-target&quot; style=&quot; --fn-aspect-ratio: calc(280 / 416 * 100%)&quot;&gt;
    &lt;img src=&quot;assets/img/blog/v3/03.jpg&quot; alt=&quot;Image&quot;&gt;
  &lt;/div&gt;
  &lt;span class=&quot;position-absolute bottom-0 start-0 w-100 h-100&quot; style=&quot;background: linear-gradient(1deg, rgba(33, 42, 54, .75) 0.33%, rgba(33, 42, 54, .00) 45.72%)&quot;&gt;&lt;/span&gt;
  &lt;div class=&quot;d-flex align-items-end position-absolute bottom-0 start-0 w-100 h-100 z-2 p-3&quot;&gt;
    &lt;h3 class=&quot;h5 mb-0&quot;&gt;
      &lt;a class=&quot;hover-effect-underline stretched-link text-white&quot; href=&quot;#&quot;&gt;Best features to ask your luxury home builder about&lt;/a&gt;
    &lt;/h3&gt;
  &lt;/div&gt;
&lt;/article&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Post preview: Variant 4 -->
          <section id="post-preview-4" class="docs-section pb-sm-2 mb-5">
            <h4>Post preview: Variant 4</h4>
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
                    <article class="d-flex align-items-center gap-3 pb-1" style="max-width: 390px">
                      <a class="ratio ratio-1x1 d-flex flex-shrink-0 hover-effect-scale rounded-2 overflow-hidden" href="#!" style="width: 96px">
                        <img src="assets/img/blog/v3/th02.jpg" class="hover-effect-target" alt="Image">
                      </a>
                      <div>
                        <h3 class="h6 pb-1 mb-2">
                          <a class="hover-effect-underline" href="#!">5 Reasons to install a backyard storage shed</a>
                        </h3>
                        <div class="fs-xs text-body-secondary">April 30, 2024</div>
                      </div>
                    </article>
                  </div>
                  <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#post-preview-4-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="post-preview-4-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Blog post preview: Variant 4 --&gt;
&lt;article class=&quot;d-flex align-items-center gap-3&quot;&gt;
  &lt;a class=&quot;ratio ratio-1x1 d-flex flex-shrink-0 hover-effect-scale rounded-2 overflow-hidden&quot; href=&quot;#&quot; style=&quot;width: 96px&quot;&gt;
    &lt;img src=&quot;assets/img/blog/v3/th02.jpg&quot; class=&quot;hover-effect-target&quot; alt=&quot;Image&quot;&gt;
  &lt;/a&gt;
  &lt;div&gt;
    &lt;h3 class=&quot;h6 pb-1 mb-2&quot;&gt;
      &lt;a class=&quot;hover-effect-underline&quot; href=&quot;#&quot;&gt;5 Reasons to install a backyard storage shed&lt;/a&gt;
    &lt;/h3&gt;
    &lt;div class=&quot;fs-xs text-body-secondary&quot;&gt;April 30, 2024&lt;/div&gt;
  &lt;/div&gt;
&lt;/article&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Post preview: Variant 5 -->
          <section id="post-preview-5" class="docs-section pb-sm-2 mb-5">
            <h4>Post preview: Variant 5</h4>
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
                    <article class="pb-1" style="max-width: 636px">
                      <a class="ratio d-flex hover-effect-scale rounded overflow-hidden mb-3 mb-sm-4" href="#!" style="--fn-aspect-ratio: calc(421 / 636 * 100%)">
                        <img src="assets/img/blog/v4/featured01.jpg" class="hover-effect-target" alt="Image">
                      </a>
                      <div class="d-flex align-items-center gap-1 text-body-secondary pt-1 pt-sm-0 mb-3">
                        <div class="position-relative nav flex-nowrap align-items-center">
                          <div class="ratio ratio-1x1 flex-shrink-0 me-2" style="width: 24px">
                            <img class="rounded-circle" src="assets/img/blog/v4/author/01.jpg" alt="Avatar">
                          </div>
                          <a class="nav-link stretched-link p-0" href="#!">Dr. Martha Simpson</a>
                        </div>
                        <i class="fi-bullet"></i>
                        <div class="fs-sm">May 13, 2024</div>
                      </div>
                      <h3 class="h4">
                        <a class="hover-effect-underline" href="#!">Herbal medicines: advantages and disadvantages</a>
                      </h3>
                      <a class="badge text-secondary-emphasis bg-body-secondary text-uppercase text-decoration-none" href="#!">Herbal medicine</a>
                    </article>
                  </div>
                  <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#post-preview-5-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="post-preview-5-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Blog post preview: Variant 5 --&gt;
&lt;article&gt;
  &lt;a class=&quot;ratio d-flex hover-effect-scale rounded overflow-hidden mb-3 mb-sm-4&quot; href=&quot;#&quot; style=&quot;--fn-aspect-ratio: calc(421 / 636 * 100%)&quot;&gt;
    &lt;img src=&quot;assets/img/blog/v4/featured01.jpg&quot; class=&quot;hover-effect-target&quot; alt=&quot;Image&quot;&gt;
  &lt;/a&gt;
  &lt;div class=&quot;d-flex align-items-center gap-1 text-body-secondary pt-1 pt-sm-0 mb-3&quot;&gt;
    &lt;div class=&quot;position-relative nav flex-nowrap align-items-center&quot;&gt;
      &lt;div class=&quot;ratio ratio-1x1 flex-shrink-0 me-2&quot; style=&quot;width: 24px&quot;&gt;
        &lt;img class=&quot;rounded-circle&quot; src=&quot;assets/img/blog/v4/author/01.jpg&quot; alt=&quot;Avatar&quot;&gt;
      &lt;/div&gt;
      &lt;a class=&quot;nav-link stretched-link p-0&quot; href=&quot;#&quot;&gt;Dr. Martha Simpson&lt;/a&gt;
    &lt;/div&gt;
    &lt;i class=&quot;fi-bullet&quot;&gt;&lt;/i&gt;
    &lt;div class=&quot;fs-sm&quot;&gt;May 13, 2024&lt;/div&gt;
  &lt;/div&gt;
  &lt;h3 class=&quot;h4&quot;&gt;
    &lt;a class=&quot;hover-effect-underline&quot; href=&quot;#&quot;&gt;Herbal medicines: advantages and disadvantages&lt;/a&gt;
  &lt;/h3&gt;
  &lt;a class=&quot;badge text-secondary-emphasis bg-body-secondary text-uppercase text-decoration-none&quot; href=&quot;#&quot;&gt;Herbal medicine&lt;/a&gt;
&lt;/article&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Post preview: Variant 6 -->
          <section id="post-preview-6" class="docs-section pb-sm-2 mb-5">
            <h4>Post preview: Variant 6</h4>
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
                    <article class="d-sm-flex align-items-center pb-1" style="max-width: 856px">
                      <a class="ratio d-flex hover-effect-scale rounded overflow-hidden order-sm-2" href="#!" style="max-width: 132px; --fn-aspect-ratio: calc(124 / 132 * 100%)">
                        <img src="assets/img/blog/v4/02.jpg" class="hover-effect-target" alt="Image">
                      </a>
                      <div class="order-sm-1 pt-4 pt-sm-0 pe-sm-4 pe-md-5 me-sm-2 me-md-0">
                        <div class="d-flex align-items-center gap-1 text-body-secondary pt-1 pt-sm-0 mb-3">
                          <div class="position-relative nav flex-nowrap align-items-center">
                            <div class="ratio ratio-1x1 flex-shrink-0 me-2" style="width: 24px">
                              <img class="rounded-circle" src="assets/img/blog/v4/author/03.jpg" alt="Avatar">
                            </div>
                            <a class="nav-link stretched-link p-0" href="#!">Dr. Bessie Cooper</a>
                          </div>
                          <i class="fi-bullet"></i>
                          <div class="fs-sm">June 09, 2024</div>
                        </div>
                        <h3 class="h5 mb-2">
                          <a class="hover-effect-underline" href="#!">How Healthgrades rates America's best hospitals</a>
                        </h3>
                        <p>Since its establishment in 1998, Healthgrades has been aiding consumers in assessing and contrasting hospital performance concerning care delivered during a hospital...</p>
                        <a class="badge text-secondary-emphasis bg-body-secondary text-uppercase text-decoration-none" href="#!">Hospital quality</a>
                      </div>
                    </article>
                  </div>
                  <div id="html-6" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#post-preview-6-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="post-preview-6-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Blog post preview: Variant 6 --&gt;
&lt;article class=&quot;d-sm-flex align-items-center&quot;&gt;
  &lt;a class=&quot;ratio d-flex hover-effect-scale rounded overflow-hidden order-sm-2&quot; href=&quot;#&quot; style=&quot;max-width: 132px; --fn-aspect-ratio: calc(124 / 132 * 100%)&quot;&gt;
    &lt;img src=&quot;assets/img/blog/v4/02.jpg&quot; class=&quot;hover-effect-target&quot; alt=&quot;Image&quot;&gt;
  &lt;/a&gt;
  &lt;div class=&quot;order-sm-1 pt-4 pt-sm-0 pe-sm-4 pe-md-5 me-sm-2 me-md-0&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center gap-1 text-body-secondary pt-1 pt-sm-0 mb-3&quot;&gt;
      &lt;div class=&quot;position-relative nav flex-nowrap align-items-center&quot;&gt;
        &lt;div class=&quot;ratio ratio-1x1 flex-shrink-0 me-2&quot; style=&quot;width: 24px&quot;&gt;
          &lt;img class=&quot;rounded-circle&quot; src=&quot;assets/img/blog/v4/author/03.jpg&quot; alt=&quot;Avatar&quot;&gt;
        &lt;/div&gt;
        &lt;a class=&quot;nav-link stretched-link p-0&quot; href=&quot;#&quot;&gt;Dr. Bessie Cooper&lt;/a&gt;
      &lt;/div&gt;
      &lt;i class=&quot;fi-bullet&quot;&gt;&lt;/i&gt;
      &lt;div class=&quot;fs-sm&quot;&gt;June 09, 2024&lt;/div&gt;
    &lt;/div&gt;
    &lt;h3 class=&quot;h5 mb-2&quot;&gt;
      &lt;a class=&quot;hover-effect-underline&quot; href=&quot;#&quot;&gt;How Healthgrades rates America's best hospitals&lt;/a&gt;
    &lt;/h3&gt;
    &lt;p&gt;Since its establishment in 1998, Healthgrades has been aiding consumers in assessing and contrasting hospital performance concerning care delivered during a hospital...&lt;/p&gt;
    &lt;a class=&quot;badge text-secondary-emphasis bg-body-secondary text-uppercase text-decoration-none&quot; href=&quot;#&quot;&gt;Hospital quality&lt;/a&gt;
  &lt;/div&gt;
&lt;/article&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Post preview: Variant 7 -->
          <section id="post-preview-7" class="docs-section pb-sm-2 mb-5">
            <h4>Post preview: Variant 7</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded opacity-50"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-7" role="tab" aria-controls="preview-7" aria-selected="true">
                      <i class="fi-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-7" role="tab" aria-controls="html-7" aria-selected="false">
                      <i class="fi-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-7" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <article class="position-relative hover-effect-scale" style="max-width: 360px">
                      <div class="d-flex align-items-end gap-3 mb-3 mb-md-4">
                        <div class="ratio bg-body-secondary rounded overflow-hidden flex-shrink-0" style="width: 140px; --fn-aspect-ratio: calc(100 / 140 * 100%)">
                          <img src="assets/img/home/events/news/02.jpg" class="hover-effect-target" alt="Image">
                        </div>
                        <div class="fs-sm text-body-secondary text-uppercase" style="writing-mode: vertical-rl; text-orientation: mixed; transform: rotate(-180deg)">Planning</div>
                      </div>
                      <h3 class="h5 mb-2">
                        <a class="hover-effect-underline stretched-link" href="#!">Event Ideas that Celebrate Culture, Community, and Your Brand</a>
                      </h3>
                      <p class="pb-1 mb-2">Embracing your community and celebrating culture together also makes business sense...</p>
                      <div class="fs-sm text-body-secondary">15 mins read</div>
                    </article>
                  </div>
                  <div id="html-7" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#post-preview-7-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="post-preview-7-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Blog post preview: Variant 7 --&gt;
&lt;article class=&quot;position-relative hover-effect-scale&quot;&gt;
  &lt;div class=&quot;d-flex align-items-end gap-3 mb-3 mb-md-4&quot;&gt;
    &lt;div class=&quot;ratio bg-body-secondary rounded overflow-hidden flex-shrink-0&quot; style=&quot;width: 140px; --fn-aspect-ratio: calc(100 / 140 * 100%)&quot;&gt;
      &lt;img src=&quot;assets/img/home/events/news/02.jpg&quot; class=&quot;hover-effect-target&quot; alt=&quot;Image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;fs-sm text-body-secondary text-uppercase&quot; style=&quot;writing-mode: vertical-rl; text-orientation: mixed; transform: rotate(-180deg)&quot;&gt;Planning&lt;/div&gt;
  &lt;/div&gt;
  &lt;h3 class=&quot;h5 mb-2&quot;&gt;
    &lt;a class=&quot;hover-effect-underline stretched-link&quot; href=&quot;#&quot;&gt;Event Ideas that Celebrate Culture, Community, and Your Brand&lt;/a&gt;
  &lt;/h3&gt;
  &lt;p class=&quot;pb-1 mb-2&quot;&gt;Embracing your community and celebrating culture together also makes business sense...&lt;/p&gt;
  &lt;div class=&quot;fs-sm text-body-secondary&quot;&gt;15 mins read&lt;/div&gt;
&lt;/article&gt;
                      </code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Video blog (Vlog) -->
          <section id="vlog" class="docs-section">
            <h4>Video blog (Vlog)</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded opacity-50"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-8" role="tab" aria-controls="preview-8" aria-selected="true">
                      <i class="fi-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-8" role="tab" aria-controls="html-8" aria-selected="false">
                      <i class="fi-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-8" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <article class="position-relative hover-effect-scale" style="max-width: 416px">
                      <div class="position-relative rounded overflow-hidden">
                        <div class="btn btn-icon btn-sm position-absolute top-0 start-0 text-white bg-body border-0 pe-none z-1 mt-2 ms-2" style="backdrop-filter: blur(6px); --fn-bg-opacity: .6" data-bs-theme="dark">
                          <i class="fi-video fs-base"></i>
                        </div>
                        <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(272 / 416 * 100%)">
                          <img src="assets/img/blog/v2/vlog/03.jpg" alt="Image">
                        </div>
                        <div class="position-absolute bottom-0 start-0 d-flex align-items-center justify-content-between w-100 bg-body text-white z-1 py-1 px-3" style="backdrop-filter: blur(6px); --fn-bg-opacity: .6" data-bs-theme="dark">
                          <div class="d-flex align-items-center fs-sm">
                            <i class="fi-thumbs-up fs-base me-2"></i>
                            100%
                          </div>
                          <div class="fs-sm">17:25</div>
                        </div>
                      </div>
                      <h3 class="h5 pt-3 pt-sm-4 mt-1 mt-sm-0">
                        <a class="hover-effect-underline stretched-link" href="#!">Tesla fixes common recall with over-the-air update</a>
                      </h3>
                    </article>
                  </div>
                  <div id="html-8" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#vlog-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="vlog-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Video blog post preview (Vlog) --&gt;
&lt;article class=&quot;position-relative hover-effect-scale&quot;&gt;
  &lt;div class=&quot;position-relative rounded overflow-hidden&quot;&gt;
    &lt;div class=&quot;btn btn-icon btn-sm position-absolute top-0 start-0 text-white bg-body border-0 pe-none z-1 mt-2 ms-2&quot; style=&quot;backdrop-filter: blur(6px); --fn-bg-opacity: .6&quot; data-bs-theme=&quot;dark&quot;&gt;
      &lt;i class=&quot;fi-video fs-base&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;ratio hover-effect-target&quot; style=&quot;--fn-aspect-ratio: calc(272 / 416 * 100%)&quot;&gt;
      &lt;img src=&quot;assets/img/blog/v2/vlog/03.jpg&quot; alt=&quot;Image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;position-absolute bottom-0 start-0 d-flex align-items-center justify-content-between w-100 bg-body text-white z-1 py-1 px-3&quot; style=&quot;backdrop-filter: blur(6px); --fn-bg-opacity: .6&quot; data-bs-theme=&quot;dark&quot;&gt;
      &lt;div class=&quot;d-flex align-items-center fs-sm&quot;&gt;
        &lt;i class=&quot;fi-thumbs-up fs-base me-2&quot;&gt;&lt;/i&gt;
        100%
      &lt;/div&gt;
      &lt;div class=&quot;fs-sm&quot;&gt;17:25&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;h3 class=&quot;h5 pt-3 pt-sm-4 mt-1 mt-sm-0 mb-0&quot;&gt;
    &lt;a class=&quot;hover-effect-underline stretched-link&quot; href=&quot;#&quot;&gt;Tesla fixes common recall with over-the-air update&lt;/a&gt;
  &lt;/h3&gt;
&lt;/article&gt;</code></pre>
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
