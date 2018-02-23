<?php
session_start();
include("db.php");
//create a variable called $pagename which contains the actual name of the page
$pagename="Registration Confirmation";
//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
//display window title
echo "<title>".$pagename."</title>";
//include head layout
include ("headfile.html");
echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$address=$_POST['address'];
$postalcode=$_POST['pcode'];
$telenum=$_POST['tnum'];
$email=$_POST['mail'];
$password=$_POST['pwd'];
$password1=$_POST['pwd1'];

$addarray=array($firstname,$lastname,$address,$postalcode,$telenum,$telenum,$email,$password);

$error=false;

foreach($addarray as $fill){
	if(empty($_POST[$fill])){
		$error=true;
	}
}

if($error==true){
	echo "All fields are compulsory";
	echo "</br>";
	echo "go back to <a href=register.php?>Register</a>";
}
else{
		 $email = test_input($_POST["mail"]);
    // check if e-mail address is well-formed
         if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",$email)) {
           echo "E-mail not valid";
		   echo "</br>";
		   echo "Go back to <a href=register.php?>Register</a>";
		 }else{
	if($password!=$password1){
		echo "The 2 passwords you entered do not match</br>please make sure you enter them correctly";
		echo '</br>';
		echo "Go back to <a href=register.php?>Register</a>";
	} else {
		
				$qry="insert into users(userFName,userSName,userAddress,userPostcode,userTelNo,userEmail,userPassword) "
					. "value('$firstname','$lastname','$address','$postalcode','$telenum','$email','$password')";
			//include head layout
			 $rslt=mysql_query($qry);
			 if(mysql_errno($conn)==0){
				 echo "You have successfully registered in the system!";
				 echo "</br>";
				 echo "To continue,please <a href=login.php?>Login</a>";
			 }else{
				 
				 echo "There is an error with your registration";
				  echo '</br>';
				 echo 'The email you entered alredy exists';
				  echo '</br>';
				 echo "Go back to <a href=register.php?>Register</a>";
				 
	 }
	}
		 }
 
}
include("footfile.html");
?>