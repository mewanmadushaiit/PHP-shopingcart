<?php
session_start();
include("db.php");
//create a variable called $pagename which contains the actual name of the page
$pagename="Login Confirmation";
//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
//display window title
echo "<title>".$pagename."</title>";
//include head layout
include ("headfile.html");
echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

	$logemail=$_POST['logemail'];
	$logpassword=$_POST['logpwd'];
	
if($logemail=="" || $logpassword==""){
	
	echo "Your form is incomplete";
	echo "</br>";
	echo "Please fill in all required fields ";
	echo "</br>";
	echo "Go back to <a href=login.php?>Login</a>";
	
}else{
	$qrylog="select userId,userFName,userSName,userEmail, userPassword from users where userEmail ='$logemail'";
	$logresult=mysql_query($qrylog);
	 if(mysql_errno($conn)==0){
		 
		 
		 $loginfo=mysql_fetch_array($logresult);
		 if($logemail != $loginfo["userEmail"]){
			 echo "Sorry,your email you entered was not recognized";
			 echo "</br>";
			 echo "Go back to <a href=login.php?>Login</a>";
			 
		 }else{
			if($logpassword!=$loginfo["userPassword"]){
                                                             echo "Sorry, the password you entered is not valid "; 
                                                            echo "</br>";
			    echo "Go back to <a href=login.php?>Login</a>";
                                                                
                                                                
                                                        }else{
                                                            $_SESSION['c_userid']=$loginfo["userId"];
                                                            $_SESSION['c_fname']=$loginfo["userFName"];
                                                            $_SESSION['c_sname']=$loginfo["userSName"];
                                                            
                                                            echo "<b>Hello!,".$_SESSION['c_fname']." ".$_SESSION['c_sname']."</b>";
                                                            
                                                            echo "</br>";
                                                            echo "You have successfully logged in to the system!";
                                                            echo "</br>";
                                                            echo "The e-mail you entered is ".$logemail;
                                                            echo "</br>";
                                                            echo "The password you entered is ".$logpassword;
                                                            echo "</br>";
                                                            echo "</br>";
                                                             echo "To continue shopping  <a href=index.php?>Product Index</a>";
                                                             echo "</br>";
                                                              echo "To view your basket <a href=basket.php?>My Basket</a>";
                                                            
                                                        } 
			
		 }
		 
		 
		
		 
	 }
	
}



//include head layout
include("footfile.html");
?>