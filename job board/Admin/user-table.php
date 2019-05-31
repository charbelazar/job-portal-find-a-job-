<?php
include 'navbar.php';
include 'left-side.php';
?>

<!-- DataTables -->
<link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users Table
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a >Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
             <button class="btn btn-app" id="btn_showuserform"  >
             <?php
             $sql="select count(ID_admin) from admin ";
             $result=mysqli_query($con,$sql);
             $nbrows=mysqli_num_rows($result);
             if($nbrows>0){
               $row=mysqli_fetch_array($result);
               $nb_users=$row[0];
             }
             else{
               $nb_users=0;
             }
             ?>
                <span class="badge bg-purple"><?php echo $nb_users; ?></span>
                <i class="fa fa-users"></i> Add New User +
              </button>

            
       <div class="row" id="adduserform" hidden >
           <div class="col-xs-12">
               <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">User info</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="admin_register" class="form-horizontal" action="admin_register.php" method="POST" autocomplete="off" >
              <div class="box-body">
                <div class="form-group">
                  <label  id="label_email" class="col-sm-2 control-label" >Email</label>

                  <div class="col-sm-10">
                    <input type="email" onpaste="return false" autocomplete="off"  class="form-control" id="input_Email" placeholder="Email" name="email" >
                    <label  id="error_email" class="control-label" data-data="0"  hidden></label>
                  
                  </div>
                </div>
                <div class="form-group">
                  <label  id="label_password" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" onpaste="return false" class="form-control" id="input_Password" placeholder="Password" autocomplete="off" name="password">
                    <label  id="error_password" class="control-label" hidden></label>
                  </div>
                </div>
                <div class="form-group">
                  <label id="label_fn" class="col-sm-2 control-label"> First Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input_fn" placeholder="First Name" name="Fname">
                    <label  id="error_fname" class="control-label" hidden></label>
                  </div>
                </div>
                <div class="form-group">
                  <label id="label_ln" class="col-sm-2 control-label">Last Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input_ln" placeholder="Last Name" name="Lname">
                    <label  id="error_lname" class="control-label" hidden></label>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="button" class="btn btn-default" value="Cancel" id="btn_cancel"/>
                <input type="button" class="btn btn-info pull-right" value="submit" id="btn_submit" name="btn_submit1" />
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->

           </div>
       </div>
      <div class="row">
        <div class="col-xs-12">
          

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Admin users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Registration Date</th>
                  <th>Event</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $sql="select admin.ID_admin,admin.First_name,admin.Last_name,user_account.ID_user,user_account.email,user_account.password,user_account.registration_date from admin,user_account where admin.ID_user=user_account.ID_user  ";
                $result=mysqli_query($con,$sql);
                $nbrows=mysqli_num_rows($result);
                if($nbrows>0){$i=0;
                  while($row=mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$row["ID_admin"]."</td>";
                    echo "<td><input id='input_Fname_$i' type='text' hidden size='15' /><label id='label_Fname_$i'>".$row["First_name"]."</label></td>";
                    echo "<td><input id='input_Lname_$i' type='text' hidden size='15' /><label id='label_Lname_$i'>".$row["Last_name"]."</label></td>";
                    echo "<td><input id='input_email_$i' type='text' hidden size='15' disabled /><label id='label_email_$i'>".$row["email"]."</lable></td>";
                    echo "<td><input id='input_password_$i' type='text' hidden  size='15'/><label id='label_password_$i'>".$row["password"]."</label></td>";                
                    echo "<td>".$row["registration_date"]."</td>";
                    echo "<td><span id='span1_$i' hidden ><input id='btn_update_admin_$i' type='button' class='btn btn-info' value='update' onclick='update_user(".$row['ID_admin'].",".$row['ID_user'].",".$i.")'/> <button type='button' id='btn_cancel_$i' class='btn btn-danger' onclick='hide_update_cancel($i)' >Cancel</button></span><span id='span2_$i'><input type='button' id='btn_edit_$i' onclick='show_update_cancel($i)' class='btn btn-info' value='Edit'/> <button type='button'  class='btn btn-danger' onclick='show_comfirmboxModal(".$row['ID_admin'].",".$row['ID_user'].")' >Delete</button></span> </td>";
                    echo "</tr>";
                    $i++;
                  }
                }
                else{
                  echo "<tr>";
                  echo "<td></td>";
                  echo "<td></td>";
                  echo "<td></td>";
                  echo "<td></td>";
                  echo "<td></td>";
                  echo "<td></td>";                  
                  echo "<td></td>";
                  echo "</tr>";
                }
                
                ?>
                
               
                </tbody>
                <tfoot hidden>
                <tr>
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Registration Date</th>
                  <th>Event</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php
