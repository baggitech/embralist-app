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
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle text-wrap pe-3" href="npm-scripts.php">
                                Npm commands (Scripts)
                                <span class="visually-hidden">dev build styles:compile styles:minify scripts:compile scripts:minify icon-font vendor validate watch dist</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="structure.php">
                                File structure
                                <span class="visually-hidden">project folders</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="configuration.php">
                                Configuration files
                                <span class="visually-hidden">package.json config.js babelrc browserslistrc editorconfig eslintrc gitignore htmlvalidate prettierignore prettierrc stylelintrc webmanifest manifest.json</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle text-wrap pe-3" href="pwa.php">
                                Progressive Web App (PWA)
                                <span class="visually-hidden">service worker manifest</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="web-font.php">
                                Web font(s)
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="icon-font.php">
                                Icon font
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="performance.php">
                                Performance: CLS &amp; Preload
                                <span class="visually-hidden">cumulative layout shift loading aspect-ratio</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="browser-support.php">
                                Browser support
                                <span class="visually-hidden">autoprefixer</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="rtl.php">Right-to-Left (RTL)</a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="deployment.php">
                                Deployment guide
                                <span class="visually-hidden">launch hosting publishing rollout go-live</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="credits.php">
                                Sources and credits
                                <span class="visually-hidden">resources plugins libraries frameworks assets</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="changelog.php">
                                Changelog
                                <span class="visually-hidden">updates</span>
                            </a>
                        </div>
                        <h3 class="h6 d-flex align-items-center border-top pt-4 pb-1 mt-3 mb-2">
                            <i class="fi-settings fs-lg text-primary me-2"></i>
                            Customize
                        </h3>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="options.php">
                                Global options
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="colors.php">
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
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="css-variables.php">
                                CSS variables
                            </a>
                        </div>
                        <h3 class="h6 d-flex align-items-center border-top pt-4 pb-1 mt-3 mb-2">
                            <i class="fi-file-text fs-lg text-secondary me-2"></i>
                            Content
                        </h3>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="typography.php">
                                Typography
                                <span class="visually-hidden">text font heading title paragraph list ordered unordered description blockquote quotation abbreviation</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="icons.php">Icons</a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="code.php">
                                Code
                                <span class="visually-hidden">pre kbd highlight</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="images.php">
                                Images &amp; figures
                                <span class="visually-hidden">thumbnails picture</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="tables.php">
                                Tables
                            </a>
                        </div>
                        <h3 class="h6 d-flex align-items-center border-top pt-4 pb-1 mt-3 mb-2">
                            <i class="fi-layers fs-lg text-info me-2"></i>
                            Components
                        </h3>
                        <div class="dropdown">
                            <span class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3 pe-none">
                                Accordion
                                <span class="visually-hidden">collapse</span>
                            </span>
                            <ul id="anchorNav" class="nav nav-underline flex-column border-start ms-2 my-2" style="gap: .25rem;">
                                <li class="nav-item"><a class="nav-link fw-normal" href="#accordion-basic">Basic example</a></li>
                                <li class="nav-item"><a class="nav-link fw-normal" href="#accordion-alt-icon">Alternative button icon</a></li>
                                <li class="nav-item"><a class="nav-link fw-normal" href="#accordion-icons">With icons</a></li>
                                <li class="nav-item"><a class="nav-link fw-normal" href="#accordion-sizing">Sizing</a></li>
                            </ul>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="alerts.php">
                                Alerts
                                <span class="visually-hidden">notification callout</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="badges.php">
                                Badges
                                <span class="visually-hidden">count indicator</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="blog-components.php">
                                Blog components
                                <span class="visually-hidden">post article</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="breadcrumb.php">
                                Breadcrumb
                                <span class="visually-hidden">navigation links</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="buttons.php">
                                Buttons
                                <span class="visually-hidden">navigation links</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="button-group.php">
                                Button group
                                <span class="visually-hidden">navigation link</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="card.php">
                                Card
                                <span class="visually-hidden">box container</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="carousel.php">
                                Carousel (Slider)
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="categories.php">
                                Categories
                                <span class="visually-hidden">listing directory filter links navigation cards</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="collapse.php">
                                Collapse
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="countdown.php">
                                Countdown
                                <span class="visually-hidden">timer</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="date-picker.php">
                                Date / time picker
                                <span class="visually-hidden">calendar form control input select</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="dropdowns.php">
                                Dropdowns
                                <span class="visually-hidden">navigation menu submenu overlay links dropend dropstart dropup</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="filter-widgets.php">
                                Filter widgets
                                <span class="visually-hidden">sidebar sort</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="forms.php">
                                Forms
                                <span class="visually-hidden">input select textarea checkbox radio range slider picker floating label validation control file switch quantity</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="image-comparison-slider.php">
                                Image comparison slider
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="input-group.php">
                                Input group
                                <span class="visually-hidden">form control select textarea addon</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="input-formatter.php">
                                Input text formatter
                                <span class="visually-hidden">form control mask</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="lightbox.php">
                                Lightbox (Gallery)
                                <span class="visually-hidden">popup modal overlay image picture video youtube vimeo iframe</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="list-group.php">
                                List group
                                <span class="visually-hidden">navigation links menu ordered unordered</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="listing-cards.php">
                                Listing cards
                                <span class="visually-hidden">product service item entry summary</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="map.php">
                                Map
                                <span class="visually-hidden">location directions</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="modal.php">
                                Modal
                                <span class="visually-hidden">dialog popup overlay lightbox</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="nav-links.php">
                                Nav links
                                <span class="visually-hidden">navigation menu links</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="navbar.php">
                                Navbar
                                <span class="visually-hidden">header navigation menu submenu links brand logo</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="offcanvas.php">
                                Offcanvas
                                <span class="visually-hidden">drawer overlay sidebar</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="pagination.php">
                                Pagination
                                <span class="visually-hidden">pager navigation links</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="pills.php">
                                Pills
                                <span class="visually-hidden">navigation links tabs</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="placeholders.php">
                                Placeholders
                                <span class="visually-hidden">loading loader</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="popovers.php">
                                Popovers
                                <span class="visually-hidden">tooltip overlay popup</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="pricing.php">
                                Pricing
                                <span class="visually-hidden">price cost subscription membership payment tier plan package</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="progress.php">
                                Progress
                                <span class="visually-hidden">bars status circular</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="reviews.php">
                                Reviews
                                <span class="visually-hidden">testimonials feedback stars rating</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="scrollbar.php">
                                Scrollbar
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="scrollspy.php">
                                Scrollspy
                                <span class="visually-hidden">anchor links navigation menu</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="select-box.php">
                                Select box
                                <span class="visually-hidden">tags choices input form multiple control</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="spinners.php">
                                Spinners
                                <span class="visually-hidden">loading loader</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="tabs.php">
                                Tabs
                                <span class="visually-hidden">navigation links underline</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="toasts.php">
                                Toasts
                                <span class="visually-hidden">notification overlay popup alert feedback</span>
                            </a>
                        </div>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="tooltips.php">
                                Tooltips
                                <span class="visually-hidden">overlay popup popover</span>
                            </a>
                        </div>
                        <h3 class="h6 d-flex align-items-center border-top pt-4 pb-1 mt-3 mb-2">
                            <i class="fi-tool fs-lg text-warning me-2"></i>
                            Utilities &amp; helpers
                        </h3>
                        <div class="dropend">
                            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="utilities.php">
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