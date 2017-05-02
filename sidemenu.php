<style>
#sidemenubloack{
position:fixed;
width:212px;
top:1%;
left:-175px;
height:768px;


-webkit-transition: all 0.3s ease-in-out; 
  -moz-transition: all 0.3s ease-in-out; 
  -o-transition: all 0.3s ease-in-out; 
  transition: all 0.1s ease-in-out;
}
#sidemenubloack:hover{

position:fixed;
width:212px;
top:1%;
left:0px;

}
</style>
<div id="sidemenubloack">
<div style="float:left; width:150px;background:url(photo/bg.jpg);">
<div id="sidemenu">
<li type="none"><a href="index.php">Home</a></li>
<li type="none"><a href="serch2.php">Search</a></li>
<li type="none"><a href="pur2.php">Purchase</a></li>
<li type="none"><a href="totalsale2.php">Total Sale</a></li>
<li type="none"><a href="tomed2.php">Total Medicine</a></li>
<li type="none"><a href="earning.php">Earning Home</a></li>
<li type="none"><a href="stockupdate2.php">Update Medicine</a></li>

<li type="none"><a href="stockrecord2.php">Stock Records</a></li>
<li type="none"><a href="closingstock.php">Closing Records</a></li>
<li type="none"><a href="deletemedicine2.php">Delete Medicine</a></li>
<li type="none"><a href="changepassword2.php">Change Password</a></li>
<li type="none"><a href="help.php">Help</a></li>
<form method="post"><li type="none" style="height:40px"><input type="submit" value="Log out" class=but name="logout"></li></form>
</div>
<br>
<div style=" font-family:Arial, Helvetica, sans-serif; border:1px groove gray; background:#e5e5e5;">


<h3 style="text-align:center; background: #990066; padding:5px; margin:3px; color:white; font-family:Arial, Helvetica, sans-serif;"><?php
/*$conn=mysql_connect('localhost','root');
mysql_select_db($database,$conn);*/
$sql="update counter set count=count+1";
mysql_query($sql)or die("sql1".mysql_error());
$sql1="select count from counter";
$result=mysql_query($sql1);
$row=mysql_fetch_array($result);
echo($row['count']);

?></h3>

</div>
</div>
<div id="clickhere"style="float:right; margin-left:2px; width:40px; background:#fff url(photo/sidemenu.png) no-repeat; height:300px; margin-top:5px;">

</div>
</div>