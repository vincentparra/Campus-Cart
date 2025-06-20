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
  @forelse ($cartItems as $item)
    <tr>
      <td class="cart_product">
        <img src="{{ $item->product->imgDestination }}" alt="{{ $item->product->productName }}" />
        <span>{{ $item->product->productName }}</span>
      </td>
      <td>₱{{ $item->product->price }}</td>
      <td><input type="number" value="{{ $item->quantity }}" min="1" disabled /></td>
      <td>₱{{ $item->product->price * $item->quantity }}</td>
      <td>
        <form method="POST" action="">
          @csrf
          @method('DELETE')
          <button type="submit"><i class="fas fa-trash remove-icon"></i></button>
        </form>
      </td>
    </tr>
  @empty
    <tr>
      <td colspan="5">Your cart is empty.</td>
    </tr>
  @endforelse
</tbody>
      </table>
      <div class="cart_summary">
        <h2>Cart Total</h2>
        <a href="{{ route('checkout.index') }}" class="checkout_btn">Proceed to Checkout</a>
      </div>
    </div>  
  </main>
</body>
</html>
