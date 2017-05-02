<?php
$msg5="";
$msgover="";
session_start();
if(isset($_SESSION['is_logged_in']))
{
require('database.php');
require('database1.php');
?>
<html>
<head>
<style>

#saletd td
{
width:160px;
height:40px;
font-family:verdana;
}
#saletd input 
{
height:30px;
}
.odd
{
background:url("photo/treven.png");;
color:white;
font-size:18px;
height:70px;
}
.even
{
background:url("photo/trodd.png");
color:white;
font-size:18px;
height:70px;
}
</style>
<script>
function closewarning()
{
var div=document.getElementById("warning");
div.style.visibility="hidden";
}
</script>
<link rel="icon" href="photo/logo.png">
<link href='earning.css' rel='stylesheet' type='text/css'/ media="screen">
<link href='autocomplete.css' rel='stylesheet' type='text/css'/ media="screen">
<link href='print.css' rel='stylesheet' type='text/css'/ media="print">
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
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

</head>
<title>Medicine|HOME</title>
<body id="main" bgcolor="lightgreen" onload="digital_clock()">
<thead></thead>
<table border=1 align=center width=70% height=70% id="table" >
<tr><td colspan=2 height=100>


<img src="photo/logo.jpg" name="slide" style="" height="150"/>



<div id="wrap">
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

</td></tr>
<tr><td colspan=2 bgcolor="skyblue" height=30 style="topmenu">

<div>
<table id="toptable" style="width:100%;">
<form method="post">
<tr align=center><td><a href="med2.php" class="glink">HOME</a></td>
<td><a href="serch2.php"class="glink">Search</a></td>
<td><a href="pur2.php"class="glink">Purchase</a></td>
<td><a href="totalsale2.php" class="glink">Total Sale</a></td>
<td><a href="tomed2.php" class="glink">Medicine's</a></td>
<td><a href="help.php" class="glink">Help</a></td>

<td><input type="submit" value="Log out" class=but name="logout"></td>
</tr>
</form>
</table>



</div></td></tr>
<tr align=left><th rowspan=3 align=left valign=top>

<div id=sidetable>

<img src="photo/menu_top_red.gif" id="topsidemenu">
<img src="photo/side.png" style="position:absolute;left:04px;" id="sidemenuleft">
<img src="photo/side.png" style="position:absolute;left:196px;" id="sidemenuright">


<li type="none"><a href="javascript:earning();">Earning Home</a></li>
<br>
<li type="none"><a href="stockupdate2.php">Update Medicine</a></li>
<br>
<li type="none"><a href="earning.php">Total Sale</a></li>
<br>
<li type="none"><a href="stockrecord2.php">Stock Records</a></li>
<br>
<li type="none"><a href="closingstock.php">Closing Records</a></li>
<br>
<li type="none"><a href="deletemedicine2.php">Delete Medicine</a></li>
<br>
<li type="none"><a href="changepassword2.php">Change Password</a></li>

<img src="photo/menu_bottom.gif" id="bottommenu">

<div style="height:12%;"><h5 style="background:blue;color:white;">State's Counter</h5>
<img src="photo/menu_top_red.gif" id="topsidemenu">
<img src="photo/side1left.png" style="position:absolute;left:04px;" id="sidemenuleft">
<img src="photo/side1left.png" style="position:absolute;left:196px;" id="sidemenuright">
<h1 style="text-align:center"><?php
/*$conn=mysql_connect('localhost','root');
mysql_select_db($database,$conn);*/
$sql="update counter set count=count+1";
mysql_query($sql)or die("sql1".mysql_error());
$sql1="select count from counter";
$result=mysql_query($sql1);
$row=mysql_fetch_array($result);
echo($row['count']);

?></h1>
<img src="photo/menu_bottom.gif" id="bottommenu">
</div>
</div>
</th></tr>
<tr></tr>
<tr><td align=left>
<div id="showdetail" align=left style="">
<br>
<strong style="color:black;font-family:arial;font-size:18px;"><center>Welcome to Medicine Sale/Purchase system </center></strong><br>

<font face=vani align=left color=purple>MEDICINE SALE:-<hr></font>

<table align=center id="saletd">
<form method=get action="" id="formId" name="form" >
<tr>
<td width=200 ><font face color="black">Name:</td>
<td><input type="text"  class=m onFocus="focustxt=this;" autocomplete="off"  name="mname" id="mname"><input type="hidden" name="medicine" value="">
</td>


<td></td>
<td><font face color="black">Quantity:</td>
<td><input type="text" name="quantity" class=m>
</td>
</tr>
<tr>
<td colspan=5>
Enter the medicine name (few word) and Quantity should be numeric as 12345678</td>
</tr>
<tr>
<td></td>
<td>
<input type="reset" value="Clear" style="background:green;color:white;font-family:verdana">
<input type="submit" name="submit" value="submit" onclick="go(document1.form.mname.value,document.form.quantity.value)" style="background:green;color:white;font-family:verdana">
</td>
</tr>

</form>

</table><br>
<div id="slip">
</div>


<?php
$price="";
$date=date('y-m-d');
$mname="";
$rate="jkljlkj";
$quantity="";
$qun="";
$user=$_SESSION['username'];
if(isset($_GET["submit"]))
{
$mname=$_GET["mname"];
$quantity=$_GET["quantity"];
//$weight=$_GET['mg/ml'];
$mname=$mname/*."_".$weight*/;
$t1="medicine_weight";
$t2="medicineentry";
$t6="totalsale";
$sql5="select * from $t1 where medicine='$mname'";
$result5=mysql_query($sql5) or die("sql5".mysql_error());




$row1=mysql_fetch_array($result5);
if($quantity<1)
{
echo('<font color=red>required quantity is negaitive');
}

else if($row1["quantity"]<$quantity)
{
$msgover="<font color='red'>Required quantity for sale not in stock ,<a href='stockupdate2.php'>update medicine</a>";
echo($msgover);
}


else if(($row1["quantity"]>=5))
{
$rate=$row1["rate"];
$price=$quantity*$rate;
$qun=$row1["quantity"];
$sql2="update $t1 set quantity=quantity-'$quantity' where medicine='$mname';";
$sql9="update $t2 set quantity=quantity-'$quantity' where medicine='$mname'";
mysql_query($sql9) or die("sql9".mysql_error());
$result2=mysql_query($sql2) or die("sql2".mysql_error());
$sql3="insert into $t6(medicine,date,quantity,rate,amount) values('$mname','$date','$quantity','$rate','$price')";
mysql_query($sql3) or die("sql3".mysql_error());
$sql4="SELECT *
FROM $t6
ORDER BY slip DESC";
$result4=mysql_query($sql4) or die("sql 4".mysql_error());
$row4=mysql_fetch_array($result4);
$sqlshop="select * from medicine.shopedetail where username='$user' ";
$resultshop=mysql_query($sqlshop) or die("sqlshop".mysql_error());
$rowshopdetails=mysql_fetch_array($resultshop);
?>

<center>
<fieldset style="background:skyblue;width:40%">
<div id="slip">
<?php  echo($msgover);?>
<h2 align="left"><?php echo($rowshopdetails['shop_name'])?></h2> <br><p align=left><?php echo($rowshopdetails['shop_address'])?><br><?php echo($rowshopdetails['shop_phone'])?><br> Medicine Bill<hr>

<table style="background:none;">
<tr><td colspan=2></td></tr>
<tr>
 <tr><td><?php echo("slip_".$row4["slip"]);?></td><td></td></tr>
  <tr><td><?php echo("".$row4["date"]);?></td><td></td></tr>
<tr><td width=150>Medicine Name :</td><td><?php echo("".$row4["medicine"]) ;?></td></tr>
<td width=150>Medicine mg/ml :</td><td><?php echo("".$row1["weight"]) ;?></td></tr>
 <tr><td>Quantity :-</td><td><?php echo("".$row4["quantity"]);?></td></tr>
 <tr><td>Rate :-</td><td><?php echo("".$row4["rate"]);?></td></tr>
 <tr><td>Amount :-</td><td><?php echo("".$row4["amount"]);?></td></tr>
 </table>
 

 </div>
 <input type="button" value="Print" style="background:yellow; height:35px; width:45px;color:red;" onClick="printSelection(document.getElementById('slip'));return false">
 </fieldset>
 


</center>
<?php
}
else
{
?>
<fieldset>
<font color=red>medicine empty</font><br><a href="pur2.php">Add New Medicine please click here</a>
</fieldset>
<?php
}

}

?>

</table>
<div  id="warning" style="position:fixed;bottom:10px;right:0%;height:aotu;width:250px;color:red;border:3px solid; border-color:green; background:white">
<a href="javascript:closewarning()" style="position:absolute;left:90%;width:300px;color:red;">[X]</a></td>
<table class="bottom" width=100%>
<tbody>
<?php
$sqlwarning="select * from medicine_weight where quantity<5000;";
$result=mysql_query($sqlwarning) or die("sqlwarning".mysql_error());
while($row=mysql_fetch_array($result))
{
?>
<tr><td><?php echo($row['medicine']);?></td><td><?php echo($row['quantity']);?></td></tr>
<?php

}
?>
</tbody>
</table>
<a href="stockupdate2.php">click here to update these medicine</a>
</div>
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