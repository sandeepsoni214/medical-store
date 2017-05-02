<?php 
//session_start();

$database=$_SESSION['username'];
$conn=mysql_connect("localhost","root","");
mysql_select_db($database,$conn) or die(mysql_error());

?>