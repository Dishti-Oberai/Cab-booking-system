<?php
       include "connection.php";
       $startingloc=$_POST['Stloc'];
       $endingloc=$_POST['enloc'];
       $truck_cap=$_POST['truck_cap'];
       $sql = "select* from driverInfo  
       WHERE
           ( (('$startingloc' = st1 and '$endingloc' = end1) or ('$startingloc' = end1 and '$endingloc' = st1)) OR 
            (('$startingloc' = st2 and '$endingloc' = end2) or ('$startingloc' = end2 and '$endingloc' = st2)) OR 
            (('$startingloc' = st3 and '$endingloc' = end3) or ('$startingloc' = end3 and '$endingloc' = st3)) ) AND
             ($truck_cap <= truck_cap); ";
       $result = mysqli_query($connection,$sql);
       $result_size = mysqli_num_rows($result);
       if ($result_size > 0)
       {
           while ($row = mysqli_fetch_assoc($result))  // this will run untill row becomes empty.
           {
              foreach($row as $rowdata)
              {
                  echo $rowdata."<br>";
              }
              echo "<br>";
           }
       }
       else 
       {
           echo "No such driver present";
       }
       //    header("Location:form_for_search.php")
    ?>