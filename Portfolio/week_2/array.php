<?php
/* Programming Lab for Week 2
Description: create the array of book titles */
//Fill up array with names
$a[]= "The Restaurant at the End of the Universe";
$a[]= "Cinderella";
$a[]= "Prelude to Programming";
$a[]= "The Seekers";
$a[]= "The Borrowers";
$a[]= "Hunger Games";
$a[]= "The Girl with the Dragon Tattoo";
$a[]= "The Diary of Anne Frank";
$a[]= "Catch 22";
$a[]= "The Grapes of Wrath";
$a[]= "Tom Sawyer";
$a[]= "The Call of the Wild";
$a[]= "1984";
$a[]= "Old Yeller";
$a[]= "Introduction to C++";
$a[]= "Catch Me If You Can";
$a[]= "Snow White and the Seven Dwarfs";
$a[]= "Harry Potter";
$a[]= "The Cat in the Hat";
$a[]= "Oh, the Places You'll Go!";

//get the q parameter from URL
$q = $_GET["q"];

//lookup all hints from array if length of q>0
if (strlen($q)>0)
{
$hint = "";
for ($i=0; $i<count($a); $i++)
{
    if (strtolower($q)== strtolower(substr($a[$i], 0, strlen($q))))
    {
        if ($hint == "")
        {
            $hint = $a[$i];
        }
    }
}
}
//Set output to "no suggestion" if no hint was found or to the correct values
if ($hint == "")
{
    $response = "no names match";
}
else
{
    $response = $hint;
}
//output the response
echo $response;
?>
