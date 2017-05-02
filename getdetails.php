
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

while($row=mysql_fetch_array($result))
{
echo("");
echo "<fieldset style='background:white;width:350px; height:auto'>";
echo "<font color=blue><p align=left style='font-size:20px;font-family:arial;'>". $row['medicine'] ."</font><hr>";
echo "<table align=left style='background:white;width:350px'> <tr>";
  
  
  echo "<tr><td>Remaining Quantity </td><td>" . $row['quantity'] . "</td><td valign=top><input type='button' value='Buy' style='background:#1266ae; height:30px;color:white;width:80px;border-radius:5px;'></td></tr>";
  echo "<tr><td>Date of Purchase </td><td>".  $row['expdate'] . "</td></tr>";
  echo "<tr><td>Date Of Expiry </td><td>". $row['issuedate'] . "</td></tr>";
   // echo "<tr><td>Date Of Expiry </td><td>". $row['rate'] . "</td></tr>";
  echo("</table>");
  echo "</fieldset>";
  echo "";

}
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

