<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="w3-lobster" href="index.php">Blooming Boutique</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto" style="font-weight: bold;">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#products">Bouquets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="about-link">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="contact-link">Contact</a>
          </li>
        </ul>
        <form class="my-2 my-lg-0 mr-3 custom-form" style="display: contents;">
          <input type="text" name="search" placeholder="Search..">
        </form>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
            <a class="nav-link" href="#" data-toggle="modal" data-target="#registerModal">Register</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="cart.php">
              <i class="fas fa-shopping-cart" style="font-size: 24px;"></i>
              <span class="badge badge-pill badge-danger" id="cart-count">4</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- About Modal -->
  <div id="about-modal" class="modal">
    <div class="modal-content">
      <span class="close" id="close-about-button">&times;</span>
      <h2>About Blooming Boutique</h2>
      <p>Blooming Boutique is a family-owned business offering the freshest and most beautiful flower arrangements for
        all occasions. Our expert florists craft each bouquet with care and attention to detail, ensuring that every
        arrangement is perfect for your special moments.</p>
    </div>
  </div>

  <!-- Contact Modal -->
  <div id="contact-modal" class="modal">
    <div class="modal-content">
      <span class="close" id="close-contact-button">&times;</span>
      <h2>Contact Us</h2>
      <form method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
        <button type="submit">Submit</button>
      </form>
    </div>
  </div>


  <!-- Login Modal -->
  <div id="loginModal" class="modal">
    <div class="modal-content">
      <span class="close" id="closeLoginButton">&times;</span>
      <h2>Login</h2>
      <form id="loginForm">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
      </form>
    </div>
  </div>

  <!-- Register Modal -->
  <div id="registerModal" class="modal">
    <div class="modal-content">
      <span class="close" id="closeRegisterButton">&times;</span>
      <h2>Register</h2>
      <form id="registerForm">
        <label for="newUsername">Username:</label>
        <input type="text" id="newUsername" name="username" required>
        <label for="newEmail">Email:</label>
        <input type="email" id="newEmail" name="email" required>
        <label for="newPassword">Password:</label>
        <input type="password" id="newPassword" name="password" required>
        <button type="submit">Register</button>
      </form>
    </div>
  </div>


  <div class="container mt-4">
    <h2 class="text-center">Your Cart</h2>
    <div class="row" id="cart-items"></div>
    <div class="text-center mt-4">
      <h4>Total Price: $<span id="total-price">0.00</span></h4>
      <a href="checkout.php" class="btn btn-primary mt-2">Proceed to Checkout</a>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="js/cart.js"></script>
  <script src="js/script.js"></script> <!-- Include the original script.js for handling modals and search -->
</body>

</html>