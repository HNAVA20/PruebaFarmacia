@extends('layouts.app')

@section('title', 'Administrar usuarios')
@section('body_class', 'page-admin')

@section('no_footer')
@endsection

@section('content')

<main class="admin">

  <!-- BARRA VERDE -->
  <section class="admin__titlebar">
    <span class="admin__title">Administrar</span>
  </section>

  <!-- SUBMENÚ -->
  <div class="adminTabs">
    <a href="/administrar" class="adminTabs__tab">Productos</a>
    <a href="/usuarios" class="adminTabs__tab is-active">Usuarios</a>
    <a href="/pedidos" class="adminTabs__tab">Pedidos</a>
    <a href="/documentos" class="adminTabs__tab">Documentos</a>
  </div>

  <!-- BUSCADOR -->
  <div class="adminBar">
    <div class="adminBar__search">
      <span class="adminBar__searchIcon">🔍</span>
      <input class="adminBar__input" placeholder="Buscar...">
    </div>

    <button class="adminBar__add" type="button">+</button>
  </div>

  <!-- TABLA USUARIOS -->
  <section class="adminTable">

    <div class="adminTable__head"
         style="grid-template-columns: 1fr 1fr 1.5fr 1fr 1fr;">
      <span>Empresa</span>
      <span>Usuario</span>
      <span>Correo</span>
      <span>Estatus</span>
      <span>Acciones</span>
    </div>

    <!-- FILA 1 -->
    <div class="adminTable__row"
         style="grid-template-columns: 1fr 1fr 1.5fr 1fr 1fr;">
      <span>Distribuidora</span>
      <span>Fernando Núñez</span>
      <span>fernando.n@distribuidora.correo.com</span>
      <span>Activo</span>
      <div class="adminTable__actions">
        <button class="adminBtn adminBtn--edit">Editar</button>
        <button class="adminBtn adminBtn--del">Borrar</button>
      </div>
    </div>

    <!-- FILA 2 -->
    <div class="adminTable__row"
         style="grid-template-columns: 1fr 1fr 1.5fr 1fr 1fr;">
      <span>Pfizer</span>
      <span>Adrián Méndez</span>
      <span>a.m@pfizer.com.mx</span>
      <span>Activo</span>
      <div class="adminTable__actions">
        <button class="adminBtn adminBtn--edit">Editar</button>
        <button class="adminBtn adminBtn--del">Borrar</button>
      </div>
    </div>

    <!-- FILA 3 -->
    <div class="adminTable__row"
         style="grid-template-columns: 1fr 1fr 1.5fr 1fr 1fr;">
      <span>H&M</span>
      <span>Karla García</span>
      <span>hym@compras.com.mx</span>
      <span>Activo</span>
      <div class="adminTable__actions">
        <button class="adminBtn adminBtn--edit">Editar</button>
        <button class="adminBtn adminBtn--del">Borrar</button>
      </div>
    </div>

  </section>

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
