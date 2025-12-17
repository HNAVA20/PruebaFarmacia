<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="{{ asset('js/app.js') }}" defer></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <title>@yield('title', 'Inicio')</title>

  @stack('head')
</head>

<body class="@yield('body_class', '')">

  @include('partials.navbar')

  {{-- CONTENIDO DE CADA VISTA --}}
  @yield('content')

  {{-- FOOTER OPCIONAL (NO se muestra si la vista define "no_footer") --}}
  @unless(View::hasSection('no_footer'))
    @include('partials.footer')
  @endunless

  @stack('scripts')
</body>
</html>
