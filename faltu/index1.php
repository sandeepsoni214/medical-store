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
<head>
<title>3D</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<style>

</style>
<link rel="stylesheet" href="themes/base/jquery.ui.all.css">
	<script src="jquery-1.9.1.js"></script>
	<script src="ui/jquery.ui.core.js"></script>
	<script src="ui/jquery.ui.widget.js"></script>
	<script src="ui/jquery.ui.position.js"></script>
	<script src="ui/jquery.ui.menu.js"></script>
	<script src="ui/jquery.ui.autocomplete.js"></script>
	<link rel="stylesheet" href="demos.css">
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
</head>
<body background="bg.jpg">
<center>
<div id="main1">
<div id="menu"><?php require("menu.html")?></div>
<div id="mhslideshow">
<style type="text/css"> #mhslideshow img { display:none; } </style>
<img src="images/12.jpg" title="12" />
<img src="images/13.jpg" title="13" />
<img src="images/14.jpg" title="14" />
<img src="images/16.jpg" title="16" />
<img src="images/c3.jpg" title="c3" />
<img src="images/c4.jpg" title="c4" />
<img src="images/c5.jpg" title="c5" />
<a class="sliderengine" href="http://www.magichtml.com/javascriptslideshow/index.html">JavaScript Slideshow</a>
</div><br>
<hr><br>


<center>
<table border=0 width=800 style="background:none">
<form  method=get action="" id="formId" name="form" style="background:none;" >
<tr><td valign=top style="padding:5px; font-family: 'Android Emoji', Andalus, AndroidClock, AndroidClock-Large, 'Droid Sans Armenian'; font-size:18px;color:white; font-weight:900"><label>MEDICINE</td>
<td valign=top><input type="text"  class=m onFocus="focustxt=this;" autocomplete="off"  name="mname" id="tags"  required></td>
<td valign=top style="padding:5px; font-family: 'Android Emoji', Andalus, AndroidClock, AndroidClock-Large, 'Droid Sans Armenian'; font-size:18px;color:white; font-weight:900" ><label> Quantity</label></td>
<td valign=top><input type="text"name="quantity" class=m required></td>
</tr>
<tr><td valign="top"></td><td valign="top"><input type="button" name="submit" value="Submit"onClick="go(document.form.mname.value,document.form.quantity.value)"style="height:50px;width:100px; font-size:24px; font-family: Andalus, 'Android Emoji', 'Droid Sans Armenian', 'Droid Sans Ethiopic'" ></td><td valign="top"></td><td valign="top"><input type="reset" name="reset" value="Reset" style="height:50px;width:100px; font-size:24px; font-family: Andalus, 'Android Emoji', 'Droid Sans Armenian', 'Droid Sans Ethiopic'"></td></tr>
</table>
</form>




<!--form name="formname">
<Label>NAME</label><input type="text" style="margin-left:90px;" name="pname" height=40px onKeyPress="typename(this.value)">
</form-->
<fieldset style="border:none">
<div id="print">

<!--h3 align="left"><?php echo($rowshopdetails['shop_name'])?></h3><h3 align=left><?php echo($rowshopdetails['shop_address'])?>&nbsp;<?php echo($rowshopdetails['shop_phone'])?><br> Medicine Bill<br-->




<div id="slip" style="margin-top:5px; padding-left:5px;">

<table  class="oddeven" width=800>
<thead><tr><th valign="top">Serial No</td><th  valign="top">Product</td><th valign="top">Rate</td><th valign="top">Quantity</td><th valign="top">Amount</td></tr></thead>
<tbody id="stbody">
</tbody>
</table>
<br>
<input type="button" onClick="total()" value="total" style="background:PINK;"><span id="span" STYLE="MARGIN-LEFT:50PX;"></span>

<!--input type="button" onClick="ghtml()" value="bill_list" style="background:#1266ae;"><span id="span1" STYLE="MARGIN-LEFT:50PX;"></span-->



</div>
 </div>
 </fieldset>


</center>

<!--form>

<label>Name</label><br>
<input type="text" id="text" style="" required>

<label>Email Id:-</label><br>
<input type="email" id="text" style="" required>
<label>Mobile No:-</label><br>
<input type="text" id="text" style="" required>
<label>Message:-</label><br>
<textarea reuired></textarea>
<input type="submit" name="submit">
</form-->
</div>
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