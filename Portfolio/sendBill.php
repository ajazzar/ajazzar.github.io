<html>
<?php
    include('include/connectDB.php');
    if(isset($_POST['actualBill']))
{
    //I am collecting the last name and first name entered on the form and gathering the data from the corresponding row on the Customers table.
    $sqlStatement2 = "SELECT * FROM customers WHERE (customer_l_name='$_POST[get_lastname]') AND (customer_f_name='$_POST[get_firstname]')";
    $result2 = mysqli_query($dbConn2, $sqlStatement2);
    $customerRecord = mysqli_fetch_array($result2);
   
    if(!$customerRecord){
        die('Error: '.mysqli_error($dbConn2));
    }
    //I am retrieving the Billing table record for the Customer with the last name entered on the "actualBill" form. 
        $sqlStatement3="SELECT * FROM billing WHERE (customer_l_name='$_POST[get_lastname]')";
        $users = mysqli_query($dbConn2, $sqlStatement3);
        
        while($column= mysqli_fetch_array($users))
        {
            //I made a function that can calculate how much money if any that the Customer still owes.

            function calculate($num1, $num2){
                global $value;
                $value = ($num1 - $num2);
                return $value;
            }
            calculate($column['customer_bill'], $column['amt_paid']);
        }
    //The actual message that will be sent depends on if the Customer still owes money or not. 
    if($value > 0){
        $message2 = "We just wanted to inform you that you have an outstanding balance of \n $".$value.". Thank you."; 
        
    }
    else{
       
       $message2= "Thank you for your payment. We look forward to serving you in the Future.";
    
    }
}
    $firstName=$customerRecord['customer_f_name'];
    $lastName=$customerRecord['customer_l_name'];
    $cusEmail=$customerRecord['customer_email'];

    //Send the email to the customer.
    $to= $customerRecord['customer_email'];
    $subject= "Valued Lee's Landscape Customer";
    $message= $message2;
    $from= "aaron@leeslandscape.com";
    $headers="From: ". $from;
    mail($to, $subject, $message, $headers);
    
    //Show a copy of the email on the Web page.
    echo"<p>Customer: ". $customerRecord['customer_f_name']." ". $customerRecord['customer_l_name']."</p>";
    echo"<p>Email:".$cusEmail."</p>";
    echo"<p>Subject: ".$subject."</p>";
    echo"<p>This is your message: ".$message."</p>";
    echo"Email sent.";

    include('include/closeDB.php');
    
?>
<h3><a href = "getRecords.php">Go back to the Records page to view both tables and/or create another email.</a></h3>
</html>