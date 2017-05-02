<?php
session_start();
require('database1.php');
$med=$_GET['medicine'];
$sql="select rate from medicine_weight where medicine='$med'";
$result=mysql_query($sql) or die("sql".mysql_error());
$r=mysql_fetch_array($result);
echo($r['rate']);
?>