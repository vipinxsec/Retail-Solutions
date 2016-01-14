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

    <title>MasterData</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
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
	  
<style>
textarea{
resize: none;
}
</style>
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
	  
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      		<div class="row mt">
      			<div class="col-lg-12">
      				<!-- BASIC PROGRESS BARS -->
              
      				<div>
              <center>
              <form class="form-horizontal" role="form" method="post" action="" name="form1" style="padding-left: 0px;">
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
</style>
						<table cellspacing="10" cellpadding="25">
                            <div class="form-group">
                                            <td align="left"><span id="font_style">S.No</span></td>
                                            <td align="left"><input type="text" name="s_no" class="form-control input-sm" placeholder="S.No." style="width:60px;" /></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Region</span></td>
                                            <td align="left"><select name="region" onchange="getState(this.value)" class="form-control input-sm">
                                            <option value="">Select Region</option>
                                            <?php
                                            while ($row=mysql_fetch_array($result)) { ?>
                                               <option value=<?php echo $row['id']?>><?php echo $row['region']?></option>
                                                                                            <?php } ?>
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
                                            <td align="left"><input type="text" name="dealer_code" class="form-control input-sm" placeholder="Enter dealer code" style="width:230px;" /></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Dealer Name</span></td>
                                            <td align="left"><input type="text" name="dealer_name" class="form-control input-sm" placeholder="Enter dealer name" style="width:230px;"/></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Address</span></td>
                                            <td align="left"><textarea rows="4" class="form-control input-sm" name="address" placeholder="Enter Address" rows="5"></textarea></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Location</span></td>
                                            <td align="left"><select name="location" class="form-control input-sm">
                                            <option>Select Location</option>
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
                                            <tr>
                                            <td align="left"><span id="font_style">Store Category</span></td>
                                            <td align="left"><select name="sto_ca" style="width:60px;" class="form-control input-sm">
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            </select></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Contact Person</span></td>
                                            <td align="left"><input type="text" class="form-control input-sm" placeholder="Enter contact person" name="contact_person" style="width:230px;" />
                                            </td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Contact No.</span></td>
                                            <td align="left"><input type="text" class="form-control input-sm" name="contact_no" placeholder="Enter contact No." style="width:230px;" /></td>
                                            </tr>
                                             
                                            <tr><td></td></tr>
                                            <tr>
                                            <td></td>
                                            <td><input type="submit" value="Save" name="submit" class="btn btn-success btn-round btn-sm" onclick="validate();" />
                                            <input type="reset" class="btn btn-primary btn-round btn-sm" value="Reset" />
                                            </td>
                                            </tr>
                                        </table>
                                        
                                            </form>
                                            <br />
                                            <form action="?action=submitted" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" style="padding-left: 0px;">
                                            <table cellspacing="10" cellpadding="25" width="640px">
                                            <tr>
                                            <td width="89px"><div>Select a file&nbsp;</div>
                                            </td>
                                            <td align="left">
                                            <input type="file" id="font_style" name="userFile" style="width: 170px;" />
                                            </td>
                                            <td align="left" colspan="2">
                                                <input type="checkbox" name="fileup">Replace File?&nbsp
                                            <input type="submit" class="btn btn-success btn-sm" value="Upload"/></td>
                                            <td><a class="btn btn-primary btn-sm" href="download.php">Download files</a></td>
                                           <td> <a class="btn btn-theme04 btn-sm" href="delete.php"><i class="fa fa-trash-o"></i>&nbsp;Delete files</a>
                                            </td>
                                            </tr>
                                            </table>
                                            </div>
                                            </form>
      					</center>

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
$contactper = $_POST['contact_person'];
$contactno = $_POST['contact_no'];


if(empty($sno) || empty($region) || empty($state) || empty($city) || empty($dealercode) || empty($dealername) || empty($address) || empty($location) || empty($storecat) || empty($contactper) || empty($contactno) ){

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
   
$query = mysql_query("INSERT INTO `comm_login`.`masterdata` (`id`, `s.no.`, `region`, `state`, `city`, `dealer code`, `dealer name`, `address`, `location`, `category`, `contact person`, `contact no.`) VALUES (NULL, '$sno', '$region ', '$state', '$city', '$dealercode', '$dealername', '$address', '$location', '$storecat', '$contactper', '$contactno');");

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
if(!empty($_FILES['userFile']['name'])){
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

 //$target = ROOT_DIR.'/uploads/uploads_masterdata/'.$newname;

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
}else
echo '<script language="javascript">';
echo 'alert("Please Select a File")';
echo '</script>';
}
?>
                    </div><!-- /showback -->
      			
      			</div><!-- /col-lg-6 -->
      			
      		</div><!--/ row -->
          </section><!--/wrapper -->
          <br>
          <br>
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="navbar-fixed-bottom site-footer">
          <div class="text-center">
              <a href="http://www.gbusolutions.com">GBU SOLUTIONS</a>
              <a href="masterdata.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jjquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
