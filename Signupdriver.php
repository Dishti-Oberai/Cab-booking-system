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
      <h1>Sign Up as Driver</h1>
      <form action="submit.inc.driver.php" method="post">
        <div class="txt_field">
          <input type="text" name="Name" required>
          <span></span>
          <label>Name</label>
        </div>
        <div class="txt_field">
          <input type="text" name="Age" required>
          <span></span>
          <label>Age</label>
        </div>
        <div class="txt_field">
          <input type="text" name=" TruckNumber" required>
          <span></span>
          <label> Truck Number</label>
        </div>
        <div class="txt_field">
          <input type="text" name="MobileNumber" required>
          <span></span>
          <label>Mobile Number</label>
        </div>
        <div class="txt_field">
          <input type="text" name="TruckCapacity" required>
          <span></span>
          <label>Truck Capacity</label>
        </div>
        <div class="txt_field">
          <input type="text" name="TransporterName" required>
          <span></span>
          <label>Transporter Name</label>
        </div>
        <div class="txt_field">
          <input type="text" name="DrivingExperience" required>
          <span></span>
          <label>Driving Experience</label>
        </div>
        <div class="txt_field">
          <input type="text" name="R1StateF" required>
          <span></span>
          <label>Starting state for Ist route</label>
        </div>
        <div class="txt_field">
          <input type="text" name="R1CityF" required>
          <span></span>
          <label>Starting city for Ist route</label>
        </div>
        <div class="txt_field">
          <input type="text" name="R1StateT" required>
          <span></span>
          <label>Ending state for Ist route</label>
        </div>
        <div class="txt_field">
          <input type="text" name="R1CityT" required>
          <span></span>
          <label>Ending city for Ist route</label>
        </div>
        <div class="txt_field">
          <input type="text" name="R2StateF" required>
          <span></span>
          <label>Starting state for IInd route</label>
        </div>
        <div class="txt_field">
          <input type="text" name="R2CityF" required>
          <span></span>
          <label>Starting city for IInd route</label>
        </div>
        <div class="txt_field">
          <input type="text" name="R2StateT" required>
          <span></span>
          <label>Ending state for IInd route</label>
        </div>
        <div class="txt_field">
          <input type="text" name="R2CityT" required>
          <span></span>
          <label>Ending city for IInd route</label>
        </div>
        <div class="txt_field">
          <input type="text" name="R3StateF" required>
          <span></span>
          <label>Starting state for IIIrd route</label>
        </div>
        <div class="txt_field">
          <input type="text" name="R3CityF" required>
          <span></span>
          <label>Starting city for IIIrd route</label>
        </div>
        <div class="txt_field">
          <input type="text" name="R3StateT" required>
          <span></span>
          <label>Ending state for IIIrd route</label>
        </div>
        <div class="txt_field">
          <input type="text" name="R3CityT" required>
          <span></span>
          <label>Ending city for IIIrd route</label>
        </div>
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
      </div>
    </div>
    <script src="script1.js"></script>
  </body>
</html>