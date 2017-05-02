<?php 
session_start();
require('database1.php');

$s=$_GET["q"];

$sql="select * from medicineentry where medicine like '%$s%' order by medicine desc";
$result=mysql_query($sql) or die("sql".mysql_error());
echo("<select>");
while($row=mysql_fetch_array($result))
{

echo("<option>");
echo($row['medicine']);
  

}
echo("</select>")
?>