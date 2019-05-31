<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_type"]!=1){
    header('Location: ../../../../Finalproject/front/index.php');
  
}

include 'connection.php';
if(isset($_GET["jobseeker_id"]) && isset($_GET["ID_user"])){
    $jobseeker_id=$_GET["jobseeker_id"];
    $ID_user=$_GET["ID_user"];
    $sql="delete from user_account where ID_user=$ID_user";
    $req=mysqli_query($con,$sql);
    if($req){
        $sql="delete from jobseeker_profile where ID_jobseeker=$jobseeker_id ";
        $req=mysqli_query($con,$sql);
        if($req){
            $sql="delete from education_jobseeker where ID_jobseeker=$jobseeker_id";
            $req=mysqli_query($con,$sql);
            if($req){
                $sql="delete from skills_jobseeker where ID_jobseeker=$jobseeker_id";
                $req=mysqli_query($con,$sql);
                if($req){
                    header ('location: jobseeker-table.php');
                }
                else{
                    echo "error_delete_skills";
                }
            }
            else{
                echo "error deleting user educations info";
            }
        }
        else{
            echo "error delete user from jobseeker_profile";
        }
  }
  else{
      echo "error_delete_user form user_account table";
  }

}



?>