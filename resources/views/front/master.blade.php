<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ycezz.site</title>

    @stack('before-styles')
    <link href="{{ asset('output.css') }}" rel="stylesheet" />
    
    <!-- Alpine JS -->
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap"
      rel="stylesheet"
    />

    <!-- Fontawesome -->
    <script
      src="https://kit.fontawesome.com/d014f0b29d.js"
      crossorigin="anonymous"
    ></script>
    @stack('after-styles')
  </head>

  <body
class="bg-white font-space text-base text-[#1B2E35] lg:text-xl"
x-data="{ openMenu : false }"
>
    @yield('content')
  </body>

</html>