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
<script>
function showUser(str)
{
if (str=="")
  {
  document.getElementById("divsearch").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("divsearch").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getdetails.php?q="+str,true);
xmlhttp.send();
}
</script>
<link rel="icon" href="photo/logo.png">
<link href='earning.css' rel='stylesheet' type='text/css'/>
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
<script src="ajax.js">
</script>
</head>
<title>Medicine|TotalSale</title>
<body id="main" bgcolor="lightgreen" onload="digital_clock()">
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
<tr><td colspan=2 height=100>
<div><img src="photo/logo.jpg" name="slide" height="150"/>



</tr></tr>
<!--tr><td colspan=2 bgcolor="skyblue" height=30>
<div>
<table id="toptable"  width=100%>
<form method="post">
<tr align=center><td><a href="index.php"  >HOME</a></td>
<td><a href="serch2.php"class="gSlink">Search</a></td>
<td><a href="pur2.php" >Purchase</a></td>
<td><a href="totalsale2.php"  >Total Sale</a></td>
<td><a href="tomed2.php"  >Medicine's</a></td>
<td><a href="help.php"  >Help</a></td>
<td><input type="submit" value="Log out" class=but name="logout"></form></td>
</tr>

</table>



</div></td></tr-->
<tr align=left>
<td rowspan=3 valign=top>
<?php require("sidemenu.php")?>
</td></tr>
<tr></tr>
<tr><td valign=top id="showdetail">

<div>
<font face=vani color=red size=5>Total Sale</font>
<table class="oddeven" border=0 width=100%><thead><tr><th>Mediname</th><th>Date</th><th>Quantity</th><th>Rate</th><th>Amount</th></tr></thead>
<tbody>
<?php 

$user=$_SESSION['username'];
$t6="totalsale";
$sql="SELECT *
FROM $t6
ORDER BY date DESC
LIMIT 0 , 30";
$result=mysql_query($sql) or die("sql".mysql_error());
while($row=mysql_fetch_array($result))
{
?>
<tr><td><?php echo($row["medicine"])?></td><td><?php echo($row["date"])?></td><td><?php echo($row["quantity"])?></td><td><?php echo($row["rate"])?></td><td><?php echo($row["amount"])?></td></tr>
<?php
}

?>
</tbody>
</table>





</div>

<input type="button" value="print" onclick="javascript:printSelection(document.getElementById('showdetail'));">
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