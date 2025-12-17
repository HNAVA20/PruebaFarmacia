<!-- ======================================================
     CART TOAST / MODAL (se abre al agregar producto)
     Pegar 1 sola vez antes de </body>
     ====================================================== -->
<div class="cartToast__backdrop" id="cartToastBackdrop" hidden></div>

<section class="cartToast" id="cartToast" hidden aria-live="polite" aria-label="Notificación de carrito">
  <button class="cartToast__close" id="cartToastClose" type="button" aria-label="Cerrar">×</button>

  <h3 class="cartToast__title">Añadiste a tu carrito</h3>

  <div class="cartToast__content">
    <div class="cartToast__bubble" id="cartToastBubble">1</div>

    <div class="cartToast__imgWrap">
      <img class="cartToast__img" id="cartToastImg" src="/img/cuadro rojo.jpg" alt="Producto">
    </div>

    <div class="cartToast__info">
      <div class="cartToast__name" id="cartToastName">Producto</div>

      <div class="cartToast__row">
        <label class="cartToast__check">
          <input type="checkbox" id="cartToastItemCheck" checked>
          <span class="cartToast__checkBox"></span>
        </label>

        <div class="cartToast__price" id="cartToastPrice">$0<span>00</span></div>
      </div>

      <div class="cartToast__row cartToast__row--actions">
        <button class="cartToast__qtyBtn" id="cartToastMinus" type="button" aria-label="Disminuir">−</button>
        <div class="cartToast__qtyNum" id="cartToastQty">1</div>
        <button class="cartToast__qtyBtn" id="cartToastPlus" type="button" aria-label="Aumentar">+</button>

        <button class="cartToast__trash" id="cartToastTrash" type="button" aria-label="Eliminar">🗑</button>
      </div>
    </div>
  </div>

  <div class="cartToast__footer">
    <label class="cartToast__all">
      <input type="checkbox" id="cartToastAllCheck" checked>
      <span class="cartToast__checkBox"></span>
      <span>Todo</span>
    </label>

    <div class="cartToast__total">
      Total: <span id="cartToastTotal">$0.00</span>
    </div>
  </div>

  <a class="cartToast__btn" href="{{ url('/carrito') }}">VER CARRITO</a>
</section>
