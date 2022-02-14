<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign up Page</title>
    <link rel="stylesheet" href="styleL.css">
    <link rel="stylesheet" href="stylePC.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="center">
      <h1>Sign Up as Dealer</h1>
      <form action="submit.inc.dealer.php" method="post">
        <div class="txt_field">
          <input type="text" name="Name" required>
          <span></span>
          <label>Name</label>
        </div>
        <div class="txt_field">
          <input type="text" name="MobileNumber" required>
          <span></span>
          <label>Mobile Number</label>
        </div>
        <div class="txt_field">
          <input type="text" name="NatureofMaterial" required>
          <span></span>
          <label>Nature of Material</label>
        </div>
        <div class="txt_field">
          <input type="text" name="WeightofMaterial" required>
          <span></span>
          <label>Weight of Material</label>
        </div>
        <div class="txt_field">
          <input type="text" name="Quantity" required>
          <span></span>
          <label>Quantity</label>
        </div>
        <div class="txt_field">
          <input type="text" name="City" required>
          <span></span>
          <label>City</label>
        </div>
        <div class="txt_field">
          <input type="text" name="State" required>
          <span></span>
          <label>State</label>
        </div>
        <!-- <div class="txt_field">
          <input type="text" name="Username" required>
          <span></span>
          <label>Username</label>
        </div> -->
        <div class="txt_field">
          <input type="password" name="Password" oninput="strengthChecker()" id="Password" required>
          <span></span>
          <label>Password</label>
          <div id="strength-bar"></div>
        </div>
        <input type="submit" value="Signup">
      </form>
      <div>
        <p id="msg"></p>
        <br>
      </div>
    </div>
    <script src="script1.js"></script>
  </body>
</html>