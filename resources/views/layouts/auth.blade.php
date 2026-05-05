<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>
    <?php $title = "Account - Sign Up"; ?>
    
  <meta charset="utf-8">

  <!-- Viewport -->
  <meta name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

  <!-- SEO Meta Tags -->
  <title>Finder | <?php echo $title ?></title>
  <meta name="description" content="Finder - Directory & Listings Bootstrap HTML Template">
  <meta name="keywords"
      content="directory, listings, search, car dealer, real estate, city guide, business listings, medical directories, event listings, e-commerce, market, multipurpose, ui kit, light and dark mode, bootstrap, html5, css3, javascript, gallery, slider, mobile, pwa">
  <meta name="author" content="Coderthemes">

  <!-- Webmanifest + Favicon / App icons -->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="manifest" href="manifest.json">
  <link rel="icon" type="image/png" href="assets/app-icons/icon-32x32.png" sizes="32x32">
  <link rel="apple-touch-icon" href="assets/app-icons/icon-180x180.png">

  <!-- Vendor styles -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">

  <!-- Theme switcher (color modes) -->
  <script src="{{ asset('assets/js/theme-switcher.js') }}"></script>

  <!-- Preloaded local web font (Inter) -->
  <link rel="preload" href="{{ asset('assets/fonts/inter-variable-latin.woff2') }}" as="font" type="font/woff2" crossorigin>

  <!-- Font icons -->
  <link rel="preload" href="{{ asset('assets/icons/finder-icons.woff2') }}" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="{{ asset('assets/icons/finder-icons.min.css') }}">

  <!-- Bootstrap + Theme styles -->
  <link rel="preload" href="{{ asset('assets/css/theme.min.css') }}" as="style">
  <link rel="preload" href="{{ asset('assets/css/theme.rtl.min.css') }}" as="style">
  <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" id="theme-styles">

  @vite(['resources/scss/app.scss'])

</head>


<!-- Body -->

<body>
    <main class="content-wrapper w-100 px-3 ps-lg-5 pe-lg-4 mx-auto" style="max-width: 1920px">
        <div class="d-lg-flex">
            <!-- Login form + Footer -->
            <div class="d-flex flex-column min-vh-100 w-100 py-4 mx-auto" style="max-width: 416px">

                <!-- Logo -->
                <header class="navbar px-0 pb-4 mt-n2 mt-sm-0 mb-2 mb-md-3 mb-lg-4">
                    <a class="navbar-brand pt-0" href="{{ route('login') }}">
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
                        Ebralist
                    </a>
                </header>
                <!-- Page content -->
                @yield('content')


                <!-- Footer -->
                <footer class="mt-auto">
                    <div class="nav mb-4">
                        <a class="nav-link text-decoration-underline p-0" href="help-topics-v1.php">Precisa de ajuda?</a>
                    </div>
                    <p class="fs-xs mb-0">
                        &copy; Todos os direitos reservados. Feito por <a class="hover-effect-underline text-dark-emphasis text-decoration-none" href="https://1.envato.market/coderthemes" target="_blank" rel="noreferrer">Baggitech</a>
                    </p>
                </footer>
            </div>

        </div>
    </main>

  <!-- Vendor scripts -->
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>  

  <!-- Bootstrap + Theme scripts -->
  <script src="{{ asset('assets/js/theme.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/list.js/dist/list.min.js') }}"></script>

  @vite(['resources/js/app.js'])


</body>

</html>
