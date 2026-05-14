<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
  <title>Embralist | @yield('title', 'Contractors')</title>
  <meta name="description" content="Embralist - Directory & Listings">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="icon" type="image/png" href="{{ asset('assets/app-icons/icon-32x32.png') }}" sizes="32x32">
  <link rel="apple-touch-icon" href="{{ asset('assets/app-icons/icon-180x180.png') }}">

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

  @yield('modal')

  @include('partials/header-contractors')

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
  <script src="{{ asset('assets/vendor/list.js/dist/list.min.js') }}"></script>

  @vite(['resources/js/app.js'])

</body>

</html>
