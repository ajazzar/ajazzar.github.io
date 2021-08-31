<?php
//This file receives the information from the form on the page "landscape.php" and includes the connectDB.php file to connect to the database 
include("include/connectDB.php");
// dbConn2 has been declared and given a value in the connectDB.php page
if(isset($_POST['frmAddCustomer']))
{
    //the customer_id is not included because that value is added automatically (auto-incremented)
    $sqlStatement = "INSERT INTO customers (customer_title, customer_f_name, customer_l_name, street_address, City_State_Zip, customer_phone, customer_email) VALUES ('$_POST[prefix]', '$_POST[fname]', '$_POST[lname]', '$_POST[street_address]', '$_POST[postal]', '$_POST[phone]', '$_POST[email_address]')";
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