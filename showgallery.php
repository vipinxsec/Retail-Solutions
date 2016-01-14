<!DOCTYPE html>
<html>
<head>

<title>Photo Gallery</title>
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">


<style type="text/css">
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
b{
  color:#29cc83;
}
h2 {
  text-align: center;
}
label{
  font-size: 20px;
}

</style>
  
</head>
<body>

<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php


    $username = "communique";
    $password = "umesh0028";
    $hostname = "182.50.133.87";
    $db_name = "comm_login"; 

    //connection to the database
    $dbhandle = mysql_connect($hostname, $username, $password)
        or die("Unable to connect to MySQL");
    $selected = mysql_select_db($db_name,$dbhandle)
        or die("Could not select examples");

     $id = $_GET['id'];  

    $query = "SELECT * FROM `clientappdata` WHERE `id`='$id'";
    $result =  mysql_query($query) or die(mysql_error());
    $images = mysql_fetch_assoc($result) or die(mysql_error());
    $user_images = $images['images_name'];

$target = 'uploads/upload_stores/';

  
echo '<div id="thumb"><ul>';
                    echo '<div id="links">';                  
            
                
            $final_images = explode("~",$user_images);
            foreach ($final_images as $image_url) {
          
            $display_images =  $target.$image_url;
            
            
            //echo '<li><img src="'.$image_url.'"/></li>';

            
    echo '<li><a href="'.$display_images.'" title="Photo Gallery" data-gallery>';
        echo '<img src="'.$display_images.'" alt="Yeah""><li>';
    echo '</a>';

            //echo '<li><img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/></li>';
            
         
        }
       
        echo '</div>';
         echo '</ul></div>';
    

  ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="js/bootstrap-image-gallery.min.js"></script>

</body>
</html>