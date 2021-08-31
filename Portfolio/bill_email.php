<?php
    include('include/connectDB.php');
?>
<html>
<body>
<div style="width: 600px">
<div style="width: 500px; float: right; padding: 1px; margin-right: 10px; margin-left: 10px;">
<p>Send an email to a customer</p>
<!--This form sends the Customer's First and Last names to the sendBill.php page so an Email can be sent to that Customer-->
<form action="sendBill.php" method= "post">
<table>

<tr>
    <td>Customer's First Name:</td>
    <td><input type="text" name="get_firstname"></td>
</tr>
<tr>
    <td>Customer's Last Name:</td>
    <td><input type="text" name="get_lastname"></td>
</tr>
</tr>
<tr>
<td colspan="2" style="text-align: center;"><input type="submit" name="actualBill"></td>
</tr>
</table>
</form>
</div>
</div>
</body>
</html>
<?php include('include/closeDB.php');
    ?>