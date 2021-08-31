<HTML>
<!-- The following CSS styles set the table width on the page, the background color for the even table rows, 
the text alignment in the cells, the font styles, and the table border style -->
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>

<h2>Customers Table</h2>
<?php 
include("include/connectDB.php");
   //line 28 includes SQL code inside of PHP code  
   //all data from customers table is selected and ordered from lowest to highest according to customer_id
   $sql = "SELECT * FROM customers ORDER BY customer_id ASC;";
   $result = mysqli_query($dbConn2, $sql);
   //line 31 identifies how many rows there are in the table and that number is stored in variable $checkResult
   $checkResult = mysqli_num_rows($result);
   if ($checkResult > 0){
       //lines 34 to 43 create the header columns of the table
        echo "<table> <tr>
        <th>customer ID</th>
        <th>customer title</th>
        <th>first name</th>
        <th>last name</th>
        <th>street address</th>
        <th>City, State, Zip code</th> 
        <th>phone number</th>
        <th>email address</th>  
        </tr>";
       //mysqli_fetch_assoc collects all the data from the table and stores it as an array in variable $row
       while ($row = mysqli_fetch_assoc($result)){
           //the values from the table columns are the values that show up on the web page
           echo "<tr>"."<td>".$row['customer_id']."&nbsp"."</td>";
           echo "<td>".$row['customer_title']."&nbsp"."</td>";
           echo "<td>".$row['customer_f_name']."&nbsp"."</td>";
           echo "<td>".$row['customer_l_name']."&nbsp"."</td>";
           echo "<td>".$row['street_address']."&nbsp"."</td>";
           echo "<td>".$row['City_State_Zip']."&nbsp"."</td>";
           echo "<td>".$row['customer_phone']."&nbsp"."</td>";
           echo "<td>".$row['customer_email']."&nbsp"."</td>"."</tr>";
       }
       echo "</table>";
   }
   ?>
  <h2>Billing Table</h2>
    <?php
   //line 63 includes SQL code inside of PHP code  
   //all data from billing table is selected and ordered from lowest to highest according to bill_id
   $sql = "SELECT * FROM billing ORDER BY bill_id ASC;";
   $result = mysqli_query($dbConn2, $sql);
   //line 66 identifies how many rows there are in the table and that number is stored in variable $checkResult
   $checkResult = mysqli_num_rows($result);
   if ($checkResult > 0){
    //lines 69 to 78 create the header columns of the table
    echo "<table> <tr>
    <th>bill ID</th>
    <th>customer ID</th>
    <th>Last Name</th>
    <th>Service(s) Done</th>
    <th>Bill Amount</th>
    <th>Bill Date</th> 
    <th>Amount Paid</th>
    <th>Date Paid</th>
    </tr>";
       //mysqli_fetch_assoc collects all the data from the table and stores it as an array in variable $row
       while ($row = mysqli_fetch_assoc($result)){
           //the values from the table columns are the values that show up on the web page
           echo "<tr>"."<td>".$row['bill_id']."&nbsp"."</td>";
           echo "<td>".$row['customer_id']."&nbsp"."</td>";
           echo "<td>".$row['customer_l_name']."&nbsp"."</td>";
           echo "<td>".$row['services']."&nbsp"."</td>";
           echo "<td>".$row['customer_bill']."&nbsp"."</td>";
           echo "<td>".$row['bill_date']."&nbsp"."</td>";
           echo "<td>".$row['amt_paid']."&nbsp"."</td>";
           echo "<td>".$row['date_paid']."&nbsp"."</td>"."</tr>";
       }
       echo "</table>";
   }
?>
<!-- This adds a link to the 2 forms on the Landscape page and a link to the Message page -->
<h3><a href = "landscape.php">Go back to previous page to add more data to the table or tables.</a></h3>
<h3><a href = "bill_email.php">Go to the next page to send a Bill to a Customer.</a></h3>  
</body>
</HTML>