include 'footer.php';
?>

<!--------------------delete user confirm box -------------->
<!-- Modal -->
<div id="confirmbox" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <h3>Are you sure you want to delete this User ?</h3>
      </div>
      <div class="modal-footer">
        
        <input id="btn_delete_user" type="button" class="btn btn-default" value="YES" />
        <button type="button" class="btn btn-default " data-dismiss="modal">NO</button>
        
      </div>
    </div>

  </div>
</div>
<!----------------------------------->

<!------------------empty field modal-------------->
<!-- Modal -->
<div id="modal_empty_field" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <h3>Please fill empty fields !!!</h3>
      </div>
      <div class="modal-footer">
        
        
        <button type="button" class="btn btn-default " data-dismiss="modal">OK</button>
        
      </div>
    </div>

  </div>
</div>
<!----------------------------------->

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })


  $("#btn_showuserform").click(function(){
    $(this).css("display","none")
    $("#adduserform").attr("hidden",false);

  }); 

  $("#btn_cancel").click(function(){

    $("#adduserform").attr("hidden",true);
    $("#btn_showuserform").css("display","block")
  }); 


function show_update_cancel(i){
  Fname=$("#label_Fname_"+i).html();
  Lname=$("#label_Lname_"+i).html();
  email=$("#label_email_"+i).html();
  password=$("#label_password_"+i).html();

  $("#label_Fname_"+i).attr("hidden",true);
  $("#label_Lname_"+i).attr("hidden",true);
  $("#label_email_"+i).attr("hidden",true);
  $("#label_password_"+i).attr("hidden",true);
  $("#span2_"+i).attr("hidden",true);

  $("#input_Fname_"+i).val(Fname);
  $("#input_Lname_"+i).val(Lname);
  $("#input_email_"+i).val(email);
  $("#input_password_"+i).val(password);
  $("#input_Fname_"+i).attr("hidden",false);
  $("#input_Lname_"+i).attr("hidden",false);
  $("#input_email_"+i).attr("hidden",false);
  $("#input_password_"+i).attr("hidden",false);
  $("#span1_"+i).attr("hidden",false);

}


function hide_update_cancel(i){
  $("#input_Fname_"+i).val("");
  $("#input_Lname_"+i).val("");
  $("#input_email_"+i).val("");
  $("#input_password_"+i).val("");
  $("#input_Fname_"+i).attr("hidden",true);
  $("#input_Lname_"+i).attr("hidden",true);
  $("#input_email_"+i).attr("hidden",true);
  $("#input_password_"+i).attr("hidden",true);
  $("#input_Fname_"+i).css("border-color","");
  $("#input_Lname_"+i).css("border-color","");
  $("#input_password_"+i).css("border-color","");
  $("#span1_"+i).attr("hidden",true);
  
  $("#label_Fname_"+i).attr("hidden",false);
  $("#label_Lname_"+i).attr("hidden",false);
  $("#label_email_"+i).attr("hidden",false);
  $("#label_password_"+i).attr("hidden",false);
  $("#span2_"+i).attr("hidden",false);
}

function show_comfirmboxModal(admin_id,ID_user){
  $("#btn_delete_user").attr("onclick","delete_user("+admin_id+","+ID_user+")");
  $("#confirmbox").modal('show');
}

function delete_user(admin_id,ID_user){

 window.location.href="Delete_user.php?admin_id="+admin_id+"&ID_user="+ID_user;
}


function update_user1(){
  alert("aa");
}
</script>
<script src="functions/Email_validation.js"></script>
<script src="functions/admin_register.js"></script>
<script src="functions/update_user.js"></script>



</body>
</html>
