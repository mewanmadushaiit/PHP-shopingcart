

<?php
session_start();
include("db.php");
//create a variable called $pagename which contains the actual name of the page
$pagename="Login";
//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
//display window title
echo "<title>".$pagename."</title>";

//include head layout
include ("headfile.html");
echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";
		 
		 echo "<form action='getlogin.php?' method='post'>";
		echo "<table border='1' width='500' cellspacing='1' cellpadding='3'>";
		echo "<tr><td >E-mail</td><td><input type='email' name='logemail'></td></tr>";
		echo "<tr><td >Password</td><td><input type='password' name='logpwd'></td></tr>";

		echo "<tr><td ><input type='submit' name='submit' value='Login'></td><td><input type='reset' name='clear' value='Clear form'></td></tr>";
		echo "</table>";
     

//include head layout
include("footfile.html");
?>