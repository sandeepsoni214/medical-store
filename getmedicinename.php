<?php

session_start();
if(isset($_SESSION['is_logged_in']))
{

require('database1.php');
$sql="select * from medicineentry";
$result=mysql_query($sql) or die("sql".mysql_error());
while($row=mysql_fetch_array($result))
{
echo('"'.$row['medicine'].'",<br>');
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

header('Location:login.php');

?>