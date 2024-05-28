<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Birthday Bouquet</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="css/style.css"> <!-- Link to your custom CSS file -->
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

  <!-- Hero Section -->
  <section class="hero-section ceremony-page">
    <h2 class="glow" style="padding-top: 50px; padding-bottom: 30px;"> Birthday Bouquet</h2>
  </section>

  <!-- Birthday Bouquet Details -->
  <section class="ceremony-details ceremony-page">
    <div class="row justify-content-center" id="product-list">
      <!-- Column for Product 1 -->
      <div class="col-md-4 mb-4 d-flex product-card" data-name="birthday">
        <div class="card flex-fill">
          <img src="images/birthday-bouquet.jpg" class="card-img-top" alt="birthday Bouquet">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title flex-grow-1">Birthday Bouquet</h5>
            <p class="card-text">Price: $50</p>
            <div class="review-stars">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span>(74)</span>
            </div>
            <p class="card-text">Quantity:
            <div class="quantity-input d-flex">
              <button class="btn btn-sm btn-secondary quantity-btn minus-btn" type="button">-</button>
              <input type="text" class="form-control quantity" value="1">
              <button class="btn btn-sm btn-secondary quantity-btn plus-btn" type="button">+</button>
            </div>
            </p>
            <a href="#" class="btn add-to-cart-btn">Add to Cart</a>
            <div class="cart-notification" style="display: none;">Added to Cart!</div>

          </div>
        </div>
      </div>
    </div>
  </section>


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
      <span class="close">&times;</span>
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


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.birds.min.js"></script>
  <script src="js/cart.js"></script>
  <script src="js/script.js"></script>
</body>

</html>