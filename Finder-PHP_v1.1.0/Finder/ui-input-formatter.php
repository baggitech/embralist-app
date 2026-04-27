<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <title>Finder Docs | Input text formatter</title>

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
    <link rel="stylesheet" href="assets/vendor/nouislider/dist/nouislider.min.css">

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
                    <div class="dropdown">
                      <span class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3 active pe-none">
                        Input text formatter
                        <span class="visually-hidden">form control mask</span>
                      </span>
                      <ul id="anchorNav" class="nav nav-underline flex-column border-start ms-2 my-2" style="gap: .25rem;">
                        <li class="nav-item"><a class="nav-link fw-normal" href="#input-formatter-card">Payment card number</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#input-formatter-phone">Phone number</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#input-formatter-date">Date</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#input-formatter-time">Time</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#input-formatter-custom">Custom blocks</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#input-formatter-prefix">Prefix and uppercase</a></li>
                      </ul>
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
          <section class="pt-2 pb-md-2">
            <span class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Finder component</span>
            <h1 class="pt-1">Input text formatter</h1>
            <p class="text-body-secondary mb-4">Format input text content when you are typing.</p>
          </section>


          <!-- Info alert -->
          <section class="alert d-sm-flex text-body-emphasis bg-info bg-opacity-10 border-0 py-4 mb-5">
            <i class="fi-info text-info fs-4 mb-2 mb-sm-0"></i>
            <div class="ps-sm-3 pe-sm-5 w-100">
              <p>Input text formatting feature is enabled through the <a class="alert-link" href="https://nosir.github.io/cleave.js/" target="_blank" rel="noreferrer">Cleave.js</a> plugin. To use this component, make sure to include the required reference to the plugin's <code>.js</code> file before the closing <code>&lt;/body&gt;</code> tag and above <code>theme.min.js</code> reference in your document:</p>
              <pre class="code-highlight border" data-bs-theme="dark"><code class="language-html">&lt;script src=&quot;assets/vendor/cleave.js/dist/cleave.min.js&quot;&gt;&lt;/script&gt;</code></pre>
            </div>
          </section>


          <!-- Payment card number -->
          <section id="input-formatter-card" class="docs-section pb-sm-2 mb-5">
            <h4>Payment card number</h4>
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
                    <div style="max-width: 400px">
                      <label for="card" class="form-label">Card number</label>
                      <div class="position-relative" data-input-format='{"creditCard": true}'>
                        <input type="text" class="form-control form-icon-end" id="card" placeholder="Enter card number">
                        <span class="position-absolute d-flex top-50 end-0 translate-middle-y fs-5 text-body-tertiary me-3" data-card-icon></span>
                      </div>
                    </div>
                  </div>
                  <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#input-formatter-card-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="input-formatter-card-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Input text formatted as a card number with updating card icon --&gt;
&lt;label for=&quot;card&quot; class=&quot;form-label&quot;&gt;Card number&lt;/label&gt;
&lt;div class=&quot;position-relative&quot; data-input-format='{&quot;creditCard&quot;: true}'&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control form-icon-end&quot; id=&quot;card&quot; placeholder=&quot;Enter card number&quot;&gt;
  &lt;span class=&quot;position-absolute d-flex top-50 end-0 translate-middle-y fs-5 text-body-tertiary me-3&quot; data-card-icon&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Phone number -->
          <section id="input-formatter-phone" class="docs-section pb-sm-2 mb-5">
            <h4>Phone number</h4>
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
                    <div style="max-width: 400px">
                      <label for="phone" class="form-label">Phone</label>
                      <input type="tel" class="form-control" id="phone" data-input-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}' placeholder="+1 ___ ___ __">
                    </div>
                  </div>
                  <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#input-formatter-phone-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="input-formatter-phone-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Input text formatted as a phone number --&gt;
