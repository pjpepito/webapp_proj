<?php
$connect=mysql_connect('localhost','root','','roseph');
 
if(mysql_connect_errno($connect))
{
		echo 'Failed to connect';
}
 
?>