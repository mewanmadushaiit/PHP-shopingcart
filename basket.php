<?php
session_start();
include 'db.php';


//create a variable called $pagename which contains the actual name of the page
$pagename="Ordering Basket";






//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
//display window title
echo "<title>".$pagename."</title>";
//include head layout
include ("headfile.html");
include ("detectlogin.php");




//echo "<p>".$_SESSION['basket']['quan']."</p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";
 $total=0; 
if( isset($_POST["h_prodid"])){
   
                
	$newprodid=$_POST['h_prodid'];
                   $reququantity=$_POST['p_quantity'];
                   
                   $narr=array($newprodid =>$reququantity);
	$_SESSION['basket']=$narr;
	//array_push($_SESSION['basket'],$newprodid," : ",$reququantity);   
//	
//	for($i = 0 ; $i < count($_SESSION['basket']) ; $i++) {
//                       echo '<td>'.$_SESSION['basket'][$i].'</td>';
//     }
       if(isset($_SESSION['basket'])){
          echo "<table border='1'><tr><th>Product Name</th><th>Product Price</th><th>Quantity</th><th>Sub Total</th></tr>";
          
          foreach ($_SESSION['basket'] as $key => $value){
              $SQL="select prodName,prodPrice from product where prodid ='$key'";
              
                        $result= mysql_query($SQL);
                        
                        
                while($info = mysql_fetch_array($result)){
                        echo "<tr><td>".$info["prodName"]."</td><td>".$info["prodPrice"]."</td><td>".$value."</td><td>".$value*$info["prodPrice"]."</td></tr>";
                         $total+=$value*$info["prodPrice"];
                        }
                           
          }
          echo "<tr><td colspan='3'>Total</td><td>".$total."</td></tr>";
          echo '</table>';
       }
      echo '</br></br>';
      echo "<p>Your basket has been updated</p> ";
                
 }else{
     
     echo "Exsiting basket";
     echo "</br></br>";
     if(isset($_SESSION['basket'])){
          echo "<table border='1'><tr><th>Product Name</th><th>Product Price</th><th>Quantity</th><th>Sub Total</th></tr>";
          
          foreach ($_SESSION['basket'] as $key => $value){
              $SQL="select prodName,prodPrice from product where prodid ='$key'";
              
                        $result= mysql_query($SQL);
                        
                        
                while($info = mysql_fetch_array($result)){
                        echo "<tr><td>".$info["prodName"]."</td><td>".$info["prodPrice"]."</td><td>".$value."</td><td>".$value*$info["prodPrice"]."</td></tr>";
                         $total+=$value*$info["prodPrice"];
                        }
                           
          }
          echo "<tr><td colspan='3'>Total</td><td>".$total."</td></tr>";
          echo '</table>';
       } else {
           echo "<i><b>Your basket is empty</b></i>";
            echo "</br></br>";
            
              echo "<table border='1'><tr><th>Product Name</th><th>Product Price</th><th>Quantity</th><th>Sub Total</th></tr>";
              echo "<tr><td colspan='3'>Total</td><td>".$total."</td></tr>";
              echo '</table>';
       }
 }
 
  

echo "<p><a href=clearbasket.php?>Clear Basket</p>";  
    
echo "New workedUp Customers <a href=register.php?>Register</a></br>";
echo "Registerd workedUp Members <a href=login.php?>Login</a>";
//echo "<p> Text Here";
//include head layout
include("footfile.html");


?>