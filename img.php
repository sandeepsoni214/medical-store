<?php
$m=md5(rand(0,999));
session_start();
$sec=substr($m,1,7);
$_SESSION["security1"]=$sec;

$w=100;
$h=20;
$image=ImageCreate($w,$h);
$white=ImageColorAllocate($image,255,255,255);
$black=ImageColorAllocate($image,0,0,0);
$gray=ImageColorAllocate($image,204,204,204);
ImageFill($image,0,0,$black);
ImageString($image,3,30,3,$sec,$white);
ImageRectangle($image,0,0,$w-1,$h-1,$gray);

imageline($image,0,$w/2,$w/2,$h,$gray);
header("Content-Type:image/jpeg");
ImageJpeg($image);
ImageDestroy($image);
?>