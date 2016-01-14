<?php 
 $vm=$_GET['vm'];
 $vms=(string)$vm;
       $host="182.50.133.87";
       $user="communique";
       $pass="umesh0028";

$con = mysql_connect($host, $user, $pass); 
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('comm_login');
$query="SELECT id,city FROM beatplan WHERE vm='$vms' ORDER BY city";
$result=mysql_query($query);

?>
<select name="city" id="citydiv" onchange="getLocation(this.value)" class="form-control input-sm">
<option>Select City</option>
<?php while($row=mysql_fetch_array($result)) { ?>

<option value=<?php echo $row['id']?>><?php echo $row['city']?></option>
<?php } ?>
</select>