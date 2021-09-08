<?php
//This file receives the information from the form on the page "addPatient.php" and includes the connectDB.php file to connect to the database 
include("include/connectDB.php");
// dbConn2 has been declared and given a value in the connectDB.php page
if(isset($_POST['frmAddPatient']))
{
    //the patient_id is not included because that value is added automatically (auto-incremented)
    $sqlStatement = "INSERT INTO patients (first_name, last_name, email_address, birth_date, gender) VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[address]', '$_POST[birthdate]', '$_POST[gend]')";
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
