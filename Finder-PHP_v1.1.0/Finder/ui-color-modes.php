<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <title>Finder Docs | Color modes (Light/Dark)</title>

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
                    <div class="dropend">
                      <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="ui-colors.php">
                        Colors
                        <span class="visually-hidden">grayscale primary secondary info warning success danger dark light</span>
                      </a>
                    </div>
                    <div class="dropdown">
                      <span class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3 pe-none active">
                        Color modes (Light/Dark)
                        <span class="visually-hidden">themes</span>
                      </span>
                      <ul id="anchorNav" class="nav nav-underline flex-column border-start ms-2 my-2" style="gap: .25rem;">
                        <li class="nav-item"><a class="nav-link fw-normal" href="#only-light-mode">Only Light mode, removing Dark mode entirely</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#only-dark-mode">Only Dark mode, disabling the Light mode option</a></li>
                        <li class="nav-item"><a class="nav-link fw-normal" href="#default-dark-mode">Setting Dark mode as the default</a></li>
                      </ul>
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
            <h1 class="pt-1 mb-2">Color modes (Light/Dark)</h1>
          </section>


          <!-- Page content -->
          <section class="mb-3">
            <p>Finder supports both Light and Dark color modes (commonly referred to as themes). Users can seamlessly switch between these modes using the theme switcher. However, there may be instances when:</p>
            <ol>
              <li>You require only one mode, either Light or Dark.</li>
              <li>You want the Dark mode to be the default setting.</li>
            </ol>
            <p class="pb-4 mb-sm-4">Let's explore these scenarios in detail and discuss how to effectively manage them.</p>


            <!-- Only Light mode -->
            <section class="docs-section pb-sm-2 mb-5" id="only-light-mode">
              <h2 class="h3 mb-sm-4">Only Light mode, removing Dark mode entirely</h2>
              <ol class="gap-4 m-0">
                <li>
                  <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Clear browser local storage:</span> Begin by clearing the browser's local storage to remove any saved theme variables. In the Chrome browser, this can be done through the Application panel.</span>
                  <div class="ratio" style="max-width: 577px; --fn-aspect-ratio: calc(364 / 575 * 100%)">
                    <img src="assets/img/docs/local-storage.png" class="border rounded" alt="Chrome local storage">
                  </div>
                </li>
                <li>
                  <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Remove mode-switching code:</span> Remove the link to the mode-switching JavaScript code from the <code>&lt;head&gt;</code> section of your HTML document. Refer to the code snippet below for guidance.</span>
                  <pre class="code-highlight border" style="max-width: 577px"><code class="language-html">&lt;!-- Theme switcher (color modes) --&gt;
&lt;script src=&quot;assets/js/theme-switcher.js&quot;&gt;&lt;/script&gt;</code></pre>
                </li>
                <li>
                  <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Remove theme switcher markup:</span> Delete the theme (color mode) switcher markup from the <code>navbar</code>. See the code snippet below for details.</span>
                  <pre class="code-highlight border"><code class="language-html">&lt;!-- Theme switcher (light/dark/auto) --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;theme-switcher btn btn-icon btn-secondary fs-lg rounded-circle animate-scale&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-display=&quot;dynamic&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle theme (light)&quot;&gt;
    &lt;span class=&quot;theme-icon-active d-flex animate-target&quot;&gt;
      &lt;i class=&quot;fi-sun&quot;&gt;&lt;/i&gt;
    &lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class=&quot;dropdown-menu start-50 translate-middle-x&quot; style=&quot;--fn-dropdown-min-width: 9rem; --fn-dropdown-spacer: .5rem&quot;&gt;
    &lt;li&gt;
      &lt;button type=&quot;button&quot; class=&quot;dropdown-item active&quot; data-bs-theme-value=&quot;light&quot; aria-pressed=&quot;true&quot;&gt;
        &lt;span class=&quot;theme-icon d-flex fs-base me-2&quot;&gt;
          &lt;i class=&quot;fi-sun&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;span class=&quot;theme-label&quot;&gt;Light&lt;/span&gt;
        &lt;i class=&quot;item-active-indicator fi-check ms-auto&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;button type=&quot;button&quot; class=&quot;dropdown-item&quot; data-bs-theme-value=&quot;dark&quot; aria-pressed=&quot;false&quot;&gt;
        &lt;span class=&quot;theme-icon d-flex fs-base me-2&quot;&gt;
          &lt;i class=&quot;fi-moon&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;span class=&quot;theme-label&quot;&gt;Dark&lt;/span&gt;
        &lt;i class=&quot;item-active-indicator fi-check ms-auto&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;button type=&quot;button&quot; class=&quot;dropdown-item&quot; data-bs-theme-value=&quot;auto&quot; aria-pressed=&quot;false&quot;&gt;
        &lt;span class=&quot;theme-icon d-flex fs-base me-2&quot;&gt;
          &lt;i class=&quot;fi-auto&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;span class=&quot;theme-label&quot;&gt;Auto&lt;/span&gt;
        &lt;i class=&quot;item-active-indicator fi-check ms-auto&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </li>
                <li>
                  <span class="text-body-emphasis fw-semibold">Disable dark mode styles:</span> Set the <code>$enable-dark-mode</code> variable to false inside <code>assets/scss/_user-variables.scss</code>. Once compiled, the CSS will no longer include dark mode styles.
                </li>
              </ol>
            </section>


            <!-- Only Dark mode -->
            <section class="docs-section pb-sm-2 pb-md-3 mb-5" id="only-dark-mode">
              <h2 class="h3 mb-sm-4">Only Dark mode, disabling the Light mode option</h2>
              <ol class="gap-4 m-0">
                <li>
                  <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Clear browser local storage:</span> Begin by clearing the browser's local storage to remove any saved theme variables. In the Chrome browser, this can be done through the Application panel.</span>
                  <img src="assets/img/docs/local-storage.png" class="border rounded" width="577" alt="Chrome local storage">
                </li>
                <li>
                  <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Set default to dark mode:</span> Set the <code>data-bs-theme</code> attribute to "dark" on the <code>&lt;html&gt;</code> tag to ensure the webpage loads in dark mode by default.</span>
                  <pre class="code-highlight border" style="max-width: 577px"><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot; data-bs-theme=&quot;dark&quot;&gt;
  ...
