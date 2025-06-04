<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - CampusCart</title>

  @vite(['resources/css/login.css'])
</head>
<body>
  <div class="logo">
    <h1>CampusCart</h1>
  </div>
  <form method="POST" action="/register" class="login-form">
    @csrf
    <h2>Register</h2>

    @if ($errors->any())
      <div class="error">
        <ul style="list-style: none; padding: 0;">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

    <button type="submit">Register</button>

    <p>Already have an account? <a href="/login">Login</a></p>
  </form>
</body>
</html>
