<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php
$thelist='';
  if ($handle = opendir('uploads/uploads_masterdata/')) {
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != "..") {
        $thelist .= '<li><a href="uploads/uploads_masterdata/'.$file.'">'.$file.'</a></li>';
      }
    }
    closedir($handle);
  }

echo '<h1><u>Click to Download files</u></h1>';
echo '<ol>'.$thelist.'</ol>';

?>

<ul><a href="javascript:history.go(-1)" class="btn btn-primary">Go Back</a></ul>