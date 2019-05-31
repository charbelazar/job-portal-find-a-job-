<?php
include 'jobseeker-navbar2.php';
?>

<!----------------------------MULTI SELECT PLUGIN --------------------------------------------->
<link rel="stylesheet" href="Plugin-multiselect/docsupport/prism.css">
<link rel="stylesheet" href="Plugin-multiselect/chosen.css">


<!----------------------------MULTI SELECT PLUGIN --------------------------------------------->
<!-------------------------------- ajax for autocomplete job search -------------------->
<script src="job_list.js"></script>
<script src="job_search.js"></script>
<!-------------------------------------------------------------------------------------->
<!-------------------scroll table css------------------------------------------------------->
<style>
  .table-wrapper-scroll-y {
display: block;
max-height: 2000px;
overflow-y: auto;
-ms-overflow-style: -ms-autohiding-scrollbar;}
</style>
<!--------------------------------------------------------------------------------------------->




<!-------------------------------------------------------------------------->

<div class="page-header" style="background: url(assets/img/banner1.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="breadcrumb-wrapper">
          <h2 class="product-title">Browse Job</h2>
          <ol class="breadcrumb">
            <li><a href="jobseeker-index.php"><i class="ti-home"></i> Home</a></li>
            <li class="current">Browse job</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>

<!------------------------------------------------------------------------------>


<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="right-sideabr">
          <div class="widget widget-search">
            <h5 class="widget-title">Search For a Job</h5>
            <form action="#">
              <input id="job_search" list="jobs_list" class="form-control search" placeholder="Enter your keyword">
              <datalist id="jobs_list">

              </datalist>
              <button id="btn_search" class="search-btn" type="button"><i class="fa fa-search"></i></button>
            </form>

          </div>

          <div class="inner-box">
            <h5 class="widget-title">Filter By :</h5>


            <h4>DATE :</h4>
            <ul class="lest item">
              <select id="select_date" class=" chosen-select  " tabindex="2">
                <option selected>-- select one --</option>

                <option>Newest</option>
                <option>Oldest</option>
              </select>
            </ul>
            <h4>TYPE :</h4>
            <ul class="lest item">
              <select id="select_type" class=" chosen-select  " tabindex="2">

                <option selected>-- select one --</option>

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
            </ul>
            <h4>CATEGORY :</h4>
            <ul class="lest item">
              <select id="select_category" data-placeholder="Choose a category..." class="chosen-select " tabindex="2">
                <option selected>-- select one --</option>


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
            </ul>
            <h4>LOCATION :</h4>
            <ul class="lest item">
               <input id="textbox_joblocation" type="text" class="form-control" placeholder="location">
            </ul>
          <!--  <h4>SKILLS :</h4>
            <ul class="lest item">
              <select id="select_skill" data-placeholder="choose skills" multiple="" class="chosen-select-no-results form-control"
                tabindex="11">
                <option value=""></option>

                --------get skill form data base---------------------------
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

                -----------------------------------------------------------------------------------
              </select>
            </ul>
            --->


          </div>
        </div>
      </div>
      <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="job-alerts-item candidates">
          <div class="table-wrapper-scroll-y">
            <table id="jobs_table" class="table">
            <h3 id="job_nb" class="alerts-title">JOBS :</h3>
              <tr>
                <td>&nbsp</td>
              </tr>

            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<!------------------------------------------------------------------------------>

<?php
include 'footer2.php';
?>

<!-------------------------------------------------------------------------->

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


<!----------------------------MULTI SELECT PLUGIN --------------------------------------------->
<script src="docsupport/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="Plugin-multiselect/chosen.jquery.js" type="text/javascript"></script>
<script src="Plugin-multiselect/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
<script src="Plugin-multiselect/docsupport/init.js" type="text/javascript" charset="utf-8"></script>



<!----------------------------MULTI SELECT PLUGIN --------------------------------------------->
</body>

</html>