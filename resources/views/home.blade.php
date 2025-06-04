<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CampusCart</title>
  @vite(['resources/css/homepage.css'])
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
</head>
<body>
  <!-- Top Banner -->
  <div class="banner">
    <h3>Summer Sale For All Selected Items  And Free Express Delivery - OFF 50%!</h3>
  </div>

  <!-- Header -->
  <div class="desktop_header">
    <div class="logo"><p>CampusCart</p></div>
    <nav class="nav_links">
      <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">CONTACT</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">SIGN UP</a></li>
      </ul>
    </nav>
    <div class="search">
      <input type="text" id="search" placeholder="What are you looking for?" />
    </div>
    <div class="nav-icons">
      <a href="#"><i class="fas fa-user"></i></a>
      <a href="/cart"><i class="fas fa-shopping-cart"></i></a>
    </div>
  </div>

  
  <main class="homepage_main">
    
    <section class="hero">
      <div class="hero-text">
        <h1>Buy and Sell Items with Your Schoolmates</h1>
        <p>Browse thousands of listings from fellow students. Affordable, convenient, and campus-based.</p>
      </div>
    </section>

    
    <section class="flash-sale-card">
      <h1>Flash Sale</h1>
      <div class="card-container">
        <div class="product-card">
          <img src="images/campusHood.jpeg" alt="Campus Hoodie" />
          <div class="product-description">
            <p>Price: 200</p>
          </div>
        </div>
        <div class="product-card">
          <img src="images/campusHood.jpeg" alt="Campus Hoodie" />
          <div class="product-description">
            <p>Price: 200</p>
          </div>
        </div>
        <div class="product-card">
          <img src="images/campusHood.jpeg" alt="Campus Hoodie" />
          <div class="product-description">
            <p>Price: 200</p>
          </div>
        </div>
        <div class="product-card">
          <img src="images/campusHood.jpeg" alt="Campus Hoodie" />
          <div class="product-description">
            <p>Price: 200</p>
          </div>
        </div>
      </div>
      <div class="action">
        <a href="/products" class="viewProductbtn">View all Products</a>
      </div>
    </section>

    
    <section class="flash-sale-card">
      <h1>Featured Categories</h1>
      <div class="card-container">
        <div class="product-card">
          <img src="images/stationery.jpg" alt="Stationery" />
          <div class="product-description">
            <p>Stationery</p>
          </div>
        </div>
        <div class="product-card">
          <img src="images/electronics.jpg" alt="Electronics" />
          <div class="product-description">
            <p>Electronics</p>
          </div>
        </div>
        <div class="product-card">
          <img src="images/books.jpg" alt="Books" />
          <div class="product-description">
            <p>Books</p>
          </div>
        </div>
        <div class="product-card">
          <img src="images/clothes.jpg" alt="Clothing" />
          <div class="product-description">
            <p>Clothing</p>
          </div>
        </div>
      </div>
    </section>

    
    <section class="flash-sale-card">
      <h1>Stay Updated!</h1>
      <p>Get the latest deals and updates from CampusCart directly in your inbox.</p>
      <form style="margin-top: 20px;">
        <input type="email" placeholder="Enter your email" style="padding: 10px; border-radius: 8px; border: 1px solid #ccc; width: 250px;" />
        <button type="submit" class="viewProductbtn" style="margin-left: 10px;">Subscribe</button>
      </form>
    </section>
  </main>

  
  <footer style="background-color: #222; color: #fff; padding: 30px; text-align: center; margin-top: 40px;">
    <p>&copy; 2025 CampusCart. All rights reserved.</p>
    <p>Follow us:
      <a href="#" style="color: #fff; margin: 0 10px;"><i class="fab fa-facebook-f"></i></a>
      <a href="#" style="color: #fff; margin: 0 10px;"><i class="fab fa-twitter"></i></a>
      <a href="#" style="color: #fff; margin: 0 10px;"><i class="fab fa-instagram"></i></a>
    </p>
  </footer>
</body>
</html>
