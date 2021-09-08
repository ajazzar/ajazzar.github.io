<?php
define("NEW_TIME", 60*60*24*7);
$username=$_POST['name'];
$userage=$_POST['age'];
$usergender=$_POST['gender'];
setcookie("name", $username, time()+ NEW_TIME);
setcookie("age", $userage, time()+ NEW_TIME);
setcookie("gender", $usergender, time()+ NEW_TIME);
?>
<html>
    <head>
        <title>Setting the Cookies</title>
    </head>
    <body>
        <div id="content" style="width: 600px; margin-left: auto; margin-right: auto;">
        <h2>We set up a cookie on your hard drive!</h2>
        <h2>It contains:</h2>
        <h3>Who you are: <?php echo ($username) ?></h3>
        <h3>The age you are: <?php echo ($userage) ?></h3>
        <h3>Your gender: <?php echo ($usergender) ?></h3>
    </div>
    </body>
</html>