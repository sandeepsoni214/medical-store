
function bill(name,bills,amount)
{

  //document.getElementById("slip").innerHTML="";
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
document.getElementById("done").innerHTML=xmlhttp.responseText;

    }
  }
xmlhttp.open("GET","bills.php?name="+name+"&bills="+bills+"$amount="+amount);
xmlhttp.send();
}
function go(mname,quantity)
{

  //document.getElementById("slip").innerHTML="";
  
  
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
document.getElementById("stbody").innerHTML=document.getElementById("stbody").innerHTML+xmlhttp.responseText;

    }
  }
xmlhttp.open("GET","med2.1.php?mname="+mname+"&quantity="+quantity);
xmlhttp.send();
}
function showtopsale()
{

  document.getElementById("showdetail").innerHTML="";
  
  
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("showdetail").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","topsale.php");
xmlhttp.send();
}

function showtodaysale()
{

  document.getElementById("showdetail").innerHTML="";
  
  
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("showdetail").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","todaysale.php");
xmlhttp.send();
}

function show100sale()
{

  document.getElementById("showdetail").innerHTML="";
  
  
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("showdetail").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","100sale.php");
xmlhttp.send();
}
function showmonthsale()
{

  document.getElementById("showdetail").innerHTML="";
  
  
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("showdetail").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","lastmonthsale.php");
xmlhttp.send();
}
function printSelection(node,name){

  var content=node.innerHTML
  
  var pwin=window.open('','print_content','width=100,height=100');

  pwin.document.open();
  pwin.document.write('<html><body onload="window.print()"><Label>Buyer Name</label>&nbsp;<label style="margin-left:30px;">'+name+'</label><br>'+content+'</body></html>');
  pwin.document.close();
 
  setTimeout(function(){pwin.close();},8000);

}

function showmedicine(str)
{
if (str=="")
  {
  document.getElementById("span").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("span").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getmedicine.php?q="+str,true);
xmlhttp.send();
}
//search
function click()
{
//function showdetails(str)
//{
var str=document.searchpage.search.value;
if (str=="")
  {
  document.getElementById("span").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("span").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getdetails.php?q="+str,true);
xmlhttp.send();
//}
}
function click1(str)
{
//function showdetails(str)
//{
var str=document.searchpage.search.value;
if (str=="")
  {
  document.getElementById("span").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("span").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","instantsearch.php?q="+str,true);
xmlhttp.send();
//}
}






function password(str)
{
if (str=="")
  {
  document.getElementById("pass").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("pass").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","password.php?q="+str,true);
xmlhttp.send();
}
function earning()
{
//open("http://localhost/newformat/earning.php","earning","scrollbar=yes,resizable=no");
location.href="earning.php"
}

function digital_clock()
{
var date=new Date()
var hours=date.getHours()
var minutes=date.getMinutes()
var seconds=date.getSeconds()
/*
*Calls the addZero function to add a zero infront of minutes or seconds if they are below 10, i.e.
*to make it look like 12:07:09, not 12:7:9
*/
minutes=addZero(minutes);
seconds=addZero(seconds);
/*
*Puts hours in the element with the hours id,
*minutes in the element with the minutes id,
*and seconds in the element with the seconds id
*/
document.getElementById('hours').innerHTML = hours;
document.getElementById('minutes').innerHTML = minutes;
document.getElementById('seconds').innerHTML = seconds;
/*
*Runs every half second
*/
setTimeout('digital_clock()', 500)
}
/*
Adds a zero infront of minutes or seconds
*/
function addZero(min_or_sec)
{
if (min_or_sec < 10)
{min_or_sec="0" + min_or_sec}
return min_or_sec
}



function addmedicinef()
{
  //document.getElementById("slip").innerHTML="";
  var mname1=document.formmain.mname.value;
  var cname1=document.formmain.cname.value;
  var mtype1=document.formmain.mtype.value;
  var rate1=document.formmain.rate.value;
  var mg1=document.formmain.mg.value;
  var quantity1=document.formmain.mg.value;
  var mfg1=document.formmain.mfg.value;
  var exp1=document.formmain.exp2.value;
  var quantity1=document.formmain.quantity.value; 
  
  
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
document.getElementById("receive").innerHTML=document.getElementById("receive").innerHTML+xmlhttp.responseText;
    }
  }
 /*xmlhttp.open("GET","text.html"); */
xmlhttp.open("GET","pur.php?mname="+mname1+"&quantity="+quantity1+"$cname="+cname1+"&mtype="+mtype1+"&rate="+rate1+"&mg/ml="+mg1+"&mfg="+mfg1+"&exp="+exp1+"&submit=1");
xmlhttp.send();
}