<html>
<script>
function clock()
{
var date=new Date();
var hour=date.getHours();
var minute=date.getMinutes();
var second=date.getSeconds();



document.getElementById("hours").innerHTML=hour;
document.getElementById("minutes").innerHTML=minute;
document.getElementById("seconds").innerHTML=second;
setTimeout('clock()',500);
}
</script>
<style>
li{
float:left;
type:none;
}
</style>
<body onload="clock();">
<li type="none" id="hours"></li>:<li id="minutes"></li>:<li id="seconds"></li>
<form>
<input type="text" autocomplete="on">
</form>
</body>
</html>
