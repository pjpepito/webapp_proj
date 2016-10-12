<!DOCTYPE html>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
 
 
<title>Add Employee</title>
</head>
<body>
 
<form method="post" action="process.php">
<label>Id No:</label>
<input type="text" name="id" placeholder="Enter Id" required/>
<br />
<label>First Name</label>
<input type="text" name="first_name" placeholder="Enter Firstname" required/>
<br />
<label>Last Name</label>
<input type="text" name="last_name" placeholder="Enter Lastname" required/>
<br />
<label>Department</label>
<input type="text" name="department" placeholder="Enter Department" required/>
<br />
<label>Email</label>
<input type="text" name="email" placeholder="Enter Email" required/>
<br />
<label>Password</label>
<input type="password" name="pwd" placeholder="Enter Password" required/>
<br />
<button type="submit" value="Add Employee">Add Employee</button>
</form>
 
 
 
</body>
</html>