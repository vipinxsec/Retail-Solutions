<?php

/////Use this url for Android  Hit this url on browser and check this to valid user or not.
//  http://localhost/PhotoFamous/AndroidToPhp.php?username=admin&password=admin123.com
//http://localhost/PhotoFamous/AndroidToPhp.php?username=admin&password=admin123.com



$servername = "182.50.133.87";
$username = "communique";
$password = "umesh0028";

// Create connection
$conn = new mysqli($servername, $username, $password,"comm_login");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }{
        
        $username = $_GET['username'];
        $password = $_GET['password'];
        
$result = mysqli_query($conn,"SELECT username,password FROM login where username='$username' and password='$password'");

if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

$row = mysqli_fetch_array($result);
$data = $row[0];

if($data){
    
    
    $json = array("status" => 1, "msg" =>"Login Successfull!");
//echo "Login Successfuly";
}else{
    
        $json = array("status" => 0, "msg" => "Invalid Username or Password!");
    //echo "wrong user";
    
}


 header('Content-type: application/json');
     echo json_encode($json); 
mysqli_close($conn);
    } 

?>