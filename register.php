<?php
session_start();
//create a variable called $pagename which contains the actual name of the page
$pagename="Customer Registration";
//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
//display window title
echo "<title>".$pagename."</title>";
//include head layout
include ("headfile.html");
echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

echo "<form action='getregister.php?' method='post'>";
echo "<table border='1' width='500' cellspacing='1' cellpadding='3'>";

    
echo "<tr><td>First Name</td><td><input type='text' name='fname'></td></tr>";
echo "<tr><td>Last Name</td><td><input type='text' name='lname'></td></tr>";
echo "<tr><td>Address</td><td><input type='text' name='address'></td></tr>";
echo "<tr><td>Post Code</td><td><input type='number' name='pcode'></td></tr>";
echo "<tr><td>Tel number</td><td><input type='number' name='tnum'></td></tr>";
echo "<tr><td>Email Address</td><td><input type='email' name='mail'></td></tr>";
echo "<tr><td >Password</td><td><input type='password' name='pwd'></td></tr>";
echo "<tr><td >Confirm Password</td><td><input type='password' name='pwd1'></td></tr>";
echo "<tr><td ><input type='submit' name='submit' value='Register'></td><td><input type='reset' name='clear' value='Clear form'></td></tr>";
echo "</table>";
echo "<hr/>";

echo "</form>";
//include head layout
include ("footfile.html");
?>