<?php
include 'company-navbar4.php';
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
                            <li><a href="company-info.php">My Info</a></li>
                            <li><a href="company-editinfo.php">Edit my Info</a></li>
                            <li><a href="comapny-changepassword.php">Change My Password</a></li>
                            <li><a href="index.php">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!----------------------------------------------------------------------------------------->
                        <!-----Resume info--->
           
           
                
            
                        <?php
                              
                              include 'connection.php';
                              $userid=$_SESSION["user_id"];
                              $sql="select company_name,city,state,phone_number,address from user_account,company_profile where user_account.ID_user=$userid and user_account.ID_user=company_profile.ID_user ";
                              $result=mysqli_query($con,$sql);
                              $nbrows=mysqli_num_rows($result);
                              if($nbrows > 0){
                                  while($row=mysqli_fetch_array($result)){
                                      $company_name=$row[0];
                                      $city=$row[1];
                                      $state=$row[2];
                                      $phone=$row[3];
                                      $address=$row[4];
                                      
    
                                  }
                                
                              }
                              else{
                                $company_name="no data found";
                                $city="no data found";
                                $state="no data found";
                                $phone="no data found";
                                $address="no data found";
                              }
                          ?>

            <!-----Resume info--->
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="inner-box my-resume">
                <div class="author-resume">
                        <div class="thumb">
                            <img src="assets/img/resume/img-1.jpg" alt="">
                        </div>
                        <div class="author-info">
                        <h3><?php echo $company_name;?></h3>
                        <br><br><br>
                            
                            
                            <div class="social-link">
                                <a class="twitter" target="_blank" data-original-title="twitter" href="#" data-toggle="tooltip"
                                    data-placement="top"><i class="fa fa-twitter"></i></a>
                                <a class="facebook" target="_blank" data-original-title="facebook" href="#" data-toggle="tooltip"
                                    data-placement="top"><i class="fa fa-facebook"></i></a>
                                <a class="google" target="_blank" data-original-title="google-plus" href="#"
                                    data-toggle="tooltip" data-placement="top"><i class="fa fa-google"></i></a>
                                <a class="linkedin" target="_blank" data-original-title="linkedin" href="#" data-toggle="tooltip"
                                    data-placement="top"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="work-experence item">
                        <h3>Company Location </h3>
                        
                        
                        <p><?php echo $city.",".$state.",".$address;?></p>
                        
                       
                    </div>
                    <div class="education item">
                        <h3>Tel</h3>
                        <p><?php echo $phone;?></p>
                        
                        
                    </div>

                    
                </div>
            </div>

            <!------------------------------------------------------------------------------------------------------------------>
        </div>
    </div>
</div>


<?php
include 'footer3.php';
?>

<section class="footer-Content">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h3 class="block-title"><img src="assets/img/logo.png" class="img-responsive" alt="Footer Logo"></h3>
                    <div class="textwidget">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et
                            euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, consectetur eget
                            facilisis sed, auctor ut purus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h3 class="block-title">Quick Links</h3>
                    <ul class="menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">License</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h3 class="block-title">Trending Jobs</h3>
                    <ul class="menu">
                        <li><a href="#">Android Developer</a></li>
                        <li><a href="#">Senior Teamleader</a></li>
                        <li><a href="#">iOS Developer</a></li>
                        <li><a href="#">Junior Tester</a></li>
                        <li><a href="#">Full Stack Developer</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h3 class="block-title">Follow Us</h3>
                    <div class="bottom-social-icons social-icon">
                        <a class="twitter" href="https://twitter.com/GrayGrids"><i class="ti-twitter-alt"></i></a>
                        <a class="facebook" href="https://web.facebook.com/GrayGrids"><i class="ti-facebook"></i></a>
                        <a class="youtube" href="https://youtube.com"><i class="ti-youtube"></i></a>
                        <a class="dribble" href="https://dribbble.com/"><i class="ti-dribbble"></i></a>
                        <a class="linkedin" href="https://www.linkedin.com/"><i class="ti-linkedin"></i></a>
                    </div>
                    <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
                    <form class="subscribe-box">
                        <input type="text" placeholder="Your email">
                        <input type="submit" class="btn-system" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<div id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>All Rights reserved &copy; 2017 - Designed & Developed by <a rel="nofollow" href="http://graygrids.com">GrayGrids</a></p>
            </div>
        </div>
    </div>
</div>

</footer>


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