<?php
$msg5="";
$msgover="";
session_start();
$_SESSION['amount']=0;
if(isset($_SESSION['is_logged_in']))
{
require('database.php');
require('database1.php');
?>


<html>
<body id="main">

<head>
<link href='earning.css' rel='stylesheet' type='text/css'/ media="screen">
<!--link href='autocomplete.css' rel='stylesheet' type='text/css'/ media="screen"-->
<link href='print.css' rel='stylesheet' type='text/css'/ media="print">
<script src="ajax.js">
</script>
<!--script src="libs/jquery-1.4.2.min.js">
</script-->
<link rel="stylesheet" href="themes/base/jquery.ui.all.css">
	<script src="jquery-1.9.1.js"></script>
	<script src="ui/jquery.ui.core.js"></script>
	<script src="ui/jquery.ui.widget.js"></script>
	<script src="ui/jquery.ui.position.js"></script>
	<script src="ui/jquery.ui.menu.js"></script>
	<script src="ui/jquery.ui.autocomplete.js"></script>
	<script src="ui/jquery.ui.datepicker.js"></script>
	<!--link rel="stylesheet" href="demos.css"-->
<script src="script/trtdwarning.js">
</script>
<script>
	$(function() {
		var availableTags = [<?php
$sql="select * from medicineentry";
$result=mysql_query($sql) or die("sql".mysql_error());
while($row=mysql_fetch_array($result))
{
echo('"'.$row['medicine'].'",');
}
?>];
		
		$( "#tags" ).autocomplete({
			source: availableTags
		});
	});
	</script>
<script>
var sum = 0;
var bills ="";

function total()
{
var tds = document.getElementById('stbody').getElementsByTagName('td');
            
            for(var i = 0; i < tds.length; i++) 
			{ 
			if(tds[i].className == 'amount')
			{ sum += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
			}     
			}     
			//document.getElementById('countit').innerHTML += '<tr><td>' + sum + '</td><td>total</td></tr>';
document.getElementById('span').innerHTML=sum;
sum=0;
}

function recordlist()
{
var tds = document.getElementById('stbody').getElementsByTagName('td');
            
            for(var i = 0; i < tds.length; i ++) 
			{ 
			if(tds[i].className == 'bill')
			{ bills= bills+tds[i].innerHTML;
			}     
			}     
			//document.getElementById('countit').innerHTML += '<tr><td>' + sum + '</td><td>total</td></tr>';
document.getElementById('span1').innerHTML=bills;

}
</script>
<script>
/*var gDarr=[<?php
$sql="select * from medicineentry";
$result=mysql_query($sql) or die("sql".mysql_error());
while($row=mysql_fetch_array($result))
{
echo('"'.$row['medicine'].'",');
}
?>];*/
</script>




	

<script src="script/trtdwarning.js">
</script>
<script type="text/javascript">

/*$(document).ready(function(){
	$("#mname").autocomplete(gDarr,{max:35,matchContains: true}).result(function(evt,item){
		if(item!=null && item.length==1){
			var tar=item[0].split("-");
			evt.target.value=item[0];
			document.forms[0].medicine.value=$.trim(tar[1]);
		}
	});
	
});*/
</script>

<script>
</script>
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
background:url("photo/treven.png");
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
:required {
border: 1px solid red;
}
</style>
<script>
function closewarning()
{
var div=document.getElementById("warning");
div.style.visibility="hidden";
}
</script>
</head>
<center>
<table ID='TABLE' border=0 bgcolor="white" width=1050>
<tr><td colspan=2>
<img src="photo/logo.jpg" name="slide" style="" height="150"/>
<script>
/*var step=1
function slideit(){

if (!document.images)
return
document.imaages.slide.src=eval("image"+step+".src");
if (step<4)
step++;
else
step=1;

setTimeout("slideit()",2500);
}
slideit()*/
</script>
</td></tr>
<!--tr><td colspan=2 id="toptable">
<div>
<table id="toptable" width=100%>
<form method="post">
<tr align=center><td><a href="index.php"  >HOME</a></td>
<td><a href="serch2.php" >Search</a></td>
<td><a href="pur2.php" >Purchase</a></td>
<td><a href="totalsale2.php"  >Total Sale</a></td>
<td><a href="tomed2.php"  >Medicine's</a></td>
<td><a href="help.php"  >Help</a></td>
<td><input type="submit" value="Log out" class=but name="logout"></td>
</tr>
</form>
</table>
</div>
</td></tr-->

<tr><td valign=top >
<?php require("sidemenu.php");?>
<?php require("rightsidemenu.php");?>
</td>

<td valign=top id=showdetail>
<center><span style="font-family:Ubuntu, 'Ubuntu Condensed', 'Ubuntu Light', 'Ubuntu Mono', Verdana; color:#333; font-size:24px;text-shadow:5px #333">Welcome to Medicine Sale/Purchase System</span> </center><br>

<font face="Ubuntu, Ubuntu Condensed, Ubuntu Light, Ubuntu Mono, Verdana" align=left color="#0033FF" size="+2">MEDICINE SALE:-<hr></font>

<table align=center id="saletd" border=0>
<form method=get action="" id="formId" name="formmain" >
<tr>
<td width=150 >Medicine
	</td>
<td><input type="text"  class=m onFocus="focustxt=this;" autocomplete="off"  name="mname" id="tags" required><input type="hidden" name="medicine" value="">
</td>
<td width=150><font face color="black"> Quantity:</font></td>
<td><input type="text" name="quantity" class=m required>
</td>
</tr>
<tr><td valign="top" colspan="4">Enter the medicine name (few word) and Quantity should be numeric as 12345678</td></tr>
<tr><td valign="top" colspan="2">

<input type="reset" value="Clear" style=" float:right;background: #0066FF; width:80px; border-radius:4px;color:white;font-family: Ubuntu, 'Ubuntu Condensed', 'Ubuntu Light', 'Ubuntu Mono', Verdana; font-size:18px; padding:3px;">

</td>
<td valign="top" colspan="2">
<input type="button" name="submit" value="submit" onClick="go(document.formmain.mname.value,document.formmain.quantity.value);" style="background: #0066FF; width:80px; border-radius:4px;color:white;font-family: Ubuntu, 'Ubuntu Condensed', 'Ubuntu Light', 'Ubuntu Mono', Verdana; font-size:18px; padding:3px;">


</td></tr>
</table>


<table>
<tr><td></td>
<td><img src="photo/white.png"></td>
</tr>
<tr>
<td><img src="photo/white1.png"></td>
<td>
</td>

</tr>

</form>

</table>

<?php
$user=$_SESSION['username'];
$sqlshop="select * from medicine.shopedetail where username='$user' ";
$resultshop=mysql_query($sqlshop) or die("sqlshop".mysql_error());
if($rowshopdetails=mysql_fetch_array($resultshop))
{
?>
<form name="formname">
NAME <input type="text" style="margin-left:90px;" name="pname" height=40px onKeyPress="typename(this.value)">
</form>
<fieldset style="border:none;">
<div id="print">

<!--h3 align="left"><?php echo($rowshopdetails['shop_name'])?></h3><h3 align=left><?php echo($rowshopdetails['shop_address'])?>&nbsp;<?php echo($rowshopdetails['shop_phone'])?><br> Medicine Bill<br-->




<div id="slip" style="margin-top:5px; padding-left:5px;">

<table  class="oddeven" width=800>
<thead><tr><th valign="top">Serial No</td><th  valign="top">Product</td><th valign="top">Rate</td><th valign="top">Quantity</td><th valign="top">Amount</td></tr></thead>
<tbody id="stbody">
</tbody>
</table>
<br>
<input type="button" onClick="total()" value="total" style="background:#1266ae; width:70px; height:30px; border:1px solid black; color:white; float:left;"><span id="span" STYLE=" float:right; background:yellow; color:black; font-family:Arial, Helvetica, sans-serif; font-size:16px;"></span>
<!--input type="button" onClick="recordlist()" value="bill_list" style="background:PINK;"><span id="span1" STYLE="MARGIN-LEFT:50PX;"></span>
<!--input type="button" onClick="ghtml()" value="bill_list" style="background:#1266ae;"><span id="span1" STYLE="MARGIN-LEFT:50PX;"></span-->


<?php

}
?>
</div>
 </div>
 <br>
 <br>
 <input type="button" value="Print" style="background:#1266ae; width:70px; height:30px; border:1px solid black; color:white; margin-left:5px;" onclickk="bills(document.formname.pname.value,bill,sum);"onClick="printSelection(document.getElementById('print'),document.formname.pname.value);return false">
 </fieldset>
 <span id="span1"></span>


<?php
$sqlwarning="select * from medicine_weight where quantity<50;";
$result=mysql_query($sqlwarning) or die("sqlwarning".mysql_error());
if(mysql_num_rows($result)>0){
echo('<div  id="warning" style="position:fixed;bottom:10px;right:0%;height:auto;width:250px;color:red;border:3px solid; border-color:green; background:white">
<a href="javascript:closewarning()" style="position:absolute;left:90%;width:300px;color:red;">[X]</a>
<table class="bottom" width=100%>
<tbody>');
while($row=mysql_fetch_array($result))
{
?>
<tr><td><?php echo($row['medicine']);?></td><td><?php echo($row['quantity']);?></td></tr>
<?php

}

echo('</tbody>
</table>


</div>');

}
?>




</table>
</center>
</body>
</html>
<?php
if(isset($_POST['logout']))
{

unset($_SESSION['is_logged_in']);
unset($_SESSION['userId']);




$_SESSION=array();
session_destroy();
header('location:login.php');
}
}
else
{

header('Location:login.php');
}
?>