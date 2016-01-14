<!-- ==============================================
//  Created by PHP Dev Zone           			 ||
//	http://php-dev-zone.com                      ||
//  Contact for any Web Development Stuff        ||
//  Email: ketan32.patel@gmail.com     			 ||
//=============================================-->

<?php $regionId=intval($_GET['region']);
$stateId=intval($_GET['state']);
       $host="182.50.133.87";
       $user="communique";
       $pass="umesh0028";

$con = mysql_connect($host, $user, $pass); 
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('comm_login');
$query="SELECT id,city FROM city WHERE regionid='$regionId' AND stateid='$stateId' ORDER BY city";
$result=mysql_query($query);

?>
<select name="city" class="form-control input-sm">
<option>Select City</option>
<?php while($row=mysql_fetch_array($result)) { ?>
<option value=<?php echo $row['id']?>><?php echo $row['city']?></option>
<?php } ?>
</select>



