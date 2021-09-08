
<html>
<head>
<title>Login Page</title>
</head>
<body>
    <h1>Welcome to Doctor Who's Database</h1>
        <p>Please enter your Username and Password:</p>
    <form method="post">
    <table>
    <tr>
    <td>Username:</td>
    <td><input type="text" name="username" size="30"/></td>
    </tr>
    <tr>
    <td>Password:</td>
    <td><input type="password" name="password" size="30"/></td>
    </tr>
    <tr>
    <td><input type="submit" name = "frmLogin" value="submit"></td>
    </tr>
    </table>
    </form>
</body>
</html>
<?php 
include ('insert.php');
//An associative array of variables passed to the current script via the HTTP POST method
//isset determines if variable frmLogin is considered set and is different than null
if(isset($_POST['frmLogin']))
{
if($_POST["username"]=="helper"&&$_POST["password"]=="feelBetter")
{
    //session_start() creates a session or resumes the current session based on a session identifier passed via the POST request
    session_start();
    $_SESSION["Login"]="YES";
    echo"<h1>You are logged in correctly</h1>";
    echo"<p><a href='doctorWho.php'>Click here to continue</a></p>";
}
else{
    echo"You either entered the wrong login information or you are a new Employee.";
    echo"<p>Please contact us if you are a new Employee. Thank you.</p>";
}
}
?>