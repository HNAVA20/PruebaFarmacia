<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <title>Carrito</title>

  <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar">
    <a class="navbar__logo" href="{{ url('/') }}" aria-label="Ir a Inicio">
      <img class="navbar__logo-img" src="/img/cuadro rojo.jpg" alt="Logo">
    </a>

    <button class="navbar__toggle-open" type="button" aria-label="Abrir menú">☰</button>

    <ul class="navbar__links">
      <li class="navbar__mobile-header">
        <span class="navbar__mobile-title">Menu</span>
        <button class="navbar__toggle-close" type="button" aria-label="Cerrar menú">☰</button>
      </li>
      <li><a class="navbar__link" href="{{ url('/') }}">Inicio</a></li>
      <li><a class="navbar__link" href="{{ url('/productos') }}">Productos</a></li>
      <li><a class="navbar__link" href="{{ url('/perfil') }}">Perfil</a></li>
      <li><a class="navbar__link" href="{{ url('/estado-de-cuenta') }}">Estado de cuenta</a></li>
    </ul>

    <a class="navbar__user" href="#" aria-label="Iniciar sesión">
      <img class="navbar__user-img" src="/img/cuadro rojo.jpg" alt="Usuario">
    </a>

    <div class="navbar__overlay"></div>
  </nav>

  <!-- CONTENIDO -->
  <main class="cartPage" id="cartPage">

    <!-- Breadcrumb + cabecera -->
    <div class="cartPage__top">
      <div class="cartPage__crumbs">Carrito <span>></span> <a href="#">Realizar pedido</a></div>

      <div class="cartPage__heading">
        <span class="cartPage__cartIcon">🛒</span>
        <h1 class="cartPage__title">CARRITO DE COMPRAS</h1>
      </div>
    </div>

    <!-- Botón volver -->
    <a class="cartBackBtn" href="{{ url('/productos') }}">← Seguir comprando</a>

    <!-- Select all -->
    <label class="cartPage__selectAll">
      <input type="checkbox" id="cartSelectAll" checked>
      <span class="cartPage__checkBox"></span>
      <span>Seleccionar todos los artículos</span>
    </label>

    <!-- Layout: lista izquierda + resumen derecha -->
    <section class="cartLayout">
      <!-- LISTA ITEMS -->
      <div class="cartItems" id="cartItems"></div>

      <!-- RESUMEN -->
      <aside class="cartSummary">
        <h2 class="cartSummary__title">DATOS DEL PEDIDO</h2>

        <div class="cartSummary__row">
          <span>SubTotal</span>
          <strong id="cartSubtotal">$0.00</strong>
        </div>

        <div class="cartSummary__row">
          <span>Impuesto</span>
          <strong id="cartTax">$0.00</strong>
        </div>

        <div class="cartSummary__total">
          <span>Total</span>
          <strong id="cartTotal">$0.00</strong>
        </div>

        <button class="cartSummary__btn cartSummary__btn--primary" type="button" id="cartCheckoutBtn">
          REALIZAR PEDIDO
        </button>

        <button class="cartSummary__btn cartSummary__btn--danger" type="button" id="cartClearBtn">
          VACIAR CARRITO
        </button>
      </aside>
    </section>
  </main>

  <!-- ======================================================
       MODAL: CONFIRMACIÓN DE PEDIDO
       (sale al dar click en "REALIZAR PEDIDO")
       ====================================================== -->
  <div class="orderOk__backdrop" id="orderOkBackdrop" hidden></div>

  <section class="orderOk" id="orderOk" hidden aria-live="polite" aria-label="Confirmación de pedido">
    <button class="orderOk__close" id="orderOkClose" type="button" aria-label="Cerrar">×</button>

    <div class="orderOk__icon" aria-hidden="true">
      <svg viewBox="0 0 120 120">
        <circle cx="60" cy="60" r="48" fill="none" stroke="currentColor" stroke-width="6"/>
        <path d="M42 62 L55 75 L82 48" fill="none" stroke="currentColor" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>

    <h2 class="orderOk__title">CONFIRMACIÓN DE PEDIDO</h2>

    <p class="orderOk__text">
      Tu Pedido Se Ha Generado Con<br>
      El Número <strong id="orderOkNumber">#1234567890</strong>.<br>
      Puedes Revisar Su Estatus Desde<br>
      Tu Perfil
    </p>
  </section>

</body>
</html>
