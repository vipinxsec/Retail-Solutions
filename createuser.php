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
  <script>
function checkAvailability() {
    $("#loader").show();
    jQuery.ajax({
    url: "check_availability.php",
    data:'username='+$("#username").val(),
    type: "POST",
    success:function(data){
        $("#user-availability-status").html(data);
        $("#loader").hide();
    },
    error:function (){}
    });
}
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Create User</title>
    
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
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

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
	  
<!-- Date picker-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<?php 
       $host="182.50.133.87";
       $user="communique";
       $pass="umesh0028";
$con = mysql_connect($host, $user, $pass); 
if (!$con) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('comm_login');
$query="SELECT * FROM user_desig";
$result=mysql_query($query);
?>
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
    
    function getDesig(desigId) { 

        var strURL="findDesig.php?designation="+desigId;
        var req = getXMLHTTP();
        
        if (req) {
            
            req.onreadystatechange = function() {
       
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {                      
                        document.getElementById('reportdiv').innerHTML=req.responseText;
                        //document.getElementById('citydiv').innerHTML='<select name="city">'+
                        //'<option>Select City</option>'+
                        //'</select>';

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
          	
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div align="center">
                  	  <form class="form-horizontal" role="form" action="?action=formsubmit" method="post" style="overflow: auto; margin-left: 8px; padding-left: 70px;">
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
                                              .object_ok
                                                {
                                                border: 1px solid green; 
                                                color: #333333; 
                                                }

                                               .object_error
                                                {
                                                border: 1px solid #AC3962; 
                                                color: #333333; 
                                                }
                                                .status-available{color:#007500;}
                                                .status-not-available{color:#D60202;}
												textarea{
												resize:none;
												}
                                              </style>
                                    
                                    <table width="700px">
                                    <tbody>
                                    <tr>
                                    <td style="width: 70%; float: left;">
                                    <table cellspacing="10" cellpadding="27">
                                        <div class="form-group">
                                            <tr>
                                            <td align="left"><span id="font_style">Name</span></td>
                                            <td align="left">
                                            <input type="text" name="name" class="form-control input-sm" placeholder="Enter name" >
                                            </td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Designation</span></td>
                                            <td align="left"><select name="designation" onChange="getDesig(this.value)" class="form-control input-sm">
                                            <option value="">Select a designation</option>
                                            <?php
                                            while ($row=mysql_fetch_array($result)) { ?>
                                               <option value=<?php echo $row['id']?>><?php echo $row['designation']?></option>
                                                                                            <?php } ?>
                                            </select></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Department</span></td>
                                            <td align="left"><select name="department" class="form-control input-sm">
                                            <option value="">Select a department</option>
                                            <option>Admin</option>
                                            <option>Marketing</option>
                                            <option>Sales</option>
                                            <option>VM</option>
                                            </select>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Role</span></td>
                                            <td align="left"><select name="role" class="form-control input-sm">
                                            <option value="">Select a role</option>
                                            <option>Admin</option>
                                            <option>Manager</option>
                                            <option>RMC/RSM</option>
                                            <option>Executive</option>
                                            <option>Coordinator</option>
                                            <option>VM</option>
                                            </select>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Reporting person</span></td>
                                            <td align="left"><div id="reportdiv"><select name="report_person" class="form-control input-sm">
                                            <option value="">Select a reporting person</option>
                                            </select>
                                            </div>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">E-mail</span></td>
                                            <td align="left"><input type="email" name="email" style="width:230px;" class="form-control input-sm" placeholder="Enter E-mail address" /></td>
                                            
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Mobile Number</span></td>
                                            <td align="left"><input type="text" name="mobile" style="width:230px;" class="form-control input-sm" placeholder="Enter mobile no." /></td>
                                            
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Address</span></td>
                                            <td align="left"><textarea cols="28" rows="4" name="address" style="width:230px;" class="form-control input-sm" placeholder="Enter address" ></textarea></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Date of birth</span></td>
                                            <td align="left"><input type="text" name="dob"style="width:230px;" id="datepicker"class="form-control input-sm" placeholder="Enter date" /></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Anniversary</span></td>
                                            <td align="left"><input type="text" name="ann_date" style="width:230px;" id="datepicker2" class="form-control input-sm" placeholder="Enter date" /></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Login Name</span></td>
                                            <td align="left"><div><input id="username" size="20" type="text" name="username" style="width:230px;" class="form-control input-sm" placeholder="Enter login name" onBlur="checkAvailability();" ></td>
                                            <td width="200px; align="center" "><b><span id="user-availability-status"></span></b></div>
                                            
                                            </td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Password</span></td>
                                            <td align="left"><input type="password" id="pass" name="password1" style="width:230px;" class="form-control input-sm" placeholder="Enter password" /></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Confirm Password</span></td>
                                            <td align="left"><input type="password" id="conpass" name="password2" style="width:230px;" class="form-control input-sm" placeholder="Re-enter password" onBlur="checkpass();" /></td>
                                            </tr> 
                                            <tr>
                                            <td align="left"><span id="font_style">User status</span></td>
                                            <td align="left">
                                            <label><select name="status" class="form-control input-sm">
                                            <option value="">Select a status</option>
                                            <option>Active</option>
                                            <option>Closed</option>
                                            </select></label></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Internal/external user</span></td>
                                            <td align="left"><label><select name="user_type" class="form-control input-sm">
                                            <option value="">select a user type</option>
                                            <option>Internal</option>
                                            <option>External</option>
                                            </select></label></td>
                                            </tr>
                                            </form>
                                            <form action="?action=submitted" method="POST" enctype="multipart/form-data">
                                            <tr>
                                            
                                            <td width="280px" align="left"><span id="font_style">Passport size photo&nbsp;</span>
                                            </td>
                                            <td align="left">
                                            <input type="file" id="font_style" name="userFile" style="width: 230px;" />
                                            </td>
                                            <td width="10px;"></td>
                                            <td align="left" colspan="2">
                                            <input type="submit" class="btn btn-primary btn-sm" value="Upload"/>
                                            </td>
                                            
                                            </tr>
                                            </form>
                                            <form action="?action=logosubmitted" method="POST" enctype="multipart/form-data">
                                        <tr>
                                        <td width="120px" align="left"><span id="font_style">Logo</span></td>
                                        <td align="left">
                                            <input type="file" id="font_style" name="userlogo" style="width: 230px;" />
                                            </td>
											<td width="10px;"></td>
                                            <td align="left" colspan="2">
                                            <input type="submit" class="btn btn-primary btn-sm" value="Upload"/>
                                            </td>
                                            
                                            </tr>
                                        </form>
                                        </td>
                                        </tr>
                                            <tr><td></td></tr>
                                            <tr>
                                            <td></td>
                                            <td><input type="submit" name= "submit" value="Save" class="btn btn-success btn-round btn-sm" />
                                            <input type="cancel" value="Cancel" class="btn btn-danger btn-round btn-sm" style="width: 80px;"/>
                                            </td>
                                            </tr>
                                            </div>
                                        </table>
                                        
                                        </form>
                                        
                                        </td>



                                        <td style="width: 30%; margin-top: 80px;" align="left" valign="top">

<script type="text/javascript">
            // When the document is read
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

    <!-- start checkboxTree configuration -->
    <script type="text/javascript" src="tree/jquery-1.4.4.js"></script>
    <script type="text/javascript" src="tree/jquery-ui-1.8.12.custom/js/jquery-ui-1.8.12.custom.min.js"></script>
    <link rel="stylesheet" type="text/css" href="tree/jquery-ui-1.8.12.custom/css/smoothness/jquery-ui-1.8.12.custom.css"/>

    <script type="text/javascript" src="tree/jquery.checkboxtree.js"></script>
    <link rel="stylesheet" type="text/css" href="tree/jquery.checkboxtree.css"/>
    <!-- end checkboxTree configuration -->

    <script type="text/javascript" src="tree/jquery.cookie.js"></script>
    

    <script type="text/javascript">
        //<!--
        $(document).ready(function() {
            $('#tabs').tabs({
                cookie: { expires: 30 }
            });
            $('.jquery').each(function() {
                eval($(this).html());
            });
            $('.button').button();
        });
        //-->
    </script>

    

<div id="tabs-1">
    
    <script class="jquery" lang="text/javascript">
        $('#tree1').checkboxTree();
    </script>
<style>
ul ul ul ul li input[type="checkbox"]{margin-left:0px; }
ul ul ul li input[type="checkbox"]{margin-left:0px; }
ul ul li input[type="checkbox"]{margin-left:0px; }
.sub_items_header
{
    padding-left: 12px;
    width: 98%;
    clear: both;
    height: 22px;
    /*background: url('images/headerleftrightblue.gif') repeat-x 0px 0px;*/
    background-color: #68dff0;
    color: #fff;
    font-size: 17px;
    padding-top: 2px;
}
.sub_right
{
    padding-right: 1px;
    width: 330px;
    float: right;
    text-align: left;
    height: 85px;
}


    </style>

                                        <div style="overflow: auto; height: 500px; width: 332px; margin-top:18px;">
                                        <h3 class="sub_items_header">Locations</h3>
                                        <div class="sub_right">


  <ul id="tree1">
<li><input type="checkbox" name="location[]" value="India">India 
        <ul>
       <li><input id="region" type="checkbox" name="region[]" value="East"><b>East</b>
        <ul>
        <li class="category"><input type="checkbox" name="state[]" value="Arunachal Pradesh">Arunachal Pradesh
            <ul>
            <li><input type="checkbox" name="city[]" value="Itanagar">Itanagar</li>
      <li><input type="checkbox" name="city[]" value="Tawang">Tawang</li>
      <li><input type="checkbox" name="city[]" value="Tezu">Tezu</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Assam">Assam
            <ul>
      <li><input type="checkbox" name="city[]" value="Dibrugarh">Dibrugarh</li>
            <li><input type="checkbox" name="city[]" value="Dispur">Dispur</li>
            <li><input type="checkbox" name="city[]" value="Guwahati">Guwahati</li>
            <li><input type="checkbox" name="city[]" value="Tinsukia">Tinsukia</li>
            </ul>
        </li>
  <li><input type="checkbox" name="state[]" value="Bihar">Bihar
            <ul>
            <li><input type="checkbox" name="city[]" value="Begusarai">Begusarai</li>
            <li><input type="checkbox" name="city[]" value="Champaran">Champaran</li>
            <li><input type="checkbox" name="city[]" value="Darbhanga">Darbhanga</li>
            <li><input type="checkbox" name="city[]" value="Gaya">Gaya</li>
            <li><input type="checkbox" name="city[]" value="Hajipur">Hajipur</li>
            <li><input type="checkbox" name="city[]" value="Mujaffarpur">Mujaffarpur</li>
            <li><input type="checkbox" name="city[]" value="Patna">Patna</li>
            <li><input type="checkbox" name="city[]" value="Vaishali">Vaishali</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Chattisgarh">Chattisgarh
            <ul>
            <li><input type="checkbox" name="city[]" value="Bastar">Bastar</li>
            <li><input type="checkbox" name="city[]" value="Bhilai">Bhilai</li>
            <li><input type="checkbox" name="city[]" value="Bijapur">Bijapur</li>
            <li><input type="checkbox" name="city[]" value="Korba">Korba</li>
            <li><input type="checkbox" name="city[]" value="Narayanpur">Narayanpur</li>
            <li><input type="checkbox" name="city[]" value="Raipur">Raipur</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Jharkhand">Jharkhand
            <ul>
            <li><input type="checkbox" name="city[]" value="Bokaro">Bokaro</li>
            <li><input type="checkbox" name="city[]" value="Dhandab">Dhandab</li>
            <li><input type="checkbox" name="city[]" value="Dumka">Dumka</li>
            <li><input type="checkbox" name="city[]" value="Jamshedpur">Jamshedpur</li>
            <li><input type="checkbox" name="city[]" value="Ramgarh">Ramgarh</li>
            <li><input type="checkbox" name="city[]" value="Ranchi">Ranchi</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Manipur">Manipur
            <ul>
            <li><input type="checkbox" name="city[]" value="Bishnupur">Bishnupur</li>
            <li><input type="checkbox" name="city[]" value="Chandel">Chandel</li>
             <li><input type="checkbox" name="city[]" value="Imphal">Imphal</li>
             <li><input type="checkbox" name="city[]" value="Senapati">Senapati</li>
             <li><input type="checkbox" name="city[]" value="Ukhrul">Ukhrul</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Meghalaya">Meghalaya
            <ul>
            <li><input type="checkbox" name="city[]" value="Cherrapunji">Cherrapunji</li>
            <li><input type="checkbox" name="city[]" value="Nongpoh">Nongpoh</li>
            <li><input type="checkbox" name="city[]" value="Shillong">Shillong</li>
            <li><input type="checkbox" name="city[]" value="Williamnagar">Williamnagar</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Mizoram">Mizoram
            <ul>
            <li><input type="checkbox" name="city[]" value="Aizawl">Aizawl</li>
             <li><input type="checkbox" name="city[]" value="Champhai">Champhai</li>
             <li><input type="checkbox" name="city[]" value="Lwangtlai">Lwangtlai</li>
             <li><input type="checkbox" name="city[]" value="Saiha">Saiha</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Nagaland">Nagaland
            <ul>
            <li><input type="checkbox" name="city[]" value="Dimapur">Dimapur</li>
            <li><input type="checkbox" name="city[]" value="Kohima">Kohima</li>
            <li><input type="checkbox" name="city[]" value="Mokokchung">Mokokchung</li>
            <li><input type="checkbox" name="city[]" value="Phek">Phek</li>
            </ul>
        </li>
         <li><input type="checkbox" name="state[]" value="Odisha">Odisha
            <ul>
            <li><input type="checkbox" name="city[]" value="Baleshwar">Baleshwar</li>
            <li><input type="checkbox" name="city[]" value="Bhubaneshwar">Bhubaneshwar</li>
            <li><input type="checkbox" name="city[]" value="Cuttack">Cuttack</li>
            <li><input type="checkbox" name="city[]" value="Deogarh">Deogarh</li>
            <li><input type="checkbox" name="city[]" value="Phulbani">Phulbani</li>
            <li><input type="checkbox" name="city[]" value="Rourkela">Rourkela</li>
            <li><input type="checkbox" name="city[]" value="Sonapur">Sonapur</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Sikkim">Sikkim
            <ul>
            <li><input type="checkbox" name="city[]" value="Gangtok">Gangtok</li>
            <li><input type="checkbox" name="city[]" value="Gezing">Gezing</li>
            <li><input type="checkbox" name="city[]" value="Namchi">Namchi</li>
            <li><input type="checkbox" name="city[]" value="Rumtek">Rumtek</li>
            </ul>
        </li>
         <li class="category"><input type="checkbox" name="state[]" value="Tripura">Tripura
            <ul>
            <li><input type="checkbox" name="city[]" value="Agartala">Agartala</li>
            <li><input type="checkbox" name="city[]" value="Bisramganj">Bisramganj</li>
            <li><input type="checkbox" name="city[]" value="Kamlasagar">Kamlasagar</li>
            <li><input type="checkbox" name="city[]" value="Mohanpur">Mohanpur</li>
            </ul>
        </li>
        <li><input id="state" type="checkbox" name="state[]" value="West Bengal">West Bengal
            <ul>
            <li><input type="checkbox" name="city[]" value="Antpur">Antpur</li>
            <li><input type="checkbox" name="city[]" value="Asansol">Asansol</li>
            <li><input type="checkbox" name="city[]" value="Darjeeling">Darjeeling</li>
            <li><input type="checkbox" name="city[]" value="Durgapur">Durgapur</li>
            <li><input type="checkbox" name="city[]" value="Farakka">Farakka</li>
            <li><input id="city" type="checkbox" name="city[]" value="Kolkata">Kolkata</li>
            <li><input type="checkbox" name="city[]" value="Mayapur">Mayapur</li>
            <li><input type="checkbox" name="city[]" value="Siliguri">Siliguri</li>
            </ul>
        </li>
        </ul>
    </li>
    </ul>
            
<ul>
    <li class="category"><input type="checkbox" name="region[]" value="West"><b>West</b>
        <ul>
        <li class="category"><input type="checkbox" name="state[]" value="Goa">Goa
            <ul>
            <li><input type="checkbox" name="city[]" value="Panaji">Panaji</li>
            <li><input type="checkbox" name="city[]" value="Vasco da Gama">Vasco da Gama</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Gujrat">Gujrat
            <ul>
            <li><input type="checkbox" name="city[]" value="Ahmedabad">Ahmedabad</li>
            <li><input type="checkbox" name="city[]" value="Baroda">Baroda</li>
            <li><input type="checkbox" name="city[]" value="Rajkot">Rajkot</li>
            <li><input type="checkbox" name="city[]" value="Surat">Surat</li>
            </ul>
        </li>
         <li class="category"><input type="checkbox" name="state[]" value="Maharashtra">Maharashtra
            <ul>
            <li><input type="checkbox" name="city[]" value="Aurangabad">Aurangabad</li>
            <li><input type="checkbox" name="city[]" value="Mumbai">Mumbai</li>
            <li><input type="checkbox" name="city[]" value="Nagpur">Nagpur</li>
            <li><input type="checkbox" name="city[]" value="Nasik">Nasik</li>
            <li><input type="checkbox" name="city[]" value="Pune">Pune</li>
            
            </ul>
        </li>
        </ul>
    </li>
    </ul>

    <ul>
    <li class="category"><input type="checkbox" name="region[]" value="North"><b>North</b>
        <ul>
        <li class="category"><input type="checkbox" name="state[]" value="Chandigarh">Chandigarh
            <ul>
            <li><input type="checkbox" name="city[]" value="Chandigarh">Chandigarh</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Delhi">Delhi
            <ul>
            <li><input type="checkbox" name="city[]" value="Delhi">Delhi</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Haryana">Haryana
            <ul>
            <li><input type="checkbox" name="city[]" value="Faridabad">Faridabad</li>
            <li><input type="checkbox" name="city[]" value="Gurgaon">Gurgaon</li>
            <li><input type="checkbox" name="city[]" value="Hisar">Hisar</li>
            <li><input type="checkbox" name="city[]" value="Karnal">Karnal</li>
            <li><input type="checkbox" name="city[]" value="Panipat">Panipat</li>
            <li><input type="checkbox" name="city[]" value="Rohtak">Rohtak</li>
            <li><input type="checkbox" name="city[]" value="Sonipat">Sonipat</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Himachal Pradesh">Himachal Pradesh
            <ul>
            <li><input type="checkbox" name="city[]" value="Kullu">Kullu</li>
            <li><input type="checkbox" name="city[]" value="Shimla">Shimla</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Jammu & Kashmir">Jammu & Kashmir
            <ul>
            <li><input type="checkbox" name="city[]" value="Jammu">Jammu</li>
            <li><input type="checkbox" name="city[]" value="Sringar">Sringar</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Punjab">Punjab
            <ul>
            <li><input type="checkbox" name="city[]" value="Ambala">Ambala</li>
            <li><input type="checkbox" name="city[]" value="Amritsar">Amritsar</li>
            <li><input type="checkbox" name="city[]" value="Jalandhar">Jalandhar</li>
            <li><input type="checkbox" name="city[]" value="Ludhiana">Ludhiana</li>
            <li><input type="checkbox" name="city[]" value="Pathankot">Pathankot</li>
            <li><input type="checkbox" name="city[]" value="Patiala">Patiala</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Rajasthan">Rajasthan
            <ul>
            <li><input type="checkbox" name="city[]" value="Ajmer">Ajmer</li>
            <li><input type="checkbox" name="city[]" value="Alwar">Alwar</li>
            <li><input type="checkbox" name="city[]" value="Jaipur">Jaipur</li>
            <li><input type="checkbox" name="city[]" value="Jodhpur">Jodhpur</li>
            <li><input type="checkbox" name="city[]" value="Kota">Kota</li>
            <li><input type="checkbox" name="city[]" value="Udaipur">Udaipur</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Uttarakhand">Uttarakhand
            <ul>
            <li><input type="checkbox" name="city[]" value="Dehradun">Dehradun</li>
            <li><input type="checkbox" name="city[]" value="Haridwar">Haridwar</li>
            <li><input type="checkbox" name="city[]" value="Nainital">Nainital</li>
            <li><input type="checkbox" name="city[]" value="Rishikesh">Rishikesh</li>
            <li><input type="checkbox" name="city[]" value="Roorkee">Roorkee</li>
            <li><input type="checkbox" name="city[]" value="Tehri Garhwal">Tehri Garhwal</li>
            
            
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Uttar Pradesh">Uttar Pradesh
            <ul>
            <li><input type="checkbox" name="city[]" value="Agra">Agra</li>
            <li><input type="checkbox" name="city[]" value="Aligarh">Aligarh</li>
            <li><input type="checkbox" name="city[]" value="Bulandshahar">Bulandshahar</li>
            <li><input type="checkbox" name="city[]" value="Ghaziabad">Ghaziabad</li>
            <li><input type="checkbox" name="city[]" value="Gorakhpur">Gorakhpur</li>
            <li><input type="checkbox" name="city[]" value="Kanpur">Kanpur</li>
            <li><input type="checkbox" name="city[]" value="Lucknow">Lucknow</li>
            <li><input type="checkbox" name="city[]" value="Mathura">Mathura</li>
            <li><input type="checkbox" name="city[]" value="Meerut">Meerut</li>
            <li><input type="checkbox" name="city[]" value="Noida">Noida</li>
            </ul>
        </li>
        </ul>
    </li>
    </ul>

    <ul>
    <li class="category"><input type="checkbox" name="region[]" value="South"><b>South</b>
        <ul>
        <li class="category"><input type="checkbox" name="state[]" value="Andhra Pradesh">Andhra Pradesh
            <ul>
            <li><input type="checkbox" name="city[]" value="Amravati">Amravati</li>
            <li><input type="checkbox" name="city[]" value="Chittoor">Chittoor</li>
            <li><input type="checkbox" name="city[]" value="Nellore">Nellore</li>
            <li><input type="checkbox" name="city[]" value="Vijawada">Vijawada</li>
            <li><input type="checkbox" name="city[]" value="Vishakhapatanam">Vishakhapatanam</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Karnataka">Karnataka
            <ul>
            <li><input type="checkbox" name="city[]" value="Banglore">Banglore</li>
            <li><input type="checkbox" name="city[]" value="Belgaum">Belgaum</li>
            <li><input type="checkbox" name="city[]" value="Bijapur">Bijapur</li>
            <li><input type="checkbox" name="city[]" value="Hubli-Dharwar">Hubli-Dharwar</li>
            <li><input type="checkbox" name="city[]" value="Manglore">Manglore</li>
            <li><input type="checkbox" name="city[]" value="Mysore">Mysore</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Kerala">Kerala
            <ul>
            <li><input type="checkbox" name="city[]" value="Kasaragod">Kasaragod</li>
            <li><input type="checkbox" name="city[]" value="Kochi">Kochi</li>
            <li><input type="checkbox" name="city[]" value="Kollam">Kollam</li>
            <li><input type="checkbox" name="city[]" value="Kozhikode">Kozhikode</li>
            <li><input type="checkbox" name="city[]" value="Thiruvananthapuram">Thiruvananthapuram</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Tamil Nadu">Tamil Nadu
            <ul>
            <li><input type="checkbox" name="city[]" value="Chennai">Chennai</li>
            <li><input type="checkbox" name="city[]" value="Coimbatore">Coimbatore</li>
            <li><input type="checkbox" name="city[]" value="Kanyakumari">Kanyakumari</li>
            <li><input type="checkbox" name="city[]" value="Krishnagiri">Krishnagiri</li>
            <li><input type="checkbox" name="city[]" value="Madurai">Madurai</li>
            <li><input type="checkbox" name="city[]" value="Salem">Salem</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Telengana">Telengana
            <ul>
            <li><input type="checkbox" name="city[]" value="Hyderabad">Hyderabad</li>
            <li><input type="checkbox" name="city[]" value="Karimnagar">Karimnagar</li>
            <li><input type="checkbox" name="city[]" value="Khammam">Khammam</li>
            <li><input type="checkbox" name="city[]" value="Nalgonda">Nalgonda</li>
            <li><input type="checkbox" name="city[]" value="Wrangal">Wrangal</li>
            </ul>
        </li>
        </ul>
    </li>
    </ul>
</li>
</ul>
</div>

</div>
</div>
</form>
                                        </td>
                                        </tr>
                                        </tbody>
                                        </table>

<br>
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
              <a href="createuser.php#" class="go-top">
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


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    
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

$department = $_POST['department'];
$role = $_POST['role'];
$rep_person=$_POST['report_person'];
$email = $_POST['email'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$dobold = $_POST['dob'];
$ann_dateold = $_POST['ann_date'];
$login_name = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$status = $_POST['status'];
$user_type = $_POST['user_type'];

if (isset($_POST['location'])){

    $loc = implode(", ",$_POST['location']);
     echo $region = implode(", ",$_POST['region']);
     echo $state = implode(", ",$_POST['state']);
     echo $city = implode(", ",$_POST['city']);
    
}

elseif(isset($_POST['region'])){
     $region = implode(", ",$_POST['region']);
     $state = implode(", ",$_POST['state']);
     $city = implode(", ",$_POST['city']);
}
elseif(isset($_POST['state'])){
     $state = implode(", ",$_POST['state']);
     $city = implode(", ",$_POST['city']);
     $region="";
}

elseif (isset($_POST['city'])) {
    
     $city = implode(", ",$_POST['city']);
     $state="";
     $city="";
}


$dob=date("Y-m-d",strtotime($dobold));
$ann_date=date("Y-m-d",strtotime($ann_dateold));
if(empty($name) || empty($department) || empty($role) || empty($rep_person) || empty($email) || empty($address) || empty($mobile) || empty($dob) || empty($ann_date) || empty($login_name) || empty($password1) || empty($password2) || empty($status) || empty($user_type)) {

echo '<script language="javascript">';
echo 'alert("Please Fill all the Fields")';
echo '</script>';
}else if(empty($city)){
    echo '<script language="javascript">';
echo 'alert("Please Select Locations")';
echo '</script>';

}else{

       $host="182.50.133.87";
       $user="communique";
       $pass="umesh0028";
                                                                                                              

      $connector = mysql_connect($host,$user,$pass)
          or die("Unable to connect");
      $selected = mysql_select_db("comm_login", $connector)
        or die("Unable to load database"); 

        $reg = mysql_query("SELECT * from user_desig WHERE id=".$_POST['designation']);
 $row = mysql_fetch_assoc($reg);
   $designation = $row['designation'];

 if($query = mysql_query("INSERT INTO `comm_login`.`userdata` (`id`,`name`,`designation`,`department`,`role`,`report_person`,`email`,`number`,`address`,`dob`,`anniversary`,`username`,`password`,`user_status`,`type`,`region`,`state`,`city`) VALUES (NULL,'$name','$designation','$department','$role','$rep_person','$email','$mobile','$address','$dob','$ann_date','$login_name','$password1','$status','$user_type','$region','$state','$city')")){

       echo '<script language="javascript">';
       echo 'alert("Data Saved Successfully")';
       echo '</script>';
    }
}
}

?>


<?php
if($action=="submitted"){
$errors= array();
$extensions= array(".jpg",".png",".gif",".jpeg"); 
 //$file_ext=strtolower(end(explode('.',$_FILES['userFile']['name'])));
 $file_name = $_FILES['userFile']['name'];
  $file_ext=substr($file_name, strrpos($file_name, '.'));
  //var_dump($file_ext);
$info = pathinfo($_FILES['userFile']['name']);
//$tmp=$_FILES['userFile']['tmp_name'];
//$ext = $info['extension']; // get the extension of the file
$target = 'uploads/user_photo/'.$file_name;
if(!empty($_FILES['userFile']['name']))
{
if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a image file.";
         //header("location: masterdata.php?action=error&name=$newname&fe=$file_ext");
echo '<script language="javascript">';
echo 'alert("Please Upload only image files.")';
echo '</script>';
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
}
?>

<?php
if($action=="logosubmitted")
{
$errors= array();
$extensions= array(".jpg",".png",".gif",".jpeg"); 
 //$file_ext=strtolower(end(explode('.',$_FILES['userFile']['name'])));
 $file_name = $_FILES['userlogo']['name'];
  $file_ext=substr($file_name, strrpos($file_name, '.'));
  //var_dump($file_ext);
$info = pathinfo($_FILES['userlogo']['name']);
//$tmp=$_FILES['userFile']['tmp_name'];
//$ext = $info['extension']; // get the extension of the file
$target = 'uploads/user_logo/'.$file_name;
if(!empty($_FILES['userlogo']['name']))
{
if(in_array($file_ext,$extensions)=== false){
$errors[]="extension not allowed, please choose a image file.";
//header("location: masterdata.php?action=error&name=$newname&fe=$file_ext");
echo '<script language="javascript">';
echo 'alert("Please Upload only image files.")';
echo '</script>';
}
 if(empty($errors)==true){

 //$target = ROOT_DIR.'/uploads/uploads_beatplan/'.$newname;

 move_uploaded_file( $_FILES['userlogo']['tmp_name'], $target);
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