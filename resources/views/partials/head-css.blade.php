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