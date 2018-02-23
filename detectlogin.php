<?php

if(isset($_SESSION['c_userid'])&&isset($_SESSION['c_fname'])&&isset($_SESSION['c_sname'])){
    
    echo "<p align='right'><i>Name: ".  $_SESSION['c_fname']." ".$_SESSION['c_sname']."/Customer No: " .$_SESSION['c_userid']."</i></p>";
   
}
?>
