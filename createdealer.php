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
  <script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.5/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="all-ie-only.css" />
<script type="application/javascript">
$(document).ready(function()
{
    $(".tab").click(function()
	{
		var X=$(this).attr('id');
		if(X=='contact'){
		$("#outlet").removeClass('select');
		$("#contact").addClass('select');
		$("#outletbox").slideUp();
		$("#contactbox").slideDown();
		}
		else{
		$("#contact").removeClass('select');
		$("#outlet").addClass('select');
		$("#contactbox").slideUp();
		$("#outletbox").slideDown();
		}
 	});
});
</script>
<script type="text/javascript">
   $(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                var mobile=document.getElementById("mob").value;
                var phone=document.getElementById("phn").value;
                var fax=document.getElementById("fax").value;
                var email=document.getElementById("mail").value;
                var website=document.getElementById("web").value;
                var remarks=document.getElementById("rem").value;
                $('#mob2').val(mobile);
                $('#phn2').val(phone);
                $('#fax2').val(fax);
                $('#mail2').val(email);
                $('#web2').val(website);
                $('#rem2').val(remarks);
            }
            else if($(this).prop("checked") == false){
                $('#mob2').val("");
                $('#phn2').val("");
                $('#fax2').val("");
                $('#mail2').val("");
                $('#web2').val("");
                $('#rem2').val("");
            }
        });
    });
</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Create Dealer</title>
	<link rel="stylesheet" href="assets/css/datepicker.css">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="all-ie-only.css" />
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

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
width: 120px;
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
<script type="text/javascript">
  function copyval(locvalue)
  {
    var x=$('#locate :selected').text();
    $('#loc').val(x);
  }
</script>

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div align="center">
                  	  <div id="con">
