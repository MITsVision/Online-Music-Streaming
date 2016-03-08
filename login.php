<html>
<title>User-Login</title>
<link href="css.css" type="text/stylesheet" rel="stylesheet" />
</head>
<body bgcolor=#ffffaa>
<div style="background-color:grey; color:white;padding:0px;padding-bottom:1px;cellspacing=2px">
<font color=#11ccff face=new-roman>
<img class="one" src="Images/mu5.jpg" height="99" width="120" />
<h1>OceanOfMusic.Com</font><font color=#faaa00 face="informal roman">
   <br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <i>new way of entertainment</i><br></h1>
</font>
</div>
<table border="0px" bgcolor="#00ff55" cellspacing="0px" cellpadding="0px" height=35 width="100%">
  <tr> 
      <th><font color="blue" align="left"> 
	  <a class="five" href="signup.php" a link="blue" vlink="blue"> <h3>Signup </h3></a></font></th>
	  <th></th>
	  <th><font color="blue" align="right"><a class="five" href="home1.php" a link="blue" vlink="blue"><h3>Home</h3></a></font></th>
	 
 </tr>
 </table>
<marquee scrollamount=15 behavior=alternate direction=left>
<font color=red size=5> PLEASE LOGIN FIRST</font></marquee>
<form method=POST>
<fieldset>
   <legend>Login</legend>
   <table border=4 cellspacing=2 cellpadding=2 align=center bordercolor=aqua>
   <tr><td>User Name</td><td><input type=text name=txt1 required></td></tr>
   <tr><td>Password</td><td><input type=password name=txt2 required></td></tr>
   <tr><td colspan=2 align=center><input type=submit name=subm value=SUBMIT></td></tr>
   </table>
</fieldset>
</form>

<?php

if(isset($_POST['subm']))
{
	$id=$_POST['txt1'];
	$pwd=$_POST['txt2'];

	$link=mysqli_connect("localhost","root","","pr");
	$qry="select U_name,U_pwd from prt";
	$result=mysqli_query($link,$qry);
	$count=0;
	while($res=mysqli_fetch_row($result))
	{   
		if(strcmp($id,$res[0])==0 && $pwd==$res[1])
		{
		  header("location:home.php");
		}
		else
			echo "<font size=5 style='color:#9900CC'> Please Check Your User Name Or Id";
	}

}	
?>
<hr size="1.5px" color=#998800 />
<hr size="1.5px" color=#998800 />
<center>
<div id="icon.png" style="position:absolute;overflow:hidden;left:79px;top:79px;width:34px;height:34px align:right"></div>

<a class="five" href="https://www.facebook.com/rishavrajput.984">
<img src="images/icon.png" alt title border="0" width="34" height="34"></a> |
<div id="download.png" style="position:absolute;overflow:hidden;left:79px;top:79px;width:34px;height:34px align:right"></div>
<a class="five" href="https://twitter.com/rishav2727">
<img src="images/download.png" alt title border="0" width="34" height="34"> </a>| 
<div id="google.png" style="position:absolute;overflow:hidden;left:79px;top:79px;width:34px;height:34px align:right"></div>
<a class="five" href="https://www.facebook.com/rishavrajput.984">
<img src="images/google.png" alt title border="0" width="34" height="34"></a> <a class="five" href=""></a><p>
&copy OceanOfMusic.com
<tr><td>

</center>

</a>
</a>
</a>
</body>
</html>