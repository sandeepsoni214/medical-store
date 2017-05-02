<?php
$msg5="";
session_start();
if(isset($_SESSION['is_logged_in']))
{
require('database.php');
require('database1.php');
?>
<html>
<head>

<link rel="icon" href="photo/logo.png">
<link href='earning.css' rel='stylesheet' type='text/css'/>
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
<script src="ajax.js">
</script>
<link rel="stylesheet" href="themes/base/jquery.ui.all.css">
	<script src="jquery-1.9.1.js"></script>
	<script src="ui/jquery.ui.core.js"></script>
	<script src="ui/jquery.ui.widget.js"></script>
	<script src="ui/jquery.ui.datepicker.js"></script>
	<!--link rel="stylesheet" href="demos.css"-->
<script>
	
		$(function() {
		$( "#datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
		$( "#datepicker1" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
	});
		
	</script>


<style>


</style>
</head>
<title>Medicine|Purchase</title>
<body id="main" onLoad="digital_clock()">
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
<center>
<table id="table" style="font-size:16px;">
<tr><td colspan=2 height=100>
<img src="photo/logo.jpg" name="slide" style="" height="150"/>




</td></tr>

<!--tr><td colspan=2 bgcolor="skyblue" height=30>
<div>
<table id="toptable"  width=100%>
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

<tr>
<td rowspan=3 valign=top>

<?php require("sidemenu.php")?>
</td>

<td style="" valign=top>
<div id="showdetail" style="">
<br>
<h2>PURCHASED MEDICINE'S</h2><hr>
<table align=center id="pform">
<form method="get" action=""  name="form">
<tr>
<td width=200>Medicine Name</td>
<td><input type="text" name="mname" onKeyUp="showmessage(this.value)" required><small style="color:red">Dont use !,#,^,+,*,/,@,&,$,(,)</small></td>
</tr>
<tr>
<td>Medicine Company</td>
<td><input type="text" name="cname"></td>
</tr>
<tr>
<td>Type Of Medicine</td>
<td>
<select name="mtype">
<option>Tablet</option>
<option>Capsules</option>
<option>Injection</option>
<option>Syrups</option>
<option>Tubes</option>
<option>Powder</option>
<option>Vitamin And Mineral</option>
<option>Food Supplement</option>
<option>Other</option>
</select>


</td></tr>
<tr>
<td>Rate Per Unit</td>
<td><input type="text" name="rate" required></td>
</tr>
<tr>
<td>Medicine mg/ml</td>
<td><input type="text" name="mg/ml" required></td>
</tr>
<tr>
<td>Medicine Quantity</td>
<td><input type="text" name="quantity" required></td>
</tr>
<tr>
<td>Date Of MFG</td>
<td><input type="text" name="mfg" id="datepicker" required></td>
</tr>
<tr>
<td>Date Of EXP</td>
<td><input type="text" name="exp" id="datepicker1" required></td>
</tr>
<tr>
<td><input type="reset" value="Reset"></td>
<td><input type="submit" name="submit" value="Submit"></td>
</tr>

</form>
</table>
<?php

$msg1="";
$msg2="";
$msg3="";
$msg4="";
$msg5="";
$msg6="";

$d=date("y-m-d");
if(isset($_GET['submit']))
{
$mtype=$_GET["mtype"];
$weight=$_GET['mg/ml'];
$user=$_SESSION["username"];
$t1="medicine_weight";
$t2="medicineentry";
$t3='medicinecompany';
extract($_GET);
if($mname=="")
{
$msg1="medicine name is blank";
}
else if($cname=="")
{
$msg2="medicine company name is blank";
}
else if($rate=="")
{
$msg3="medicine rate is blank";
}
else if($quantity=="")
{
}
else if($mfg=="")
{
$msg4="medicine MFG date is blank";
}
else if($exp=="")
{
$msg5="medicine EXP date is blank";
}
else if($weight=='')
{
}

else
{
$mname=$mname."_".$weight;
$sql1="insert into $t2 values('$mname','$quantity','$exp','$mfg')";
$sql2="insert into $t3 values('$mname','$cname','$mtype','$mfg','$exp')";
$sql7="insert into $t1 values('$mname','$weight','$rate','$quantity')";
$result1=mysql_query($sql1) or die("sql1 <a href='update.php'>update</a>".mysql_error());
$result2=mysql_query($sql2) or die("sql2".mysql_error());
$result1=mysql_query($sql7) or die("sql7".mysql_error());
?>
<fieldset>
<table align=center>
<tr><td>Medicine Name</td><td><?php echo($mname);?></td></tr>
<tr><td>Medicine Company</td><td><?php echo($cname);?></td></tr>
<tr><td>Medicine Type</td><td><?php echo($mtype);?></td></tr>
<tr><td>Rate Per Unit</td><td><?php echo($rate);?></td></tr>
<tr><td>Medicine mg/ml</td><td><?php echo($weight);?></td></tr>
<tr><td>Medicine Quantity<td><?php echo($quantity);?></td></tr>
<tr><td>Date Of MFG</td><td><?php echo($mfg);?></td></tr>
<tr><td>Date Of EXP</td><td><?php echo($exp);?></td></tr>
 
</table>
</fieldset>
<div style="clear:both;"></div>
<?php
}
}


?>

<div id="divsearch"></div></td></tr>
</div>
</td>
</tr>
</table>
</center>
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