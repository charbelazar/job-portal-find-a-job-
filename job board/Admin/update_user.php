<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_type"]!=1){
    header('Location: ../../../../Finalproject/front/index.php');
  
}


include 'connection.php';
if(isset($_GET["admin_id"]) && isset($_GET["ID_user"])){
    $admin_id=$_GET["admin_id"];
    $ID_user=$_GET["ID_user"];
    $Fname=$_GET["Fname"];
    $Lname=$_GET["Lname"];
    $password=$_GET["password"];

    $sql="update user_account set password='$password' where ID_user=$ID_user";
    $req=mysqli_query($con,$sql);
    if($req){
        $sql="update admin set First_name='$Fname',Last_name='$Lname' where ID_admin=$admin_id";
        $req=mysqli_query($con,$sql);
        if($req){
            header ('location: user-table.php');
        }
        else{
            echo "error";
        }
    }
    else{
        echo "eroor update user table";
    }

}


?>