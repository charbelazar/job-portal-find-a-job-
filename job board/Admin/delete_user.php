<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_type"]!=1){
    header('Location: ../../../../Finalproject/front/index.php');
  
}

include 'connection.php';
if(isset($_GET["admin_id"]) && isset($_GET["ID_user"])){
    $admin_id=$_GET["admin_id"];
    $ID_user=$_GET["ID_user"];
    $sql="delete from user_account where ID_user=$ID_user";
    $req=mysqli_query($con,$sql);
    if($req){
        $sql="delete from admin where ID_admin=$admin_id ";
        $req=mysqli_query($con,$sql);
        if($req){
            header ('location: user-table.php');

        }
        else{
            echo "error delete admin table";
        }

        
  }
  else{
      echo "error_delete_user form user_account table";
  }

}


?>