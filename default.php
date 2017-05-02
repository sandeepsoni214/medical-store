<?php
$msg5="";
$msgover="";
session_start();
$_SESSION['amount']=0;
if(isset($_SESSION['is_logged_in']))
{
require('database.php');
require('database1.php');
?>


<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Autocomplete - Default functionality</title>
	<link rel="stylesheet" href="themes/base/jquery.ui.all.css">
	<script src="jquery-1.9.1.js"></script>
	<script src="ui/jquery.ui.core.js"></script>
	<script src="ui/jquery.ui.widget.js"></script>
	<script src="ui/jquery.ui.position.js"></script>
	<script src="ui/jquery.ui.menu.js"></script>
	<script src="ui/jquery.ui.autocomplete.js"></script>
	<link rel="stylesheet" href="demos.css">
	<script>
	$(function() {
		var availableTags = [<?php
$sql="select * from medicineentry";
$result=mysql_query($sql) or die("sql".mysql_error());
while($row=mysql_fetch_array($result))
{
echo('"'.$row['medicine'].'",');
}
?>];
		
		$( "#tags" ).autocomplete({
			source: availableTags
		});
	});
	</script>
	
	<script>
var sum = 0;
var bills ="";

function total()
{
var tds = document.getElementById('stbody').getElementsByTagName('td');
            
            for(var i = 0; i < tds.length; i++) 
			{ 
			if(tds[i].className == 'amount')
			{ sum += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
			}     
			}     
			//document.getElementById('countit').innerHTML += '<tr><td>' + sum + '</td><td>total</td></tr>';
document.getElementById('span').innerHTML=sum;
}

function recordlist()
{
var tds = document.getElementById('stbody').getElementsByTagName('td');
            
            for(var i = 0; i < tds.length; i ++) 
			{ 
			if(tds[i].className == 'bill')
			{ bills= bills+tds[i].innerHTML;
			}     
			}     
			//document.getElementById('countit').innerHTML += '<tr><td>' + sum + '</td><td>total</td></tr>';
document.getElementById('span1').innerHTML=bills;

}
</script>





	


<script src="script/trtdwarning.js"></script>
	
</head>
<body>
<div id="main">
<div id="logo">
</div>
<div id="menu">
</div>
<div id="content">
</div>
<div id="footer">
</div>
</div>
<div class="ui-widget">
	<label for="tags">Tags: </label>
	<input id="tags">
</div>

<div class="demo-description">
<p>The Autocomplete widgets provides suggestions while you type into the field. Here the suggestions are tags for programming languages, give "ja" (for Java or JavaScript) a try.</p>
<p>The datasource is a simple JavaScript array, provided to the widget using the source-option.</p>
</div>
</body>
</html>
<?php
if(isset($_POST['logout']))
{

unset($_SESSION['is_logged_in']);
unset($_SESSION['userId']);




$_SESSION=array();
session_destroy();
header('location:login.php');
}
}
else
{

header('Location:login.php');
}
?>
