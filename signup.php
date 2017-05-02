<?php
session_start();
$msg1="";

if(isset($_POST["submit"]))
{

extract($_POST);
if($fname=="")
{
$msg1="Full name is blank";
}
else if($uname=="")
{
$msg1="User name is blank";
}
else if($uname>10)
{
$msg1="User name too short";
}
else if($gender=="")
{
$msg1="Full gender is not selected";
}

else if($email=="")
{
$msg1="user email is blank";
}
else if($pwd=="" && $cpwd=="")
{
$msg1="password field is blank";
if($pwd==$cpwd)
{
}
else
{
$msg1="$Password is not match";
}
}
else if($phone=="")
{$msg1="Shope phone no is blank";
}
else if($sname=="")
{
$msg1="Shope name is blank";
}
else if($addr=="")
{
$msg1="shope Address is blank";
}
else if($captcha=="")
{
$msg1="captcha  is blank";

}
else if($q1=="")
{
$msg1="select a question 1";
}
else if($ans1=="")
{
$msg1="your answer 1 field is blank";
}
else if($q2=="")
{
$msg1="select a question 2";
}
else if($ans2=="")
{
$msg1="your answer 2 field is blank";;
}
else if($website=="")
{
}

else
{
require('database.php');



//$uname=md5($uname);
$pwd=md5($pwd);
$sql1="insert into login values('$uname','$pwd','$email','$fname','$gender')";
mysql_query($sql1) or die("sql_1".mysql_error());
$sql2="insert into shopedetail values('$uname','$sname','$phone','$addr','$website')";
mysql_query($sql2) or die("sql_2".mysql_error());
$sql3="insert into security_question values('$uname','$q1','$ans1','$q2','$ans2')";
mysql_query($sql3) or die("sql_3".mysql_error());

//$con=mysql_connect('$host','$huser','$hpwd');


$_SESSION['is_logged_in']=1;
$_SESSION['username']=$uname;


$db=$uname;

$database="create database $db";
mysql_query($database) or die("no database created".mysql_error());

$t1='medicinecompany';
$t2="medicineentry";
$t3="medicine_weight";
//$t4="medicinecompany"."_".$uname;
$t5="stockupdate";
$t6="totalsale";
$t7='counter';
$create1="create table $db.$t1(medicine varchar(40) PRIMARY KEY,company varchar(40),medicinetype varchar(40),mfg DATE NOT NULL,exp DATE NOT NULL)";
mysql_query($create1) or die("create1".mysql_error());

$create2="create table $db.$t2(medicine varchar(40) PRIMARY KEY,quantity int(5),issuedate DATE NOT NULL,expdate DATE NOT NULL)";
mysql_query($create2) or die("create2".mysql_error());

$create3="create table $db.$t3(medicine varchar(40) PRIMARY KEY,weight int(5),rate int(5),quantity int(5))";
mysql_query($create3) or die("create3".mysql_error());

/*$create4="create table $t4(medicine varchar(40) PRIMARY KEY,company varchar(40),medicinetype varchar(40),mfg DATE NOT NULL,exp DATE NOT NULL)";
mysql_query($create4) or die("create4".mysql_error());*/

$create5="create table $db.$t5(medicine varchar(40),company varchar(40),medicinetype varchar(40),rate int(5),quantity int(5),date DATE NOT NULL)";
mysql_query($create5) or die("create5".mysql_error());

$create6="create table $db.$t6(slip int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,medicine varchar(40),date DATE,quantity int(5),mfg DATE NOT NULL,rate int(5),amount int(10))";
mysql_query($create6) or die("create6".mysql_error());
$create7="create table $db.$t7(count BIGINT(50))";
mysql_query($create7);
$insert="insert into $db.$t7 values(0)";
mysql_query($insert)or die("insert".mysql_error());



header('Location:index.php');
}

}
?>
<html>
<head>
<link rel="stylesheet" href="themes/base/jquery.ui.all.css">
	<script src="jquery-1.9.1.js"></script>
	<script src="ui/jquery.ui.core.js"></script>
	<script src="ui/jquery.ui.widget.js"></script>
	<script src="ui/jquery.ui.button.js"></script>
	<link rel="stylesheet" href="demos.css">
