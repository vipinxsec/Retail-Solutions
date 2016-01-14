<?php $category=intval($_GET['category']);
$city=intval($_GET['city']);
if($category==1){
	$category="A";
}
if($category==2){
	$category="B";
}
if($category==3){
	$category="C";
}
       $host="182.50.133.87";
       $user="communique";
       $pass="umesh0028";
//$category=trim($category);
$con = mysql_connect($host, $user, $pass); 
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('comm_login');
$reg = mysql_query("SELECT city from beatplan WHERE id='$city'");
$row = mysql_fetch_assoc($reg);
$location2 = $row['city'];
$query="SELECT id, name FROM outletinfo WHERE category='$category' AND city='$location2' ORDER BY name";
$result=mysql_query($query);

?>
<select name="outlet" class="form-control input-sm">
<?php while ($row=mysql_fetch_array($result)) { ?>
<option value=<?php echo $row['id']?>><?php echo $row['name']?></option>
<?php } ?>
</select>
