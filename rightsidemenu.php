<style>
#sidemenubloack1{
position:fixed;
width:160px;
top:1%;
right:0px;
margin-right:10px;
height:auto;
float:right;


-webkit-transition: all 0.3s ease-in-out; 
  -moz-transition: all 0.3s ease-in-out; 
  -o-transition: all 0.3s ease-in-out; 
  transition: all 0.1s ease-in-out;
  z-index:10000;
  
}

#addmedicine{
position:fixed;
right:00px;
top:0%;
width:550px;
height:100%;


 padding: 1em;  font-size: 1.2em; border: 1px solid #000;color: #333;
 background:url(photo/bg.jpg);
 display:none;
 z-index:200;
 box-shadow:-2px 6px 5px #333;
}
#searchmedicine{
position:fixed;
right:00px;
top:0%;
width:550px;
height:auto;
 padding: 1em;  font-size: 1.2em; border: 1px solid #000; background: #eee; color: #333;
 display:none;
 z-index:700;
  background:url(photo/bg.jpg);
  box-shadow:-2px 6px 5px #333;
}
#removemedicine
{
position:fixed;
right:00px;
top:0%;
width:550px;
height:auto;
 padding: 1em;  font-size: 1.2em; border: 1px solid #000; background: #eee; color: #333;
 display:none;
 z-index:400;
  background:url(photo/bg.jpg);
  box-shadow:-2px 6px 5px #333;
}
#updatemedicine{
position:fixed;
right:00px;
top:0%;
width:550px;
height:auto;
 padding: 1em;  font-size: 1.2em; border: 1px solid #000; background: #eee; color: #333;
 display:none;
  background:url(photo/bg12.png);
 z-index:500;
 box-shadow:-2px 6px 5px #333;
}
#sideclose1,#sideclose2,#sideclose3,#sideclose4{
cursor:pointer;
cursor:hands;
height:16px;
width:16px;
background:url(photo/delete.png);
}

/*#sidemenubloack:hover{

position:fixed;
width:212px;
top:1%;
left:0px;

}*/


</style>



