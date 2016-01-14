<?php

/////Use this url for Android  Hit this url on browser and check this to valid user or not.
//  http://localhost/PhotoFamous/AndroidToPhp.php?username=admin&password=admin123.com
//http://localhost/PhotoFamous/AndroidToPhp.php?username=admin&password=admin123.com


mysql_connect("182.50.133.87","communique","umesh0028") or die(mysql_error());
    mysql_select_db("comm_login") or die(mysql_error());

// Check connection

        
$sql = mysql_query("SELECT username,password FROM login");
 
$result = array();

while($row = mysql_fetch_array($sql)){
array_push($result,
array('username'=>$row[0],
'password'=>$row[1]
));

}

 header('Content-type: application/json');
    echo json_encode(array('result'=>$result));

     
?>