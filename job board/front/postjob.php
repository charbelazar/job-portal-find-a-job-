<?php
session_start();
if(!isset($_SESSION["user_id"])){
    header('Location: index.php');
}

if(isset($_POST["postjob"])){
    include 'connection.php';
    $userid=$_SESSION["user_id"];
    $jobtitle=$_POST["jobtitle"];
    $joblocation=$_POST["joblocation"];
    $jobcategory_id=$_POST["jobcategory"];
    $jobtype_id=$_POST["jobtype"];
    $jobdescription=$_POST["jobdescription"];

    //get company_id from company_profile table//
    $sql="select ID_company from company_profile where ID_user=$userid ";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    $company_id=$row[0];
    ////////////////////

    //Insert jobpost info into jobpost table//
    $sql="insert into jobpost (ID_company,title,location,ID_category,ID_jobtype,job_description) values($company_id,'$jobtitle','$joblocation','$jobcategory_id','$jobtype_id','$jobdescription')";
    $req=mysqli_query($con,$sql);
    if($req){

        //get the last id of jobpost //
        $sql="select max(ID_jobpost) from jobpost";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result);
        $id_jobpost=$row[0];
        //////////////////////////////

         ///insert skills into skills_company table ///
                 //get the id of skills //
                 $skillset=$_POST["skillset"];
                 $skill = explode("|",$skillset);
                 $nbskill=count($skill)-1;//get the number of skills//
                 
                      $skills_jobseeker="";
                     for($i=0;$i<$nbskill;$i++){
                         $sql="insert into skills_job (ID_jobpost,ID_skill) values($id_jobpost,$skill[$i])";
                         $req=mysqli_query($con,$sql);
                         
                      }
                      echo "success";

    }
    else{
        echo "error_jobpost";
    }


}


?>