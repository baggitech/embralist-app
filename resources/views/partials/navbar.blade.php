      <!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
      <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
        <div class="offcanvas-header py-3">
          <h5 class="offcanvas-title" id="navbarNavLabel">Browse Embralist</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pt-2 pb-4 py-lg-0 mx-lg-auto">
          <ul class="navbar-nav position-relative">

            <li class="nav-item py-lg-2 me-lg-n1 me-xl-0">
              <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}" role="button">Home</a>
            </li>

            <li class="nav-item position-static py-lg-2 me-lg-n1 me-xl-0">
              <a class="nav-link {{ request()->routeIs('about.index') ? 'active' : '' }}" href="{{ route('about.index') }}" role="button">Quem somos</a>
            </li>

            <li class="nav-item py-lg-2 me-lg-n1 me-xl-0">
              <a class="nav-link " href="#" role="button">Account</a>
            </li>

            <li class="nav-item py-lg-2 me-lg-n1 me-xl-0">
              <a class="nav-link {{ request()->routeIs('faq.index') ? 'active' : '' }}" href="{{ route('faq.index') }}" role="button">Dúvidas Frequentes</a>
            </li>

            <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
              <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}" role="button">Contato</a>
            </li>

          </ul>
        </div>
      </nav>