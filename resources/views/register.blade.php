<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up</title>
  <link rel="stylesheet" href="css/register.css" />
</head>
<body>
    <div class="container">
        <div class="illustration">
            <img src="imgs/SignUp-amico.png" alt="Sign Up Illustration">
        </div>
        <div class="signup-form">   
            <form method="POST" action="/register">
                @csrf
                <h2>Join us !</h2>

                <label for="name">Username</label>
                <input type="text" id="name" name="name" placeholder="username" required />

                <label for="email">e-mail :</label>
                 <input type="email" id="email" name="email" placeholder="example@gmail.com" required />

                <label for="password">password :</label>
                 <input type="password" id="password" name="password" placeholder="password" required />

                <button type="submit">Sign up</button>

                <p class="login-text">already have an account? <a href="/login">Log in</a></p>
            </form>
        </div>
  </div>

  <script src="jss/signup.js"></script>
</body>
</html>
