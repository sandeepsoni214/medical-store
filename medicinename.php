<?php
require('database.php');
if($_POST['text']<1)
{
print '';
exit;
}
else
{
$s=$_POST['text'];
$text=array();
$sql="select * from where medicine like='$s'";
$r=mysql_query($sql) or die("sql".mysql_error());
while($row=mysql_fetch_array($r))
{
$text['i']=$row['medicine'];
}
echo($text['i']);
}
?>