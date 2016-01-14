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

    <title>Edit User Information</title>
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
      



      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <div class="row mt">
            <div class="col-lg-12">
              <!-- BASIC BUTTONS -->
              <div align="center" style="height: 100%">
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
<!-- Date picker-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

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

<?php
       if(isset($_GET['id'])){
        $_SESSION['red_id'] = $_GET['id'];
       }else{
        $_GET['id']=0;
       } ;

              $host="182.50.133.87";
              $user="communique";
              $pass="umesh0028";
                                                                                                              

      $connector = mysql_connect($host,$user,$pass)
          or die("Unable to connect");
      $selected = mysql_select_db("comm_login", $connector)
        or die("Unable to load database"); 
          
           
        if($query = mysql_query("SELECT * from userdata WHERE id=".$_SESSION['red_id'])){
        $row = mysql_fetch_assoc($query);
        
        $name = $row['name'];
        $designation = $row['designation'];
        $department = $row['department'];
        $role = $row['role'];
        $rep_person=$row['report_person'];
        $email = $row['email'];
        $address = $row['address'];
        $number = $row['number'];
        $dobold = $row['dob'];
        $ann_dateold = $row['anniversary'];
        $login_name = $row['username'];
        $password = $row['password'];
        $status = $row['user_status'];
        $user_type = $row['type'];
        $locatn = $row['Locations'];
        $regionold = $row['region'];
        $stateold = $row['state'];
        $cityold = $row['city'];
        $dob=date("d-m-Y",strtotime($dobold));
        $ann_date=date("d-m-Y",strtotime($ann_dateold));

         $Location = (explode(", ",$locatn));
         $region = (explode(", ",$regionold));
         $state = (explode(", ",$stateold));
         $city = (explode(", ",$cityold));
     }
?>

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
                                            <input type="text" name="name" class="form-control input-sm" placeholder="Enter name" value="<?php echo $name; ?> " >
                                            </td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Designation</span></td>
                                            <td align="left"><select name="designation" onChange="getDesig(this.value)" class="form-control input-sm">
                                            <option value=<?php echo $designation; ?>><?php echo $designation; ?></option>
                                                                                            <?php  ?>
                                            <?php
                                            while ($row=mysql_fetch_array($result)) { ?>
                                               <option value=<?php echo $row['id']?>><?php echo $row['designation']?></option>
                                                                                            <?php } ?>
                                            </select></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Department</span></td>
                                            <td align="left"><select name="department" class="form-control input-sm">
                                             <option value=<?php echo $department;?>><?php echo $department; ?></option>
                                                                                            <?php  ?>
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
                                              <option value=<?php echo $role;?>><?php echo $role; ?></option>
                                                                                            
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
                                              <option value=<?php echo $rep_person;?>><?php echo $rep_person; ?></option>
                                                                                            
                                            </select>
                                            </div>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">E-mail</span></td>
                                            <td align="left"><input type="email" name="email" style="width:230px;" class="form-control input-sm" placeholder="Enter E-mail address" value="<?php echo $email; ?>"/></td>
                                            
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Mobile Number</span></td>
                                            <td align="left"><input type="text" name="mobile" style="width:230px;" class="form-control input-sm" placeholder="Enter mobile no." value="<?php echo $number; ?>" /></td>
                                            
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Address</span></td>
                                            <td align="left"><textarea cols="28" rows="3" name="address" style="width:230px;" class="form-control input-sm" placeholder="Enter address" ><?php echo $address; ?></textarea></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Date of birth</span></td>
                                            <td align="left"><input type="text" name="dob"style="width:230px;" id="datepicker"class="form-control input-sm" placeholder="Enter date" /></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Anniversary</span></td>
                                            <td align="left"><input type="text" name="ann_date" style="width:230px;" id="datepicker2" class="form-control input-sm" placeholder="Enter date"  /></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Login Name</span></td>
                                            <td align="left"><div><input id="username" size="20" type="text" name="username" style="width:230px;" class="form-control input-sm" placeholder="Enter login name" value="<?php echo $login_name; ?>" onBlur="checkAvailability();" ></td>
                                            <td width="200px; align="center" "><b><span id="user-availability-status"></span></b></div>
                                            
                                            </td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Password</span></td>
                                            <td align="left"><input type="password" id="pass" name="password1" style="width:230px;" class="form-control input-sm" placeholder="Enter password" value="<?php echo $password; ?>" /></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Confirm Password</span></td>
                                            <td align="left"><input type="password" id="conpass" name="password2" style="width:230px;" class="form-control input-sm" placeholder="Re-enter password" value="<?php echo $password; ?>" onblur="checkpass();" /></td>
                                            </tr> 
                                            <tr>
                                            <td align="left"><span id="font_style">User status</span></td>
                                            <td align="left">
                                            <select name="status" class="form-control input-sm">
                                             <option value=<?php echo $status; ?>><?php echo $status; ?></option>
                                                                                            <?php  ?>
                                            <option>Active</option>
                                            <option>Closed</option>
                                            </select></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Internal/external user</span></td>
                                            <td align="left"><select name="user_type" class="form-control input-sm">
                                             <option value=<?php echo $user_type; ?>><?php echo $user_type; ?></option>
                                                                                            <?php  ?>
                                            <option>Internal</option>
                                            <option>External</option>
                                            </select></td>
                                            </tr>
                                            </form>

                                            <form action="?action=submitted" method="POST" enctype="multipart/form-data">
                                            <tr>
                                            
                                            <td width="280px" align="left"><span id="font_style">Passport size photo&nbsp;</span>
                                            </td>
                                            <td align="left">
                                            <input type="file" id="font_style" name="userFile" style="width: 170px;" />
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
                                            <input type="file" id="font_style" name="userlogo" style="width: 170px;" />
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
                                            <td><input type="submit" name= "submit" value="Save" class="btn btn-success btn-round" />
                                            <input type="cancel" value="Cancel" class="btn btn-danger btn-round" style="width: 80px;"/>
                                            </td>
                                            </tr>
                                        </table>
                                        </form>
                                        </td>





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

    <style type="text/css">
