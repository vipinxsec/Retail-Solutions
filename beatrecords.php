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

    <title>Beat Records</title>
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
              <div align="center">
              <h2>Records </h2>
<br>
          <form method="post">
          
                 <div class="row">
                <div class="col-lg-3 col-lg-offset-4" style="margin-left: 510px;">                      
          <div class="input-group input-daterange">
    <input type="text" class="form-control" name="startdate" placeholder="From Date" value="">
    <span class="input-group-addon">to</span>
    <input type="text" class="form-control" name="enddate" placeholder="To Date" value="">
    
               </div>
        </div>
</div><br>
<label> <select name="vmname" id="vmname" onchange="setTextField(this)" class="form-control input-sm">
  <option value="">Select VM</option>
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

  $result = mysql_query("SELECT * FROM `beatplan`" );
  while ($row=mysql_fetch_array($result)) { ?>
<option value=<?php $ab = ucfirst(strtolower($row['vm'])); echo $ab; ?>><?php $ab = ucfirst(strtolower($row['vm'])); echo $ab; ?></option>
<?php } ?>
  
</select>
<input id="make_text" type = "hidden" name = "make_text" value = "" />
</label><br><br>
 <button class="btn btn-success" name="submit" type="submit" id="submit">Go!</button>

<br>
</form>
<script type="text/javascript">
    function setTextField(ddl) {
        document.getElementById('make_text').value = ddl.options[ddl.selectedIndex].text;
    }
</script>
<br>
<script src="js/bootstrap-datepicker.js"></script>
          <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('.input-daterange').datepicker({
                    todayBtn: "linked",
                    format:'dd-mm-yyyy'
                });
            $('.input-daterange').on('change', function(){
                $('.datepicker').hide();
                });
            });

        </script>

  <script type="text/javascript">
        $(document).ready(function () {
    var usedNames = {};
    $("select > option").each(function () {
        if (usedNames[this.value]) {
            $(this).remove();
        } else {
            usedNames[this.value] = this.text;
        }
    });
});
        </script>
<script src="http://code.jquery.com/jquery-1.11.3.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>
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
      $result = mysql_query("DELETE FROM beatplan WHERE id =".$_GET['id']);

  }
      
      ?>

<br>

      <table border="2" class="table table-bordered table-striped table-condensed" style="overflow: auto">
      <thead style="color:#063770; background-color:#96B1D0;">
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
          <th>Date</th>
          <th>VM</th>
     

        </tr>
      </thead>
      <tbody>
     
<?php
if (isset($_POST['submit'])){

  $vmnew = $_POST['make_text'];

 if(empty($_POST['vmname']) && empty($_POST['startdate']) && empty($_POST['enddate'])){
echo '<script language="javascript">';
  echo 'alert("Please Enter Atleast One Field !")';
      echo '</script>';
 }
}
  ?>
       <?php
