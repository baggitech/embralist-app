<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <title>Finder Docs | Colors</title>

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
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-npm-scripts.php">
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
                    <div class="dropdown">
                      <span class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3 pe-none active">
                        Colors
                        <span class="visually-hidden">grayscale primary secondary info warning success danger dark light</span>
                      </span>
                      <ul id="anchorNav" class="nav nav-underline flex-column border-start ms-2 my-2" style="gap: .25rem;">
                        <li class="nav-item"><a class="nav-link fw-normal" href="#colors-gray-theme">Grayscale and Theme colors</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#colors-modes">Color modes dependant colors</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#colors-customize">Customizing colors</a></li>
                      </ul>
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
          <section class="py-2 pb-3 pb-lg-4">
            <span class="badge d-inline-flex align-items-center text-primary bg-primary-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Customize</span>
            <h1 class="pt-1 mb-2">Colors</h1>
          </section>


          <!-- Page content -->
          <section class="mb-3">
            <p class="pb-4">The color scheme of this template is defined by two sets of color variables, ensuring consistent aesthetics across both light and dark color modes.</p>


            <!-- Grayscale and Theme colors -->
            <section class="docs-section pb-sm-2 mb-5" id="colors-gray-theme">
              <h2 class="h3 mb-sm-4">Grayscale and Theme colors</h2>
              <p>These colors remain constant regardless of the selected color mode:</p>
              <h3 class="h5 pt-2">Grayscale</h3>
              <div class="position-relative mb-4" style="max-width: 720px" data-bs-theme="dark">
                <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3" data-copy-code="#grayscale-code">
                  <i class="fi-copy fs-sm me-1"></i>
                  Copy
                </button>
                <pre id="grayscale-code" class="code-highlight border"><code class="language-scss">$white:    #fff !default;
$gray-50:  #f5f7fa !default;
$gray-100: #eef1f6 !default;
$gray-200: #e0e5eb !default;
$gray-300: #cad0d9 !default;
$gray-400: #9ca3af !default;
$gray-500: #6c727f !default;
$gray-600: #4e5562 !default;
$gray-700: #333d4c !default;
$gray-800: #222934 !default;
$gray-900: #181d25 !default;
$gray-950: #131920 !default;
$black:    #000 !default;</code></pre>
              </div>
              <h3 class="h5 pt-2 pt-sm-3">Theme colors</h3>
              <div class="position-relative" style="max-width: 720px" data-bs-theme="dark">
                <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3" data-copy-code="#theme-colors-code">
                  <i class="fi-copy fs-sm me-1"></i>
                  Copy
                </button>
                <pre id="theme-colors-code" class="code-highlight border"><code class="language-scss">$primary:   #d85151 !default;
$secondary: $gray-500 !default;
$success:   #33b36b !default;
$info:      #3d7a81 !default;
$warning:   #fc9231 !default;
$danger:    #f03d3d !default;
$light:     $white !default;
$dark:      $gray-800 !default;</code></pre>
              </div>
            </section>


            <!-- Color modes dependant colors -->
            <section class="docs-section pb-sm-2 mb-5" id="colors-modes">
              <h2 class="h3 mb-sm-4">Color modes dependant colors</h2>
              <p>In addition to the standard grayscale and theme colors, this template includes a set of color variables that adapt based on the selected color mode - light or dark. These dependant colors ensure that the template maintains visual consistency and optimal readability across different environments.</p>
              <h3 class="h5 pt-2">For Light (default) mode</h3>
              <div class="position-relative mb-4" style="max-width: 720px" data-bs-theme="dark">
                <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3" data-copy-code="#light-mode-code">
                  <i class="fi-copy fs-sm me-1"></i>
                  Copy
                </button>
                <pre id="light-mode-code" class="code-highlight border"><code class="language-scss">// src/scss/_variables.scss