ul ul ul ul li input[type="checkbox"]{margin-left:0px; }
ul ul ul li input[type="checkbox"]{margin-left:0px; }
ul ul li input[type="checkbox"]{margin-left:0px; }
.sub_items_header
{
    padding-left: 12px;
    width: 98%;
    clear: both;
    height: 28px;
    /*background: url('images/headerleftrightblue.gif') repeat-x 0px 0px;*/
    background-color: #68dff0;
    color: #fff;
    font-size: 17px;
    padding-top: 2px;
}
.sub_right
{
    padding-right: 1px;
    width: 320px;
    float: right;
    text-align: left;
    height: 85px;
}

    </style>

                                        <td style="width: 30%;" align="left" valign="top">
                                        <div style="overflow: auto; height: 500px; width: 320px; margin-top:18px;">
                                        <h3 class="sub_items_header"  style="height: 22px;">Locations</h3>
                                        <div class="sub_right">


  <ul id="tree1">
<li><input type="checkbox" name="location[]" value="India" <?php if(in_array("India",$Location)) { ?> checked="checked" <?php } ?> >India 
        <ul>
       <li><input type="checkbox" name="region[]" value="East" <?php if(in_array("East",$region)) { ?> checked="checked" <?php } ?> ><b>East</b>
        <ul>
        
        <li><input type="checkbox" name="state[]" value="West Bengal"  <?php if(in_array("West Bengal",$state)) { ?> checked="checked" <?php } ?> >West Bengal
            <ul>
            <li><input type="checkbox" name="city[]" value="Kolkata" <?php if(in_array("Kolkata",$city)) { ?> checked="checked" <?php } ?> >Kolkata</li>
            <li><input type="checkbox" name="city[]" value="Asansol" <?php if(in_array("Asansol",$city)) { ?> checked="checked" <?php } ?>>Asansol</li>
            <li><input type="checkbox" name="city[]" value="Siliguri" <?php if(in_array("Siliguri",$city)) { ?> checked="checked" <?php } ?>>Siliguri</li>
            <li><input type="checkbox" name="city[]" value="Durgapur" <?php if(in_array("Durgapur",$city)) { ?> checked="checked" <?php } ?>>Durgapur</li>
            <li><input type="checkbox" name="city[]" value="Darjeeling" <?php if(in_array("Darjeeling",$city)) { ?> checked="checked" <?php } ?>>Darjeeling</li>
            <li><input type="checkbox" name="city[]" value="Antpur" <?php if(in_array("Antpur",$city)) { ?> checked="checked" <?php } ?>>Antpur</li>
              <li><input type="checkbox" name="city[]" value="Mayapur" <?php if(in_array("Mayapur",$city)) { ?> checked="checked" <?php } ?>>Mayapur</li>
            <li><input type="checkbox" name="city[]" value="Farakka" <?php if(in_array("Farakka",$city)) { ?> checked="checked" <?php } ?>>Farakka</li>
            </ul>
        </li>
         <li><input type="checkbox" name="state[]" value="Odisha" <?php if(in_array("Odisha",$state)) { ?> checked="checked" <?php } ?>>Odisha
            <ul>
            <li><input type="checkbox" name="city[]" value="Bhubaneshwar" <?php if(in_array("Bhubaneshwar",$city)) { ?> checked="checked" <?php } ?>>Bhubaneshwar</li>
            <li><input type="checkbox" name="city[]" value="Cuttack" <?php if(in_array("Cuttack",$city)) { ?> checked="checked" <?php } ?>>Cuttack</li>
            <li><input type="checkbox" name="city[]" value="Rourkela" <?php if(in_array("Rourkela",$city)) { ?> checked="checked" <?php } ?>>Rourkela</li>
            <li><input type="checkbox" name="city[]" value="Deogarh" <?php if(in_array("Deogarh",$city)) { ?> checked="checked" <?php } ?>>Deogarh</li>
            <li><input type="checkbox" name="city[]" value="Baleshwar" <?php if(in_array("Baleshwar",$city)) { ?> checked="checked" <?php } ?>>Baleshwar</li>
            <li><input type="checkbox" name="city[]" value="Sonapur" <?php if(in_array("Sonapur",$city)) { ?> checked="checked" <?php } ?>>Sonapur</li>
            <li><input type="checkbox" name="city[]" value="Phulbani" <?php if(in_array("Phulbani",$city)) { ?> checked="checked" <?php } ?>>Phulbani</li>
            </ul>
        </li>
         <li><input type="checkbox" name="state[]" value="Bihar" <?php if(in_array("Bihar",$state)) { ?> checked="checked" <?php } ?>>Bihar
            <ul>
            <li><input type="checkbox" name="city[]" value="Patna" <?php if(in_array("Patna",$city)) { ?> checked="checked" <?php } ?>>Patna</li>
            <li><input type="checkbox" name="city[]" value="Gaya" <?php if(in_array("Gaya",$city)) { ?> checked="checked" <?php } ?>>Gaya</li>
            <li><input type="checkbox" name="city[]" value="Darbhanga" <?php if(in_array("Darbhanga",$city)) { ?> checked="checked" <?php } ?>>Darbhanga</li>
            <li><input type="checkbox" name="city[]" value="Champaran" <?php if(in_array("Champaran",$city)) { ?> checked="checked" <?php } ?>>Champaran</li>
            <li><input type="checkbox" name="city[]" value="Vaishali" <?php if(in_array("Vaishali",$city)) { ?> checked="checked" <?php } ?>>Vaishali</li>
            <li><input type="checkbox" name="city[]" value="Mujaffarpur" <?php if(in_array("Mujaffarpur",$city)) { ?> checked="checked" <?php } ?>>Mujaffarpur</li>
            <li><input type="checkbox" name="city[]" value="Hajipur" <?php if(in_array("Hajipur",$city)) { ?> checked="checked" <?php } ?>>Hajipur</li>
            <li><input type="checkbox" name="city[]" value="Begusarai" <?php if(in_array("Begusarai",$city)) { ?> checked="checked" <?php } ?>>Begusarai</li>
            </ul>
        </li>
         <li class="category"><input type="checkbox" name="state[]" value="Jharkhand" <?php if(in_array("Jharkhand",$state)) { ?> checked="checked" <?php } ?>>Jharkhand
            <ul>
            <li><input type="checkbox" name="city[]" value="Jamshedpur" <?php if(in_array("Jamshedpur",$city)) { ?> checked="checked" <?php } ?>>Jamshedpur</li>
            <li><input type="checkbox" name="city[]" value="Dhandab" <?php if(in_array("Dhandab",$city)) { ?> checked="checked" <?php } ?>>Dhandab</li>
            <li><input type="checkbox" name="city[]" value="Ranchi" <?php if(in_array("Ranchi",$city)) { ?> checked="checked" <?php } ?>>Ranchi</li>
            <li><input type="checkbox" name="city[]" value="Bokaro" <?php if(in_array("Bokaro",$city)) { ?> checked="checked" <?php } ?>>Bokaro</li>
            <li><input type="checkbox" name="city[]" value="Ramgarh" <?php if(in_array("Ramgarh",$city)) { ?> checked="checked" <?php } ?>>Ramgarh</li>
            <li><input type="checkbox" name="city[]" value="Dumka" <?php if(in_array("Dumka",$city)) { ?> checked="checked" <?php } ?>>Dumka</li>
            </ul>
        </li>
         <li class="category"><input type="checkbox" name="state[]" value="Arunachal Pradesh" <?php if(in_array("Arunachal Pradesh",$state)) { ?> checked="checked" <?php } ?>>Arunachal Pradesh
            <ul>
            <li><input type="checkbox" name="city[]" value="Itanagar" <?php if(in_array("Itanagar",$city)) { ?> checked="checked" <?php } ?>>Itanagar</li>
            <li><input type="checkbox" name="city[]" value="Tawang" <?php if(in_array("Tawang",$city)) { ?> checked="checked" <?php } ?>>Tawang</li>
            <li><input type="checkbox" name="city[]" value="Tezu" <?php if(in_array("Tezu",$city)) { ?> checked="checked" <?php } ?>>Tezu</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Assam" <?php if(in_array("Assam",$state)) { ?> checked="checked" <?php } ?>>Assam
            <ul>
            <li><input type="checkbox" name="city[]" value="Dispur" <?php if(in_array("Dispur",$city)) { ?> checked="checked" <?php } ?>>Dispur</li>
            <li><input type="checkbox" name="city[]" value="Dibrugarh" <?php if(in_array("Dibrugarh",$city)) { ?> checked="checked" <?php } ?>>Dibrugarh</li>
            <li><input type="checkbox" name="city[]" value="Guwahati" <?php if(in_array("Guwahati",$city)) { ?> checked="checked" <?php } ?>>Guwahati</li>
            <li><input type="checkbox" name="city[]" value="Tinsukia" <?php if(in_array("Tinsukia",$city)) { ?> checked="checked" <?php } ?>>Tinsukia</li>
            </ul>
        </li>
         <li class="category"><input type="checkbox" name="state[]" value="Mizoram" <?php if(in_array("Mizoram",$state)) { ?> checked="checked" <?php } ?>>Mizoram
            <ul>
            <li><input type="checkbox" name="city[]" value="Aizawl" <?php if(in_array("Aizawl",$city)) { ?> checked="checked" <?php } ?>>Aizawl</li>
             <li><input type="checkbox" name="city[]" value="Champhai" <?php if(in_array("Champhai",$city)) { ?> checked="checked" <?php } ?>>Champhai</li>
             <li><input type="checkbox" name="city[]" value="Lwangtlai" <?php if(in_array("Lwangtlai",$city)) { ?> checked="checked" <?php } ?>>Lwangtlai</li>
             <li><input type="checkbox" name="city[]" value="Saiha" <?php if(in_array("Saiha",$city)) { ?> checked="checked" <?php } ?>>Saiha</li>
            </ul>
        </li>
         <li class="category"><input type="checkbox" name="state[]" value="Meghalaya" <?php if(in_array("Meghalaya",$state)) { ?> checked="checked" <?php } ?>>Meghalaya
            <ul>
            <li><input type="checkbox" name="city[]" value="Shillong" <?php if(in_array("Shillong",$city)) { ?> checked="checked" <?php } ?>>Shillong</li>
            <li><input type="checkbox" name="city[]" value="Williamnagar" <?php if(in_array("Williamnagar",$city)) { ?> checked="checked" <?php } ?>>Williamnagar</li>
            <li><input type="checkbox" name="city[]" value="Nongpoh" <?php if(in_array("Nongpoh",$city)) { ?> checked="checked" <?php } ?>>Nongpoh</li>
            <li><input type="checkbox" name="city[]" value="Cherrapunji" <?php if(in_array("Cherrapunji",$city)) { ?> checked="checked" <?php } ?>>Cherrapunji</li>
            </ul>
        </li>
         <li class="category"><input type="checkbox" name="state[]" value="Tripura" <?php if(in_array("Tripura",$state)) { ?> checked="checked" <?php } ?>>Tripura
            <ul>
            <li><input type="checkbox" name="city[]" value="Agartala" <?php if(in_array("Agartala",$city)) { ?> checked="checked" <?php } ?>>Agartala</li>
            <li><input type="checkbox" name="city[]" value="Mohanpur" <?php if(in_array("Mohanpur",$city)) { ?> checked="checked" <?php } ?>>Mohanpur</li>
            <li><input type="checkbox" name="city[]" value="Bisramganj" <?php if(in_array("Bisramganj",$city)) { ?> checked="checked" <?php } ?>>Bisramganj</li>
            <li><input type="checkbox" name="city[]" value="Kamlasagar" <?php if(in_array("Kamlasagar",$city)) { ?> checked="checked" <?php } ?>>Kamlasagar</li>
            </ul>
        </li>
         <li class="category"><input type="checkbox" name="state[]" value="Sikkim" <?php if(in_array("Sikkim",$state)) { ?> checked="checked" <?php } ?>>Sikkim
            <ul>
            <li><input type="checkbox" name="city[]" value="Gangtok" <?php if(in_array("Gangtok",$city)) { ?> checked="checked" <?php } ?>>Gangtok</li>
            <li><input type="checkbox" name="city[]" value="Gezing" <?php if(in_array("Gezing",$city)) { ?> checked="checked" <?php } ?>>Gezing</li>
            <li><input type="checkbox" name="city[]" value="Namchi" <?php if(in_array("Namchi",$city)) { ?> checked="checked" <?php } ?>>Namchi</li>
            <li><input type="checkbox" name="city[]" value="Rumtek" <?php if(in_array("Rumtek",$city)) { ?> checked="checked" <?php } ?>>Rumtek</li>
            </ul>
        </li>
         <li class="category"><input type="checkbox" name="state[]" value="Nagaland" <?php if(in_array("Nagaland",$state)) { ?> checked="checked" <?php } ?>>Nagaland
            <ul>
            <li><input type="checkbox" name="city[]" value="Kohima" <?php if(in_array("Kohima",$city)) { ?> checked="checked" <?php } ?>>Kohima</li>
            <li><input type="checkbox" name="city[]" value="Mokokchung" <?php if(in_array("Mokokchung",$city)) { ?> checked="checked" <?php } ?>>Mokokchung</li>
            <li><input type="checkbox" name="city[]" value="Dimapur" <?php if(in_array("Dimapur",$city)) { ?> checked="checked" <?php } ?>>Dimapur</li>
            <li><input type="checkbox" name="city[]" value="Phek" <?php if(in_array("Phek",$city)) { ?> checked="checked" <?php } ?>>Phek</li>
            </ul>
        </li>
         <li class="category"><input type="checkbox" name="state[]" value="Chattisgarh" <?php if(in_array("Chattisgarh",$state)) { ?> checked="checked" <?php } ?>>Chattisgarh
            <ul>
            <li><input type="checkbox" name="city[]" value="Bhilai" <?php if(in_array("Bhilai",$city)) { ?> checked="checked" <?php } ?>>Bhilai</li>
            <li><input type="checkbox" name="city[]" value="Bastar" <?php if(in_array("Bastar",$city)) { ?> checked="checked" <?php } ?>>Bastar</li>
            <li><input type="checkbox" name="city[]" value="Raipur" <?php if(in_array("Raipur",$city)) { ?> checked="checked" <?php } ?>>Raipur</li>
            <li><input type="checkbox" name="city[]" value="Bijapur" <?php if(in_array("Bijapur",$city)) { ?> checked="checked" <?php } ?>>Bijapur</li>
            <li><input type="checkbox" name="city[]" value="Narayanpur" <?php if(in_array("Narayanpur",$city)) { ?> checked="checked" <?php } ?>>Narayanpur</li>
            <li><input type="checkbox" name="city[]" value="Korba" <?php if(in_array("Korba",$city)) { ?> checked="checked" <?php } ?>>Korba</li>
            </ul>
        </li>
         <li class="category"><input type="checkbox" name="state[]" value="Manipur" <?php if(in_array("Manipur",$state)) { ?> checked="checked" <?php } ?>>Manipur
            <ul>
            <li><input type="checkbox" name="city[]" value="Bishnupur" <?php if(in_array("Bishnupur",$city)) { ?> checked="checked" <?php } ?>>Bishnupur</li>
             <li><input type="checkbox" name="city[]" value="Imphal" <?php if(in_array("Imphal",$city)) { ?> checked="checked" <?php } ?>>Imphal</li>
             <li><input type="checkbox" name="city[]" value="Senapati" <?php if(in_array("Senapati",$city)) { ?> checked="checked" <?php } ?>>Senapati</li>
             <li><input type="checkbox" name="city[]" value="Chandel" <?php if(in_array("Chandel",$city)) { ?> checked="checked" <?php } ?>>Chandel</li>
             <li><input type="checkbox" name="city[]" value="Ukhrul" <?php if(in_array("Ukhrul",$city)) { ?> checked="checked" <?php } ?>>Ukhrul</li>
            </ul>
        </li>
        </ul>
    </li>
    </ul>
            
