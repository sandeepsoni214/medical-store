<?php
$q=$_GET["a"];

$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("medicine", $con);

$sql="SELECT email FROM login where email='$q'";

$result = mysql_query($sql);
$row=mysql_fetch_array($result);


if($row["email"]==$q)
{
echo("<font face=verdana color=red size=2>email is already exist</font>");
}
else
{
if (filter_var($q, FILTER_VALIDATE_EMAIL))
 {
    
}
else
echo "<font face=verdana color=red size=2>email not valid</font>";
}


//mysql_close($con);
?> 