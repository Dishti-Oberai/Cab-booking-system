<?php

    include_once 'dbh.inc.php';

    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $TruckNumber = $_POST['TruckNumber'];
    $MobileNumber = $_POST['MobileNumber'];
    $TruckCapacity = $_POST['TruckCapacity'];
    $TransporterName = $_POST['TransporterName'];
    $DrivingExperience = $_POST['DrivingExperience'];
    $R1StateF = $_POST['R1StateF'];
    $R1CityF = $_POST['R1CityF'];
    $R1StateT = $_POST['R1StateT'];
    $R1CityT = $_POST['R1CityT'];
    $R2StateF = $_POST['R2StateF'];
    $R2CityF = $_POST['R2CityF'];
    $R2StateT = $_POST['R2StateT'];
    $R2CityT = $_POST['R2CityT'];
    $R3StateF = $_POST['R3StateF'];
    $R3CityF = $_POST['R3CityF'];
    $R3StateT = $_POST['R3StateT'];
    $R3CityT = $_POST['R3CityT'];
    $Password = $_POST['Password'];
    $sql1 = "SELECT * FROM signupdriver WHERE Name='$Name';";
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
					$sql = "INSERT INTO signup (Name, Age, TruckNumber, MobileNumber, TruckCapacity, TransporterName, DrivingExperience, R1StateF, R1CityF, R1StateT, R1CityT, R2StateF, R2CityF, R2StateT, R2CityT, R3StateF, R3CityF, R3StateT, R3CityT, Password) VALUES ('$Name','$Age','$TruckNumber','$MobileNumber','$TruckCapacity','$TransporterName','$DrivingExperience','$R1StateF','$R1CityT','$R1StateT','$R1CityT','$R1StateF','$R2CityT','$R2StateT','$R2CityT','$R3StateF','$R3CityT','$R3StateT','$R3CityT','$Password');";
					mysqli_query($conn, $sql);
					header("Location: Login.php");
					die;
				}
			}
    
	

	
?>