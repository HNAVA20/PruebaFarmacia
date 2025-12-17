@extends('layouts.app')

@section('no_footer') @endsection
@section('title', 'Administrar')
@section('body_class', 'page-admin')

@section('content')
  <!-- ======================================================
       ADMINISTRAR
       ====================================================== -->
  <main class="admin">

    <!-- Barra verde -->
    <section class="admin__titlebar">
      <span class="admin__title">Administrar</span>
    </section>

    <!-- Tabs -->
    <div class="adminTabs" role="tablist" aria-label="Secciones de administración">
      <button class="adminTabs__tab is-active" type="button" data-tab="productos" role="tab" aria-selected="true">Productos</button>
      <button class="adminTabs__tab" type="button" data-tab="usuarios" role="tab" aria-selected="false">Usuarios</button>
      <button class="adminTabs__tab" type="button" data-tab="pedidos" role="tab" aria-selected="false">Pedidos</button>
      <button class="adminTabs__tab" type="button" data-tab="documentos" role="tab" aria-selected="false">Documentos</button>
    </div>

    <!-- ======================================================
         PANEL: PRODUCTOS (tabla)
         ====================================================== -->
    <section class="adminPanel" data-panel="productos">

      <!-- Buscador + botón agregar -->
      <div class="adminBar">
        <div class="adminBar__search">
          <span class="adminBar__searchIcon">🔍</span>
          <input class="adminBar__input" type="text" placeholder="Buscar..." aria-label="Buscar">
        </div>

        <button class="adminBar__add" type="button" aria-label="Agregar">+</button>
      </div>

      <!-- Tabla -->
      <section class="adminTable" aria-label="Tabla de productos">
        <div class="adminTable__head" role="row">
          <span>Nombre</span>
          <span>Código</span>
          <span>Precio</span>
          <span>Existencia</span>
          <span>Estatus</span>
          <span>Acciones</span>
          <span>Imagen</span>
        </div>

        <!-- FILA 1 -->
        <div class="adminTable__row" role="row">
          <span class="adminTable__cell adminTable__name">Neurotin</span>
          <span class="adminTable__cell">215369</span>
          <span class="adminTable__cell">$28.50</span>
          <span class="adminTable__cell">1,500</span>
          <span class="adminTable__cell adminTable__status">Activo</span>

          <div class="adminTable__cell adminTable__actions">
            <button class="adminBtn adminBtn--edit" type="button">Editar</button>
            <button class="adminBtn adminBtn--del" type="button">Borrar</button>
          </div>

          <div class="adminTable__cell adminTable__imgWrap">
            <img class="adminTable__img" src="/img/cuadro rojo.jpg" alt="Neurotin">
          </div>
        </div>

        <!-- FILA 2 -->
        <div class="adminTable__row" role="row">
          <span class="adminTable__cell adminTable__name">Neurotin</span>
          <span class="adminTable__cell">215369</span>
          <span class="adminTable__cell">$28.50</span>
          <span class="adminTable__cell">1,500</span>
          <span class="adminTable__cell adminTable__status">Activo</span>

          <div class="adminTable__cell adminTable__actions">
            <button class="adminBtn adminBtn--edit" type="button">Editar</button>
            <button class="adminBtn adminBtn--del" type="button">Borrar</button>
          </div>

          <div class="adminTable__cell adminTable__imgWrap">
            <img class="adminTable__img" src="/img/cuadro rojo.jpg" alt="Neurotin">
          </div>
        </div>

        <!-- FILA 3 -->
        <div class="adminTable__row" role="row">
          <span class="adminTable__cell adminTable__name">Neurotin</span>
          <span class="adminTable__cell">215369</span>
          <span class="adminTable__cell">$28.50</span>
          <span class="adminTable__cell">1,500</span>
          <span class="adminTable__cell adminTable__status">Activo</span>

          <div class="adminTable__cell adminTable__actions">
            <button class="adminBtn adminBtn--edit" type="button">Editar</button>
            <button class="adminBtn adminBtn--del" type="button">Borrar</button>
          </div>

          <div class="adminTable__cell adminTable__imgWrap">
            <img class="adminTable__img" src="/img/cuadro rojo.jpg" alt="Neurotin">
          </div>
        </div>
      </section>

      <!-- Paginación -->
      <div class="pager">
        <button class="pager__btn" type="button" aria-label="Primera">«</button>
        <button class="pager__btn" type="button" aria-label="Anterior">‹</button>

        <button class="pager__dot is-active" type="button" aria-label="Página 1"></button>
        <button class="pager__dot" type="button" aria-label="Página 2"></button>
        <button class="pager__dot" type="button" aria-label="Página 3"></button>

        <button class="pager__btn" type="button" aria-label="Siguiente">›</button>
        <button class="pager__btn" type="button" aria-label="Última">»</button>
      </div>
    </section>

    <!-- ======================================================
         PANEL: USUARIOS (FORM como tu imagen)
         ====================================================== -->
    <section class="adminPanel" data-panel="usuarios" hidden>

      <form class="adminForm" action="#" method="post" enctype="multipart/form-data">
        <div class="adminForm__grid">
          <!-- COLUMNA IZQUIERDA -->
          <div class="adminForm__col">
            <label class="adminForm__label" for="u_name">Nombre:</label>
            <input class="adminForm__input" id="u_name" name="name" type="text">

            <label class="adminForm__label" for="u_price">Precio:</label>
            <input class="adminForm__input" id="u_price" name="price" type="text">

            <label class="adminForm__label" for="u_desc">Descripción:</label>
            <textarea class="adminForm__textarea" id="u_desc" name="desc"></textarea>

            <label class="adminCheck">
              <input type="checkbox" checked>
              <span class="adminCheck__box"></span>
              <span>Oferta</span>
            </label>
          </div>

          <!-- COLUMNA DERECHA -->
          <div class="adminForm__col">
            <label class="adminForm__label" for="u_code">Código:</label>
            <input class="adminForm__input" id="u_code" name="code" type="text">

            <label class="adminForm__label" for="u_stock">Existencia:</label>
            <input class="adminForm__input" id="u_stock" name="stock" type="text">

            <div class="adminForm__preview">
              <img class="adminForm__previewImg" src="/img/cuadro rojo.jpg" alt="Preview">
            </div>

            <label class="adminForm__fileBtn">
              Seleccionar imagen
              <input class="adminForm__file" type="file" accept="image/*">
            </label>
          </div>
        </div>

        <div class="adminForm__actions">
          <button class="adminForm__save" type="submit">GUARDAR</button>
        </div>
      </form>
    </section>

    <!-- (Opcionales) placeholders -->
    <section class="adminPanel" data-panel="pedidos" hidden>
      <div style="padding:14px;font-weight:900;opacity:.7">Pendiente: Pedidos</div>
    </section>

    <section class="adminPanel" data-panel="documentos" hidden>
      <div style="padding:14px;font-weight:900;opacity:.7">Pendiente: Documentos</div>
    </section>

  </main>
@endsection
