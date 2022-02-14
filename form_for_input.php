<?php
     include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>    
<body>
    <form action="inserting_data.php" method="POST">
          <input type="text" name = "name" placeholder="Name">
          <br>
          <input type="number" name = "age" placeholder="Age">
          <br>
          <input type="text" name = "truck_no" placeholder="truck number">
          <br>
          <input type="text" name = "mobile_no" placeholder="mobile number">
          <br>
          <input type="text" name = "truck_cap" placeholder="truck capacity in kgs">
          <br>
          <input type="text" name = "st1" placeholder="transporter name">
          <br>
          <input type="number" name = "driving_exp" placeholder="Driving experience(in years)">
          <br>
          <input type="text" name = "st1" placeholder=" preference1 : starting location ">
          <br>
          <input type="text" name = "end1" placeholder=" preference1 : ending location ">
          <br>
          <input type="text" name = "st2" placeholder=" preference2 : starting location ">
          <br>
          <input type="text" name = "end2" placeholder=" preference2 : ending location ">
          <br>
          <input type="text" name = "st3" placeholder=" preference3 : starting location ">
          <br>
          <input type="text" name = "end3" placeholder=" preference3 : ending location ">
          <br>
          <button type="submit" name="submit">submit</button>
    </form>
    
</body>
</html>    