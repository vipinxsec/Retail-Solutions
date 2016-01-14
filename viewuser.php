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

    <title>View User</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>

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
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      



      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <div class="row mt">
            <div class="col-lg-12">
            <div align="center">
              <!-- BASIC BUTTONS -->
           <div style="overflow: auto; max-height: 430px;">

<?php

       $host="182.50.133.87";
       $user="communique";
       $pass="umesh0028";
          
            //Establishing Connection with Server by passing server_name, user_id and password as a parameter
            $connection = mysql_connect($host, $user, $pass);
            //$username = stripslashes($username);
            //$password = stripslashes($password);
            //$username = mysql_real_escape_string($username);
            //$password = mysql_real_escape_string($password);
            $db = mysql_select_db("comm_login"); 

  $result = mysql_query("SELECT * FROM `userdata`" );

           if($qry = mysql_query("SELECT * FROM `userdata`")){

            $rslt = mysql_fetch_assoc($qry);

            $s_no = $rslt['id'].'<br>';
            $name = $rslt['name'].'<br>';
            $designation = $rslt['designation'].'<br>';
            $department = $rslt['department'].'<br>';
            $report = $rslt['report_person'].'<br>';
            $username = $rslt['username'].'<br>';
            $password = $rslt['password'].'<br>';
            $status = $rslt['user_status'].'<br>';
            
}



            $query = mysql_query("SELECT * FROM `userdata`");
           if($query){

             
             
            //Printing the table of data 

            ?>
            
<br>


<table id="table2excel" class="table table-bordered table-striped table-condensed" border="1" style="width: 100%; font-size: 90%;">
      <thead>
        <tr>
        <th>S.no</th>
        <th class="ex"> </th>
          <th>Name</th>
          <th>Designation</th>
          <th>Department</th>
          <th>Status</th>
          <th>Reporting Person</th>
          <th>Login Name</th>
          <th>Password</th>
          <th>Email Id</th>
          <th>Mobile</th>
          
        </tr>
      </thead>
      <tbody>
             
<?php
while($result = mysql_fetch_assoc($query)){
               
                echo'<td>'.$result['id'].'</td>';
                echo'<td class="ex"><b><a href="userdetails.php?id='.$result['id'].'">Details</a></b></td>';
                echo'<td> ' . $result['name'] . '</td> ';
                echo'<td> ' . $result['designation'] . '</td> ';
                echo'<td> ' . $result['department'] . '</td> ';
                echo'<td> ' . $result['user_status'] . '</td> ';
                echo'<td> ' . $result['report_person'] . '</td> ';
                echo'<td> ' . $result['username'] . '</td> ';
                echo'<td> ' . $result['password'] . '</td>';
                echo'<td> ' . $result['email'] . '</td> ';
                echo'<td> ' . $result['number'] . '</td>';
                echo'</tr>';
                
                
            
            }
}
            ?>

        </tbody>
        </table>
        </div>
        <br>
      <button class="btn btn-info">Export</button>

<br>
<br>
<br>

<script src="http://code.jquery.com/jquery-1.11.3.js"></script>
<script src="assets/js/jquery.table2excel.js"></script>


      <script type="text/javascript">
$("button").click(function(){

    $("#table2excel").find(".ex").remove();

  $("#table2excel").table2excel({
    // exclude CSS class
    exclude: ".noExl",
    name: "Excel Document Name"

  });

});

      </script>


        <style type="text/css">

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
        </div>
            </div><!-- /col-lg-6 -->
            
          </div><!--/ row -->
          </section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="navbar-fixed-bottom site-footer">
          <div class="text-center">
              <a href="http://www.gbusolutions.com">GBU SOLUTIONS</a>
              <a href="viewuser.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
