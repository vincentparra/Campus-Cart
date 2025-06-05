<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CampusCart</title>

  @vite(['resources/css/homepage.css'])

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!-- Top Banner -->
  <div class="banner">
    <h3>Summer Sale For All Selected Items And Free Express Delivery - OFF 50%!</h3>
  </div>
  <!-- Header -->
  <div class="desktop_header">
    <div class="logo"><p>CampusCart</p></div>
    <nav class="nav_links">
      <ul>
        <li><a href="/homepage">HOME</a></li>
        <li><a href="#">CONTACT</a></li>
        <li><a href="#">ABOUT</a></li>
        <form method="POST" action="/logout">
          @csrf
          <button type="submit" class="logout">LOGOUT</button>
        </form>
      </ul>
    </nav>
  
   <div class="nav-icons">
      <input type="text" id="search" placeholder="What are you looking for?" />
      <a href="/profile/{{$profile->id}}"><i class="fas fa-user"></i></a>
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
        @foreach($product as $item)
          <div class="product-card">
            <img src="{{ $item->imgDestination}}" alt="{{ $item->productName }}">
            <div class="product-description">
              <p><strong>{{ $item->productName }}</strong></p>
              <p>₱{{ $item->price }}</p>
            </div>
            <button onclick="showProductModal('{{$item->productId}}')" class="viewProductbtn">View</button>
          </div>
        @endforeach
      </div>
      <div class="action">
        <a href="/products" class="viewProductbtn">View all Products</a>
      </div>
    </section>

    <!-- Modal -->
    <div id="productModal" class="modal-overlay" style="display: none;">
      <div class="modal-content">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <div class="modal-image">
          <img id="modal-image" src="" alt="Product Image" />
        </div>
        <div class="modal-details">
          <h2 id="modal-name">Product Name</h2>
          <p class="price" id="modal-price">₱0.00</p>
          <p class="description" id="modal-description">Product description goes here.</p>
          <button class="addToCartBtn">Add to Cart</button>
        </div>
      </div>
    </div>

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

  <!-- Scripts -->
  <script>
    const productData = @json($product);

    function showProductModal(productId) {
      const item = productData.find(p => p.productId === productId);

      if (item) {
        document.getElementById('modal-name').textContent = item.productName;
        document.getElementById('modal-price').textContent = '₱' + item.price;
        document.getElementById('modal-description').textContent = item.description || 'No description available.';
        document.getElementById('modal-image').src = `${item.imgDestination}`;
        document.getElementById('productModal').style.display = 'flex';
      }
    }

    function closeModal() {
      document.getElementById('productModal').style.display = 'none';
    }
  </script>
</body>
</html>

