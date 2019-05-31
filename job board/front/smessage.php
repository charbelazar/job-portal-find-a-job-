<?php
include "connection.php" ;
$userid=$_SESSION["user_id"];
$usertype=$_GET["usertype"];
$ids = $_GET['ids'] ; 
$idr = $_GET['idr'] ;
$msg = $_GET['msg'] ;
$send = "insert into messages (sender_ID, receiver_ID, message) value($ids, $idr ,'$msg') " ; 
$result = mysqli_query($con, $send) ;
header('location: newmail.php?usertype='.$usertype) ;

?>