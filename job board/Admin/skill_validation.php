<?php 
include 'connection.php';
if(isset($_POST["skill"])){
    $skill=$_POST["skill"];
    $sql="select * from skills where skill='$skill' ";
    $result=mysqli_query($con,$sql);
    $nbrows=mysqli_num_rows($result);
    if($nbrows >0){
        echo "error";

    }
}
?>