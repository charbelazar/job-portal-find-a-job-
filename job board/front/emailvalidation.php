<?php 
include 'connection.php';
if(isset($_POST["email"])){
    $email=$_POST["email"];
    $sql="select * from user_account where email='$email' ";
    $result=mysqli_query($con,$sql);
    $nbrows=mysqli_num_rows($result);
    if($nbrows >0){
        echo "error";

    }
}
?>