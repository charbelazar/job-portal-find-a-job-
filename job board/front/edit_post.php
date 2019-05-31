<?php
session_start();
if(!isset($_SESSION["user_id"])){
    header('Location: index.php');
}

if(isset($_POST["update"])){
    include 'connection.php';
    $post_id=$_POST["post_id"];
    $sql="select title,location,job_description,category_name,type,jobpost.ID_category,jobpost.ID_jobtype from jobpost,category,jobtype where ID_jobpost=$post_id and jobpost.ID_category=category.ID_category and jobpost.ID_jobtype=jobtype.ID_jobtype ";
    $result=mysqli_query($con,$sql);
    $nbrows=mysqli_num_rows($result);
    if($nbrows > 0){
        $row=mysqli_fetch_array($result);
        $jobtitle=$row[0];
        $location=$row[1];
        $jobdescription=$row[2];
        $category=$row[3];
        $type=$row[4];
        $id_category=$row[5];
        $id_type=$row[6];
        
        
    }
    else{
        $jobtitle="no data found";
        $location="no data found";
        $jobdescription="no data found";
        $category="no data found";
        $type="no data found";

    }
}
?>

<!----------------------------MULTI SELECT PLUGIN --------------------------------------------->
<link rel="stylesheet" href="Plugin-multiselect/docsupport/prism.css">
<link rel="stylesheet" href="Plugin-multiselect/chosen.css">

<script>
    $(document).ready(function () {
    $(".chosen-select").chosen({max_selected_options: 5});
  });
</script>
<!----------------------------MULTI SELECT PLUGIN --------------------------------------------->
<script src="post-update.js"></script>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6">

            <div class="page-ads box">
                <form >

                    <div class="form-group">
                        <label id="error_jobtitle" class="control-label" for="textarea">Job Title</label><br>

                        <input id="textbox_jobtitle" type="text" class="form-control" placeholder="You job title" value="<?php echo $jobtitle;?>">

                    </div>



                    <div class="form-group">
                        <label id="error_joblocation" class="control-label" for="textarea">Location</label><br>
                        <input id="textbox_joblocation" type="text" class="form-control" placeholder="location" value="<?php echo $location;?>">

                    </div>

                    <div class="form-group">
                        <label id="error_category" class="control-label">Category</label>
                        <select id="select_category" class="form-control">
                            <option disabled selected value="<?php echo $id_category;?>" hidden>
                                <?php echo $category;?>
                            </option>
                            <!-----------------get categories from databse -------------->
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
                        <option disabled selected value="<?php echo $id_type;?>" hidden>
                                <?php echo $type;?>
                            </option>
                           
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
                            <label id="error_jobdescription" class="control-label" for="textarea">Job Description</label>
                            <textarea id="textbox_jobdescription" class="form-control" rows="3"><?php echo $jobdescription;?></textarea>

                        </div>



                        <div class="form-group">
                            <!----------------get old selected skills----------------->
                            <?php
                    $sql="select skill from skills ,skills_job where skills_job.ID_jobpost=$post_id and skills_job.ID_skill=skills.ID_skills   ";
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
                            <!-------------------------------------------------------->
                            <label id="error_skills" class="control-label">Skills</label>

                            <select id="select_skill" data-placeholder="<?php echo $skills; ?>" multiple class="chosen-select-no-results form-control"
                                tabindex="11">
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

                      





                         
                      
















                </form>
                
            </div>
        </div>
    </div>
</div>




<!----------------------------MULTI SELECT PLUGIN --------------------------------------------->
<script src="docsupport/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="Plugin-multiselect/chosen.jquery.js" type="text/javascript"></script>
<script src="Plugin-multiselect/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
<script src="Plugin-multiselect/docsupport/init.js" type="text/javascript" charset="utf-8"></script>



<!----------------------------MULTI SELECT PLUGIN --------------------------------------------->
