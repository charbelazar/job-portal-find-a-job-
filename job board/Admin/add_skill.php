<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_type"]!=1){
    header('Location: ../../../../Finalproject/front/index.php');
  
}

include 'connection.php';
if(isset($_POST["skill"])){
    $skill=$_POST["skill"];
    $sql="insert into skills (skill) values('$skill')";
    $req=mysqli_query($con,$sql);
    if($req){
        header ('location: skills-table.php');
    }
    else{
        echo " eroor add skill";

    }
}
?>