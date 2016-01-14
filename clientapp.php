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
<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.5/jquery.min.js"></script>

<script type="application/javascript">
$(document).ready(function() //function to create tabs
{
$("#beatplan").addClass('select');
$("#outlet").removeClass('select');
$("#posm").removeClass('select');
$("#image").removeClass('select');
$("#beatbox").slideDown(10,'easeOutElastic');
$("#outletbox").hide().slideUp();
$("#imagebox").hide().slideUp();
$("#posmbox").hide().slideUp();
    
$(".tab").click(function()
{
var X=$(this).attr('id'); //fetch name of selected tab
 
if(X=='outlet') //contact tab is selected
{
$("#image").removeClass('select');
$("#posm").removeClass('select');
$("#outlet").addClass('select');
$("#beatplan").removeClass('select');
$("#imagebox").hide().slideUp();
$("#outletbox").slideDown(10,'easeOutElastic');
$("#posmbox").hide().slideUp();
$("#beatbox").hide().slideUp();

}
else if(X=='posm') //posm tab is selected
{
$("#image").removeClass('select');
$("#outlet").removeClass('select');
$("#posm").addClass('select');
$("#beatplan").removeClass('select');
$("#posmbox").slideDown(10,'easeOutElastic');
$("#imagebox").hide().slideUp();
$("#outletbox").hide().slideUp();
$("#beatbox").hide().slideUp();
}
else if(X=='image') //image tab is selected
{
$("#outlet").removeClass('select');
$("#posm").removeClass('select');
$("#image").addClass('select');
$("#beatplan").removeClass('select');
$("#outletbox").hide().slideUp();
$("#imagebox").slideDown(10,'easeOutElastic');
$("#posmbox").hide().slideUp();
$("#beatbox").hide().slideUp();
}
else
{
$("#outlet").removeClass('select');
$("#posm").removeClass('select');
$("#beatplan").addClass('select');
$("#image").removeClass('select');
$("#outletbox").hide().slideUp();
$("#beatbox").slideDown(10,'easeOutElastic');
$("#posmbox").hide().slideUp();
$("#imagebox").hide().slideUp();
}
 
});

});
</script>
<script type="text/javascript">
   $(document).ready(function(){ //function for disabling category box
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){ //checkbox is checked
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
            else if($(this).prop("checked") == false){ //checkbox is unchecked
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

    <title>Clientapp</title>
    <link rel="stylesheet" href="assets/css/datepicker.css">
    <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="all-ie-only.css" />
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        
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
     <div style="height: 60px;">
      <header class="header black-bg">
              
            <!--logo start-->
            <a href="clientapp.php" class="nina"><b>Retail Solutions</b></a>
            <!--logo end-->
            
            <div class="col-md-12 ">
            <div id="hornav" class="pull-right visible-lg">
              <ul class="nav navbar-nav">
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
            </div>
        </header>
        </div>
      <!--header end-->
<style>
a.nina:hover,a.nina:focus {
    color: #68dff0 !important;

}
body{
    line-height: 1.7em;
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
<div id="message"></div>

      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      
      
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<style>

#con
{
    width:100%;
    height: 100%;
}
#tabbox
{
    height:37px;
    border-bottom: groove;
    /*width: 600px;*/
}
#panel
{
    background-color: transparent;
    height:100%;
    width: 100%
    /*border-top: groove;*/
    
}
.tab
{
background: transparent;
display: block;
color: #000;
height: 40px;
line-height: 40px;
margin-left: 470px;
text-align: center;
width: 130px;
float: left;
font-weight: bold;
-webkit-border-top-left-radius: 4px;
-webkit-border-top-right-radius: 4px;
-moz-border-radius: 4px 4px 0px 0px;
}

a
{
color: #000;
margin: 0;
padding: 0;
text-decoration: none !important;
}
.tab a:hover{
    color: #fff !important;
    text-decoration: none !important;
}
.tab a:focus{
    color: #fff !important;
    text-decoration: none !important;
}

.outlet
{
    margin-left:8px;
    
}
.select
{
    background-color:#68dff0;
    color: #fff;
    text-decoration: none;
    
}
#outletbox
{
    height:500px;
    padding:10px;
    display: none;
}
#imagebox
{
    height:500px;
    padding:10px;
    /*display:none;*/
}
#posmbox
{
    height:500px;
    padding:10px;
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
    /*$('#vmdiv').change(function(){ //function to fetch vm info on page startup
        var opt = $('#vmdiv option:selected').val();
        //alert(opt);
        //var catId = $('#catdiv option:selected').val();
        var strURL="findvm.php?vm="+opt;
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
});*/
    function getCity(opt){ //function to fetch vm info
        //var opt = $('#vmdiv option:selected').val();

        var strURL="findvm.php?vm="+opt;
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
$(document).ready( function (){
$('#citydiv').change(function() //function to fetch location info on city selected
        {
        var option = $('#citydiv option:selected').val();
        //alert(option);
        var strURL="findLoc.php?location="+option;
        var req = getXMLHTTP();
        
        if (req) {
            
            req.onreadystatechange = function() {
       
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {                      
                        document.getElementById('locdiv').innerHTML=req.responseText;
                        //document.getElementById('outdiv').innerHTML='<select name="outlet">'+
                        //'<option>Select outlet</option>'+
                        //'</select>';

                    } else {
                        alert("Problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
        }
    }); 
});

/*$(document).ready( function () //function to fetch location info on page startup
{
        var option = $('#citydiv option:selected').val();
        var strURL="findLoc.php?location="+option;
        var req = getXMLHTTP();
        
        if (req) {
            
            req.onreadystatechange = function() {
       
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {                      
                        document.getElementById('locdiv').innerHTML=req.responseText;
                        //document.getElementById('outdiv').innerHTML='<select name="outlet">'+
                        //'<option>Select outlet</option>'+
                        //'</select>';

                    } else {
                        alert("Problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
        }
        });*/
        

/*$(document).ready( function () //function to fetch outlet info on page startup
{
var cityId = $('#citydiv option:selected').val();
        var strURL="findOut.php?location="+cityId;
        var req = getXMLHTTP();
        
        if (req) {
            
            req.onreadystatechange = function() {
       
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {                      
                        document.getElementById('outdiv').innerHTML=req.responseText;
                        //document.getElementById('outdiv').innerHTML='<select name="outlet">'+
                        //'<option>Select outlet</option>'+
                        //'</select>';

                    } else {
                        alert("Problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
        }
});*/
    
    function getLocation(cityId) { //function to fetch outlet info on city selected
        //var $options = $("#citydiv > :selected").clone();
        //$('#locdiv').val(cityId);

        var strURL="findLoc.php?location="+cityId;
        alert(strURL);
        var req = getXMLHTTP();
        
        if (req) {
            
            req.onreadystatechange = function() {
       
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {                      
                        document.getElementById('locdiv').innerHTML=req.responseText;
                        //document.getElementById('outdiv').innerHTML='<select name="outlet">'+
                        //'<option>Select outlet</option>'+
                        //'</select>';
//settg the values of the varialble for the execution of the data.
                    } else {
                        alert("Problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
        }       
    } 
    function getOutlet(catId) {     //function to fetch outlet info on category selected
        //var $options = $("#citydiv > :selected");
        //alert(catId);
        var opt = $('#citydiv option:selected').val();
        var strURL="findOutlet.php?category="+catId+"&city="+opt;
        var req = getXMLHTTP();
        
        if (req) {
            
            req.onreadystatechange = function() {
      
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {                        
                        document.getElementById('outdiv').innerHTML=req.responseText;       
               
                    } else {
                        alert("Problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
        }
                
    }

    /*$(document).ready( function (){ //function to fetch outlet info according to city and category on page startup
        var opt = $('#citydiv option:selected').val();
        var catId = $('#catdiv option:selected').val();
        var strURL="findOutlet.php?category="+catId+"&city="+opt;
        var req = getXMLHTTP();
        
        if (req) {
            
            req.onreadystatechange = function() {
      
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {                        
                        document.getElementById('outdiv').innerHTML=req.responseText;       
               
                    } else {
                        alert("Problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
        }
});*/


    
</script>


      <!--main content start-->
      <section>
          
                  <div align="center">

<div id="con" style="height: 569px; width: 100%; padding-top: 20px;">
<div id="tabbox">
<a href="#" id="beatplan" class="tab select">My Beatplan</a>
<a href="#" id="outlet" class="tab outlet">Outlet</a>
<a href="#" id="posm" class="tab outlet">POSM Entry</a>
<a href="#" id="image" class="tab outlet">Image Gallery</a>
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
                                              select.input-sm {
                                                line-height: 20px !important;
                                              }
                                              #font_stylex{
                                                font-size:13px;
                                                font-weight:150;
                                              }
                                              .clred{
                                                    color: #ff0000;
                                                }
                                              #updimg{
                                                    visibility: hidden;
                                                }
                                              #cltdata{
                                                    visibility: hidden;
                                                }
                                              </style>

<div id="panel">

<div id="outletbox" style="margin: center">
<br>
<?php 
              
                                        $host="182.50.133.87";
                                        $user="communique";
                                        $pass="umesh0028";
                                        $con = mysql_connect($host, $user, $pass); 
                                        if (!$con) {
                                            die('Could not connect: ' . mysql_error());
                                        }
                                        mysql_select_db('comm_login');
                                        $query="SELECT * FROM city ORDER BY city";
                                        $qry="SELECT DISTINCT vm FROM beatplan ORDER BY vm";
                                                 $result=mysql_query($query);
                                                 $rslt=mysql_query($qry);
                                        ?>
                                        <form method="post" action="?action=clientdata" id="clientdata" enctype="multipart/form-data">
                                        <table cellspacing="10" cellpadding="27">
                                        <div class="form-group">
                                        <tr>
                                            <td align="left"><span id="font_style">VM<b class="clred">*</b></span></td>
                                            <td align="left">
                                            <select id="vmdiv" name="vm" style="width:230px;" onChange="getCity(this.value)" class="form-control input-sm">
                                            <option>Select VM</option>
                                            <?php
                                            while ($row=mysql_fetch_array($rslt)) { ?>
                                               <option><?php echo $row['vm']?></option>
                                                                                            <?php } ?>
                                            </select></td>
                                        </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">City<b class="clred">*</b></span></td>
                                            <td align="left">
                                            <select id="citydiv" name="city" style="width:230px;" class="form-control input-sm">
                                            <option>Select City</option>
                                            </select></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Location</span></td>
                                            <td align="left">
                                            <select name="location" style="width:230px;" id="locdiv" class="form-control input-sm">
                                            <option>Select Location</option>
                                            </select></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Outlet Category<b class="clred">*</b></span></td>
                                            <td align="left">
                                            <select name="out_cat" id="catdiv" style="width:230px;" onChange="getOutlet(this.value)" class="form-control input-sm">
                                            <option>Select Category</option>
                                            <option value="1">A</option>
                                            <option value="2">B</option>
                                            <option value="3">C</option>
                                            </select></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Outlet<b class="clred">*</b></span></td>
                                            <td align="left">
                                            <select name="outlet" style="width:230px;" id="outdiv" class="form-control input-sm">
                                            <option value="">Select outlet</option>
                                            </select></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Outlet Area</span></td>
                                            <td align="left" colspan="1">
                                            <input type="number" name="out_area" style="width:230px;" class="form-control input-sm" id="out_area" /></td>
                                            <td>Sq. ft.</td>
                                            </tr>
                                            </div>
                                        </table>                               
         </div>
         <div id="posmbox" style="margin: center">
         <br>
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
                                              .form-group{
                                                margin-bottom: 3px !important;
                                              }
                                              </style>
                                        <table cellspacing="10" cellpadding="25">
                                            <div class="form-group">
                                            <td align="left"><span id="font_style">Bunting</span></td>
                                            <td align="left"><input type="number" name="bunting" class="form-control input-sm" placeholder="Enter bunting" style="width:150px;" id="bunting" /></td>
                                            </tr>
                                            <tr>
                                            <div class="form-group">
                                            <td align="left"><span id="font_style">Dangler</span></td>
                                            <td align="left"><input type="number" name="dangler" class="form-control input-sm" placeholder="Enter dangler" style="width:150px;" id="dangler" /></td>
                                            </tr>
                                            <tr>
                                            <div class="form-group">
                                            <td align="left"><span id="font_style">Poster</span></td>
                                            <td align="left"><input type="number" name="poster" class="form-control input-sm" placeholder="Enter poster" style="width:150px;" id="poster" /></td>
                                            </tr>
                                            <tr>
                                            <div class="form-group">
                                            <td align="left"><span id="font_style">TearPad</span></td>
                                            <td align="left"><input type="number" name="tearpad" class="form-control input-sm" placeholder="Enter tearpad" style="width:150px;" id="tearpad" /></td>
                                            </tr>
                                            <tr>
                                            <div class="form-group">
                                            <td align="left"><span id="font_style">LeafPad</span></td>
                                            <td align="left"><input type="number" name="leafpad" class="form-control input-sm" placeholder="Enter leafpad" style="width:150px;" id="leafpad" /></td>
                                            </tr>
                                            <tr>
                                            <div class="form-group">
                                            <td align="left"><span id="font_style">Brochure</span></td>
                                            <td align="left"><input type="number" name="brochure" class="form-control input-sm" placeholder="Enter brochure" style="width:150px;" id="brochure" /></td>
                                            </tr>
                                            <tr>
                                            <div class="form-group">
                                            <td align="left"><span id="font_style">Wobblers</span></td>
                                            <td align="left"><input type="number" name="wobblers" class="form-control input-sm" placeholder="Enter wobblers" style="width:150px;" id="wobblers" /></td>
                                            </tr>
                                            <tr>
                                            <div class="form-group">
                                            <td align="left"><span id="font_style">Tent Card</span></td>
                                            <td align="left"><input type="number" name="tentcard" class="form-control input-sm" placeholder="Enter tentcard" style="width:150px;" id="tentcard" /></td>
                                            </tr>
                                            <tr>
                                            <div class="form-group">
                                            <td align="left"><span id="font_style">Others</span></td>
                                            <td align="left"><input type="number" name="others" class="form-control input-sm" placeholder="Enter others" style="width:150px;" id="others" /></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">Deployment Status</span></td>
                                            <td align="left"><label><select name="depst" class="form-control input-sm" style="width:150px;" id="depst">
                                            
                                            <option>Full</option>
                                            <option>Part</option>
                                            <option>Handouts</option>
                                            <option>No Deployment</option>
                                            <option>To be deleted</option>
                                            </select></label></td>
                                            </tr>
                                            <tr>
                                            <td align="left"><span id="font_style">VM Remarks</span></td>
                                            <td align="left"><label><select name="vmrem" class="form-control input-sm" style="width:150px;" id="vmrem">
                                            
                                            <option>Deploy all POSM</option>
                                        
                                            </select></label>
                                            </td>
                                            </tr>
                                            
                                            <tr>
                                            <td align="left"><span id="font_style">Special Remarks</span></td>
                                            <td align="left"><input type="text" name="specialrem" class="form-control input-sm" placeholder="Enter Remarks" style="width:150px;" id="specialrem" /></td>
                                            </tr>
                                            <tr>
                                            <td>
                                            <!--<input type="submit" name="save" class="btn btn-primary btn-round" value="Save" id="cltdata" />--></td>
                                            </tr>
                                        </table>
                                        <!--</form>-->
  
</div>
<div id="imagebox" style="margin: center">
                                        
                                        <br>    
                                       <table>
                                       <!--<form action="?action=uploadimg" method="POST" enctype="multipart/form-data" id="uploadimg"> -->
                                       <tr>
                                            <td align="left"><span id="font_stylex">Facade Image</span></td>
                                           <td><input type="file" name="image1"></td>
                                            
                                       </tr>
                                       <tr><td></td></tr>
                                       <tr><td></td></tr>
                                       <tr><td></td></tr>
                                      
                                       <tr>
                                            <td align="left"><span id="font_stylex">Right Wall Image</span></td>
                                           <td><input type="file" name="image2"></td>
                                            
                                       </tr>
                                       <tr><td></td></tr>
                                       <tr><td></td></tr>
                                       <tr><td></td></tr>
                                      
                                       <tr>
                                            <td align="left"><span id="font_stylex">Left Side Image</span></td>
                                           <td><input type="file" name="image3"></td>
                                            
                                       </tr>
                                       <tr><td></td></tr>
                                       <tr><td></td></tr>
                                       <tr><td></td></tr>
                                       
                                       <tr>
                                            <td align="left"><span id="font_stylex">Ceiling Image</span></td>
                                           <td><input type="file" name="image4"></td>
                                           
                                       </tr>
                                       <tr><td></td></tr>
                                       <tr><td></td></tr>
                                       <tr><td></td></tr>
                                      
                                       <tr>
                                            <td align="left"><span id="font_stylex">Open Image</span></td>
                                           <td><input type="file" name="image5"></td>
                                            
                                       </tr>
                                       <tr><td></td></tr>
                                       <tr><td></td></tr>
                                       <tr><td></td></tr>
                                      
                                       <tr>
                                            <td align="left"><span id="font_stylex">Open Image</span></td>
                                           <td><input type="file" name="image6"></td>
                                            
                                       </tr>
                                       
                                       <tr><td></td></tr>
                                            <tr>
                                            <td>
                                            <!--<input type="submit" name="save" class="btn btn-primary btn-round" value="Save" id="updimg" />--></td>
                                            </tr>
                                            
                                            <tr>
                                            <td colspan="2" align="center">
                                            <input type="submit" value="Send" class="btn btn-success btn-round" id="finalsubmit">
                                            <a href="#" role="button" class="btn btn-primary btn-round">Save</a>
                                            <a href="dashboard.php" role="button" class="btn btn-danger btn-round">Back</a>
                                            
                                            </td>
                                            </tr>
                                       
                                       </table>
                                       </form>
                                       
                                                
</div>
<div id="beatbox">
    
    <br>
<?php
$username = $_SESSION['login_user'];
$today_date =  date("Y-m-d");
$username = $_SESSION['login_user'];

    if($myresult = mysql_query("SELECT * FROM newbeat_excel WHERE `vm name`='$username' AND (`dov1` = '$today_date' OR `dov2` = '$today_date' OR `dov3` = '$today_date' OR `dov4` = '$today_date' OR `dov5` = '$today_date' OR `dov6` = '$today_date')")){
      
    if(mysql_num_rows($myresult)>0){

          echo '<table class="table table-bordered table-striped table-condensed" id="mytable">
                            <thead>
                              <th>S.No</th>
                              <th>Zone</th>
                              <th>State</th>
                              <th>City</th>
                              <th>Dealer Code</th>
                              <th>Dealer Name</th>
                              <th>Category</th>
                              <th>Address</th>
                              <th>Location</th>
                           
                          </thead>';
                          
    while($row=mysql_fetch_assoc($myresult)){

       if($row['dov1']==$today_date || $row['dov2']==$today_date || $row['dov3']==$today_date || $row['dov4']==$today_date|| $row['dov5']==$today_date || $row['dov6']==$today_date){
          // display data in table
                  
        echo '<tbody>';
        echo '<tr>';
          echo '<td>'.$row['id'].'</td>';

          echo'<td>'.$row['zone'].'</td>';
 
          echo'<td>'.$row['state'].'</td>';

          echo'<td>'.$row['city'].'</td>';
                   
          echo'<td>'.$row['dealer code'].'</td>';

          echo'<td>'.$row['dealer name'].'</td>';

          echo'<td>'.$row['category'].'</td>';

          echo'<td>'.$row['address'].'</td>';

          echo'<td>'.$row['location'].'</td>';

          echo '</tr> </tbody>';
        
     }
   
       }
    }else{
       echo '<h2>No Beatplan for Today !</h2>';

    }
    echo '</table><br>';
    }

    ?>
</div>
</div>
<style type="text/css">
    h2{
        text-align: center;
        margin-top: 200px;
    }

     
</style>
<style type="text/css">

            th,td{
                border-width:0px 1px 1px 0px;
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
              width: 1200px !important;
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
            }

        </style>


</div>
</div>
<script type="text/javascript">
/*function savedata(){
    $.ajax({
                        url: 'outdata.php',
                        type: 'POST',
                        data: 'vm'=$("#vmdiv option:selected").val()'&city'=$("#citydiv option:selected").val()'&outlet'=$("#outdiv option:selected").val()'&out_cat'=$("#catdiv option:selected").val()'&area'=$("#out_area").val()'&bunting'= $("#bunting").val()'&dangler'= $("#dangler").val()'&poster'= $("#poster").val()'&tearpad'= $("#tearpad").val()'&leafpad'= $("#leafpad").val()'&brochure'= $("#brochure").val()'&wobblers'= $("#wobblers").val()'&tentcard'= $("#tentcard").val()'&others'= $("#others").val()'&depst'= $("#depst").val()'&vmrem'= $("#vmrem").val()'&specialrem'= $("#specialrem").val(),
                        success: function(data) {
                            $("#message").hide();
                            $('#uploadimg').submit();
                            alert(data);
                        },
                        error:function (){
                            alert("Unable to save data");
                        });
            });
}*/
savedata=function(){
    //alert("abc");
document.getElementById("#uploadimg").submit();
document.getElementById("#clientdata").submit();
}
</script>


<?php


if ($action=="clientdata"){

$out_cat = $_POST['out_cat'];
$area=$_POST['out_area'];
$bunting = $_POST['bunting'];
$dangler = $_POST['dangler'];
$poster = $_POST['poster'];
$tearpad = $_POST['tearpad'];
$leafpad = $_POST['leafpad'];
$brochure = $_POST['brochure'];
$wobblers = $_POST['wobblers'];
$tentcard = $_POST['tentcard'];
$others = $_POST['others'];
$depst = $_POST['depst'];
$vmrem = $_POST['vmrem'];
$specialrem = $_POST['specialrem'];

//assigning blank fields a value 0
 if(empty($_POST['bunting'])){
    $bunting=0;
 }if(empty($_POST['dangler'])){
    $dangler=0;
 }if(empty($_POST['poster'])){
    $poster=0;
 }if(empty($_POST['tearpad'])){
    $tearpad=0;
 }if(empty($_POST['leafpad'])){
    $leafpad=0;
 }if(empty($_POST['brochure'])){
    $brochure=0;
 }if(empty($_POST['wobblers'])){
    $wobblers=0;
 }if(empty($_POST['tentcard'])){
    $tentcard=0;
 }if(empty($_POST['others'])){
    $others=0;
 }
/*echo($_POST['city']);
echo($_POST['location']);
echo($_POST['out_cat']);
echo($_POST['outlet']);
echo($_POST['out_area']);
echo($_POST['bunting']);
echo($_POST['dangler']);
echo($_POST['poster']);
echo($_POST['tearpad']);
echo($_POST['leafpad']); echo($_POST['brochure']); echo($_POST['wobblers']); echo($_POST['tentcard']);
echo($_POST['others']); echo($_POST['depst']); echo($_POST['vmrem']); echo($_POST['specialrem']);*/

if(empty($_POST['city']) || empty($_POST['location']) || empty($_POST['out_cat']) || empty($_POST['outlet']) || empty($_POST['out_area'])){

echo '<script language="javascript">';
echo 'alert("Please Fill the outlet data")';
echo '</script>';

}else{
$username = $_SESSION['login_user'];
$cit = mysql_query("SELECT * from beatplan WHERE id=".$_POST['city']);
 $row = mysql_fetch_assoc($cit);
   $city  = $row['city'];
   $location  = $city;
   $out = mysql_query("SELECT * from outletinfo WHERE id=".$_POST['outlet']);
   $row = mysql_fetch_assoc($out);
   $outlet  = $row['name'];

if($out_cat==1){
    $out_cat="A";
}
if($out_cat==2){
    $out_cat="B";
}
if($out_cat==3){
    $out_cat="C";
}
if($depst==1){
    $depst="Full";
}
if($depst==2){
    $depst="Part";
}
if($depst==3){
    $depst="Handouts";
}
if($depst==4){
    $depst="No Deployment";
}
if($depst==5){
    $depst="To be deleted";
}
if($vmrem==0){
    $vmrem="Deploy all POSM";
}

$qry=mysql_query("SELECT * FROM `posm` WHERE `city`='$city'");
$rslt = mysql_fetch_assoc($qry);

//getting stock data from POSM
            $bun = $rslt['bunting'];
            $dang = $rslt['dangler'];
            $post = $rslt['poster'];
            $tear = $rslt['tearpad'];
            $leaf = $rslt['leafpad'];
            $broc = $rslt['brochure'];
            $wobb = $rslt['wobblers'];
            $tent = $rslt['tentcard'];
            $othn = $rslt['others'];
           

//calculating new POSM stock
            $bunnew=$bun-$bunting;
            $dangnew=$dang-$dangler;
            $posnew=$post-$poster;
            $tearnew=$tear-$tearpad;
            $leafnew=$leaf-$leafpad;
            $brocnew=$broc-$brochure;
            $wobnew=$wobb-$wobblers;
            $tentnew=$tent-$tentcard;
            $othnew=$othn-$others;


$img1=0;
$img2=0;
$img3=0;
$img4=0;
$myarray = [];

    $errors= array();
    $extensions= array(".jpg",".jpeg",".png",".gif");
    $file_name = $_FILES['image1']['name'];
    $file_ext=substr($file_name, strrpos($file_name, '.'));
    $info = pathinfo($_FILES['image1']['name']);
    $target = 'uploads/upload_stores/'.$file_name;
if(!empty($_FILES['image1']['name']))
{
if(in_array($file_ext,$extensions)=== false){
    $errors[]="extension not allowed, please choose a .xls file.";
    echo '<script language="javascript">';
    echo 'alert("Please Upload only image file for Facade.")';
    echo '</script>';
      }
      if(empty($errors)==true){
        move_uploaded_file( $_FILES['image1']['tmp_name'], $target);
        //echo '<script language="javascript">';
        //echo 'alert("File Uploaded")';
        //echo '</script>';
        $img1=1;
        array_push($myarray, $file_name);
        $exif_data = exif_read_data ($target);
          if (!empty($exif_data['DateTimeOriginal'])) {
          $exif_date = $exif_data['DateTimeOriginal'];
         //print_r($exif_date);
         $datetime = date("Y-m-d H:i:s", strtotime($exif_date));
         $date_time = (explode(" ",$datetime));
     }else{
        $date_time = array('00-00-0000', '00:00:00');
     }
      }
      else{
         //print_r($errors);
         //header("location: masterdata.php");
}
}
else
{
   // echo '<script language="javascript">';
   // echo 'alert("Please select a Facade Image")';
   // echo '</script>';
}


    $errors= array();
    $extensions= array(".jpg",".jpeg",".png",".gif");
    $file_name = $_FILES['image2']['name'];
    $file_ext=substr($file_name, strrpos($file_name, '.'));
    $info = pathinfo($_FILES['image2']['name']);
    $target = 'uploads/upload_stores/'.$file_name;
if(!empty($_FILES['image2']['name']))
{
if(in_array($file_ext,$extensions)=== false){
    $errors[]="extension not allowed, please choose a .xls file.";
    echo '<script language="javascript">';
    echo 'alert("Please Upload only image file for Right Wall.")';
    echo '</script>';
      }
      if(empty($errors)==true){
        move_uploaded_file( $_FILES['image2']['tmp_name'], $target);
        //echo '<script language="javascript">';
       // echo 'alert("File Uploaded")';
       // echo '</script>';
        $img2=1;
         array_push($myarray, $file_name);


      }
      else{
         //print_r($errors);
         //header("location: masterdata.php");
}
}
else
{
    //echo '<script language="javascript">';
    //echo 'alert("Please select a Right Wall Image")';
    //echo '</script>';
}


    $errors= array();
    $extensions= array(".jpg",".jpeg",".png",".gif");
    $file_name = $_FILES['image3']['name'];
    $file_ext=substr($file_name, strrpos($file_name, '.'));
    $info = pathinfo($_FILES['image3']['name']);
    $target = 'uploads/upload_stores/'.$file_name;
if(!empty($_FILES['image3']['name'])){

if(in_array($file_ext,$extensions)=== false){
    $errors[]="extension not allowed, please choose a .xls file.";
    echo '<script language="javascript">';
    echo 'alert("Please Upload only image file for Left Side.")';
    echo '</script>';
      }
      if(empty($errors)==true){
        move_uploaded_file( $_FILES['image3']['tmp_name'], $target);
       // echo '<script language="javascript">';
       // echo 'alert("File Uploaded")';
       // echo '</script>';
        $img3=1;
        array_push($myarray, $file_name);
      }else{
         //print_r($errors);
         //header("location: masterdata.php");
        }
}
else    
{
    //echo '<script language="javascript">';
    //echo 'alert("Please select a Left Side Image")';
    //echo '</script>';
}


    $errors= array();
    $extensions= array(".jpg",".jpeg",".png",".gif");
    $file_name = $_FILES['image4']['name'];
    $file_ext=substr($file_name, strrpos($file_name, '.'));
    $info = pathinfo($_FILES['image4']['name']);
    $target = 'uploads/upload_stores/'.$file_name;
if(!empty($_FILES['image4']['name']))
{
if(in_array($file_ext,$extensions)=== false){
    $errors[]="extension not allowed, please choose a .xls file.";
    echo '<script language="javascript">';
    echo 'alert("Please Upload only image file for Ceiling.")';
    echo '</script>';
      }
      if(empty($errors)==true){
        move_uploaded_file( $_FILES['image4']['tmp_name'], $target);
        //echo '<script language="javascript">';
        //echo 'alert("File Uploaded")';
        //echo '</script>';
        $img4=1;
        array_push($myarray, $file_name);
      }
      else{
         //print_r($errors);
         //header("location: masterdata.php");
}
}
else
{
    //echo '<script language="javascript">';
    //echo 'alert("Please select a Ceiling Image")';
   // echo '</script>';
}

    $errors= array();
    $extensions= array(".jpg",".jpeg",".png",".gif");
    $file_name = $_FILES['image5']['name'];
    $file_ext=substr($file_name, strrpos($file_name, '.'));
    $info = pathinfo($_FILES['image5']['name']);
    $target = 'uploads/upload_stores/'.$file_name;
if(!empty($_FILES['image5']['name']))
{
if(in_array($file_ext,$extensions)=== false){
    $errors[]="extension not allowed, please choose a .xls file.";
    echo '<script language="javascript">';
    echo 'alert("Please Upload only image file for Open.")';
    echo '</script>';
      }

      if(empty($errors)==true){
        move_uploaded_file( $_FILES['image5']['tmp_name'], $target);
        //echo '<script language="javascript">';
        //echo 'alert("File Uploaded")';
        //echo '</script>';
        array_push($myarray, $file_name);
      }else{
          //print_r($errors);
         //header("location: masterdata.php");
}

}
else
{
    
    //echo '<script language="javascript">';
    //echo 'alert("Please select a file")';
    //echo '</script>';
}

    $errors= array();
    $extensions= array(".jpg",".jpeg",".png",".gif");
    $file_name = $_FILES['image6']['name'];
    $file_ext=substr($file_name, strrpos($file_name, '.'));
    $info = pathinfo($_FILES['image6']['name']);
    $target = 'uploads/upload_stores/'.$file_name;
if(!empty($_FILES['image6']['name']))
{
if(in_array($file_ext,$extensions)=== false){
    $errors[]="extension not allowed, please choose a .xls file.";
    echo '<script language="javascript">';
    echo 'alert("Please Upload only image file for Open.")';
    echo '</script>';
      }
      if(empty($errors)==true){
        move_uploaded_file( $_FILES['image6']['tmp_name'], $target);
       // echo '<script language="javascript">';
       // echo 'alert("File Uploaded")';
       // echo '</script>';
        array_push($myarray, $file_name);
      }else{
         //print_r($errors);
         //header("location: masterdata.php");
}
}
else
{
    
    //echo '<script language="javascript">';
    //echo 'alert("Please select a file")';
    //echo '</script>';

}


$images_name = implode("~",$myarray);
  
if($img1 == 1 && $img2 == 1 && $img3 == 1 && $img4 == 1){

$query1 = mysql_query("INSERT INTO `comm_login`.`clientappdata` (`id`, `date`, `time`, `city`, `location`, `out_cat`, `outlet`, `area`, `bunting`, `dangler`, `poster`, `tearpad`, `leafpad`, `brochure`, `wobblers`, `tentcards`, `others`, `status`, `remarks`, `spl_remarks`,`username`,`images_name`) VALUES (NULL, '$date_time[0]','$date_time[1]','$city', '$location', '$out_cat', '$outlet', '$area', '$bunting', '$dangler', '$poster', '$tearpad', '$leafpad', '$brochure', '$wobblers', '$tentcard', '$others', '$depst', '$vmrem', '$specialrem', '$username', '$images_name')");

//updating new values in POSM
$query2=mysql_query("UPDATE `comm_login`.`posm` SET `bunting`='$bunnew' , `dangler`='$dangnew' , `poster`='$posnew' , `tearpad`='$tearnew' , `leafpad`='$leafnew' , `brochure`='$brocnew' , `wobblers`='$wobnew' , `tentcard`='$tentnew' , `others`='$othnew' WHERE `city`='$city'");

if($query1 && $query2){
        echo '<script language="javascript">';
        echo 'alert("Data Saved Successfully")';
        echo '</script>';
}else{
        echo '<script language="javascript">';
        echo 'alert("Error in Storing Data")';
        echo '</script>';
    }
    /*if($query2){
        echo '<script language="javascript">';
        echo 'alert("Data Saved Successfully")';
        echo '</script>';
}else{
        echo '<script language="javascript">';
        echo 'alert("Error in Updating data")';
        echo '</script>';
}*/
}else{
        echo '<script language="javascript">';
        echo 'alert("Please Select Atleast 4 Images!")';
        echo '</script>';
}
}
}

?>


                    
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              <a href="http://www.gbusolutions.com">GBU SOLUTIONS</a>
              <a href="general.php#" class="go-top">
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
