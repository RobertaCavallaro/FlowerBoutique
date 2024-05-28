document.addEventListener('DOMContentLoaded', (event) => {
  // Ensure modals close when clicking outside them
  $(document).on('click', function (e) {
    if ($(e.target).is('.modal') && !$(e.target).find('.modal-dialog').is(e.target)) {
      $(e.target).modal('hide');
    }
  });

  // Initialize the cart from localStorage or an empty array
  let cart = JSON.parse(localStorage.getItem('cart')) || [];

  // Function to add items to the cart
  function addToCart(productName, productPrice, quantity) {
    const existingItem = cart.find(item => item.name === productName);

    if (existingItem) {
      existingItem.quantity += quantity;
    } else {
      cart.push({ name: productName, price: productPrice, quantity: quantity });
    }

    updateCart();
  }

  // Function to update the cart in localStorage and update the cart count badge
  function updateCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartCount();
    updateTotalPrice();
  }

  // Function to update the cart count badge
  function updateCartCount() {
    const cartCount = cart.reduce((total, item) => total + item.quantity, 0);
    const cartCountElement = document.getElementById('cart-count');
    if (cartCountElement) {
      cartCountElement.innerText = cartCount;
    }
  }

  // Function to update the total price
  function updateTotalPrice() {
    const totalPrice = cart.reduce((total, item) => total + item.price * item.quantity, 0).toFixed(2);
    const totalPriceElement = document.getElementById('total-price');
    if (totalPriceElement) {
      totalPriceElement.innerText = totalPrice;
    }
  }

  // Event listeners for quantity buttons
  const quantityButtons = document.querySelectorAll('.quantity-btn');
  if (quantityButtons.length > 0) {
    quantityButtons.forEach(button => {
      button.addEventListener('click', function (event) {
        const input = event.target.closest('.quantity-input').querySelector('.quantity');
        let quantity = parseInt(input.value);

        if (event.target.classList.contains('plus-btn')) {
          quantity += 1;
        } else if (event.target.classList.contains('minus-btn') && quantity > 1) {
          quantity -= 1;
        }

        input.value = quantity;
      });
    });
  } else {
    console.log('No quantity buttons found');
  }

  // Event listener for add to cart buttons
  const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
  if (addToCartButtons.length > 0) {
    addToCartButtons.forEach(button => {
      button.addEventListener('click', function (event) {
        event.preventDefault();
        const card = event.target.closest('.card');
        const productName = card.querySelector('.card-title').innerText;
        const productPrice = parseFloat(card.querySelector('.card-text').innerText.replace('Price: $', ''));
        const quantity = parseInt(card.querySelector('.quantity').value);

        addToCart(productName, productPrice, quantity);
      });
    });
  } else {
    console.log('No add to cart buttons found');
  }

  // Initial update of the cart count on page load
  updateCartCount();
  updateTotalPrice();
});




  // modals for about and contact buttons
document.addEventListener("DOMContentLoaded", function() {
  // Get the modal elements
  var aboutModal = document.getElementById("about-modal");
  var contactModal = document.getElementById("contact-modal");

  // Get the button that opens the modal
  var aboutBtn = document.getElementById("about-link");
  var contactBtn = document.getElementById("contact-link");

  // Get the <span> elements that close the modal
  var closeAbout = document.getElementById("close-about-button");
  var closeContact = document.getElementById("close-contact-button");

  // When the user clicks the button, open the modal
  aboutBtn.onclick = function() {
      aboutModal.style.display = "block";
  }
  contactBtn.onclick = function() {
      contactModal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  closeAbout.onclick = function() {
      aboutModal.style.display = "none";
  }
  closeContact.onclick = function() {
      contactModal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == aboutModal) {
          aboutModal.style.display = "none";
      }
      if (event.target == contactModal) {
          contactModal.style.display = "none";
      }
  }
});

// notification added to cart
document.addEventListener('DOMContentLoaded', function() {
  const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');

  addToCartButtons.forEach(button => {
      button.addEventListener('click', function(event) {
          event.preventDefault();
          const cardBody = button.closest('.card-body');
          const notification = cardBody.querySelector('.cart-notification');
          notification.style.display = 'block'; // Show the notification

          setTimeout(() => {
              notification.style.display = 'none'; // Hide the notification after 3 seconds
          }, 3000);
      });
  });
});




document.addEventListener('DOMContentLoaded', function() {
  VANTA.BIRDS({
    el: "#my-background",
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    scaleMobile: 1.00,
    backgroundColor: 0xffffff,
    color1: 0xc24949,
    color2: 0x37a7cf,
    colorMode: "variance",
    birdSize: 1.70,
    wingSpan: 32.00,
    speedLimit: 3.00,
    separation: 50.00,
    alignment: 28.00,
    cohesion: 37.00,
    quantity: 3.00
  })
});




// login modal  buttons 
document.addEventListener('DOMContentLoaded', () => {
  // Close modals when clicking outside them
  $(document).on('click', function (e) {
      if ($(e.target).is('.modal') && !$(e.target).find('.modal-dialog').is(e.target)) {
          $(e.target).modal('hide');
      }
  });

  // Login and Registration modals handling
  const closeButtons = document.querySelectorAll('[data-dismiss="modal"]');
  closeButtons.forEach(button => {
      button.addEventListener('click', () => {
          const modal = button.closest('.modal');
          modal.style.display = 'none';
      });
  });

  window.onclick = function(event) {
      const modals = document.querySelectorAll('.modal');
      modals.forEach(modal => {
          if (event.target === modal) {
              modal.style.display = 'none';
          }
      });
  };

  // Handle form submissions for login
  const loginForm = document.getElementById('loginForm');
  if (loginForm) {
      loginForm.addEventListener('submit', function(event) {
          event.preventDefault();
          const formData = new FormData(loginForm);

          fetch('php/login.php', {
              method: 'POST',
              body: formData
          })
          .then(response => response.json())
          .then(data => {
              if (data.success) {
                  window.location.href = 'index.php'; // Redirect if login is successful
              } else {
                  const loginError = document.getElementById('loginError');
                  loginError.textContent = data.message;
                  loginError.style.display = 'block';
              }
          })
          .catch(error => console.error('Error:', error));
      });
  }
});
