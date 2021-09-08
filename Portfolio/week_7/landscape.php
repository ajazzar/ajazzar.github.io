<html>
<head>
</head>
<body>
    <div id="container">
    <div style = "width: 1000px;">
  
    <p>Add a Customer to the Lee's Landscape database:</p>
<!-- This sends the information from the form to the insert.php file -->
<?php include ('insert.php'); ?>
    <!-- This line tells the computer that the information from this form will be posted and the $_SERVER['PHP_SELF'] 
     superglobal indices to indicate the information will be posted to a database located on a server on this computer-->
    <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
    <table>
    <tr>
        <td><hr />
        Enter customer's title:
        <br />
        Examples:
        <ul>
        <li>Dr.</li>
        <li>Mr.</li>
        <li>Mrs.</li>
        </ul>
        </td>
        <td><input type="text" name="prefix" size="10" /></td>
        </tr>
        <tr>
        <td><hr />
        Enter customer's first name:
        </td>
        <td>
        <input type="text" name = "fname" size="30"/>
        </td>
        </tr>
        <tr>
        <td><hr />
        Enter customer's last name:
        </td>
        <td>
        <input type="text" name = "lname" size="30"/>
        </td>
        </tr>
        <tr>
        <td><hr />
        Enter customer's Street Address:
        <br />
        Examples:
        <ul>
        <li>17107 Tomahawk Trail</li>
        <li>10310 Montrose Drive</li>
        <li>6807 46th Terrace East</li>
        </ul>
        </td>
        <td><input type="text" name="street_address" size="50" /></td>
        </tr>
        <tr>
        <td><hr />
        Enter customer's City and State and Zip Code:
        <br />
        <ul>
        <li>Concord, NC 28269</li>
        <li>Charlotte, NC 28223</li>
        <li>Kannapolis, NC 28081</li>
        </ul>
        </td>
        <td>
        <input type="text" name = "postal" size="50"/>
        </td>
        </tr>
        <tr>
        <td><hr />
        Enter customer's Phone Number:
        <br />
        <ul>
        <li>(269) 483-9910</li>
        <li>(704) 687-5657</li>
        <li>(941) 752-4861</li>
        </ul>
        </td>
        <td>
        <input type="text" name = "phone" size="20"/>
        </td>
        </tr>
        <tr>
        <td><hr />
        Enter customer's email address:
        <br />Include full address <br />
        Examples:
        <ul>
        <li>john.smith@yahoo.com</li>
        <li>chen.kim@myschool.edu</li>
        <li>jane.doe@verizon.net</li>
        </ul>
        </td>
        <td><input type="text" name="email_address" size="30" /></td>
        </tr>
        <tr>
        <td colspan = "2" style= "text-align: center;">
        <input type="submit" name="frmAddCustomer" />
        </td>
        </tr>
    </table>
    </form>
    <p>Add one or more Bills to the Lee's Landscape database:</p>
    <!-- This sends the information from the form to the insert2.php file -->
        <?php include ('insert2.php'); ?>
        <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
    <table>
        <tr>
        <td><hr />
        Enter Customer ID from Customer table:
        </td>
        <td>
        <input type="text" name = "cust_id" size="3"/>
        </td>
        </tr>
        <tr>
        <td><hr />
        Enter the Customer's Last name:
        </td>
        <td>
        <input type="text" name = "last_name" size="30"/>
        </td>
        </tr>
        <tr>
        <td><hr />
        Enter the Service(s) performed:
        <br />
        Examples:
        <ul>
        <li>planted trees and/or shrubs</li>
        <li>mowed the lawn</li>
        <li>fertilized the plants</li>
        </ul>
        </td>
        <td><input type="text" name="service" size="100"/></td>
        </tr>
        <tr>
        <td><hr />
        Enter the Amount of the Bill that was sent to the Customer(without the dollar sign):
        <br />
        Examples:
        <ul>
        <li>500.00</li>
        <li>425.50</li>
        <li>1000.50</li>
        </ul>
        </td>
        <td><input type="text" name="bill_total" size="6" /></td>
        </tr>
        <td><hr />
        Enter the Date of the Bill that was sent to the Customer:
        <br />
        Examples:
        <ul>
        <li>10/20/2020</li>
        <li>12/10/2020</li>
        <li>02/01/2021</li>
        </ul>
        </td>
        <td><input type="text" name="bill_date" size="10" /></td>
        </tr>
        <tr>
        <td><hr />
        Enter the Amount that the Customer has paid so far(without the dollar sign):
        <br />
        Examples:
        <ul>
        <li>500.00</li>
        <li>425.50</li>
        <li>1000.50</li>
        </ul>
        </td>
        <td><input type="text" name="pay_total" size="6" /></td>
        </tr>
        <td><hr />
        Enter the Date of the Customer payment (enter N/A if no payment from customer yet):
        <br />
        Examples:
        <ul>
        <li>11/20/2020</li>
        <li>01/10/2021</li>
        <li>03/01/2021</li>
        <li>N/A</li>
        </ul>
        </td>
        <td><input type="text" name="pay_date" size="10" /></td>
        </tr>
        <tr>
        <td colspan = "2" style= "text-align: center;">
        <input type="submit" name="frmAddBill" />
        </td>
        </tr>
    </table>
    </form>
    <!-- This adds a link to the web page so all 3 Tables can be viewed -->
    <p>Click the link below to see both tables. <br />
            <a href = "getRecords.php">Click here.</a>
        </p>
    </div>
    
    </div>
</body>
</html>
