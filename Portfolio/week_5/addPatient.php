<!-- This sends the information from this page's form to the insert.php file -->
<?php include ('insert.php'); ?>
<html>
<head>
</head>
<body>
    <div id="container">
    <div style = "width: 600px;">
    <div style = "width: 500px; padding: 1px; margin-right: 10px; margin-left: 10px;">
    <p>Add a new Patient to Doctor Who's database:</p>
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
    <!-- This adds a link to the web page so the Patients Table can be viewed -->
    <p>Do you want to see your table?
            <a href = "getPatient.php">Check it out.</a>
        </p>
    </div>
    </div>
    </div>
</body>
</html>
