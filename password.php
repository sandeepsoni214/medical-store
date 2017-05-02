<?php
$p=$_GET["q"];
$l=strlen($p);
if($l<=5)
{
echo("<h5 style='background:red;width:50px;color:blue;'>LOW</h5>");
}
elseif(($l>=6)&&($l<=10))
{
echo("<h5 style='background:yellow;width:50px;color:blue;'>MEDIUM</h5>");
}
else if($l>10)
{
echo("<h5 style='background:green;width:50px;color:blue;'>HIGH</h5>");
}

?>