<?php
$msg5="";
session_start();
if(isset($_SESSION['is_logged_in']))
{
//require('database.php');
require('database1.php');
?>
<head>
<link href='earning.css' rel='stylesheet' type='text/css'/>
</head>
<font face=vani color=red>LAST 100 MEDICINE SALE</font>

<table border=1 width=100%><tr bgcolor=skyblue><th>Bill No</th><th>Medicine</th><th> Date</th><th>Quantity</th><th>Amount</th></tr>
<tr>
<?php
$user=$_SESSION['username'];
$t6="totalsale";

$sql="select*from $t6 ORDER BY `slip` desc limit 100";
$result=mysql_query($sql) or die("Sql100".mysql_error());
while($row=mysql_fetch_array($result))
{
?>
<tr><td><?php echo($row["slip"])?></td><td><?php echo $row["medicine"]?></td><td><?php echo $row["date"]?></td><td><?php echo $row["quantity"]?></td><td><?php echo $row["amount"]?></td></tr>

<?php
}
?>
</table>
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
