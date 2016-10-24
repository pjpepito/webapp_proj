<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "roseph";
// create a variable
$id=$_POST['id'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$department=$_POST['department'];
$email=$_POST['email'];
$psw=$_POST['psw'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO employee (u_no,fname,lname,dpt,email,psswrd)
		        VALUES ('$id','$first_name','$last_name','$department','$email','$psw')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: login.php");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header("Location: reg.php");

}
/*$sql = "DELETE FROM employee WHERE fname=''";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}*/
$conn->close();
?>