<ul>
    <li class="category"><input type="checkbox" name="region[]" value="West" <?php if(in_array("West",$region)) { ?> checked="checked" <?php } ?>><b>West</b>
        <ul>
        <li class="category"><input type="checkbox" name="state[]" value="Gujrat" <?php if(in_array("Gujrat",$state)) { ?> checked="checked" <?php } ?>>Gujrat
            <ul>
            <li><input type="checkbox" name="city[]" value="Ahmedabad" <?php if(in_array("Ahmedabad",$city)) { ?> checked="checked" <?php } ?>>Ahmedabad</li>
            <li><input type="checkbox" name="city[]" value="Surat" <?php if(in_array("Surat",$city)) { ?> checked="checked" <?php } ?>>Surat</li>
            <li><input type="checkbox" name="city[]" value="Baroda" <?php if(in_array("Baroda",$city)) { ?> checked="checked" <?php } ?>>Baroda</li>
            <li><input type="checkbox" name="city[]" value="Rajkot" <?php if(in_array("Rajkot",$city)) { ?> checked="checked" <?php } ?>>Rajkot</li>
            </ul>
        </li>
         <li class="category"><input type="checkbox" name="state[]" value="Maharashtra" <?php if(in_array("Maharashtra",$state)) { ?> checked="checked" <?php } ?>>Maharashtra
            <ul>
            <li><input type="checkbox" name="city[]" value="Mumbai" <?php if(in_array("Mumbai",$city)) { ?> checked="checked" <?php } ?>>Mumbai</li>
            <li><input type="checkbox" name="city[]" value="Pune" <?php if(in_array("Pune",$city)) { ?> checked="checked" <?php } ?>>Pune</li>
            <li><input type="checkbox" name="city[]" value="Nagpur" <?php if(in_array("Nagpur",$city)) { ?> checked="checked" <?php } ?>>Nagpur</li>
            <li><input type="checkbox" name="city[]" value="Nasik" <?php if(in_array("Nasik",$city)) { ?> checked="checked" <?php } ?>>Nasik</li>
            <li><input type="checkbox" name="city[]" value="Aurangabad" <?php if(in_array("Aurangabad",$city)) { ?> checked="checked" <?php } ?>>Aurangabad</li>
            </ul>
        </li>
         <li class="category"><input type="checkbox" name="state[]" value="Goa" <?php if(in_array("Goa",$state)) { ?> checked="checked" <?php } ?>>Goa
            <ul>
            <li><input type="checkbox" name="city[]" value="Panaji" <?php if(in_array("Panaji",$city)) { ?> checked="checked" <?php } ?>>Panaji</li>
            <li><input type="checkbox" name="city[]" value="Vasco da Gama" <?php if(in_array("Vasco da Gama",$city)) { ?> checked="checked" <?php } ?>>Vasco da Gama</li>
            </ul>
        </li>
        </ul>
    </li>
    </ul>

    <ul>
    <li class="category"><input type="checkbox" name="region[]" value="North" <?php if(in_array("North",$region)) { ?> checked="checked" <?php } ?>><b>North</b>
        <ul>
        <li class="category"><input type="checkbox" name="state[]" value="Jammu & Kashmir" <?php if(in_array("Jammu & Kashmir",$state)) { ?> checked="checked" <?php } ?>>Jammu & Kashmir
            <ul>
            <li><input type="checkbox" name="city[]" value="Jammu" <?php if(in_array("Jammu",$city)) { ?> checked="checked" <?php } ?>>Jammu</li>
            <li><input type="checkbox" name="city[]" value="Sringar" <?php if(in_array("Sringar",$city)) { ?> checked="checked" <?php } ?>>Sringar</li>
            </ul>
        </li>
         <li class="category"><input type="checkbox" name="state[]" value="Himachal Pradesh" <?php if(in_array("Himachal Pradesh",$state)) { ?> checked="checked" <?php } ?>>Himachal Pradesh
            <ul>
            <li><input type="checkbox" name="city[]" value="Kullu" <?php if(in_array("Kullu",$city)) { ?> checked="checked" <?php } ?>>Kullu</li>
            <li><input type="checkbox" name="city[]" value="Shimla" <?php if(in_array("Shimla",$city)) { ?> checked="checked" <?php } ?>>Shimla</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Punjab" <?php if(in_array("Punjab",$state)) { ?> checked="checked" <?php } ?>>Punjab
            <ul>
            <li><input type="checkbox" name="city[]" value="Ludhiana" <?php if(in_array("Ludhiana",$city)) { ?> checked="checked" <?php } ?>>Ludhiana</li>
            <li><input type="checkbox" name="city[]" value="Amritsar" <?php if(in_array("Amritsar",$city)) { ?> checked="checked" <?php } ?>>Amritsar</li>
            <li><input type="checkbox" name="city[]" value="Jalandhar" <?php if(in_array("Jalandhar",$city)) { ?> checked="checked" <?php } ?>>Jalandhar</li>
            <li><input type="checkbox" name="city[]" value="Ambala" <?php if(in_array("Ambala",$city)) { ?> checked="checked" <?php } ?>>Ambala</li>
            <li><input type="checkbox" name="city[]" value="Patiala" <?php if(in_array("Patiala",$city)) { ?> checked="checked" <?php } ?>>Patiala</li>
            <li><input type="checkbox" name="city[]" value="Pathankot" <?php if(in_array("Pathankot",$city)) { ?> checked="checked" <?php } ?>>Pathankot</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Rajasthan" <?php if(in_array("Rajasthan",$state)) { ?> checked="checked" <?php } ?>>Rajasthan
            <ul>
            <li><input type="checkbox" name="city[]" value="Ajmer" <?php if(in_array("Ajmer",$city)) { ?> checked="checked" <?php } ?>>Ajmer</li>
            <li><input type="checkbox" name="city[]" value="Jaipur" <?php if(in_array("Jaipur",$city)) { ?> checked="checked" <?php } ?>>Jaipur</li>
            <li><input type="checkbox" name="city[]" value="Jodhpur" <?php if(in_array("Jodhpur",$city)) { ?> checked="checked" <?php } ?>>Jodhpur</li>
            <li><input type="checkbox" name="city[]" value="Udaipur" <?php if(in_array("Udaipur",$city)) { ?> checked="checked" <?php } ?>>Udaipur</li>
            <li><input type="checkbox" name="city[]" value="Alwar" <?php if(in_array("Alwar",$city)) { ?> checked="checked" <?php } ?>>Alwar</li>
            <li><input type="checkbox" name="city[]" value="Kota" <?php if(in_array("Kota",$city)) { ?> checked="checked" <?php } ?>>Kota</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Chandigarh" <?php if(in_array("Chandigarh",$state)) { ?> checked="checked" <?php } ?>>Chandigarh
            <ul>
            <li><input type="checkbox" name="city[]" value="Chandigarh" <?php if(in_array("Chandigarh",$city)) { ?> checked="checked" <?php } ?>>Chandigarh</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Uttarakhand" <?php if(in_array("Uttarakhand",$state)) { ?> checked="checked" <?php } ?>>Uttarakhand
            <ul>
            <li><input type="checkbox" name="city[]" value="Dehradun" <?php if(in_array("Dehradun",$city)) { ?> checked="checked" <?php } ?>>Dehradun</li>
            <li><input type="checkbox" name="city[]" value="Haridwar" <?php if(in_array("Haridwar",$city)) { ?> checked="checked" <?php } ?>>Haridwar</li>
            <li><input type="checkbox" name="city[]" value="Roorkee" <?php if(in_array("Roorkee",$city)) { ?> checked="checked" <?php } ?>>Roorkee</li>
            <li><input type="checkbox" name="city[]" value="Nainital" <?php if(in_array("Nainital",$city)) { ?> checked="checked" <?php } ?>>Nainital</li>
            <li><input type="checkbox" name="city[]" value="Rishikesh" <?php if(in_array("Rishikesh",$city)) { ?> checked="checked" <?php } ?>>Rishikesh</li>
            <li><input type="checkbox" name="city[]" value="Tehri Garhwal" <?php if(in_array("Tehri Garhwal",$city)) { ?> checked="checked" <?php } ?>>Tehri Garhwal</li>
            
            
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Haryana" <?php if(in_array("Haryana",$state)) { ?> checked="checked" <?php } ?>>Haryana
            <ul>
            <li><input type="checkbox" name="city[]" value="Faridabad" <?php if(in_array("Faridabad",$city)) { ?> checked="checked" <?php } ?>>Faridabad</li>
            <li><input type="checkbox" name="city[]" value="Gurgaon"  <?php if(in_array("Gurgaon",$city)) { ?> checked="checked" <?php } ?> >Gurgaon</li>
            <li><input type="checkbox" name="city[]" value="Panipat" <?php if(in_array("Panipat",$city)) { ?> checked="checked" <?php } ?>>Panipat</li>
            <li><input type="checkbox" name="city[]" value="Hisar" <?php if(in_array("Hisar",$city)) { ?> checked="checked" <?php } ?>>Hisar</li>
            <li><input type="checkbox" name="city[]" value="Rohtak" <?php if(in_array("Rohtak",$city)) { ?> checked="checked" <?php } ?>>Rohtak</li>
            <li><input type="checkbox" name="city[]" value="Sonipat" <?php if(in_array("Sonipat",$city)) { ?> checked="checked" <?php } ?>>Sonipat</li>
            <li><input type="checkbox" name="city[]" value="Panipat" <?php if(in_array("Panipat",$city)) { ?> checked="checked" <?php } ?>>Panipat</li>
            <li><input type="checkbox" name="city[]" value="Karnal" <?php if(in_array("Karnal",$city)) { ?> checked="checked" <?php } ?>>Karnal</li>

            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Delhi" <?php if(in_array("Delhi",$state)) { ?> checked="checked" <?php } ?>>Delhi
            <ul>
            <li><input type="checkbox" name="city[]" value="Delhi"  <?php if(in_array("Delhi",$city)) { ?> checked="checked" <?php } ?> >Delhi</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Uttar Pradesh" <?php if(in_array("Delhi",$city)) { ?> checked="checked" <?php } ?>>Uttar Pradesh
            <ul>
             <li><input type="checkbox" name="city[]" value="Noida"  <?php if(in_array("Noida",$city)) { ?> checked="checked" <?php } ?> >Noida</li>
             <li><input type="checkbox" name="city[]" value="Ghaziabad" <?php if(in_array("Ghaziabad",$city)) { ?> checked="checked" <?php } ?>>Ghaziabad</li>
            <li><input type="checkbox" name="city[]" value="Lucknow" <?php if(in_array("Lucknow",$city)) { ?> checked="checked" <?php } ?>>Lucknow</li>
            <li><input type="checkbox" name="city[]" value="Kanpur" <?php if(in_array("Kanpur",$city)) { ?> checked="checked" <?php } ?>>Kanpur</li>
            <li><input type="checkbox" name="city[]" value="Agra" <?php if(in_array("Agra",$city)) { ?> checked="checked" <?php } ?>>Agra</li>
            <li><input type="checkbox" name="city[]" value="Aligarh" <?php if(in_array("Aligarh",$city)) { ?> checked="checked" <?php } ?>>Aligarh</li>
            <li><input type="checkbox" name="city[]" value="Mathura" <?php if(in_array("Mathura",$city)) { ?> checked="checked" <?php } ?>>Mathura</li>
            <li><input type="checkbox" name="city[]" value="Meerut" <?php if(in_array("Meerut",$city)) { ?> checked="checked" <?php } ?>>Meerut</li>
            <li><input type="checkbox" name="city[]" value="Bulandshahar" <?php if(in_array("Bulandshahar",$city)) { ?> checked="checked" <?php } ?>>Bulandshahar</li>
            <li><input type="checkbox" name="city[]" value="Gorakhpur" <?php if(in_array("Gorakhpur",$city)) { ?> checked="checked" <?php } ?>>Gorakhpur</li>
            
            </ul>
        </li>
        </ul>
    </li>
    </ul>

    <ul>
    <li class="category"><input type="checkbox" name="region[]" value="South" <?php if(in_array("South",$region)) { ?> checked="checked" <?php } ?>><b>South</b>
        <ul>
        <li class="category"><input type="checkbox" name="state[]" value="Andhra Pradesh" <?php if(in_array("Andhra Pradesh",$state)) { ?> checked="checked" <?php } ?>>Andhra Pradesh
            <ul>
            <li><input type="checkbox" name="city[]" value="Vishakhapatanam" <?php if(in_array("Vishakhapatanam",$city)) { ?> checked="checked" <?php } ?>>Vishakhapatanam</li>
            <li><input type="checkbox" name="city[]" value="Vijawada" <?php if(in_array("Vijawada",$city)) { ?> checked="checked" <?php } ?>>Vijawada</li>
            <li><input type="checkbox" name="city[]" value="Amravati" <?php if(in_array("Amravati",$city)) { ?> checked="checked" <?php } ?>>Amravati</li>
            <li><input type="checkbox" name="city[]" value="Nellore" <?php if(in_array("Nellore",$city)) { ?> checked="checked" <?php } ?>>Nellore</li>
            <li><input type="checkbox" name="city[]" value="Chittoor" <?php if(in_array("Chittoor",$city)) { ?> checked="checked" <?php } ?>>Chittoor</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Karnataka" <?php if(in_array("Karnataka",$state)) { ?> checked="checked" <?php } ?>>Karnataka
            <ul>
            <li><input type="checkbox" name="city[]" value="Banglore" <?php if(in_array("Banglore",$city)) { ?> checked="checked" <?php } ?>>Banglore</li>
            <li><input type="checkbox" name="city[]" value="Mysore" <?php if(in_array("Mysore",$city)) { ?> checked="checked" <?php } ?>>Mysore</li>
            <li><input type="checkbox" name="city[]" value="Hubli-Dharwar" <?php if(in_array("Hubli-Dharwar",$city)) { ?> checked="checked" <?php } ?>>Hubli-Dharwar</li>
            <li><input type="checkbox" name="city[]" value="Bijapur" <?php if(in_array("Bijapur",$city)) { ?> checked="checked" <?php } ?>>Bijapur</li>
            <li><input type="checkbox" name="city[]" value="Belgaum" <?php if(in_array("Belgaum",$city)) { ?> checked="checked" <?php } ?>>Belgaum</li>
            <li><input type="checkbox" name="city[]" value="Manglore" <?php if(in_array("Manglore",$city)) { ?> checked="checked" <?php } ?>>Manglore</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Kerala" <?php if(in_array("Kerala",$state)) { ?> checked="checked" <?php } ?>>Kerala
            <ul>
            <li><input type="checkbox" name="city[]" value="Kochi" <?php if(in_array("Kochi",$city)) { ?> checked="checked" <?php } ?>>Kochi</li>
            <li><input type="checkbox" name="city[]" value="Thiruvananthapuram" <?php if(in_array("Thiruvananthapuram",$city)) { ?> checked="checked" <?php } ?>>Thiruvananthapuram</li>
            <li><input type="checkbox" name="city[]" value="Kollam" <?php if(in_array("Kollam",$city)) { ?> checked="checked" <?php } ?>>Kollam</li>
            <li><input type="checkbox" name="city[]" value="Kozhikode" <?php if(in_array("Kozhikode",$city)) { ?> checked="checked" <?php } ?>>Kozhikode</li>
            <li><input type="checkbox" name="city[]" value="Kasaragod" <?php if(in_array("Kasaragod",$city)) { ?> checked="checked" <?php } ?>>Kasaragod</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Tamil Nadu" <?php if(in_array("Tamil Nadu",$state)) { ?> checked="checked" <?php } ?>>Tamil Nadu
            <ul>
            <li><input type="checkbox" name="city[]" value="Chennai" <?php if(in_array("Chennai",$city)) { ?> checked="checked" <?php } ?>>Chennai</li>
            <li><input type="checkbox" name="city[]" value="Coimbatore" <?php if(in_array("Coimbatore",$city)) { ?> checked="checked" <?php } ?>>Coimbatore</li>
            <li><input type="checkbox" name="city[]" value="Madurai" <?php if(in_array("Madurai",$city)) { ?> checked="checked" <?php } ?>>Madurai</li>
            <li><input type="checkbox" name="city[]" value="Salem" <?php if(in_array("Salem",$city)) { ?> checked="checked" <?php } ?>>Salem</li>
            <li><input type="checkbox" name="city[]" value="Kanyakumari" <?php if(in_array("Kanyakumari",$city)) { ?> checked="checked" <?php } ?>>Kanyakumari</li>
            <li><input type="checkbox" name="city[]" value="Krishnagiri" <?php if(in_array("Krishnagiri",$city)) { ?> checked="checked" <?php } ?>>Krishnagiri</li>
            </ul>
        </li>
        <li class="category"><input type="checkbox" name="state[]" value="Telengana" <?php if(in_array("Telengana",$state)) { ?> checked="checked" <?php } ?>>Telengana
            <ul>
            <li><input type="checkbox" name="city[]" value="Hyderabad" <?php if(in_array("Hyderabad",$city)) { ?> checked="checked" <?php } ?>>Hyderabad</li>
            <li><input type="checkbox" name="city[]" value="Wrangal" <?php if(in_array("Wrangal",$city)) { ?> checked="checked" <?php } ?>>Wrangal</li>
            <li><input type="checkbox" name="city[]" value="Nalgonda" <?php if(in_array("Nalgonda",$city)) { ?> checked="checked" <?php } ?>>Nalgonda</li>
            <li><input type="checkbox" name="city[]" value="Karimnagar" <?php if(in_array("Karimnagar",$city)) { ?> checked="checked" <?php } ?>>Karimnagar</li>
            <li><input type="checkbox" name="city[]" value="Khammam" <?php if(in_array("Khammam",$city)) { ?> checked="checked" <?php } ?>>Khammam</li>
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

