<?php 
    $dbConn2;
    //The mysqli_connect PHP method opens up a connection to a MySQL database
   $dbConn2 = mysqli_connect("localhost", "amjazzar", "DRedwings__002", "landscape");

   //This function returns the error code from the last connection error, if any
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

?>
