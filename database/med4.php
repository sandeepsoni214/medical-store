
<html>
<head>
<script>
function go(mname,quantity)
{

  //document.getElementById("slip").innerHTML="";
  
  
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
document.getElementById("table1").innerHTML=document.getElementById("table1").innerHTML+xmlhttp.responseText;

    }
  }
xmlhttp.open("GET","med2.1.php?mname="+mname+"&quantity="+quantity);
xmlhttp.send();
}
function totalsale(str)
{

  //document.getElementById("slip").innerHTML="";
  
  
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
document.getElementById("total").innerHTML=document.getElementById("total").innerHTML+xmlhttp.responseText;

    }
  }
xmlhttp.open("GET",str);
xmlhttp.send();
}
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
background:blue;
color:red;
font-size:18px;
}
.even
{
background:skyblue;
color:red;
font-size:18px;
}
</style>
<script>
function closewarning()
{
var div=document.getElementById("warning").innerHTML="";
}
</script>
<link rel="icon" href="photo/logo.png">
<link href='earning.css' rel='stylesheet' type='text/css'/ media="screen">
<link href='print.css' rel='stylesheet' type='text/css'/ media="print">
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />

<script src="ajax.js">
</script>
<script src="libs/jquery-1.4.2.min.js">
</script>

<script src="script/trtdwarning.js">

</script>
</head>
<title>Medicine|HOME</title>
<body id="main" bgcolor="white">
<thead></thead>
<table border=1 align=center width=70% height=70% id="table" >
<tr><td colspan=2 height=100><div id="logo"><font face=verdana color=pink size=4>USERNAME:</font>&nbsp;<font face=verdana color=white size=4><center><font face="vani" color="yellow" size="20">MEDICINE</font></center></font></div></td></tr>
<tr><td colspan=2 bgcolor="skyblue" height=30>
<div>
<table id="toptable"  width=100%>
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
<tr align=left><th rowspan=3 width=140 align=left>

<div id=sidetable>
<br>

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
<br>

<div style="height:12%;"><h5 style="background:blue;color:white;">State's Counter</h5>

</div>
</div></th></tr>
<tr></tr>
<tr><td><div id="showdetail">


<font face=vani align=left color=purple>MEDICINE SALE:-<hr></font>

<table align=center id="saletd">
<form method=get action="" name="form">

<tr>

<td>medicine name</td><td><input type="text" id="mname" name="mname" class=m></td><td>quantity</td><td><input type="text" name="quantity" class=m></td><td><input type="button" value="Sub" onclick="go(document.form.mname.value,document.form.quantity.value)" ></td>
</tr>
</form>
</table><br>

<center>
<fieldset style="background:skyblue;width:40%">
<h4 align="left">Medicine Bill<hr></h4>
<div id="slip">
 <div id="table1">
 
  </div>
<div id="total">
<input type="button" value="total" onclick="totalsale('total.php')">

</div>

 </div>
 <input type="button" value="Print" style="background:yellow; height:35px; width:45px;color:red;" onclick="printSelection(document.getElementById('slip'));return false">
 </fieldset>
 



</center>
<fieldset>
<font color=red>medicine empty</font><br><a href="pur2.php">Add New Medicine please click here</a>
</fieldset>

</table>

</body>

</html>