&lt;/html&gt;</code></pre>
                </li>
                <li>
                  <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Remove mode-switching code:</span> Remove the link to the mode-switching JavaScript code from the <code>&lt;head&gt;</code> section of your HTML document. Refer to the code snippet below for guidance.</span>
                  <pre class="code-highlight border" style="max-width: 577px"><code class="language-html">&lt;!-- Theme switcher (color modes) --&gt;
&lt;script src=&quot;assets/js/theme-switcher.js&quot;&gt;&lt;/script&gt;</code></pre>
                </li>
                <li>
                  <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Remove theme switcher markup:</span> Delete the theme (color mode) switcher markup from the <code>navbar</code>. See the code snippet below for details.</span>
                  <pre class="code-highlight border"><code class="language-html">&lt;!-- Theme switcher (light/dark/auto) --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;theme-switcher btn btn-icon btn-secondary fs-lg rounded-circle animate-scale&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-display=&quot;dynamic&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle theme (light)&quot;&gt;
    &lt;span class=&quot;theme-icon-active d-flex animate-target&quot;&gt;
      &lt;i class=&quot;fi-sun&quot;&gt;&lt;/i&gt;
    &lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class=&quot;dropdown-menu start-50 translate-middle-x&quot; style=&quot;--fn-dropdown-min-width: 9rem; --fn-dropdown-spacer: .5rem&quot;&gt;
    &lt;li&gt;
      &lt;button type=&quot;button&quot; class=&quot;dropdown-item active&quot; data-bs-theme-value=&quot;light&quot; aria-pressed=&quot;true&quot;&gt;
        &lt;span class=&quot;theme-icon d-flex fs-base me-2&quot;&gt;
          &lt;i class=&quot;fi-sun&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;span class=&quot;theme-label&quot;&gt;Light&lt;/span&gt;
        &lt;i class=&quot;item-active-indicator fi-check ms-auto&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;button type=&quot;button&quot; class=&quot;dropdown-item&quot; data-bs-theme-value=&quot;dark&quot; aria-pressed=&quot;false&quot;&gt;
        &lt;span class=&quot;theme-icon d-flex fs-base me-2&quot;&gt;
          &lt;i class=&quot;fi-moon&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;span class=&quot;theme-label&quot;&gt;Dark&lt;/span&gt;
        &lt;i class=&quot;item-active-indicator fi-check ms-auto&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;button type=&quot;button&quot; class=&quot;dropdown-item&quot; data-bs-theme-value=&quot;auto&quot; aria-pressed=&quot;false&quot;&gt;
        &lt;span class=&quot;theme-icon d-flex fs-base me-2&quot;&gt;
          &lt;i class=&quot;fi-auto&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;span class=&quot;theme-label&quot;&gt;Auto&lt;/span&gt;
        &lt;i class=&quot;item-active-indicator fi-check ms-auto&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </li>
              </ol>
            </section>


            <!-- Default Dark mode -->
            <section class="docs-section" id="default-dark-mode">
              <h2 class="h3 mb-sm-4">Setting Dark mode as the default</h2>
              <ol class="gap-4 m-0">
                <li>
                  <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Clear browser local storage:</span> Begin by clearing the browser's local storage to remove any saved theme variables. In the Chrome browser, this can be done through the Application panel.</span>
                  <img src="assets/img/docs/local-storage.png" class="border rounded" width="577" alt="Chrome local storage">
                </li>
                <li>
                  <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Set default to dark mode:</span> Set the <code>data-bs-theme</code> attribute to "dark" on the <code>&lt;html&gt;</code> tag to ensure the webpage loads in dark mode by default.</span>
                  <pre class="code-highlight border" style="max-width: 577px"><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot; data-bs-theme=&quot;dark&quot;&gt;
  ...
