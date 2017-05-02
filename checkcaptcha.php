<?php
session_start();
$a=$_GET["a"];

if($_SESSION["security1"]==$a)
{
}
else
{
echo "did not match";
}
?> 