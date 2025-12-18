/**
 * app.js
 * =========================================================
 * Controla:
 * 1) Menú móvil del NAVBAR
 * 2) Ojito de contraseña
 * 3) Estado de cuenta (tabs)
 * 4) Carrito
 * 5) ADMINISTRAR (SOLO tabs, sin acción en botón +)
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
    (Number(n) || 0).toLocaleString("es-MX", {
      style: "currency",
      currency: "MXN",
    });

  /* ======================================================
     1) NAVBAR MÓVIL
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
     2) PERFIL: OJITO
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
     3) ESTADO DE CUENTA: TABS
     ====================================================== */
  const accountTabs = document.querySelector("#accountTabs");
  const accountViews = document.querySelector("#accountViews");

  if (accountTabs && accountViews) {
    const tabs = [...accountTabs.querySelectorAll(".account__tab")];
    const views = [...accountViews.querySelectorAll(".account__view")];

    const setActiveTab = (name) => {
      tabs.forEach((t) => t.classList.toggle("is-active", t.dataset.tab === name));
      views.forEach((v) => v.classList.toggle("is-active", v.dataset.view === name));
    };

    accountTabs.addEventListener("click", (e) => {
      const btn = e.target.closest(".account__tab");
      if (!btn) return;
      setActiveTab(btn.dataset.tab);
    });
  }

  /* ======================================================
   ADMINISTRAR: Tabs (LOS 4 FUNCIONAN)
   ====================================================== */

const adminTabs = document.querySelectorAll(".adminTabs__tab");
const adminPanels = document.querySelectorAll(".adminPanel");

function showAdminPanel(name) {
  adminPanels.forEach(panel => {
    panel.hidden = panel.dataset.panel !== name;
  });

  adminTabs.forEach(tab => {
    const active = tab.dataset.tab === name;
    tab.classList.toggle("is-active", active);
    tab.setAttribute("aria-selected", active ? "true" : "false");
  });
}

// Click en los 4 tabs
adminTabs.forEach(tab => {
  tab.addEventListener("click", () => {
    showAdminPanel(tab.dataset.tab);
  });
});

  // Vista inicial
showAdminPanel("productos");
 
  // 🚫 BOTÓN VERDE (+) DESACTIVADO A PROPÓSITO
  // No tiene ningún listener.
  // Queda solo visual hasta que decidas qué debe hacer.

  /* ======================================================
     5) USER MENU (dropdown)
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

    document.addEventListener("click", (e) => {
      if (!userMenu.contains(e.target)) closeUserMenu();
    });

    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") closeUserMenu();
    });
  }

});
