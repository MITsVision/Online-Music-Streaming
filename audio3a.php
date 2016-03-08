<?php
//bhojpuri songs
$path=$_SERVER['DOCUMENT_ROOT']."project/Songs/bhojpuri/";
//require("audownload.php?nm=$path");
$fullpath=$path.$_GET['name'];

if($fd=fopen($fullpath,"r"))
{
$fsize=filesize($fullpath);
$path_parts=pathinfo($fullpath);
$ext=strtolower($path_parts["extension"]);

switch($ext)
{
case "jpg":
header("content-type:application/image");
header("content-disposition:attachment;filename=\"".$path_parts["basename"]."\"");
break;
case "pdf":
header("content-type:application/pdf");
header("content-disposition:attachment;filename=\"".$path_parts["basename"]."\"");
break;
default:
header("content-type:application/octet-stream");
header("content-disposition:attachment;filename=\"".$path_parts["basename"]."\"");
break;
}

header("content-length:$fsize");
header("cache-control:private");
while(!feof($fd))
{
	$buffer=fread($fd,$fsize);
	echo $buffer;
}
}
fclose($fd)
?>