if (isset($_POST['submit'])){
 if(!empty($_POST['vmname']) && empty($_POST['startdate']) && empty($_POST['enddate'])){

            $vm = $_POST['vmname'];
            
           if($result = mysql_query("SELECT * FROM beatplan WHERE `vm`= '$vmnew'")){
           if(mysql_num_rows($result)>0){
          while( $row = mysql_fetch_assoc( $result ) ){
                        $tabledate = $row['date'];
                        $formatteddate = date("d-m-Y", strtotime($tabledate));
            
            echo '<tr>';
            ?>

            <td><b><a href="javascript:void(0)" onclick="window.open('popupb.php?id=<?php echo $row['id']; ?>', 'View','width=350,height=250,menubar=yes,status=yes')">View Record</a></b></td>
            <td><b><a href="?id=<?php echo $row['id'];?>" onclick="javascript: return confirm('Are you SURE you want to delete this?');">Delete</a></b></td>
              
        <?php
              echo '<td>'.$row['s.no.'].'</td>';
              echo'<td>'.$row['region'].'</td>';
              echo'<td>'.$row['state'].'</td>';
              echo'<td>'.$row['city'].'</td>';
              echo'<td>'.$row['dealer code'].'</td>';
              echo'<td>'.$row['dealer name'].'</td>';
              echo'<td>'.$row['address'].'</td>';
              echo'<td>'.$row['location'].'</td>';
              echo'<td>'.$row['store category'].'</td>';
              echo '<td>'.$formatteddate.'</td>';
              echo '<td>'.$row['vm'].'</td>';
             
            echo '</tr>';
          }
        

        }else{
         echo '<script language="javascript">';
          echo 'alert("No Records Found")';
          echo '</script>';
        }

        }
      }
    }
        ?>


        <?php
        if(isset($_POST['submit'])){
        if (!empty($_POST['startdate']) && !empty($_POST['enddate']) && empty($_POST['vmname'])){
          $startdateold = $_POST['startdate'];
             $enddateold = $_POST['enddate'];

          $startdate = date("Y-m-d", strtotime($startdateold));
             $enddate = date("Y-m-d", strtotime($enddateold));
 
           if($result = mysql_query("SELECT * FROM beatplan WHERE date BETWEEN '$startdate' AND '$enddate' ORDER by id DESC")){
           if(mysql_num_rows($result)>0){
          while( $row = mysql_fetch_assoc( $result ) ){
                        $tabledate = $row['date'];
                        $formatteddate = date("d-m-Y", strtotime($tabledate));
            
            echo '<tr>';
            ?>

            <td><b><a href="javascript:void(0)" onclick="window.open('popupb.php?id=<?php echo $row['id']; ?>', 'View','width=350,height=250,menubar=yes,status=yes')">View Record</a></b></td>
            <td><b><a href="?id=<?php echo $row['id'];?>" onclick="javascript: return confirm('Are you SURE you want to delete this?');">Delete</a></b></td>
              
        <?php
              echo '<td>'.$row['s.no.'].'</td>';
              echo'<td>'.$row['region'].'</td>';
              echo'<td>'.$row['state'].'</td>';
              echo'<td>'.$row['city'].'</td>';
              echo'<td>'.$row['dealer code'].'</td>';
              echo'<td width="170px;">'.$row['dealer name'].'</td>';
              echo'<td width="170px;">'.$row['address'].'</td>';
              echo'<td>'.$row['location'].'</td>';
              echo'<td width="10px;">'.$row['store category'].'</td>';
              echo '<td width="85px;">'.$formatteddate.'</td>';
              echo '<td>'.$row['vm'].'</td>';
             
            echo '</tr>';
          }
        

        }else{
          echo '<script language="javascript">';
         echo 'alert("No Records Found")';
         echo '</script>';
        }

        }
      }
    }
        ?>

        <?php
        if(isset($_POST['submit'])){
        if (!empty($_POST['startdate']) && !empty($_POST['enddate']) && !empty($_POST['vmname'])){
          $startdateold = $_POST['startdate'];
             $enddateold = $_POST['enddate'];
            $vm = $_POST['vmname'];
          $startdate = date("Y-m-d", strtotime($startdateold));
             $enddate = date("Y-m-d", strtotime($enddateold));
 
           if($result = mysql_query("SELECT * FROM beatplan WHERE `vm`='$vmnew' AND date BETWEEN '$startdate' AND '$enddate' ORDER by id DESC")){
           if(mysql_num_rows($result)>0){
          while( $row = mysql_fetch_assoc( $result ) ){
                        $tabledate = $row['date'];
                        $formatteddate = date("d-m-Y", strtotime($tabledate));
            
            echo '<tr>';
            ?>

            <td><b><a href="javascript:void(0)" onclick="window.open('popupb.php?id=<?php echo $row['id']; ?>', 'View','width=350,height=250,menubar=yes,status=yes')">View Record</a></b></td>
            <td><b><a href="?id=<?php echo $row['id'];?>" onclick="javascript: return confirm('Are you SURE you want to delete this?');">Delete</a></b></td>
              
        <?php
              echo '<td>'.$row['s.no.'].'</td>';
              echo'<td>'.$row['region'].'</td>';
              echo'<td>'.$row['state'].'</td>';
              echo'<td>'.$row['city'].'</td>';
              echo'<td>'.$row['dealer code'].'</td>';
              echo'<td width="170px;">'.$row['dealer name'].'</td>';
              echo'<td width="170px;">'.$row['address'].'</td>';
              echo'<td>'.$row['location'].'</td>';
              echo'<td width="10px;">'.$row['store category'].'</td>';
              echo '<td width="85px;">'.$formatteddate.'</td>';
              echo '<td>'.$row['vm'].'</td>';
             
            echo '</tr>';
          }
        

        }else{
          echo '<script language="javascript">';
          echo 'alert("No Records Found")';
          echo '</script>';
        }

        }
      }
    }
        ?>
      </tbody>
    </table>
    
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
     <?php mysql_close($connector); ?>
     <br>
     <br>
     <br>
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
