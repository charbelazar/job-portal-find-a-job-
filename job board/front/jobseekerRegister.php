<?php 
include 'navbar.php';
?>

<!--calling addskil javascript/jquery function-->
<script src="addskill.js"></script>



<script src="registration2.js"></script>
<script src="emailvalidation.js"></script>

<!----------------------------input filter PLUGIN --------------------------------------------->
<script src="plugin-inputFilter/function.js"></script>
<!------------------------------------------------------------------------------------------------..>
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
      <div class="col-md-9 col-md-offset-2">
        <div class="page-ads box">
          <div class="post-header">
            <p>Already have an account? <a href="login.php">Click here to login</a></p>
          </div>

          <!------------------------------------------------------------------------------------------------------------------->

          <form class="form-ad">
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
              <h3>Personal information</h3>
            </div>
            <div class="form-group">
              <label id="error_firstname" class="control-label" for="textarea">First Name</label>
              <input id="textbox_firstname" type="text" class="form-control" placeholder="First name" >
              
            </div>
            <div class="form-group">
              <label id="error_lastname"  class="control-label" for="textarea">Last Name</label>
              <input id="textbox_lastname" type="text" class="form-control" placeholder="Last name" >
             
            </div>


            <div class="form-group">
              <label   id="error_address" class="control-label" for="textarea">Address</label>
              <input id="textbox_address" type="text" class="form-control" placeholder="Address" >
              
            </div>

            <div class="form-group">
              <label id="error_select_nationality" class="control-label" for="textarea">Nationality</label>
              <select id="select_nationality" class="form-control">
                <option disabled selected>--Select One--</option>

                <option value="afghan">Afghan</option>
                <option value="albanian">Albanian</option>
                <option value="algerian">Algerian</option>
                <option value="american">American</option>
                <option value="andorran">Andorran</option>
                <option value="angolan">Angolan</option>
                <option value="antiguans">Antiguans</option>
                <option value="argentinean">Argentinean</option>
                <option value="armenian">Armenian</option>
                <option value="australian">Australian</option>
                <option value="austrian">Austrian</option>
                <option value="azerbaijani">Azerbaijani</option>
                <option value="bahamian">Bahamian</option>
                <option value="bahraini">Bahraini</option>
                <option value="bangladeshi">Bangladeshi</option>
                <option value="barbadian">Barbadian</option>
                <option value="barbudans">Barbudans</option>
                <option value="batswana">Batswana</option>
                <option value="belarusian">Belarusian</option>
                <option value="belgian">Belgian</option>
                <option value="belizean">Belizean</option>
                <option value="beninese">Beninese</option>
                <option value="bhutanese">Bhutanese</option>
                <option value="bolivian">Bolivian</option>
                <option value="bosnian">Bosnian</option>
                <option value="brazilian">Brazilian</option>
                <option value="british">British</option>
                <option value="bruneian">Bruneian</option>
                <option value="bulgarian">Bulgarian</option>
                <option value="burkinabe">Burkinabe</option>
                <option value="burmese">Burmese</option>
                <option value="burundian">Burundian</option>
                <option value="cambodian">Cambodian</option>
                <option value="cameroonian">Cameroonian</option>
                <option value="canadian">Canadian</option>
                <option value="cape verdean">Cape Verdean</option>
                <option value="central african">Central African</option>
                <option value="chadian">Chadian</option>
                <option value="chilean">Chilean</option>
                <option value="chinese">Chinese</option>
                <option value="colombian">Colombian</option>
                <option value="comoran">Comoran</option>
                <option value="congolese">Congolese</option>
                <option value="costa rican">Costa Rican</option>
                <option value="croatian">Croatian</option>
                <option value="cuban">Cuban</option>
                <option value="cypriot">Cypriot</option>
                <option value="czech">Czech</option>
                <option value="danish">Danish</option>
                <option value="djibouti">Djibouti</option>
                <option value="dominican">Dominican</option>
                <option value="dutch">Dutch</option>
                <option value="east timorese">East Timorese</option>
                <option value="ecuadorean">Ecuadorean</option>
                <option value="egyptian">Egyptian</option>
                <option value="emirian">Emirian</option>
                <option value="equatorial guinean">Equatorial Guinean</option>
                <option value="eritrean">Eritrean</option>
                <option value="estonian">Estonian</option>
                <option value="ethiopian">Ethiopian</option>
                <option value="fijian">Fijian</option>
                <option value="filipino">Filipino</option>
                <option value="finnish">Finnish</option>
                <option value="french">French</option>
                <option value="gabonese">Gabonese</option>
                <option value="gambian">Gambian</option>
                <option value="georgian">Georgian</option>
                <option value="german">German</option>
                <option value="ghanaian">Ghanaian</option>
                <option value="greek">Greek</option>
                <option value="grenadian">Grenadian</option>
                <option value="guatemalan">Guatemalan</option>
                <option value="guinea-bissauan">Guinea-Bissauan</option>
                <option value="guinean">Guinean</option>
                <option value="guyanese">Guyanese</option>
                <option value="haitian">Haitian</option>
                <option value="herzegovinian">Herzegovinian</option>
                <option value="honduran">Honduran</option>
                <option value="hungarian">Hungarian</option>
                <option value="icelander">Icelander</option>
                <option value="indian">Indian</option>
                <option value="indonesian">Indonesian</option>
                <option value="iranian">Iranian</option>
                <option value="iraqi">Iraqi</option>
                <option value="irish">Irish</option>
                <option value="israeli">Israeli</option>
                <option value="italian">Italian</option>
                <option value="ivorian">Ivorian</option>
                <option value="jamaican">Jamaican</option>
                <option value="japanese">Japanese</option>
                <option value="jordanian">Jordanian</option>
                <option value="kazakhstani">Kazakhstani</option>
                <option value="kenyan">Kenyan</option>
                <option value="kittian and nevisian">Kittian and Nevisian</option>
                <option value="kuwaiti">Kuwaiti</option>
                <option value="kyrgyz">Kyrgyz</option>
                <option value="laotian">Laotian</option>
                <option value="latvian">Latvian</option>
                <option value="lebanese">Lebanese</option>
                <option value="liberian">Liberian</option>
                <option value="libyan">Libyan</option>
                <option value="liechtensteiner">Liechtensteiner</option>
                <option value="lithuanian">Lithuanian</option>
                <option value="luxembourger">Luxembourger</option>
                <option value="macedonian">Macedonian</option>
                <option value="malagasy">Malagasy</option>
                <option value="malawian">Malawian</option>
                <option value="malaysian">Malaysian</option>
                <option value="maldivan">Maldivan</option>
                <option value="malian">Malian</option>
                <option value="maltese">Maltese</option>
                <option value="marshallese">Marshallese</option>
                <option value="mauritanian">Mauritanian</option>
                <option value="mauritian">Mauritian</option>
                <option value="mexican">Mexican</option>
                <option value="micronesian">Micronesian</option>
                <option value="moldovan">Moldovan</option>
                <option value="monacan">Monacan</option>
                <option value="mongolian">Mongolian</option>
                <option value="moroccan">Moroccan</option>
                <option value="mosotho">Mosotho</option>
                <option value="motswana">Motswana</option>
                <option value="mozambican">Mozambican</option>
                <option value="namibian">Namibian</option>
                <option value="nauruan">Nauruan</option>
                <option value="nepalese">Nepalese</option>
                <option value="new zealander">New Zealander</option>
                <option value="ni-vanuatu">Ni-Vanuatu</option>
                <option value="nicaraguan">Nicaraguan</option>
                <option value="nigerien">Nigerien</option>
                <option value="north korean">North Korean</option>
                <option value="northern irish">Northern Irish</option>
                <option value="norwegian">Norwegian</option>
                <option value="omani">Omani</option>
                <option value="pakistani">Pakistani</option>
                <option value="palauan">Palauan</option>
                <option value="panamanian">Panamanian</option>
                <option value="papua new guinean">Papua New Guinean</option>
                <option value="paraguayan">Paraguayan</option>
                <option value="peruvian">Peruvian</option>
                <option value="polish">Polish</option>
                <option value="portuguese">Portuguese</option>
                <option value="qatari">Qatari</option>
                <option value="romanian">Romanian</option>
                <option value="russian">Russian</option>
                <option value="rwandan">Rwandan</option>
                <option value="saint lucian">Saint Lucian</option>
                <option value="salvadoran">Salvadoran</option>
                <option value="samoan">Samoan</option>
                <option value="san marinese">San Marinese</option>
                <option value="sao tomean">Sao Tomean</option>
                <option value="saudi">Saudi</option>
                <option value="scottish">Scottish</option>
                <option value="senegalese">Senegalese</option>
                <option value="serbian">Serbian</option>
                <option value="seychellois">Seychellois</option>
                <option value="sierra leonean">Sierra Leonean</option>
                <option value="singaporean">Singaporean</option>
                <option value="slovakian">Slovakian</option>
                <option value="slovenian">Slovenian</option>
                <option value="solomon islander">Solomon Islander</option>
                <option value="somali">Somali</option>
                <option value="south african">South African</option>
                <option value="south korean">South Korean</option>
                <option value="spanish">Spanish</option>
                <option value="sri lankan">Sri Lankan</option>
                <option value="sudanese">Sudanese</option>
                <option value="surinamer">Surinamer</option>
                <option value="swazi">Swazi</option>
                <option value="swedish">Swedish</option>
                <option value="swiss">Swiss</option>
                <option value="syrian">Syrian</option>
                <option value="taiwanese">Taiwanese</option>
                <option value="tajik">Tajik</option>
                <option value="tanzanian">Tanzanian</option>
                <option value="thai">Thai</option>
                <option value="togolese">Togolese</option>
                <option value="tongan">Tongan</option>
                <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                <option value="tunisian">Tunisian</option>
                <option value="turkish">Turkish</option>
                <option value="tuvaluan">Tuvaluan</option>
                <option value="ugandan">Ugandan</option>
                <option value="ukrainian">Ukrainian</option>
                <option value="uruguayan">Uruguayan</option>
                <option value="uzbekistani">Uzbekistani</option>
                <option value="venezuelan">Venezuelan</option>
                <option value="vietnamese">Vietnamese</option>
                <option value="welsh">Welsh</option>
                <option value="yemenite">Yemenite</option>
                <option value="zambian">Zambian</option>
                <option value="zimbabwean">Zimbabwean</option>
              </select>
              </select>
            </div>

            <div class="form-group">
              <label  id="error_prehour" class="control-label" for="textarea">Pre Hour</label>
              <input id="textbox_prehour" type="text"   class="form-control" placeholder="Salary,eg.85" >
              
            </div>


            <div class="form-group">
              <label id="error_workingexp" class="control-label" for="textarea">Working Experience</label>
              <textarea id="textbox_workingexp" class="form-control" rows="3" ></textarea>
             
            </div>

            <!------------------------------------------------------------------------------------------------------------------->

            <div class="divider">
              <h3>Education</h3>
            </div>
            <div class="form-group">
              <label  id="error_degree" class="control-label" for="textarea">Degree</label>
              <input id="textbox_degree" type="text" class="form-control" placeholder="Degree, e.g. Bachelor">
              
            </div>
            <div class="form-group">
              <label  id="error_fieldofstudy" class="control-label" for="textarea">Field of Study</label>
              <input id="textbox_fieldofstudy" type="text" class="form-control" placeholder="Major, e.g Computer Science"
               >
              
            </div>
            <div class="form-group">
              <label id="error_school"  class="control-label" for="textarea">School</label>
              <input id="textbox_school" type="text" class="form-control" placeholder="School name, e.g. Massachusetts Institute of Technology"
                >
              
            </div>

            <!------------------------------------------------------------------------------------------------------------------->
            

         




                              <div class="form-group">
                                <label id="error_skills" class="control-label">Choose Your Skills</label><br>
                                    
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
              
             

                &nbsp&nbsp&nbsp&nbsp<input id="btn_register" type="button" class="btn btn-common" Value="REGISTER" />





              




            









          </form>

          <!------------------------------------------------------------------------------------------------------------------->


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

<!------------------------------------------------------------------------------------------------------------------->

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