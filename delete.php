<?php  
session_start();
require("database1.php");
$delete=$_GET['delete'];
$sql2="select * from totalsale where slip='$delete'";
$recover=mysql_query($sql2) or die("sql2".mysql_error());
$row=mysql_fetch_array($recover);
$slip=$row["slip"];
$medicine=$row["medicine"];
$date=$row["date"];
$quantity=$row["quantity"];
$mfg=$row["mfg"];
$rate=$row["rate"];
$amount=$row["amount"];
$sql3="insert into recycle(slip,medicine,date,quantity,rate,amount) values('$slip','$medicine','$date','$quantity','$rate','$amount')";
mysql_query($sql3) or die('sql3'.mysql_error());

$sql="delete from totalsale where slip='$delete'";
$re=mysql_query($sql) or die("sql".mysql_error());
if($re)
{
header("Location:earning.php");
}
else
{

echo('bill no not valid');
}



?>