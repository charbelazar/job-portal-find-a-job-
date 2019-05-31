<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_type"]!=1){
    header('Location: ../../../../Finalproject/front/index.php');
  
}
include 'connection.php';
if(isset($_GET["category_id"])){
    $category_id=$_GET["category_id"];
    $sql="delete from category where ID_category=$category_id";
    $req=mysqli_query($con,$sql);
    if($req){
        header ('location: category-table.php');
    }
    else{
        echo "error delete category";
    }
}


?>