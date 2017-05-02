<?php
session_start();

if(isset($_SESSION['is_logged_in']))
{
//require('database.php');
require('database1.php');




$name=$_GET['name'];
$bills=$_GET['bills'];
$amount=$_GET['amount'];
$sql="insert into bills values('','$name','$bills','','$amount')";

$result=mysql_query($sql) or die('sql'.mysql_error());
if($result)
{
echo('Done');
}
if(isset($_POST['logout']))
{

unset($_SESSION['is_logged_in']);
unset($_SESSION['userId']);




$_SESSION=array();
session_destroy();
header('location:login.php');
}
}
else
{

header('Location:login.php');
}

?>