&lt;label for=&quot;phone&quot; class=&quot;form-label&quot;&gt;Phone&lt;/label&gt;
&lt;input type=&quot;tel&quot; class=&quot;form-control&quot; id=&quot;phone&quot; data-input-format='{&quot;numericOnly&quot;: true, &quot;delimiters&quot;: [&quot;+1 &quot;, &quot; &quot;, &quot; &quot;], &quot;blocks&quot;: [0, 3, 3, 2]}' placeholder=&quot;+1 ___ ___ __&quot;&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Date -->
          <section id="input-formatter-date" class="docs-section position-relative z-3 pb-sm-2 mb-5">
            <h4>Date</h4>
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
                    <div style="max-width: 400px">
                      <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="text" class="form-control" id="date" data-input-format='{"date": true, "delimiter": "-", "datePattern": ["Y", "m", "d"]}' placeholder="yyyy-mm-dd">
                      </div>
                      <label for="date-short" class="form-label">Date short</label>
                      <input type="text" class="form-control" id="date-short" data-input-format='{"date": true, "datePattern": ["m", "y"]}' placeholder="mm/yy">
                    </div>
                  </div>
                  <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#input-formatter-date-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="input-formatter-date-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Input text formatted as a full date  --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;date&quot; class=&quot;form-label&quot;&gt;Date&lt;/label&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;date&quot; data-input-format='{&quot;date&quot;: true, &quot;delimiter&quot;: &quot;-&quot;, &quot;datePattern&quot;: [&quot;Y&quot;, &quot;m&quot;, &quot;d&quot;]}' placeholder=&quot;yyyy-mm-dd&quot;&gt;
&lt;/div&gt;

&lt;!-- Input text formatted as a short date  --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;date-short&quot; class=&quot;form-label&quot;&gt;Date short&lt;/label&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;date-short&quot; data-input-format='{&quot;date&quot;: true, &quot;datePattern&quot;: [&quot;m&quot;, &quot;y&quot;]}' placeholder=&quot;mm/yy&quot;&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Time -->
          <section id="input-formatter-time" class="docs-section pb-sm-2 mb-5">
            <h4>Time</h4>
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
                    <div style="max-width: 400px">
                      <label for="time" class="form-label">Time</label>
                      <input type="text" class="form-control" id="time" data-input-format='{"time": true, "timePattern": ["h", "m"]}' placeholder="hh:mm">
                    </div>
                  </div>
                  <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#input-formatter-time-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="input-formatter-time-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Input text formatted as a time --&gt;
&lt;label for=&quot;time&quot; class=&quot;form-label&quot;&gt;Time&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;time&quot; data-input-format='{&quot;time&quot;: true, &quot;timePattern&quot;: [&quot;h&quot;, &quot;m&quot;]}' placeholder=&quot;hh:mm&quot;&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Custom blocks -->
          <section id="input-formatter-custom" class="docs-section pb-sm-2 mb-5">
            <h4>Custom blocks</h4>
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
                    <div style="max-width: 400px">
                      <label for="custom" class="form-label">Custom blocks</label>
                      <input type="text" class="form-control" id="custom" data-input-format='{"blocks": [4, 3, 3, 4, 2], "delimiters": [".", " ", "/", "-"]}' placeholder="blocks:[4, 3, 3, 4, 2], delimiters: ['.', ' ', '/', '-']">
                    </div>
                  </div>
                  <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#input-formatter-custom-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="input-formatter-custom-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Custom input text format --&gt;
&lt;label for=&quot;custom&quot; class=&quot;form-label&quot;&gt;Custom blocks&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;custom&quot; data-input-format='{&quot;blocks&quot;: [4, 3, 3, 4, 2], &quot;delimiters&quot;: [&quot;.&quot;, &quot; &quot;, &quot;/&quot;, &quot;-&quot;]}' placeholder=&quot;blocks:[4, 3, 3, 4, 2], delimiters: ['.', ' ', '/', '-']&quot;&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Prefix and uppercase -->
          <section id="input-formatter-prefix" class="docs-section">
            <h4>Prefix and uppercase</h4>
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
                    <div style="max-width: 400px">
                      <label for="prefix" class="form-label">Prefix + uppercase</label>
                      <input type="text" class="form-control" id="prefix" data-input-format='{"prefix": "PREFIX", "delimiter": "-", "blocks": [6, 4, 5, 3], "uppercase": true}'>
                    </div>
                  </div>
                  <div id="html-6" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#input-formatter-prefix-code">
                        <i class="fi-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="input-formatter-prefix-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!--  Input text formatted as uppercase with default prefix --&gt;
&lt;label for=&quot;prefix&quot; class=&quot;form-label&quot;&gt;Prefix + uppercase&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;prefix&quot; data-input-format='{&quot;prefix&quot;: &quot;PREFIX&quot;, &quot;delimiter&quot;: &quot;-&quot;, &quot;blocks&quot;: [6, 4, 5, 3], &quot;uppercase&quot;: true}'&gt;</code></pre>
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
    <script src="assets/vendor/cleave.js/dist/cleave.min.js"></script>

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
