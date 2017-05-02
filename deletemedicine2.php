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
<script src="ajax.js">

</script>
<link href='autocomplete.css' rel='stylesheet' type='text/css'/ media="screen">

<script src="libs/jquery-1.4.2.min.js">
</script>


<script>
var gDarr=[<?php
$sql="select * from medicineentry";
$result=mysql_query($sql) or die("sql".mysql_error());
while($row=mysql_fetch_array($result))
{
echo('"'.$row['medicine'].'",');
}
?>];
</script>
<script src="aotucomplete.js">
</script>
<script type="text/javascript">
$(document).ready(function(){
	$("#mname").autocomplete(gDarr,{max:35,matchContains: true}).result(function(evt,item){
		if(item!=null && item.length==1){
			var tar=item[0].split("-");
			evt.target.value=item[0];
			document.forms[0].medicine.value=$.trim(tar[1]);
		}
	});
	
});
</script>
<link rel="icon" href="photo/logo.png">
<link href='earning.css' rel='stylesheet' type='text/css'/>
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />

</head>
<title>Medicine|DELETE</title>
<body id="main"bgcolor="lightgreen"  onload="digital_clock()">

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
<table id="toptable"  width=100%>
<form method="post">
<tr align=center id="tr1"><td><a href="index.php" class="glink">HOME</a></td>
<td><a href="serch2.php"class="glink">Search</a></td>
<td><a href="pur2.php"class="glink">Purchase</a></td>
<td><a href="totalsale2.php" class="glink">Total Sale</a></td>
<td><a href="tomed2.php" class="glink">Medicine's</a></td>
<td><a href="help.php" class="glink">Help</a></td>
<td><input type="submit" value="Log out" class=but name="logout"></form></td>
</tr>

</table>



</div></td></tr-->
<tr align=left><td rowspan=2 align=left>
<?php require("sidemenu.php")?>

</td></tr>

<tr><td width=84.6% valign=top>
<div id="showdetail">
<h1>DELETE MEDICINE-</H1>
<center>
<?php
$msgdelete="";
$msg1="";
$msg2="";
$msg3="";
if(isset($_GET["submit"]))
{
$user=$_SESSION['username'];
$pwd=$_GET['pwd'];



$t1='medicinecompany';
$t2="medicineentry";
$t3="medicine_weight";
extract($_GET);
if($mname=="")
{
$msg1="medicine name is blank";
}

elseif($pwd=="")
{
$msg3="Enter the password";
}

else 
{
$mname=$mname;
$sql="select password from  medicine.login where username='$user'";
$result=mysql_query($sql) or die("sql".mysql_error());
$row=mysql_fetch_array($result);
$pwd=md5($pwd);
if($row['password']==$pwd)
{
$sqldelete1="DELETE FROM $t2 WHERE medicine = '$mname';";
$sqldelete2="DELETE FROM $t1 WHERE medicine = '$mname';";
$sqldelete3="DELETE FROM $t3 WHERE medicine = '$mname';";
$result1=mysql_query($sqldelete1) or die("sqldelete1".mysql_error());
$result2=mysql_query($sqldelete2) or die("sqldelete1".mysql_error());
$result3=mysql_query($sqldelete3) or die("sqldelete1".mysql_error());
$msgdelete="medicine is deleted";
}
else
$msgdelete="Password not match";

}
}
?>




<table>
<form method=get action="">
<tr>
<td width=200>Medicine Name</td>
<td><input type="text"  class=m onFocus="focustxt=this;" autocomplete="off"  name="mname" id="mname"><input type="hidden" name="medicine" value=""></td><td class="error"><?php echo($msg1);?></td>
</tr>



<tr>
<td>Password</td>
<td><input type="password" name="pwd" class=m></td><td valign=top class="error"><?php echo($msg3);?></td>
</tr>
<tr>


<tr>
<td><input type="reset" value="Reset"></td>
<td><input type="submit" name="submit" value="submit"></td>
</tr>

</form>


</table>
<div>
<?php
echo($msgdelete);?>
</div>

</center>


</td></tr>
</div>

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