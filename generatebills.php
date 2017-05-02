<?php
$msg5="";
$msgover="";
session_start();
$_SESSION['amount']=0;
if(isset($_SESSION['is_logged_in']))
{
require('database.php');
require('database1.php');
?>

<?php 
if(isset($_GET['submit']))
{
$name=$_GET['name'];
$content=$_GET['content'];
$bill="insert into bills(bid,name,content) values('','$name','$content')";
mysql_query($bill) or die("".mysql_error());
echo("done");
}
?>

<?php
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