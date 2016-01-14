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
<link rel="shortcut icon" href="images/favicon.ico">

    <title>POSM Element</title>

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
      <!--header end-->
      
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
              <div align="center">
              <form class="form-horizontal" role="form" method="post" action="" style="margin-left: 60px">
                                              <style>
                                              table
                                              {
                                              border-collapse:collapse;
                                              }
                                              td
                                              {
                                              padding-top:.2em;
                                              padding-bottom:.2em;
                                              }
                                              .form-group{
                                                margin-bottom: 3px !important;
                                              }
                                              .clred{
                                                    color: #ff0000;
                                                }
                                              </style>
                                        <table cellspacing="10" cellpadding="25">
                                        <tr>
                                        <div class="form-group">
                                            <td align="left" width="90px"><span id="font_style">Select City<b class="clred">*</b></span></td>
                                            <td align="left"><select name="city" class="form-control input-sm" style="width:150px;">
                                            <option value="">Select City</option>
                                               <option>Agra</option>                                           
<option>Ahmedabad</option>
<option>Alappuzha</option>
<option>Alwar</option>
<option>Amritsar</option>
<option>Aurangabad</option>
<option>Bangalore</option>
<option>Bharatpur</option>
<option>Bhavnagar</option>
<option>Bhopal</option>
<option>Bhubaneshwar</option>
<option>Bikaner</option>
<option>Bodh Gaya</option>
<option>Calangute</option>
<option>Chandigarh</option>
<option>Chennai</option>
<option>Chittaurgarh</option>
<option>Coimbatore</option>
<option>Cuttack</option>
<option>Dalhousie</option>
<option>Dehradun</option>
<option>Delhi</option>
<option>Ernakulam</option>
<option>Faridabad</option>
<option>Gaya</option>
<option>Gangtok</option>
<option>Ghaziabad</option>
<option>Gurgaon</option>
<option>Guwahati</option>
<option>Gwalior</option>
<option>Haridwar</option>
<option>Hyderabad</option>
<option>Imphal</option>
<option>Indore</option>
<option>Jabalpur</option>
<option>Jaipur</option>
<option>Jaisalmer</option>
<option>Jalandhar</option>
<option>Jamshedpur</option>
<option>Jodhpur</option>
<option>Junagadh</option>
<option>Kanpur</option>
<option>Kanyakumari</option>
<option>Khajuraho</option>
<option>Khandala</option>
<option>Kochi</option>
<option>Kodaikanal</option>
<option>Kolkata</option>
<option>Kota</option>
<option>Kottayam</option>
<option>Kovalam</option>
<option>Lucknow</option>
<option>Ludhiana</option>
<option>Madurai</option>
<option>Manali</option>
<option>Mangalore</option>
<option>Margao</option>
<option>Mathura</option>
<option>Mountabu</option>
<option>Mumbai</option>
<option>Mussoorie</option>
<option>Mysore</option>
<option>Manali</option>
<option>Nagpur</option>
<option>Nainital</option>
<option>Noida</option>
<option>Ooty</option>
<option>Orchha</option>
<option>Panaji</option>
<option>Patna</option>
<option>Pondicherry</option>
<option>Porbandar</option>
<option>Portblair</option>
<option>Pune</option>
<option>Puri</option>
<option>Pushkar</option>
<option>Rajkot</option>
<option>Rameswaram</option>
<option>Ranchi</option>
<option>Sanchi</option>
<option>Secunderabad</option>
<option>Shimla</option>
<option>Surat</option>
<option>Thanjavur</option>
<option>Thiruchchirapalli</option>
<option>Thrissur</option>
<option>Tirumala</option>
<option>Udaipur</option>
<option>Vadodra</option>
<option>Varanasi</option>
<option>Vasco-Da-Gama</option>
<option>Vijayawada</option>
<option>Visakhapatnam</option>
                                            </select></td>
                                            </tr>
                                            <div class="form-group">
                                            <td align="left"><span id="font_style">Bunting</span></td>
                                            <td align="left"><input type="number" name="bunting" class="form-control input-sm" placeholder="Enter bunting" style="width:150px;" /></td>
                                            </tr>
                                            <tr>
                                            <div class="form-group">
                                            <td align="left"><span id="font_style">Dangler</span></td>
                                            <td align="left"><input type="number" name="dangler" class="form-control input-sm" placeholder="Enter dangler" style="width:150px;" /></td>
                                            </tr>
                                            <tr>
                                            <div class="form-group">
                                            <td align="left"><span id="font_style">Poster</span></td>
                                            <td align="left"><input type="number" name="poster" class="form-control input-sm" placeholder="Enter poster" style="width:150px;" /></td>
                                            </tr>
                                            <tr>
                                            <div class="form-group">
                                            <td align="left"><span id="font_style">Tear Pad</span></td>
                                            <td align="left"><input type="number" name="tearpad" class="form-control input-sm" placeholder="Enter tearpad" style="width:150px;" /></td>
                                            </tr>
                                            <tr>
                                            <div class="form-group">
                                            <td align="left"><span id="font_style">Leaf Pad</span></td>
                                            <td align="left"><input type="number" name="leafpad" class="form-control input-sm" placeholder="Enter leafpad" style="width:150px;" /></td>
                                            </tr>
                                            <tr>
                                            <div class="form-group">
                                            <td align="left"><span id="font_style">Brochure</span></td>
                                            <td align="left"><input type="number" name="brochure" class="form-control input-sm" placeholder="Enter brochure" style="width:150px;" /></td>
                                            </tr>
                                            <tr>
                                            <div class="form-group">
                                            <td align="left"><span id="font_style">Wobblers</span></td>
                                            <td align="left"><input type="number" name="wobblers" class="form-control input-sm" placeholder="Enter wobblers" style="width:150px;" /></td>
                                            </tr>
                                            <tr>
                                            <div class="form-group">
                                            <td align="left"><span id="font_style">Tent Card</span></td>
                                            <td align="left"><input type="number" name="tentcard" class="form-control input-sm" placeholder="Enter tentcard" style="width:150px;" /></td>
                                            </tr>
                                            <tr>
                                            <div class="form-group">
                                            <td align="left"><span id="font_style">Others</span></td>
                                            <td align="left"><input type="number" name="others" class="form-control input-sm" placeholder="Enter others" style="width:150px;" /></td>
                                            </tr>
                                            
                                            
                                            <tr><td></td></tr>
                                            <tr>
                                            <td></td>
                                            <td>
                                            <!--<input type="submit" value="Send" class="btn btn-primary btn-round" />-->
                                            <input type="submit" name="save" class="btn btn-success btn-round" value="Save" />
                                            <a href="masterdata.php" role="button" class="btn btn-danger btn-round">Back</a>
                                            
                                            </td>
                                            </tr>
                                        </table>
                                            </form>
                                            <br>
              
 
