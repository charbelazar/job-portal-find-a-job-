<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_type"]!=1){
    header('Location: ../../../../Finalproject/front/index.php');
  
}
include 'connection.php';
if(isset($_GET["skill_id"])){
    $skill_id=$_GET["skill_id"];
    $sql="delete from skills where ID_skills=$skill_id";
    $req=mysqli_query($con,$sql);
    if($req){
        header ('location: skills-table.php');
    }
    else{
        echo "error delete skill";
    }
}


?>