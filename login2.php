<?php
$msg3="";
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
if(isset($_POST['login']))
{
$user=$_POST["username"];
$pwd=$_POST["pwd"];

require('database.php');

$sql="select * from login where username='$user' and password='$pwd' ";
$result=mysql_query($sql);
if($row=mysql_fetch_array($result))
{
$_SESSION['is_logged_in']=1;
$_SESSION['username']=$user;
header('Location:med2.php');
}
else
$msg3="<a href='forgetpassword.php'>forget Password</a>";
}
else
header('Location:login.php');
}


?>

<html>
<head>
<link href='earning.css' rel='stylesheet' type='text/css'/>
</head>
<title>Login</title>
<body bgcolor=lightgreen>
<table id="logintable" border=1 width=70%>
<tr><th colspan=2 height=100>Medicine Home </th></tr>
<tr><th width=270 rowspan=3>
<div id="logindiv">
<fieldset>
LOGIN<hr>
<form method=post>
<table>
<tr height=100>
<td width=90><p>Username </td><td><input type="text" name="username" class="m" size=20></td></tr>
<tr height=70><td width=90><p>Password </td><td><input type="password" name="pwd" class="m" size=20><br><?php echo($msg3)?></td></tr>
<tr><td width=90></td><td><input type="submit" name="login" value="Login"size=20><a href="signup.php"><br><br>SIGN UP</a></td></tr>
</table>
</form>
</fieldset>
</div>
</th></tr>
<tr><th></th></tr>
</table>
</body>
</html>