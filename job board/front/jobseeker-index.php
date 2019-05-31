<?php
include 'jobseeker-navbar.php';
?>


<!-------------------scroll table css------------------------------------------------------->
<style>
   .table-wrapper-scroll-y {
display: block;
max-height: 4000px;
overflow-y: auto;
-ms-overflow-style: -ms-autohiding-scrollbar;}
.homeg 
{
    background-color: pink; 
    border-radius : 5px; height : 40px;
}
</style>

<!--------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------->
<section class="section purchase" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="section-content text-center">
                <h1 class="title-text">
                <?php
                include 'connection.php';
                $userid=$_SESSION["user_id"];
                $sql="select first_Name,last_name from jobseeker_profile where ID_user=$userid ";
                $result=mysqli_query($con,$sql);
                $nbrows=mysqli_num_rows($result);
                if($nbrows > 0){
                    $row=mysqli_fetch_array($result);
                    $fname=$row[0];
                    $lname=$row[1];
                    echo "Welcome Back ".$fname." ".$lname."<br>";

                }
                else{
                    echo "error";
                }

                ?>
                  

                </h1>
                <p> Looking for a Job <br>Join thousand of employers and earn what you deserve!</p>
                <a href="jobseeker-browsejob.php" class="btn btn-common">Get Started Now</a>
            </div>
        </div>
    </div>
</section>

<!----------------------------------------------------------------------------------------------->



<section class="find-job section">
    <div class="container">
        <h2 class="section-title">Hot Jobs for you</h2>
        <div class="container">

            <div class="col-md-12">
                <div class="table-wrapper-scroll-y">
                    <table class="table">
                       


                     <!-----------------------get jobpost form database ------------------------------------------->
                     <?php  //-1- get job seeker id ///
                         include 'connection.php';
                         $userid=$_SESSION["user_id"];
                         $sql="select ID_jobseeker from jobseeker_profile where ID_user=$userid ";
                         $result=mysqli_query($con,$sql);
                         $row=mysqli_fetch_array($result);
                         $id_jobseeker=$row[0];
                        /////////////////////////
                         

                        //-2- select jobs posts that they have the same skills of the job seeker //
                         $sql="select jobpost.ID_jobpost,jobpost.ID_company,jobpost.title,jobpost.location,jobpost.job_description,jobtype.Type,category.category_name,jobpost.date from jobpost,skills_job,skills_jobseeker,jobtype,category where jobpost.ID_jobtype=jobtype.ID_jobtype and jobpost.ID_category=category.ID_category and jobpost.ID_jobpost=skills_job.ID_jobpost and skills_jobseeker.ID_jobseeker=$id_jobseeker and skills_jobseeker.ID_skill=skills_job.ID_skill group by jobpost.ID_jobpost order by jobpost.ID_jobpost DESC  ";
                         $result=mysqli_query($con,$sql);
                         $nbrows=mysqli_num_rows($result);
                         if($nbrows > 0){
                             while($row=mysqli_fetch_array($result)){
                                //////// -3- get jobpost skills/////////////////
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

                            /////////////-4- get the name and email of the company ////////
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
                             echo "<a href='newemail.php?usertype=2&email=".$company_email."' class='btn btn-common btn-rm'>Send MSG</a> ";
                             echo "</div>";

                             echo "</div>";

                             
                             
                             echo "</div>";
                             echo "</div>";
                             echo "</tr>";
                             echo "</td>";
                             }
                             
                             


                             
                         }
                         else{
                            
                            echo "No data found ";
                            
                        

                         }
                         


                       ?>
                       <!-------------------------------------------------------------------------------------------->
                </table>
            </div>


        </div>
    </div>
</section>

<?php
include 'footer2.php';
?>

<a href="#" class="back-to-top">
    <i class="ti-arrow-up"></i>
</a>
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
            <div class="object" id="object_five"></div>
            <div class="object" id="object_six"></div>
            <div class="object" id="object_seven"></div>
            <div class="object" id="object_eight"></div>
        </div>
    </div>
</div>

<script type="text/javascript" src="assets/js/jquery-min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/material.min.js"></script>
<script type="text/javascript" src="assets/js/material-kit.js"></script>
<script type="text/javascript" src="assets/js/color-switcher.js"></script>
<script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/form-validator.min.js"></script>
<script type="text/javascript" src="assets/js/contact-form-script.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
</body>

</html>
