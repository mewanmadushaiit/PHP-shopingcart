<?php

session_start();

unset($_SESSION['basket']);
$pagename="Clear Basket";


//create a variable called $pagename which contains the actual name of the page


//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
//display window title
echo "<title>".$pagename."</title>";
//include head layout
include ("headfile.html");
include ("detectlogin.php");
echo "<h2>".$pagename."</h2>";

echo "Odering basket now clear";
echo "<p></p>";
include("footfile.html");
?>