<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_type"]!=1){
    header('Location: ../../../../Finalproject/front/index.php');
  
}

include 'connection.php';
if(isset($_GET["ID_company"]) && isset($_GET["ID_user"])){
    $ID_company=$_GET["ID_company"];
    $ID_user=$_GET["ID_user"];

    $sql="select ID_jobpost from jobpost where ID_company=$ID_company";
    $id_of_jobposts=mysqli_query($con,$sql);

    $sql="delete from user_account where ID_user=$ID_user";
    $req=mysqli_query($con,$sql);
    if($req){
        $sql="delete from company_profile where ID_company=$ID_company ";
        $req=mysqli_query($con,$sql);
        if($req){
            $sql="delete from jobpost where ID_company=$ID_company";
            $req=mysqli_query($con,$sql);
            if($req){
                while($row2=mysqli_fetch_array($id_of_jobposts)){
                    $sql="delete from skills_job where ID_jobpost=$row2[0]";
                    $req=mysqli_query($con,$sql);
                }
               
                if($req){
                    header ('location: companies-table.php');
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
            echo "error delete user from company_profile";
        }
  }
  else{
      echo "error_delete_user form user_account table";
  }

}



?>