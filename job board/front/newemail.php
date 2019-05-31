<?php


$usertype=$_GET["usertype"];
if(isset($_GET["email"])){
    $email=$_GET["email"];
}
else{
    $email="";
}

if(isset($usertype)){
if($usertype==2){
    include 'jobseeker-navbar4.php';
    $userid=$_SESSION["user_id"];
}
else if ($usertype==3){
    include 'company-navbar5.php';
    $userid=$_SESSION["user_id"];
}
}
else{
   header('Location: index.php');
}

?>




<style>
    .table-wrapper-scroll-y {
display: block;
max-height: 200px;
overflow-y: auto;
-ms-overflow-style: -ms-autohiding-scrollbar;
}
</style>



<div class="page-header" style="background: url(assets/img/banner1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="product-title">Inbox</h2>
                    <ol class="breadcrumb">
                        <li><a href="jobseeker-index.php"><i class="ti-home"></i> Home</a></li>
                        <li class="current">Inbox</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------------------------------------------------------------------------------->

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="right-sideabr">
                <div class="inner-box">
                  <h4>My Email</h4>
                  <ul class="lest item">
                     <li><a href="newmail.php?<?php if($usertype==2){echo "usertype=2";}else{echo "usertype=3";}?>">New mail</a></li>
                     <li><a href="inbox.php?<?php if($usertype==2){echo "usertype=2";}else{echo "usertype=3";}?>">Inbox </a></li>
                     <li><a href="sentmsg.php?<?php if($usertype==2){echo "usertype=2";}else{echo "usertype=3";}?>">Sent </a></li>
                  </ul>

                  
               </div>
                </div>
            </div>

            <!-------------------------------------------------------------------------------->
            <div class="col-md-8 col-sm-8 col-xs-8">
                <div class="inner-box my-resume">
                <p hidden id="usertypeid"><?php echo $usertype ; ?> </p>
                <p hidden id="userid"><?php echo $userid ; ?> </p>

                    
                        <div class="row">
                            <div class="col-md-12">

                                <div class="row">
                                <div class="col-md-3">
                                        <div class="form-group">
                                            
                                            <h3 class="form-control" style="border:0px;">Send Message To :</br></h3>
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-9">
                                        <div class="form-group">
                                            
                                            <input type="text" id="idr" class="form-control" id="email" placeholder="mail@sitename.com"
                                                required data-error="Please enter your email" value="<?php echo $email; ?>">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" id="message" placeholder="Enter your message" rows="11"
                                                data-error="Write your message" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <input type="button" id="send" name="send" onclick='s()' class="btn btn-common" value="send message">
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    


                </div>
            </div>
        </div>
        <!--Div row -->
        <!---------------------------------------------------------------------------------------->





        <!--</div>-->

    </div>


    <?php
include 'footer.php';
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
    <script type="text/javascript">
    function s()
    {
        var idr = document.getElementById("idr").value ;
        var ids =  document.getElementById("userid").innerHTML ; 
        var msg =  document.getElementById("message").value ;
        var usertype = document.getElementById("usertypeid").innerHTML ;
        window.location.href = "sendmsgs.php?idr="+idr+"&ids="+ids+"&msg="+msg+"&usertype="+usertype ; 
         

        
    }
    </script> 