<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="styleL.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form action="login.inc.php"method="post">
        <div class="txt_field">
          <input type="text" name="Name" required>
          <span></span>
          <label>Name</label>
        </div>
        <div class="txt_field">
          <input type="password" name="Password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div><br></div>
        <input type="submit" value="Login">
        <br>
        <input type="submit" value="Login via OTP">
        <div class="signup_link">
        </div>
      </form>
    </div>

  </body>
</html>
