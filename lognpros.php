<?php
$errMSG="";
if(count($_POST)>0) {
$connect = mysql_connect("localhost","root","");
mysql_select_db("roseph",$connect);
$result = mysql_query("SELECT * FROM employee WHERE email='" . $_POST["email"] . "' and psswrd = '". $_POST["psw"]."'");
$count  = mysql_num_rows($result);
if($count==0) {
$errMSG = "Invalid Username or Password!";
header("Location: login.php");

echo $errMSG; 
} else {
$errMSG = "You are successfully authenticated!";
header("Location: main.php");
echo $errMSG; 
}
}
?>