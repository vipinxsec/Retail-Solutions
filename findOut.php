<?php $location=intval($_GET['location']);
       $host="182.50.133.87";
       $user="communique";
       $pass="umesh0028";

$con = mysql_connect($host, $user, $pass); 
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('comm_login');
$reg = mysql_query("SELECT city from beatplan WHERE id='$location'");
$row = mysql_fetch_assoc($reg);
$location2 = $row['city'];
$query="SELECT id, name FROM outletinfo WHERE city='$location2' ORDER BY name";
$result=mysql_query($query);

?>
<select name="outlet" class="form-control input-sm">
<?php while ($row=mysql_fetch_array($result)) { ?>
<option value=<?php echo $row['id']?>><?php echo $row['name']?></option>
<?php } ?>
</select>
