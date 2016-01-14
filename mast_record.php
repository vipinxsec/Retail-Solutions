<?php
session_start();
if(!isset($_SESSION['login_user'])) {
    header("location: index.php");
}
if (isset($_GET['action'])){$action = htmlentities($_GET['action']);}
else{$action = NULL;}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Master Records</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="contbox" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              
            <!--logo start-->
            <a href="dashboard.php" class="nina"><b>Retail Solutions</b></a>
            <!--logo end-->
            <div class="col-md-12 ">
            <div id="hornav" class="pull-right visible-lg">
              <ul class="nav navbar-nav">
              
                  

                  <li class="parent">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>MasterData</span>
                      </a>
                      <ul class="sub">
                          
                          <li><a  href="new_masterdata.php">Upload New MasterData</a></li>
                          <li><a  href="view.php">View MasterData</a></li>
                      </ul>
                  </li>
				  <li class="parent">
                      <a href="javascript:;" >
                          <i class="glyphicon glyphicon-file"></i>
                          <span>Beat Plan</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="beatplan.php">Edit BeatPlan</a></li>
                          <li><a  href="new_beatplan.php">New Beat Plan</a></li>
                          <li><a  href="viewbeatplan.php">View BeatPlan</a></li>
                      </ul>
                  </li>
                  <li class="parent">
                      <a href="javascript:;" >
                          <i class="glyphicon glyphicon-list-alt"></i>
                          <span>POSM</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="posm.php">POSM Element</a></li>
                          <li><a  href="posmstock.php">POSM Stock</a></li>
                          <!-- <li><a  href="todo_list.html">Todo List</a></li> -->
                      </ul>
                  </li>
                  <li class="parent">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Create</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="createuser.php">Create User</a></li>
                          <li><a  href="createdealer.php">Create Dealer</a></li>
                      </ul>
                  </li>
                  <li class="parent">
                      <a href="javascript:;" >
                          <i class="glyphicon glyphicon-edit"></i>
                          <span>View / Edit</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="viewuser.php">View User</a></li>
                          <li><a  href="edituser.php">Edit User</a></li>
                      </ul>
                  </li>
                  <li class="parent">
                      <a href="javascript:;" >
                          <i class=" glyphicon glyphicon-camera"></i>
                          <span>VM Report</span>
                      </a>
					  <ul class="sub">
                          <li><a  href="statusreport.php">Mobile Report Approval</a></li>
                      </ul>
                  </li>
      <li class="parent">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Information Hub</span>
                      </a>
					  <ul class="sub">
                          <li><a  href="infohub.php">Upload Info</a></li>
						  <li><a  href="viewinfo.php">View Info</a></li>
                      </ul>
                  </li>
                  <li style="width: 120px;">
                  <h5 class="centered"><span style="color:#FFFFFF">                       
<?php
if(isset($_SESSION['login_user'])) {
?>
<a href="#" class="msg"><b>Hi,&nbsp;
<?php echo $_SESSION['login_user'];} ?></b></a>
                  </span></h5>
                  </li>
                    <li><a class="logout" href="logout.php">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
<style>
a.nina:hover,a.nina:focus {
    color: #68dff0 !important;

}
.logout{
  background-color: #fff;
}
a.msg{
  color: #fff !important;

}
a.msg:hover{
  color: #68dff0 !important;
}
</style>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
     
<?php
       $host="182.50.133.87";
       $user="communique";
       $pass="umesh0028";

      $connector = mysql_connect($host,$user,$pass)
          or die("Unable to connect");
      $selected = mysql_select_db("comm_login", $connector)
        or die("Unable to load database");

if (isset($_GET['id'])){
      

      //execute the SQL query and return records
      $result = mysql_query("DELETE FROM masterdata WHERE id =".$_GET['id']);

  }
      
      ?>

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      		<div class="row mt">
      			<div class="col-lg-12">
      				<!-- BASIC BUTTONS -->
      				<div style="height: 524px; overflow: auto;">
      					
      <table class="table table-bordered table-striped table-condensed" style="overflow: auto" >
      <thead style="color: #063770;">
        <tr>
        <th> Click to View</th>
        <th> Delete </th>
          <th>S. No.</th>
          <th>Region</th>
          <th>State</th>
          <th>City</th>
          <th>Dealer Code</th>
          <th>Dealer Name</th>
          <th>Address</th>
          <th>Location</th>
          <th>Store Category</th>
          <th>Contact Person</th>
          <th>Contact No. </th>
        </tr>
      </thead>
      <tbody>
        <?php
        //execute the SQL query and return records
          $result = mysql_query("SELECT * FROM masterdata ");

          while( $row = mysql_fetch_assoc( $result ) ){
            echo '<tr>';
            ?>
            <td><b><a href="javascript:void(0)"onclick="window.open('popupm.php?id=<?php echo $row['id']; ?>', 'View','width=350,height=250,menubar=yes,status=yes')">View Record</a></b></td>
            <td><b> <a href="?id=<?php echo $row['id'];?>" onclick="javascript: return confirm('Are you SURE you want to delete this?');">Delete</a></b></td>
             <?php

              echo '<td>'.$row['s.no.'].'</td>';
              echo'<td>'.$row['region'].'</td>';
              echo'<td>'.$row['state'].'</td>';
              echo'<td>'.$row['city'].'</td>';
              echo'<td>'.$row['dealer code'].'</td>';
              echo'<td>'.$row['dealer name'].'</td>';
              echo'<td>'.$row['address'].'</td>';
              echo'<td>'.$row['location'].'</td>';
              echo'<td>'.$row['category'].'</td>';
              echo'<td>'.$row['contact person'].'</td>';
              echo'<td>'.$row['contact no.'].'</td>';
            echo '</tr>';
            echo '</div>';
          }
        ?>
      </tbody>
    </table><br>
    <div class = "alig">
    <a href="javascript:history.go(-1)" class="btn btn-primary">Go Back</a>
    </div>
<style type="text/css">
.alig{
  text-align: center;
}
th,td{
                border-width:0px 1px 1px 0px;
                text-align: center;
            }
            th
            {
                background-color: #ccffff;
            }
            #myTable {
                margin-top: 0px;
                margin-left: 0px;
            }
            #alert {
                color: black;
            }
            table{
              background-color: #ffffe5;
            }
</style>

    
     <?php mysql_close($connector); ?>

      				</div><!-- /showback -->
      				
      				
      			
      			</div><!-- /col-lg-6 -->
      			
      		</div><!--/ row -->
          </section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="navbar-fixed-bottom site-footer">
          <div class="text-center">
              <a href="http://www.gbusolutions.com">GBU SOLUTIONS</a>
              <a href="mast_record.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jjquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
