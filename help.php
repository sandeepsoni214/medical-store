<?php

session_start();
if(isset($_SESSION['is_logged_in']))
{
require('database1.php');
if(isset($_GET['home']))
{
header('location:index.php');
}
if(isset($_GET['search']))
{header('location:serch2.php');
}
if(isset($_GET['pur']))
{header('location:pur2.php');
}
if(isset($_GET['sale']))
{
header('location:totalsale2.php');
}
if(isset($_GET['medicine']))
{
header('location:tomed2.php');
}
if(isset($_GET['earning']))
{
header('location:earning.php');
}
?>
<html>
<head>
<style>
h1
{
color:white;
font-family:vani;
font-size:17px;

}
h2
{
color:red;
font-family:vani;
font-size:14px;
text-decoration:underline;
}
div
{
border:1px solid;
width:100%;
height:auto;
background:white;
}
tt
{
color:blue;

}
a
{
font-family:verdana;
}
a:hover
{
color:red;

}
input
{

height:35px;
width:70px;
background:lightgreen;
}
#counter
{
position:absolute;
top:2%;
right:5px;

background:yellow;
color:blue;
}
#logout
{
float:right;
}
</style>
<script>
//document.getElementById('img').innerHTML="";
function see()
{
the=document.getElementById('img').innerHTML="<img src='photo/search.jpg' onclick='javascript:close1();'></img>";

}

function close1()
{
the=document.getElementById('img').innerHTML="";
//the.style.visibility="hidden";
}
function see1()
{
the=document.getElementById('img1').innerHTML="<img src='photo/puchase.jpg' onclick='javascript:close2();'></img>";

}
function close2()
{
the=document.getElementById('img1').innerHTML="";
//the.style.visibility="hidden";
}
function see2()
{
the=document.getElementById('img2').innerHTML="<img src='photo/totalsale.jpg' onclick='javascript:close3();'></img>";

}
function close3()
{
the=document.getElementById('img2').innerHTML="";
//the.style.visibility="hidden";
}

function see3()
{
the=document.getElementById('img3').innerHTML="<img src='photo/totalmedicine.jpg' onclick='javascript:close4();'></img>";

}
function close4()
{
the=document.getElementById('img3').innerHTML="";
//the.style.visibility="hidden";
}
function see4()
{
the=document.getElementById('img4').innerHTML="<img src='photo/earning.jpg' onclick='javascript:close5();'></img>";

}
function close5()
{
the=document.getElementById('img4').innerHTML="";
//the.style.visibility="hidden";
}
function closeimg()
{
the=document.getElementById('image');
the.style.visibility="hidden";
}

</script>
</head>
<body>

<?php
/*$conn=mysql_connect('localhost','root');
mysql_select_db($database,$conn);*/
$sql="update counter set count=count+1";
mysql_query($sql)or die("sql1".mysql_error());
$sql1="select count from counter";
$result=mysql_query($sql1);
$row=mysql_fetch_array($result);
//echo($row['count']);

?>
<div style="background:url('photo/help.png')"><center><h1>MEDICINE STORE HELP DESK</h1></center><br /><span id="counter">page counter &nbsp; <br><?php echo($row['count']);?></span></div>
<div style="height:35px;background:url('photo/menu.png');"><FORM method=get><a href="index.php"><input type="submit" name="home"value="Home"></a><a href="serch2.php"><input type="submit" name="search" value="Search"></a><a href="Pur2.php"><input type="submit" name="pur"value="Purchase"></a><a href="totalsale2.php"><input type="submit" name="sale"value="Sale"></a><a href="tomed2.php"><input type="submit" name="medicine" value="Medicine"></a><a href="earning.php"><input type="submit" name="earning" value="Earning"></a><input type="submit" id="logout" value="Logout" name="logout"></FORM></div>
<div>
<h2>Medicine Sale</h2>
<tt>for medicine sale go home page :-<tt><br>
<tt>fill up form</tt><br>
<tt>medicine name</tt>
<tt>medicine weight.weight means in mg/ml put medicine weight. according this weight bill are generated of their price </tt><br>
<tt>Enter the quantity of medicine.bill generated using quantity</tt><br>
</div>
<br />
<div>
<h2>Medicine Search</h2>
<tt>for medicine search click the search option</tt><br />
<tt>type the few word of medicine name and list generated below</tt><br />
<a href="javascript:see();"> click to see image</a>
<br />

<div id="img" style="border:none;"></div>
</div>
<br />

<div>
<h2>Medicine Purchase</h2>
<tt>purchase new medicine:-</tt><br />
<tt>type name of medicine</tt><br />
<tt>Enter the medicine company</tt><br />
<tt>select the type of medicine such tablet ,syrups etc</tt><br />
<tt>enter the power of medicine in term of mg or ml or kg</tt><br />
<tt>enter the quantity of medicine </tt><br />
<tt>Enter the Date of manufacturing </tt><br />
<tt>Enter the Date of Expiry </tt><br />
<tt>when all required field are fillup,then click submit</tt><br/>
<strong>a ticket generated </strong>
<a href="javascript:see1();">click to see image</a>
<div id="img1" style="border:none;"></div>
<tt>
</div>

<br />
<div>
<h2>View total Sale</h2>
<tt>click sale link  all medicine sale list are generated;<a href="javascript:see2()">click to see image</a>
<div id="img2" style="border:none"></div>
</div>
<br />
<div>
<h2>View total medicine you have already purchase</h2>
<tt>in this section we generate the list of medicine purchased;<a href="javascript:see3();">click to see image</a></tt>
<div id="img3" style="border:none">
</div>
</div>
<br />
<div>
<h2>View your total earning</h2>
<tt>in this section we are watch all earning by top medicine sale ,<br>last 100 sale <br>;last month sale<br>,total sale sale</tt>
<tt>the list generated according to latest medicine sale and arrange in accordance with bill no;</tt>
<br>
<a href="javascript:see4()">click to see image</a>
<div id="img4" style="border:none">
</div>
</div>
<br />
<div>
<center><font face="verdana"color="red">copyright@srdgroup</center>
</div>
<br />
<div  id="image" style="top:80%;width:50%;left:25%;position:fixed;border:none; background:url('photo/i5.jpg');visibility:transparent;">

<img src="photo/close.png" width=15 style="top:0%;right:0%;position:relative;" onclick="closeimg()">
<font face="verdana" size="10" color=white>Microsoft Office 2010</font><a href="http://google.com"><img src="photo/add.gif"></a>

</div>
</body>
</html>
<?php
if(isset($_GET['logout']))
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
