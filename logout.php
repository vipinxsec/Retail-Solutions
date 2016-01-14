<?php
session_start();
unset($_SESSION["login_user"]);
unset($_SESSION["user_name"]);
header("Location: index.php");
?>