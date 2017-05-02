<?php
$msg1="";
extract($_POST);
if(isset($_POST['submit']))
{

if($host="")
{
$msg1="host field is blank";
}
else if($huser=="")
{
$msg1="host username field is blank";
}
else if($hpwd=="")
{
$msg1="password field is blank";
}
else if(!$hpwd==$hcpwd)
{
$msg1="password not match is blank";
}
else if($db=="")
{
$msg1="database name field is blank";
}
else
{
$con=mysql_connect('$host','$huser','$hpwd');
$database="create database $db";
$mysql_query($database) or die("no database created".mysql_error());





}
}


?>
<html>
<head>

<link href='earning.css' rel='stylesheet' type='text/css'/>
<title> Registration</title>
<script language="javascript">
function showuser(str)
{
if (str=="")
  {
  document.getElementById("usercheck").innerHTML="";
  return;
  }
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
    document.getElementById("usercheck").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}

function showmemail(str)
{
if (str=="")
  {
  document.getElementById("checkemail").innerHTML="";
  return;
  }
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
    document.getElementById("checkemail").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getemail.php?a="+str,true);
xmlhttp.send();
}


function checkcaptcha(str)
{
if (str=="")
  {
  document.getElementById("captcha").innerHTML="";
  return;
  }
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
    document.getElementById("captcha").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","checkcaptcha.php?a="+str,true);
xmlhttp.send();
}
</script>
<style>
a:hover
{
text-decoration:underline;
color:red;
font-size:20px;
}
</style>
</head>

<body>
<center>
<div style="position:auto;width:100%;height:100%;">


<div id="sdivheader">
<h2 align=left><center>Setup Your Database</center>
</div>
<div class=sform>

<center>

<fieldset class=f1 style="width:60%;">
<LEGEND>Sign Up</legend>
<form name="registration" method=post action="">

<fieldset class="f2" style="width:80%;">
<legend>Profile Information</legend>
<table id="signup1">
<tr height=90><td>YOUR HOST</td><td><input type="text" name="host" size="30" class=m></td></tr>

<tr height=90><td>HOST USERNAME</td><td>  <input type="text" name="huser" size="30"><div id="usercheck"></div></td></tr>

<tr height=90><td>HOST PASSWORD </td><td><input type="text"name="hpwd" size="30"></td></tr>

<tr height=90><td>ReType PASSWORD </td><td><input type="text"name="hcpwd" size="30"></td></tr>

<tr height=90><td>DATABASE NAME </td><td><input type="text"name="db" size="30"></td></tr>


<tr><td>Insert This</td><td><img src="img.php"></td></tr>
<tr height=90><td></td><td> <input type="text" name="captcha" size="30" onkeyup="checkcaptcha(this.value);"><div id=captcha> </div></td></tr>
<tr><td></td><td> <input type="submit" name="submit" value="submit"  class=m></td></tr>
</table>
</fieldset>
</center>
</form>
</form>

</fieldset>
</div>


<div id=sbottom>
<center>
<a href="http://trickandgame.blogspot.com">copyright@srdgroup</a>
</center>
</div>
</div>
</center>
</body>
</html>