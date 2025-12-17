/**
 * app.js
 * =========================================================
 * Controla:
 * 1) Menú móvil del NAVBAR (drawer)
 * 2) Mostrar/Ocultar contraseñas (ojito) en Perfil
 * 3) Tabs de Estado de cuenta (Folio / Crédito / Contacto)
 * 4) Cantidades de productos (+ / −)
 * 5) Carrito con localStorage:
 *    - Agregar producto
 *    - Badge del carrito
 *    - Toast/modal al agregar (si existe en la vista)
 *    - Vista /carrito (si existe en la vista)
 *    - Confirmación de pedido (modal) al dar clic en "REALIZAR PEDIDO"
 *
 * Importar en Blade:
 * <script src="{{ asset('js/app.js') }}" defer></script>
 * =========================================================
 */

document.addEventListener("DOMContentLoaded", () => {
  /* ======================================================
     0) HELPERS
     ====================================================== */
  const toInt = (v) => {
    const n = parseInt(v, 10);
    return Number.isFinite(n) ? n : 0;
  };

  const money = (n) =>
    (Number(n) || 0).toLocaleString("es-MX", { style: "currency", currency: "MXN" });

  /* ======================================================
     1) NAVBAR MÓVIL (ABRIR/CERRAR)
     ====================================================== */
  const navbar = document.querySelector(".navbar");
  const openBtn = document.querySelector(".navbar__toggle-open");
  const closeBtn = document.querySelector(".navbar__toggle-close");
  const overlay = document.querySelector(".navbar__overlay");

  if (navbar && openBtn && closeBtn && overlay) {
    openBtn.addEventListener("click", () => navbar.classList.add("navbar--open"));
    closeBtn.addEventListener("click", () => navbar.classList.remove("navbar--open"));
    overlay.addEventListener("click", () => navbar.classList.remove("navbar--open"));
  }

  /* ======================================================
     2) PERFIL: OJITO (MOSTRAR/OCULTAR PASSWORD)
     ====================================================== */
  document.body.addEventListener("click", (e) => {
    const toggle = e.target.closest(".field__toggle");
    if (!toggle) return;

    const selector = toggle.getAttribute("data-toggle");
    const input = selector ? document.querySelector(selector) : null;
    if (!input) return;

    input.type = input.type === "password" ? "text" : "password";
  });

  /* ======================================================
     3) ESTADO DE CUENTA: TABS (FOLIO / CRÉDITO / CONTACTO)
     Requiere:
     - Contenedor tabs: #accountTabs
     - Botones: .account__tab con data-tab="folio|credito|contacto"
     - Vistas: .account__view con data-view="folio|credito|contacto"
     ====================================================== */
  const accountTabs = document.querySelector("#accountTabs");
  const accountViews = document.querySelector("#accountViews");

  if (accountTabs && accountViews) {
    const tabs = [...accountTabs.querySelectorAll(".account__tab")];
    const views = [...accountViews.querySelectorAll(".account__view")];

    const setActiveTab = (name) => {
      tabs.forEach((t) => {
        const on = t.dataset.tab === name;
        t.classList.toggle("is-active", on);
        t.setAttribute("aria-selected", on ? "true" : "false");
      });

      views.forEach((v) => {
        v.classList.toggle("is-active", v.dataset.view === name);
      });
    };

    accountTabs.addEventListener("click", (e) => {
      const btn = e.target.closest(".account__tab");
      if (!btn) return;
      setActiveTab(btn.dataset.tab);
    });
  }

  /* ======================================================
     4) CARRITO (localStorage)
     ====================================================== */
  const CART_KEY = "cart_v1";
  let cart = {};

  try {
    cart = JSON.parse(localStorage.getItem(CART_KEY)) || {};
  } catch {
    cart = {};
  }

  const cartBadge = document.querySelector(".shopbar__cartBadge");

  const getCartCount = () =>
    Object.values(cart).reduce((acc, item) => acc + toInt(item.qty), 0);

  const renderCartBadge = () => {
    if (!cartBadge) return;
    cartBadge.textContent = String(getCartCount());
  };

  const saveCart = () => {
    localStorage.setItem(CART_KEY, JSON.stringify(cart));
    renderCartBadge();
  };

  renderCartBadge();

  /* ======================================================
     5) TOAST / MODAL (si existe en la vista)
     ====================================================== */
  const toast = document.querySelector("#cartToast");
  const toastBackdrop = document.querySelector("#cartToastBackdrop");
  const toastClose = document.querySelector("#cartToastClose");

  const tBubble = document.querySelector("#cartToastBubble");
  const tImg = document.querySelector("#cartToastImg");
  const tName = document.querySelector("#cartToastName");
  const tPrice = document.querySelector("#cartToastPrice");
  const tQty = document.querySelector("#cartToastQty");
  const tTotal = document.querySelector("#cartToastTotal");
  const tMinus = document.querySelector("#cartToastMinus");
  const tPlus = document.querySelector("#cartToastPlus");
  const tTrash = document.querySelector("#cartToastTrash");

  let toastCode = null;

  const renderToast = () => {
    if (!toast || !toastBackdrop) return;
    if (!toastCode || !cart[toastCode]) return;

    const item = cart[toastCode];
    const qty = toInt(item.qty);
    const pu = Number(item.pu) || 0;

    if (tBubble) tBubble.textContent = String(getCartCount());
    if (tName) tName.textContent = item.title || "Producto";
    if (tQty) tQty.textContent = String(qty);
    if (tImg) tImg.src = item.img || "/img/cuadro rojo.jpg";

    // Precio tipo $41 29
    if (tPrice) {
      const m = money(pu).replace(/[^\d.,]/g, "");
      const parts = m.split(".");
      const major = parts[0] || "0";
      const minor = (parts[1] || "00").padEnd(2, "0").slice(0, 2);
      tPrice.innerHTML = `$${major}<span>${minor}</span>`;
    }

    if (tTotal) tTotal.textContent = money(pu * qty);
  };

  const openToast = (code) => {
    if (!toast || !toastBackdrop) return;
    toastCode = code;
    renderToast();
    toast.hidden = false;
    toastBackdrop.hidden = false;
  };

  const closeToast = () => {
    if (!toast || !toastBackdrop) return;
    toast.hidden = true;
    toastBackdrop.hidden = true;
  };

  if (toastClose) toastClose.addEventListener("click", closeToast);
  if (toastBackdrop) toastBackdrop.addEventListener("click", closeToast);

  // Si el toast existe, permite modificar qty desde el toast
  if (tPlus) {
    tPlus.addEventListener("click", () => {
      if (!toastCode || !cart[toastCode]) return;
      cart[toastCode].qty = toInt(cart[toastCode].qty) + 1;
      saveCart();
      renderToast();
      renderCartPage();
    });
  }

  if (tMinus) {
    tMinus.addEventListener("click", () => {
      if (!toastCode || !cart[toastCode]) return;
      cart[toastCode].qty = Math.max(1, toInt(cart[toastCode].qty) - 1);
      saveCart();
      renderToast();
      renderCartPage();
    });
  }

  if (tTrash) {
    tTrash.addEventListener("click", () => {
      if (!toastCode) return;
      delete cart[toastCode];
      saveCart();
      closeToast();
      renderCartPage();
    });
  }

  /* ======================================================
     6) PRODUCTOS: + / − y AGREGAR (SIN duplicar)
     ====================================================== */
  document.body.addEventListener("click", (e) => {
    // + / − en cards
    const qtyBtn = e.target.closest(".qty__btn");
    if (qtyBtn) {
      const card = qtyBtn.closest(".card");
      if (!card) return;

      const numEl = card.querySelector(".qty__num");
      if (!numEl) return;

      const txt = qtyBtn.textContent.trim();
      const isPlus = txt === "+";
      const isMinus = txt === "−" || txt === "-";

      let current = toInt(numEl.textContent);
      if (isPlus) current += 1;
      if (isMinus) current = Math.max(0, current - 1);

      numEl.textContent = String(current);
      return;
    }

    // AGREGAR
    const addBtn = e.target.closest(".card__add");
    if (addBtn) {
      const card = addBtn.closest(".card");
      if (!card) return;

      const code = card.querySelector(".card__code")?.textContent?.trim() || "SIN-CODIGO";
      const title = card.querySelector(".card__title")?.textContent?.trim() || "Producto";
      const imgSrc = card.querySelector(".card__img")?.getAttribute("src") || "/img/cuadro rojo.jpg";

      const qtyEl = card.querySelector(".qty__num");
      const qty = toInt(qtyEl?.textContent);

      const puText = card.querySelectorAll(".card__priceVal")[2]?.textContent || "$0";
      const pu = Number(String(puText).replace(/[^0-9.]/g, "")) || 0;

      if (qty <= 0) {
        alert("Primero selecciona una cantidad con +");
        return;
      }

      if (!cart[code]) cart[code] = { qty: 0, title, pu, img: imgSrc, selected: true };
      cart[code].qty += qty;
      cart[code].title = title;
      cart[code].pu = pu;
      cart[code].img = imgSrc;

      if (qtyEl) qtyEl.textContent = "0";

      saveCart();

      // ✅ si existe el toast, lo abre; si no existe, no pasa nada
      openToast(code);
      return;
    }
  });

  /* ======================================================
     7) VISTA /carrito (si existe)
     ====================================================== */
  const cartPage = document.querySelector("#cartPage");
  const cartItemsEl = document.querySelector("#cartItems");
  const selectAllEl = document.querySelector("#cartSelectAll");
  const subEl = document.querySelector("#cartSubtotal");
  const taxEl = document.querySelector("#cartTax");
  const totalEl = document.querySelector("#cartTotal");
  const clearBtn = document.querySelector("#cartClearBtn");

  const TAX_RATE = 0.16;

  const getTotals = () => {
    let subtotal = 0;

    Object.values(cart).forEach((item) => {
      const selected = item.selected !== false;
      if (!selected) return;
      subtotal += (Number(item.pu) || 0) * toInt(item.qty);
    });

    const tax = subtotal * TAX_RATE;
    const total = subtotal + tax;
    return { subtotal, tax, total };
  };

  // función (no const) para que exista antes de usarse arriba
  function renderCartPage() {
    if (!cartPage || !cartItemsEl) return;

    const entries = Object.entries(cart);

    if (entries.length === 0) {
      cartItemsEl.innerHTML = `<p style="padding:14px;font-weight:800;opacity:.7">Tu carrito está vacío.</p>`;
      if (subEl) subEl.textContent = money(0);
      if (taxEl) taxEl.textContent = money(0);
      if (totalEl) totalEl.textContent = money(0);
      return;
    }

    if (selectAllEl) {
      selectAllEl.checked = entries.every(([, it]) => it.selected !== false);
    }

    cartItemsEl.innerHTML = entries
      .map(([code, item]) => {
        const selected = item.selected !== false;
        const qty = toInt(item.qty);
        const pu = Number(item.pu) || 0;
        const line = pu * qty;

        return `
          <article class="cartItem" data-code="${code}">
            <label class="cartItem__check">
              <input type="checkbox" class="cartItem__chk" ${selected ? "checked" : ""}>
              <span class="cartItem__box"></span>
            </label>

            <div class="cartItem__imgWrap">
              <img class="cartItem__img" src="${item.img || "/img/cuadro rojo.jpg"}" alt="${item.title || "Producto"}">
            </div>

            <div class="cartItem__info">
              <h3 class="cartItem__name">${item.title || "Producto"}</h3>
              <p class="cartItem__desc">${(item.desc || "DESCRIPCIÓN").toUpperCase()}</p>

              <div class="cartItem__meta">
                <div>${code}</div>
                <div>${item.stockText || ""}</div>
                <div>Código de barras: <strong>${item.barcode || ""}</strong></div>
              </div>
            </div>

            <div class="cartItem__right">
              <div class="cartItem__price">${money(line)}</div>

              <div class="cartItem__controls">
                <button class="cartItem__btn cartItem__minus" type="button">−</button>
                <div class="cartItem__qty">${qty}</div>
                <button class="cartItem__btn cartItem__plus" type="button">+</button>
                <button class="cartItem__trash cartItem__trashBtn" type="button" aria-label="Eliminar">🗑</button>
              </div>

              <button class="cartItem__add" type="button">AGREGAR</button>
            </div>
          </article>
        `;
      })
      .join("");

    const { subtotal, tax, total } = getTotals();
    if (subEl) subEl.textContent = money(subtotal);
    if (taxEl) taxEl.textContent = money(tax);
    if (totalEl) totalEl.textContent = money(total);
  }

  if (cartPage) renderCartPage();

  // + / − / eliminar en carrito
  document.body.addEventListener("click", (e) => {
    if (!cartPage) return;

    const itemEl = e.target.closest(".cartItem");
    if (!itemEl) return;

    const code = itemEl.getAttribute("data-code");
    if (!code || !cart[code]) return;

    if (e.target.closest(".cartItem__plus")) {
      cart[code].qty = toInt(cart[code].qty) + 1;
      saveCart();
      renderCartPage();
      return;
    }

    if (e.target.closest(".cartItem__minus")) {
      cart[code].qty = Math.max(1, toInt(cart[code].qty) - 1);
      saveCart();
      renderCartPage();
      return;
    }

    if (e.target.closest(".cartItem__trashBtn")) {
      delete cart[code];
      saveCart();
      renderCartPage();
      return;
    }
  });

  // checkbox por item
  document.body.addEventListener("change", (e) => {
    if (!cartPage) return;

    const chk = e.target.closest(".cartItem__chk");
    if (!chk) return;

    const itemEl = chk.closest(".cartItem");
    const code = itemEl?.getAttribute("data-code");
    if (!code || !cart[code]) return;

    cart[code].selected = chk.checked;
    saveCart();
    renderCartPage();
  });

  // seleccionar todo
  if (selectAllEl) {
    selectAllEl.addEventListener("change", () => {
      const checked = selectAllEl.checked;
      Object.keys(cart).forEach((k) => (cart[k].selected = checked));
      saveCart();
      renderCartPage();
    });
  }

  // vaciar carrito
  if (clearBtn) {
    clearBtn.addEventListener("click", () => {
      cart = {};
      localStorage.removeItem(CART_KEY);
      renderCartBadge();
      renderCartPage();
    });
  }

  /* ======================================================
     8) CONFIRMACIÓN DE PEDIDO (modal) al dar clic REALIZAR PEDIDO
     Requiere en el HTML del carrito:
       #orderOkBackdrop, #orderOk, #orderOkClose, #orderOkNumber
     ====================================================== */
  const checkoutBtn = document.querySelector("#cartCheckoutBtn");
  const okModal = document.querySelector("#orderOk");
  const okBackdrop = document.querySelector("#orderOkBackdrop");
  const okClose = document.querySelector("#orderOkClose");
  const okNumber = document.querySelector("#orderOkNumber");

  const openOrderOk = () => {
    if (!okModal || !okBackdrop) return;

    // número demo de pedido (luego se cambia por backend)
    const n = Math.floor(1000000000 + Math.random() * 9000000000);
    if (okNumber) okNumber.textContent = `#${n}`;

    okModal.hidden = false;
    okBackdrop.hidden = false;
  };

  const closeOrderOk = () => {
    if (!okModal || !okBackdrop) return;
    okModal.hidden = true;
    okBackdrop.hidden = true;
  };

  if (checkoutBtn) checkoutBtn.addEventListener("click", openOrderOk);
  if (okClose) okClose.addEventListener("click", closeOrderOk);
  if (okBackdrop) okBackdrop.addEventListener("click", closeOrderOk);

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeOrderOk();
  });

  /* ======================================================
   USER MENU (Administrar / Salir) - Dropdown
   ====================================================== */
