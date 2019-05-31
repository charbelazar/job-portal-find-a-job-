  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $fname." ".$lname ?></p>
          <a ><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
       
        
        <li><a href="index.php"><i class="fa fa-dashboard"></i>Home </a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="user-table.php"><i class="fa fa-circle-o"></i>User Table </a></li>
            <li><a href="jobseeker-table.php"><i class="fa fa-circle-o"></i>Jobseekers Table </a></li>
            <li><a href="companies-table.php"><i class="fa fa-circle-o"></i>Companies Table </a></li>
            <li><a href="jobpost-table.php"><i class="fa fa-circle-o"></i>JobPost Table </a></li>
            <li><a href="category-table.php"><i class="fa fa-circle-o"></i>Categories Table </a></li>
            <li><a href="skills-table.php"><i class="fa fa-circle-o"></i>Skills Table </a></li>
          </ul>
        </li>
       <!--
        <li>
          <a href="mailbox.php">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            
          </a>
        </li>
      -->
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>