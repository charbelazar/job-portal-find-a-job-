<?php 
            include 'connection.php';
            $userid=47;
            $sql="select first_Name,last_name,address,salary,experience,phone_number,field_of_study,university from  user_account u, jobseeker_profile j ,  education_jobseeker e where u.ID_user=$userid and j.ID_user=$userid and j.ID_jobseeker=e.ID_jobseeker ";
            $result=mysqli_query($con,$sql);
            $nbrows=mysqli_num_rows($result);
            ?>
          
            
            