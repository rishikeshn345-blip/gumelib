<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="register.css">
  <title>E-Library Registration</title>
</head>
<body>
  <div class="register-container">
    <div class="logo">E-lib</div>
    <h2>Create Your Account</h2>
    <p class="tagline">Your Gateway to Knowledge</p>

    <form action="server2.php" method="post">
      <input type="email" name="email" id="email" value="" placeholder="Email Address"><br>
      <input type="text" name="username" id="username" placeholder="Username" required maxlength="10"><br>
      <input type="password" name="password" id="password" placeholder="Password" required maxlength="12"><br>
      <input type="password" name="cpassword" id="confirm" placeholder="Confirm Password" required maxlength="12"><br>
      <button type="submit" name="submit" value="submit" class="register-btn">Register</button>
    </form>

    <div class="footer">
      <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
  </div>
</body>
</html>