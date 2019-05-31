<?php
include 'company-navbar3.php';
?>

<script src="Postjob.js"></script>
<!----------------------------MULTI SELECT PLUGIN --------------------------------------------->
<link rel="stylesheet" href="Plugin-multiselect/docsupport/prism.css">
<link rel="stylesheet" href="Plugin-multiselect/chosen.css">

<script>
    $(document).ready(function () {
    $(".chosen-select").chosen({max_selected_options: 5});
  });
</script>
<!----------------------------MULTI SELECT PLUGIN --------------------------------------------->


<div class="page-header" style="background: url(assets/img/banner1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="product-title">Post A Job</h2>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="ti-home"></i> Home</a></li>
                        <li class="current">Post A Job</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>


<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9 col-md-offset-2">

                <div class="page-ads box">
                    <form class="form-ad">

                        <div class="form-group">
                            <label id="error_jobtitle" class="control-label" for="textarea">Job Title</label><br>
        
                            <input id="textbox_jobtitle" type="text" class="form-control" placeholder="You job title">
                            
                        </div>



                        <div class="form-group">
                            <label id="error_joblocation" class="control-label" for="textarea">Location</label><br>
                            <input id="textbox_joblocation" type="text" class="form-control" placeholder="location">
                           
                        </div>

                        <div class="form-group">
                            <label id="error_category" class="control-label">Category</label>
                            <select id="select_category" class="form-control"   >
                                <option disabled selected>-- select one --</option>
                                <!-----------------get category from databse -------------->
                                <?php include 'connection.php'; 
                                  $sql="select * from category ";
                                  $result=mysqli_query($con,$sql);
                                  $nbrows=mysqli_num_rows($result);
                                  if($nbrows > 0){
                                      while($row=mysqli_fetch_array($result)){
                                          echo "<option value='".$row[0]."'>".$row[1]."</option>";
                                      }
                                
                                  }
                                  else{
                                      echo "<option>No data found </option>";
                                  }
                                 ?>
                                <!-----------------===================================-------------->


                            </select>
                        </div>
                        <div class="form-group">
                            <label id="error_jobtype" class="control-label">Job Type</label>
                            <select id="select_jobtype" class="form-control">
                                <option disabled selected>-- select one --</option>
                                <!-----------------get job type from databse -------------->
                                <?php include 'connection.php'; 
                                  $sql="select * from jobtype ";
                                  $result=mysqli_query($con,$sql);
                                  $nbrows=mysqli_num_rows($result);
                                  if($nbrows > 0){
                                      while($row=mysqli_fetch_array($result)){
                                          echo "<option value='".$row[0]."'>".$row[1]."</option>";
                                      }
                                
                                  }
                                  else{
                                      echo "<option>No data found </option>";
                                  }
                                 ?>

                                <!------------------------------------------------------------ -------------->
                            </select>
                            <br>
                            <div class="form-group">
                                <label  id="error_jobdescription" class="control-label" for="textarea">Job Description</label>
                                <textarea id="textbox_jobdescription" class="form-control" rows="3" ></textarea>
                                
                            </div>

                           

                                <div class="form-group">
                                <label id="error_skills" class="control-label">Skills</label>

                                    <select id="select_skill" data-placeholder="Type &apos;C&apos; to view" multiple
                                        class="chosen-select-no-results form-control" tabindex="11" >
                                        <option value=""></option>

                                        <!----------get skill form data base--------------------------->
                                        <?php
                                         include 'connection.php';
                                         $sql="select * from skills";
                                         $result=mysqli_query($con,$sql);
                                         $nbrows=mysqli_num_rows($result);
                                         if($nbrows > 0){
                  
                                         $i=0;
                                         while( $row=mysqli_fetch_array($result)){
                                         echo "<option id='option_".$i."' value='".$row[0]."' >".$row[1]."</option>";
                                         $i++;

                                         }
                 
                  
                                          }
                                          ?>

                                        <!------------------------------------------------------------------------------------>
                                    </select>



                                </div>

                                <br>
                                <br>








                           

                            <div class="form-group">
                                <div class="button-group">
                                    <div class="action-buttons">

                                        <input id="btn_submit" type="button" class="btn btn-common btn-sm" value="SUBMIT YOUR JOB" />


                                    </div>
                                </div>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

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
<script type="text/javascript" src="assets/js/summernote.js"></script>
<script>
    $(document).ready(function () {
        $('#summernote').summernote({
            height: 250, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });
    });
</script>


<!----------------------------MULTI SELECT PLUGIN --------------------------------------------->
<script src="docsupport/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="Plugin-multiselect/chosen.jquery.js" type="text/javascript"></script>
<script src="Plugin-multiselect/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
<script src="Plugin-multiselect/docsupport/init.js" type="text/javascript" charset="utf-8"></script>



<!----------------------------MULTI SELECT PLUGIN --------------------------------------------->
</body>

</html>