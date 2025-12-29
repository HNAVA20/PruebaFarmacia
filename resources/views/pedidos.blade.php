@extends('layouts.app')

@section('title', 'Pedidos')
@section('body_class', 'page-admin')

@section('no_footer')
@endsection

@section('content')

<main class="admin">

  <!-- BARRA VERDE -->
  <section class="admin__titlebar">
    <span class="admin__title">Administrar Pedidos</span>
  </section>

  <!-- SUBMENÚ -->
  <div class="adminTabs">
    <a href="/administrar" class="adminTabs__tab">Productos</a>
    <a href="/usuarios" class="adminTabs__tab">Usuarios</a>
    <a href="/pedidos" class="adminTabs__tab is-active">Pedidos</a>
    <a href="/documentos" class="adminTabs__tab">Documentos</a>
  </div>

  <!-- BUSCADOR -->
  <div class="adminBar">
    <div class="adminBar__search">
      <span class="adminBar__searchIcon">🔍</span>
      <input class="adminBar__input" placeholder="Buscar...">
    </div>
  </div>

  <!-- TÍTULO AZUL -->
  <div class="orders__titlebar">
    Pedidos en proceso
  </div>

  <!-- TABLA PEDIDOS -->
  <div class="orders__table">

    <div class="orders__head">
      <span>Folio</span>
      <span>Estatus</span>
      <span>Detalle</span>
    </div>

    <div class="orders__row">
      <span class="orders__folio">3193890</span>
      <span class="orders__status">Facturado</span>
      <a href="#" class="orders__link">Ver más</a>
    </div>

    <div class="orders__row">
      <span class="orders__folio">123456</span>
      <span class="orders__status">En proceso</span>
      <a href="#" class="orders__link">Ver más</a>
    </div>

    <div class="orders__row">
      <span class="orders__folio">012368</span>
      <span class="orders__status">Cancelado</span>
      <a href="#" class="orders__link">Ver más</a>
    </div>

  </div>

  <!-- PAGINACIÓN -->
  <div class="pager">
    <button class="pager__btn">«</button>
    <button class="pager__btn">‹</button>
    <button class="pager__dot is-active"></button>
    <button class="pager__dot"></button>
    <button class="pager__dot"></button>
    <button class="pager__btn">›</button>
    <button class="pager__btn">»</button>
  </div>

</main>

@endsection
