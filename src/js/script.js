/* ===============================
   GLOBAL CART
================================ */
let cart = [];

/* ===============================
   TOGGLE SIDE MENU
================================ */
function toggleMenu() {
    document.getElementById("sideMenu").classList.toggle("open");
}


/* ===============================
   DARK MODE
================================ */
function toggleDarkMode() {
  document.body.classList.toggle("dark-mode");
}

/* ===============================
   LANGUAGE TOGGLE
================================ */
let isArabic = false;
function toggleLanguage() {
  isArabic = !isArabic;
  document.body.dir = isArabic ? "rtl" : "ltr";

  document.querySelectorAll("[data-en]").forEach(el => {
    el.innerText = isArabic ? el.dataset.ar : el.dataset.en;
  });
}

/* ===============================
   WELCOME MESSAGE
================================ */
/*
window.onload = function () {
  alert("Welcome to your favorite store, We are happy to see you");
};
*/

/* ===============================
   SCROLL TO PAINTING
================================ */
document.addEventListener("DOMContentLoaded", function () {
    /* Scroll to painting */
    const select = document.getElementById("paint");
    if (select) {
        select.addEventListener("change", function () {
            const target = document.querySelector(this.value);
            if (target) {
                target.scrollIntoView({ behavior: "smooth" });
                target.classList.add("highlight");
                setTimeout(() => target.classList.remove("highlight"), 2000);
            }
        });
    }

    /* Buy buttons */
    document.querySelectorAll(".buy-button").forEach(button => {
        button.addEventListener("click", function () {
            const id = this.dataset.id;
            const name = this.dataset.name;
            const price = parseFloat(this.dataset.price);
            console.log("Added to cart:", name);
            addToCart(id, name, price);
        });
    });

    /* Payment form */
    const paymentForm = document.getElementById("payment-form");
    if (paymentForm) {
        paymentForm.addEventListener("submit", function (e) {
            e.preventDefault();
            alert("Payment successful! 🎉 (Demo only)");
            cart = [];
            updateCartCount();
            toggleCart();
        });
    }
});

/* ===============================
   CART FUNCTIONS
================================ */
function addToCart(id, name, price) {
  const existingItem = cart.find(item => item.id === id);

  if (existingItem) {
    existingItem.quantity++;
  } else {
    cart.push({ id, name, price, quantity: 1 });
  }

  updateCartCount();
}

function updateCartCount() {
  const count = cart.reduce((sum, item) => sum + item.quantity, 0);
  const cartCount = document.getElementById("cart-count");
  if (cartCount) cartCount.innerText = count;
}

function toggleCart() {
  const modal = document.getElementById("cart-modal");
  const overlay = document.getElementById("cart-overlay");

  if (!modal || !overlay) return;

  const isOpen = modal.style.display === "block";

  modal.style.display = isOpen ? "none" : "block";
  overlay.style.display = isOpen ? "none" : "block";

  if (!isOpen) renderCart();
}

function renderCart() {
  const cartItems = document.getElementById("cart-items");
  const totalEl = document.getElementById("cart-total");

  if (!cartItems || !totalEl) return;

  cartItems.innerHTML = "";
  let total = 0;

  cart.forEach(item => {
    const li = document.createElement("li");
    li.textContent = `${item.name} x${item.quantity} - $${item.price * item.quantity}`;
    cartItems.appendChild(li);
    total += item.price * item.quantity;
  });

  totalEl.textContent = "Total: $" + total;
}

