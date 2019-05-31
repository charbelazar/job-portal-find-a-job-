<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_type"]!=1){
    header('Location: ../../../../Finalproject/front/index.php');
  
}


include 'connection.php';

    $email=$_POST["email"];
    $password=$_POST["password"];
    $Fname=$_POST["Fname"];
    $Lname=$_POST["Lname"];
    $registration_date=date("Y/m/d");

    $sql="select * from user_account where email='$email'";
    $result=mysqli_query($con,$sql);
    $nbrows=mysqli_num_rows($result);
    if($nbrows==0){
        $sql="insert into user_account (user_type_ID,email,password,registration_date) values(1,'$email','$password','$registration_date')";
        $req=mysqli_query($con,$sql);
        if($req){
            $sql="select max(ID_user) from user_account ";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($result);
            $user_id=$row[0];
            $sql="insert into admin (ID_user,First_name,Last_name) values($user_id,'$Fname','$Lname')";
            $req=mysqli_query($con,$sql);
            if($req){
                header ('location: user-table.php');

            }
            else{
                echo "error inserting data into admin table";
            }

        }
        else{
            echo "error inserting data into user_account table";
        }

    }
    else{
        echo "This email is alreay exist please choose another one";
    }




?>