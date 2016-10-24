<!DOCTYPE html>
<html>
<title>HOME</title>
<link href="main.css" rel="stylesheet">
<style>
input[type=text], input[type=password] {
    width: 180px;
    padding: 8px 15px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    width: 40%; /* Could be more or less, depending on screen size */
    animation-name: animatetop;
    animation-duration: 0.4s
}
.c1 {
    width: 195px;
    border: 2px solid #888;
    box-sizing: border-box;
    position: relative;
    left:750px;
    top:-69px;
}
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}
.ch {
    position: relative;
    left:365px;
    top:-10px;
}
.l1{
    position: relative;
    left:70px;
    top:0px;
}
.l2 {
    position: relative;
    left:60px;
    top:-18px;
}
.t1{
    position: relative;
    left:6px;
    top:-10px;
}
.t2{
    position: relative;
    left:6px;
    top:-25px;
}
</style>
<body>
<div class="header"> 
        <b href = "main.html" > <img src="ab.png" id ="logo"> </b>
        <span class="head">ROSE PHARMACY IT HELPDESK</span> <br>
        <span class="head">ROSE PHARMACY IT HELPDESK</span>
        <a href = "home.html" class="btn"> HOME </a>
        <a href = "gallery.html" class="btn"> GALLERY </a>
        <a href = "about.html" class="btn"> ABOUT US </a>
        <a href = "contact.html" class="btn"> CONTACT US</a>
</div>
    </div>
    <form class="modal-content animate" action="" method="POST" align="left">
    <div class="c1">
        <label class="l1">Email:  </label> <br>
        <input class="t1"type="text" name="email" placeholder="Enter Email" required/> <br>
        <label class="l2">Password: </label>  <br>
        <input class="t2"type="password" name="psw" placeholder="Enter Password" required/> <br>
        <button type="submit" value="log" class="btn2">LOGIN</button> <br>
    </div>
    <div class="errmsg">
        <?php
                $errMSG="";
                if(count($_POST)>0) {
                $connect = mysql_connect("localhost","root","");
                mysql_select_db("roseph",$connect);
                $result = mysql_query("SELECT * FROM employee WHERE email='" . $_POST["email"] . "' and psswrd = '". $_POST["psw"]."'");
                $count  = mysql_num_rows($result);
                if($count==0) {
                $errMSG = "Invalid Username or Password!";
                echo $errMSG; 
                } else {
                $errMSG = "You are successfully authenticated!";
                echo $errMSG; 
                header("Location: index.php");
                }
                }
        ?>
        </div>
    </form>
</body>
</html>