<br>
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
              <a href="posm.php#" class="go-top">
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

<?php

if(isset($_POST['save']))
{
    //getting the values inserted in the form
$city = $_POST['city'];
$buntingnew = $_POST['bunting'];
(int)$buntingnew;
$danglernew = $_POST['dangler'];
(int)$danglernew;
$posternew = $_POST['poster'];
(int)$posternew;
$tearpadnew = $_POST['tearpad'];
(int)$tearpadnew;
$leafpadnew = $_POST['leafpad'];
(int)$leafpadnew;
$brochurenew = $_POST['brochure'];
(int)$brochurenew;
$wobblersnew = $_POST['wobblers'];
(int)$wobblersnew;
$tentcardnew = $_POST['tentcard'];
(int)$tentcardnew;
$othersnew = $_POST['others'];
(int)$othersnew;

if(empty($_POST['city'])){
    echo '<script language="javascript">';
    echo 'alert("Please select a city")';
    echo '</script>';
}
else{
//assigning blank fields a value 0
 if(empty($_POST['bunting'])){
    $buntingnew=0;
 }if(empty($_POST['dangler'])){
    $danglernew=0;
 }if(empty($_POST['poster'])){
    $posternew=0;
 }if(empty($_POST['tearpad'])){
    $tearpadnew=0;
 }if(empty($_POST['leafpad'])){
    $leafpadnew=0;
 }if(empty($_POST['brochure'])){
    $brochurenew=0;
 }if(empty($_POST['wobblers'])){
    $wobblersnew=0;
 }if(empty($_POST['tentcard'])){
    $tentcardnew=0;
 }if(empty($_POST['others'])){
    $othersnew=0;
 }


       $host="182.50.133.87";
       $user="communique";
       $pass="umesh0028";

 //Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect($host, $user, $pass);

$db = mysql_select_db("comm_login");
//getting values according to city from posmdata
$qry=mysql_query("SELECT * from `comm_login`.`posmdata` WHERE city='$city';");
$reslt=mysql_fetch_assoc($qry);
$buntingold=$reslt['bunting'];
(int)$buntingold;
$danglerold=$reslt['dangler'];
(int)$danglerold;
$posterold=$reslt['poster'];
(int)$posterold;
$tearpadold=$reslt['tearpad'];
(int)$tearpadold;
$leafpadold=$reslt['leafpad'];
(int)$leafpadold;
$brochureold=$reslt['brochure'];
(int)$brochureold;
$wobblersold=$reslt['wobblers'];
(int)$wobblersold;
$tentcardold=$reslt['tentcard'];
(int)$tentcardold;
$othersold=$reslt['others'];
(int)$othersold;

//Adding new stock to existing stock
$bunting=$buntingold+$buntingnew;
$dangler=$danglerold+$danglernew;
$poster=$posterold+$posternew;
$tearpad=$tearpadold+$tearpadnew;
$leafpad=$leafpadold+$leafpadnew;
$brochure=$brochureold+$brochurenew;
$wobblers=$wobblersold+$wobblersnew;
$tentcard=$tentcardold+$tentcardnew;
$others=$othersold+$othersnew;

$query = mysql_query("UPDATE `comm_login`.`posmdata` SET `bunting`='$bunting' , `dangler`='$dangler' , `poster`='$poster' , `tearpad`='$tearpad' , `leafpad`='$leafpad' , `brochure`='$brochure' , `wobblers`='$wobblers' , `tentcard`='$tentcard' , `others`='$others' WHERE `city`='$city';");
$query = mysql_query("UPDATE `comm_login`.`posm` SET `bunting`='$bunting' , `dangler`='$dangler' , `poster`='$poster' , `tearpad`='$tearpad' , `leafpad`='$leafpad' , `brochure`='$brochure' , `wobblers`='$wobblers' , `tentcard`='$tentcard' , `others`='$others' WHERE `city`='$city';");

        echo '<script language="javascript">';
        echo 'alert("Data Updated Successfully")';
        echo '</script>';
      }


      }

?> 