// Emphasis text
/* stylelint-disable */
$primary-text-emphasis:       adjust-color($primary, $lightness: -10%) !default;
$secondary-text-emphasis:     $gray-700 !default;
$success-text-emphasis:       adjust-color($success, $lightness: -10%) !default;
$danger-text-emphasis:        adjust-color($danger, $lightness: -10%) !default;
$warning-text-emphasis:       adjust-color($warning, $lightness: -10%) !default;
$info-text-emphasis:          adjust-color($info, $lightness: -10%) !default;
$light-text-emphasis:         $gray-700 !default;
$dark-text-emphasis:          $gray-900 !default;
/* stylelint-enable */

// Subtle backgrounds
$primary-bg-subtle:           tint-color($primary, 90%) !default;
$secondary-bg-subtle:         $gray-50 !default;
$success-bg-subtle:           tint-color($success, 90%) !default;
$danger-bg-subtle:            tint-color($danger, 90%) !default;
$warning-bg-subtle:           tint-color($warning, 90%) !default;
$info-bg-subtle:              tint-color($info, 90%) !default;
$light-bg-subtle:             $white !default;
$dark-bg-subtle:              tint-color($dark, 92%) !default;

// Subtle borders
$primary-border-subtle:       tint-color($primary, 80%) !default;
$secondary-border-subtle:     $gray-200 !default;
$success-border-subtle:       tint-color($success, 80%) !default;
$danger-border-subtle:        tint-color($danger, 80%) !default;
$warning-border-subtle:       tint-color($warning, 80%) !default;
$info-border-subtle:          tint-color($info, 80%) !default;
$light-border-subtle:         $gray-100 !default;
$dark-border-subtle:          $gray-200 !default;

// User selection color
$user-selection-color:        rgba($gray-900, .1) !default;

// Body colors
$body-color:                  $gray-600 !default;
$body-bg:                     $white !default;
$body-secondary-color:        $gray-500 !default;
$body-secondary-bg:           $gray-100 !default;
$body-tertiary-color:         $gray-400 !default;
$body-tertiary-bg:            $gray-50 !default;
$body-emphasis-color:         $gray-800 !default;
$link-color:                  $info !default;

// Headings color
$headings-color:              $gray-900 !default;

// Common components colors
$border-color:                $gray-200 !default;
$component-color:             $gray-700 !default;
$component-hover-color:       $gray-900 !default;
$component-hover-bg:          $gray-50 !default;
$component-active-color:      $gray-900 !default;
$component-active-bg:         $gray-100 !default;
$component-disabled-color:    $gray-400 !default;

// Focus ring color
$focus-ring-color:            rgba($gray-900, $focus-ring-opacity) !default;</code></pre>
              </div>
              <h3 class="h5 pt-2 pt-sm-3">For Dark mode</h3>
              <div class="position-relative" style="max-width: 720px" data-bs-theme="dark">
                <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3" data-copy-code="#dark-mode-code">
                  <i class="fi-copy fs-sm me-1"></i>
                  Copy
                </button>
                <pre id="dark-mode-code" class="code-highlight border"><code class="language-scss">// src/scss/_variables-dark.scss
// Emphasis text
/* stylelint-disable */
$primary-text-emphasis-dark:        adjust-color($primary, $lightness: -5%) !default;
$secondary-text-emphasis-dark:      $gray-200 !default;
$success-text-emphasis-dark:        adjust-color($success, $lightness: -5%) !default;
$danger-text-emphasis-dark:         adjust-color($danger, $lightness: -5%)!default;
$warning-text-emphasis-dark:        adjust-color($warning, $lightness: -5%) !default;
$info-text-emphasis-dark:           adjust-color($info, $lightness: -5%) !default;
$light-text-emphasis-dark:          $gray-200 !default;
$dark-text-emphasis-dark:           $white !default;
/* stylelint-enable */

// Subtle backgrounds
$primary-bg-subtle-dark:            mix($gray-900, $primary, 90%) !default;
$secondary-bg-subtle-dark:          $gray-800 !default;
$success-bg-subtle-dark:            mix($gray-900, $success, 90%) !default;
$danger-bg-subtle-dark:             mix($gray-900, $danger, 90%) !default;
$warning-bg-subtle-dark:            mix($gray-900, $warning, 90%) !default;
$info-bg-subtle-dark:               mix($gray-900, $info, 90%) !default;
$light-bg-subtle-dark:              $gray-900 !default;
$dark-bg-subtle-dark:               $gray-950 !default;

