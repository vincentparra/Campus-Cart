<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CampusCart - Cart</title>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
  @vite(['resources/css/cart.css'])
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
        <form method="POST" action="/logout">
          @csrf
          <button type="submit" class="logout">LOGOUT</button>
        </form>
      </ul>
    </nav>
    <div class="nav-icons">
      <input type="text" id="search" placeholder="What are you looking for?" />
      <a href="/profile"><i class="fas fa-user"></i></a>
      <a href="/cart"><i class="fas fa-shopping-cart"></i></a>
    </div>
  </div>

  <main class="cart_main">
    <h1>Your Cart</h1>
    <div class="cart_container">
      <table class="cart_table">
        <thead>
          <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
            <th>Remove</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="cart_product">
              <img src="images/campusHood.jpeg" alt="Campus Hoodie" />
              <span>Campus Hoodie</span>
            </td>
            <td>₱200</td>
            <td><input type="number" value="1" min="1" /></td>
            <td>₱200</td>
            <td><i class="fas fa-trash remove-icon"></i></td>
          </tr>
          <!-- this should be dynamic also -->
        </tbody>
      </table>

      <div class="cart_summary">
        <h2>Cart Total</h2>
        <p>Subtotal: <strong>₱200</strong></p>
        <p>Delivery: <strong>Free</strong></p>
        <p>Total: <strong>₱200</strong></p>
        <button class="checkout_btn">Proceed to Checkout</button>
      </div>
    </div>
  </main>
</body>
</html>
