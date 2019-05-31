<?php
include "connection.php" ;
$usertype=$_GET["usertype"]; 
$ids = $_GET['ids'] ;
$send = "delete  from  messages where sender_ID = $ids " ; 
$result = mysqli_query($con, $send) ;
header('location: sentmsg.php?usertype='.$usertype) ;

?>