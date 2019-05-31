<?php
include "connection.php" ;
$usertype=$_GET["usertype"]; 
$idr = $_GET['idr'] ; 
$send = "delete  from  messages where receiver_ID = $idr " ; 
$result = mysqli_query($con, $send) ;
header('location: inbox.php?usertype='.$usertype) ;

?>