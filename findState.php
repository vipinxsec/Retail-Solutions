<!-- ==============================================
//  Created by PHP Dev Zone           			 ||
//	http://php-dev-zone.com                      ||
//  Contact for any Web Development Stuff        ||
//  Email: ketan32.patel@gmail.com     			 ||
//=============================================-->


<?php $region=intval($_GET['region']);
       $host="182.50.133.87";
       $user="communique";
       $pass="umesh0028";

$con = mysql_connect($host, $user, $pass); 
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('comm_login');
$query="SELECT id,statename FROM state WHERE regionid='$region' ORDER BY statename";
$result=mysql_query($query);

?>
<select name="state" onchange="getCity(<?php echo $region?>,this.value)" class="form-control input-sm">
<option>Select State</option>
<?php while ($row=mysql_fetch_array($result)) { ?>
<option value=<?php echo $row['id']?>><?php echo $row['statename']?></option>
<?php } ?>
</select>
