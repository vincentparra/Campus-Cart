<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CampusCart - Product</title>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
   @vite(['resources/css/productFeat.css'])
</head>
<body>
  <div class="banner">
    <h3>Summer Sale For All Selected Items  And Free Express Delivery - OFF 50%!</h3>
  </div>

  <div class="desktop_header">
    <div class="logo"><p>CampusCart</p></div>
    <nav class="nav_links">
      <ul>
        <li><a href="/homepage">HOME</a></li>
        <li><a href="#">CONTACT</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">SIGN UP</a></li>
      </ul>
    </nav>
    <div class="search">
      <input type="text" placeholder="What are you looking for?" />
    </div>
    <div class="nav-icons">
      <a href="#"><i class="fas fa-user"></i></a>
      <a href="#"><i class="fas fa-shopping-cart"></i></a>
    </div>
  </div>

  <main class="product_main">
   @foreach ($product as $products)
      <div class="product_container">
        <div class="product_image">
          <img src="{{$products['imgDestination']}}" alt="Campus Hoodie" id="product-image" />
        </div>
        <div class="product_details">
          <h1 id="product-name">{{$products['productName']}}</h1>
          <p id="product-description">{{$products['description']}}</p>
          <p class="price" id="product-price">{{$products['price']}}</p>

          <div class="product_action">
            <label for="quantity">Qty:</label>
            <input type="number" id="quantity" name="quantity" min="1" value="1" />
            <button class="add_to_cart_btn">Add to Cart</button>
          </div>
        </div>
      </div>
    @endforeach
  </main>
</body>
</html>