<script>
	$(function() {
		$( "#radio" ).buttonset();
	});
	</script>
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
function password(str)
{
if (str=="")
  {
  document.getElementById("pass").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("pass").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","password.php?q="+str,true);
xmlhttp.send();
}
</script>
<!--script src="script/jquery.js">
</script-->
  <script>
$(document).ready(function(){
$('#second').hide("fast");
$('#third').hide("fast");
$("#firstnext").click(function() {
$('#first').hide("slow");

$('#second').show("slow");


});

$("#secondback").click(function() {
$('#second').hide("slow");

$('#first').show("slow");


});
$("#secondnext").click(function() {
$('#second').hide("slow");

$('#third').show("slow");


});
$("#thirdback").click(function() {
$('#second').show("slow");
$('#third').fadeOut("slow");



});




});
</script>
  
 
<style>
*{
padding:0px;
margin:0px;
}
body
{
 /*filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#9cc400', endColorstr='#ffffff'); /* for IE */
/* background: -webkit-gradient(linear, left top, left bottom, from(#cc8000), to(#ffffff)); /* for webkit browsers */
/* background: -moz-linear-gradient(#3cd400,#ffffff);*/
background:white;
font-family: Ubuntu, 'Ubuntu Condensed', 'Ubuntu Light', 'Ubuntu Mono', Verdana;
}

#third{
position:absolute;
top:20%;
right:40%;
left:40%;

display:none;
z-index:5000;
padding:10px;
box-shadow:1px 1px 2px 2px #333;
}
#second{
position:absolute;
top:20%;
right:40%;
left:40%;

display:none;
z-index:10000;
padding:10px;
box-shadow:1px 1px 2px 2px #333;
}
#first{
position:absolute;
top:20%;
right:35%;
left:35%;
padding:10px;

height:auto;
z-index:15000;
box-shadow:1px 1px 2px 2px #333;
}
#first p{
padding:6px;
width:150px;
}
#second p{
padding:6px;
width:150px;
}
#third p{

padding:6px;
width:150px;
}
.m{
height:31px;
margin:3px;

border:1px ridge #333;
}
select{
height:27px;
margin:3
}




</style>

</head>

<body>
<div id="sdiv1">


<div id="sdivheader" style="max-width:100%;min-width:1000px; background:#1266ae; height:100px;">
<center>
<div style="width:1000px;">
<p style="font-size:76px;color:white;font-family: Ubuntu, 'Ubuntu Condensed', 'Ubuntu Light', 'Ubuntu Mono', Verdana;">Medicine Store Registration</p>
</div>
</center>
</div>


<center>


<div><?php echo($msg1);?></div>
<form name="form" method="post" action="" id="fsignup">



<table border="0" id="first">
<tr><td colspan="2"><p style="background:#1266ae; color:white; font-family: Ubuntu, 'Ubuntu Condensed', 'Ubuntu Light', 'Ubuntu Mono', Verdana; padding:5px; font-size:24px;width:100%;">Profile Information</p></td></tr>
<tr><td width="" valign="top"><p>Full Name</p></td><td  valign="top"><input type="text" name="fname"size="30" class=m required></td></tr>

<tr><td  valign="top"><p>User Name</p></td><td  valign="top">  <input type="text"name="uname" size="30" onKeyUp="showuser(this.value)" class=m required><span id="usercheck"></span></td></tr>

<tr><td  valign="top"><p>Gender</p> </td><td  valign="top" ><!--input type="radio" id="radio1"name="gender" value="male" checked > Male <input type="radio" id="radio2"name="gender" value="female"--><div id="radio">
		<input type="radio" id="radio1" name="gender" checked="checked" /><label for="radio1">Male</label>
		<input type="radio" id="radio2" name="gender"/><label for="radio2">Female</label>
		
	</div> </td></tr>
