@extends('layouts.app')

@section('no_footer') @endsection
@section('title', 'Perfil')
@section('body_class', 'page-perfil')

@section('content')

  <!-- ======================================================
       2) CONTENIDO PERFIL
       ====================================================== -->
  <main class="profile">

    <!-- Barra verde -->
    <section class="profile__titlebar">
      <span class="profile__title">Perfil</span>
    </section>

    <!-- Datos personales -->
    <section class="profile__panel">
      <h2 class="profile__panelTitle">Datos personales</h2>
      <p class="profile__help">Actualice la información de su cuenta y la dirección de correo electrónico</p>

      <form action="#" method="post">
        @csrf

        <div class="profile__grid2">
          <div class="field">
            <label class="field__label" for="nombre">Nombre</label>
            <input class="field__input" id="nombre" name="nombre" type="text">
          </div>

          <div class="field">
            <label class="field__label" for="correo">Correo electrónico:</label>
            <input class="field__input" id="correo" name="correo" type="email">
          </div>
        </div>

        <div class="profile__actions">
          <button class="btn btn--primary" type="submit">GUARDAR</button>
        </div>
      </form>
    </section>

    <!-- Actualizar contraseña -->
    <section class="profile__panel">
      <h2 class="profile__panelTitle">Actualizar contraseña</h2>
      <p class="profile__help">Asegúrese que su cuenta esté usando una contraseña larga y aleatoria para mantenerse seguro.</p>

      <form action="#" method="post">
        @csrf

        <div class="profile__grid2 profile__grid2--password">
          <div class="field field--password">
            <label class="field__label" for="pass_actual">Contraseña actual:</label>
            <input class="field__input" id="pass_actual" name="pass_actual" type="password">
            <button class="field__toggle" type="button" data-toggle="#pass_actual" aria-label="Mostrar contraseña">👁</button>
          </div>

          <div class="field field--password">
            <label class="field__label" for="pass_nueva">Nueva contraseña:</label>
            <input class="field__input" id="pass_nueva" name="pass_nueva" type="password">
            <button class="field__toggle" type="button" data-toggle="#pass_nueva" aria-label="Mostrar contraseña">👁</button>
          </div>

          <div class="field field--password field--span1">
            <label class="field__label" for="pass_confirm">Confirmar contraseña:</label>
            <input class="field__input" id="pass_confirm" name="pass_confirm" type="password">
            <button class="field__toggle" type="button" data-toggle="#pass_confirm" aria-label="Mostrar contraseña">👁</button>
          </div>
        </div>

        <div class="profile__actions">
          <button class="btn btn--primary" type="submit">GUARDAR</button>
        </div>
      </form>
    </section>

    <!-- Pedidos en proceso -->
    <section class="orders">
      <div class="orders__titlebar">Pedidos en proceso</div>

      <div class="orders__table">
        <div class="orders__head">
          <span>Folio</span>
          <span>Estatus</span>
          <span>Detalle</span>
        </div>

        <div class="orders__row">
          <span class="orders__folio">3193890</span>
          <span class="orders__status">Facturado</span>
          <a class="orders__link" href="#">Ver más</a>
        </div>

        <div class="orders__row">
          <span class="orders__folio">123456</span>
          <span class="orders__status">En proceso</span>
          <a class="orders__link" href="#">Ver más</a>
        </div>

        <div class="orders__row">
          <span class="orders__folio">012368</span>
          <span class="orders__status">Cancelado</span>
          <a class="orders__link" href="#">Ver más</a>
        </div>
      </div>

      <!-- Paginación (reusa tu .pager) -->
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

  </main>

@endsection

@push('scripts')
  <script src="{{ asset('js/navbar.js') }}" defer></script>
  <script src="{{ asset('js/profile.js') }}" defer></script>
@endpush
