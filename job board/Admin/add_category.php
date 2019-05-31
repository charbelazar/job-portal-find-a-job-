<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_type"]!=1){
    header('Location: ../../../../Finalproject/front/index.php');
  
}

include 'connection.php';
if(isset($_POST["category"])){
    $category=$_POST["category"];
    $sql="insert into category (category_name) values('$category')";
    $req=mysqli_query($con,$sql);
    if($req){
        header ('location: category-table.php');
    }
    else{
        echo " eroor add category";

    }
}
?>