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

    <title>Upload Info</title>
  <link rel="stylesheet" href="assets/css/datepicker.css">
<!-- Optional theme -->

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
                          <li><a  href="infohub.php">Upload info</a></li>
                          <li><a  href="viewinfo.php">View info</a></li>
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
              <div align="center">
              <div id="con">
      <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#pptbox">Upload Documents</a></li>
  <li><a data-toggle="tab" href="#vidbox">Upload Videos</a></li>
</ul>

<style type="text/css">
  .nav-tabs > li, .nav-pills > li {
    float:none;
    display:inline-block;
    *display:inline; /* ie7 fix */
     zoom:1; /* hasLayout ie7 trigger */
}

.nav-tabs, .nav-pills {
    text-align:center;
}
</style>
        
<style type="text/css">
    .help-block {
        
        text-align: center;
        color: #66b2ff;
    }
    #file{
        display:inline!important;
        
    }
    label{
        font-size: 15px;
        font-weight: 500;
    }
</style>
                    <div class="tab-content">

                      <div id="pptbox" class="tab-pane fade in active">
                      <br>
                      
                      <h2>Upload documents here!</h2>
                      <br>
                      <form method="post" action="?action=uploaddoc" id="clientdata" enctype="multipart/form-data">
                      <input type="file" name="pptfile" id="file">
                      <p class="help-block">.doc, .ppt, .xls files only!</p>
                      <input type="submit" class="btn btn-info" value="Upload file" name="uploadppt" multiple="">
                      </form>
                      </div>
      
                      <div id="vidbox" class="tab-pane fade">
                      <br>
                      <h2>Upload vidoes here!</h2>
                      <br>
                      <form method="post" action="?action=uploadvid" id="clientdata" enctype="multipart/form-data">
                      <input type="file" name="vidfile" id="file">
                      <p class="help-block">.3gp, .mpeg4, .mp4 files only!</p>
                      <input type="submit" class="btn btn-info" value="Upload file" name="uploadppt" multiple="">
                      </form>
                      
                      <br>
                      </div>
                    </div>
              </div>
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
if($action=="uploaddoc")
{
$errors= array();
$extensions= array(".ppt",".xls", ".xlsx", ".doc", ".docx");
$file_name = $_FILES['pptfile']['name'];
$file_ext=substr($file_name, strrpos($file_name, '.'));
$info = pathinfo($_FILES['pptfile']['name']);
$target = 'uploads/infohub/'.$file_name;

if(!empty($_FILES['pptfile']['name']))
{
if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a .xls file.";
echo '<script language="javascript">';
echo 'alert("Invalid File: Please Upload only supported files.")';
echo '</script>';
      }

if(empty($errors)==true){
 //$target = ROOT_DIR.'/uploads/uploads_beatplan/'.$newname;
 move_uploaded_file( $_FILES['pptfile']['tmp_name'], $target);
 //if($action=="upload"){
echo '<script language="javascript">';
echo 'alert("File Uploaded")';
echo '</script>';

      }else{
         //print_r($errors);
         //header("location: masterdata.php");
}
}
else
{
    echo '<script language="javascript">';
    echo 'alert("Please select a file")';
    echo '</script>';
}
}?> 

<?php

if($action=="uploadvid")
{
$errors= array();
$extensions= array(".mp4", ".3gp", ".mpeg4");
$file_name = $_FILES['vidfile']['name'];
$file_ext=substr($file_name, strrpos($file_name, '.'));
$info = pathinfo($_FILES['vidfile']['name']);
$target = 'uploads/infohub/'.$file_name;

if(!empty($_FILES['vidfile']['name']))
{
if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a .xls file.";
echo '<script language="javascript">';
echo 'alert("Invalid File: Please Upload only supported files.")';
echo '</script>';
      }

 
if(empty($errors)==true){

 //$target = ROOT_DIR.'/uploads/uploads_beatplan/'.$newname;
 move_uploaded_file( $_FILES['vidfile']['tmp_name'], $target);
 //if($action=="upload"){
echo '<script language="javascript">';
echo 'alert("File Uploaded")';
echo '</script>';
      }
      else{
         //print_r($errors);
         //header("location: masterdata.php");
}
}
else
{
    echo '<script language="javascript">';
    echo 'alert("Please select a file")';
    echo '</script>';
}
}
?>
        