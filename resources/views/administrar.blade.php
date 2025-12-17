@extends('layouts.app')

@section('no_footer') @endsection
@section('title', 'Administrar')
@section('body_class', 'page-admin')

@section('content')

<main class="admin" id="adminPage">

  <!-- Barra verde -->
  <section class="admin__titlebar">
    <span class="admin__title">Administrar</span>
  </section>

  <!-- Tabs -->
  <nav class="adminTabs" aria-label="Secciones administrar">
    <a class="adminTabs__tab is-active" href="{{ url('/administrar') }}">Productos</a>
    <a class="adminTabs__tab" href="{{ url('/administrar/usuarios') }}">Usuarios</a>
    <a class="adminTabs__tab" href="{{ url('/administrar/pedidos') }}">Pedidos</a>
    <a class="adminTabs__tab" href="{{ url('/administrar/documentos') }}">Documentos</a>
  </nav>

  <!-- ======================================================
       VISTA 1: LISTA DE PRODUCTOS (por defecto)
       ====================================================== -->
  <section class="adminList" id="adminListView">

    <div class="adminBar">
      <div class="adminBar__search">
        <span class="adminBar__searchIcon">🔍</span>
        <input class="adminBar__input" type="text" placeholder="Buscar...">
      </div>

      <!-- ✅ BOTÓN VERDE: abre el formulario -->
      <button class="adminBar__add" id="adminOpenProductForm" type="button" aria-label="Agregar producto">+</button>
    </div>

    <div class="adminTable">
      <div class="adminTable__head">
        <span>Nombre</span>
        <span>Código</span>
        <span>Precio</span>
        <span>Existencia</span>
        <span>Estatus</span>
        <span>Acciones</span>
        <span>Imagen</span>
      </div>

      <!-- Filas demo -->
      <div class="adminTable__row">
        <span class="adminTable__name">Neurotin</span>
        <span>215369</span>
        <span>$28.50</span>
        <span>1,500</span>
        <span>Activo</span>
        <span class="adminTable__actions">
          <button class="adminTable__btn adminTable__btn--ok" type="button">Editar</button>
          <button class="adminTable__btn adminTable__btn--del" type="button">Borrar</button>
        </span>
        <span class="adminTable__img">
          <img src="/img/cuadro rojo.jpg" alt="Producto">
        </span>
      </div>

      <div class="adminTable__row">
        <span class="adminTable__name">Neurotin</span>
        <span>215369</span>
        <span>$28.50</span>
        <span>1,500</span>
        <span>Activo</span>
        <span class="adminTable__actions">
          <button class="adminTable__btn adminTable__btn--ok" type="button">Editar</button>
          <button class="adminTable__btn adminTable__btn--del" type="button">Borrar</button>
        </span>
        <span class="adminTable__img">
          <img src="/img/cuadro rojo.jpg" alt="Producto">
        </span>
      </div>

      <div class="adminTable__row">
        <span class="adminTable__name">Neurotin</span>
        <span>215369</span>
        <span>$28.50</span>
        <span>1,500</span>
        <span>Activo</span>
        <span class="adminTable__actions">
          <button class="adminTable__btn adminTable__btn--ok" type="button">Editar</button>
          <button class="adminTable__btn adminTable__btn--del" type="button">Borrar</button>
        </span>
        <span class="adminTable__img">
          <img src="/img/cuadro rojo.jpg" alt="Producto">
        </span>
      </div>
    </div>

  </section>

  <!-- ======================================================
       VISTA 2: FORMULARIO AGREGAR PRODUCTO (como tu imagen)
       ====================================================== -->
  <section class="adminForm" id="adminFormView" hidden>

    <!-- botón regresar (verde) -->
    <button class="adminForm__back" id="adminCloseProductForm" type="button" aria-label="Regresar">←</button>

    <form class="adminForm__grid" action="#" method="post" enctype="multipart/form-data">

      <!-- Columna izquierda -->
      <div class="adminForm__col">
        <label class="adminForm__label">Nombre:</label>
        <input class="adminForm__input" type="text">

        <label class="adminForm__label">Precio:</label>
        <input class="adminForm__input" type="text">

        <label class="adminForm__label">Descripción:</label>
        <textarea class="adminForm__textarea"></textarea>

        <label class="adminForm__check">
          <input type="checkbox">
          <span class="adminForm__checkBox"></span>
          <span>Oferta</span>
        </label>
      </div>

      <!-- Columna derecha -->
      <div class="adminForm__col adminForm__col--right">
        <label class="adminForm__label">Código:</label>
        <input class="adminForm__input" type="text">

        <label class="adminForm__label">Existencia:</label>
        <input class="adminForm__input" type="text">

        <div class="adminForm__preview">
          <img id="adminImagePreview" src="/img/cuadro rojo.jpg" alt="Vista previa">
        </div>

        <input id="adminImageInput" class="adminForm__file" type="file" accept="image/*">
        <label class="adminForm__fileBtn" for="adminImageInput">Seleccionar imagen</label>

        <button class="adminForm__save" type="button">GUARDAR</button>
      </div>

    </form>
  </section>

</main>

@endsection
