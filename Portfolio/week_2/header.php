<html>
    <!--
        Description: The header file does the work for this program.
        Created by: Aaron Jazzar
        Date: 3/21/2021
    -->
    <head>
        <title>Find the Title with PHP hints</title>
        <link rel="stylesheet" href="carla.css" type ="text/css"/>
        <script language="JavaScript" type = "text/javascript">
        //str is passed to the function by the onkeyup event
        function showHint(str)
        {
            //if nothing is typed, nothing is returned
            if (str.length == 0)
            {
                document.getElementById("txtHint").innerHTML="";
                return;
            }
            //browser check
            if (window.XMLHttpRequest) //for most modern browsers
            {
                var xmlhttp = new XMLHttpRequest();
            }
            else //code for older browsers
            {
                var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            //The onreadystatechange event is triggered every time the readyState changes.
            xmlhttp.onreadystatechange = function ()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById('txtHint').innerHTML=xmlhttp.responseText;
                }
            }
            //open (method, url, async) has 3 arguments: 1.method = GET, 2. location of server-side processing is array.php
            //with an appended parameter, q, equal to str (whatever was entered by user), 3. asynchronous
            xmlhttp.open("GET", "array.php?q="+str, true);
            xmlhttp.send();
        }
        </script>
    </head>
</html>