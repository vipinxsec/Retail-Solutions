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

    <title>View MasterData</title>

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
      

<script language="javascript" type="text/javascript">

function getXMLHTTP() { //fuction to return the xml http object
        var xmlhttp=false;  
        try{
            xmlhttp=new XMLHttpRequest();
        }
        catch(e)    {       
            try{            
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch(e){
                try{
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                }
                catch(e1){
                    xmlhttp=false;
                }
            }
        }
            
        return xmlhttp;
    }
    
    function getState(regionId) { 

        var strURL="findState.php?region="+regionId;
        var req = getXMLHTTP();
        
        if (req) {
            
            req.onreadystatechange = function() {
       
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {                      
                        document.getElementById('statediv').innerHTML=req.responseText;
                        document.getElementById('citydiv').innerHTML='<select name="city" class="form-control input-sm">'+
                        '<option>Select City</option>'+
                        '</select>';

                       $('#aba').bb('refresh');

                    } else {
                        alert("Problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
        }       
    }
    function getCity(regionId,stateId) {      
      
        var strURL="findCity.php?region="+regionId+"&state="+stateId;
        var req = getXMLHTTP();
        
        if (req) {
            
            req.onreadystatechange = function() {
      
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {                        
                        document.getElementById('citydiv').innerHTML=req.responseText;       
               
                    } else {
                        alert("Problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
        }
                
    }
</script>

<?php

$mysql_hostname = "182.50.133.87"; 
 //your mysql host name
$mysql_user = "communique";         //your mysql user name
$mysql_password = "umesh0028";     //your mysql password
$mysql_database = "comm_login";   //your mysql database

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Error on database connection");  //include of db config file
$query="SELECT * FROM region";
$result=mysql_query($query);

include ('paginate.php');
?>


      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <div class="row mt">
            <div class="col-lg-12">
              <!-- BASIC BUTTONS -->
              <center>
              <div style="height: 100%; width: 100%">
<style>
th
{
color:#0000FF;
background-color:#96B1D0;
}
</style>

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
</style>
<form class="form-horizontal" role="form" method="post" action="" name="form1">
                                             
                                        <table>
                                        <div class="form-group">
                                            <tr>
                                            <td align="left" width="60px"><span id="font_style">Zone</span></td>
                                            <td align="left" width="200px"><select name="region" onChange="getState(this.value)" class="form-control input-sm">
                                            <option value="">Select Zone</option>
                                            <option value="3">North</option>
                                            <option value="1">East</option>
                                            <option value="2">West</option>
                                            <option value="4">South</option>
                                            </select></td>
                                            </tr>
                                            <tr>
                                            <td align="left" width="60px"><span id="font_style">State</span></td>
                                            <td align="left" width="200px"><div id="statediv"><select name="state" class="form-control input-sm">
                                            <option value="">Select State</option>
                                            </select>
                                            </div>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td align="left" width="60px"><span id="font_style">City</span></td>
                                            <td align="left" width="200px"><div id="citydiv"><select name="city" class="form-control input-sm">
                                            <option value="">Select City</option>                              

                                            </select>
                                             </div>    
                                            </td>
                                            </tr>
                                              <tr>
                                            <td></td>
                                            <td align="center"><input type="submit" value="Go!" name="submit" class="btn btn-success" />
                                            </td></tr>
                                            </div>
                                            </table>
                                            </form>
        
               <br>
               <br>
                    <?php

$_SESSION['count']=0;
$ak=0;


if(isset($_POST['submit']) && !empty($_POST['region']) && !empty($_POST['state']) && !empty($_POST['city'])){

        unset($_SESSION['reg']);
        unset($_SESSION['sta']);
        unset($_SESSION['cit']);

 $reg = mysql_query("SELECT * from region WHERE id=".$_POST['region']);
 $row = mysql_fetch_assoc($reg);
 $region = $row['region'];
   
 $sta = mysql_query("SELECT * from state WHERE id=".$_POST['state']);
 $row = mysql_fetch_assoc($sta);
 $state = $row['statename'];

 $cit = mysql_query("SELECT * from city WHERE id=".$_POST['city']);
 $row = mysql_fetch_assoc($cit);
   $city = $row['city'];
$_SESSION['reg'] = $region;
$_SESSION['sta'] = $state;
$_SESSION['cit'] = $city;
$_SESSION['count']=1;
$results = mysql_query("SELECT * FROM uploading_mastexcel WHERE zone='$region' AND state='$state' AND city='$city'");
$row_value = mysql_num_rows($results);
if($row_value==0){
   
    $_SESSION['count']=0;
     $ak = 1;
    echo '<script language="javascript">';
    echo 'alert("No Records Found!")';
    echo '</script>';

    
}

}else{

    $results = mysql_query("SELECT * FROM uploading_mastexcel");
}
if(isset($_POST['submit']) && empty($_POST['region']) && empty($_POST['state']) && empty($_POST['city'])){

        unset($_SESSION['reg']);
        unset($_SESSION['sta']);
        unset($_SESSION['cit']);

    $results = mysql_query("SELECT * FROM uploading_mastexcel");
    $_SESSION['count']=1;

    }


$per_page = 10;
if (isset($_GET['page'])){  
$_SESSION['count']=1;
if(!empty($_SESSION['reg']) && !empty($_SESSION['sta']) && !empty($_SESSION['cit'])){
 $reg = $_SESSION['reg'];
 $sta = $_SESSION['sta'];
 $cit = $_SESSION['cit'];
$results = mysql_query("SELECT * FROM uploading_mastexcel WHERE zone='$reg' AND state='$sta' AND city='$cit'");
}else{

    $results = mysql_query("SELECT * FROM uploading_mastexcel");
}
// number of results to show per page

}

$total_results = mysql_num_rows($results);
$total_pages = ceil($total_results / $per_page);//total pages we going to have

$show_page=1;
$page=1;

//-------------if page is setcheck------------------//
if (isset($_GET['page'])) {
    $show_page = $_GET['page'];             //it will telles the current page
    if ($show_page > 0 && $show_page <= $total_pages) {
        $start = ($show_page - 1) * $per_page;
        $end = $start + $per_page;
    } else {
        // error - show first set of results
        $start = 0;            
        $end = $per_page;
    }
} else {
    // if page isn't set, show first set of results
    $start = 0;
    $end = $per_page;
}
// display pagination


$tpages=$total_pages;
if ($page <= 0)
    $page = 1;

if($_SESSION['count']==1 && $ak==0){
                    // display data in table
                    echo '<table class="table table-bordered table-striped table-condensed" style="overflow: auto; background-color: #ffffe5;">';
                    echo '<thead>
        <tr>
        <th>S.no</th>
        
          <th>Zone</th>
          <th>State</th>
          <th>Branch</th>
          <th>City</th>
          <th>Distributor Code</th>
          <th>Distributor Name</th>
          <th>Dealer Code</th>
          <th>Dealer Name</th>
          <th>Address</th>
          <th>Sale Value</th>
          <th>Contact Person</th>
          <th>Contact No.</th>
          
        </tr>
      </thead>';
                    // loop through results of database query, displaying them in the table 
                    for ($i = $start; $i < $end; $i++) {
                        // make sure that PHP doesn't try to show results that don't exist
                        if ($i == $total_results) {
                            break;
                        }
                        // echo out the contents of each row into a table
                        echo '<tbody>';
                        echo '<td>' . mysql_result($results, $i, 'id') . '</td>';
                        echo '<td>' . mysql_result($results, $i, 'zone') . '</td>';
                        echo '<td>' . mysql_result($results, $i, 'state') . '</td>';
                        echo '<td>' . mysql_result($results, $i, 'branch') . '</td>';
                        echo '<td>' . mysql_result($results, $i, 'city') . '</td>';
                        echo '<td>' . mysql_result($results, $i, 'distributor code') . '</td>';
                        echo '<td>' . mysql_result($results, $i, 'distributor name') . '</td>';
                        echo '<td>' . mysql_result($results, $i, 'dealer code') . '</td>';
                        echo '<td>' . mysql_result($results, $i, 'dealer name') . '</td>';
                        echo '<td>' . mysql_result($results, $i, 'address') . '</td>';
                        echo '<td>' . mysql_result($results, $i, 'as per sale value') . '</td>';
                        echo '<td>' . mysql_result($results, $i, 'contact person') . '</td>';
                        echo '<td>' . mysql_result($results, $i, 'contact no') . '</td>';
                        echo "</tbody>";
                    }       
                    // close table>
                echo "</table>";

            // pagination
            ?>
        
              <?php
                    $reload = $_SERVER['PHP_SELF'] . "?tpages=" . $tpages;
                    echo '<div class="pagination"><ul>';
                    if ($total_pages > 1) {

                        echo '<a href="'.$_SERVER['PHP_SELF'].'?page='.(1).'">First</a>';
                        echo paginate($reload, $show_page, $total_pages);
                        echo '<a href="'.$_SERVER['PHP_SELF'].'?page='.$total_pages.'">Last</a>';
                    }

                    ?>

                    <?php
                    
                    echo '</ul></div>';
                    echo '<div class="wrapper">';
                    echo '<a href="export_masterdata.php" id="export" type="button" class="btn btn-info">Export</a>';
                    echo '</div>';
}
     
                    ?>
          </div>
          <br>

          <br>
<style type="text/css">
.pagination{
    text-align: center!important;
}
th,td{
                border-width:0px 1px 1px 0px;
                text-align: center;
            }
            th
            {
                background-color: #ccffff;
                color: #063770;
            }
            #myTable {
                margin-top: 0px;
                margin-left: 0px;
            }
            #alert {
                color: black;
            }
             .wrapper {
                text-align: center;
              }
            #export{
              position: absolute;
              margin-top: -50px;
            }
           

        </style> 

</style>

        

              </div><!-- /showback -->
              </center>
              
            
            </div><!-- /col-lg-6 -->
            
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