const userMenu = document.querySelector(".userMenu");
const userMenuBtn = document.querySelector(".userMenu__btn");

const closeUserMenu = () => {
  if (!userMenu || !userMenuBtn) return;
  userMenu.classList.remove("is-open");
  userMenuBtn.setAttribute("aria-expanded", "false");
};

if (userMenu && userMenuBtn) {
  userMenuBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    const isOpen = userMenu.classList.toggle("is-open");
    userMenuBtn.setAttribute("aria-expanded", isOpen ? "true" : "false");
  });

  // Cerrar si clic fuera
  document.addEventListener("click", (e) => {
    if (!userMenu.contains(e.target)) closeUserMenu();
  });

  // Cerrar con ESC
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeUserMenu();
  });
}


/* ======================================================
   ADMIN: TABS (Productos / Usuarios / Pedidos / Documentos)
   - Muestra/oculta paneles sin recargar
   ====================================================== */
const adminTabs = document.querySelectorAll(".adminTabs__tab");
const adminPanels = document.querySelectorAll(".adminPanel");

if (adminTabs.length && adminPanels.length) {
  const showPanel = (key) => {
    adminPanels.forEach((p) => {
      const match = p.getAttribute("data-panel") === key;
      p.hidden = !match;
    });

    adminTabs.forEach((b) => {
      const isActive = b.getAttribute("data-tab") === key;
      b.classList.toggle("is-active", isActive);
      b.setAttribute("aria-selected", isActive ? "true" : "false");
    });
  };

  adminTabs.forEach((btn) => {
    btn.addEventListener("click", () => {
      const key = btn.getAttribute("data-tab");
      if (!key) return;
      showPanel(key);
    });
  });
}

});
