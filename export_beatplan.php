<?php
session_start();
/***** EDIT BELOW LINES *****/
$DB_Server = "182.50.133.87"; // MySQL Server
$DB_Username = "communique"; // MySQL Username
$DB_Password = "umesh0028"; // MySQL Password
$DB_DBName = "comm_login"; // MySQL Database Name
$DB_TBLName = "uploading_beatexcel"; // MySQL Table Name
$xls_filename = 'export_beatplan'.date('d-m-Y').'.xls'; // Define Excel (.xls) file name
if(!empty($_SESSION['reg'])){
 $reg = $_SESSION['reg'];
 $sta = $_SESSION['sta'];
 $cit = $_SESSION['cit'];
/***** DO NOT EDIT BELOW LINES *****/
// Create MySQL connection
$sql = "Select * from $DB_TBLName where `zone`='$reg' AND `state`='$sta' AND `city`='$cit'";
}else{
  
  $sql = "Select * from $DB_TBLName";
}
$Connect = @mysql_connect($DB_Server, $DB_Username, $DB_Password) or die("Failed to connect to MySQL:<br />" . mysql_error() . "<br />" . mysql_errno());
// Select database
$Db = @mysql_select_db($DB_DBName, $Connect) or die("Failed to select database:<br />" . mysql_error(). "<br />" . mysql_errno());
// Execute query
$result = @mysql_query($sql,$Connect) or die("Failed to execute query:<br />" . mysql_error(). "<br />" . mysql_errno());
 
// Pendo Track Event: beatplan_exported
$_pendo_has_filters = !empty($_SESSION['reg']);
$_pendo_props = array("file_name" => $xls_filename, "has_filters" => $_pendo_has_filters);
if ($_pendo_has_filters) { $_pendo_props["zone_filter"] = $_SESSION['reg']; $_pendo_props["state_filter"] = $_SESSION['sta']; $_pendo_props["city_filter"] = $_SESSION['cit']; }
$_pendo_visitor = isset($_SESSION['login_user']) ? $_SESSION['login_user'] : "system";
$_pendo_data = json_encode(array("type" => "track", "event" => "beatplan_exported", "visitorId" => $_pendo_visitor, "accountId" => "retail_solutions", "timestamp" => round(microtime(true) * 1000), "properties" => $_pendo_props));
$_pendo_ctx = stream_context_create(array("http" => array("method" => "POST", "header" => "Content-Type: application/json\r\nx-pendo-integration-key: 1a661aff-d6a7-48f1-b965-4905746aaca8\r\n", "content" => $_pendo_data, "timeout" => 2)));
@file_get_contents("https://data.pendo.io/data/track", false, $_pendo_ctx);

// Header info settings
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=$xls_filename");
header("Pragma: no-cache");
header("Expires: 0");
 
/***** Start of Formatting for Excel *****/
// Define separator (defines columns in excel &amp; tabs in word)
$sep = "\t"; // tabbed character
 
// Start of printing column names as names of MySQL fields
for ($i = 0; $i<mysql_num_fields($result); $i++) {
  echo mysql_field_name($result, $i) . "\t";
}
print("\n");
// End of printing column names
 
// Start while loop to get data
while($row = mysql_fetch_row($result))
{
  $schema_insert = "";
  for($j=0; $j<mysql_num_fields($result); $j++)
  {
    if(!isset($row[$j])) {
      $schema_insert .= "NULL".$sep;
    }
    elseif ($row[$j] != "") {
      $schema_insert .= "$row[$j]".$sep;
    }
    else {
      $schema_insert .= "".$sep;
    }
  }
  $schema_insert = str_replace($sep."$", "", $schema_insert);
  $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
  $schema_insert .= "\t";
  print(trim($schema_insert));
  print "\n";
}
?>