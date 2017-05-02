<?php
$msg1="";
$msg2="";
$msg3="";
$msg4="";
if(isset($_GET["submit"]))
{
extract($_GET);
if($uname=="")
{
$msg1="User name is blank";
}
else if($email=="")
{
$msg2="email is blank";
}
elseif(filter_var($email, FILTER_VALIDATE_EMAIL))
{
//mailto function with username and password to sen
}
else
{
$msg3="email address is not valid ";
}


}



?>
<html>
<head>
<link href='med.css' rel='stylesheet' type='text/css'/>
</head>
<body>
<div id="fpheader">
<center>
MEDICINE CENTER
</center>
</div>

<div id="fpdiv1">
<div id="fpdiv2">
Forget Password<hr>
</div>
<div>
<center>
<form method=get action="">
<table>

<tr height=70><td width=150><font face=verdana color=green>Username </td><td><input type="text" name='uname' size="30" class=m ><br><?php echo($msg1)?></td></tr>
<tr height=70><td width=150><font face=verdana color=green>Your Email Id </td><td><input type="text" name="email"size="30" class=m ><br><?php echo($msg2)?><?php echo($msg3)?></td></tr>
<tr><td width=150><font face=verdana color=green></td><td><input type="submit"  value="submit" name="submit" size="30" class=m ></td></tr>

</table>
</form>

</center>
</div>
</div>
</body>
</html>