<?php  
session_start();
require("database1.php");
$recycle=$_GET['recycle'];
$sql2="select * from recycle where slip='$recycle'";
$replace=mysql_query($sql2) or die("sql2".mysql_error());
$row=mysql_fetch_array($replace);
$slip=$row["slip"];
$medicine=$row["medicine"];
$date=$row["date"];
$quantity=$row["quantity"];
$mfg=$row["mfg"];
$rate=$row["rate"];
$amount=$row["amount"];
$sql3="insert into totalsale(slip,medicine,date,quantity,rate,amount) values('$slip','$medicine','$date','$quantity','$rate','$amount')";
mysql_query($sql3) or die('sql3'.mysql_error());

$sql="delete from recycle where slip='$recycle'";
$re=mysql_query($sql) or die("sql".mysql_error());
if($re)
{
header("Location:recycle.php");
}
else
{
echo('bill no not valid');
}



?>