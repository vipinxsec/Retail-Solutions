
<?php

    mysql_connect("182.50.133.87","communique","umesh0028") or die(mysql_error());
    mysql_select_db("comm_login") or die(mysql_error());
     
     $city1=$_GET['city'];
    $location1=$_GET['location'];
    $outlet_category1=$_GET['category'];
    $outlet_name1=$_GET['dealername'];
    

   
   $sql = mysql_query("select * from newbeat_excel where `dealer name`='$outlet_name1'");

    $count=mysql_num_rows($sql);
    if($count>0){
 
$result = array();

while($row = mysql_fetch_array($sql)){

array_push($result,
array(
'address'=>$row[7],
'dealercode'=>$row[4]
));

}
}

 header('Content-type: application/json');
    echo json_encode(array('result'=>$result));
    

?>
