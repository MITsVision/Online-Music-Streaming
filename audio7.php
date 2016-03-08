<?php
//punjabi songs

include("auup.php");

echo "<td width=\"50%\" align=\"center\"><font size=5 color=green font-weight=bold>Punjabi Songs</font>
<table border=1px height=\"100%\" width=\"100%\" cellpadding=\"2px\" cellspacing=\"2px\">";

$handle=opendir("./Songs/punjabi");
while($file=readdir($handle))
{
	if(!($file=='.' || $file=='..'))
	{
	 echo "<tr><td class='aud'> $file &nbsp </td><td class='aud' width='15%'><a class='five' href='./Songs/punjabi/$file'>play</td></a>&nbsp
	 <td class='aud' width='15%'><a class='five' href='audio7a.php?name=$file'>download</td></a></tr>";
	 	}
}

include("audown.php");
?>