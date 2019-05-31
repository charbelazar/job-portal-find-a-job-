<?php 
session_start();
if(isset($_POST["job_title"])){
    include 'connection.php';
    $job_title=$_POST["job_title"];
    $job_date=$_POST["date"];
    $job_type=$_POST["type"];
    $job_category=$_POST["category"];
    $job_location=$_POST["location"];
    $skills=$_POST["skillset"];
    $sql="select ID_jobpost,ID_company,title,location,job_description,Type,category_name,date  from jobpost jp,jobtype jt,category c where jp.title like '%$job_title%' and jp.ID_jobtype=jt.ID_jobtype and jp.ID_category=c.ID_category  ";

    if(!empty($job_type)){
       $sql .="and jp.ID_jobtype=$job_type ";
    }

    if(!empty($job_category)){
        $sql .="and jp.ID_category=$job_category";
    }
    
    if(!empty($job_location)){
        $sql .="and jp.location='$job_location'";
    }

    if(!empty($job_date)){
        if($job_date=="Newest"){
            $sql .="  order by jp.date DESC";
        }
        else 
        {
            $sql .="  order by jp.date ASC";
        }
      
        
       
    }
    else
    {
        $sql .="  order by jp.date DESC";
  
    }
    $result=mysqli_query($con,$sql);
    $nbrows=mysqli_num_rows($result);
    if($nbrows > 0){
        echo "<h3 class=alerts-title>JOBS : (".$nbrows.")</h3>";
        while($row=mysqli_fetch_array($result)){
           ////////-2- get jobpost skills/////////////////
           $sql2="select skill from skills s,skills_job sj where sj.ID_jobpost=$row[0] and sj.ID_skill=s.ID_skills  ";
           $result2=mysqli_query($con,$sql2);
           $nbrows2=mysqli_num_rows($result2);
           if($nbrows2 > 0){
           $skills="";
       
           while($row2=mysqli_fetch_array($result2)){
               
               $skills =$skills.$row2[0].", ";
           }
           
           
           }
           else{
               $skills="no skills found";

           }
       ///////////////////////////////////////////////

       /////////////-3- get the name and email and tel of the company ////////
       $sql3="select company_name,email,phone_number from user_account u,company_profile c where c.ID_company=$row[1] and c.ID_user=u.ID_user";
       $result3=mysqli_query($con,$sql3);
       $nbrows3=mysqli_num_rows($result3);
       if($nbrows > 0){
           $row3=mysqli_fetch_array($result3);
           $company_name=$row3[0];
           $company_email=$row3[1];
           $company_tel=$row3[2];
       }
       else{
           $company_name="no data found";
           $company_email="no data found";
           $company_tel="no data found";

       }
       //////////////////////////////////////////////////

      

        echo "<tr>";
        echo "<td>";
        echo "<div class='job-list col-md-12'>";
        echo " <div class='thumb'>";
        echo "<a href='job-details.html'><img src='assets/img/jobs/img-1.jpg' alt=''></a>";
        echo "</div>";

        echo "<div class='job-list-content'>";
        echo "<h4>".$row[2]."<span class='full-time'>".$row[5]."</span></h4>";
        echo "<p >".$row[4]."</p>";

        echo "<div class='job-tag'>";
        echo "<div class='pull-left'>";
        echo "<div class='meta-tag'>";
            echo "<span>Category :".$row[6]." |</span>";
            echo "<span>Location :<i class='ti-location-pin'></i>".$row[3]." |</span>";
            echo "<span>Skills :".$skills."</span></br>";
            echo "<span>Posted By :".$company_name."| Email :".$company_email." | Tel :".$company_tel."</span></br>";
            echo "<span>Date of post:".$row[7]."</span>";

        echo "</div>";
    echo "</div>";
        
       

        echo "<div class='pull-right'>";
       // echo " <input type='button' class='btn btn-common btn-rm' value='Apply Job' />";
       if(isset($_SESSION["user_id"])){
        echo "<a href='newemail.php?usertype=2&email=".$company_email."' class='btn btn-common btn-rm'>Send MSG</a> ";
       }
       else{
        echo " <input type='button' data-toggle='modal' data-target='#modal' class='btn btn-common btn-rm' value='Send MSG' />";
       }
        
        echo "</div>";

        echo "</div>";

        
        
        echo "</div>";
        echo "</div>";
        echo "</td>";
        echo "</tr>";
        }
        
        


        
    }
    else{
       
       echo "<tr><td><h3>No Result Found</h3></td></tr> ";
       
   

    }
    
}
else{
    header('Location: index.php');
}





?>