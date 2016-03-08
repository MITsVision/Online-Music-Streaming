<html>
<head></head>
<body>
<form name="frm" method="POST">
<input type="text" name="txt" />
<input type="submit" name="bt" value="submit" />
</form>
<?php
if(isset($_REQUEST['bt']))
{
$handle=opendir("./Video/hindi");
while($file=readdir($handle))
{
	if(!($file=='.' || $file=='..'))
	{
		if($file==($_REQUEST['txt'].".mp4"))
		{
	 echo "<video width='440px' controls>
	    <source src='$file' type='video/mp4'></video>"."<br>";
	 echo "<a style=\"text-decoration:none\" href='./Video/hindi/$file'><h2>play<//h2></a>"."<br>";

		}
		else
			continue;
	}
	
}
}
?>
</body>
</html>