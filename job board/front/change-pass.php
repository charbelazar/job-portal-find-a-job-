<?php
session_start();
if(!isset($_SESSION["user_id"])){
    header('Location: index.php');
}

if(isset($_POST["change"])){
include 'connection.php';
$userid=$_SESSION["user_id"];
$Opass=$_POST["Opassword"];
$Npass=$_POST["Npassword"];


$sql="select * from user_account where password='$Opass' and ID_user=$userid";
$result=mysqli_query($con,$sql);
$nbrows=mysqli_num_rows($result);
if($nbrows > 0){
    $sql="update user_account set password='$Npass' where ID_user=$userid ";
    $req=mysqli_query($con,$sql);
    echo "success";
}
else{
    echo "fail";
}


}
?>