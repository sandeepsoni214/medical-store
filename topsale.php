<?php
$msg5="";
session_start();
if(isset($_SESSION['is_logged_in']))
{
//require('database.php');
require('database1.php');
?>

<?php
//require("database.php");
$user=$_SESSION['username'];
$t6="totalsale";

$sqltop="select medicine from $t6 where amount>=25";
$resulttop=mysql_query($sqltop) or die("kv".mysql_error());
$rowtop=mysql_fetch_array($resulttop);
echo($rowtop["medicine"]);
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