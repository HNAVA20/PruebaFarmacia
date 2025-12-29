@extends('layouts.app')

@section('title', 'Documentos')
@section('body_class', 'page-admin')

@section('no_footer')
@endsection

@section('content')

<main class="admin">

  <!-- BARRA VERDE -->
  <section class="admin__titlebar">
    <span class="admin__title">Administrar Documentos</span>
  </section>

  <!-- SUBMENÚ -->
  <div class="adminTabs">
    <a href="/administrar" class="adminTabs__tab">Productos</a>
    <a href="/usuarios" class="adminTabs__tab">Usuarios</a>
    <a href="/pedidos" class="adminTabs__tab">Pedidos</a>
    <a href="/documentos" class="adminTabs__tab is-active">Documentos</a>
  </div>

  <!-- BUSCADOR -->
  <div class="adminBar">
    <div class="adminBar__search">
      <span class="adminBar__searchIcon">🔍</span>
      <input class="adminBar__input" placeholder="Buscar...">
    </div>
  </div>

  <!-- TÍTULO AZUL -->
  <div class="invoices__titlebar">
    Facturas por pagar
  </div>

  <!-- TABLA FACTURAS -->
  <div class="invoices__table">

    <div class="invoices__head">
      <span>Ref.</span>
      <span>Fecha de compra</span>
      <span>Importe</span>
      <span>Vencimiento</span>
      <span>Días vencidos</span>
      <span>Abonos</span>
      <span>Saldo</span>
      <span>CFDI</span>
    </div>

    <!-- FILA 1 -->
    <div class="invoices__row">
      <span>271398</span>
      <span>2025-07-29</span>
      <span>$28,590.59</span>
      <span>2025-08-28</span>
      <span>0</span>
      <span>$0.00</span>
      <span>$28,590.59</span>
      <div class="invoices__cfdi">
        <a href="#" class="invoices__icon invoices__icon--xml">XML</a>
        <a href="#" class="invoices__icon invoices__icon--pdf">PDF</a>
      </div>
    </div>

    <!-- FILA 2 -->
    <div class="invoices__row">
      <span>271398</span>
      <span>2025-07-29</span>
      <span>$28,590.59</span>
      <span>2025-08-28</span>
      <span>0</span>
      <span>$0.00</span>
      <span>$28,590.59</span>
      <div class="invoices__cfdi">
        <a href="#" class="invoices__icon invoices__icon--xml">XML</a>
        <a href="#" class="invoices__icon invoices__icon--pdf">PDF</a>
      </div>
    </div>

    <!-- FILA 3 -->
    <div class="invoices__row">
      <span>271398</span>
      <span>2025-07-29</span>
      <span>$28,590.59</span>
      <span>2025-08-28</span>
      <span>0</span>
      <span>$0.00</span>
      <span>$28,590.59</span>
      <div class="invoices__cfdi">
        <a href="#" class="invoices__icon invoices__icon--xml">XML</a>
        <a href="#" class="invoices__icon invoices__icon--pdf">PDF</a>
      </div>
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
