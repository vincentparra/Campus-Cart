<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - CampusCart</title>
  
  @vite(['resources/css/login.css']) {{-- Load your external CSS --}}
</head>
<body>
  <div class="logo">
    <h1>CampusCart</h1>
  </div>
  <form method="POST" action="{{ route('login') }}" class="login-form">
    @csrf
    <h2>Login</h2>

    @if(session('error'))
      <div class="error">{{ session('error') }}</div>
    @endif

    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>

    <button type="submit">Login</button>

    <p>Don't have an account? <a href="/register">Register</a></p>
  </form>
</body>
</html>
