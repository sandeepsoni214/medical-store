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

$pwd=md5($pwd);
$sql="select * from login where username='$user' and password='$pwd' ";
$result=mysql_query($sql) or die("Login error".mysql_error());
if(mysql_num_rows($result)>0)
{
$_SESSION['is_logged_in']=1;
$_SESSION['username']=$user;
header('Location:index.php');
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
<link rel="icon" href="photo/logo.png">
<style>
*{
margin:0px;
padding:0px;
}
BODY{


}
#background{
min-width:1024px;
max-width:100%;
}
#logintable{
position:absolute;
top:25%;
right:40%;
left:40%;
bottom:30%;
border-radius:5px; 
}
#logintable .m{
height:30px;
width:250px;
margin:5px;
border:1PX solid #333;
}
#logintable p{
margin:5px;
padding-LEFT:5PX;
font-family: Ubuntu, "Ubuntu Condensed", "Ubuntu Light", "Ubuntu Mono";
}
.button{
background: #0066FF;
color:white;
padding:5px; width:90px;
border-radius:5px;
font-family:Ubuntu, "Ubuntu Condensed", "Ubuntu Light", "Ubuntu Mono";
margin:3px;
}
</style>
</head>
<title>Login</title>
<body>
<img src="photo/l6.jpg" id="background">
<center>
<form method=post id="login">
<table width=270 border="0" style=""id="logintable" bgcolor="#f5f5f5" height="" style="">


<tr><td valign="top" bgcolor="#990000" height="70">
<p style="color:#CC0099; font-family: Arial, Helvetica, sans-serif; font-size:24px; text-align:center; padding-top:15px; color:white; font-family:Arial, Helvetica, sans-serif; font-weight:600">ADMIN LOGIN</p></td>
</tr>
<tr><td valign="top">
<P>Username</P></td></tr>
<tr><td valign="top">
<input type="text" name="username" class="m" size=20 style=""></td></tr>
<tr><td valign="top">
<P>Password</P></td></tr>
<tr><td valign="top">
<input type="password" name="pwd"  class="m" size=20><br><?php echo($msg3)?></td></tr>
<tr><td valign="top"><br>

<input type="submit" name="login" value="Login"class="button"><input type="button" name="login" class="button" value="Sign Up" onClick="location.href='signup.php'"></td></tr>




</table>
</form>
</center>
</body>
</html>