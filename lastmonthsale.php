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
<link href='style/trtd.css' rel='stylesheet' type='text/css'/>
<script src="libs/jquery-1.4.2.min.js">
</script>
<script src="script/trtd.js">
</script>
</head><font face=vani size=5>
<?php

$user=$_SESSION['username'];
$t6="totalsale";
$sqlprice="select sum(amount) from $t6;";
$resultprice=mysql_query($sqlprice) or die("sqlprice".mysql_error());
$rowprice=mysql_fetch_array($resultprice);
echo("<font face=vani color=ruby size=5>Total Amount:</font><font face=vani color=red size=5>");
echo($rowprice['sum(amount)']);
?>
<table class="oddeven" width=100% border=1><thead  bgcolor="skyblue"><tr><th>Bill No</th><th>Medicine</th><th> Date</th><th>Quantity</th><th>Amount</th></tr></thead>
<tbody>

<?php

$date=date('y-m-d');

$sql="select*from $t6 ORDER BY `slip` desc limit 30";
$result=mysql_query($sql) or die("Sql100".mysql_error());
while($row=mysql_fetch_array($result))
{
?>
<tr><td><?php echo($row["slip"])?></td><td><?php echo $row["medicine"]?></td><td><?php echo $row["date"]?></td><td><?php echo $row["quantity"]?></td><td><?php echo $row["amount"]?></td></tr>

<?php
}
?>
</tbody>
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

