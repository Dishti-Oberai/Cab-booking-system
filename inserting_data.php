<?php
       include "connection.php";
       $name=$_POST['name'];
       $age=$_POST['age'];
       $truck_no=$_POST['truck_no'];
       $mobile_no=$_POST['mobile_no'];
       $truck_cap = $_POST['truck_cap'];
       $transpoter_name=$_POST['transpoter_name'];
       $driving_exp=$_POST['driving_exp'];
       $st1=$_POST['st1'];
       $end1=$_POST['end1'];
       $st2=$_POST['st2'];
       $end2=$_POST['end2'];
       $st3=$_POST['st3'];
       $end3=$_POST['end3'];
       
       $sql = "insert into driverinfo (name,age,truck_no,mobile_no,truck_cap,transpoter_name,driving_exp,st1,end1,st2,end2,st3,end3)
                     values('$name','$age','$truck_no','$mobile_no','$truck_cap','$transpoter_name','$driving_exp','$st1','$end1','$st2','$end2','$st3','$end3');";
       mysqli_query($connection,$sql);
       header("Location:form_for_input.php")
    ?>