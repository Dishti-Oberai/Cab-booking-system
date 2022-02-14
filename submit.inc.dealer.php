<?php

    include_once 'dbh.inc.php';

    $Name = $_POST['Name'];
    $MobileNumber = $_POST['MobileNumber'];
    $NatureofMaterial = $_POST['NatureofMaterial'];
    $WeightofMaterial = $_POST['WeightofMaterial'];
    $Quantity = $_POST['Quantity'];
    $City = $_POST['City'];
    $State = $_POST['State'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $sql1 = "SELECT * FROM signupdealer WHERE Username='$Username';";
	$result1=mysqli_query($conn, $sql1);
	if($result1)
			{
				if($result1 && mysqli_num_rows($result1) > 0)
				{

					header("Location: SignupExist.php"); 
					die;
				}
				else
				{
					$sql = "INSERT INTO signup (Name, MobileNumber, NatureofMaterial, WeightofMaterial, Quantity, City, State, Username, Password) VALUES ('$Name','$MobileNumber','$NatureofMaterial','$WeightofMaterial','$Quantity','$City','$State','$Username','$Password');";
					mysqli_query($conn, $sql);
					header("Location: Login.php");
					die;
				}
			}
    
	

	
?>