<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Page</title>
  <link rel="stylesheet" href="css/login.css" />
</head>
<body>
  <div class="container">
    <div class="login-form">
      <form method="POST" action="/login">
        @csrf
        <h2>Login to your account!</h2>
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="example@gmail.com" required />
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="password" required />
        
        <button type="submit">Login</button>
      </form>
      
      <p class="signup-text">
        Don’t have an account? <a href="register">register</a>
      </p>
    </div>
    
    <div class="illustration">
      <img src="imgs/Login-amico 1.png" alt="Login Illustration">
    </div>
  </div>

  <script src="js/script.js"></script>
</body>
</html>

