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

<link rel="icon" href="photo/logo.png">
<link href='earning.css' rel='stylesheet' type='text/css'/>
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
<script src="ajax.js">
</script>
</head>
<title>Medicine|ChangePassword</title>
<body id="main"bgcolor="lightgreen" onLoad="digital_clock()">
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


<table border=1 align=center id="table">
<tr><td height=50><img src="photo/logo.jpg" height=150/>

</td></tr>


<?php require("sidemenu.php")?>


<tr><td valign=top>
<div id="showdetail" style="height:700px;">
<h1>Change Password-</h1>
<?php
$msgdelete="";
$msg1="";
$msg2="";
$msg3="";
$msg="";
if(isset($_POST["submit"]))
{
$user=$_SESSION['username'];
$pwd=$_POST['pwd'];

extract($_POST);
if($opwd=="")
{
$msg1="* Enter the OLD Password";
}
else if($pwd=="")
{
$msg2="* Enter the new password";
}
elseif($cpwd=="")
{
$msg3="";
}
else if(!$pwd==$cpwd)
{
$msg4="* password not match";
}

else 
{
$sql="select password from  medicine.login where username='$user'";
$result=mysql_query($sql) or die("sql".mysql_error());
$row=mysql_fetch_array($result);
$opwd=md5($opwd);
if($row['password']==$opwd)
{
if($pwd==$cpwd)
{
$pwd=md5($pwd);
$sqlchange="update medicine.login set password='$pwd' where username='$user';";

$result3=mysql_query($sqlchange) or die("sqlchange".mysql_error());
echo("<script>window.alert('password change')</script>");

}
else 
$msg="password not matched";
}
else
echo("<script>window.alert('Wrong password enter')</script>");


}
}
?>



<center>
<table border=0 id="changepassword">
<form method=post action="" >
<tr>
<td width=200><font face="verdana" color=red size=3>OLD PASSWORD</td>
<td><input type="password" name="opwd" class=m onKeyUp="showmedicine(this.value)"></td><td valign=top class="error"><?php echo($msg1);?></td>
</tr>

<tr>
<td><font face="verdana" color=blue size=3>NEW PASSWORD</td>
<td><input type="password" name="pwd" class=m></td><td valign=top class="error"><?php echo($msg2);?></td>
</tr>

<tr>
<td><font face="verdana" color=blue size=3>CONFIRM PASSWORD</td>
<td><input type="password" name="cpwd" class=m></td><td valign=top class="error"><?php echo($msg3);?></td>
</tr>



<tr>
<td></td>
<td valign=top><input type="reset" value="Reset"style=" float:left;width:80px; background:#1266ae; color:white; font-family:arial; "> <input type="submit" name="submit" value="Submit" style="float:right;width:80px; background:#1266ae; color:white; font-family:arial; "></td>
</tr>

</form>


</table>

</center>

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