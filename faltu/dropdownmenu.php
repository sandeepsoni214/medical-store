<html>
<head>
<style>
ul
{
float:left;			
width:50px;
}
ul li
{
display:none;
}
ul:hover
{
color:blue;
}

ul:hover li
{
display:block;
border:1px solid;
border-color:yellow;
height:35px;
width:150px;
color:white;
background:url("photo/list.png");
}

a
{
text-decoration:underline;
color:black;
font-family:sans-serif;
}

#upperclass ul
{
display:none;
}
#upperclass:hover ul
{
float:right; 
display:block;
}
div
{
border:1px solid;
}

</style>
</head>
<body style="background-color:skyblue;">
<div>
<ol>

<ul>menu
<li><a href="http://google.com/">sandeep</a></li>
<li>sandeep</li>
<li>sandeep</li>
<li id="upperclass">sandeep=><ul class="childclass">
<li>123</li>
<li>246</li>
<li>369</li>
</ul></li>
</ul>
</ol>
dkfjklsfljkslfsl;kj
</div>
<br><br><br>
<div style="position:fixed;top:15%;">
<font face=sans-serif color=orange size=3>sandeep soni kumar
</div>
</body>
</html>