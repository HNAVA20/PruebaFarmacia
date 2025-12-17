@props([
  'img' => '/img/cuadro rojo.jpg',
  'alt' => 'Producto',
  'badge' => '-5%',
  'code' => 'BEA381',
  'qty' => '2,086 PZAS',
  'title' => 'GABAPENTINA 30 CAPS 300 MG',
  'desc1' => 'GABAPENTINA:',
  'desc2' => 'ANTICONVULSIVO',
  'pl' => '$206.46',
  'desc' => '80%',
  'pu' => '$41.29',
  'subtotal' => '$0.00',
  'iva' => '0%',
  'barcode' => '7501342803852',
])

<article class="card">
  <div class="card__top">
    <div class="card__imgWrap">
      <img class="card__img" src="{{ $img }}" alt="{{ $alt }}">
      <span class="card__badge">{{ $badge }}</span>
    </div>
    <div class="card__meta">
      <span class="card__code">{{ $code }}</span>
      <span class="card__qty">{{ $qty }}</span>
    </div>
  </div>

  <h3 class="card__title">{{ $title }}</h3>

  <div class="card__desc">
    <p>{{ $desc1 }}</p>
    <p>{{ $desc2 }}</p>
  </div>

  <div class="card__prices">
    <div class="card__price"><span class="card__priceLbl">P.L.</span><span class="card__priceVal">{{ $pl }}</span></div>
    <div class="card__price"><span class="card__priceLbl">DESC.</span><span class="card__priceVal">{{ $desc }}</span></div>
    <div class="card__price"><span class="card__priceLbl">P.U.</span><span class="card__priceVal">{{ $pu }}</span></div>
  </div>

  <div class="card__greens">
    <div class="card__green card__green--left"><span>SUBTOTAL:</span><span>{{ $subtotal }}</span></div>
    <div class="card__green card__green--right"><span>IVA</span><span>{{ $iva }}</span></div>
  </div>

  <div class="card__actions">
    <div class="qty">
      <button class="qty__btn" type="button">−</button>
      <span class="qty__num">0</span>
      <button class="qty__btn" type="button">+</button>
    </div>
    <button class="card__add" type="button">AGREGAR</button>
  </div>

  <div class="card__barcode"><span>Código de barras</span><span>{{ $barcode }}</span></div>
</article>
