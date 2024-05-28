<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blooming Boutique</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
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
          <?php if (isset($_SESSION['username'])): ?>
            <!-- Display username and logout link if user is logged in -->
            <li class="nav-item">
              <a class="nav-link" href="#">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></a>
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          <?php else: ?>
            <!-- Display login and register links if user is not logged in -->
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
              <a class="nav-link" href="#" data-toggle="modal" data-target="#registerModal">Register</a>
            </li>
          <?php endif; ?>

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
  <section class="jumbotron text-center custom-background" id="my-background"
    style=" background-size: cover; background-position: center; height: 50vh; position: relative;">
    <div class="search-container" style="position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%);">

    </div>
  </section>



  <!-- Featured Ceremonies Section -->
  <div class="container mt-4">
    <h2 class="glow">Featured Ceremonies</h2>
    <div id="featuredBouquetsCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="text-center">
            <a href="birthday.php" class="ceremony-link">
              <p class="ceremony-text">Wedding Bouquet</p>
            </a>
            <img src="images/wedding-bouquet.jpg" alt="Wedding Bouquet" class="img-fluid">
            <a href="wedding.php" class="btn">View Details</a>
          </div>
        </div>
        <div class="carousel-item">
          <div class="text-center">
            <a href="birthday.php" class="ceremony-link">
              <p class="ceremony-text">Birthday Bouquet</p>
            </a>
            <img src="images/birthday-bouquet.jpg" alt="Birthday Bouquet" class="img-fluid">
            <a href="birthday.php" class="btn">View Details</a>
          </div>
        </div>
        <div class="carousel-item">
          <div class="text-center">
            <a href="anniversary.php" class="ceremony-link">
              <p class="ceremony-text">Anniversary Bouquet</p>
            </a>
            <img src="images/anniversary-bouquet.jpg" alt="Anniversary Bouquet" class="img-fluid">
            <a href="anniversary.php" class="btn">View Details</a>
          </div>
        </div>
        <div class="carousel-item">
          <div class="text-center">
            <a href="graduation.php" class="ceremony-link">
              <p class="ceremony-text">Graduation Bouquet</p>
            </a>
            <img src="images/graduation-bouquet.jpg" alt="Graduation Bouquet" class="img-fluid">
            <a href="graduation.php" class="btn">View Details</a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#featuredBouquetsCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#featuredBouquetsCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>


  <!-- Products Section -->
  <section class="container mt-4" id="products">
    <h2 class="glow" style="padding-top: 50px; padding-bottom: 30px;">Our Bouquets</h2>
    <div class="row" id="product-list">
      <!-- Column for Product 1 -->
      <div class="col-md-4 mb-4 d-flex product-card" data-name="roses">
        <div class="card flex-fill">
          <img src="images/roses.jpg" class="card-img-top" alt="Red Roses Bouquet">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title flex-grow-1">Red Roses Bouquet</h5>
            <p class="card-text">Price: $150</p>
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
      <!-- Column for Product 2 -->
      <div class="col-md-4 mb-4 d-flex product-card" data-name="lilies">
        <div class="card flex-fill">
          <img src="images/lilies.jpg" class="card-img-top" alt="White Lilies Bouquet">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title flex-grow-1">White Lilies Bouquet</h5>
            <p class="card-text">Price: $80</p>
            <div class="review-stars">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span>(56)</span>
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
      <!-- Column for Product 3 -->
      <div class="col-md-4 mb-4 d-flex product-card" data-name="tulips">
        <div class="card flex-fill">
          <img src="images/tulips.jpg" class="card-img-top" alt="Colorful Tulips Bouquet">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title flex-grow-1">Colorful Tulips Bouquet</h5>
            <p class="card-text">Price: $60</p>
            <div class="review-stars">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span>(64)</span>
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
      <!-- Column for Product 4 -->
      <div class="col-md-4 mb-4 d-flex product-card" data-name="orchids">
        <div class="card flex-fill">
          <img src="images/orchids.jpg" class="card-img-top" alt="Purple Orchids Bouquet">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title flex-grow-1">Purple Orchids Bouquet</h5>
            <p class="card-text">Price: $90</p>
            <div class="review-stars">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span>(89)</span>
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
      <!-- Column for Product 5 -->
      <div class="col-md-4 mb-4 d-flex product-card" data-name="daisies">
        <div class="card flex-fill">
          <img src="images/daisies.jpg" class="card-img-top" alt="Daisies Bouquet">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title flex-grow-1">Daisies Bouquet</h5>
            <p class="card-text">Price: $50</p>
            <div class="review-stars">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span>(45)</span>
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
      <!-- Column for Product 6 -->
      <div class="col-md-4 mb-4 d-flex product-card" data-name="sunflowers">
        <div class="card flex-fill">
          <img src="images/sunflowers.jpg" class="card-img-top" alt="Sunflowers Bouquet">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title flex-grow-1">Sunflowers Bouquet</h5>
            <p class="card-text">Price: $70</p>
            <div class="review-stars">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span>(60)</span>
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
      <!-- Column for Product 7 -->
      <div class="col-md-4 mb-4 d-flex product-card" data-name="peonies">
        <div class="card flex-fill">
          <img src="images/peonies.jpg" class="card-img-top" alt="Peonies Bouquet">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title flex-grow-1">Peonies Bouquet</h5>
            <p class="card-text">Price: $110</p>
            <div class="review-stars">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span>(80)</span>
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
      <!-- Column for Product 8 -->
      <div class="col-md-4 mb-4 d-flex product-card" data-name="carnations">
        <div class="card flex-fill">
          <img src="images/carnations.jpg" class="card-img-top" alt="Carnations Bouquet">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title flex-grow-1">Carnations Bouquet</h5>
            <p class="card-text">Price: $40</p>
            <div class="review-stars">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span>(65)</span>
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

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5>About Us</h5>
          <p>Blooming Boutique is a family-owned business offering the freshest and most beautiful flower arrangements
            for all occasions.</p>
        </div>
        <div class="col-md-4">
          <h5>Contact Us</h5>
          <ul>
            <li>Email: info@bloomingboutique.com</li>
            <li>Phone: (123) 456-7890</li>
            <li>Address: 123 Flower Street, Blossom City, FL</li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Follow Us</h5>
          <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

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
      <form id="loginForm" action="php/login.php">
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
      <form id="registerForm" action="php/register.php">
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

  <script src="js/script.js"></script>

</body>

</html>