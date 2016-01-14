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

    <title>Retail Solutions</title>

    <!--external css-->
    <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />   
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">


<style type="text/css">
body{
font-family: 'Ruda', sans-serif !important;
line-height: 1.7em !important;
}
#thumb {
clear : both;
width : 100%;
margin-left : 0;
}
#thumb ul {
width : 100%;
}
#thumb ul li {
display : inline;
font-family : arial;
float : left;
padding-right : 5px;

}
#thumb ul li img {
float : left;
width : 200px;
height : 200px;
border : #ccc solid 1px;
padding : 2px;
}

form{
  text-align: center;
  margin-top: 20px;
  }
.form-control{
    min-width: 0;
    width: auto;
    display: inline;
}

h2 {
  text-align: center;
}
label{
  font-size: 20px;
}

</style>
        <style type="text/css">



form{
  text-align: center;
  margin-top: 20px;
}
h2 {
  text-align: center;
}


.form-control{
    min-width: 0 !important;
    width: auto !important;
    display: inline !important;
}
body {
    
    background-color: #f2f2f2!important;
}

label{
  font-size: 20px;
}


        </style> 
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">  

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

              <div class="row">
<?php


                                        $host="182.50.133.87";
                                        $user="communique";
                                        $pass="umesh0028";



      $connector = mysql_connect($host,$user,$pass)
        or die("Unable to connect");
      $selected = mysql_select_db("comm_login", $connector)
        or die("Unable to connect");


?>
<form action="" method="post">
 <label> Check User Report Status</label>
 <div class="form-group">
  <select name="user" class="form-control">
  <option value="">Select User</option>
  <?php
  $result = mysql_query("SELECT DISTINCT username FROM clientappdata ORDER BY username" );
  while ($row=mysql_fetch_array($result)) { ?>
<option value=<?php echo $row['username']?>><?php echo $row['username']?></option>
<?php } ?>
  
</select></div>
  <input type="submit" name="go" class="btn btn-default btn" value="Go!">
</form>


  
<style type="text/css">
  #mytab{
    margin-top: 20px;

      }
  </style>

  
              </div><!--/row -->
          </section>
          <br>
          <br>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="navbar-fixed-bottom site-footer">
          <div class="text-center">
              <a href="http://www.gbusolutions.com">GBU SOLUTIONS</a>
              <a href="dashboard.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
   
  

  </body>
</html>




<?php

                                        $host="182.50.133.87";
                                        $user="communique";
                                        $pass="umesh0028";



      $connector = mysql_connect($host,$user,$pass)
        or die("Unable to connect");
      $selected = mysql_select_db("comm_login", $connector)
        or die("Unable to connect");
        
if(isset($_POST['go'])){
  if(!empty($_POST['user'])){
   $username = $_POST['user'];
      //execute the SQL query and return records
     $result = mysql_query("SELECT * FROM clientappdata WHERE username ='$username'");

     ?>
      
      <?php if (!empty($username)){
      echo "<h2>Report Status for <b class='bb'> $username </b></h2>";
      }else{
        echo "";
      }
      ?>
     
      <table class="table table-bordered table-striped table-condensed" border="1" style="width: 100%; font-size: 90%;">
      
      

      <?php

                    echo "<thead>
                            
                              <th>S.no</th>
                              <th>Gallery</th>
                              <th>Date</th>
                              <th>Time</th>
                              <th>City</th>
                              <th>Location</th>
                              <th>Outlet Category</th>
                              <th>Outlet Name</th>
                              <th>Outlet Area</th>
                              <th>Bunting</th>
                              <th>Dangler</th>
                              <th>Poster</th>
                              <th>Tearpad</th>
                              <th>Leafpad</th>
                              <th>Brochure</th>
                              <th>Wobblers</th>
                              <th>Tentcards</th>
                              <th>Others</th>
                              
                            
                          </thead>";

while($row = mysql_fetch_assoc( $result )){
          echo '<tbody>';
          echo '<tr>';
          echo '<td>'.$row['id'].'</td>';
          ?>
          <td><a href="photo.php?id=<?php echo $row['id']; ?>"><img src="images/galleryimg.png" border="0" width="40px" height="40px" alt="Link to this page" data-toggle="modal" data-target="#myModal" data-whatever="<?php echo $row['id'];?>"></a></td>
          <?php
           $tabledate = $row['date'];
           $formatteddate = date("d/m/Y", strtotime($tabledate));
          echo '<td>'.$formatteddate.'</td>';
          echo '<td>'.$row['time'].'</td>';
          echo'<td>'.$row['city'].'</td>';
          echo'<td>'.$row['location'].'</td>';
          echo'<td>'.$row['out_cat'].'</td>';        
          echo'<td>'.$row['outlet'].'</td>';

          echo'<td>'.$row['area'].'</td>';

          echo'<td>'.$row['bunting'].'</td>';

          echo'<td>'.$row['dangler'].'</td>';

          echo'<td>'.$row['poster'].'</td>';

          echo'<td>'.$row['tearpad'].'</td>';

          echo'<td>'.$row['leafpad'].'</td>';

          echo'<td>'.$row['brochure'].'</td>';

          echo'<td>'.$row['wobblers'].'</td>';

          echo'<td>'.$row['tentcards'].'</td>';

          echo'<td>'.$row['others'].'</td>';

          

          echo '</tr> </tbody>';
       }


        ?>
     
        
            

    </table><br>
     <div class="wrapper">
    <a href="export_statusreport.php" id="export" type="button" class="btn btn-info">Export</a>
    </div>
   </div>
   <style type="text/css">

            th,td{
                border-width:0px 1px 1px 0px;
                text-align: center;
            }
            th
            {
                background-color: #ccffff;
            }
           
            }
            table{
              background-color: #ffffe5;
            }
            .bb{
              color:#29cc83;
            }
              .wrapper {
              text-align: center;
             }

             #export {
              position: absolute;
              margin-bottom: 100px;
              margin-top: -40px;
              }

        </style>

    
     <?php mysql_close($connector); 

 }else{

     echo '<script language="javascript">';
     echo 'alert("Please select a User")';
     echo '</script>';
 }

}
     ?>
 <div class="container">
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="memberModalLabel">Image Gallery</h4>
                </div>
                <div class="ct">
              
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        
        <!-- /.col-lg-12 -->
    </div>
   
</div>
<script>
    $('#myModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);
          var dataString = 'id=' + recipient;

            $.ajax({
                type: "GET",
                url: "showgallery.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    console.log(data);
                    modal.find('.ct').html(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });  
    })
    </script>

