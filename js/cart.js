document.addEventListener('DOMContentLoaded', function () {
  let cart = JSON.parse(localStorage.getItem('cart')) || [];
  const cartItemsContainer = document.getElementById('cart-items');
  const totalPriceElement = document.getElementById('total-price');

  function formatProductName(productName) {
    return productName.toLowerCase().replace(/\s+/g, '-');
  }

  function renderCart() {
    if (cart.length === 0) {
      cartItemsContainer.innerHTML = '<p class="col-12 text-center">Your cart is empty.</p>';
    } else {
      cartItemsContainer.innerHTML = cart.map((item, index) => `
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="images/${formatProductName(item.name)}.jpg" class="card-img-top" alt="${item.name}" onerror="this.onerror=null;this.src='images/default.jpg';">
            <div class="card-body">
              <h5 class="card-title">${item.name}</h5>
              <p class="card-text">Price: $${item.price}</p>
              <p class="card-text">Quantity: ${item.quantity}</p>
              <p class="card-text">Total: $${(item.price * item.quantity).toFixed(2)}</p>
              <button class="btn btn-danger delete-item" data-index="${index}">Delete</button>
            </div>
          </div>
        </div>
      `).join('');
    }
  }

  function updateCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
    renderCart();
    updateCartCount();
    updateTotalPrice();
  }

  function updateCartCount() {
    const cartCount = cart.reduce((total, item) => total + item.quantity, 0);
    document.getElementById('cart-count').innerText = cartCount;
  }

  function updateTotalPrice() {
    const totalPrice = cart.reduce((total, item) => total + item.price * item.quantity, 0).toFixed(2);
    totalPriceElement.innerText = totalPrice;
  }

  cartItemsContainer.addEventListener('click', function (event) {
    if (event.target.classList.contains('delete-item')) {
      const index = parseInt(event.target.getAttribute('data-index'));
      cart.splice(index, 1);
      updateCart();
    }
  });

  renderCart();
  updateCartCount();
  updateTotalPrice();

  
});
