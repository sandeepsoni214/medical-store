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
#updateform td
{
color:blue;

height:55px;
}
#updateform td input,SELECT
{
height:30px;
}

</style>

<link href='autocomplete.css' rel='stylesheet' type='text/css'/ media="screen">
<script src="ajax.js">
</script>
<script src="libs/jquery-1.4.2.min.js">
</script>
<script src="script/trtdwarning.js">
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
<script src="ajax.js">
</script>
</head>
<title>Medicine|UPDATE</title>
<body id="main" bgcolor="lightgreen" onLoad="digital_clock()">
<!--div id="wrap" style="top:0px;right:5px;position:absolute; ">
<div id="digital-clock">
<ul>
<li id="hours"></li>
<li> :</li>
<li id="minutes"></li>
<li> :</li>
<li id="seconds"></li>
</ul>
</div>
</div-->

<table border=0 align=center id="table">
<tr><td height=100>
<img src="photo/logo.jpg" name="slide" style="" height="150"/>


</td>
</tr>



<?php require("sidemenu.php")?>


<tr><td valign=top>
<div id="showdetail" style="height:700px; width:1000px;">
<h1>MEDICINE STOCK UPDATE   -</h1>
<hr>

<table align=center  id="pform">
<form method="get" action="">
<tr>
<td width=200>Medicine Name</td>
<td><input type="text"  class=m onFocus="focustxt=this;" autocomplete="off"  name="mname" id="mname" required><input type="hidden" name="medicine" value=""></td>
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
<option>Supplement</option>
<option>Other's</option>
</select>


</td></tr>
<tr>
<td>Rate Per Unit</td>
<td><input type="text" name="rate"></td>
</tr>

<tr>

</tr>

<tr>
<td>Medicine Quantity</td>
<td><input type="text" name="quantity" ></td>
</tr>
<tr>
<td>Date of Puchase</td>
<td><input type="text" name="date" value='<?php echo(date('Y-m-d'))?>'></td>
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
$mname=$_GET["mname"];
$mtype=$_GET["mtype"];
$quantity=$_GET["quantity"];


$user=$_SESSION['username'];

$t2="medicineentry";
$t3="medicine_weight";
//$t4="medicinecompany"."_".$uname;
$t5="stockupdate";
$t6="totalsale";
extract($_GET);
if($mname=="")
{
$msg1="medicine name is blank";
}
/*else if($cname=="")
{
$msg2="medicine company name is blank";
}*/
else if($rate=="")
{
$msg3="medicine rate is blank";
}
else if($date=="")
{
$msg4="medicine MFG date is blank";
}

else
{
$mname=$mname/*."_".$weight*/;
$sql6="select * from $t3 where medicine='$mname'";
$result6=mysql_query($sql6) or die("sql6".mysql_error());


$row6=mysql_fetch_array($result6);





if($row6['medicine']==$mname)
{
$sql1="update $t3 set quantity=quantity+'$quantity' where medicine='$mname';";
$sql8="update $t2 set quantity=quantity+'$quantity' where medicine='$mname';";

$sql7="UPDATE $t3 SET `rate` = '$rate' where medicine='$mname'";
$sql3="insert into $t5 values('$mname','$cname','$mtype','$rate','$quantity','$d')";
$result1=mysql_query($sql1) or die("sql1".mysql_error());
$result3=mysql_query($sql3) or die("sql3".mysql_error());
$result7=mysql_query($sql7) or die("sql7".mysql_error());
$result7=mysql_query($sql8) or die("sql8".mysql_error());



?><br>
<fieldset style="width:40%">

Medicine Updated<hr>
<table>
<tr><td>Medicine Name</td><td><?php echo($mname);?></td></tr>
<tr><td>Medicine Company</td><td><?php echo($cname);?></td></tr>
<tr><td>Medicine Type</td><td><?php echo($mtype);?></td></tr>
<tr><td>Rate Per Unit</td><td><?php echo($rate);?></td></tr>
<tr><td>Medicine Quantity</td><td><?php echo($quantity);?></td></tr>
<tr><td>Date of Purchase</td><td><?php echo($date);?></td></tr> 
</table>
</fieldset>
<?php
}
else 
{
?>
<br>
<fieldset>
medicine not found<br> <a href="pur2.php">Purchase </a>
</fieldset>
<?php
}
}
}


?>
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