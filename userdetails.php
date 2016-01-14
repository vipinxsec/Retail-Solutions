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

    <title>User Details</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

                            <style>
                            @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);

                        @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
                 

                </style>
                <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
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
              <!-- BASIC BUTTONS -->
              
              <div align="center" style="max-height: 500px; overflow: auto;">
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

           if($qry = mysql_query("SELECT * FROM userdata WHERE id =".$_GET['id'])){

           
            //Printing the table of data 

            ?>
            
<h3><u>View User Details</u></h3>
              <br>
<table border="1" class="table table-bordered table-striped table-condensed" style="width: 100%; font-size: 90%;">
      <thead style="color:#063770; background-color:#96B1D0;">
        <tr>
        
          <th><center>Name</center></th>
          <th><center>Role</center></th>
          <th><center>Mobile</center></th>
          <th><center>Logins</center></th>
          <th><center>Zone</center></th>
          <th><center>States</center></th>
          <th><center>Cities</center></th>

        </tr>

      </thead>

      <tbody>
             
           <?php
             while($result = mysql_fetch_assoc($qry)){
                 $arr = $result['state'];
                $array = explode(', ', $arr);
                 $arr2 = $result['city'];
                $array2 = explode(', ', $arr2);
                $arr3 = $result['region'];
                $array3 = explode(', ', $arr3);
                
                echo '<tr>';
                 echo'<td> ' . $result['name'] . '</td> ';
                echo'<td> ' . $result['role'] . '</td> ';
                echo'<td> ' . $result['number'] . '</td> ';
                echo'<td> ' . $result['logins'] . '</td> ';
                 echo'<td>&nbsp;</td> ';
                 echo'<td>&nbsp;</td> ';
                 echo'<td>&nbsp;</td> ';
                 echo '</tr>';
                 foreach ($array3 as $reg) {
                    
                    echo '<tr>';
                      echo'<td>&nbsp;</td> ';
                      echo'<td>&nbsp;</td> ';
                      echo'<td>&nbsp;</td> ';
                      echo'<td>&nbsp;</td> ';
                     
                     echo'<td> ' . $reg . '</td> ';

                     
                      echo'<td>&nbsp;</td> ';
                      echo'<td>&nbsp;</td> ';
                      echo '</tr>';
                  }
 foreach ($array as $stat) {
                       echo '<tr>';
                     echo'<td>&nbsp;</td> ';
                     echo'<td>&nbsp;</td> ';
                     echo'<td>&nbsp;</td> ';
                     echo'<td>&nbsp;</td> ';
                     echo'<td>&nbsp;</td> ';
                    echo'<td> ' . $stat . '</td> ';
                    echo'<td>&nbsp;</td> </tr>';
}

                    foreach ($array2 as $cit) {

                         echo '<tr>';
                     echo'<td>&nbsp;</td> ';
                     echo'<td>&nbsp;</td> ';
                     echo'<td>&nbsp;</td> ';
                     echo'<td>&nbsp;</td> ';
                     echo'<td>&nbsp;</td> ';
                    
                    echo'<td>&nbsp;</td> ';
                    echo'<td> ' . $cit . '</td> </tr>';
                  }
              
               
                 
            
               
                
                
               
                
            
            }
}
            ?>

        </tbody>
        </table>
    
        </div>
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
            </div><!-- /col-lg-12 -->
            
          </div><!--/ row -->
          </section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="navbar-fixed-bottom site-footer">
          <div class="text-center">
              <a href="http://www.gbusolutions.com">GBU SOLUTIONS</a>
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
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
