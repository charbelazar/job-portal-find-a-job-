<?php
session_start();
include 'connection.php';

if(isset($_POST["login"])){
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $sql="select * from user_account where email='$email' and password='$pass' ";
    $result=mysqli_query($con,$sql);
    $nbrows=mysqli_num_rows($result);
    if ($nbrows==1){
        $row=mysqli_fetch_array($result);
        $_SESSION["user_id"]=$row[0];
        $_SESSION["user_type"]=$row[1];
        $usertype=$row[1];
        if($usertype==2){
            echo "jobseekerlogin";
        }
        if($usertype==3){
            echo "companylogin";
        }
        if($usertype==1){
            echo "admin";
        }
    }
    else{
        echo "Error";//invalid user name or password
    }
}
