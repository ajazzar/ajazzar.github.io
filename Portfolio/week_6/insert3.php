<?php
//This file receives the information from the form on the page "doctorWho.php" and includes the connectDB.php file to connect to the database 
include("include/connectDB.php");
// dbConn2 has been declared and given a value in the connectDB.php page
if(isset($_POST['frmAddBill']))
{
    //the patient_id is not included because that value is added automatically (auto-incremented)
    $sqlStatement = "INSERT INTO billing_info (total_paid, date_paid, insurance_info, patient_id) VALUES ('$_POST[total_paid]', '$_POST[date_paid]', '$_POST[insurance]', '$_POST[pID]')";
    if(!mysqli_query($dbConn2, $sqlStatement))
   {
       //the die() function is a PHP function that can be used as an alternate to the exit() function
       die('Error: '.mysqli_error($dbConn2));
   }   
    echo "<h2>RECORD ADDED</h2>"; 
    //the closeDB.php file closes the connection to the database
    include("include/closeDB.php");
}
?>
