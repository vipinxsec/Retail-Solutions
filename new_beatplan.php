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

    <title>New BeatPlan</title>

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


      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <div class="row mt">
            <div class="col-lg-12">
              <!-- BASIC BUTTONS -->
              <div align="center" style="height: 531px;">
              <br>
              
        <form enctype="multipart/form-data" method="post" role="form">
    <div class="form-group">
        <label for="exampleInputFile">File Upload</label>
        <input type="file" name="file" id="file" size="150">
        <p class="help-block">Only .CSV File are Supported.</p>
    </div>
    <button type="submit" class="btn btn-success" name="Import" value="Import">Upload</button>
</form>

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
              <a href="new_beatplan.php#" class="go-top">
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
if(isset($_POST["Import"]))
{
    //First we need to make a connection with the database
       $host="182.50.133.87";
       $user="communique";
       $pass="umesh0028";
    $db= 'comm_login'; // Database Name.
    $conn=mysql_connect($host,$user,$pass) or die (mysql_error());
    mysql_select_db($db) or die (mysql_error());
    $filename=$_FILES["file"]["tmp_name"];
    $filenm=$_FILES["file"]["name"];
    $extension=array(".csv", ".CSV");
    $file_ext=substr($filenm, strrpos($filenm, '.'));
    if(!empty($_FILES['file']['tmp_name'])){

    if(in_array($file_ext,$extension)===true)
    {
         
    if($_FILES["file"]["size"] > 0)
    {
        $file = fopen($filename, "r");
//$sql_data = "SELECT * FROM prod_list_1 ";

$count = 0;                                         // add this line
while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
{
    //print_r($emapData);
    //exit();
    
    
    $count++;                                   // add this line

    if($count>1){

if(!empty($emapData[14])){
    $dov1= date("Y-m-d", strtotime($emapData[14]));
}else{
    $dov1= $emapData[14];
}
if(!empty($emapData[15])){
    $dov2 = date("Y-m-d", strtotime($emapData[15]));
}else{
    $dov2= $emapData[15];
}
if(!empty($emapData[16])){
    $dov3 = date("Y-m-d", strtotime($emapData[16]));
}else{
    $dov3= $emapData[16];
}
if(!empty($emapData[17])){
    $dov4 = date("Y-m-d", strtotime($emapData[17]));
}else{
    $dov4= $emapData[17];
}
if(!empty($emapData[18])){
    $dov5 = date("Y-m-d", strtotime($emapData[18]));
}else{
    $dov5= $emapData[18];
}
if(!empty($emapData[19])){
    $dov6 = date("Y-m-d", strtotime($emapData[19]));
}else{
    $dov6= $emapData[19];
}
   
                                   // add this line
     $query = "INSERT INTO uploading_beatexcel (`id`, `zone`, `state`, `city`, `vm town`, `distributor code`, `distributor name`, `dealer code`, `dealer name`,`category`, `address`, `location`, `contact`, `mobile no`,`dov1`, `dov2`, `dov3`, `dov4`, `dov5`, `dov6`) VALUES (NULL, '$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]', '$emapData[5]', '$emapData[6]','$emapData[7]', '$emapData[8]', '$emapData[9]', '$emapData[10]', '$emapData[11]', '$emapData[12]', '$emapData[13]','$dov1', '$dov2', '$dov3', '$dov4', '$dov5', '$dov6')";
    mysql_query($query);
    }                                              // add this line
}
        fclose($file);
        echo '<script type="text/javascript">';
        echo 'alert("CSV File has been successfully Imported")';
        echo '</script>';
        
    }
    else{
        echo '<script type="text/javascript">';
        echo 'alert("Error:Invalid File")';
        echo '</script>';
    }
  }else{
        echo '<script type="text/javascript">';
        echo 'alert("Please Upload only CSV File")';
        echo '</script>';
  }

}
else{
        echo '<script type="text/javascript">';
        echo 'alert("Please select a File")';
        echo '</script>';
}
}
?>

  
            