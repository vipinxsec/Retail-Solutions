<?php 
session_start();
ob_start();
if (isset($_GET['action'])){$action = htmlentities($_GET['action']);}
else{$action = NULL;}
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Retail Solutions</title>

  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);

@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);



body{
	
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(http://smallbusinessgrowthsolutions.com/wp-content/uploads/2014/02/photodune-3036359-marketing-strategy-concept-s.jpg);
	background-size: cover;
	-webkit-filter: blur(1px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(30% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
	padding-left: 615px;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{

	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding-left: 400px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #000;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #000;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=submit]{
	width: 250px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=submit]:hover{
	opacity: 0.8;
}

.login input[type=submit]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=submit]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
</style>

    <script src="js/prefixfree.min.js"></script>

</head>

<body>

  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Retail<span>Solutions</span></div>
		</div>
		<br>
		<div class="login">
		<form action="?action=login" method="post">
				<input type="text" placeholder="username" name="username"><br>
				<input type="password" placeholder="password" name="password"><br>
				<input type="submit" value="Login">
				</form>
		</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

  <?php
//if(!$fgmembersite->CheckLogin()){
if($action=="login"){
//$username=array("username"=>$_POST["username"]); $password=$_POST["password"];
//$stmt = $DB->query("SELECT username FROM login where username=$username AND password=$password");
//$temp_var=array_diff($username,$stmt);
//if($stmt==$temp_var){
//$fgmembersite->RedirectToURL('dashboard.php');}
//else{var_dump($stmt);}
$username=$_POST['username'];
$password=$_POST['password'];
$host="182.50.133.87";
$user="communique";
$pass="umesh0028";
$dbase="comm_login";
 //Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect($host, $user, $pass);
//$username = stripslashes($username);
//$password = stripslashes($password);
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);
$db = mysql_select_db("comm_login", $connection);
//function __construct($host, $user, $pass, $dbase){
//$mysql=new mysqli($host, $user, $pass, $dbase) or die('Problem connecting to the database');
//}
//$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
	if($username=="admin"){
$_SESSION['login_user']=$username;
header("location: dashboard.php");
	}
else{
	$_SESSION['login_user']=$username;
header("location: clientapp.php");
}
} else {
$error ="Username or Password is invalid";
}
mysql_close($connection);
}
//}
?>

</body>

</html>