<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
  <title>Embralist | @yield('title', 'Join Pro Network')</title>
  <meta name="description" content="Embralist - Join Pro Network">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="icon" type="image/png" href="{{ asset('assets/app-icons/icon-32x32.png') }}" sizes="32x32">

  @stack('styles')

  <script src="{{ asset('assets/js/theme-switcher.js') }}"></script>
  <link rel="preload" href="{{ asset('assets/fonts/inter-variable-latin.woff2') }}" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="{{ asset('assets/icons/finder-icons.woff2') }}" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="{{ asset('assets/icons/finder-icons.min.css') }}">
  <link rel="preload" href="{{ asset('assets/css/theme.min.css') }}" as="style">
  <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" id="theme-styles">

  @vite(['resources/scss/app.scss'])
</head>

<body>

  <!-- Navigation bar -->
  <header class="navbar navbar-expand-lg bg-body navbar-sticky sticky-top z-fixed px-0" data-sticky-element>
    <div class="container">
      <button type="button" class="navbar-toggler me-3 me-lg-0" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand py-1 py-md-2 py-xl-1 me-2 me-sm-n4 me-md-n5 me-lg-0" href="{{ route('contractors.index') }}">
        <span class="d-none d-sm-flex flex-shrink-0 text-primary rtl-flip me-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34">
            <path d="M34.5 16.894v10.731c0 3.506-2.869 6.375-6.375 6.375H17.5h-.85C7.725 33.575.5 26.138.5 17c0-9.35 7.65-17 17-17s17 7.544 17 16.894z" fill="currentColor" />
          </svg>
        </span>
        Embralist
      </a>

      @include('partials/navbar')

      <!-- Button group (no Join button) -->
      <div class="d-flex gap-sm-1">
        <div class="dropdown">
          <button type="button" class="theme-switcher btn btn-icon btn-outline-secondary fs-lg border-0 animate-scale"
            data-bs-toggle="dropdown" data-bs-display="dynamic" aria-expanded="false" aria-label="Toggle theme (light)">
            <span class="theme-icon-active d-flex animate-target"><i class="fi-sun"></i></span>
          </button>
          <ul class="dropdown-menu start-50 translate-middle-x" style="--fn-dropdown-min-width: 9rem; --fn-dropdown-spacer: .5rem">
            <li>
              <button type="button" class="dropdown-item active" data-bs-theme-value="light" aria-pressed="true">
                <span class="theme-icon d-flex fs-base me-2"><i class="fi-sun"></i></span>
                <span class="theme-label">Light</span>
                <i class="item-active-indicator fi-check ms-auto"></i>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item" data-bs-theme-value="dark" aria-pressed="false">
                <span class="theme-icon d-flex fs-base me-2"><i class="fi-moon"></i></span>
                <span class="theme-label">Dark</span>
                <i class="item-active-indicator fi-check ms-auto"></i>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item" data-bs-theme-value="auto" aria-pressed="false">
                <span class="theme-icon d-flex fs-base me-2"><i class="fi-auto"></i></span>
                <span class="theme-label">Auto</span>
                <i class="item-active-indicator fi-check ms-auto"></i>
              </button>
            </li>
          </ul>
        </div>

        @guest
        <a class="btn btn-icon btn-outline-secondary fs-lg border-0 animate-shake" href="{{ route('login') }}" aria-label="Sign in to account">
          <i class="fi-user animate-target"></i>
        </a>
        @endguest

        @auth
        <div class="dropdown">
          <a class="btn btn-icon hover-effect-scale position-relative bg-body-secondary border rounded-circle overflow-hidden"
            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="My account">
            <img src="{{ asset('assets/img/account/avatar-sm.jpg') }}"
              class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Avatar">
          </a>
          <ul class="dropdown-menu dropdown-menu-end" style="--fn-dropdown-spacer: .5rem">
            <li><span class="h6 dropdown-header">{{ auth()->user()->name }}</span></li>
            <li><a class="dropdown-item" href="{{ route('account.profile.index') }}"><i class="fi-user opacity-75 me-2"></i>Meu perfil</a></li>
            <li><a class="dropdown-item" href="{{ route('account.listings.index') }}"><i class="fi-layers opacity-75 me-2"></i>Meus anúncios</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="dropdown-item text-danger"><i class="fi-logout opacity-75 me-2"></i>Sair</button>
              </form>
            </li>
          </ul>
        </div>
        @endauth
      </div>
    </div>
  </header>

  @yield('content')

  @include('partials/footer2')

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
  </div>

  @stack('scripts')

  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/theme.min.js') }}"></script>

  @vite(['resources/js/app.js'])

</body>

</html>
