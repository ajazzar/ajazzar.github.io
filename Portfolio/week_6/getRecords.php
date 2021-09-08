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

<h2>Patient Table</h2>
<?php 
include("include/connectDB.php");
   //line 28 includes SQL code inside of PHP code  
   //all data from patient table is selected and ordered from lowest to highest according to patient_id
   $sql = "SELECT * FROM patients ORDER BY patient_id ASC;";
   $result = mysqli_query($dbConn2, $sql);
   //line 31 identifies how many rows there are in the table and that number is stored in variable $checkResult
   $checkResult = mysqli_num_rows($result);
   if ($checkResult > 0){
       //lines 34 to 41 create the header columns of the table
        echo "<table> <tr>
        <th>patient_id</th>
        <th>first name</th>
        <th>last name</th>
        <th>email address</th>
        <th>date of birth</th>
        <th>gender</th>   
        </tr>";
       //mysqli_fetch_assoc collects all the data from the table and stores it as an array in variable $row
       while ($row = mysqli_fetch_assoc($result)){
           //the values from the table columns are the values that show up on the web page
           echo "<tr>"."<td>".$row['patient_id']."&nbsp"."</td>";
           echo "<td>".$row['first_name']."&nbsp"."</td>";
           echo "<td>".$row['last_name']."&nbsp"."</td>";
           echo "<td>".$row['email_address']."&nbsp"."</td>";
           echo "<td>".$row['birth_date']."&nbsp"."</td>";
           echo "<td>".$row['gender']."</td>"."</tr>";
       }
       echo "</table>";
   }
   ?>
   <h2>Medication Table</h2>
   <?php
 //line 58 includes SQL code inside of PHP code  
   //all data from medication table is selected and ordered from lowest to highest according to prescription_id
   $sql = "SELECT * FROM medication ORDER BY prescription_id ASC;";
   $result = mysqli_query($dbConn2, $sql);
   //line 61 identifies how many rows there are in the table and that number is stored in variable $checkResult
   $checkResult = mysqli_num_rows($result);
   if ($checkResult > 0){
    //lines 64 to 70 create the header columns of the table
    echo "<table> <tr>
    <th>prescription_id</th>
    <th>medication name</th>
    <th>date of prescription</th>
    <th>days' supply</th>
    <th>patient_id</th> 
    </tr>";
       //mysqli_fetch_assoc collects all the data from the table and stores it as an array in variable $row
       while ($row = mysqli_fetch_assoc($result)){
           //the values from the table columns are the values that show up on the web page
           echo "<tr>"."<td>".$row['prescription_id']."&nbsp"."</td>";
           echo "<td>".$row['med_name']."&nbsp"."</td>";
           echo "<td>".$row['presc_date']."&nbsp"."</td>";
           echo "<td>".$row['days_supply']."&nbsp"."</td>";
           echo "<td>".$row['patient_id']."</td>"."</tr>";
       }
       echo "</table>";
   }
   ?>
  <h2>Billing Info Table</h2>
    <?php
   //line 86 includes SQL code inside of PHP code  
   //all data from billing_info table is selected and ordered from lowest to highest according to receipt_number
   $sql = "SELECT * FROM billing_info ORDER BY receipt_number ASC;";
   $result = mysqli_query($dbConn2, $sql);
   //line 89 identifies how many rows there are in the table and that number is stored in variable $checkResult
   $checkResult = mysqli_num_rows($result);
   if ($checkResult > 0){
    //lines 92 to 98 create the header columns of the table
    echo "<table> <tr>
    <th>receipt_number</th>
    <th>total paid</th>
    <th>date paid</th>
    <th>Name of Insurance (if any)</th>
    <th>patient_id</th> 
    </tr>";
       //mysqli_fetch_assoc collects all the data from the table and stores it as an array in variable $row
       while ($row = mysqli_fetch_assoc($result)){
           //the values from the table columns are the values that show up on the web page
           echo "<tr>"."<td>".$row['receipt_number']."&nbsp"."</td>";
           echo "<td>".$row['total_paid']."&nbsp"."</td>";
           echo "<td>".$row['date_paid']."&nbsp"."</td>";
           echo "<td>".$row['insurance_info']."&nbsp"."</td>";
           echo "<td>".$row['patient_id']."</td>"."</tr>";
       }
       echo "</table>";
   }
?>
<!-- This adds a link to the 3 forms on the doctorWho page so more information can be added if needed -->
<h3><a href = "doctorWho.php">Go back to previous page to add more information to the table(s).</a></h3>
    
</body>
</HTML>