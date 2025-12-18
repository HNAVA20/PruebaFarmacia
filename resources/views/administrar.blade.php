@extends('layouts.app')

@section('title', 'Administrar productos')
@section('body_class', 'page-admin')

@section('no_footer')
@endsection

@section('content')

<main class="admin">

  <!-- BARRA VERDE -->
  <section class="admin__titlebar">
    <span class="admin__title">Administrar productos</span>
  </section>

  <!-- SUBMENÚ ADMIN -->
  <div class="adminTabs">
    <a href="/administrar" class="adminTabs__tab is-active">Productos</a>
    <a href="/usuarios" class="adminTabs__tab">Usuarios</a>
    <a href="/pedidos" class="adminTabs__tab">Pedidos</a>
    <a href="/documentos" class="adminTabs__tab">Documentos</a>
  </div>

  <!-- BUSCADOR + BOTÓN -->
  <div class="adminBar">
    <div class="adminBar__search">
      <span class="adminBar__searchIcon">🔍</span>
      <input class="adminBar__input" type="text" placeholder="Buscar...">
    </div>
    <button class="adminBar__add" type="button">+</button>
  </div>

  <!-- ======================================================
     TABLA PRODUCTOS
     ====================================================== -->
<section class="adminTable">

  <!-- ENCABEZADO -->
  <div class="adminTable__head">
    <span>Nombre</span>
    <span>Código</span>
    <span>Precio</span>
    <span>Existencia</span>
    <span>Estatus</span>
    <span>Acciones</span>
    <span>Imagen</span>
  </div>

  <!-- FILA 1 -->
  <div class="adminTable__row">
    <span class="adminTable__cell adminTable__name">Neurotin</span>
    <span class="adminTable__cell">215369</span>
    <span class="adminTable__cell">$28.50</span>
    <span class="adminTable__cell">1,500</span>
    <span class="adminTable__cell adminTable__status">Activo</span>

    <div class="adminTable__cell adminTable__actions">
      <button class="adminBtn adminBtn--edit">Editar</button>
      <button class="adminBtn adminBtn--del">Borrar</button>
    </div>

    <div class="adminTable__cell adminTable__imgWrap">
      <img class="adminTable__img" src="/img/cuadro rojo.jpg" alt="Neurotin">
    </div>
  </div>

  <!-- FILA 2 -->
  <div class="adminTable__row">
    <span class="adminTable__cell adminTable__name">Neurotin</span>
    <span class="adminTable__cell">215369</span>
    <span class="adminTable__cell">$28.50</span>
    <span class="adminTable__cell">1,500</span>
    <span class="adminTable__cell adminTable__status">Activo</span>

    <div class="adminTable__cell adminTable__actions">
      <button class="adminBtn adminBtn--edit">Editar</button>
      <button class="adminBtn adminBtn--del">Borrar</button>
    </div>

    <div class="adminTable__cell adminTable__imgWrap">
      <img class="adminTable__img" src="/img/cuadro rojo.jpg" alt="Neurotin">
    </div>
  </div>

  <!-- FILA 3 -->
  <div class="adminTable__row">
    <span class="adminTable__cell adminTable__name">Neurotin</span>
    <span class="adminTable__cell">215369</span>
    <span class="adminTable__cell">$28.50</span>
    <span class="adminTable__cell">1,500</span>
    <span class="adminTable__cell adminTable__status">Activo</span>

    <div class="adminTable__cell adminTable__actions">
      <button class="adminBtn adminBtn--edit">Editar</button>
      <button class="adminBtn adminBtn--del">Borrar</button>
    </div>

    <div class="adminTable__cell adminTable__imgWrap">
      <img class="adminTable__img" src="/img/cuadro rojo.jpg" alt="Neurotin">
    </div>
  </div>

</section>

</main>
@endsection
