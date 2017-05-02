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
<tr align=left><th width=140 align=left valign=top>

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
</th><td valign='top'>
<!--blogpost-->
<script>

function  add()
{
var i=1;
var mname;
mname="mname";


/*var amount;
var d=document.getElementById('tbody').innerHTML=document.getElementById('tbody').innerHTML+'<tr><td><input type="text"  class=m onFocus="focustxt=this;" autocomplete="off"  name="mname" id="mname" aj1('++')required><input type="hidden" name="medicine" value=""></td><td><input type="text" name="rate" value="<?php echo(5)?>"<td><td><input type="text" name="quantity" value="<?php echo(5)?>"></td><td class=amount><?php echo(25)?></td></tr>';
d.focus();
return true;*/
//d.append();
document.getElementById('span').innerHTML=mname+i;
i++;
}
function total()
{
var tds = document.getElementById('tbody').getElementsByTagName('td');
            var sum = 0;
            for(var i = 0; i < tds.length; i ++) 
			{ 
			if(tds[i].className == 'amount')
			{ sum += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
			}     
			}     
			//document.getElementById('countit').innerHTML += '<tr><td>' + sum + '</td><td>total</td></tr>';
document.getElementById('span').innerHTML=sum;
}

</script>
<table>
<thead>
<th>Medicine</th><th>Rate</th><th>Quantity</th><th>Amount</th></tr>
</thead>
<tbody id="tbody">
<form name="form" method="get" id="f1" action="">
<tr><td><input type="text"  class=m onFocus="focustxt=this;" autocomplete="off"  name="mname" id="mname"onkeypress="getrate(this.value)" required><input type="hidden" name="medicine" value=""></td><td id=rate><input type="text" value=5></td><td><input type="text" name="quantity" value="<?php echo('5')?>"></td><td class=amount><?php echo('25')?></td></tr>
</form>
</tbody>
</table>
<input type="button" value="add new field" onclick="add()">
<input type="button" value="Total" onclick="total()">
<input type="button" value="countx" onclick="cfl()">
<div id="span">
</div>
<div id="f">
</div>

</td></tr>

</table>
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