<?php
include 'connection.php';
include 'navbar.php';
?>

<script  src="registration.js"></script>
<script  src="emailvalidation.js"></script>


<!----------------------------input filter PLUGIN --------------------------------------------->
<script src="plugin-inputFilter/function.js"></script>
<!------------------------------------------------------------------------------------------------>





<div class="page-header" style="background: url(assets/img/banner1.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="breadcrumb-wrapper">
          <h2 class="product-title">REGISTER</h2>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="ti-home"></i> Home</a></li>
            <li class="current">Register</li>
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
        <fieldset>
          <label>Have an account?</label>
          <div class="field account-sign-in">
            <p>
              <a class="btn btn-common btn-sm" href="login.php"><i class="ti-key"></i> Sign in</a>
            </p>

          </div>
        </fieldset>
        <div class="page-ads box">
          <form class="form-ad" >


            <!------------------------------------------------------------------------------------------------------------------->


            <div class="divider">
              <h3>Account information</h3>
            </div>
            
            <div class="form-group">
              <label id="error_email" class="control-label" for="textarea">Email</label><br>
              <input id="textbox_email" type="text" class="form-control" placeholder="Your@domain.com">
              
              </label>
            </div>
            <div class="form-group">
              <label class="control-label" for="textarea"></label>
              <label id="error_password" class="control-label" for="textarea">Password</label>
              <input id="textbox_password" type="password" class="form-control" placeholder="Password" >
             
            </div>

            <div class="form-group">
              <label id="error_select_gender" class="control-label" for="textarea">Gender</label>
              <select id="select_gender" class="form-control">
                <option>Male</option>
                <option>Female</option>
              </select>
            </div>

            <div class="form-group">
              <div class="form-group">
                <label  id="error_select_day" class="control-label" for="textarea">Date of Birth</label>
              </div>
              <div class="row">

                <select id="select_day" class="form-control" style="width:252px; display: inline-block; margin-left:20px; ">
                  <option disabled selected>Day</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value='3'>3</option>
                  <option value='4'>4</option>
                  <option value='5'>5</option>
                  <option value='6'>6</option>
                  <option value='7'>7</option>
                  <option value='8'>8</option>
                  <option value='9'>9</option>
                  <option value='10'>10</option>
                  <option value='11'>11</option>
                  <option value='12'>12</option>
                  <option value='13'>13</option>
                  <option value='14'>14</option>
                  <option value='15'>15</option>
                  <option value='16'>16</option>
                  <option value='17'>17</option>
                  <option value='18'>18</option>
                  <option value='19'>19</option>
                  <option value='20'>20</option>
                  <option value='21'>21</option>
                  <option value='22'>22</option>
                  <option value='23'>23</option>
                  <option value='24'>24</option>
                  <option value='25'>25</option>
                  <option value='26'>26</option>
                  <option value='27'>27</option>
                  <option value='28'>28</option>
                  <option value='29'>29</option>
                  <option value='30'>30</option>
                  <option value='31'>31</option>
                </select>

                <select id="select_month" class="form-control" style="width:252px; display: inline-block; margin-left:22px;">
                  <option disabled selected>Month</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value='3'>3</option>
                  <option value='4'>4</option>
                  <option value='5'>5</option>
                  <option value='6'>6</option>
                  <option value='7'>7</option>
                  <option value='8'>8</option>
                  <option value='9'>9</option>
                  <option value='10'>10</option>
                  <option value='11'>11</option>
                  <option value='12'>12</option>
                </select>

                <select id="select_year" class="form-control" style="width:252px; margin-left:22px; display: inline-block;">
                  <option disabled selected>Year</option>
                  <option value='1947'>1947</option>
                  <option value='1948'>1948</option>
                  <option value='1949'>1949</option>
                  <option value='1950'>1950</option>
                  <option value='1951'>1951</option>
                  <option value='1952'>1952</option>
                  <option value='1953'>1953</option>
                  <option value='1954'>1954</option>
                  <option value='1955'>1955</option>
                  <option value='1956'>1956</option>
                  <option value='1957'>1957</option>
                  <option value='1958'>1958</option>
                  <option value='1959'>1959</option>
                  <option value='1960'>1960</option>
                  <option value='1961'>1961</option>
                  <option value='1962'>1962</option>
                  <option value='1963'>1963</option>
                  <option value='1964'>1964</option>
                  <option value='1965'>1965</option>
                  <option value='1966'>1966</option>
                  <option value='1967'>1967</option>
                  <option value='1968'>1968</option>
                  <option value='1969'>1969</option>
                  <option value='1970'>1970</option>
                  <option value='1971'>1971</option>
                  <option value='1972'>1972</option>
                  <option value='1973'>1973</option>
                  <option value='1974'>1974</option>
                  <option value='1975'>1975</option>
                  <option value='1976'>1976</option>
                  <option value='1977'>1977</option>
                  <option value='1978'>1978</option>
                  <option value='1979'>1979</option>
                  <option value='1980'>1980</option>
                  <option value='1981'>1981</option>
                  <option value='1982'>1982</option>
                  <option value='1983'>1983</option>
                  <option value='1984'>1984</option>
                  <option value='1985'>1985</option>
                  <option value='1986'>1986</option>
                  <option value='1987'>1987</option>
                  <option value='1988'>1988</option>
                  <option value='1989'>1989</option>
                  <option value='1990'>1990</option>
                  <option value='1991'>1991</option>
                  <option value='1992'>1992</option>
                  <option value='1993'>1993</option>
                  <option value="1994">1994</option>
                  <option value="1995">1995</option>
                  <option value="1996">1996</option>
                  <option value="1997">1997</option>
                  <option value="1998">1998</option>
                  <option value="1999">1999</option>
                  <option value="2000">2000</option>
                  <option value="2001">2001</option>
                </select>

              </div>
            </div>

            <div class="form-group">
              <label  id="error_phone" class="control-label" for="textarea">Mobile Phone</label>
              <input id="textbox_phone" type="text" class="form-control" placeholder="01234567" >
             
            </div>





            <!------------------------------------------------------------------------------------------------------------------->



            <div class="divider">
              <h3>Company Details</h3>
            </div>
            <div class="form-group">
              <label  id="error_companyname" class="control-label">Company Name</label>
              <input id="textbox_companyname" type="text" class="form-control" placeholder="Enter the name of the company" >
              
            </div>
            <div class="form-group">
              <label id="error_address" class="control-label">Address</label>
              <input id="textbox_address" type="text" class="form-control" placeholder="Building,second floor" >
              
            </div>
            <div class="form-group">
              <label  id="error_city" class="control-label">City</label>
              <input id="textbox_city" type="text" class="form-control" placeholder="Beirut" >
              
            </div>
            <div class="form-group">
              <label  id="error_state" class="control-label">State</label>
              <input id="textbox_state" type="text" class="form-control" placeholder="Mount-Lebanon" >
              
            </div>

            


            <div class="form-group">
              <label id="error_website" class="control-label">Website</label>
              <input id="textbox_website" type="text" class="form-control" placeholder="www.example.com" >
              
            </div>



            <input id="btn_register" type="button" class="btn btn-common" value="REGISTER" />
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
<!------------------------------------------------------------------------------------------------------------------->


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

 
</body>

</html>