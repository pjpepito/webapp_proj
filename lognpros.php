 <?php include 'database.php'; ?>
<?php
session_start();
if(isset($_POST['submit']))
{
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('new') or die(mysql_error());
 $email=$_POST['email'];
 $pwd=$_POST['pwd'];
 if($email!=''&&$pwd!='')
 {
   /*$query=mysql_query("select * from employee where email='".$email."' and psswrd='".$pwd."'") or die(mysql_error());*/
   $result = mysql_query("SELECT * FROM employee WHERE emil='" . $_POST["email"] . "' and psswrd = '". $_POST["pwd"]."'");
   $count  = mysql_num_rows($result);
if($count==0) {
$message = "Invalid Username or Password!";
} else {
$message = "You are successfully authenticated!";
}
  }
?>