<div id="tabbox">
<a href="#" id="outlet" class="tab select">Outlet Info</a>
<a href="#" id="contact" class="tab outlet">Contact Persons</a>
</div>
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
<div id="panel">
<div id="outletbox">
    
                                            
                                        <form action="?action=formsubmit" method="post">
                                        <table cellspacing="10" cellpadding="27">
                                        <div class="form-group">
                                            <tr>
                                            <td align="left"><span id="font_style">Name</span></td>
                                            <td align="left"><input type="text" name="name" style="width:230px;" class="form-control input-sm" placeholder="Enter Name" /></td>
                                            <td width="20px;"></td>
                                            <td align="left"><span id="font_style">Type</span></td>
                                            <td align="left"><select name="type" style="width:230px;" class="form-control input-sm">
                                            <!--<td align="left"><label><select name="type" style="width:230px;" onchange="getCategory(this.value)">-->
                                            
                                            <option value="">Select a type</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            </select></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Address</span></td>
                                            <td align="left"><textarea cols="28" rows="3" name="address" style="width:230px;" class="form-control input-sm" placeholder="Enter address"></textarea></td>
                                            <td width="20px;"></td>
                                            <td align="left"><span id="font_style">category</span></td>
                                            <td align="left"><select name="category" style="width:230px;" id="category" class="form-control input-sm">
                                            
                                            <option value="">Select a category</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            </select></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Overall retail category</span></td>
                                            <td align="left"><select name="or_cat" style="width:230px;" class="form-control input-sm">
                                            
                                            <option value="">Select a category</option>
                                            <option value="N/A">N/A</option>
                                            </select></td>
                                            <td width="20px;"></td>
                                            <td align="left"><span id="font_style">Status</span></td>
                                            <td align="left"><select name="status" style="width:230px;" class="form-control input-sm">
                                            
                                            <option value="">Select a status</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                            </select></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Retail category</span></td>
                                            <td align="left"><select name="retail_cat" style="width:230px;" class="form-control input-sm">
                                            
                                            <option value="">Select a category</option>
                                            <option value="N/A">N/A</option>
                                            </select></td>
                                            <td width="20px;"></td>
                                            <td align="left"><span id="font_style">Dealer Area</span></td>
                                            <td align="left"><input type="text" name="dealer_area" style="width:230px;" class="form-control input-sm" placeholder="Enter dealer area" /></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Dealer Code</span></td>
                                            <td align="left"><input type="text" name="dealer_code" style="width:230px;" class="form-control input-sm" placeholder="Enter dealer code" /></td>
                                            <td width="20px;"></td>
                                            <td align="left"><span id="font_style">Mobile</span></td>
                                            <td align="left"><input type="text" id="mob" name="mobile" style="width:230px;" class="form-control input-sm" placeholder="Enter mobile no." /></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Zone</span></td>
                                            <td align="left"><select name="region" onChange="getState(this.value)" class="form-control input-sm">
                                            <option value="">Select Zone</option>
                                            <option value="3">North</option>
                                            <option value="1">East</option>
                                            <option value="2">West</option>
                                            <option value="4">South</option>
                                            </select></td>
                                            <td width="20px;"></td>
                                            <td align="left"><span id="font_style">Phone</span></td>
                                            <td align="left"><input type="text" id="phn" name="phone" style="width:230px;" class="form-control input-sm" placeholder="Enter phone" /></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">State</span></td>
                                            <td align="left"><div id="statediv"><select name="state" class="form-control input-sm">
                                            <option value="">Select State</option>
                                            </select>
                                            </div>
                                            </td>
                                            <td width="20px;"></td>
                                            <td align="left"><span id="font_style">Fax no.</span></td>
                                            <td align="left"><input type="text" id="fax" name="fax" style="width:230px;" class="form-control input-sm" placeholder="Enter fax no." /></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">City</span></td>
                                            <td align="left"><div id="citydiv"><select name="city" onChange="getlocation(this.value)" class="form-control input-sm">
                                            <option value="">Select City</option>                                      

                                            </select>
                                             </div>    
                                            </td>
                                            <td width="20px;"></td>
                                            <td align="left"><span id="font_style">Email id-1</span></td>
                                            <td align="left"><input type="text" id="mail" name="email" style="width:230px;" class="form-control input-sm" placeholder="Enter email id" /></td>
                                            </tr>
                                            
                                            <tr>
                                            <td align="left"><span id="font_style">Location</span></td>
                                            <td align="left">
                                            <div id="locdiv"><select name="locations" class="form-control input-sm" onChange="copyval(this.text)" id="locate">
                                            <option value="">Select Location</option>
                                            </select>
                                            </div></td>
                                            <td width="20px;"></td>
                                            <td align="left"><span id="font_style">Website http://</span></td>
                                            <td align="left"><input type="text" id="web" name="website" style="width:230px;" class="form-control input-sm" placeholder="Enter website" /></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Location</span></td>
                                            <td align="left"><input type="text" name="location" style="width:230px;" class="form-control input-sm" placeholder="Enter location" id="loc" /></td>
                                            <td width="20px;"></td>
                                            <td align="left"><span id="font_style">Remarks</span></td>
                                            <td align="left"><textarea cols="28" id="rem" rows="3" name="remarks" style="width:230px;" class="form-control input-sm" placeholder="Enter remarks"></textarea></td>
                                            </tr>
                                            
                                            <tr>
                                            <td align="left"><span id="font_style">Pin Code</span></td>
                                            <td align="left"><input type="text" name="pin_code" style="width:230px;" class="form-control input-sm" placeholder="Enter pincode" /></td>
                                            </tr>
                                            <tr><td></td><td></td></tr>
                                            <tr>
                                                <td colspan="5" align="center">
                                                    <input type="submit" name= "submit" value="Save" class="btn btn-success btn-round btn-sm" />
                                            
                                            <input type="button" name="submit" value="Save and new" class="btn btn-primary btn-round btn-sm">
                                            <input type="button" value="Cancel" onClick="history.back();" class="btn btn-danger btn-round btn-sm" />
                                            <a class="btn btn-danger btn-round btn-sm"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>
                                                </td>
                                            </tr>
                                            </div>
                                        </table>
                                        </form>
                                                
