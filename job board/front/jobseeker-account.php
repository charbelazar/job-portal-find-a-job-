<?php
include 'jobseeker-navbar3.php';
?>


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
                        <h4>My Account</h4>
                        <ul class="lest item">
                            <li><a href="jobseeker-resume.php">My Resume</a></li>
                            <li><a href="jobseeker-editresume.php">Edit Resume</a></li>
                            <li><a href="jobseeker-changepassword.php">Change My Password</a></li>
                            <li><a href="index.php">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!----------------------------------------------------------------------------------------->
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="inner-box my-resume">
                    <div class="author-resume">
                        <div class="thumb">
                            <img src="assets/img/jobs/img-1.jpg" alt="">
                        </div>
                        <div class="author-info">
                          <?php
                              
                              include 'connection.php';
                              $userid=$_SESSION["user_id"];
                              $sql="select first_Name,last_name,address,field_of_study,phone_number from  user_account u, jobseeker_profile j ,  education_jobseeker e  where u.ID_user=$userid and j.ID_user=$userid and j.ID_jobseeker=e.ID_jobseeker";
                              $result=mysqli_query($con,$sql);
                              $nbrows=mysqli_num_rows($result);
                              if($nbrows > 0){
                                  while($row=mysqli_fetch_array($result)){
                                      $fname=$row[0];
                                      $lname=$row[1];
                                      $address=$row[2];
                                      $major=$row[3];
                                      $phone=$row[4];
    
                                  }
                                
                              }
                              else{
                                $fname="no data found";
                                $lname="no data found";
                                $address="no data found";
                                $major="no data found";
                                $phone="no data found";
                              }
                          ?>
                            <h3><?php echo $fname." ".$lname ;?></h3>
                            <p class="sub-title"><?php echo $major ;?></p>
                            <p><span class="address"><i class="ti-location-pin"></i><?php echo $address ;?></span> <span><i
                                        class="ti-phone"></i><?php echo $phone;?></span></p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-----Resume info--->


            <!------------------------------------------------------------------------------------------------------------------>
        </div>
    </div>
</div>


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