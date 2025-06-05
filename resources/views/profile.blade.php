<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>CampusCart</title>
  @vite(['resources/css/profile.css'])
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
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
  
  <div class="username-profile">
    <p><span>Welcome! </span>{{$profile->firstname}} {{$profile->lastname}}</p>
  </div>
  <section class="profile-section">
    <div class="manage-account">
      <div class="management-card">
        <div class="manage-account-header">
          <h3>Manage My Account</h3>
        </div>
        <ul>
          <li><a href="">My Profile</a></li>
          <li><a href="">Address Book</a></li>
          <li><a href="">My Payment Options</a></li>
        </ul>
      </div>
      <div class="management-card">
        <div class="manage-account-header">
          <h3>Manage Orders</h3>
        </div>
        <ul>
          <li><a href="">My Returns</a></li>
          <li><a href="">My Cancellations</a></li>
        </ul>
      </div>
      <div class="management-card">
        <div class="manage-account-header">
          <h3>My Wishlist</h3>
        </div>
        <ul>
          <li><a href="">View Wishlist</a></li>
        </ul>
      </div>
    </div>
    <div class="edit-profile-card">
        <h3>Edit Your Profile</h3>
        <form method="POST" action="/profile/update" class="update-profile-form">
          @csrf
          <div class="user-info">
            <input type="text" name="firstname" class="textfield" placeholder="{{$profile->firstname}}" required>
            <input type="text" name="lastname" class="textfield" placeholder="{{$profile->lastname}}" required>
          </div>
          <div class="user-info-address">
            <input type="email" name="email" class="textfield" placeholder="{{$profile->email}}" required>
            <input type="text" name="address" class="textfield" placeholder="address">
          </div>
          <div class="user-info-password">
            <h3>Update Password</h3>
            <input type="password" name="password" class="textfield" placeholder="New Password" required>
            <input type="password" name="password_confirmation" class="textfield" placeholder="Confirm Password" required>
          </div>
            <button type="submit" class="submit-button">Submit</button>
        </form>
    </div>
  </section>


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