
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Library Login</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="login-container">
    <div class="logo">E-lib</div>
    <h2>Welcome to E-Library</h2>
    <p class="tagline">"Read.Learn.Grow-Anytime,Anywhere"</p>

    <form action="server1.php" method="post" >
      <input type="text" name="username" id="username" placeholder="Enter Username" required maxlength="10"><br>
      <input type="password" name="password" id="password" placeholder="Enter Password" required maxlength="15"><br>
      <button type="submit" name="submit" value="submit" class="login-btn">Login</button>
    </form>

    <div class="footer">
      <p>Don't have an account? <a href="register.php">Register</a></p>
    </div>
  </div>
</body>
</html>