<script>
$(function() {
		$( "#addmedicine1" ).click(function() {
			$( "#addmedicine" ).show("fast");
			$("#searchmedicine").hide("fast");
						$("#updatemedicine").hide("fast");
									$("#removemedicine").hide("fast");
			return false;
		});
$( "#searchmedicine1" ).click(function() {
			$( "#searchmedicine" ).show("fast");
			$("#addmedicine").hide("fast");
						$("#updatemedicine").hide("fast");
									$("#removemedicine").hide("fast");
			return false;
		});
		$( "#updatemedicine1" ).click(function() {
			$( "#updatemedicine" ).show("fast");
			$("#searchmedicine").hide("fast");
						$("#addmedicine").hide("fast");
									$("#removemedicine").hide("fast");
			return false;
		});
		
		$( "#removemedicine1" ).click(function() {
			$( "#removemedicine" ).show("fast");
			
			$("#searchmedicine").hide("fast");
						$("#updatemedicine").hide("fast");
									$("#addmedicine").hide("fast");
			return false;
		});
		
		$( "#sideclose1" ).click(function() {
			
			$("#addmedicine").hide("slow");
						
			return false;
		});
		$( "#sideclose2" ).click(function() {
			
			$("#searchmedicine").hide("slow");
						
			return false;
		});
		$( "#sideclose3" ).click(function() {
			
			$("#updatemedicine").hide("slow");
						
			return false;
		});
		$( "#sideclose4" ).click(function() {
			
			$("#removemedicine").hide("slow");
						
			return false;
		});
		$( "#datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
		$( "#datepicker1" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
		
		function callback() {
			setTimeout(function() {
				$( "#effect" ).removeClass( "newClass" );
			}, 1500 );
		}
	});
	
	</script>
<div id="sidemenubloack1">
<div style="width:170px;background:url(photo/bg.jpg);">
<div id="sidemenu">
<li type="none" id="addmedicine1">Add Medicine</li>
<li type="none" id="searchmedicine1">Search</li>
<li type="none" id="updatemedicine1">Update Medicine</li>
<li type="none" id="removemedicine1"><a href="totalsale2.php">Remove Medicine</a></li>



</div>
</div>

</div>
<div id="addmedicine">

<div id="sideclose1"></div>

<font face="Arial, Helvetica, sans-serif" color="white" size="+2"><b>Add Medicine</b></font><hr>
<form name="addmedicine" method="get" action="pur2.php">
<table style="background:none; color:white; font-family:Arial, Helvetica, sans-serif;">
<tr><td style="padding-bottom:7px;">Medicine Name</td><td valign="top"><input type="text" name="mname" onKeyUp="showmessage(this.value)" style="border:none; background:#555; height:33PX;COLOR:WHITE;" required></td></tr>
<tr><td style="padding-bottom:7px;">Company Name</td><td valign="top"><input type="text" name="cname" style="border:none; background:#555; height:33PX;COLOR:WHITE;"></td></tr>
<tr><td style="padding-bottom:7px;">Type Of Medicine</td><td valign="top">
<select name="mtype" style="border:none; background:#555; height:33PX;COLOR:WHITE; width:200px;">
<option>Tablet</option>
<option>Capsules</option>
<option>Injection</option>
<option>Syrups</option>
<option>Tubes</option>
<option>Powder</option>
<option>Vitamin And Mineral</option>
<option>Food Supplement</option>
<option>Other</option>
</select>



</td></tr>
<tr><td style="padding-bottom:7px;">Rate Per Unit</td><td valign="top"><input type="text" name="rate" style="border:none; background:#555; height:33PX;COLOR:WHITE;" required></td></tr>
<tr><td style="padding-bottom:7px;">Medicine mg/ml</td><td valign="top"><input type="text" name="mg/ml" style="border:none; background:#555; height:33PX;COLOR:WHITE;" required></td></tr>
<tr><td style="padding-bottom:7px;">Medicine Quantity</td><td valign="top"><input type="text" name="quantity"style="border:none; background:#555; height:33PX;COLOR:WHITE;"  required></td></tr>
<tr><td style="padding-bottom:7px;">Date Of MFG</td><td valign="top"><input type="text" name="mfg" id="datepicker" style="border:none; background:#555; height:33PX;COLOR:WHITE;" required></td></tr>
<tr><td style="padding-bottom:7px;">Date Of EXP</td><td valign="top"><input type="text" name="exp" id="datepicker1"style="border:none; background:#555; height:33PX;COLOR:WHITE;"  required></td></tr>
<tr><td style="padding-bottom:7px"></td><td style="padding-bottom:7px;">

<input type="submit" name="submit" value="Submit" style="background:#fff; color:#333; width:80px; height:35px; float:left;font-family: Arial, Helvetica, sans-serif; font-size:18px;" onClick="javascript:addmedicinef()">






 <input type="reset" name="Reset" style="background:#fff; color:#333; width:80px; height:35px; float:right;"></td></tr>
</table>

</form>
<div id="receive"></div>
</div>




















<div id="searchmedicine">
<div id="sideclose2"></div>
<font face="Arial, Helvetica, sans-serif" color="white" size="+2"><b>Search Medicine</b></font><hr>
<form name="searchpage" action="" method="get">
<input type="search" name="search" style="height:33px; width:250px; float:left; margin-right:3px;" onkeyup="click1(this.value)"> <a id="link" href="javascript:click1()" title="search"  style="text-decoration:none"><input type="button" name="searchmedicine" value="Search"style="background:#fff; color:#333; width:80px; height:35px; float:left;font-family: Arial, Helvetica, sans-serif; font-size:18px; margin-left;5px;"/></a>
</form>
<div id="span"></div>
</div>




<div id="updatemedicine">
<div id="sideclose3"></div>

</div>
<div id="removemedicine">
<div id="sideclose4"></div>

</div>