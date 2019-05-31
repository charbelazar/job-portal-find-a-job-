

<section class="find-job section">


<div class="container">
    <h2 class="section-title">Hot Jobs</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">


                                                       <!-----------------------get jobpost form database ------------------------------------------->
                       <?php  ////////-1- select last 15 jobpost form databse //////////////
                         include 'connection.php';
                         $sql="select ID_jobpost,ID_company,title,location,job_description,Type,category_name,date from jobpost jp,jobtype jt,category c where jp.ID_jobtype=jt.ID_jobtype and jp.ID_category=c.ID_category order by ID_jobpost DESC limit 15 ";
                         $result=mysqli_query($con,$sql);
                         $nbrows=mysqli_num_rows($result);
                         if($nbrows > 0){
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
                             echo " <input type='button' data-toggle='modal' data-target='#modal' class='btn btn-common btn-rm' value='Send Message' />";
                             echo "</div>";

                             echo "</div>";

                             
                             
                             echo "</div>";
                             echo "</div>";
                             }
                             
                             


                             
                         }
                         else{
                            
                            echo "No data found ";
                            
                        

                         }
                         


                       ?>
                       <!-------------------------------------------------------------------------------------------->
                
                       <div class="col-md-12">
                        <div class="showing pull-right">
                           <a href="#"><h3>Click Here To See More Jobs</h3></a>
                        </div>
                        </div>
                
            </div>
        </div>





    </div>
</div>
</section>


<!-------------------modal------------------------>
<!-- Modal -->
<div id="modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <h3>Please <a href="login.php" style="color:red">Login here</a> or <a href="jobseekerRegister.php" style="color:red" >Register here</a> to apply to the job !!!</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default " data-dismiss="modal">CLOSE</button>
        
      </div>
    </div>

  </div>
</div>
<!--------------------------------------------------------------------------------------->