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

    <title>Edit Beatplan</title>
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
    function getlocation(loctn){
      var strURL="findLoc.php?location="+loctn;
        var req = getXMLHTTP();
        
        if (req) {
            
            req.onreadystatechange = function() {
      
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {                        
                        document.getElementById('locdiv').innerHTML=req.responseText;    

               
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

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <div class="row mt">
            <div class="col-lg-12">
              <!-- BASIC BUTTONS -->
              <div>
              <center>
              <form class="form-horizontal" role="form" action="" method="post" style="padding-left: 0px;">
<?php 
       $host="182.50.133.87";
       $user="communique";
       $pass="umesh0028";

                                        $con = mysql_connect($host, $user, $pass); 
                                        if (!$con) {
                                            die('Could not connect: ' . mysql_error());
                                        }
                                        mysql_select_db('comm_login');
                                        $query="SELECT * FROM region";
                                                 $result=mysql_query($query);
                                        ?>
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
                                              textarea{
                                                resize: none;
                                              }
                                              </style>

                                        <table cellspacing="10" cellpadding="27">
                                        <div class="form-group">
                                            <tr>
                                            <td align="left"><span id="font_style">S.No</span></td>
                                            <td align="left">
                                            <input type="text" style="width:60px;" name="s_no" style="width:40px;" class="form-control input-sm" placeholder="S.No." />
                                            </td>
                                          
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Region</span></td>
                                            <td align="left"><select name="region" onChange="getState(this.value)" class="form-control input-sm">
                                            <option value="">Select Region</option>
                                            <option value="3">North</option>
                                            <option value="1">East</option>
                                            <option value="2">West</option>
                                            <option value="4">South</option>
                                            </select></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">State</span></td>
                                            <td align="left"><div id="statediv"><select name="state" class="form-control input-sm">
                                            <option value="">Select State</option>
                                            </select>
                                            </div>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">City</span></td>
                                            <td align="left"><div id="citydiv"><select name="city" class="form-control input-sm">
                                            <option value="">Select City</option>                                      

                                            </select>
                                             </div>    
                                            </td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Dealer Code</span></td>
                                            <td align="left"><input type="text" name="dealer_code" style="width:230px;" class="form-control input-sm" placeholder="Enter dealer code" /></td>
                                            
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Dealer Name</span></td>
                                            <td align="left"><input type="text" name="dealer_name" style="width:230px;" class="form-control input-sm" placeholder="Enter dealer name"/></td>
                                            
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Address</span></td>
                                            <td align="left"><textarea cols="28" rows="5" name="address" style="width:230px;" class="form-control input-sm" placeholder="Enter address"></textarea></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Location</span></td>
                                            <td align="left">
                                            <div id="locdiv"><select name="location" class="form-control input-sm">
                                            <option value="">Select Location</option>
                                            </select></div></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Store Category</span></td>
                                            <td align="left"><label><select name="sto_ca" style="width:60px;" class="form-control input-sm">
                                            
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            </select></label></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Date</span></td>
                                            <td align="left"><input type="text" name="date" id="datepicker" style="width:230px;" class="form-control input-sm" placeholder="Enter date" /></td>
                                            </tr> 

                                            <tr>
                                            <td align="left"><span id="font_style">VM</span></td>
                                            <td align="left"><input type="text" name="vm" style="width:230px;" class="form-control input-sm" placeholder="Enter VM" /></td>
                                            </tr> 
    

                                            <tr><td></td></tr>
                                            <tr>
                                            <td></td>
                                            <td align="center"><input type="submit" name= "submit" value="Save" class="btn btn-success btn-round btn-sm" />
                                            <input type="reset" value="Reset Form" class="btn btn-warning btn-round btn-sm" />
                                            </td>
                                            </tr>
                                        </table>
                                    
 


                                            </form>

                                            <br />


                                            <form action="?action=submitted" method="POST" enctype="multipart/form-data" style="padding-left: 0px;">
                                            <table cellspacing="10" cellpadding="25" width="640px">
                                            <tr>
                                            <td width="89px"><span >Select a file&nbsp;</span>
                                            </td>
                                            <td align="left">
                                            <input type="file" id="font_style" name="userFile" style="width: 170px;" />
                                            </td>
                                            <td width="10px;"></td>
                                            <td align="left" colspan="2">
                                                <input type="checkbox" name="fileup">Replace File?
                                            <input type="submit" class="btn btn-success btn-sm" value="Upload"/></td>
                                            <td><a class="btn btn-primary btn-sm" href="download.php">Download files</a></td>
                                            <td><a class="btn btn-danger btn-sm" href="delete.php"><i class="fa fa-trash-o"></i>&nbsp;Delete</i> files</a>
                                            </td>
                                            </tr>
                                            </table>
                                            </form>
                                            </center>
<script>
  $(function() {
    
     $( "#datepicker" ).datepicker({
     dateFormat: 'dd-mm-yy',
     yearRange: '1950:2015',
      changeMonth: true,
      changeYear: true
    });
  });
  
</script> 


<br>
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
              <a href="beatplan.php#" class="go-top">
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

<?php


if (isset($_POST['submit'])){
$sno = $_POST['s_no'];
$region = $_POST['region'];
$state = $_POST['state'];
$city = $_POST['city'];
$dealercode = $_POST['dealer_code'];
$dealername = $_POST['dealer_name'];
$address = $_POST['address'];
$location = $_POST['location'];
$storecat = $_POST['sto_ca'];
$date = $_POST['date'];
$vmold = $_POST['vm'];
$vm = ucfirst(strtolower($vmold));
$date=date("Y-m-d",strtotime($date));
if(empty($sno) || empty($region) || empty($state) || empty($city) || empty($dealercode) || empty($dealername) || empty($address) || empty($location) || empty($storecat) || empty($date) || empty($vm)){

echo '<script language="javascript">';
echo 'alert("Please Fill all the Fields")';
echo '</script>';

}else{

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

$reg = mysql_query("SELECT * from region WHERE id=".$_POST['region']);
 $row = mysql_fetch_assoc($reg);
   $region = $row['region'];

  $sta = mysql_query("SELECT * from state WHERE id=".$_POST['state']);
 $row = mysql_fetch_assoc($sta);
 $state = $row['statename'];

  $cit = mysql_query("SELECT * from city WHERE id=".$_POST['city']);
 $row = mysql_fetch_assoc($cit);
   $city  = $row['city'];

$query = mysql_query("INSERT INTO `comm_login`.`beatplan` (`id`, `s.no.`, `region`, `state`, `city`, `dealer code`, `dealer name`, `address`, `location`, `store category`, `date`, `vm`) VALUES (NULL, '$sno', '$region ', '$state', '$city', '$dealercode', '$dealername', '$address', '$location', '$storecat', '$date', '$vm');");

if($query){
    echo '<script language="javascript">';
        echo 'alert("Data Saved Successfully")';
        echo '</script>';
}else{

    echo '<script language="javascript">';
        echo 'alert("Unknown Error Occurred")';
        echo '</script>';

}
}

}

?>


<?php
if($action=="submitted")
{
$errors= array();
$extensions= array(".xls",".xlsx",".doc",".docx",".pdf"); 
 //$file_ext=strtolower(end(explode('.',$_FILES['userFile']['name'])));
 $file_name = $_FILES['userFile']['name'];
  $file_ext=substr($file_name, strrpos($file_name, '.'));
  //var_dump($file_ext);
$info = pathinfo($_FILES['userFile']['name']);
//$tmp=$_FILES['userFile']['tmp_name'];
//$ext = $info['extension']; // get the extension of the file
$target = 'uploads/uploads_masterdata/'.$file_name;
if(!empty($_FILES['userFile']['name']))
{
if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a .xls file.";
         //header("location: masterdata.php?action=error&name=$newname&fe=$file_ext");
echo '<script language="javascript">';
echo 'alert("Please Upload only (xls,pdf,doc)files.")';
echo '</script>';
      }

 //if(file_exists(ROOT_DIR."/uploads/uploads_masterdata/".$_FILES['userFile']['name']))


if(file_exists($target))
{
$errors[]="file already exists";

//<script language="javascript">
//var x = confirm("Selected file already exists.Click OK to replace.");
//document.write(x);
if(isset($_POST['fileup'])){
    unlink($target);
    move_uploaded_file($_FILES['userFile']['tmp_name'], $target);
    echo '<script language="javascript">';
    echo 'alert("File Updated Successfully")';
    echo '</script>';
//$name=$_FILES['userFile']['name'];
//$path=ROOT_DIR."/uploads/uploads_masterdata/".$_FILES['userFile']['name'];
//unlink($target);
//move_uploaded_file($_FILES['userFile']['tmp_name'], $target);
//if(file_exists(ROOT_DIR."/uploads/uploads_masterdata/".$_FILES['userFile']['name']))
//if(file_exists($path)){
//document.write('<?php unlink($target););
//}
//var_dump($tmp);
//document.write(' move_uploaded_file($_FILES['userFile']['tmp_name'], $target); );
//echo '}';
}else{
    echo '<script language="javascript">';
    echo 'alert("File Already Exist and Was Not Updated.")';
    echo '</script>';
}
//echo 'else';
//echo '{';

//echo 'cancelled';
//echo '}';
//<script>

}

 
if(empty($errors)==true){

 //$target = ROOT_DIR.'/uploads/uploads_beatplan/'.$newname;

 move_uploaded_file( $_FILES['userFile']['tmp_name'], $target);
 //if($action=="upload"){
echo '<script language="javascript">';
echo 'alert("File Uploaded")';
echo '</script>';
//header("location: masterdata.php?action=upload");
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
}?> 