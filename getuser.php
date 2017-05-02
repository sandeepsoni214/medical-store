<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("medicine", $con);

$sql="SELECT username FROM login where username='$q'";

$result = mysql_query($sql);
$row=mysql_fetch_array($result);


if($row["username"]==$q)
{
echo("<font face=verdana color=red size=2>username is already exist</font>");
}

else

echo "";




mysql_close($con);
?> 