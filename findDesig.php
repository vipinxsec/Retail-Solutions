<?php $designation=intval($_GET['designation']);
       $host="182.50.133.87";
       $user="communique";
       $pass="umesh0028";

$con = mysql_connect($host, $user, $pass); 
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('comm_login');
$query="SELECT des_id,name FROM user WHERE des_id='$designation' ORDER BY name";
$result=mysql_query($query);

?>
<select name="report_person" class="form-control input-sm">
<option>Select a reporting person</option>
<?php while ($row=mysql_fetch_array($result)) { ?>
<option value=<?php echo $row['name']?>><?php echo $row['name']?></option>
<?php } ?>
</select>