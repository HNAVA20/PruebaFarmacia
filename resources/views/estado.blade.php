@extends('layouts.app')

@section('no_footer') @endsection
@section('title', 'Estado de cuenta')
@section('body_class', 'page-estado')

@section('content')

  <!-- ======================================================
       2) ESTADO DE CUENTA
       ====================================================== -->
  <main class="account">

    <!-- Barra verde -->
    <section class="account__titlebar">
      <span class="account__title">Estado de cuenta</span>
    </section>

    <!-- Buscador -->
    <div class="account__searchRow">
      <div class="account__search">
        <span class="account__searchIcon">🔍</span>
        <input class="account__searchInput" type="text" placeholder="Buscar...">
      </div>
    </div>

    <!-- Tabs -->
    <div class="account__tabs" id="accountTabs" role="tablist" aria-label="Secciones">
      <button class="account__tab is-active" type="button" data-tab="folio" role="tab" aria-selected="true">
        Folio
      </button>
      <button class="account__tab" type="button" data-tab="credito" role="tab" aria-selected="false">
        Crédito
      </button>
      <button class="account__tab" type="button" data-tab="contacto" role="tab" aria-selected="false">
        Contacto
      </button>
    </div>

    <!-- ======================================================
         VISTAS (solo cambia el resumen superior)
         ====================================================== -->
    <section class="account__views" id="accountViews" aria-label="Resumen por sección">

      <!-- =========================
           VISTA: FOLIO
           ========================= -->
      <section class="account__view is-active" data-view="folio" aria-label="Resumen Folio">
        <section class="account__summary">
          <div class="account__docIcon">📄</div>

          <div class="account__lines">
            <div class="account__label">Monto vencido:</div>
            <div class="account__value">$0.00</div>

            <div class="account__label">Fecha de próximo vencimiento:</div>
            <div class="account__value">2025-08-28</div>

            <div class="account__label">Saldo total:</div>
            <div class="account__value">$28,590.59</div>
          </div>
        </section>
      </section>

      <!-- =========================
           VISTA: CRÉDITO (como tu imagen)
           ========================= -->
      <section class="account__view" data-view="credito" aria-label="Resumen Crédito">
        <section class="account__summary">
          <div class="account__docIcon">💳</div>

          <div class="account__lines account__lines--credit">
            <div class="account__label">Plazo:</div>
            <div class="account__value">30 días</div>

            <div class="account__label">Límite de crédito:</div>
            <div class="account__value">$400,000.00</div>

            <div class="account__label">Crédito disponible:</div>
            <div class="account__value">
              $371,409.41
              <small class="account__note">*A partir de la fecha de tu último abono</small>
            </div>
          </div>
        </section>
      </section>

      <!-- =========================
           VISTA: CONTACTO (placeholder)
           ========================= -->
      <section class="account__view" data-view="contacto" aria-label="Resumen Contacto">
        <section class="account__summary">
          <div class="account__docIcon">☎️</div>

          <div class="account__lines">
            <div class="account__label">Correo:</div>
            <div class="account__value">mgdistribuidora@correo.com.mx</div>

            <div class="account__label">Teléfono:</div>
            <div class="account__value">3214567890</div>

            <div class="account__label">Horario:</div>
            <div class="account__value">Lunes a Viernes 9:00 a.m. - 6:00 p.m.</div>
          </div>
        </section>
      </section>

    </section>

    <!-- ======================================================
         Facturas por pagar (se mantiene igual en todas las tabs)
         ====================================================== -->
    <section class="invoices">
      <div class="invoices__titlebar">Facturas por pagar</div>

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
          <span>2713198</span>
          <span>2025-07-29</span>
          <span>$28,590.59</span>
          <span>2025-08-28</span>
          <span>0</span>
          <span>$0.00</span>
          <span>$28,590.59</span>
          <span class="invoices__cfdi">
            <a class="invoices__icon invoices__icon--xml" href="#" aria-label="Descargar XML">XML</a>
            <a class="invoices__icon invoices__icon--pdf" href="#" aria-label="Descargar CFDI">CFDI</a>
          </span>
        </div>

        <!-- FILA 2 -->
        <div class="invoices__row">
          <span>2713198</span>
          <span>2025-07-29</span>
          <span>$28,590.59</span>
          <span>2025-08-28</span>
          <span>0</span>
          <span>$0.00</span>
          <span>$28,590.59</span>
          <span class="invoices__cfdi">
            <a class="invoices__icon invoices__icon--xml" href="#" aria-label="Descargar XML">XML</a>
            <a class="invoices__icon invoices__icon--pdf" href="#" aria-label="Descargar CFDI">CFDI</a>
          </span>
        </div>

        <!-- FILA 3 -->
        <div class="invoices__row">
          <span>2713198</span>
          <span>2025-07-29</span>
          <span>$28,590.59</span>
          <span>2025-08-28</span>
          <span>0</span>
          <span>$0.00</span>
          <span>$28,590.59</span>
          <span class="invoices__cfdi">
            <a class="invoices__icon invoices__icon--xml" href="#" aria-label="Descargar XML">XML</a>
            <a class="invoices__icon invoices__icon--pdf" href="#" aria-label="Descargar CFDI">CFDI</a>
          </span>
        </div>
      </div>

      <!-- Paginación (reusa tu pager) -->
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
  <script src="{{ asset('js/account-tabs.js') }}" defer></script>
@endpush
