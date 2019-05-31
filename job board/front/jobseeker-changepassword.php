<?php
include 'jobseeker-navbar3.php';
?>
<!----------------------change password js ------------->
<script src=Change-password.js ></script>
<!------------------------------------------------------>

<div class="page-header" style="background: url(assets/img/banner1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">Change my password</h2>
<ol class="breadcrumb">
<li><a href="jobseeker-index.php"><i class="ti-home"></i> Home</a></li>
<li class="current">Change my password</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<div id="content">
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="right-sideabr">
<div class="inner-box">
<h4> My Account</h4>
<ul class="lest item">
<li><a href="jobseeker-resume.php">My Resume</a></li>
<li><a href="jobseeker-editresume.php">Edit Resume</a></li>
<li><a href="jobseeker-changepassword.php">Change My Password</a></li>
<li><a href="index.php">Log Out</a></li>
</ul>
</div>
</div>
</div>

<!------------------------------------------------------------------------------->
<div class="col-md-8 col-sm-8 col-xs-12">
<div class="job-alerts-item">
<h3 class="alerts-title">Change Password</h3>
<form class="form">
<div class="form-group">
<label id="error_Opassword" class="control-label" for="textarea">Old Password*</label>
 <input id="textbox_Opassword" class="form-control" type="password">
<span class="material-input"></span>
</div>
<div class="form-group">
<label  id="error_Npassword" class="control-label" for="textarea">New Password*</label>
<input id="textbox_Npassword" class="form-control" type="password">
<span class="material-input"></span>
</div>
<input type="button" id="btn_submit" class="btn btn-common" value="Save Changes" />
</form>
</div>
</div>

<!---------------------------------------------------------------------------------------->





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