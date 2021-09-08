<?php 
include("include/connectDB.php");
   //line 4 includes SQL code inside of PHP code  
   //all data from patients table is selected and ordered from lowest to highest according to patient_id
   $sql = "SELECT * FROM patients ORDER BY patient_id ASC;";
   $result = mysqli_query($dbConn2, $sql);
   //line 7 identifies how many rows there are in the table and that number is stored in variable $checkResult
   $checkResult = mysqli_num_rows($result);
   if ($checkResult > 0){
       //mysqli_fetch_assoc collects all the data from the table and stores it as an array in variable $row
       while ($row = mysqli_fetch_assoc($result)){
           //the values from the table columns are the values that show up on the web page
           echo $row ['patient_id']."&nbsp";
           echo $row['first_name']."&nbsp";
           echo $row['last_name']."&nbsp";
           echo $row['email_address']."&nbsp";
           echo $row['birth_date']."&nbsp";
           echo $row['gender']."<br/>";
       }
   }
?>
<HTML>
<a href = "addPatient.php">Go back to previous page to add more Patients in the table.</a>
</HTML>