if (isset($_POST['region'])){

      $region = implode(", ",$_POST['region']);
      $state = implode(", ",$_POST['state']);
      $city = implode(", ",$_POST['city']);

}

$dob=date("Y-m-d",strtotime($dobold));
$ann_date=date("Y-m-d",strtotime($ann_dateold));
if(empty($name) || empty($department) || empty($role) || empty($rep_person) || empty($email) || empty($address) || empty($mobile) || empty($dob) || empty($ann_date) || empty($login_name) || empty($password1) || empty($password2) || empty($status) || empty($user_type)) {

echo '<script language="javascript">';
echo 'alert("Please Fill all the Fields")';
echo '</script>';
}else if(empty($region)){
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

        if($reg = mysql_query("SELECT * from user_desig WHERE id=".$_POST['designation'])){
      $row = mysql_fetch_assoc($reg);
      $designation = $row['designation'];
  }

  //$sta = mysql_query("SELECT * from user WHERE id=".$_POST['id']);
 //$row = mysql_fetch_assoc($sta);
 //$rep_person = $row['name'];

 if($query = mysql_query("UPDATE `comm_login`.`userdata` SET `name`='$name',`designation`='$designation',`department`='$department',`role`='$role',`report_person`='$rep_person',`email`='$email',`number`='$mobile',`address`='$address',`dob`='$dob',`anniversary`='$ann_date',`username`='$login_name',`password`='$password1',`user_status`='$status',`type`='$user_type',`region`='$region',`state`='$state',`city`='$city' WHERE `userdata`.`id`=".$_SESSION['red_id'])){

       echo '<script language="javascript">';
       echo 'alert("Data Updated Successfully")';
       echo '</script>';
    }
}
}
/*else{

 $host="localhost";
   $user="root";
   $pass="";

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

}*/

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
              <a href="#" class="go-top">
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
