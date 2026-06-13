<?php session_start(); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



<?php
$path = "uploads/uploads_masterdata/";
if (isset($_POST['Delete'])){
if(isset($_POST['file']) && is_array($_POST['file']))
{
	foreach($_POST['file'] as $file)
	{	
		unlink($path . "/" . $file) or die("Failed to <strong class='highlight'>delete</strong> file");
	}
	// Pendo Track Event: masterdata_file_deleted
	$_pendo_data = json_encode(array("type" => "track", "event" => "masterdata_file_deleted", "visitorId" => isset($_SESSION['login_user']) ? $_SESSION['login_user'] : "system", "accountId" => "retail_solutions", "timestamp" => round(microtime(true) * 1000), "properties" => array("file_count" => count($_POST['file']), "file_names" => implode(", ", $_POST['file']))));
	$_pendo_ctx = stream_context_create(array("http" => array("method" => "POST", "header" => "Content-Type: application/json\r\nx-pendo-integration-key: 1a661aff-d6a7-48f1-b965-4905746aaca8\r\n", "content" => $_pendo_data, "timeout" => 2)));
	@file_get_contents("https://data.pendo.io/data/track", false, $_pendo_ctx);
	header("location: " . $_SERVER['REQUEST_URI']); //redirect after deleting files so the user can refresh without that resending post info message

}else{
	echo '<script language="javascript">';
    echo 'alert("Please Select a File to Delete")';
    echo '</script>';
}
}
?>
<form name="form1" method="post">
<h1><u>Select the file and click delete</u></h1><br>
<?php
$path = "uploads/uploads_masterdata/";
$dir_handle = @opendir($path) or die("Unable to open folder");
while (false !== ($file = readdir($dir_handle))) 
{
if($file == "index.php")
continue;
if($file == ".")
continue;
if($file == "..")
continue;
echo "&nbsp;<input type='CHECKBOX' name='file[]' value='$file'>"; 

echo '&nbsp;<a href="uploads/uploads_masterdata/'.$file.'">  &nbsp;'.$file.'</a><br />'; 

}
closedir($dir_handle);
?>
<br>
&nbsp;<input type="submit" class="btn btn-primary" name="Delete" value="Delete"> <a href="javascript:history.go(-1)" class="btn btn-primary">Go Back</a>

</form>

