<!-- ======================================================
     7 FOOTER CTA
     ====================================================== -->
<footer class="footerCta">
  <div class="footerCta__left">
    <h2 class="footerCta__title">Solicita más información</h2>

    <form class="footerCta__form" action="#" method="post">
      @csrf

      <label class="footerCta__label" for="name">Nombre:</label>
      <input class="footerCta__input" id="name" name="name" type="text">

      <label class="footerCta__label" for="company">Empresa:</label>
      <input class="footerCta__input" id="company" name="company" type="text">

      <label class="footerCta__label" for="phone">Número de teléfono:</label>
      <input class="footerCta__input" id="phone" name="phone" type="tel">

      <label class="footerCta__label" for="email">Correo electrónico:</label>
      <input class="footerCta__input" id="email" name="email" type="email">

      <button class="footerCta__btn" type="submit">ENVIAR</button>
    </form>

    <a class="footerCta__privacy" href="#">Aviso de privacidad</a>
  </div>

  <div class="footerCta__right" aria-hidden="true"></div>
</footer>