// Subtle borders
$primary-border-subtle-dark:        mix($gray-900, $primary, 80%) !default;
$secondary-border-subtle-dark:      $gray-700 !default;
$success-border-subtle-dark:        mix($gray-900, $success, 80%) !default;
$danger-border-subtle-dark:         mix($gray-900, $danger, 80%) !default;
$warning-border-subtle-dark:        mix($gray-900, $warning, 80%) !default;
$info-border-subtle-dark:           mix($gray-900, $info, 80%) !default;
$light-border-subtle-dark:          $gray-700 !default;
$dark-border-subtle-dark:           $gray-950 !default;

// User selection color
$user-selection-color-dark:         rgba($white, .12) !default;

// Body colors
$body-color-dark:                   $gray-300 !default;
$body-bg-dark:                      $gray-900 !default;
$body-secondary-color-dark:         $gray-400 !default;
$body-secondary-bg-dark:            $gray-700 !default;
$body-tertiary-color-dark:          $gray-500 !default;
$body-tertiary-bg-dark:             $gray-800 !default;
$body-emphasis-color-dark:          $gray-100 !default;
$link-color-dark:                   $info !default;

// Headings color
$headings-color-dark:               $white !default;

/ Common components colors
$border-color-dark:                 $gray-700 !default;
$component-color-dark:              $gray-200 !default;
$component-hover-color-dark:        $white !default;
$component-hover-bg-dark:           $gray-800 !default;
$component-active-color-dark:       $white !default;
$component-active-bg-dark:          $gray-700 !default;
$component-disabled-color-dark:     $gray-500 !default;

// Focus ring color
$focus-ring-color-dark:             rgba($white, $focus-ring-opacity) !default;</code></pre>
              </div>
            </section>


            <!-- Customizing colors -->
            <section class="docs-section" id="colors-customize">
              <h2 class="h3 mb-4">Customizing colors</h2>
              <p>To align the template colors with your branding or personal preferences, you can modify the color variables for light mode, dark mode, or both. This customization involves variables from both the standard set (grayscale and theme colors) and those dependant on light and dark modes.</p>
              <h3 class="h5 pt-2">Steps to customize color variables:</h3>
              <ol>
                <li><span class="text-body-emphasis fw-semibold">Identify the variable:</span> Determine which color variable(s) you wish to change. For standard grayscale and theme colors, find these in <code>src/scss/_variables.scss</code>. For mode-dependant colors, check <code>src/scss/_variables.scss</code> for light mode and <code>src/scss/_variables-dark.scss</code> for dark mode.</li>
                <li><span class="text-body-emphasis fw-semibold">Copy the variable:</span> Select and copy the variable(s) from the appropriate file. Variables without mode-specific versions (grayscale and main theme colors) are modified for both modes simultaneously unless overridden.</li>
                <li>
                  <span class="text-body-emphasis fw-semibold">Modify in user variables file:</span> Select and copy the variable(s) from the appropriate file. Variables without mode-specific versions (grayscale and main theme colors) are modified for both modes simultaneously unless overridden.
                  <ul>
                    <li>Paste the copied variable(s) into <code>src/scss/_user-variables.scss</code>.</li>
                    <li>Change the value(s) to your desired colors.</li>
                  </ul>
                </li>
              </ol>
              <p>Here's an example of how to change the primary theme color and a mode-specific background color:</p>
              <div class="position-relative" style="max-width: 720px" data-bs-theme="dark">
                <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3" data-copy-code="#customize-colors-code">
                  <i class="fi-copy fs-sm me-1"></i>
                  Copy
                </button>
                <pre id="customize-colors-code" class="code-highlight border"><code class="language-scss">// Inside src/scss/_user-variables.scss

$primary: #0066cc !default; // New primary color for all modes
$background-dark: #101010 !default; // New background color for dark mode</code></pre>
              </div>
            </section>
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
