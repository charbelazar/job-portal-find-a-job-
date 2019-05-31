<?php
session_start();
if(!isset($_SESSION["user_id"])){
    header('Location: index.php');
}

include 'connection.php';
if(isset($_POST["update"])){
    $userid=$_SESSION["user_id"];
    //get company id//
    $sql="select ID_company from company_profile where ID_user=$userid ";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    $company_id=$row[0];
    
    /////////////////

    $company_name=$_POST["company_name"];
    $address=$_POST["address"];
    $city=$_POST["city"];
    $state=$_POST["state"];
    $website=$_POST["website"];
    $phone=$_POST["phone"];

    //update company info//
    $sql="update company_profile set company_name='$company_name',address='$address',city='$city',state='$state',website='$website' where ID_company=$company_id ";
    $req=mysqli_query($con,$sql);
    if($req){
        //update phone number//
        $sql="update user_account set phone_number='$phone' ";
        $req=mysqli_query($con,$sql);
        if($req){
            echo "success";
        }
        else{
            echo "error update_phone_number";
        }
    }
    else{
        echo "error update_company_profile";
    }
}


?>