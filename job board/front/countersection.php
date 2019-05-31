<?php
include 'connection.php';
$sql="select count(ID_jobpost) as jobs from jobpost";
$result=mysqli_query($con,$sql);
$nbrows=mysqli_num_rows($result);
if($nbrows > 0){
    $row=mysqli_fetch_array($result);
    $jobs=$row[0];
}
else{
    $jobs=0;
}

$sql="select count(ID_user) as members from user_account";
$result=mysqli_query($con,$sql);
$nbrows=mysqli_num_rows($result);
if($nbrows > 0){
    $row=mysqli_fetch_array($result);
    $members=$row[0];
}
else{
    $members=0;
}

$sql="select count(ID_jobseeker) as members from jobseeker_profile";
$result=mysqli_query($con,$sql);
$nbrows=mysqli_num_rows($result);
if($nbrows > 0){
    $row=mysqli_fetch_array($result);
    $resumes=$row[0];
}
else{
    $resumes=0;
}

$sql="select count(ID_company) as members from company_profile";
$result=mysqli_query($con,$sql);
$nbrows=mysqli_num_rows($result);
if($nbrows > 0){
    $row=mysqli_fetch_array($result);
    $companies=$row[0];
}
else{
    $companies=0;
}
?>

<section id="counter">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="counting">
<div class="icon">
<i class="ti-briefcase"></i>
</div>
<div class="desc">
<h2>Jobs</h2>
<h1 class="counter"><?php echo $jobs; ?></h1>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
 <div class="counting">
<div class="icon">
<i class="ti-user"></i>
</div>
<div class="desc">
<h2>Members</h2>
<h1 class="counter"><?php echo $members; ?></h1>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="counting">
<div class="icon">
<i class="ti-write"></i>
</div>
<div class="desc">
<h2>Resume</h2>
<h1 class="counter"><?php echo $resumes; ?></h1>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="counting">
<div class="icon">
<i class="ti-heart"></i>
</div>
<div class="desc">
<h2>Company</h2>
<h1 class="counter"><?php echo $companies; ?></h1>
</div>
</div>
</div>
</div>
</div>
</section>