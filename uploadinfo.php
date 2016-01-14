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

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
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
    <script type="application/javascript">
$(document).ready(function() //function to create tabs
{
$("#ppt").addClass('select');
$("#exl").removeClass('select');
$("#vid").removeClass('select');
$("#exlbox").hide().slideUp();
$("#vidbox").hide().slideUp();
$("#pptbox").slideDown(10,'easeOutElastic');

    
$(".tab").click(function()
{
var X=$(this).attr('id'); //fetch name of selected tab
 
if(X=='exl') //contact tab is selected
{
$("#ppt").removeClass('select');
$("#exl").addClass('select');
$("#vid").removeClass('select');
$("#pptbox").hide().slideUp();
$("#vidbox").hide().slideUp();
$("#exlbox").slideDown(10,'easeOutElastic');


}
else if(X=='vid') //posm tab is selected
{
$("#ppt").removeClass('select');
$("#exl").removeClass('select');
$("#vid").addClass('select');
$("#pptbox").hide().slideUp();
$("#exlbox").hide().slideUp();
$("#vidbox").slideDown(10,'easeOutElastic');
}
else
{
$("#ppt").addClass('select');
$("#exl").removeClass('select');
$("#vid").removeClass('select');
$("#exlbox").hide().slideUp();
$("#vidbox").hide().slideUp();
$("#pptbox").slideDown(10,'easeOutElastic');

}
 
});

});
</script>
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
                          <li><a  href="uploadinfo.php">Upload info</a></li>
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
<style>
#con
{
    width:710px;
    height: 600px;
}
#tabbox
{
    height:37px;
    /*border-bottom: groove;*/
}
#panel
{
    background-color: transparent;
    height:550px;
    border-top: groove;   
}
.tab
{
background: transparent;
display: block;
color: #000;
height: 40px;
line-height: 40px;
text-align: center;
width: 170px;
float: left;
font-weight: bold;
-webkit-border-top-left-radius: 4px;
-webkit-border-top-right-radius: 4px;
-moz-border-radius: 4px 4px 0px 0px;
}
a.tab:hover{
  color: #000 !important;
}
a{
  color: #000;
  margin: 0;
  padding: 0;
  text-decoration: none !important;
}
a:hover{
    color: #fff !important;
    text-decoration: none !important;
}
a:focus{
    color: #fff !important;
    text-decoration: none !important;
}
.outlet
{
    margin-left:8px;   
}
.select
{
    background-color:#80d5ff;
    color: #fff;
    text-decoration: none;   
}
#contactbox
{
    height:500px;
    padding:10px;
    display: none;
}
#outletbox
{
    height:500px;
    padding:10px;
    /*display:none;*/
}
</style>



      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <div class="row mt">
            <div class="col-lg-12">
              <!-- BASIC BUTTONS -->
              <div align="center">
              <div id="con">
                <div id="tabbox">
                <a href="#" id="ppt" class="tab select">Upload PPT</a>
                <a href="#" id="exl" class="tab outlet">Upload Excel Sheets</a>
                <a href="#" id="vid" class="tab outlet">Upload Videos</a>
                </div>
                    <div id="panel">
                      <div id="pptbox">
                      <br>
                      
                      <h2>Upload Presentation sheet (PPT)</h2>
                      <br>
                      <form method="post" action="?action=uploadppt" id="clientdata" enctype="multipart/form-data">
                      <span>Select a file &nbsp;</span><input type="file" name="pptfile">
                      <input type="submit" class="btn btn-info" value="Upload file" name="uploadppt" multiple="">
                      </form>
                      </div>
                      <div id="exlbox">
                      <br>
                      <h2>Upload Excel sheet (.xls/.csv)</h2>
                      <br>
                      <form method="post" action="?action=uploadppt" id="clientdata" enctype="multipart/form-data">
                      <span>Select a file &nbsp;</span><input type="file" name="exlfile">
                      <input type="submit" class="btn btn-info" value="Upload file" name="uploadppt" multiple="">
                      </form>
                      </div>
                      <div id="vidbox">
                      <br>
                      <h2>Upload Vidoes</h2>
                      <br>
                      <form method="post" action="?action=uploadppt" id="clientdata" enctype="multipart/form-data">
                      <span>Select a file &nbsp;</span><input type="file" name="vidfile">
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
              <a href="beatrecords.php#" class="go-top">
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
