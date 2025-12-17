<!-- ======================================================
     2 NAVBAR
     ====================================================== -->
<nav class="navbar">

  <!-- Logo -->
  <a class="navbar__logo" href="{{ url('/') }}" aria-label="Ir a Inicio">
    <img class="navbar__logo-img" src="/img/cuadro rojo.jpg" alt="Logo">
  </a>

  <!-- Botón abrir (solo móvil) -->
  <button class="navbar__toggle-open" type="button" aria-label="Abrir menú">☰</button>

  <!-- Links -->
  <ul class="navbar__links">

    <!-- Header del menú lateral (solo móvil) -->
    <li class="navbar__mobile-header">
      <span class="navbar__mobile-title">Menu</span>
      <button class="navbar__toggle-close" type="button" aria-label="Cerrar menú">☰</button>
    </li>

    <!-- Rutas (mejor con url() o route()) -->
    <li><a class="navbar__link" href="{{ url('/') }}">Inicio</a></li>
    <li><a class="navbar__link" href="{{ url('/productos') }}">Productos</a></li>
    <li><a class="navbar__link" href="{{ url('/perfil') }}">Perfil</a></li>
    <li><a class="navbar__link" href="{{ url('/estado') }}">Estado de Cuenta</a></li>
  </ul>

  <!-- Usuario (dropdown)-->
  <div class="userMenu">
  <button class="userMenu__btn" type="button" aria-label="Abrir menú de usuario" aria-expanded="false">
    <img class="navbar__user-img" src="/img/cuadro rojo.jpg" alt="Usuario">
  </button>

  <div class="userMenu__dropdown" role="menu" aria-label="Opciones de usuario">
    <a class="userMenu__item" role="menuitem" href="{{ url('/administrar') }}">Administrar</a>
    <a class="userMenu__item" role="menuitem" href="{{ url('/') }}">Salir</a>
  </div>
</div

  <!-- Overlay (solo móvil cuando abre) -->
  <div class="navbar__overlay"></div>

</nav>