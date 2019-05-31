<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_type"]!=1){
    header('Location: ../../../../Finalproject/front/index.php');
  
}
include 'connection.php';
if(isset($_GET["post_id"])){
    $post_id=$_GET["post_id"];
    $sql="delete from jobpost where ID_jobpost=$post_id";
    $req=mysqli_query($con,$sql);
    if($req){
        $sql="delete from skills_job where ID_jobpost=$post_id";
        $req=mysqli_query($con,$sql);
        if($req){
           header ('location: jobpost-table.php');
        }
        else{
            echo " error delete post skills";
        }
     
    }
    else{
        echo "error delete post";
    }
}


?>