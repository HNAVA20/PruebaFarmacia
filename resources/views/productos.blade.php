@extends('layouts.app')

@section('title', 'Productos')
@section('body_class', 'page-productos')

@section('content')

  <!-- ======================================================
       2) BANNER
       ====================================================== -->
  <section class="banner">
    <img class="banner__img" src="/img/cuadro rojo.jpg" alt="Banner">
  </section>

  <!-- ======================================================
       3) PROMO (BARRA VERDE)
       ====================================================== -->
  <section class="promo">
    <p class="promo__text">Productos</p>
  </section>

  <!-- ======================================================
       4) SHOPBAR (BUSCADOR + CATEGORÍAS + CARRITO)
       5) BREADCRUMBS
       ====================================================== -->
  <section class="shopbar">
    <div class="shopbar__row">
      <!-- Buscador -->
      <div class="shopbar__search">
        <span class="shopbar__searchIcon">🔎</span>
        <input class="shopbar__input" type="text" placeholder="Buscar..." />
      </div>

      <!-- Categorías + carrito -->
      <div class="shopbar__actions">
        <select class="shopbar__select">
          <option value="">Categorías</option>
          <option>Antibióticos</option>
          <option>Analgésicos</option>
          <option>Vitaminas</option>
        </select>

        <a class="shopbar__cart" href="{{ url('/carrito') }}" aria-label="Carrito">
          <span class="shopbar__cartIcon">🛒</span>
          <span class="shopbar__cartBadge">1</span>
        </a>
      </div>
    </div>

    <!-- Breadcrumbs -->
    <nav class="crumbs" aria-label="Breadcrumb">
      <a class="crumbs__link" href="{{ url('/') }}">Inicio</a>
      <span class="crumbs__sep">&gt;</span>
      <a class="crumbs__link" href="{{ url('/productos') }}">Productos</a>
      <span class="crumbs__sep">&gt;</span>
      <span class="crumbs__current">Todos</span>
    </nav>
  </section>

  <!-- ======================================================
       6) PRODUCTOS (GRID 8)
       ====================================================== -->
  <section class="products products--page">

    <x-product-card
      alt="Producto 1"
      badge="-5%"
      code="BEA381"
      qty="2,086 PZAS"
      title="GABAPENTINA 30 CAPS 300 MG"
      desc1="GABAPENTINA:"
      desc2="ANTICONVULSIVO"
      pl="$206.46"
      desc="80%"
      pu="$41.29"
      subtotal="$0.00"
      iva="0%"
      barcode="7501342803852"
    />

    <x-product-card
      alt="Producto 2"
      badge="-10%"
      code="BEA417"
      qty="8,008 PZAS"
      title="BUTILHIOSCINA 10 TAB 10 MG"
      desc1="BROMURO:"
      desc2="ANTIESPASMÓDICO"
      pl="$69.60"
      desc="80%"
      pu="$13.92"
      subtotal="$0.00"
      iva="0%"
      barcode="7501342804323"
    />

    <x-product-card
      alt="Producto 3"
      badge="-10%"
      code="BEA381"
      qty="2,086 PZAS"
      title="NEURONTIN 15 CAPS 300 MG"
      desc1="GABAPENTINA:"
      desc2="ANTICONVULSIVO"
      pl="$128.40"
      desc="80%"
      pu="$23.35"
      subtotal="$0.00"
      iva="0%"
      barcode="7501342803845"
    />

    <x-product-card
      alt="Producto 4"
      badge="-20%"
      code="BEA381"
      qty="168 PZAS"
      title="DEXTROMETO, GUAYFE, FENILE AD JBE C/100 ML"
      desc1="ANTITUSIVO"
      desc2="EXPECTORANTE"
      pl="$108.00"
      desc="80%"
      pu="$19.64"
      subtotal="$0.00"
      iva="0%"
      barcode="7501342803135"
    />

    <x-product-card alt="Producto 5" />
    <x-product-card alt="Producto 6" badge="-10%" code="BEA417" qty="8,008 PZAS" title="BUTILHIOSCINA 10 TAB 10 MG" desc1="BROMURO:" desc2="ANTIESPASMÓDICO" pl="$69.60" desc="80%" pu="$13.92" barcode="7501342804323" />
    <x-product-card alt="Producto 7" badge="-10%" title="NEURONTIN 15 CAPS 300 MG" pl="$128.40" pu="$23.35" barcode="7501342803845" />
    <x-product-card alt="Producto 8" badge="-20%" title="DEXTROMETO, GUAYFE, FENILE AD JBE C/100 ML" pl="$108.00" pu="$19.64" barcode="7501342803135" />

  </section>

  <!-- ======================================================
       7) PAGINACIÓN
       ====================================================== -->
  <nav class="pager" aria-label="Paginación">
    <button class="pager__btn" type="button" aria-label="Primera">«</button>
    <button class="pager__btn" type="button" aria-label="Anterior">‹</button>

    <button class="pager__dot" type="button"></button>
    <button class="pager__dot is-active" type="button"></button>
    <button class="pager__dot" type="button"></button>
    <button class="pager__dot" type="button"></button>
    <button class="pager__dot" type="button"></button>

    <button class="pager__btn" type="button" aria-label="Siguiente">›</button>
    <button class="pager__btn" type="button" aria-label="Última">»</button>
  </nav>

  @include('partials.cart-toast')

@endsection
