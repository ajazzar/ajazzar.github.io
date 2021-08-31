<?php
//This file receives the information from the form on the page "landscape.php" and includes the connectDB.php file to connect to the database 
include("include/connectDB.php");
// dbConn2 has been declared and given a value in the connectDB.php page
if(isset($_POST['frmAddBill']))
{
    //the bill_id is not included because that value is added automatically (auto-incremented)
    $sqlStatement = "INSERT INTO billing (customer_id, customer_l_name, services, customer_bill, bill_date, amt_paid, date_paid) VALUES ('$_POST[cust_id]', '$_POST[last_name]', '$_POST[service]', '$_POST[bill_total]', '$_POST[bill_date]', '$_POST[pay_total]', '$_POST[pay_date]')";
    if(!mysqli_query($dbConn2, $sqlStatement))
   {
       //the die() function is a PHP function that can be used as an alternate to the exit() function
       die('Error: '.mysqli_error($dbConn2));
   }   
    echo "<h2>RECORD ADDED</h2>"; 
    //the closeDB.php file closes the connection to the database
    include("include/closeDB.php");
}