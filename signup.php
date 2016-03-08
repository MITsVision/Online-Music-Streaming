<html>
<head>
<title>SIGN-UP</title>
</head>
<body bgcolor=#ffffaa>
<link href="css.css" type="text/stylesheet" rel="stylesheet" />
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
	  <a class="five" href="login.php" a link="blue" vlink="blue"> <h3>Login</h3></a></font></th>
	  <th></th>
	  <th><font color="blue" align="right"><a class="five" href="home1.php" a link="blue" vlink="blue"><h3>Home</h3></a></font></th>
 </tr>
 </table>
<div style="background-color :#5500; color=white; margin=0px; padding=0px">
<form action="" method="POST" >
<table border=2 bordercolor=#55aa11 cellspacing=2 cellpadding=5 align=center height="80%" width="35%">
<tr><td colspan=2><center><h2>Sign Up</h2></center></td>
<tr><td>First name</td><td><input type=text name=name1 placeholder="your first name"></td>
</tr>
<tr><td>Last name</td><td><input type=text name=name2 placeholder="your last name"></td>
</tr>
<tr><td>Password</td><td><input type=password name=name3 placeholder="your password"></td>
</tr>
</tr>
<tr><td>Re-Password</td><td><input type=password name=name4 placeholder="your password"></td>
</tr>
<tr><td>D O B</td><td><input type=date name=name5></td>
</tr>
<tr><td>Email</td><td><input type=Email name=name6 placeholder="example@gmail.com"></td>
</tr>
<tr><td>Gender</td><td><h3><input type=radio name=name value=Male>male<br>
                    <input type=radio name=name value=Female>Female</td></h3>
</tr>
<center>
<tr><td colspan=2 align=center>
<input type=submit name=sub value=SUBMIT>
&nbsp   &nbsp
<input type=reset name=Refresh value=RESET>
</td></tr>
</center>
</table>
</form>
</div>

<?php
if(isset($_POST['sub']))
{
$nam=$_POST['name1']." ".$_POST['name2'];
$pwd1=$_POST['name3'];
$pwd2=$_POST['name4'];
$dob=$_POST['name5'];
$eml=$_POST['name6'];
$gen=$_POST['name'];

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"pr");
$qury="insert into prt values('$nam','$pwd1','$dob','$eml','$gen')";
$sub=mysqli_query($link,$qury);
if($sub)
	echo "<font size=5 align=center style='color:#9900CC'>Now You Become A Member...Login First</font> ";
else
	echo "Failed......";
}
?>
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