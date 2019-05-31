<?php
$usertype=$_GET["usertype"];
if(isset($usertype)){
if($usertype==2){
    include 'jobseeker-navbar4.php';
    $userid=$_SESSION["user_id"];
    include "connection.php" ; 
}
else if ($usertype==3){
    include 'company-navbar5.php';
    $userid=$_SESSION["user_id"];
    include "connection.php" ; 
}
}
else{
   header('Location: index.php');
}
?>

<style>
   .table-wrapper-scroll-y {
display: block;
max-height: 600px;
overflow-y: auto;
-ms-overflow-style: -ms-autohiding-scrollbar;
}
</style>

<script>
$(document).ready(function(){
    $("#viewmsg").click(function(){
       alert("ok");
        var id=$(this).data('userid');
        if(id !='')
         {
             $.ajax({
                 url:"viewmsg.php",
                 method:"POST",
                 data:{id:id},
                 success:function(data)
                 {
                     $('#innerbox').fadeIn();
                     $('#innerbox').html(data);
                 }

             });
         }
    });
});

</script>


<div class="page-header" style="background: url(assets/img/banner1.jpg);">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="breadcrumb-wrapper">
               <h2 class="product-title">Sent</h2>
               <ol class="breadcrumb">
                  <li><a href="jobseeker-index.php"><i class="ti-home"></i> Home</a></li>
                  <li class="current">Sent</li>
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
            <p hidden id="userid"><?php echo $userid ; ?> </p>
            <p hidden id="usertypeid"><?php echo $usertype ; ?> </p>
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
            <div id="innerbox" class="inner-box my-resume">

               <h3 class="alerts-title">Sent Message</h3>
               _________________________________________________________________________________________________________

               <div class="table-wrapper-scroll-y">
              <?php
              $selectmsg = "select distinct m.timestamp, v.email, m.message FROM  messages m, user_account v WHERE v.ID_user = m.receiver_ID and m.sender_ID=$userid  order by m.timestamp DESC"   ;
              $result = mysqli_query($con, $selectmsg) ; 
              $numrow = mysqli_num_rows($result);
              echo "<table class='table table-striped'>" ;
              //echo "<tr> <td style='width:100px; height:40px;'>time</td><td style='width:350px;'>sent to</td><td style='width:350px;'>message</td></tr>" ;
              echo "<tr><td><input type='button' class='btn btn-xs btn-gray' style=' background-color:red;' value='Date' /></td><td><input type='button' class='btn btn-xs btn-gray' style=' background-color:red;' value='From' /></td><td><input type='button' class='btn btn-xs btn-gray' style=' background-color:red;' value='Message' /></td></tr>" ; 

              while ( $row = mysqli_fetch_array($result) ) {
                 echo "<tr>
                 <td style='width:100px; height:40px;'>$row[0]</td><td style='width:350px;'>$row[1]</td><td style='width:350px;'>$row[2]</td></tr>" ; 
              }
              echo "</table>" ;
              ?>
               </div>
               <?php
                if ($numrow == 0 ) 
                {
                 echo "<div hidden><input type='button'  id='emptyinbox' name='emptysentbox' onclick='emptysentbox()' class='btn btn-common' value='Delete all messages' hidden></div>" ;
                 
                }
              else {
               echo  "<input type='button'  id='emptyinbx' name='emptyinbx' onclick='emptysentbox()' class='btn btn-common' value='Delete all messages'>" ;

                
              }
               ?>
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

function emptysentbox()
 {
     var usertype = document.getElementById("usertypeid").innerHTML ;
     var ids =  document.getElementById("userid").innerHTML ; 
     window.location.href = "emptysentbox.php?ids="+ids+"&usertype="+usertype ; 
    
     
 }
 </script>