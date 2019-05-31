<?php
include 'company-navbar.php';
?>
<!----------------------------------------------------------------------------------------------->
<section class="section purchase" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="section-content text-center">
                <h1 class="title-text">
                <?php
                include 'connection.php';
                $userid=$_SESSION["user_id"];
                $sql="select company_name from company_profile where ID_user=$userid ";
                $result=mysqli_query($con,$sql);
                $nbrows=mysqli_num_rows($result);
                if($nbrows > 0){
                    $row=mysqli_fetch_array($result);
                    $companyname=$row[0];
                    
                    echo "Welcome Back ".$companyname."<br>";

                }
                else{
                    echo "error";
                }

                ?>

                </h1>
                <p> Hire a Freelancer in a second !!!</p>
                <a href="company-postjob.php" class="btn btn-common">Get Started Now</a>
            </div>
        </div>
    </div>
</section>

<!----------------------------------------------------------------------------------------------->

<?php
include 'footer3.php';
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
