 <?php
$errMSG="";
if(count($_POST)>0) {
$connect = mysql_connect("localhost","root","");
mysql_select_db("roseph",$connect);
$result = mysql_query("SELECT * FROM employee WHERE email='" . $_POST["email"] . "' and psswrd = '". $_POST["psw"]."'");
$count  = mysql_num_rows($result);
if($count==0) {
$errMSG = "Invalid Username or Password!";
//header("Location: login.php");

echo $errMSG; 
} else {
$errMSG = "You are successfully authenticated!";
header("Location: main.php");
echo $errMSG; 
}
}
?>
 <html>
 <head>
 <title>LOGIN</title>
 <link href="main.css" rel="stylesheet">
 </head>
 <body>
 <form action="" method="post" style="position:center;">
 	  <label><b>Email Address</b></label> <br>
      <input type="text" placeholder="Enter Email Address" name="email" required> <br>
      <label><b>Password</b></label> <br>
      <input type="password" placeholder="Enter Password" name="psw" required><br>
      <input type="submit" name="Loginbtn" value="LOGIN">
 </form>


 </body>
 </html>




