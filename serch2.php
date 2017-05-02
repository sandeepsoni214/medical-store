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
<style>
#link
{
float:right;
}
#link:hover
{
background-position:left bottom;
}
</style>
<script src="ajax.js">

</script>
<link rel="icon" href="photo/logo.png">
<link href='earning.css' rel='stylesheet' type='text/css'/>
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
<script src="ajax.js">
</script>
</head>
<title>Medicine|SEARCH</title>
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

<table width=100% border=0 align=center id="table">
<tr><td colspan=2><div><img src="photo/logo.jpg" name="slide" style="" height="150"/>


</td></tr>
<!--tr><td colspan=2>
<div>
<table border=0 id="toptable"  width=100%>
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
</div>


</td></tr-->
<tr><td  VALIGN=TOP>
<?php require("sidemenu.php")?>
</td>
<td valign=top>
<div id="showdetail"style="">
<form name="searchpage" action="" method="get">
<center>
<table border=0 style="">
<tr><td><input type="search" name="search" onkeypress="javascript:click(this.value);" style="height:30px;" size=40 placeholder="search here"></td><td><a id="link" href="javascript:click()" title="search" style="height:30px; background:#1266ae;width:90px; padding:2px;color:white;text-decoration:none;">Search</a><br></td></tr>

 </center>
</table>
</form>
<div id="span"></div>
</td>
</div></tr>
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