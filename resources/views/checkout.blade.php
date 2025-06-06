<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CampusCart - Checkout</title>
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
    <h3>Summer Sale For All Selected Items And Free Express Delivery - OFF 50%!</h3>
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
    <h1>Checkout</h1>
    <div class="cart_container">
      <table class="cart_table">
        <thead>
          <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Subtotal</th>
          </tr>
        </thead>
        <tbody>
          @php $subtotal = 0; @endphp
          @forelse ($cart as $item)
            @php
              $itemTotal = $item['price'] * $item['quantity'];
              $subtotal += $itemTotal;
            @endphp
            <tr>
              <td class="cart_product">
                <img src="{{ $item['img'] ?? '#' }}" alt="{{ $item['name'] }}" />
                <span>{{ $item['name'] }}</span>
              </td>
              <td>₱{{ $item['price'] }}</td>
              <td>{{ $item['quantity'] }}</td>
              <td>₱{{ $itemTotal }}</td>
            </tr>
          @empty
            <tr>
              <td colspan="4">Your cart is empty.</td>
            </tr>
          @endforelse
        </tbody>
      </table>

      <div class="cart_summary">
        <h2>Order Summary</h2>
        <p>Subtotal: ₱{{ $subtotal }}</p>
        <p>Shipping: Free</p>
        <p><strong>Total: ₱{{ $subtotal }}</strong></p>
        <button class="checkout_btn">Place Order</button>
      </div>
    </div>
  </main>
</body>
</html>
