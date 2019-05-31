<?php 
include 'connection.php';
if(isset($_POST["category"])){
    $category=$_POST["category"];
    $sql="select * from category where category_name='$category' ";
    $result=mysqli_query($con,$sql);
    $nbrows=mysqli_num_rows($result);
    if($nbrows >0){
        echo "error";

    }
}
?>