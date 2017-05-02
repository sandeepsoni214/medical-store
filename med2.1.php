<?php
//require('database1.php');
session_start();
if(isset($_SESSION['is_logged_in']))
{
require('database.php');
require('database1.php');
$_SESSION['amount']=0;
$_SESSION['total']=0;

$price="";
$date=date('y-m-d');
$mname="";
$rate="jkljlkj";
$quantity="";
$qun="";
$user=$_SESSION['username'];
$mname=$_GET["mname"];
$quantity=$_GET["quantity"];
//$weight=$_GET['mg/ml'];
$mname=$mname/*."_".$weight*/;
$t1="medicine_weight";
$t2="medicineentry";
$t6="totalsale";
$sql5="select * from $t1 where medicine='$mname'";
$result5=mysql_query($sql5) or die("sql5".mysql_error());




$row1=mysql_fetch_array($result5);
if($quantity<1)
{
echo('<font color=red>required quantity is negaitive OR NULL');
}

else if($row1["quantity"]<$quantity)
{
$msgover="<font color='red'>Required quantity for sale not in stock ,<a href='stockupdate2.php'>update medicine</a>";
echo($msgover);
}


else
{
$rate=$row1["rate"];
$price=$quantity*$rate;
$qun=$row1["quantity"];
$sql2="update $t1 set quantity=quantity-'$quantity' where medicine='$mname';";
$sql9="update $t2 set quantity=quantity-'$quantity' where medicine='$mname'";
mysql_query($sql9) or die("sql9".mysql_error());
$result2=mysql_query($sql2) or die("sql2".mysql_error());
$sql3="insert into $t6(medicine,date,quantity,rate,amount) values('$mname','$date','$quantity','$rate','$price')";
mysql_query($sql3) or die("sql3".mysql_error());
$sql4="SELECT *
FROM $t6
ORDER BY slip DESC";
$result4=mysql_query($sql4) or die("sql 4".mysql_error());
$row4=mysql_fetch_array($result4);
$sqlshop="select * from medicine.shopedetail where username='$user' ";
$resultshop=mysql_query($sqlshop) or die("sqlshop".mysql_error());
$rowshopdetails=mysql_fetch_array($resultshop);
?>




<tr><td class=bill style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:16px;"><?php echo($row4["slip"])?></td><td valign="top"style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:16px;" ><?php echo($row4["medicine"]);?></td><td style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:16px;"><?php echo($row4["quantity"]);?></td><td style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:16px;"><?php echo($row4["rate"]);?></td><td class=amount style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:16px;"><?php echo($row4["amount"]);?></td></tr>

 <?php
}

?>

<?php




?>
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