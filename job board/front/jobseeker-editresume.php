<?php
include 'jobseeker-navbar3.php';
?>

<!----------------------------input filter PLUGIN --------------------------------------------->
<script src="plugin-inputFilter/function.js"></script>
<!------------------------------------------------------------------------------------------------>

<!----------------------------MULTI SELECT PLUGIN --------------------------------------------->
<link rel="stylesheet" href="Plugin-multiselect/docsupport/prism.css">
<link rel="stylesheet" href="Plugin-multiselect/chosen.css">

<script>
    $(document).ready(function () {
    $(".chosen-select").chosen({max_selected_options: 5});
  });
</script>
<!----------------------------MULTI SELECT PLUGIN --------------------------------------------->



<!-----------------update resume js------------->
<script src="Resume_update.js "></script>
<!------------------------------------>

<div class="page-header" style="background: url(assets/img/banner1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="product-title">Edit Resume</h2>
                    <ol class="breadcrumb">
                        <li><a href="jobseeker-index.php"><i class="ti-home"></i> Home</a></li>
                        <li class="current">Edit Resumes</li>
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
                        <h4>My Account</h4>
                        <ul class="lest item">
                            <li><a href="jobseeker-resume.php">My Resume</a></li>
                            <li><a href="jobseeker-editresume.php">Edit Resume</a></li>
                            <li><a href="jobseeker-changepassword.php">Change My Password</a></li>
                            <li><a href="index.php">Log Out</a></li>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="inner-box my-resume">

                    <form class="form-ad">


                        <!------------------------------------------------------------------------------------------------------------------->

                        <?php
                        include 'connection.php';
                        $userid = $_SESSION["user_id"];
                        $sql = "select first_Name,last_Name,address,nationality,salary,experience,degree,field_of_study,university,phone_number from jobseeker_profile j,education_jobseeker e,user_account where user_account.ID_user=$userid and j.ID_user=user_account.ID_user and j.ID_jobseeker=e.ID_jobseeker   ";
                        $result = mysqli_query($con, $sql);
                        $nbrows = mysqli_num_rows($result);
                        if ($nbrows > 0) {
                            $row = mysqli_fetch_array($result);
                            $fname = $row[0];
                            $lname = $row[1];
                            $address = $row[2];
                            $nationality = $row[3];
                            $salary = $row[4];
                            $experience = $row[5];
                            $degree = $row[6];
                            $field_of_study = $row[7];
                            $university = $row[8];
                            $tel=$row[9];

                        } else {
                            $fname = "no data found";
                            $lname = "no data found";
                            $address = "no data found";
                            $nationality = "no data found";
                            $salary = "no data found";
                            $experience = "no data found";
                            $degree = "no data found";
                            $field_of_study = "no data found";
                            $university = "no data found";
                            $tel="no data found";
                        }
                        ?>
                        <div class="divider">
                            <h3>Personal information</h3>
                        </div>
                        <div class="form-group">
                            <label id="error_firstname" class="control-label" for="textarea" >First Name</label>
                            <input id="textbox_firstname" type="text" class="form-control" placeholder="First name" value="<?php echo $fname;?>">

                        </div>
                        <div class="form-group">
                            <label id="error_lastname" class="control-label" for="textarea" >Last Name</label>
                            <input id="textbox_lastname" type="text" class="form-control" placeholder="Last name" value="<?php echo $lname;?>">

                        </div>


                        <div class="form-group">
                            <label id="error_address" class="control-label" for="textarea" >Address</label>
                            <input id="textbox_address" type="text" class="form-control" placeholder="Address" value="<?php echo $address;?>">

                        </div>

                        <div class="form-group">
                       
                            <label id="error_select_nationality" class="control-label" for="textarea">Nationality</label>
                            <select id="select_nationality" class="form-control">
                                <option selected><?php echo $nationality; ?></option>

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
                            <label id="error_prehour" class="control-label" for="textarea" >Pre Hour</label>
                            <input id="textbox_prehour" type="text" class="form-control" placeholder="Salary,eg.85" value="<?php echo $salary;?>">

                        </div>


                        <div class="form-group">
                            <label id="error_workingexp" class="control-label" for="textarea" >Working Experience</label>
                            <textarea id="textbox_workingexp" class="form-control" rows="3" ><?php echo $experience;?></textarea>

                        </div>

                        <div class="form-group">
                            <label  id="error_phone" class="control-label" for="textarea">Mobile Phone</label>
                            <input id="textbox_phone" type="text" class="form-control" placeholder="01234567" value="<?php echo $tel;?>" min="0" >
             
                        </div>

                        <!------------------------------------------------------------------------------------------------------------------->

                        <div class="divider">
                            <h3>Education</h3>
                        </div>
                        <div class="form-group">
                            <label id="error_degree" class="control-label" for="textarea">Degree</label>
                            <input id="textbox_degree" type="text" class="form-control" placeholder="Degree, e.g. Bachelor"  value="<?php echo $degree;?>">

                        </div>
                        <div class="form-group">
                            <label id="error_fieldofstudy" class="control-label" for="textarea" >Field of Study</label>
                            <input id="textbox_fieldofstudy" type="text" class="form-control" placeholder="Major, e.g Computer Science" value="<?php echo $field_of_study;?>">

                        </div>
                        <div class="form-group">
                            <label id="error_school" class="control-label" for="textarea" >School</label>
                            <input id="textbox_school" type="text" class="form-control" placeholder="School name, e.g. Massachusetts Institute of Technology" value="<?php echo $university;?>">

                        </div>
                        <!------------------------------------------------------------------------------------------------------------------->
                        <div class="divider">
                            <h3>Skills</h3>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">

                                    <?php
                    $sql="select skill from skills s,skills_jobseeker sj,jobseeker_profile j where j.ID_user=$userid and  j.ID_jobseeker=sj.ID_jobseeker and sj.ID_skill=s.ID_skills ";
                    $result=mysqli_query($con,$sql);
                    $nbrows=mysqli_num_rows($result);
                    if($nbrows > 0){
                    $skills="";
                
                    while($row=mysqli_fetch_array($result)){
                        
                        $skills =$skills.$row[0].", ";
                    }
                    
                    
                    }
                    else{
                        $skills="no skills found";

                    }

                    ?>


                                    <select id="select_skill" name="select_skill" data-placeholder="<?php  echo $skills;?>"
                                        multiple class="chosen-select-no-results" tabindex="11" style="width:675px; ">
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






                            </div>




                        </div>

                        <input id="btn_save" type="button" class="btn
                                    btn-common"
                            Value="SAVE" />
                    </form>





                </div>
            </div>




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

<!----------------------------MULTI SELECT PLUGIN --------------------------------------------->
<script src="docsupport/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="Plugin-multiselect/chosen.jquery.js" type="text/javascript"></script>
<script src="Plugin-multiselect/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
<script src="Plugin-multiselect/docsupport/init.js" type="text/javascript" charset="utf-8"></script>



<!----------------------------MULTI SELECT PLUGIN --------------------------------------------->
</body>

</html>