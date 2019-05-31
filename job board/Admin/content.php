<?php
$sql="SELECT count(distinct(jobpost.ID_jobpost)),count(distinct(jobseeker_profile.ID_jobseeker)),count(distinct(company_profile.ID_company)),count(distinct(user_account.ID_user)) from user_account,company_profile,jobseeker_profile,jobpost";
$result=mysqli_query($con,$sql);
$nbrows=mysqli_num_rows($result);
if($nbrows>0){
  $row=mysqli_fetch_array($result);
  $nb_jobpost=$row[0];
  $nb_jobseeker=$row[1];
  $nb_company=$row[2];
  $nb_user=$row[3];
}
else{
  $nb_jobpost="0";
  $nb_jobseeker="0";
  $nb_company="0";
  $nb_user="0";
}
?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            
              <h3><?php echo $nb_jobpost;?></h3>

              <p>Jobs</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="jobpost-table.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $nb_jobseeker;?></h3>

              <p>Jobseekers</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="jobseeker-table.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $nb_user;?></h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="user-table.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $nb_company;?></h3>

              <p>Companies</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="companies-table.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->



      <div class="row">
        
        <div class="col-md-12">
      

          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Jobseeker BarChart by Major</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
              <?php 
              $sql="select field_of_study,count(field_of_study) from education_jobseeker group by field_of_study";
              $result=mysqli_query($con,$sql);
              $nbrows=mysqli_num_rows($result);
              $major=array();
              $nb=array();
              if($nbrows>0){
               $i=0;
                while($row=mysqli_fetch_array($result)){
                  $major[$i]=$row[0];
                  $nb[$i]=$row[1];
                  $i++;
                  
                }
             
              }
            
              ?>


              
                <canvas id="barChart" data-major='[<?php echo '"'.implode('","',$major).'"';?>]' data-nb='[<?php echo '"'.implode('","',$nb).'"';?>]' style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->



        <div class="col-md-12">
      

          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Job Post BarChart by Category</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
              <?php 
              $sql="select category.category_name,count(jobpost.ID_jobpost) from jobpost,category where jobpost.ID_category=category.ID_category group by jobpost.ID_category ";
              $result=mysqli_query($con,$sql);
              $nbrows=mysqli_num_rows($result);
              $category=array();
              $nb=array();
              if($nbrows>0){
               $i=0;
                while($row=mysqli_fetch_array($result)){
                  $category[$i]=$row[0];
                  $nb[$i]=$row[1];
                  $i++;
                  
                }
             
              }
            
              ?>
                <canvas id="barChart2" data-major='[<?php echo '"'.implode('","',$category).'"';?>]' data-nb='[<?php echo '"'.implode('","',$nb).'"';?>]'  style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->