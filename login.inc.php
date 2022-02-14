<?php

    include_once 'dbh.inc.php';

    $Name = $_POST['Name'];
    $Password = $_POST['Password'];
    
	$sql1 = "SELECT * FROM signupdealer WHERE Name='$Name';";
	$sql2 = "SELECT * FROM signupdriver WHERE Name='$Name';";
	$result1=mysqli_query($conn, $sql1);
	$result2=mysqli_query($conn, $sql2);
	if($result1)
			{
				if($result1 && mysqli_num_rows($result1) > 0)
				{

					$user_data = mysqli_fetch_assoc($result1);
					
					if($user_data['Password'] === $Password)
					{
						header("Location: main.html"); //REDIRECT TO THE PAGE REQUIRED. MAIN.PHP IS JUST FOR SAMPLE
						die;
					}
					else
					{
						header("Location: LoginIncPass.php");
						die;
					}
				}
			}
			header("Location: LoginNoRec.php");
			
	if($result2)
			{
				if($result2 && mysqli_num_rows($result2) > 0)
				{

					$user_data = mysqli_fetch_assoc($result2);
					
					if($user_data['Password'] === $Password)
					{
						header("Location: main.html"); //REDIRECT TO THE PAGE REQUIRED. MAIN.PHP IS JUST FOR SAMPLE
						die;
					}
					else
					{
						header("Location: LoginIncPass.php");
						die;
					}
				}
			}
			header("Location: LoginNoRec.php");
	

    

?>