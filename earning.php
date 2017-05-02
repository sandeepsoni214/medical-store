<?php
$msg5="";
session_start();
if(isset($_SESSION['is_logged_in']))
{
//require('database.php');
require('database1.php');
?>
<html>
<head>
<script>
function delete1(a)
{
var y=confirm("are you want to delete");
if(y)
{
location.href='delete.php?delete='+a;
}
}
</script>
<link rel="icon" href="photo/logo.png">
<link href='earning.css' rel='stylesheet' type='text/css'/>
<link href='style/trtd.css' rel='stylesheet' type='text/css'/>
<script src="libs/jquery-1.4.2.min.js">
</script>
<script src="script/trtd.js">
</script>
<script src="script/toplink.js">
</script>
<script src="ajax.js">
</script>
<style>
.pager
{

text-decoration:none;
}
.pager:hover
{
color:white;
background:blue;

opacity:0.7;
}
</style>
</head>
<title>Medicine|Earning</title>
<body id="main" bgcolor="lightgreen" onload="digital_clock()">

<div id="wrap"  style="top:0px;right:5px;position:absolute; ">
<div id="digital-clock">
<ul>
<li id="hours"></li>
<li> :</li>
<li id="minutes"></li>
<li> :</li>
<li id="seconds"></li>
</ul>
</div>
</div>
<center>
<table border=0 align=center id="table">
<tr><td colspan=2 height=100><div>
<img src="photo/logo.jpg" name="slide" style="" height="150"/>



</tr></tr>
<!--tr><td colspan=2 bgcolor="skyblue" height=30>
<div>
<table id="toptable"  width=100% >
<form method="post">
<tr align=center id="tr1"><td><a href="index.php"  >HOME</a></td>
<td><a href="serch2.php" >Search</a></td>
<td><a href="pur2.php" >Purchase</a></td>
<td><a href="totalsale2.php"  >Total Sale</a></td>
<td><a href="tomed2.php"  >Medicine's</a></td>
<td><a href="help.php"  >Help</a></td>
<td><input type="submit" value="Log out" class=but name="logout"></form></td>
</tr>

</table>

</div></td></tr-->
<tr align=left><td rowspan=3 valign=top>
<?php require("sidemenu.php")?>
</td></tr>
<tr></tr>
<tr><td valign="top">

<input type="button" value="GO To Recycle Page" style="border:1px solid blue;font-family:tahoma;" onclick="javascript:location.href='recycle.php'">
<div id="showdetail">
<div style="float:right">
<?php
$i=0;
$sqllist="select count(slip) from totalsale";
$n=mysql_query($sqllist) or die("list".mysql_error());
$r=mysql_fetch_array($n);
$c=$r['count(slip)']/30;
$c=$c+1;
for($i=1;$i<=$c;$i++)
{
?>
<a class='pager' style=""href='earning.php?limit1=<?php echo(30*($i-1));?>&limit2=<?php echo(30);?>'><?php echo($i);?></a>
<?php
}

?>
</div>

<font face=vani color=red>LAST <?php echo(date('y-m-d'));?> MEDICINE SALE</font>

<table class=oddeven><thead><tr bgcolor=skyblue><th>Bill No</th><th>Medicine</th><th> Date</th><th>Quantity</th><th>Amount</th><th>Action</th></tr></thead>
<tr>
<?php
$d=date('y-m-d');
$user=$_SESSION['username'];
$t6="totalsale";
if(isset($_REQUEST['limit1'])&& isset($_REQUEST['limit2']))
{
$l1=$_REQUEST['limit1'];
$l2=$_REQUEST['limit2'];


$sql="select*from $t6 ORDER BY `slip` desc limit $l1,$l2";
$result=mysql_query($sql) or die("Sql100".mysql_error());
while($row=mysql_fetch_array($result))
{
?>
<tr><td><?php echo($row["slip"])?></td><td><?php echo $row["medicine"]?></td><td><?php echo $row["date"]?></td><td><?php echo $row["quantity"]?></td><td><?php echo $row["amount"]?></td><td style="border:none;"><a style="border:none;"href="javascript:delete1(<?php echo($row['slip']);?>)"><img src="photo/delete.png" style="border:none;"></a></td></tr>
<?php
}
}
else
{
$sql="select*from $t6 ORDER BY `slip` desc limit 0,30;";
$result=mysql_query($sql) or die("Sql100".mysql_error());
while($row=mysql_fetch_array($result))
{
?>
<tr><td><?php echo($row["slip"])?></td><td><?php echo $row["medicine"]?></td><td><?php echo $row["date"]?></td><td><?php echo $row["quantity"]?></td><td><?php echo $row["amount"]?></td><td><a href="javascript:delete1(<?php echo($row['slip']);?>)"><img src="photo/delete.png"></a></td></tr>

<?php
}
}
?>
</table>

</div>
<input type="button" value="print" onclick="javascript:printSelection(document.getElementById('showdetail'));">


</td></tr>
</table>
</center>


</body>

</html>
<?php
if(isset($_POST['logout']))
{unset($_SESSION['is_logged_in']);
unset($_SESSION['userId']);
unset($_SESSION['database1']);
unset($_SESSION['host']);
unset($_SESSION['hostuser']);
unset($_SESSION['hostpassword']);
$_SESSION=array();
session_destroy();
header('location:login.php');
}
}
else
header('Location:login.php');
?>