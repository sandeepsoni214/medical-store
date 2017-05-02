
<?php 

$msg5="";
session_start();
if(isset($_SESSION['is_logged_in']))
{
require('database1.php');

$s=$_GET["q"];

$t2='medicineentry';

$sql="select * from $t2 where medicine like '%$s%' order by medicine asc";
$result=mysql_query($sql) or die("sql".mysql_error());
echo "";
echo "<table align=left style='margin-top:1px; background:none; width:350px;'>";
echo("<tr style='background:#1266ae; color:white;'><th>Medicine Name</th><th>Quantity</th></tr>");
while($row=mysql_fetch_array($result))
{




  
 echo("<tr><td valign=top style='background:#333; color:white;width:150px; font-family:ARIAL;margin:1px; border:1px solid #333;padding-left:20px;'>". $row['medicine'] ."</td><td valign=top style='background:#333; color:white;width:150px; font-family:ARIAL;margin:1px; border:1px solid #333; padding-left:20px;'>". $row['quantity'] ."</td></tr>");
  
  

  echo "";

}
echo("</table>");
echo "";
?>
<?php
if(isset($_POST['logout']))
{unset($_SESSION['is_logged_in']);
unset($_SESSION['userId']);
$_SESSION=array();
session_destroy();
header('location:login.php');
}
}
else

header('Location:login.php');


?>

