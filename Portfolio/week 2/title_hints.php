<html>
<body>
    
<?php include ('header.php'); ?>
<div id ="content">
    <h3>Enter words in the box below to search the list of 20 Book titles:</h3>
    <form>
        <h3>First word: <input type = "text" onkeyup = "showHint(this.value)" size ="20" /></h3>
    </form>
</div>
<h3>Suggestions: <span id = "txtHint"></span> </h3>
</body>
</html>