<?php 
if(isset($_POST["keyword"])){
    include 'connection.php';
    $keyword=$_POST["keyword"];
    $gender=$_POST["gender"];
    $nationality=$_POST["nationality"];
   
    $sql="select jobseeker_profile.ID_jobseeker,jobseeker_profile.ID_user,jobseeker_profile.first_NAme,jobseeker_profile.last_name,jobseeker_profile.address,jobseeker_profile.nationality,jobseeker_profile.salary,jobseeker_profile.experience,user_account.gender,user_account.phone_number,user_account.registration_date,education_jobseeker.degree,education_jobseeker.field_of_study,education_jobseeker.university,user_account.email from jobseeker_profile,user_account,education_jobseeker where education_jobseeker.field_of_study like '%$keyword%' and jobseeker_profile.ID_user=user_account.ID_user and jobseeker_profile.ID_jobseeker=education_jobseeker.ID_jobseeker  ";

    

    if(!empty($gender)){
        $sql .="and user_account.gender='$gender'";
    }

    if(!empty($nationality)){
        $sql .="and jobseeker_profile.nationality='$nationality'";
    }


   

    
    $result=mysqli_query($con,$sql);
    $nbrows=mysqli_num_rows($result);
    if($nbrows > 0){
        echo "<h3 class=alerts-title>JOBSEEKER : (".$nbrows.")</h3>";
        $i=0;
        while($row=mysqli_fetch_array($result)){
           ////////-2- get jobseeker skills/////////////////
           $sql2="select skill from skills s,skills_jobseeker sj where sj.ID_jobseeker=$row[0] and sj.ID_skill=s.ID_skills  ";
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

       

      

        echo "<tr>";
        echo "<td>";
        echo "<div class='manager-resumes-item'>";
        echo "<div class='manager-content'>";
        echo "<img class='resume-thumb' src='assets/img/jobs/img-1.jpg' alt=''>";
        echo "<div class='manager-info'>";
        echo "<div class='manager-name'>";
        echo "<h4>".$row["first_NAme"]." ".$row["last_name"]."</h4>";
        echo "<h5>".$row["field_of_study"]."</h5>";
        echo "</div>";
        echo "<div class='manager-meta'>";
        echo "<span class='location'><i class='ti-location-pin'></i>".$row["address"]."</span>";
        echo "<span class='rate'><i class='ti-time'></i> $".$row["salary"]." per hour</span>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "<div class='update-date'>";
        echo "<p class='status'>";
        echo "<strong>Updated on:</strong> ".$row["registration_date"]."</p> ";
        
        echo "<div class='action-btn'>";
        echo "<input type='button' class='btn btn-xs btn-gray' value='View Resume' data-toggle='modal' data-target='#resumeModal_$i' />";
        echo "<a class='btn btn-xs btn-danger' href='newemail.php?usertype=3&email=".$row["email"]."'>Send Msg</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</td>";
        echo "</tr>";




        /////////resume modal///////////
        
        echo "<!-- Modal -->";
        echo "<div id='resumeModal_$i' class='modal fade' role='dialog'>";
        echo "<div class='container '>";
        echo "<div class='row'>";
        echo "<div class='col-md-12 col-sm-12 col-xs-12'>";

         echo "<div class='modal-dialog'>";
        
           echo "<!-- Modal content-->";
           echo  "<div class='modal-content'>";
           echo   "<div class='modal-body'>";


           echo "<div class='inner-box my-resume'>";
           echo "<div class='author-resume'>";
               echo "<div class='thumb'>";
                   echo "<img src='assets/img/jobs/img-1.jpg' alt=''>";
               echo "</div>";
               echo "<div class='author-info'>";
                   echo "<h3>".$row["first_NAme"]." ".$row["last_name"]."</h3>";
                   echo "<p class='sub-title'>".$row["field_of_study"]."</p>";
                   echo "<p class='sub-title'> Gender : ".$row["gender"]."</p>";
                   echo "<p class='sub-title'> Nationality : ".$row["nationality"]."</p>";
                   echo "<p><span class='address'><i class='ti-location-pin'></i>".$row["address"]."</span> <span><i class='ti-phone'></i></span>, Tel :".$row["phone_number"]." , Email : ".$row["email"]."</p>";
              echo "</div>";
           echo "</div>";
           
          echo  "<div class='work-experence item'>";
               echo "<h3>Working Experience </h3>";
               
               
               echo "<textarea  class='form-control' rows='4' disabled>".$row["experience"]."</textarea>";
               
              
           echo "</div>";
           echo "<div class='education item'>";       
               echo "<h3>Education </h3>";
               echo "<h4>University : ".$row["university"]."</h4>";
               echo "<p>".$row["degree"]." in ".$row["field_of_study"]."</p>";
              
               
           echo "</div>";

           echo        "<div class='about-me item'>";
           echo "<h3>Skills </h3>";
           echo "<p>".$skills."</p>";
           echo "</div>";

            echo        "<div class='about-me item'>";
                        echo "<h3>Per hour </h3>";
                        echo "<p>".$row["salary"]."$ </p>";
                    echo "</div>";

           //////////////

                
              echo "</div>";
              echo "<div class='modal-footer'>";
               echo "<button type='button' class='btn btn-m btn-danger' data-dismiss='modal'>OK</button>";
                
              echo "</div>";
            echo "</div>";
        
         echo "</div>";

        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        

           $i++;



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

