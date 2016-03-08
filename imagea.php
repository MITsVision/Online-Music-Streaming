<?php



echo "<td width=\"50%\" align=\"center\"><font size=5 color=green font-weight=bold></font>
<table border=1px height=\"100%\" width=\"100%\" cellpadding=\"2px\" cellspacing=\"2px\">";

$handle=opendir("./Images");
while($file=readdir($handle))
{
	if(!($file=='.' || $file=='..'))
	{
	 echo " <img src='./Images/$file' width='200px' height='150px'>&nbsp &nbsp";
	 	}
}

?>