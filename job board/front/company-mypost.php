<?php
include 'company-navbar3.php';
?>
<style>
    .table-wrapper-scroll-y {
display: block;
max-height: 600px;
overflow-y: auto;
-ms-overflow-style: -ms-autohiding-scrollbar;
}
</style>

<!-----------function ---->
<script src="delete_post.js" ></script>
<script src="edit_post.js" ></script>
<script src="Post-update.js"></script>

<!-------------------------------------->

<div class="page-header" style="background: url(assets/img/banner1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="product-title">My Account</h2>
                    <ol class="breadcrumb">
                        <li><a href="jobseeker-index.php"><i class="ti-home"></i> Home</a></li>
                        <li class="current">My account</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<!------------------------------------------------------------------------------------>
<!--ASIDE-->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="right-sideabr">
                    <div class="inner-box">
                        <h4>My Posts</h4>
                        <ul class="lest item">
                            <li><a href="company-mypost.php">Manage Post</a></li>
                            <li><a href="company-postjob.php">Add New Post</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <!----------------------------------------------------------------------------------------->
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="job-alerts-item candidates">
                    <h3 class="alerts-title">Manage Jobs</h3>



                    <div class="table-wrapper-scroll-y">
                        <table class="table table-striped">
                            <tr>
                                <th>
                                    <p>JOB TITLE</p>
                                </th>
                                <th>
                                    <p>&nbsp&nbsp&nbsp JOB TYPE</p>
                                </th>
                                <th style="width:200px;">
                                    <p>&nbsp&nbsp DATE ADDED</p>
                                </th>
                                <th>
                                    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp EVENT</p>
                                </th>

                            </tr>


                            <!--- get the posts from database --------------------------------------------->
                            <?php
                        include 'connection.php';
                        $userid=$_SESSION["user_id"];//get ID_user from session//
                        $sql="select ID_company from company_profile where ID_user=$userid";//get ID_company from databse//
                        $result=mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($result);
                        $companyid=$row[0];

                        $sql="select jobpost.ID_jobpost,jobpost.title,jobpost.location,jobpost.job_description,jobpost.date,category.category_name,jobtype.type from jobpost ,jobtype ,category where jobpost.ID_company=$companyid and jobpost.ID_jobtype=jobtype.ID_jobtype and jobpost.ID_category=category.ID_category  order by jobpost.ID_jobpost DESC";
                        $result=mysqli_query($con,$sql);
                        $nbrows=mysqli_num_rows($result);
                        if($nbrows>0){
                            $i=1;
                            while($row=mysqli_fetch_array($result)){
                                echo "<tr>";
                                echo "<td style=' height:40px;'>";
                                echo "<h5>".$row[1]."</h5>";
                                echo "</td>";

                                echo "<td style=' height:40px;'>";
                                echo "<p><span class='full-time'>".$row[6]."</span></p>";
                                echo "</td>";

                                echo "<td >".$row[4]."</td>";
                                echo "<td><button type='button' class='btn btn-xs btn-gray' data-toggle='modal' data-target='#myModal_$i' style= 'background-color:gray;'>VIEW</button>&nbsp&nbsp<input  type='button' onclick='confirm_box($row[0])' class='btn btn-xs btn-gray' value='DELETE' style= 'background-color:red;' /></td>";
                               
                                
                                echo "</tr>";


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

                                //<!-- Modal -->//
                                echo  "<div id='myModal_$i' class='modal fade' role='dialog'>";
                                echo "<div class='modal-dialog'>";
                                
                                   // <!-- Modal content-->//
                                echo "<div class='modal-content'>";
                                
                                      
                                echo "<div id='modal-body_$i' class='modal-body'>";
                                 //////////////////////////////
                                 echo "<div class='job-list col-md-12'>";
                                 echo " <div class='thumb'>";
                                 echo "<a href='job-details.html'><img src='assets/img/jobs/img-1.jpg' alt=''></a>";
                                 echo "</div>";
    
                                 echo "<div class='job-list-content'>";
                                 echo "<h4>".$row[1]."<span class='full-time'>".$row[6]."</span></h4>";
                                 echo "<p >".$row[3]."</p>";
    
                                 echo "<div class='job-tag'>";
                                 echo "<div class='pull-left'>";
                                 echo "<div class='meta-tag'>";
                                 echo "<span>Category :".$row[5]." |</span>";
                                 echo "<span>Location :<i class='ti-location-pin'></i>".$row[2]." |</span><br>";
                                 echo "<span>Skills :".$skills."</span></br>";
                                 
                                 
    
                                 echo "</div>";
                                 echo "</div>";
    
                                 echo "</div>";
    
                                 
                                 
                                 echo "</div>";
                                 echo "</div>";
                                 ////////////////////////////////
                                       
                                 echo "</div>";
                                 echo "<div class='modal-footer'>";
                                 
                                 echo "<div class='save-btn pull-left' style='margin-left:35px; display:none;'><input type='button' data-postid='$row[0]' class='btn-save btn btn-common' Value='SAVE'  /></div>";
                                 echo "<input type='button'   data-i='$i' data-postid='$row[0]' class='btn-edit btn btn-default' value='Edit'  />";
                                 echo "<input type='button'   class='btn-cancel btn btn-default' value='Cancel' style='display:none;' />";
                                 echo "<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>";
                                 echo "</div>";
                                 echo "</div>";
                                
                                 echo "</div>";
                                 echo "</div>";

                                 $i++;
                                
                            }

                        }
                        
                        ?>
                            <!----------------------------------------------------------------------------------------->

                        </table>
                        
                        
                        
                    </div>






                </div>
            </div>
        </div>
        <!-----Resume info--->


        <!------------------------------------------------------------------------------------------------------------------>
    </div>
</div>
</div>
<!-------------------modal------------------------>
<!-- Modal -->
<div id="emptyField_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <h3>PLEASE FILL EMPTY FIELDS !!!</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default " data-dismiss="modal">OK</button>
        
      </div>
    </div>

  </div>
</div>
<!--------------------------------------------------------------------------------------->

<?php
include 'footer3.php';
?>


<!--------------------delete post confirm box -------------->
<!-- Modal -->
<div id="confirmbox" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <h3>Are you sure you want to delete this post ?</h3>
      </div>
      <div class="modal-footer">
        
        <input id="btn_yes" onclick="" type="button" class="btn btn-default" value="YES" />
        <button type="button" class="btn btn-default " data-dismiss="modal">NO</button>
        
      </div>
    </div>

  </div>
</div>
<!----------------------------------->




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