</div>
<div id="contactbox">

                                        <form method="post" action="?action=addperson">
                                        <table cellspacing="10" cellpadding="27">
                                        <div class="form-group">
                                        <tr><td></td><td></td><td width="20px;"></td>
                                        <td colspan="2" align="left"><input id=cdata type="checkbox" name="copydata" >Copy details from Outlet Info tab</td>
                                        </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Contact Name</span></td>
                                            <td align="left"><input type="text" name="contactname" style="width:230px;" name="contact_name" class="form-control input-sm" placeholder="Enter Name" /></td>
                                            <td width="25px;"></td>
                                            <td align="left"><span id="font_style">Phone</span></td>
                                            <td align="left"><input type="text" id="phn2" name="phn_no" style="width:230px;" name="phone" class="form-control input-sm" placeholder="Enter phone" /></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Designation</span></td>
                                            <td align="left"><select name="designation" style="width:230px;" id="category" class="form-control input-sm">
                                            
                                            <option value="">Select a designation</option>
                                            <option value="Admin">Admin</option>
                                            <option value="LM">LM</option>
                                            <option value="Manager">Manager</option>
                                            <option value="RMC">RMC</option>
                                            <option value="RSM">RSM</option>
                                            <option value="VM">VM</option>
                                            </select></td>
                                            <td width="25px;"></td>
                                            <td align="left"><span id="font_style">Mobile No.</span></td>
                                            <td align="left"><input type="text" id="mob2" name="mob_no" style="width:230px;" name="phone" class="form-control input-sm" placeholder="Enter mobile" /></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td width="25px;"></td>
                                            <td align="left"><span id="font_style">Fax No.</span></td>
                                            <td align="left"><input type="text" id="fax2" name="fax_no" style="width:230px;" name="phone" class="form-control input-sm" placeholder="Enter fax" /></td>
                                            </tr>
                                            <tr>
                                            <td><b>Personal Info</b></td>
                                            <td></td>
                                            <td width="25px;"></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Date of birth</span></td>
                                            <td align="left"><input type="text" name="dob"style="width:230px;" id="datepicker"class="form-control input-sm" placeholder="Enter date" /></td>
                                            <td width="25px;"></td>
                                            <td align="left"><span id="font_style">Email id</span></td>
                                            <td align="left"><input type="text" id="mail2" name="email_id" style="width:230px;" class="form-control input-sm" placeholder="Enter email ID" /></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Anniversary</span></td>
                                            <td align="left"><input type="text" name="ann_date" style="width:230px;" id="datepicker2" class="form-control input-sm" placeholder="Enter date" /></td>
                                            <td width="25px;"></td>
                                            <td align="left"><span id="font_style">Website http://</span></td>
                                            <td align="left"><input type="text" id="web2" name="p_website" style="width:230px;" class="form-control input-sm" placeholder="Enter Website" /></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Address</span></td>
                                            <td align="left"><textarea cols="28" rows="3" name="p_address" style="width:230px;" class="form-control input-sm" placeholder="Enter address" ></textarea></td>
                                            <td width="25px;"></td>
                                            <td align="left"><span id="font_style">Remarks</span></td>
                                            <td align="left"><textarea cols="28" id="rem2" rows="3" name="remarks" style="width:230px;" class="form-control input-sm" placeholder="Enter Remarks" ></textarea></td>
                                            </tr>
                                            <tr><td></td><td></td><td width="20px;"></td></tr>
                                            <tr>
                                            <td colspan="5" align="center">
                                                <input type="submit" name="submit" value="Add Contact Person" class="btn btn-success btn-sm">
                                            <input type="reset" value="Reset" class="btn btn-warning btn-sm" />
                                            </td>
                                            </tr>
                                            </div>
                                        </table> 
                                        </form>                                 
         </div>
		 </div>
		 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
  $(function() {
    
     $( "#datepicker" ).datepicker({
     dateFormat: 'dd-mm-yy',
     yearRange: '1950:2015',
      changeMonth: true,
      changeYear: true
    });
     $( "#datepicker2" ).datepicker({
     dateFormat: 'dd-mm-yy',
     yearRange: '1950:2015',
      changeMonth: true,
      changeYear: true
    });
  });
  
