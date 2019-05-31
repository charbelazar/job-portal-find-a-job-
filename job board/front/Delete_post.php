<?php
session_start();
if(!isset($_SESSION["user_id"])){
    header('Location: index.php');
}

include 'connection.php';
$post_id=$_GET["id_post"];
$sql="delete from jobpost where ID_jobpost=$post_id ";
$req=mysqli_query($con,$sql);
if($req){
    $sql="delete from skills_job where  ID_jobpost=$post_id ";
    $req=mysqli_query($con,$sql);
    if($req){
    header ('location: company-mypost.php');}
    else{
        echo "error deleting job skills";
    }
}


?>