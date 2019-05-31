<?php
session_start();
if(!isset($_SESSION["user_id"])){
    header('Location: index.php');
}


if(isset($_POST["post_id"])){
    include 'connection.php';
    $post_id=$_POST["post_id"];
    $jobtitle=$_POST["jobtitle"];
    $joblocation=$_POST["joblocation"];
    $category=$_POST["jobcategory"];
    $type=$_POST["jobtype"];
    $jobdescription=$_POST["jobdescription"];
    $skillset=$_POST["skillset"];
   

    //update job title,location,and dexription//
    $sql="update jobpost set title='$jobtitle',location='$joblocation',job_description='$jobdescription',ID_category=$category,ID_jobtype=$type where ID_jobpost=$post_id";
    $req=mysqli_query($con,$sql);
    if($req){
        if($skillset !==""){
                
                 
            //get skill id from selected skill//
            $skill = explode("|",$skillset);
            $nbskill=count($skill)-1;//get the number of selected skills//
          

                //delete old jobpost skills then add new selected skills//
                    $sql="delete from skills_job where ID_jobpost=$post_id";
                    $req=mysqli_query($con,$sql);

                    for($i=0;$i<$nbskill;$i++){
                        $sql="insert into skills_job (ID_jobpost,ID_skill) values($post_id,$skill[$i])";
                        $req=mysqli_query($con,$sql);
                    }
                    echo "success";

            
           }
           else{
               echo "success";
           }
    

    }
    else{
        echo "error_update_jobpost";
    }
}

?>