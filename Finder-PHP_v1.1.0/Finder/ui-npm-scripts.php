<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
  <title>Finder Docs | Npm commands (Scripts)</title>

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

<body>

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
                  <div class="dropdown">
                    <span class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3 pe-none active">
                      Npm commands (Scripts)
                      <span class="visually-hidden">dev build styles:compile styles:minify scripts:compile scripts:minify icon-font vendor validate watch dist</span>
                    </span>
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
        <section class="py-2 pb-4">
          <span class="badge d-inline-flex align-items-center text-success bg-success-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Getting started</span>
          <h1 class="py-1 pb-sm-0 mb-sm-4">Npm commands (Scripts)</h1>
          <p class="mb-0">Npm scripts help with performing repetitive tasks such as minification, compilation, unit testing, linting, etc. The Finder build system utilizes a collection of JavaScript files, each dedicated to specific tasks. These tasks are orchestrated by corresponding npm scripts that efficiently execute the files as required.</p>
        </section>


        <!-- Page content -->
        <section class="mb-3">
          <h2 class="h5 pb-1 pb-sm-0 mb-sm-4">List of available Npm commands (Scripts)</h2>
          <div class="table-responsive">
            <table class="table table-bordered mb-0" style="min-width: 600px">
              <thead>
                <tr>
                  <th scope="col">Command</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>
                <tr class="align-middle">
                  <td><kbd class="fw-medium text-nowrap">npm install</kbd></td>
                  <td>This command installs all the Node.js packages and their dependencies specified in the project's <code>package.json</code> file, located in the root directory. It includes packages listed under both <code>dependencies</code> and <code>devDependencies</code> objects.</td>
                </tr>
                <tr class="align-middle">
                  <td><kbd class="fw-medium text-nowrap">npm run dev</kbd></td>
                  <td>This command builds and minifies CSS and JavaScript, generates an icon font from SVG icons, copies vendor files from the <code>node_modules</code> directory to the <code>assets/vendor</code> folder, initiates a watch process to monitor file changes, and starts a local development server with hot reloading. It is the primary command used when customizing the template.</td>
                </tr>
                <tr class="align-middle">
                  <td><kbd class="fw-medium text-nowrap">npm run build</kbd></td>
                  <td>This command conducts a series of operations to prepare the project for production: it builds and minifies CSS and JavaScript; generates an icon font from SVG icons; copies vendor files from the <code>node_modules</code> directory to the <code>assets/vendor</code> folder. The command also validates HTML files against W3C standards and creates a distribution folder (<code>dist</code>). It then copies all necessary assets into this folder, including HTML files, and updates links to vendor files within the copied HTML files.</td>
                </tr>
                <tr class="align-middle">
                  <td><kbd class="fw-medium text-nowrap">npm run styles</kbd></td>
                  <td>This command executes the following two style-related commands sequentially: <code>styles:compile</code> and <code>styles:minify</code></td>
                </tr>
                <tr class="align-middle">
                  <td><kbd class="fw-medium text-nowrap">npm run styles:compile</kbd></td>
                  <td>This command first lints SCSS files to ensure they adhere to Bootstrap coding standards. It then compiles the SCSS file located at <code>src/scss/theme.scss</code> into a CSS file at <code>assets/css/theme.css</code>, and generates a corresponding source map file. The source map facilitates easier debugging by mapping the CSS styles back to their original SCSS sources.</td>
                </tr>
                <tr class="align-middle">
                  <td><kbd class="fw-medium text-nowrap">npm run styles:minify</kbd></td>
                  <td>This command minifies the compiled CSS files, reducing their file size for better performance in production environments. It targets CSS files located in the <code>assets/css</code> folder, optimizing them for faster loading times.</td>
                </tr>
                <tr class="align-middle">
                  <td><kbd class="fw-medium text-nowrap">npm run styles-rtl</kbd></td>
                  <td>This command runs three tasks sequentially to handle Right-to-Left (RTL) styles: <code>styles:compile</code>, <code>styles:rtl</code>, and <code>styles:minify-rtl</code>. This facilitates support for languages read from right to left by adjusting the styling accordingly.</td>
                </tr>
                <tr class="align-middle">
                  <td><kbd class="fw-medium text-nowrap">npm run styles:rtl</kbd></td>
                  <td>This command converts the compiled <code>theme.css</code> file into RTL format, producing an output file named <code>theme.rtl.css</code> along with an associated map file.</td>
                </tr>
                <tr class="align-middle">
                  <td><kbd class="fw-medium text-nowrap">npm run styles:minify-rtl</kbd></td>
                  <td>This command minifies the RTL-converted CSS files, reducing their file size for better performance in production environments.</td>
                </tr>
                <tr class="align-middle">
                  <td><kbd class="fw-medium text-nowrap">npm run scripts</kbd></td>
                  <td>This command executes the following two scripts-related commands sequentially: <code>scripts:compile</code> and <code>scripts:minify</code></td>
                </tr>
                <tr class="align-middle">
                  <td><kbd class="fw-medium text-nowrap">npm run scripts:compile</kbd></td>
                  <td>This command first lints the source JavaScript files from <code>src/js</code> directory to ensure code quality. It then bundles them into a single file <code>assets/theme.js</code> and generates a corresponding source map file. The source map aids in debugging by mapping the bundled JavaScript back to its original source files.</td>
                </tr>
                <tr class="align-middle">
                  <td><kbd class="fw-medium text-nowrap">npm run scripts:minify</kbd></td>
                  <td>This command minifies and uglifies the <code>assets/js/theme.js</code> file, generating <code>assets/js/theme.min.js</code>, reducing its size and obfuscating the code for improved performance and security. It also generates an associated source map file to assist in debugging the minified JavaScript.</td>
                </tr>
                <tr class="align-middle">
                  <td><kbd class="fw-medium text-nowrap">npm run icon-font</kbd></td>
                  <td>This command executes a script that creates the <code>finder-icons.woff2</code> font file and generates the corresponding <code>finder-icons.min.css</code> file from a collection of .svg icons located in the <code>src/icons</code> directory.</td>
                </tr>
                <tr class="align-middle">
                  <td><kbd class="fw-medium text-nowrap">npm run vendor</kbd></td>
                  <td>This command copies vendor files listed under the <code>dependencies</code> object in the <code>package.json</code> file from the <code>node_modules</code> directory to the <code>assets/vendor</code> folder.</td>
                </tr>
                <tr class="align-middle">
                  <td><kbd class="fw-medium text-nowrap">npm run validate</kbd></td>
                  <td>This command executes validation checks on all <code>.php</code> files, ensuring compliance with W3C markup validity rules.</td>
                </tr>
                <tr class="align-middle">
                  <td><kbd class="fw-medium text-nowrap">npm run watch</kbd></td>
                  <td>This command initiates a watch process to monitor changes in <code>.css</code>, <code>.js</code>, and <code>.php</code> files, simultaneously launching a local development server equipped with hot reloading.</td>
                </tr>
                <tr class="align-middle">
                  <td><kbd class="fw-medium text-nowrap">npm run dist</kbd></td>
                  <td>The command creates a distribution folder (<code>dist</code>) and proceeds to copy all essential assets into this folder, including HTML files, and updates links to vendor files within the copied HTML files.</td>
                </tr>
                <tr class="align-middle">
                  <td><kbd class="fw-medium text-nowrap">php -S 127.0.0.1:8000</kbd></td>
                  <td>The command runs development server.</td>
                </tr>
              </tbody>
            </table>
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
        <rect x=".75" y=".75" width="60.5" height="30.5" rx="15.25" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" />
      </svg>
    </a>
    <a class="btn btn-sm btn-outline-secondary text-uppercase bg-body rounded-pill shadow animate-rotate ms-2 me-n5" href="#customizer" style="font-size: .625rem; letter-spacing: .05rem;" data-bs-toggle="offcanvas" role="button" aria-controls="customizer">
      Customize<i class="fi-settings fs-base ms-1 me-n2 animate-target"></i>
    </a>
  </div>


  <!-- Vendor scripts -->
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