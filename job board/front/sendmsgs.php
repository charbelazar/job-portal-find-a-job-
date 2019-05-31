<?php
include "connection.php" ;
//$userid=$_SESSION["user_id"];
$usertype=$_GET["usertype"];
$ids = $_GET['ids'] ; 
$idr = $_GET['idr'] ;
$msg = $_GET['msg'] ;
$query = "select * from user_account where email = '$idr' " ; 
$results = mysqli_query($con, $query) ;
$row = mysqli_fetch_array($results) ;
$locID = $row[0];
$send = "insert into messages (sender_ID, receiver_ID, message) value($ids, $locID ,'$msg') " ;
$result = mysqli_query($con, $send) ;
header('location: newmail.php?usertype='.$usertype) ;

?>