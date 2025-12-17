@extends('layouts.app')

@section('title', 'Inicio')
@section('body_class', 'page-inicio')

@section('content')

  <!-- ======================================================
       3 BANNER
       ====================================================== -->
  <section class="banner">
    <img class="banner__img" src="/img/cuadro rojo.jpg" alt="Banner">
  </section>

  <!-- ======================================================
       4) PROMO (BARRA VERDE)
       ====================================================== -->
  <section class="promo">
    <p class="promo__text">Ofertas destacadas ¡No las dejes pasar!</p>
  </section>

  <!-- ======================================================
       5) PRODUCTOS (EN INICIO)
       ====================================================== -->
  <section class="products">
    <x-product-card alt="Gabapentina 300mg" />
    <x-product-card alt="Producto 2" />
    <x-product-card alt="Producto 3" />
    <x-product-card alt="Producto 4" />
  </section>

  <!-- ======================================================
       6) CONTACTO
       ====================================================== -->
  <section class="contact">
    <div class="contact__capsule">
      <div class="contact__map">
        <img src="/img/cuadro rojo.jpg" alt="Mapa">
      </div>

      <div class="contact__panel">
        <h2 class="contact__title">Datos de contacto</h2>

        <div class="contact__grid">

          <div class="contact__item">
            <div class="contact__icon">📍</div>
            <div class="contact__text">
              <h3 class="contact__heading">Dirección</h3>
              <p>Calle cualquiera #22 col. cualquiera,</p>
            </div>
          </div>

          <div class="contact__item">
            <div class="contact__icon">📞</div>
            <div class="contact__text">
              <h3 class="contact__heading">Teléfono</h3>
              <p>Tel: 3214567890</p>
              <p>Cel: 3214567890</p>
            </div>
          </div>

          <div class="contact__item">
            <div class="contact__icon">🕒</div>
            <div class="contact__text">
              <h3 class="contact__heading">Horario de atención</h3>
              <p>Lunes a Viernes<br>de 9:00 a.m. a 6:00 p.m.</p>
              <p>Sábados<br>de 9:00 a.m. a 2:00 p.m.</p>
            </div>
          </div>

          <div class="contact__item">
            <div class="contact__icon">✉️</div>
            <div class="contact__text">
              <h3 class="contact__heading">Correo electrónico</h3>
              <p>mgdistribuidora@correo.com.mx</p>

              <div class="contact__social">
                <a class="contact__socialBtn" href="#" aria-label="Facebook">f</a>
                <a class="contact__socialBtn" href="#" aria-label="Instagram">◎</a>
                <a class="contact__socialBtn" href="#" aria-label="YouTube">▶</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

@endsection
