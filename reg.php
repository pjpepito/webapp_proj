<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
 <html>
<body>

<form action="login.php" method="post" style="position:center;">
      <label><b>Employee No:</b></label> <br>
      <input type="text" placeholder="Enter Number" name="email" required> <br>
      <label><b>Firstname</b></label> <br>
      <input type="text" placeholder="Enter Firstname" name="fname" required> <br>
      <label><b>Lastname</b></label> <br>
      <input type="text" placeholder="Enter Lastname" name="lname" required> <br>
      <label><b>Gender</b></label> <br>
      <input type="text" placeholder="Gender" name="gnder" required> <br>
      <label><b>Email</b></label> <br>
      <input type="text" placeholder="Email" name="email" required> <br>
      <button type="submit" style="position:center;">Submit</button>
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>

</body>
</html> 
	
</body>
</html>