&lt;/html&gt;</code></pre>
                </li>
                <li>
                  <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Update theme switcher markup:</span> Modify the theme (color mode) switcher markup slightly to ensure that dark mode is selected by default. Refer to the code snippet below for guidance.</span>
                  <pre class="code-highlight border"><code class="language-html">&lt;!-- Theme switcher (light/dark/auto). Set "dark" by default --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;theme-switcher btn btn-icon btn-secondary fs-lg rounded-circle animate-scale&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-display=&quot;dynamic&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle theme (dark)&quot;&gt;
    &lt;span class=&quot;theme-icon-active d-flex animate-target&quot;&gt;
      &lt;i class=&quot;fi-moon&quot;&gt;&lt;/i&gt;
    &lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class=&quot;dropdown-menu start-50 translate-middle-x&quot; style=&quot;--fn-dropdown-min-width: 9rem; --fn-dropdown-spacer: .5rem&quot;&gt;
    &lt;li&gt;
      &lt;button type=&quot;button&quot; class=&quot;dropdown-item&quot; data-bs-theme-value=&quot;light&quot; aria-pressed=&quot;false&quot;&gt;
        &lt;span class=&quot;theme-icon d-flex fs-base me-2&quot;&gt;
          &lt;i class=&quot;fi-sun&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;span class=&quot;theme-label&quot;&gt;Light&lt;/span&gt;
        &lt;i class=&quot;item-active-indicator fi-check ms-auto&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;button type=&quot;button&quot; class=&quot;dropdown-item active&quot; data-bs-theme-value=&quot;dark&quot; aria-pressed=&quot;true&quot;&gt;
        &lt;span class=&quot;theme-icon d-flex fs-base me-2&quot;&gt;
          &lt;i class=&quot;fi-moon&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;span class=&quot;theme-label&quot;&gt;Dark&lt;/span&gt;
        &lt;i class=&quot;item-active-indicator fi-check ms-auto&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;button type=&quot;button&quot; class=&quot;dropdown-item&quot; data-bs-theme-value=&quot;auto&quot; aria-pressed=&quot;false&quot;&gt;
        &lt;span class=&quot;theme-icon d-flex fs-base me-2&quot;&gt;
          &lt;i class=&quot;fi-auto&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;span class=&quot;theme-label&quot;&gt;Auto&lt;/span&gt;
        &lt;i class=&quot;item-active-indicator fi-check ms-auto&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                </li>
                <li>
                  <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Update default mode in theme switcher JS code:</span> Modify the <code>assets/js/theme-switcher.js</code> file to set "dark" mode as the default. This change ensures that the website initializes in dark mode when first loaded. Refer to the code snippet below for guidance.</span>
                  <pre class="code-highlight border"><code class="language-js">/**
* Switch between light and dark themes (color modes)
* Copyright 2025 Coderthemes
*/

;(() =&gt; {
  'use strict'

  const getStoredTheme = () =&gt; localStorage.getItem('theme')
  const setStoredTheme = (theme) =&gt; localStorage.setItem('theme', theme)

  const getPreferredTheme = () =&gt; {
    const storedTheme = getStoredTheme()
    if (storedTheme) {
      return storedTheme
    }

    // Set default theme to 'dark'.
    // Possible options: 'light' or system color mode (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light')
    return 'dark'
  }

  // ... rest of the code</code></pre>
                </li>
              </ol>
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