<tr><td valign="top"></td><td valign="top"><div style="background:#1266ae; color:white; text-align:center; width:80px;" id="firstnext">Next</div></td></tr>
</table>



<br />

<legend></legend>
<table id="second">
<tr><td colspan="2"  valign="top" ><p style="width:100%; background:#1266ae; color:white; font-family: Ubuntu, 'Ubuntu Condensed', 'Ubuntu Light', 'Ubuntu Mono', Verdana; padding:5px; font-size:24px;">Shop Contact's</p></td></tr>
<tr><td valign="top"><p>Email Id</p> </td><td valign="top">    <input type="email" name="email" size="30" onKeyUp="showmemail(this.value)" class=m  required></td><td><div id="checkemail"></div></td></tr>

 <tr><td valign="top"> <p>Password</p> </td><td valign="top"><input type="password" name="pwd" size="30" class=m onKeyUp="password(this.value)" required></td><td width=40><div id="pass"></div></td></tr>
 <tr><td valign="top"><p> Conf_password</p> </td><td valign="top"> <input type="password" name="cpwd" size="30" class=m required></td></tr>
 


<tr><td valign="top"><p>Phone No</p></td><td valign="top"> <input type="text" size="30" name="phone" class=m required></td></tr>
<tr><td valign="top"><p>Name Of Shop</p></td><td valign="top"> <input type="text" name="sname"size="30" class=m required></td></tr>

<tr><td valign="top"><p>Address Of Shop</p></td><td valign="top"><textarea name="addr"col=100 rows=3 required></textarea></td></tr>
<tr><td valign="top"><p>website</p></td><td valign="top"> <input type="text" name="website"size="30" class=m required></td></tr><br>
<tr><td valign="top"><div style="background:#1266ae; color:white; text-align:center; width:80px;" id="secondback">Back</div></td><td valign="top"><div style="background:#1266ae; color:white; text-align:center; width:80px;" id="secondnext">Next</div></td></tr>
</table>




<table id="third">
<tr><td colspan="2" valign="top"><p style="width:100%;background:#1266ae; color:white; font-family: Ubuntu, 'Ubuntu Condensed', 'Ubuntu Light', 'Ubuntu Mono', Verdana; padding:5px; font-size:24px;">Security Question's</p></td></tr>
<tr><td class="conditional" valign="top"><p>Select a question 1</p></td><td valign="top">

 <select name="q1">select a Question
 <option>Your Birth City</option>
<option>Your pet animal name</option>
<option>Your first  teacher  name</option>
</select>

</td></tr>
<tr><td valign="top"><p>Your Answer</p></td><td valign="top"><input type="text" name="ans1"size="30" class=m required></td></tr>
<tr><td class="conditional" valign="top"><p>Select a question 2</p></td><td>

 <select name="q2">select a Question
 <option>Your Primary School Name</option>
<option>Your Working City</option>
<option>Your Chilhood Friend Name </option>
</select>

</td></tr>
<tr><td valign="top"><p>Your Answer</p></td><td valign="top"><input type="text" name="ans2"size="30" class=m required></td></tr>

<tr><td valign="top"><p>Insert This</p></td><td valign="top"><img src="img.php"></td></tr>
<tr><td valign="top" colspan="2"> <input type="text" name="captcha" size="30" onKeyUp="checkcaptcha(this.value)" style="float:right" class=m required>
</td></tr>
<tr><td valign="top" colspan="2"><div id=captcha style="float:right; min-height:27px;"> </div></td></tr>

<tr><td valign="top"><div style="background:#1266ae; color:white; text-align:center; width:80px;" id="thirdback">Back</div></td><td valign="top"> <input type="submit" name="submit" value="submit" style="background:#1266ae; color:white; font-family:Ubuntu, 'Ubuntu Condensed', 'Ubuntu Light', 'Ubuntu Mono', Verdana; font-size:16px; border-radius:5px;"></td></tr>
</table>
</form>


</center>




</body>
</html>