</script>


<br>
<br>
          			</div><!-- /form-panel -->
          		</div><!-- /col-lg-12 -->
          	</div><!-- /row -->

		</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="navbar-fixed-bottom site-footer">
          <div class="text-center">
              <a href="http://www.gbusolutions.com">GBU SOLUTIONS</a>
              <a href="createdealer.php#" class="go-top">
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


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="assets/js/form-component.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>

<?php
if ($action=="formsubmit"){
$name = $_POST['name'];
$type = $_POST['type'];
$address = $_POST['address'];
$category = $_POST['category'];
$or_cat = $_POST['or_cat'];
$status = $_POST['status'];
$retail_cat = $_POST['retail_cat'];
$dealer_area = $_POST['dealer_area'];
$dealer_code = $_POST['dealer_code'];
$mobile = $_POST['mobile'];
$phone = $_POST['phone'];
$fax = $_POST['fax'];
$email = $_POST['email'];
$website = $_POST['website'];
$location = $_POST['location'];
$remarks = $_POST['remarks'];
$pincode = $_POST['pin_code'];
if(empty($name) || empty($type) || empty($address) || empty($category) || empty($or_cat) || empty($status) || empty($retail_cat) || empty($dealer_area) || empty($dealer_code) || empty($phone) || empty($fax) || empty($email) || empty($website) || empty($location) || empty($remarks) || empty($pincode)){

echo '<script language="javascript">';
echo 'alert("Please Fill all the Fields")';
echo '</script>';

}else{

       $host="182.50.133.87";
       $user="communique";
       $pass="umesh0028";

 //Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect($host, $user, $pass);
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

$query = mysql_query("INSERT INTO `comm_login`.`outlet` (`id`, `name`, `type`, `address`, `category`, `or_category`, `status`, `retail_category`, `dealer_area`, `dealer_code`, `mobile`, `zone`, `phone`, `state`, `fax`, `city`, `email`, `location`, `website`, `remarks`, `pincode`) VALUES (NULL, '$name', '$type', '$address', '$category', '$or_cat', '$status', '$retail_cat', '$dealer_area', '$dealer_code', '$mobile', '$region', '$phone', '$state', '$fax', '$city', '$email', '$location', '$website', '$remarks', '$pincode')");

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


if ($action=="addperson"){
$cname = $_POST['contactname'];
$phn = $_POST['phn_no'];
$designation = $_POST['designation'];
$mob = $_POST['mob_no'];
$fax_no = $_POST['fax_no'];
$dobold = $_POST['dob'];
$emailid = $_POST['email_id'];
$ann_dateold = $_POST['ann_date'];
$p_web = $_POST['p_website'];
$p_add = $_POST['p_address'];
$remarks = $_POST['remarks'];

if(empty($cname) || empty($phn) || empty($designation) || empty($mob) || empty($fax_no) || empty($dobold) || empty($emailid) || empty($ann_dateold) || empty($p_web) || empty($p_add) || empty($remarks)){

echo '<script language="javascript">';
echo 'alert("Please Fill all the Fields")';
echo '</script>';

}else{

       $host="182.50.133.87";
       $user="communique";
       $pass="umesh0028";
$dob=date("Y-m-d",strtotime($dobold));
$ann=date("Y-m-d",strtotime($ann_dateold));
 //Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect($host, $user, $pass);
$db = mysql_select_db("comm_login");
$query = mysql_query("INSERT INTO `comm_login`.`person` (`id`, `contact_name`, `phone`, `designation`, `mobile`, `fax`, `dob`, `email`, `anniversary`, `website`, `address`, `remarks`) VALUES (NULL, '$cname', '$phn', '$designation', '$mob', '$fax_no', '$dob', '$emailid', '$ann', '$p_web', '$p_add', '$remarks');");

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