<html>
<head>
<style>

#circle
{
border-radius:60% 50% 50% 50%;  
width:300px;
height:300px;
}

</style>
</head>
<body align="center" bgcolor=#00a3c3>
<?php
$handle=opendir("./Images");
while($file=readdir($handle))
{
	if(!($file=='.' || $file=='..'))
	{
	 echo " <img src='./Images/$file' width='200px' height='150px' id='circle'>&nbsp &nbsp";
	 	}
}

?>
</body>
</html>