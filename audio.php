<html>
<head>
<title> HOME</title>
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
<div>
<table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color:#606060" width="100%">
<tr>
<td class="savan" ><a class="five" href="http://localhost/project/home.php">Home</a></td>
<td class="savan" ><a class="five" style=\"text-decoration:none\" href="http://localhost/project/home2.php">Video</a></td>
<td class="savan" >Audio</td>
<td class="savan" ><a class="five" href="http://localhost/project/wall.php">Wallpapers</a></td>
<td class="savan" ><a class="five" href="http://localhost/project/about.php">About</a></td>
</tr>
</table>
</div>

<div>
 <h4><marquee scrollamount=15 behavior=alternate direction=right>
<font color=#8811ff size=5>Welcome To New Way Entertainment</font></marquee></h4>
</div>

<table cellpadding="0px" cellspacing="0px" width="100%" >
<tr>
<td>

<table>
<tr>
<td>

<table width="270px" cellpadding="2px" cellspacing="10px" bgcolor="#fffaff">
<tr>
<th class="left" align="center">Audio Songs</th>
</tr>
<tr>
<td>&nbsp &nbsp &#9674 
<a class="five" target="_top" href="http://localhost/project/audio2.php" style='font-weight:bold;'>New English Songs</a>
</td>
</tr>
<tr><td height=1 bgcolor=green>
</td>
</tr>
<tr><td>&nbsp &nbsp &#9674 
<a class="five" target="_top" href="http://localhost/project/audio.php" style='font-weight:bold;'>New Hindi Songs</a>
</td></tr>
<tr><td height=1 bgcolor=green>
</td>
</tr>
<tr><td>&nbsp &nbsp &#9674 
<a class="five" target="_top" href="http://localhost/project/audio.php" style='font-weight:bold;'>Hindi classical songs</a>
</td></tr>
<tr><td height=1 bgcolor=green>
</td>
</tr>
<tr><td>&nbsp &nbsp &#9674 
<a class="five" target="_top" href="http://localhost/project/audio3.php" style='font-weight:bold;'>New Bhojpuri Songs</a>
</td></tr>
<tr><td height=1 bgcolor=green>
</td>
</tr>
<tr><td>&nbsp &nbsp &#9674
<a class="five" target="_top" href="http://localhost/project/audio4.php" style='font-weight:bold;'>Old Hindi Songs</a>
</td></tr>
<tr><td height=1 bgcolor=green>
</td>
</tr>
<tr><td>&nbsp &nbsp &#9674
<a class="five" target="_top" href="http://localhost/project/audio7.php" style='font-weight:bold;'>Punjabi Songs</a>
</td></tr>
<tr><td height=1 bgcolor=green>
</td>
</tr>
<tr><td>&nbsp &nbsp &#9674
<a class="five" target="_top" href="http://localhost/project/audio5.php" style='font-weight:bold;'>Indian Pop Songs</a>
</td></tr>
</table>

</td>

<tr>
<td>&nbsp
<img class="set" src="./Images/pr1.JPEG" alt="image not found">
</td>
</tr>
<tr>

<td>
&nbsp
<img class="set" src="./Images/pr2.JPEG" alt="image not found">
</td>
</tr>
<tr>
<td>
&nbsp
<img class="set" src="./Images/beauty.JPG" alt="image not found">
</td>
</tr>
</td>
</tr>
<tr>
</tr>
</table>
</td>

<td width="50%" align="center"><font size=5 color=green font-weight=bold>New Hindi Songs</font>
<table height="100%" width="100%" cellpadding="2px" cellspacing="2px">

<?php
$handle=opendir("./Songs/hindi");
while($file=readdir($handle))
{
	if(!($file=='.' || $file=='..'))
	{
	 echo "<tr><td class='aud'> $file &nbsp </td><td class='aud' width='15%'><a class='five' href='./Songs/hindi/$file' target='_blanck'>play</td></a>&nbsp
	 <td class='aud' width='15%'><a class='five' href='audio1.php?name=$file'>download</td></a></tr>";
	 	}
}
?>

</table>
</td>

<td width="25%"></td>


</tr>
</table>
<br /> <br /> <p>
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
