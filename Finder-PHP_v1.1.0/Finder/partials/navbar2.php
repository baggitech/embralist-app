    <!-- Navigation bar (Header) -->
    <header class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top z-fixed px-0" data-bs-theme="dark">
      <div class="container py-1 py-lg-2">
        <button type="button" class="navbar-toggler me-3" data-bs-toggle="offcanvas" data-bs-target="#sidebarNav" aria-controls="sidebarNav" aria-expanded="false" aria-label="Toggle sidebar navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand mx-auto mx-lg-0" href="index.php">
          <span class="d-flex flex-shrink-0 text-primary rtl-flip me-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34">
              <path d="M34.5 16.894v10.731c0 3.506-2.869 6.375-6.375 6.375H17.5h-.85C7.725 33.575.5 26.138.5 17c0-9.35 7.65-17 17-17s17 7.544 17 16.894z" fill="currentColor" />
              <g fill-rule="evenodd">
                <path d="M17.5 13.258c-3.101 0-5.655 2.554-5.655 5.655s2.554 5.655 5.655 5.655 5.655-2.554 5.655-5.655-2.554-5.655-5.655-5.655zm-9.433 5.655c0-5.187 4.246-9.433 9.433-9.433s9.433 4.246 9.433 9.433a9.36 9.36 0 0 1-1.569 5.192l2.397 2.397a1.89 1.89 0 0 1 0 2.671 1.89 1.89 0 0 1-2.671 0l-2.397-2.397a9.36 9.36 0 0 1-5.192 1.569c-5.187 0-9.433-4.246-9.433-9.433z" fill="#000" fill-opacity=".05" />
                <g fill="#fff">
                  <path d="M17.394 10.153c-3.723 0-6.741 3.018-6.741 6.741s3.018 6.741 6.741 6.741 6.741-3.018 6.741-6.741-3.018-6.741-6.741-6.741zM7.347 16.894A10.05 10.05 0 0 1 17.394 6.847 10.05 10.05 0 0 1 27.44 16.894 10.05 10.05 0 0 1 17.394 26.94 10.05 10.05 0 0 1 7.347 16.894z" />
                  <path d="M23.025 22.525c.645-.645 1.692-.645 2.337 0l3.188 3.188c.645.645.645 1.692 0 2.337s-1.692.645-2.337 0l-3.187-3.187c-.645-.646-.645-1.692 0-2.337z" />
                </g>
              </g>
              <path d="M23.662 14.663c2.112 0 3.825-1.713 3.825-3.825s-1.713-3.825-3.825-3.825-3.825 1.713-3.825 3.825 1.713 3.825 3.825 3.825z" fill="#fff" />
              <path fill-rule="evenodd" d="M23.663 8.429a2.41 2.41 0 0 0-2.408 2.408 2.41 2.41 0 0 0 2.408 2.408 2.41 2.41 0 0 0 2.408-2.408 2.41 2.41 0 0 0-2.408-2.408zm-5.242 2.408c0-2.895 2.347-5.242 5.242-5.242s5.242 2.347 5.242 5.242-2.347 5.242-5.242 5.242-5.242-2.347-5.242-5.242z" fill="currentColor" />
            </svg>
          </span>
          Finder
          <span class="badge text-primary bg-primary bg-opacity-10 fs-xs rounded-pill d-none d-lg-inline-block ms-2">v1.0.0</span>
        </a>
        <div id="navbarNav" class="offcanvas-lg offcanvas-end ms-auto" tabindex="-1" aria-labelledby="navbarNavLabel">
          <div class="offcanvas-header py-3">
            <h5 class="offcanvas-title" id="navbarNavLabel">Finder</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#navbarNav" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body pt-0">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="ui-installation.php">Docs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="typography.php">Components</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Live demo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://1.envato.market/coderthemes" target="_blank" rel="noreferrer">Support</a>
              </li>
            </ul>
          </div>
          <div class="offcanvas-header border-top">
            <a class="btn btn-primary w-100" href="https://1.envato.market/coderthemes" target="_blank" rel="noreferrer">
              <i class="fi-shopping-bag fs-base ms-n1 me-2"></i>
              Buy now
            </a>
          </div>
        </div>
        <div class="dropdown pe-lg-1 ms-lg-3">
          <button type="button" class="theme-switcher btn btn-icon btn-secondary fs-base rounded-circle animate-scale" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle theme (light)">
            <span class="theme-icon-active d-flex animate-target">
              <i class="fi-sun"></i>
            </span>
          </button>
          <ul class="dropdown-menu dropdown-menu-end" style="--fn-dropdown-spacer: .625rem; --fn-dropdown-min-width: 9rem">
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
        <button type="button" class="btn btn-icon btn-outline-secondary border-0 d-lg-none ms-2 me-n2" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navbar navigation">
          <i class="fi-more-horizontal fs-3"></i>
        </button>
        <a class="btn btn-primary animate-shake d-none d-lg-inline-flex ms-4" href="https://1.envato.market/coderthemes" target="_blank" rel="noreferrer">
          <i class="fi-shopping-bag fs-base animate-target ms-n1 me-2"></i>
          Buy now
        </a>
      </div>
    </header>