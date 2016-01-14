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

    <title>POSM Stock</title>

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
      <style type="text/css">

            th,td{
                border-width:0px 1px 1px 0px;
                text-align: center;
            }
            #myTable {
                margin-top: -250px;
                /*margin-left: 240px;*/
            }
            #alert {
                color: black;
            }
            th{
              background-color: #ccffff !important;
            }
            .table{
              width: 290px !important;
              background-color: #ffffe5 !important;
            }
            .blu{
              color: #0000ff;
            }
            .btn{
              margin-top: 5px;
            }
            label{
              font-size: 15px;
              font-weight: 700;
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
              <div align="center" style="height: 531px;">
              <form action="" method="post">
 <label> Check Stock</label>
  <select name="cityname" class="form-control input-sm" style="width: 160px">
  <option value="">Select City</option>
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

  $result = mysql_query("SELECT * FROM `posm`" );
  while ($row=mysql_fetch_array($result)) { ?>
<option value=<?php echo $row['city']?>><?php echo $row['city']?></option>
<?php } ?>
  
</select>
  <input type="submit" name="go" class="btn btn-success" value="Go">
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
              <a href="posmstock.php#" class="go-top">
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

if(isset($_POST['go'])){

$cityname = $_POST['cityname'];

    if(empty($_POST['cityname'])){

        echo '<script language="javascript">';
        echo 'alert("Please Select City")';
        echo '</script>';
    }else{
    


    

?>

                                <!-- Single button -->

                                    <!-- Start Left Sub Item -->
<?php

                     

           if($qry = mysql_query("SELECT * FROM `posmdata` WHERE `city`='$cityname'")){
           
            $rslt = mysql_fetch_assoc($qry);

            $bunnew = $rslt['bunting'].'<br>';
            $dangnew = $rslt['dangler'].'<br>';
            $postnew = $rslt['poster'].'<br>';
            $tearnew = $rslt['tearpad'].'<br>';
            $leafnew = $rslt['leafpad'].'<br>';
            $brocnew = $rslt['brochure'].'<br>';
            $wobbnew = $rslt['wobblers'].'<br>';
            $tentnew = $rslt['tentcard'].'<br>';
            $othnew = $rslt['others'].'<br>';
}
//getting values from clientappdata table
 /*if($qry2 = mysql_query("SELECT * FROM `clientappdata` WHERE `city`='$cityname'")){

$rslt = mysql_fetch_assoc($qry2);

            $bun_mi = $rslt['bunting'].'<br>';
            $dang_mi = $rslt['dangler'].'<br>';
            $post_mi = $rslt['poster'].'<br>';
            $tear_mi = $rslt['tearpad'].'<br>';
            $leaf_mi = $rslt['leafpad'].'<br>';
            $broc_mi = $rslt['brochure'].'<br>';
            $wobb_mi = $rslt['wobblers'].'<br>';
            $tent_mi = $rslt['tentcards'].'<br>';
            $oth_mi = $rslt['others'].'<br>';

 }*/
            //Calculating 35% of the inserted stock value

            $buntingdata = ($bunnew*35)/100;
            $danglerdata = ($dangnew*35)/100;
            $posterdata = ($postnew*35)/100;
            $tearpaddata = ($tearnew*35)/100;
            $leafpaddata = ($leafnew*35)/100;
            $brochuredata = ($brocnew*35)/100;
            $wobblersdata = ($wobbnew*35)/100;
            $tentcarddata = ($tentnew*35)/100;
            $othersdata = ($othnew*35)/100;




           /* $query = mysql_query("SELECT * FROM `posmdata` WHERE `city`='$cityname'");
           if($query){

             $result = mysql_fetch_assoc($query);
             
            //subtracting the clientappdata table values from posm table values
                  $bun_left = $result['bunting'] - $bun_mi;
                  $dan_left = $result['dangler'] - $dang_mi;
                  $pos_left = $result['poster'] - $post_mi;
                  $tea_left = $result['tearpad'] - $tear_mi;
                  $lea_left = $result['leafpad'] - $leaf_mi;
                  $bro_left = $result['brochure'] - $broc_mi;
                  $wob_left = $result['wobblers'] - $wobb_mi;
                  $ten_left = $result['tentcard'] - $tent_mi;
                  $oth_left = $result['others'] - $oth_mi;*/
                  
             echo'<h2><u> Stock Details for '.$cityname.' </u></h2><br>';
             echo '<center>';
            echo'<table class="table table-bordered table-striped table-condensed"><th style="background-color: #ccffff;">POSM Item</th><th style="background-color: #ccffff;">Quantity Left</th>';

            if($buntingdata>$bunnew){
                echo '<tr bgcolor="red"><td>Bunting</td><td> <div id = "alert">'.$bunnew.'</div></td></tr>';
            }else{
                echo '<tr><td>Bunting</td><td> '.$bunnew.'</td></tr>';
            }
            if($danglerdata>$dangnew){
                echo '<tr bgcolor="red"><td><div id = "alert">Dangler</td><td><div id = "alert">'.$dangnew.'</div></td></tr>';
            }else {
                echo '<tr><td>Dangler</td><td> ' . $dangnew . '</td></tr>';
            }
            if($posterdata>$postnew){
                echo '<tr bgcolor="red"><td><div id = "alert">Poster</td><td> <div id = "alert"> '.$postnew.'</div></td></tr>';
            }else {
                echo '<tr><td>Poster</td><td> ' . $postnew . '</td></tr>';
            }
            if($tearpaddata>$tearnew){
                echo '<tr bgcolor="red"><td><div id = "alert">Tearpad</td><td> <div id = "alert">'.$tearnew.'</div></td></tr>';
            }else {
                echo '<tr><td>Tearpad</td><td> ' . $tearnew . '</td></tr>';
            }
            if($leafpaddata>$leafnew){
                echo '<tr bgcolor="red"><td><div id = "alert">Leafpad</td><td> <div id = "alert">'.$leafnew.'</div></td></tr>';
            }else {
                echo '<tr><td>Leafpad</td><td> ' . $leafnew . '</td></tr>';
            }
            if($brochuredata>$brocnew){
                echo '<tr bgcolor="red"><td><div id = "alert">Brochure</td><td> <div id = "alert">'.$brocnew.'</div></td></tr>';
            }else {
                echo '<tr><td>Brochure</td><td> ' . $brocnew . '</td></tr>';
            }
            if($wobblersdata>$wobbnew){
                echo '<tr bgcolor="red"><td><div id = "alert">Wobblers</td><td> <div id = "alert">'.$wobbnew.'</div></td></tr>';
            }else {
                echo '<tr><td>Wobblers</td><td> ' . $wobbnew . '</td></tr>';
            }
            if($tentcarddata>$tentnew){
                echo '<tr bgcolor="red"><td><div id = "alert">TentCards</td><td> <div id = "alert">' . $tentnew . '</div></td></tr>';
            }else {
                echo '<tr><td>TentCards</td><td> ' . $tentnew . '</td></tr>';
            }
            if($othersdata>$othnew){
                echo '<tr bgcolor="red"><td><div id = "alert">Others</td><td> <div id = "alert">' . $othnew. '</div></td></tr>';
            }else{
                echo '<tr><td>Others</td><td> '.$othnew.'</td></tr>';
            }
            //echo '<tr><td>Deployment Status</td><td> '.$rslt['deployment status'].'</td></tr><br>';
            //echo '<tr><td>VM Remarks</td><td> '.$rslt['vm remarks'].'</td></tr><br>';
            //echo '<tr><td>Special Remarks</td><td> '.$rslt['special remarks'].'</td></tr><br>';


            echo'</table>';
            echo'</center>';


     }
    }

            //Getting session data and saving it into variables

            ?>