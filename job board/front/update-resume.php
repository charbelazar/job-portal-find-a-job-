<?php
session_start();
if(!isset($_SESSION["user_id"])){
    header('Location: index.php');
}

include 'connection.php';
if(isset($_POST["update"])){
    $userid=$_SESSION["user_id"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $address=$_POST["address"];
    $nationality=$_POST["nationality"];
    $prehour=$_POST["prehour"];
    $workingexp=$_POST["workingexp"];
    $tel=$_POST["tel"];
    $degree=$_POST["degree"];
    $fieldofstudy=$_POST["fieldofstudy"];
    $school=$_POST["school"];
    $skillset=$_POST["skillset"];
    
    //get jobseeker id //
    $sql="select ID_jobseeker from jobseeker_profile where ID_user=$userid ";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    $id_jobseeker=$row[0];
    ////////////////////


   $sql="update jobseeker_profile set first_Name='$fname',last_Name='$lname',address='$address',nationality='$nationality',salary='$prehour',experience='$workingexp' where ID_user=$userid ";
   $req=mysqli_query($con,$sql);
   if($req){

       $sql="update user_account set phone_number='$tel' where ID_user=$userid ";
       $req=mysqli_query($con,$sql);
       if($req){

       $sql="update education_jobseeker set degree='$degree',field_of_study='$fieldofstudy',university='$school' where ID_jobseeker=$id_jobseeker  ";
       $req=mysqli_query($con,$sql);
       if($req){
           if($skillset !==""){
                
                 
            //get skill id from selected skill//
            $skill = explode("|",$skillset);
            $nbskill=count($skill)-1;//get the number of selected skills//
          

                //delete old jobseeker skill then add new selected skills//
                    $sql="delete from skills_jobseeker where ID_jobseeker=$id_jobseeker";
                    $req=mysqli_query($con,$sql);

                    for($i=0;$i<$nbskill;$i++){
                        $sql="insert into skills_jobseeker (ID_jobseeker,ID_skill) values($id_jobseeker,$skill[$i])";
                        $req=mysqli_query($con,$sql);
                    }
                    echo "success";

            
           }
           else{
            echo "success";

           }
           

       }
       else{
           echo "error_update_education_jobseeker";
       }

    }
    else{
        echo "error_update_phone_number";
    }
   }

   else{
       echo "error_update_jobseeker_profile";
   }



}















?>




