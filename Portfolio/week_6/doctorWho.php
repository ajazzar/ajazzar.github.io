<html>
<head>
</head>
<body>
    <div id="container">
    <div style = "width: 600px;">
    <div style = "width: 500px; padding: 1px; margin-right: 10px; margin-left: 10px;">
    <p>Add a new Patient to Doctor Who's database:</p>
<!-- This sends the information from the form to the insert.php file -->
<?php include ('insert.php'); ?>
    <!-- This line tells the computer that the information from this form will be posted and the $_SERVER['PHP_SELF'] 
     superglobal indices to indicate the information will be posted to a database located on a server on this computer-->
    <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
    <table>
        <tr>
        <td><hr />
        Enter patient's first name:
        </td>
        <td>
        <input type="text" name = "fname" size="30"/>
        </td>
        </tr>
        <tr>
        <td><hr />
        Enter patient's last name:
        </td>
        <td>
        <input type="text" name = "lname" size="30"/>
        </td>
        </tr>
        <tr>
        <td><hr />
        Enter patient's email address:
        <br />Include full address <br />
        Examples:
        <ul>
        <li>john.smith@yahoo.com</li>
        <li>chen.kim@myschool.edu</li>
        </ul>
        </td>
        <td><input type="text" name="address" size="30" /></td>
        </tr>
        <tr>
        <td><hr />
        Enter patient's Date of Birth:
        <br />
        Examples:
        <ul>
        <li>12/30/1992</li>
        <li>10/23/1982</li>
        </ul>
        </td>
        <td><input type="text" name="birthdate" size="10" /></td>
        </tr>
        <tr>
        <td><hr />
        Enter patient's gender (Male or Female):
        </td>
        <td>
        <input type="text" name = "gend" size="6"/>
        </td>
        </tr>
        <tr>
        <td colspan = "2" style= "text-align: center;">
        <input type="submit" name="frmAddPatient" />
        </td>
        </tr>
    </table>
    </form>
    <!-- This adds a link to the web page so all 3 Tables can be viewed -->
    <p>Do you want to see all three tables?
            <a href = "getRecords.php">Click here.</a>
        </p>
    <!-- This sends the information from the form to the insert2.php file -->
        <?php include ('insert2.php'); ?>
        <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
    <table>
        <tr>
        <td><hr />
        Enter Medication Name:
        </td>
        <td>
        <input type="text" name = "mName" size="30"/>
        </td>
        </tr>
        <tr>
        <td><hr />
        Enter the Date the Medication was prescribed:
        <br />
        Examples:
        <ul>
        <li>10/30/2020</li>
        <li>08/02/2020</li>
        </ul>
        </td>
        <td>
        <input type="text" name = "pDate" size="10"/>
        </td>
        </tr>
        <tr>
        <td><hr />
        Enter the Days' supply of the medication:
        <br />
        Examples:
        <ul>
        <li>enter 60 if the days' supply is 60 days</li>
        <li>enter 180 if the days' supply is 180 days</li>
        </ul>
        </td>
        <td><input type="text" name="dSupply" size="4" /></td>
        </tr>
        <tr>
        <td><hr />
        Enter the Patient_ID from the Patients table:
        </td>
        <td><input type="text" name="pID" size="4" /></td>
        </tr>
        <tr>
        <td colspan = "2" style= "text-align: center;">
        <input type="submit" name="frmAddMed" />
        </td>
        </tr>
    </table>
    </form>
    <!-- This adds a link to the web page so all 3 Tables can be viewed -->
    <p>Do you want to see all three tables?
            <a href = "getRecords.php">Click here.</a>
        </p>
    <!-- This sends the information from the form to the insert3.php file -->
        <?php include ('insert3.php'); ?>
        <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
    <table>
        <tr>
        <td><hr />
        Enter Total Amount Paid:
        Examples:
        <ul>
        <li>type in 200.00 if $200.00 was paid</li>
        <li>type in 350.75 if $350.75 was paid</li>
        </ul>
        </td>
        <td>
        <input type="text" name = "total_paid" size="8"/>
        </td>
        </tr>
        <tr>
        <td><hr />
        Enter the Date of Payment:
        <br />
        Examples:
        <ul>
        <li>07/15/2020</li>
        <li>01/10/2021</li>
        </ul>
        </td>
        <td>
        <input type="text" name = "date_paid" size="10"/>
        </td>
        </tr>
        <tr>
        <td><hr />
        Enter the Patient's Insurance name:
        <br />
        <ul>
        <li>type in "BCBS" if the patient has Blue Cross Blue Shield for Health Insurance</li>
        <li>type in "no coverage" if the patient is not covered by Health Insurance</li>
        </ul>
        </td>
        <td><input type="text" name="insurance" size="20" /></td>
        </tr>
        <tr>
        <td><hr />
        Enter the Patient_ID from the Patients table or Medication table:
        </td>
        <td><input type="text" name="pID" size="4" /></td>
        </tr>
        <tr>
        <td colspan = "2" style= "text-align: center;">
        <input type="submit" name="frmAddBill" />
        </td>
        </tr>
    </table>
    </form>
    <!-- This adds a link to the web page so all 3 Tables can be viewed -->
    <p>Do you want to see all three tables?
            <a href = "getRecords.php">Click here.</a>
        </p>
    </div>
    </div>
    </div>
</body>
</html>
