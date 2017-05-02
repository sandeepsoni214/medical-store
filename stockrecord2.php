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
<link href='style/trtd.css' rel='stylesheet' type='text/css'/>
<script src="libs/jquery-1.4.2.min.js">
</script>
<script src="script/trtd.js">
</script>

<link rel="icon" href="photo/logo.png">
<link href='earning.css' rel='stylesheet' type='text/css'/>
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
<script src="ajax.js">
</script>
</head>
<title>Medicine|RECORDS</title>
<body id="main" bgcolor="lightgreen"  onload="digital_clock()">
<div id="wrap" style="top:0px;right:5px;position:absolute; ">
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
<table border=0 align=center width=100% height=70% id="table">
<tr><td colspan=2 height=100><div><img src="photo/logo.jpg" name="slide" style="" height="150"/>



</tr></td></tr>
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
<tr align=left><td rowspan=3 align=left valign=top>

<?php require("sidemenu.php")?>
</td></tr>
<tr></tr>
<tr><td valign=top>

<div id="showdetail" style="height:650px;">

<p> <font face=vani color=red size=5>STOCK UPDATE TABLE<hr>

<table class="oddeven"><thead><tr><th>Medicine</th><th>Company</th><th>Medicinetype</th><th>Rate</th><th>Quantity</th><th>Date</th></tr></thead>
<tbody>
<?php 
$user=$_SESSION['username'];
$t5="stockupdate";

$sql="SELECT *
FROM $t5
ORDER BY date DESC
LIMIT 0 , 30";
$result=mysql_query($sql) or die("sql".mysql_error());
while($row=mysql_fetch_array($result))
{
?>
<tr><td><?php echo($row["medicine"])?></td><td><?php echo($row["company"])?></td><td><?php echo($row["medicinetype"])?></td><td><?php echo($row["rate"])?></td><td><?php echo($row["quantity"])?></td><td><?php echo($row["date"])?></td></tr>
<?php
}

?>
</tbody>
</table>


<input type="button" value="print" onClick="javascript:printSelection(document.getElementById('showdetail'));">
</div>



</td></tr>


</table>
</body>

</html>
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